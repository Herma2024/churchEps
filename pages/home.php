<!-- HEAD -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
     
      <h1>ÉGLISE PENTECÔTISTE DES SECOURISTES</h1>
      <h2>C'est une église dont la foi est fondée sur la personne du Seigneur Jesus-Christ. </h2>
      
    </div>
  </section><!-- End Hero Section -->

  <main id="main" >
    

    <!-- ======= About Section ======= -->
    <section id="about" class="py-5 bg-light">
        <div class="container text-center" data-aos="fade-down" data-aos-delay="100">
            <div class="section-title">
            <h2 class="text-center mb-4">À propos de nous</h2>
                
            </div>
            
            <p class="lead " style="text-align: justify; text-justify:inter-word;">
            <strong>L'ÉGLISE PENTECÔTISTE DES SECOURISTES</strong> est une église dynamique et accueillante qui croit en la puissance de Dieu pour transformer les vies. Nous sommes engagés à servir Dieu et à répandre son amour à travers nos actions et nos prières.
            </p>
            <a href="<?php echo BASE_URL; ?>pages/apropos.php" class="btn btn-danger btn-lg mt-3">Rejoignez-nous</a>
        </div>
  </section>
 
    <!-- Histoire Section -->
    <section id="history" class="cta" style="height: 500px;"
      object-fit:cover>
      <div class="container"data-aos="zoom-in" data-aos-delay="100">

        <div class="text-center mt-5" style="text-align: justify" >
          <h3>Notre Histoire</h3>
          <p> L'Eglise Pentecotiste des Secouriste est une Eglise dont la fois est fondée sur la personne du Seigneur Jesus Christ qui répand son évangile avec un message d'amour. 
            Ejiba YAMAMPIA en est le fondateur et Archevêque principal. L'Eglise Pentecotiste des Secouriste diffuse ses cultes sur internet à travers Facebook et YouTube.</p>
          <a class="cta-btn mt-5" href="<?php echo BASE_URL; ?>pages/notreHistoire.php">Savoir plus</a>
        </div>

      </div>
    </section>
    <!-- Fin histoire Section -->
    
 <section id="events" class="py-5 bg-light">
    <div class="container text-center"  data-aos="fade-down" data-aos-delay="100">
          <div class="section-title">
          <h2 class="text-center mb-4">Nos Événements</h2>
                
          </div>
            <p class="lead">
              Restez informé de nos événements spéciaux, tels que les conférences, les concerts et les retraites spirituelles. Rejoignez-nous en remplissant ce formulaire, que le Seigneur Jesus-Christ vous benisse.
            </p>
   
            <div class="container my-5">

        <!-- Onglets -->
        <ul class="nav nav-tabs justify-content-center" id="eventTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="avenir-tab" data-bs-toggle="tab" data-bs-target="#avenir" type="button" role="tab">
              À venir
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="passes-tab" data-bs-toggle="tab" data-bs-target="#encours" type="button" role="tab">
              En cours
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="passes-tab" data-bs-toggle="tab" data-bs-target="#passes" type="button" role="tab">
              Passés
            </button>
          </li>
        </ul>
            <div class="tab-content mt-4" id="eventTabsContent">
              <!-- Évènements à venir -->
              <div class="tab-pane fade show active" id="avenir" role="tabpanel">
                <div id="carouselAvenir" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <!-- Exemple 1 -->
                    <div class="carousel-item active">
                      <div class="d-flex justify-content-center align-items-center">
                        <img src="<?php echo BASE_URL; ?>assets/img/event/event1.jpg" class="d-block img-auto rounded" alt="Évènement 1">
                        
                      </div>
                    </div>
                    <!-- Exemple 2 -->
                    <div class="carousel-item">
                    <div class="d-flex justify-content-center align-items-center">
                      <img src="<?php echo BASE_URL; ?>assets/img/event/event2.jpg" class="d-block img-auto rounded" alt="Évènement 2">
                      
                    </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselAvenir" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselAvenir" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </button>
                </div>
              </div>
  <!-- Évènements en cours -->
              <div class="tab-pane fade" id="encours" role="tabpanel">
                  <div class="row g-4">
                   <div class="col-md-8">
                      <div class="card shadow-sm ">
                        <img src="<?php echo BASE_URL; ?>assets/img/event/event4.jpg" class="card-img-top d-inline-block" alt="Évènement passé 2">
                        <div class="card-body">
                          <h5 class="card-title">Conférence biblique</h5>
                          <p class="card-text">Passée le 5 août 2025</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
  <!-- Évènements passés -->
                <div class="tab-pane fade" id="passes" role="tabpanel">
                  <div class="row g-4">
                    <div class="col-md-6">
                      <div class="card shadow-sm">
                        <img src="<?php echo BASE_URL; ?>assets/img/event/event3.jpg" class="card-img-top" alt="Évènement passé 1">
                        <div class="card-body">
                          <h5 class="card-title">Veillée de prière</h5>
                          <p class="card-text">Passée le 10 août 2025</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card shadow-sm">
                        <img src="<?php echo BASE_URL; ?>assets/img/event/event4.jpg" class="card-img-top" alt="Évènement passé 2">
                        <div class="card-body">
                          <h5 class="card-title">Conférence biblique</h5>
                          <p class="card-text">Passée le 5 août 2025</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
                <a href="#contact" class="btn btn-danger btn-lg mt-3">Voir les événements</a>
            
          </div>
          
  </section>  <!-- ======= End evenment Section ======= -->
    


    <!-- ======= Services Section ======= -->
    <section id="activities" class="services">
      <div class="container"data-aos="fade-up">

        <div class="section-title">
          <h2 class="text-center mb-4">Nos programmes</h2>
         
        </div>

      <div class="row" >
        <p class="lead" style="text-align: justify;">Découvrez un programme riche enseignements bibliques, en prières ferventes et en partages fraternels. Ensemble, avancons dans la foi et glorifions Dieu dans la joie et l'amour. Que ce temps soit pour vous une source de bénédictions abondantes!</p>
            <div class="col-md-6 col-lg-3 d-flex " data-aos="zoom-in">
                <div class="flex-fill p-3">
                  <div class="icon-box">
                        <a class="brand" href="#">
                        <img src="<?php echo BASE_URL; ?>assets/img/lg.jpg" alt="logo" >
                      </a>
                    <h4 class="title"><a href="">Mardi</a></h4>
                    <p class="description">"Ecole Biblique pour tous tous"</p>
                    <p class="description">De 17h à 19h</p>
                  </div>
                </div>
              </div>
            <div class="col-md-6 col-lg-3 d-flex " data-aos="zoom-in">
                <div class="flex-fill p-3">
                  <div class="icon-box">
                    <a class="brand" href="#">
                        <img src="<?php echo BASE_URL; ?>assets/img/clt8.jpg" alt="logo"  >
                      </a>
                    <h4 class="title"><a href="">Jeudi</a></h4>
                    <p class="description">Veuillée des Vaillants de Feu</p>
                    <p class="description">De 23h à 05h</p>
                  </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex"data-aos="zoom-in" >
               <div class="flex-fill p-3"> 
                  <div class="icon-box">
                      <a class="brand" href="#">
                      <img src="<?php echo BASE_URL; ?>assets/img/clt11.jpg" alt="logo"  >
                      </a>
                    <h4 class="title"><a href="">Samedi</a></h4>
                    <p class="description">Jeunesse et eveille patriotique </p>
                    <p class="description">De 17h à 20h</p>
                  </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex" data-aos="zoom-in">
                <div class="flex-fill p-3">
                  <div class="icon-box">
                      <a class="brand" href="#">
                        <img src="<?php echo BASE_URL; ?>assets/img/portfolio/clt10.jpg" alt="logo" >
                      </a>
                    <h4 class="title"><a href="">Dimanche</a></h4>
                    <p class="description">Rejoignez-nous chaque dimanche pour le Culte dominical.</p>
                    <p class="description">De 08h00 à 11h30</p>
                  </div>
               </div>
            </div>
         

      </div>
    </section><!-- End Services Section -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
       
          
                <div class="col-lg-12">
                  <div class="portfolio-info text-center">
                    <h3>Verset biblique du jour</h3>
                      <div id="versetCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel" data-bs-interval="5000">
                      
                          <div class="carousel-inner text-center p-5 bg-white shadow rounded ">
                            <div class="carousel-item"> 
                            <!-- Les versets seront injectés ici via JS -->
                            </div>
                          </div>
                   
                  </div>
                </div>
            </div> 
          </div>
        
      </section><!-- End Portfolio Details Section -->

   
