<?php

require_once __DIR__ . "/../Config.php";
if (session_status() === PHP_SESSION_NONE) session_start();

// helper : détecte colonnes principales dans users
function detectUserCols(PDO $pdo) {
    try {
        $cols = $pdo->query("SHOW COLUMNS FROM users")->fetchAll(PDO::FETCH_COLUMN);
    } catch (Exception $e) {
        return null;
    }
    $pick = function($candidates) use ($cols) {
        foreach ($candidates as $c) if (in_array($c, $cols)) return $c;
        return null;
    };
    return [
        'id' => $pick(['id','id_user','user_id']),
        'email' => $pick(['email','email_user','user_email','mail']),
        'password' => $pick(['password_hash','password','password_user']),
        'role_id' => $pick(['role_id','id_role']),
        'firstname' => $pick(['firstname_user','first_name','prenom']),
        'lastname' => $pick(['lastname_user','last_name','nom']),
        'name' => $pick(['name','name_user','full_name'])
    ];
}

$errors = [];
// POST handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($pdo) || !$pdo) {
        $errors[] = "Erreur base de données. Contactez l'administrateur.";
    } else {
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if ($email === '' || $password === '') {
            $errors[] = "Email et mot de passe requis.";
        } else {
            $uc = detectUserCols($pdo);
            if (!$uc || !$uc['email'] || !$uc['password']) {
                $errors[] = "Schéma users incompatible (colonnes email/password introuvables).";
            } else {
                try {
                    $sql = "SELECT * FROM users WHERE `" . $uc['email'] . "` = ? LIMIT 1";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$email]);
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    if (!$user) {
                        $errors[] = "Identifiants invalides.";
                    } else {
                        $hash = $user[$uc['password']] ?? '';
                        if (empty($hash) || !password_verify($password, $hash)) {
                            $errors[] = "Identifiants invalides.";
                        } else {
                            // trouver nom du rôle
                            $roleName = null;
                            $roleId = $uc['role_id'] ? ($user[$uc['role_id']] ?? null) : null;
                            if ($roleId) {
                                // essayer colonnes standard puis fallback
                                $rstmt = $pdo->prepare("SELECT name FROM roles WHERE id = ? LIMIT 1");
                                $rstmt->execute([$roleId]);
                                $roleName = $rstmt->fetchColumn();
                                if (!$roleName) {
                                    $r2 = $pdo->prepare("SELECT nom_role FROM roles WHERE id_role = ? LIMIT 1");
                                    $r2->execute([$roleId]);
                                    $roleName = $r2->fetchColumn();
                                }
                            }
                            // normalize
                            $roleName = $roleName ? strtolower($roleName) : null;

                            if (!in_array($roleName, ['secretaire','media','full'])) {
                                $errors[] = "Accès refusé : compte non administrateur.";
                            } else {
                                // login success
                                $_SESSION['user_id'] = (int)($user[$uc['id']] ?? 0);
                                $_SESSION['role'] = $roleName;
                                $_SESSION['user_name'] = $user[$uc['name']] ?? (($user[$uc['firstname']] ?? '') . ' ' . ($user[$uc['lastname']] ?? ''));

                                // redirect based on role
                                if ($roleName === 'full') {
                                    header("Location: " . BASE_URL . "login/adminFull.php");
                                    exit;
                                } elseif ($roleName === 'media') {
                                    header("Location: " . BASE_URL . "admin/adminMedia.php");
                                    exit;
                                } elseif ($roleName === 'secretaire') {
                                    header("Location: " . BASE_URL . "admin/adminSecretaire.php");
                                    exit;
                                } else {
                                    header("Location: " . BASE_URL);
                                    exit;
                                }
                            }
                        }
                    }
                } catch (Exception $e) {
                    $errors[] = "Erreur serveur : " . $e->getMessage();
                }
            }
        }
    }
}
?>