<?php
$page_title = "Notre histoire glorieuse";
include (__DIR__ ."/../includes/header2.php");
?>


<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>Notre histoire</h2>
      <ol>
        <li><a href="<?php echo BASE_URL; ?>index.php">Accueil</a></li>
        <li>Histoire</li>
      </ol>
    </div>
  </div>
</section>

<section class="history-hero py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Images à gauche -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="history-images">
          <img src="<?php echo BASE_URL; ?>assets/img/histoire/culte5.jpg" alt="Chant" class="history-img1">
          <img src="<?php echo BASE_URL; ?>assets/img/histoire/culte2.jpg" alt="Salle" class="history-img2">
          <img src="<?php echo BASE_URL; ?>assets/img/histoire/culte3.jpg" alt="Louange" class="history-img3">
          <img src="<?php echo BASE_URL; ?>assets/img/histoire/culte4.jpg" alt="Prédication" class="history-img4">
        </div>
      </div>
      <!-- Texte à droite -->
      <div class="col-lg-6">
        <h1 class="fw-bold mb-4" style="font-size:2.8rem;">L’histoire glorieuse<br>de l'eglise</h1>
        <!--<p class="mb-3" style="font-size:1.2rem;">
          L'eglise pentecotiste des secouristes, nommément Centre de Réveil, d’Évangélisation de Formation et de Mission, a été fondée par l'Archevêque EJIBA YAMAMPIA Evariste en 2012. Mais c’est l’Eglise La Compassion qui en a été le précurseur en 1998.
        </p>-->
        <p style="font-size:1.2rem;">
          L'Eglise Pentecotiste des Secouristes est une Eglise dont la fois est fondée sur la personne du Seigneur Jesus Christ qui répand son évangile avec un message d'amour, a été fondée par l'Archevêque <strong>EJIBA YAMAPIA Evariste</strong> en 1990, 
          avec une vision de créer une Église qui se concentre sur les besoins spirituels et matériels des membres de la communauté.
        </p>
        <p style="font-size:1.2rem;">
          Depuis sa création, l'Église a connu une croissance rapide et a établi plusieurs filiales à travers le pays. Elle s'engage à apporter un soutien spirituel et matériel à ses membres, en mettant l'accent sur l'évangélisation et la formation.
        </p>
      </div>
    </div>
  </div>
</section>


<?php include __DIR__ ."/../includes/footer.php"; ?>