<!-- ======= Call To Action Section ======= -->
<section id="don" class="call-to-action" style="height: 600px;">
       <div class="container">
         <div class="row" data-aos="zoom-in">
            <div class="col-lg-9 text-center text-lg-start" style="text-align: justify;">
              <h3 class="cta-title">FAIRE UN DON EN LIGNE</h3>
              <p class="cta-text" style="text-align: justify">Un don ponctuel est une manière
                simple et libre de contribuer à
                l’amélioration du quotidien des personnes en grande précarité. Chaque geste de 
                générosité apporte un soutien essentiel à ceux qui manquent 
                de ressources pour vivre dignement et nous aide à développer 
                de nouvelles initiatives solidaires. Offrir un don, c’est semer 
                l’espoir et participer à la construction d’un avenir plus humain.
              </p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center ">
              <a class="cta-btn align-middle" href="<?php echo BASE_URL; ?>pages/Don.php">Faire un don</a>
            </div>
         </div>
      </div>
    </section>
    <!-- End Call To Action Section -->
    <!-- ======= Section Visionnaire ======= -->
 <section id="team" class="team mt-5">
      <div class="container" >

        <div class="row text-center">

          <div class="col-lg-8 col-md-6 d-flex align-items-stretch mx-auto d-block">
            <div class="member " data-aos="fade-right">
             <div class="section-title mt-5">
            
           
                 <h2 class="text-center display-4 display-md-3">Le visionnaire de l'eglise</h2>
         
             </div>
              <div class="member-img">
                <img src="<?php echo BASE_URL; ?>assets/img/image3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-whatsapp"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info" data-aos="fade-up">
                <h4>EJIBA YAMAMPIA Evariste</h4>
                <h4>Archeveque</h4>
                <p class="lead">L'Archeveque Ejiba YAMAMPIA est le Président International de l'Eglise Pentecôtiste des Secouristes.Il est le coordonnateur de l'Eglise du Reveil au Congo(ERC).</p>
                <a href="<?php echo BASE_URL; ?>pages/pastorStory.php" class="btn btn-outline-danger btn-lg mt-3">Biographie</a>
                
              </div>
             
            </div>
           
          </div>
     

        </div>

      </div>
    </section>
    <!-- Fin Section -->
 <!-- Media Section -->
 <div  class="container my-5 ">
  <h3 class="text-center mb-4">📺Communication & Media</h3>
  
    <div id="videoCarousel" class="carousel slide" data-bs-interval="false">
       <div class="carousel-inner">
          <div class="row g-4">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-body mb-5">
                  <h5 class="card-title text-center">🎬Regardez les vidéos de nos activités directement ici</h5>
                  <div class="carousel-item active">
                    <div class="ratio ratio-16x9  ">
                      <iframe class="w-100" src="https://www.youtube.com/embed/ysz5S6PUM-U"
                              title="YouTube video"
                              allowfullscreen>
                      </iframe>
                    </div>
                    <div class="carousel-caption d-block bg-dark bg-opacity-50 rounded p-2">
                        <h5>Culte de dimanche</h5>
                        <small>📅 Publiée le 25 Août 2025</small>
                    </div>
                 </div>
                 <div class="carousel-item">
                    <div class="ratio ratio-16x9">
                      <iframe src="https://www.youtube.com/embed/3JZ_D3ELwOQ"
                              title="YouTube video" allowfullscreen></iframe>
                    </div>
                    <!-- Caption -->
                    <div class="carousel-caption d-block bg-dark bg-opacity-50 rounded p-2">
                      <h5>Seminaire</h5>
                      <small>📅 Publiée le 18 Août 2025</small>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="ratio ratio-16x9">
                      <iframe src="https://www.youtube.com/embed/3JZ_D3ELwOQ"
                              title="YouTube video" allowfullscreen></iframe>
                    </div>
                    <!-- Caption -->
                    <div class="carousel-caption d-block bg-dark bg-opacity-50 rounded p-2">
                      <h5>Culte de dimanche</h5>
                      <small>📅 Publiée le 11 Août 2025</small>
                    </div>
                  </div>
               
                </div>
             </div>
           </div>
          </div>
        </div>
        <!-- Contrôles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Précédent</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Suivant</span>
          </button>
          <!-- Indicateurs numérotés -->
          <!-- Contrôles -->
          <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Précédent</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Suivant</span>
          </button>
          <!-- Indicateurs numérotés -->
          <div class="carousel-indicators numbered-indicators">
            <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="0" class="active">1</button>
            <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="1">2</button>
            <button type="button" data-bs-target="#videoCarousel" data-bs-slide-to="1">3</button>
     
          </div>
      </div>
  </div>

  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container"> 

        <div class="section-title">
          <h2>Contact</h2>
          <p class="lead">
        Vous pouvez utiliser le formulaire pour nous contacter afin d'avoir plus d'information.
         </p>
        </div>

        <div class="row mt-5 " data-aos="zoom-in">

            <div class="col-lg-4">
                <div class="info">
                <div class="address">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Localisation:</h4>
                    <p>Lemba Q/Righini Av. Wenge N°18</p>
                </div>

                <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>eglisepentecotiste@gmail.com</p>
                </div>

                <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Telephone:</h4>
                    <p>+243 810356031</p>
                </div>

                </div>

             </div>

          <div class="col-lg-8 mt-5 mb-5 mt-lg-0" data-aos="fade-up">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                
                <div class="error-message"></div>
                <div class="sent-message">Votre message. Merci!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>

          </div>


      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

   <!-- ======= Footer ======= -->

 <!-- ======= END Footer ======= -->
 <script>
  // Tableau de versets
const versets = [
  "Jean 3:16 - Car Dieu a tant aimé le monde qu'il a donné son Fils unique...",
  "Psaume 23:1 - L’Éternel est mon berger; je ne manquerai de rien.",
  "Philippiens 4:13 - Je puis tout par celui qui me fortifie.",
  "Josué 1:9 - Ne t’ai-je pas donné cet ordre: Fortifie-toi et prends courage ?",
  "Romains 8:28 - Toutes choses concourent au bien de ceux qui aiment Dieu."
];
// Calculer l’index du jour
const today = new Date();
const index = today.getDate() % versets.length;
// Cibler UNIQUEMENT le carrousel des versets
const carouselInner = document.querySelector("#versetCarousel .carousel-inner");
// Injecter les versets dans ce carrousel
versets.forEach((verset, i) => {
  const div = document.createElement("div");
  div.classList.add("carousel-item");
  if (i === index) div.classList.add("active"); // activer le verset du jour
  div.innerHTML = `<h4>${verset}</h4>`;
  carouselInner.appendChild(div);
});

        
</script>
<!-- HEAD -->
