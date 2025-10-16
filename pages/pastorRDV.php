<?php


$page_title = "Prendre rendez-vous avec un pasteur";
include (__DIR__ ."/../includes/header2.php");

// Exemple de pasteurs (remplace par tes données réelles)
$pasteurs = [
  [
    'id' => 1,
    'titre' => "Archevêque",
    'nom' => "Ejiba Yamapia Evariste",
    'photo' => BASE_URL . "assets/img/pastor.jpg"
  ],
  [
    'id' => 2,
    'titre' => "Prophète",
    'nom' => "EJIBA Eugène",
    'photo' => BASE_URL . "assets/img/clt18.jpg"
  ],
  [
    'id' => 3,
    'titre' => "Prophète",
    'nom' => "KABULO Francis",
    'photo' => BASE_URL . "assets/img/clt17.jpg"
  ]
];
?>

<style>
.pastor-img-responsive {
  width: 100% !important;
  height: 450px !important;
  object-fit: contain !important;
  border-radius: 16px 16px 0 0;
  background: #fff;
  display: block;
}
@media (max-width: 884px) {
  .pastor-img-responsive {
    height: auto !important;
    border-radius: 16px;
  }
}
</style>

<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>Prendre rendez-vous</h2>
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
      <div class="col-12 col-md-12 col-lg-4 d-flex">
        <div class="card shadow border-0 w-100 blog_item">
          <div class="blog_item_img">
            <img src="<?php echo $p['photo']; ?>" alt="<?php echo $p['nom']; ?>" class="card-img-top pastor-img-responsive">
          </div>
          <div class="card-body text-center">
            <h5 class="fw-bold mb-3"><?php echo $p['titre']; ?></h5>
            <h5 class="fw-bold mb-3"><?php echo $p['nom']; ?></h5>
            <a href="<?php echo BASE_URL; ?>pages/rdvForm.php?pasteur=<?php echo $p['id']; ?>" class="btn btn-danger w-100">Prendre RDV</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ ."/../includes/footer.php"; ?>