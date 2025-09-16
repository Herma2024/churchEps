<?php
$page_title = "Biogragrapie pasteur";
include (__DIR__ ."/../includes/header.php");
?>
<body class="bg-secondary">
<div class="container my-5">
<div class="row align-items-center">
   
   <!-- Photo -->
   <div class="herm col-12 col-lg-4 text-center mb-4 mt-5 mb-lg-0 d-flex" data-aos="fade-up" >
      <!-- Photo du visionnaire -->
      <div class=" flex-fill p-3">
      <div class="card shadow-lg border-0 rounded-3 ">
        <img src="<?php echo BASE_URL; ?>assets/img/ejiba1.png"
             class="card-img-top rounded-top"
             alt="Visionnaire de l'église">
        <div class="card-body">
          <h3 class="card-title text-primary fw-bold">Archevêque Ejiba Yamapia Evariste</h3>
          <p class="text-muted">Fondateur de l'Église Pentecôtiste des Secouristes</p>
        </div>
        </div>
      </div>
    </div>
  <!-- Biographie -->
        <div class="herm col-12 col-lg-8 d-flex" data-aos="fade-up">
        <div class="flex-fill p-3">
            <div class="p-4 bg-light rounded shadow-sm">
                          <h4 class="fw-bold mb-3 text-center">Biographie</h4>
                          <p class="text-justify">
                          L'Archevêque Ejiba Yamapia est le Président International de l’Eglise Pentecôtiste des Secouristes et Fondateur de l’Ong Storehouse Foundation une association sans but lucratif faisant des œuvres à caractère philanthropique. Il est le Vice-Président de l’Eglise du Réveil au Congo « ERC ».
                  Grâce à son leadership efficace, le Révérend Ejiba est le Président National de l’Africa Ministries Network « Afmin-Congo » en sigle, une Organisation Internationale qui dirige près de 1.500 serviteurs de Dieu en République Démocratique du Congo dont l’objectif est d’équiper et de former les pasteurs leaders de ligne de front à avoir un impact dans toutes les nations sur la croissance spirituelle de l’Eglise Corps de Christ.
                  Une carrière de plus en plus importante, il compte aujourd’hui plus de 25 ans de ministère dans la foi et sur le champ du Seigneur Jésus-Christ. 

                          </p>
                          <p class="collapse text-justify "id="bioPlus">
                          C’est un éminent formateur que le Saint-Esprit utilise puissamment pour restaurer les pasteurs, les serviteurs et les servantes des églises.
                  Il a organisé des campagnes d’évangélisation, que des séminaires, de conférences sur des thèmes variés à Kinshasa et partout dans le monde notamment au Canada et autres… Loin de continuer à croire que le christianisme se contente seulement à l’évangile « croyez et vous serez sauvé », le Révérend Ejiba a vite compris et réalisé une démarcation que les hommes doivent appliquer la Parole de Dieu en toute son intégralité c'est-à-dire prêcher et mettre en pratique. C’est ainsi que compatissant à la misère des certaines couches vulnérables, il pose des actes qui parlent en offrant gratuitement des chaises roulantes aux personnes vivant avec handicap ; JESUS-CHRIST L’ESPOIR DU MALHEUREUX !
                  Joignant l’utile à l’agréable, il s’occupe aussi à cette catégorie des personnes : enfants abandonnés (enfants de la rue), orphelins, veuves, vieillards sans abris ; notamment en les accueillant, hébergeant, encadrés et scolarisés. Il se fait remarquer dans sa phrase exprimant : « seul un cadavre ne peut rien faire pour quelqu’un d’autre », un cadavre attend qu’on fasse tout pour lui ; mais toi qui est vivant, tu peux faire quelque chose pour une personne. Cela justifie un peu notre existence sur la terre ; car la vraie religion consiste à aider l’orphelin !
                  Voulez-vous en savoir plus sur le l’Eglise et le Storehouse.
                  </p>

                  <div class="text-center mt-3">
              <button id="toggleBtn" class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#bioPlus" aria-expanded="false" aria-controls="bioPlus">
                Lire plus
              </button>
             </div>
            </div>
           </div>
        </div>
     <!-- Bouton -->
     
  </div>

</div>

<!-- Script pour changer le texte du bouton -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const bioCollapse = document.getElementById("bioPlus");
    const toggleBtn = document.getElementById("toggleBtn");
    bioCollapse.addEventListener("show.bs.collapse", function () {
      toggleBtn.textContent = "Réduire";
    });
    bioCollapse.addEventListener("hide.bs.collapse", function () {
      toggleBtn.textContent = "Lire plus";
    });
  });
</script>
<!-- ======= Footer ======= -->
<?php include __DIR__ ."/../includes/footer.php";  ?>
  <!-- ======= END Footer ======= -->