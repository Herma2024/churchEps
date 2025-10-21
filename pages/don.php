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

<section id="pages/don" class="don-hero py-5 bg-white">
  <div class="container">
    <div class="row align-items-center">
      <!-- Texte à gauche -->
      <div class="col-lg-6 mb-4 mb-lg-0">
        
        <p class="mb-3">
          Nous croyons que Dieu nous a appelés à atteindre et à bénir les gens, d’un à plusieurs.
        </p>
        <p class="mb-3">
          Nous vous remercions chaleureusement de votre soutien par vos dons, qui aident l’Église à accomplir sa mission et sa vision. Pour en savoir plus sur la manière de contribuer à l’œuvre de l'Eglise Pentecotiste des Secouristes, veuillez consulter nos différentes cagnottes ci-dessous.
        </p>
        <p class="mb-3">
       <strong>« Que chacun de vous donne selon sa résolution, sans regret ni contrainte, car Dieu aime celui qui donne avec joie. » </strong> </br>
        <strong> 2 Corinthiens 9:7</strong>
  </p>
      </div>
      <!-- Images à droite -->
      <div class="col-lg-6 col-md-12 d-flex justify-content-center">
        <div class="position-relative" style="width:380px; height:380px;">
          <img src="<?php echo BASE_URL; ?>assets/img/don/don5.jpg" 
               alt="Adoration" 
               class="rounded-circle shadow position-absolute" 
               style="width: 300px; height: 300px; object-fit: cover; top: 0; right: 0; z-index:2;">
          <img src="<?php echo BASE_URL; ?>assets/img/don/don6.jpg" 
               alt="Entraide" 
               class="rounded-circle shadow position-absolute" 
               style="width: 160px; height: 160px; object-fit: cover; bottom: 0; left: 0; z-index:1; border: 6px solid #fff;">
          <div style="position:absolute; top:-30px; right:-40px; width:120px; height:120px; background:#6ec6e6; border-radius:50%; z-index:0; opacity:0.5;"></div>
          <div style="position:absolute; bottom:-30px; left:-40px; width:90px; height:90px; background:#e43c5c; border-radius:50%; z-index:0; opacity:0.5;"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="pages/don" class="pricing bg-light">
      <div class="container mt-5 mb-5">

          <div class="row row-cols-1 row-cols-md-4 g-4">

          <div class="col-lg-4 col-md-12 d-flex" data-aos="fade-up">
            <div class="box recommended flex-fill p-3">
            
              <h3>Dîmes et Offrandes</h3>
              <p style="text-align: justify; " >
              Le travail de l'Eglise Pentecotiste des Secouristes nécessite des dons réguliers et constants pour assurer la contonuité et la croissance
              de l'Eglise. Nous croyons que la dîme est un principe à respecter pour votre foyer spirituel.
              </p>
              <div class="btn-wrap">
                <a href="<?php echo BASE_URL; ?>pages/effectuerDon.php?type=dime" class="btn-buy">Effectuer le don</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 d-flex"data-aos="fade-up">
            <div class="box recommended flex-fill p-3">
              
              <h3>Fonds de secours</h3>
              <p style="text-align: justify; " >
              Il s'agit d'un fonds qui permet à notre église d'apporter du soutien en temps de détresse à tous ceux d'entre nous qui traversent
              des moments difficiles. Vos dons nous aident à alimenter ce fonds et soutenir les membres de notre eglises et résoudre les problèmes d'urgence de l'église.
              </p>
              
              <div class="btn-wrap">
                <a href="<?php echo BASE_URL; ?>pages/effectuerDon.php?type=secours" class="btn-buy">Effectuer le don</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 d-flex"data-aos="fade-up">
            <div class="box recommended flex-fill p-3">
              <h3>Offrande de prière et requête de prière</h3>
              <p style="text-align: justify; " >
            En somme, l'offrande de sacrifice et la requête de prière sont des éléments essentiels qui nourrissent la vie spirituelle et communautaire d'une église, favorisant à la fois la croissance personnelle des membres et le bien-être collectif de la communauté. Votre don nous aide à soutenir les projets communautaires et les activités sociales de l'église.
              
              <div class="btn-wrap">
                <a href="<?php echo BASE_URL; ?>pages/effectuerDon.php?type=priere" class="btn-buy">Effectuer le don</a>
              </div>
            </div>
          </div>

            

        </div>

      </div>
    </section><!-- End Pricing Section -->

<?php include __DIR__ ."/../includes/footer.php"; ?>
</body>