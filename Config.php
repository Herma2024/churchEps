<?php
// ===============================
// Configuration principale du site
// ===============================
// Détecte automatiquement le protocole (http ou https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
// Détecte le domaine + port (ex: localhost:8080, ngrok, ton-domaine.com)
$host = $_SERVER['HTTP_HOST'];
// Dossier de ton projet (adapter si nécessaire)
// Exemple : "/ChurchEps/" si ton site est dans http://localhost:8080/ChurchEps/
// Mettre "/" si ton site est directement à la racine
$project = "/churchEps/";
// URL de base dynamique
define("BASE_URL", $protocol . $host . $project);
$SITE_NAME ="Eglise Pentecotiste des Secouristes";
?>