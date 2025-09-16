<?php

require_once "includes/header.php";
  // Récupère la page passée dans l’URL
$page = isset($_GET['page']) ? $_GET['page'] : "home";
// Sécurité : on garde que lettres/nombres
$page = preg_replace("/[^a-zA-Z0-9]/", "", $page);


// Vérifie si le fichier existe dans /pages
$file = "pages/" . $page . ".php";
if (file_exists($file)) {
    include($file);
} else {
    echo "<div class='container mt-5 text-center'><h2>404 - Page introuvable</h2></div>";
}
require_once "includes/footer.php";
?>