
<?php
$page_title = "Enregistrement des fidèles";
include (__DIR__ ."/../includes/header.php");
?>
<body class="bg-secondary">
<!-- NAVBAR -->

<div class="container col-lg-6 mt-5 mb-5 pt-5">
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
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </div>
    </form>
  </div>
</div>
<!-- Bootstrap JS -->
 <!-- ======= Footer ======= -->
 <?php include __DIR__ ."/../includes/footer.php";  ?>
  <!-- ======= END Footer ======= -->
