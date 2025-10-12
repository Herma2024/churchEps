<?php

$page_title = "Effectuer un don";
include (__DIR__ ."/../includes/header2.php");

// Récupérer le type de don
$type = isset($_GET['type']) ? $_GET['type'] : 'dime';

// Textes dynamiques
$textes = [
  'dime' => "Le travail de l'Eglise Pentecotiste des Secouristes nécessite des dons réguliers et constants pour assurer la continuité et la croissance de l'Eglise. Nous croyons que la dîme est un principe à respecter pour votre foyer spirituel.",
  'secours' => "Il s'agit d'un fonds qui permet à notre église d'apporter du soutien en temps de détresse à tous ceux d'entre nous qui traversent des moments difficiles. Vos dons nous aident à alimenter ce fonds et soutenir les membres de notre église et résoudre les problèmes d'urgence de l'église.",
  'priere' => "En somme, l'offrande de sacrifice et la requête de prière sont des éléments essentiels qui nourrissent la vie spirituelle et communautaire d'une église, favorisant à la fois la croissance personnelle des membres et le bien-être collectif de la communauté. Votre don nous aide à soutenir les projets communautaires et les activités sociales de l'église."
];

// Texte par défaut si type inconnu
$texte_intro = isset($textes[$type]) ? $textes[$type] : $textes['dime'];
?>
<body>
<section class="don-rem thanks-section py-5" style="background:#6ec6e6;">
  <div class="container">
    <div class="row align-items-center">
      <!-- Bloc texte à gauche -->
      <div class="col-lg-6 text-white mb-4 mb-lg-0">
        <div class="p-4">
          <h3 class="fw-bold mb-3">Merci pour votre générosité !</h3>
          <p><?php echo $texte_intro; ?></p>
        </div>
      </div>
      <!-- Formulaire à droite -->
      <div class="col-lg-6">
        <div class="card shadow border-0">
          <!-- ...formulaire ici... -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ...reste du code... -->

<div class="mb-3">
  <label class="form-label">Désignation</label>
  <select class="form-select" name="designation">
    <option disabled>Choisir le type de don</option>
    <?php foreach($options as $key => $label): ?>
      <option value="<?php echo $key; ?>" <?php
        // Sélectionner automatiquement selon le type
        if(isset($type_to_option[$type]) && $type_to_option[$type] === $key) echo 'selected';
      ?>>
        <?php echo $label; ?>
      </option>
    <?php endforeach; ?>
  </select>
</div>
<?php include __DIR__ ."/../includes/footer.php"; ?>
</body>