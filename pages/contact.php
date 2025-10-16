<?php
$page_title = "Contacte";
include (__DIR__ ."/../includes/header2.php");
?>
  <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
           
                 <h2>Contactez-nous</h2>
          
          <ol>
            <li><a href="<?php echo BASE_URL; ?>index.php">Accueil</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
    <section id="pages/contact" class="contact mt-5">
      <div class="container"> 

        <div class="section-title">
          <h2>Contact</h2>
          <p class="lead">
        Vous pouvez utiliser le formulaire pour nous contacter afin d'avoir plus d'information.
         </p>
        </div>

        <div class="row mt-5 " data-aos="zoom-in">

            <div class="col-lg-4 mb-5">
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

    

    <?php include __DIR__ ."/../includes/footer.php";  ?>