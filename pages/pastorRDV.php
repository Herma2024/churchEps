<?php
$page_title = "Prendre rendez-vous avec un pasteur";
include (__DIR__ ."/../includes/header2.php");

// Exemple de pasteurs (remplace par tes données réelles)
$pasteurs = [
  [
    'id' => 1,
    'titre' => "Archevêque",
    'nom' => "Ejiba Yamapia Evariste",
    'photo' => BASE_URL . "assets/img/ejiba.jpeg"
  ],
  [
    'id' => 2,
    'titre' => "Prophète",
    'nom' => "EJIBA Eugène",
    'photo' => BASE_URL . "assets/img/clt16.jpg"
  ],
  [
    'id' => 3,
    'titre' => "Prophète",
    'nom' => "KABULO Francis",
    'photo' => BASE_URL . "assets/img/clt17.jpg"
  ]
];
?>

<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>Prendre rendez-vous avec un pasteur</h2>
      <ol>
        <li><a href="<?php echo BASE_URL; ?>index.php">Accueil</a></li>
        <li>RDV Pasteur</li>
      </ol>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4 justify-content-center">
      <?php foreach($pasteurs as $p): ?>
      <div class="col-md-6 col-lg-4 d-flex">
        <div class="card shadow border-0 w-100">
          <img src="<?php echo $p['photo']; ?>" alt="<?php echo $p['nom']; ?>" class="card-img-top rounded-top" style="height:300px; object-fit:cover;">
          <div class="card-body text-center">
             <h5 class="fw-bold mb-3"><?php echo $p['titre']; ?></h5>
            <h5 class="fw-bold mb-3"><?php echo $p['nom']; ?></h5>
            <a href="<?php echo BASE_URL; ?>pages/rdvForm.php?pasteur=<?php echo $p['id']; ?>" class="btn btn-primary w-100">Prendre RDV</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ ."/../includes/footer.php"; ?>