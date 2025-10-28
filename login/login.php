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
        'email' => $pick(['email','email','email','mail']),
        'password' => $pick(['password_hash','password','password_user']),
        'role_id' => $pick(['role_id','id_role']),
        'firstname' => $pick(['firstname_user','first_name','prenom']),
        'lastname' => $pick(['name_user','last_name','nom'])
        
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
                                $rstmt = $pdo->prepare("SELECT nom_role FROM roles WHERE id_role = ? LIMIT 1");
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
                                    header("Location: " . BASE_URL . "admin/admin2.php");
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
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>Se connecter</title>
    <link href="<?php echo BASE_URL; ?>assets/img/lg.jpg" rel="icon">
    <link href="<?php echo BASE_URL; ?>assets/css/styles.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">
<div id="layoutAuthentication">
  <div id="layoutAuthentication_content">
    <main>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="card shadow-lg border-0 rounded-lg mt-5" style="height:100%;">
              <div class="card-header text-center">
                <a class="navbar-img img-fluid" href="#"><img src="<?php echo BASE_URL; ?>assets/img/lg.jpg" alt="logo" style="height:70px;"></a>
              </div>
              <div class="card-body">
                <?php if (!empty($errors)): ?>
                  <div class="alert alert-danger">
                    <ul class="mb-0"><?php foreach($errors as $e): ?><li><?php echo htmlspecialchars($e); ?></li><?php endforeach; ?></ul>
                  </div>
                <?php endif; ?>
                <form method="post" novalidate>
                  <div class=" form-floating input-group mb-3">
                     <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                    <input name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" class="form-control" id="inputEmail" type="email" placeholder="name@example.com" required />
                  </div>
                 
                   <div class="form-floating input-group mb-3">
                    <span class="input-group-text"><i class="bx bx-key"></i></span>
                    <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Mot de passe" required />
                    <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
                      <i class="bx bx-hide" id="toggleIcon"></i>
                    </span>
                  </div>
                  
                  <div class="form-check mb-3">
                    <input class="form-check-input" id="inputRememberPassword" type="checkbox" name="remember" value="1" />
                    <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                  </div>
                 
                  <div class="container-login100-form-btn ">
						<button class="col-xl-8 col-md-12 shadow login100-form-btn">
							SE CONNECTER
						</button>

                        
					</div>
                    <div class="  text-center align-items-center mt-4 mb-0">
                    <a class="small" href="<?php echo BASE_URL; ?>login/password.php">Mot de passe oublié?</a>
                    </div>
                </form>
              </div>
              <div class="card-footer text-center py-3">
                <div class="small"><a href="<?php echo BASE_URL; ?>login/register.php">Créer un nouveau compte</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
<script>
                (function(){
                  var toggle = document.getElementById('togglePassword');
                  if (!toggle) return;
                  toggle.addEventListener('click', function () {
                    var pw = document.getElementById('inputPassword');
                    var icon = document.getElementById('toggleIcon');
                    if (!pw) return;
                    if (pw.type === 'password') {
                      pw.type = 'text';
                      icon.classList.remove('bx-hide'); icon.classList.add('bx-show');
                    } else {
                      pw.type = 'password';
                      icon.classList.remove('bx-show'); icon.classList.add('bx-hide');
                    }
                  });
                })();
                </script>
