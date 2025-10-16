<?php
// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $date_event = $_POST['date_event'];
    $description = $_POST['description'];

    // Connexion à la base de données
    $host = 'localhost';
    $db   = 'nom_de_la_base_de_données';
    $user = 'nom_utilisateur';
    $pass = 'mot_de_passe';

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $options);
        
        // Insertion de l'événement
        $stmt = $pdo->prepare('INSERT INTO events (title, date_event, description) VALUES (?, ?, ?)');
        $stmt->execute([$title, $date_event, $description]);
        
        header('Location: events.php');
        exit;
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}
?>

<?php

$page_title = "Faire un don";
include (__DIR__ ."/../includes/header2.php");
?>
<body>
<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>Faire un don</h2>
      <ol>
        <li><a href="<?php echo BASE_URL; ?>index.php">Accueil</a></li>
        <li>Donner</li>
      </ol>
    </div>
  </div>
</section>
    <h1>Ajouter un Nouvel Événement</h1>
    <form method="post">
        <label for="title">Titre:</label>
        <input type="text" name="title" id="title" required>
        
        <label for="date_event">Date:</label>
        <input type="date" name="date_event" id="date_event" required>
        
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>
        
        <button type="submit">Ajouter</button>
    </form>
    <a href="events.php">Retour aux événements</a>
<?php include __DIR__ ."/../includes/footer.php"; ?>
</body>