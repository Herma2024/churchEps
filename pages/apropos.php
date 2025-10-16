<?php
$page_title = "A propos";
include (__DIR__ ."/../includes/header2.php");
?>

 <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
           
                 <h2>A propos de Nous</h2>
          
          <ol>
            <li><a href="<?php echo BASE_URL; ?>index.php">Accueil</a></li>
            <li>Apropos</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->
   <section id="apropos" class="pricing">
      <div class="container mt-5 mb-5 ">

           
            <div class="col-xl-8 offset-xl-2 text-center" data-aos="fade-up" >
                <p style="color:black;">
                <strong>L'ÉGLISE PENTECÔTISTE DES SECOURISTES </strong>est une église dynamique et accueillante qui croit en la puissance de Dieu pour transformer les vies. Nous sommes engagés à servir Dieu et à répandre son amour à travers nos actions et nos prières.
            
                </p>
                <div class="text-center">
                <i class="bi bi-heart custom-heart"></i>
            </div>
            
        </div>
        <div class="container col-lg-6 mb-5 pt-5"  data-aos="fade-up" data-aos-delay="100">
            <div class="card shadow-lg p-4 rounded">
                <div class="section-title">
                    <h2 class="text-center mb-4">📋 Enregistrement des fideles</h2>
                        
                    </div>
                    
                    <form>
                    <!-- Nom -->
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom complet</label>
                        <input type="text" class="form-control" id="nom" placeholder="Entrez le nom complet" required>
                    </div>
                    <!-- Sexe -->
                    <div class="mb-3">
                        <label class="form-label">Sexe</label>
                        <select class="form-select" required>
                        <option value="">-- Sélectionnez --</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        </select>
                    </div>
                    <!-- Date de naissance -->
                    <div class="mb-3">
                        <label for="naissance" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" id="naissance" required>
                    </div>
                    <!-- Contact -->
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" id="telephone" placeholder="+243 ..." required>
                    </div>
                    <!-- Département -->
                    <div class="mb-3">
                        <label class="form-label">Département</label>
                        <select class="form-select" required>
                        <option value="">-- Choisissez un département --</option>
                        <option value="Chorale">🎶 Chorale</option>
                        <option value="Intercession">🙏 Intercession</option>
                        <option value="Évangélisation">📢 Évangélisation</option>
                        <option value="Accueil">🤝 Accueil</option>
                        <option value="Multimédia">💻 Multimédia</option>
                        <option value="Enseignement">📖 Enseignement</option>
                        <option value="Jeunesse">👥 Jeunesse</option>
                        <option value="Jeunesse">👥 Autres</option>
                        </select>
                    </div>
                    <!-- Adresse -->
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <textarea class="form-control" id="adresse" rows="2" placeholder="Votre adresse..." required></textarea>
                    </div>
                    <!-- Boutons -->
                    <div class="d-flex justify-content-between">
                        <button type="reset" class="btn btn-outline-secondary">Annuler</button>
                        <button type="submit" class="btn btn-outline-danger">Enregistrer</button>
                    </div>
                    </form>
                </div>
            </div>
        
           
         </div>
    </section><!-- End Pricing Section -->
</main>

 <!-- ======= Footer ======= -->
 <?php include __DIR__ ."/../includes/footer.php";  ?>
 <!-- ======= END Footer ======= -->