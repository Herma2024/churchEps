<!-- ======= Footer ======= -->

<!-- include/footer.php -->

<footer id="footer">

<div class="footer-top">
  <div class="container"  data-aos="fade-up" data-aos-delay="100">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
      <h4>Nos adresses et Contacts</h4>
        <p>
          Sise, 18 Wenge <br>
          Righini, Lemba<br>
          Kinshasa/RDC <br><br>
          <strong>Téléphone:</strong> +243 810356031<br>
          <strong>Email:</strong> eglisepentecotiste@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Rejoignez-nous</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo BASE_URL; ?>index.php">Accueil</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo BASE_URL; ?>pages/apropos.php">Apropos</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo BASE_URL; ?>pages/don.php">Donner</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo BASE_URL; ?>">Eglise</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="<?php echo BASE_URL; ?>pages/contact.php">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Nos services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Prière</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Enseignement</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Soutien communautaire</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Jeunesse</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Media</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter " style="text-align: justify">
        <h4>rejoignez nous par Newsletter</h4>
        <p>Si voulez recevoir les nouvelles de l'eglises régulièrement par mail, veuillez remplir le formulaire ci-dessous</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Souscrire">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Eglise Pentecotiste des Secouristes</span></strong>. Tous Droits Réservés.-
      
    </div>
     <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Réalisé par <a href="https://bootstrapmade.com/">Hermans IMBALEVA</a>
      </div>
    
  </div>
  
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
  </div>
</div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo BASE_URL; ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

  
  <script src="<?php echo BASE_URL; ?>assets/js/vendor/jquery-1.11.2.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/main.js"></script>
  
  <script src="<?php echo BASE_URL; ?>assets/js/jquery.magnific-popup.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/slick.min.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/js/jquery.collapse.js"></script>
  <script src="<?php echo BASE_URL; ?>assets/vendor/jquery.easing.1.3.js"></script>


            <!-- paradise slider js -->


            <script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>
            <script src="<?php echo BASE_URL; ?>assets/js/gmaps.min.js"></script>

            <script>
                            function showmap() {
                                var mapOptions = {
                                    zoom: 8,
                                    scrollwheel: false,
                                    center: new google.maps.LatLng(-34.397, 150.644),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                                $('.mapheight').css('height', '350');
                                $('.maps_text h3').hide();
                            }

            </script>

</body>

</html>