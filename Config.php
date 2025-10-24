<?php

// Affichage erreurs en dev
ini_set('display_errors', 1);
error_reporting(E_ALL);

// URL de base dynamique
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$project = "/churchEps/";
define("BASE_URL", $protocol . $host . $project);

$SITE_NAME = "Eglise Pentecotiste des Secouristes";

// --- Configuration MySQL (modifie ces valeurs selon ton environnement WAMP) ---
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'church_eps');
define('DB_USER', 'root');
define('DB_PASS', ''); // si tu as un mot de passe, mets-le ici

// Démarrer la session si nécessaire
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Création de la connexion PDO
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    // En environnement de production, loguer l'erreur et afficher un message générique
    die("Échec de la connexion à la base de données : " . $e->getMessage());
}

// Helper simple pour restreindre l'accès aux rôles
function require_role(array $roles = []) {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (!isset($_SESSION['role'])) {
        header('Location: ' . BASE_URL . 'login/login.php');
        exit;
    }
    if (!in_array($_SESSION['role'], $roles) && $_SESSION['role'] !== 'full') {
        http_response_code(403);
        echo "Accès refusé";
        exit;
    }
}
?>