<?php
// ...existing code...

require_once __DIR__ . "/../Config.php";


$errors = [];
$success = null;

// helper pour récupérer départements/roles en essayant plusieurs schémas
function fetchSafe(PDO $pdo, array $queries) {
    foreach ($queries as $q) {
        try {
            $res = $pdo->query($q);
            if ($res) return $res->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) { /* try next */ }
    }
    return [];
}

// vérif connexion PDO
if (!isset($pdo) || !$pdo) {
    die("Erreur : connexion à la base de données non initialisée. Vérifiez Config.php.");
}

// récupérer départements (compatibilité noms colonnes)
$departments = fetchSafe($pdo, [
    "SELECT id, name FROM departments ORDER BY name",
    "SELECT id_department AS id, nom_department AS name FROM departments ORDER BY nom_department"
]);

// récupérer roles admin (compatibilité noms colonnes)
$rolesRaw = fetchSafe($pdo, [
    "SELECT id, name FROM roles WHERE name IN ('secretaire','media','full')",
    "SELECT id_role AS id_role, nom_role AS nom_role FROM roles WHERE nom_role IN ('secretaire','media','full')"
]);
// transformer en paire id=>name
$adminRoles = [];
foreach ($rolesRaw as $r) { $adminRoles[(int)$r['id_role']] = $r['nom_role']; }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first = trim($_POST['first_name'] ?? '');
    $last  = trim($_POST['last_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $role_name = $_POST['role'] ?? '';
    $password = $_POST['password'] ?? '';
    $password_confirm = $_POST['password_confirm'] ?? '';
    $phone = trim($_POST['phone'] ?? '');
    $department_id = !empty($_POST['department_id']) ? (int)$_POST['department_id'] : null;

    if ($first === '') $errors[] = "Prénom requis.";
    if ($last === '') $errors[] = "Nom requis.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email invalide.";
    if (!in_array($role_name, ['secretaire','media','full'])) $errors[] = "Rôle invalide.";
    if ($password === '' || $password_confirm === '') $errors[] = "Mot de passe requis.";
    if ($password !== $password_confirm) $errors[] = "Les mots de passe ne correspondent pas.";
    if ($phone === '') $errors[] = "Numéro téléphone requis.";
    if (strlen($password) < 8) $errors[] = "Le mot de passe doit contenir au moins 8 caractères.";

    // vérifier unicité email (nom de colonne email attendu)
    try {
        $stmt = $pdo->prepare("SELECT id_user FROM users WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        if ($stmt->fetch()) $errors[] = "Un compte existe déjà avec cet email.";
    } catch (Exception $e) {
        $errors[] = "Erreur base de données : " . $e->getMessage();
    }

    if (empty($errors)) {
        // récupérer role_id depuis table roles (compatibilité)
        $role_id = null;
        try {
            $r = $pdo->prepare("SELECT id_role FROM roles WHERE nom_role = ? LIMIT 1");
            $r->execute([$role_name]);
            $role_id = $r->fetchColumn();
            if (!$role_id) {
                // fallback compat
                $r2 = $pdo->prepare("SELECT id_role FROM roles WHERE nom_role = ? LIMIT 1");
                $r2->execute([$role_name]);
                $role_id = $r2->fetchColumn();
            }
        } catch (Exception $e) { $role_id = null; }

        if (!$role_id) $role_id = 4; // fallback full

        $hash = password_hash($password, PASSWORD_BCRYPT);

        // insertion : colonnes standard (name,email,password_hash,role_id,department_id,phone,...)
        try {
            $insert = $pdo->prepare("INSERT INTO users (firstname_user,name_user,email,password_hash,role_id,department_id,phone,created_at,active) VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), 1)");
            $insert->execute([ $first, $last, $email, $hash, (int)$role_id, $department_id ?: null, $phone ?: null ]);
            $success = "Compte administrateur créé avec succès.";
            $_POST = [];
        } catch (Exception $e) {
            $errors[] = "Erreur lors de la création du compte : " . $e->getMessage();
        }
    }
}
?>
<!-- ...existing code... -->
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Registre administrateur</title>
  <link href="<?php echo BASE_URL; ?>assets/img/lg.jpg" rel="icon">
  <link href="<?php echo BASE_URL; ?>assets/css/styles.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">
<div id="layoutAuthentication">
  <div id="layoutAuthentication_content">
    <main>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">
              <div class="card-header"><h3 class="text-center font-weight-light my-4">Créer un compte administrateur</h3></div>
              <div class="card-body">
                <?php if (!empty($errors)): ?>
                  <div class="alert alert-danger">
                    <ul class="mb-0">
                      <?php foreach($errors as $e): ?><li><?php echo htmlspecialchars($e); ?></li><?php endforeach; ?>
                    </ul>
                  </div>
                <?php endif; ?>
                <?php if ($success): ?>
                  <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
                <?php endif; ?>

                <form method="post" novalidate>
                  <div class="row mb-3">
                    <div class="col-md-6">
                      <div class="form-floating mb-3 mb-md-0">
                        <input name="first_name" value="<?php echo htmlspecialchars($_POST['first_name'] ?? ''); ?>" class="form-control" id="inputFirstName" type="text" placeholder="Prenom" required />
                        <label for="inputFirstName">Prenom</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input name="last_name" value="<?php echo htmlspecialchars($_POST['last_name'] ?? ''); ?>" class="form-control" id="inputLastName" type="text" placeholder="Nom" required />
                        <label for="inputLastName">Nom</label>
                      </div>
                    </div>
                  </div>

                  <div class="form-floating mb-3">
                    <input name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" class="form-control" id="inputEmail" type="email" placeholder="name@example.com" required />
                    <label for="inputEmail">Adresse e-mail</label>
                  </div>

                  <div class="form-floating mb-3">
                    <select name="role" class="form-select" required>
                      <option value="">Choisissez un rôle</option>
                      <option value="full" <?php if(($_POST['role'] ?? '')==='full') echo 'selected'; ?>>Administrateur Full</option>
                      <option value="media" <?php if(($_POST['role'] ?? '')==='media') echo 'selected'; ?>>Administrateur Media</option>
                      <option value="secretaire" <?php if(($_POST['role'] ?? '')==='secretaire') echo 'selected'; ?>>Administrateur Secrétaire</option>
                    </select>
                    
                  </div>

                  <div class="row mb-3">
                    <div class="col-md-6">
                      <div class="form-floating mb-3 mb-md-0">
                        <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Créer un mot de passe" required />
                        <label for="inputPassword">Mot de passe</label>
                        
                      </div>
                      
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating mb-3 mb-md-0">
                        <input name="password_confirm" class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirmer le mot de passe" required />
                        <label for="inputPasswordConfirm">Confirmer le mot de passe</label>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div class="col-md-6">
                      <div class="form-floating mb-3 mb-md-0">
                        <input name="phone" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" class="form-control" id="inputPhone" type="text" placeholder="Téléphone" />
                        <label for="inputPhone">Téléphone</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-floating">
                        <select name="department_id" class="form-select">
                          <option value="">Département (obligatoire)</option>
                          <?php foreach($departments as $d): ?>
                            <option value="<?php echo (int)$d['id']; ?>" <?php if(($_POST['department_id'] ?? '') == $d['id']) echo 'selected'; ?>>
                              <?php echo htmlspecialchars($d['name']); ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                       
                      </div>
                    </div>
                  </div>

                  <div class="mt-4 mb-0">
                    <div class="d-grid">
                      <button class="btn btn-primary btn-block" type="submit">Créer le compte</button>
                    </div>
                  </div>
                </form>

              </div>
              <div class="card-footer text-center py-3">
                <div class="small"><a href="<?php echo BASE_URL; ?>login/login.php">Se connecter</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  <div id="layoutAuthentication_footer"></div>
</div>
</body>

