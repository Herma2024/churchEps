<?php

$page_title = "Effectuer un don";
include (__DIR__ ."/../includes/header2.php");


// Récupérer le type de don
$type = isset($_GET['type']) ? $_GET['type'] : 'dime';

$titres = [
  'dime' => "Dîmes et offrandes",
  'secours' => "Fonds de secours",
  'priere' => "Offrande de prière et requête de prière"
];
// Textes dynamiques
$textes = [
  'dime' => "Le travail de l'Eglise Pentecotiste des Secouristes nécessite des dons réguliers et constants pour assurer la continuité et la croissance de l'Eglise. Nous croyons que la dîme est un principe à respecter pour votre foyer spirituel.",
  'secours' => "Il s'agit d'un fonds qui permet à notre église d'apporter du soutien en temps de détresse à tous ceux d'entre nous qui traversent des moments difficiles. Vos dons nous aident à alimenter ce fonds et soutenir les membres de notre église et résoudre les problèmes d'urgence de l'église.",
  'priere' => "En somme, l'offrande de sacrifice et la requête de prière sont des éléments essentiels qui nourrissent la vie spirituelle et communautaire d'une église, favorisant à la fois la croissance personnelle des membres et le bien-être collectif de la communauté. Votre don nous aide à soutenir les projets communautaires et les activités sociales de l'église."
];

// Texte par défaut si type inconnu
$titre_intro = isset($titres[$type]) ? $titres[$type] : $titres['dime'];
$texte_intro = isset($textes[$type]) ? $textes[$type] : $textes['dime'];

$options_by_type = [
  'dime' => [
    'dime' => "Dîme",
    'action_grace' => "Offrande d'action de grâce",
    'culte' => "Offrande du culte",
    'pasteur' => "Offrande du pasteur",
    'autre' => "Autre"
  ],
  'secours' => [
    'secours' => "Fonds de secours",
    'autre' => "Autre"
  ],
  'priere' => [
    'priere' => "Offrande de prière",
    'autre' => "Autre"
  ]
];

$options = isset($options_by_type[$type]) ? $options_by_type[$type] : $options_by_type['dime'];

?>


<body>
    <section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>Faire un don</h2>
      <ol>
        <li><a href="<?php echo BASE_URL; ?>index.php">Accueil</a></li>
        <li><a href="<?php echo BASE_URL; ?>pages/don.php">Donner</a></li>
        <li>Effectuer don</li>
      </ol>
    </div>
  </div>
</section>

<section class="don-rem thanks-section py-5" style="background:#e43c5c;">
  <div class="container">
    <div class="row align-items-center">
      <!-- Bloc texte à gauche -->
      <div class="col-lg-6 text-white mb-4 mb-lg-0">
        <div class="p-4">
          <h3 class="fw-bold mb-3"><?php echo $titre_intro; ?></h3>
          <p><?php echo $texte_intro; ?></p>
        </div>
      </div>
      <!-- Formulaire à droite -->
      <div class="col-lg-6">
        <div class="card shadow border-0">
          <div class="card-body p-4">
            <h4 class="mb-4 text-center text-danger">Choisir le montant</h4>
            <hr>
            <form>
              <div class="mb-3 text-center">
                <div class="btn-group mb-2" role="group">
                  <button type="button" class="btn btn-outline-danger active">Unique</button>
                  <button type="button" class="btn btn-success">Mensuel</button>
                  <button type="button" class="btn btn-success">Trimestriel</button>
                  <button type="button" class="btn btn-success">Annuel</button>
                </div>
                
                <input type="number" class="form-control mb-2" placeholder="$ Montant libre">
              </div>
              <div class="mb-3">
                <label class="form-label">Désignation</label>
                <select class="form-select" name="designation">
                    <option disabled selected>Choisir le type de don</option>
                    <?php foreach($options as $key => $label): ?>
                    <option value="<?php echo $key; ?>" <?php
                        // Sélectionner automatiquement selon le type
                        if($key === $type) echo 'selected';
                    ?>>
                        <?php echo $label; ?>
                    </option>
                    <?php endforeach; ?>
                </select>
              </div>
              <div class="mb-3">
                <textarea class="form-control" rows="2" placeholder="Écrivez-nous un commentaire"></textarea>
              </div>
              <button type="submit" class="btn btn-danger w-100">Suivant &rarr;</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- MOYENS DE PAIEMENT -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row g-4 justify-content-center">
      <!-- PayPal -->
      <div class="col-md-6 col-lg-4">
        <div class="h-100 rounded-4 p-4 text-white text-center shadow" style="background: linear-gradient(135deg, #2a6edb, #3a8dde);">
          <h3 class="fw-bold mb-3" style="font-family: 'Arial Black', Arial, sans-serif;">
            <span style="font-style:italic;">Cash</span><span style="font-weight:normal;">App</span>
          </h3>
         
              <div style="font-size:1.75rem;">
                
                $EvaristeEjiba
                
              </div>
          <br>
           <br>       
         </div>
      </div>
      <!-- Virement Bancaire -->
      <div class="col-md-6 col-lg-4">
        <div class="h-100 rounded-4 p-4 text-white text-center shadow" style="background: #e43c5c;">
          <h3 class="fw-bold mb-3"><i class="bi bi-bank"></i> Virement Bancaire</h3>
          <div style="font-size:1.45rem;">
            <b>EQUITY BCDC</b> : CODE<br>
            SWIFT : 111100077725852 USD
            
          </div>
        </div>
      </div>
      <!-- Makabo -->
      <div class="col-md-6 col-lg-4">
        <div class="h-100 rounded-4 p-4 text-white text-center shadow" style="background: linear-gradient(135deg, #1de982, #1dc7e9);">
          <h3 class="fw-bold mb-3"><i class="bi bi-phone"></i> Mobile Money</h3>
          <br>
          <br>
          
        </div>
      </div>
      <!-- Mobile Money -->
      
      <!-- Western Union, MoneyGram, etc. -->
     
    </div>
  </div>
</section>
<?php include __DIR__ ."/../includes/footer.php"; ?>
</body>