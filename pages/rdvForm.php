<?php
$page_title = "Prendre RDV avec le pasteur";
include (__DIR__ ."/../includes/header2.php");

// Simuler les pasteurs avec jours et horaires de RDV
$pasteurs = [
  1 => [
    "nom" => "Archevêque Ejiba Yamapia Evariste",
    "photo" => BASE_URL . "assets/img/ejiba.jpeg",
    "rdv_jours" => [
      "Tuesday" => ["08:00", "09:00"],
      "Thursday" => ["08:00", "09:00"]
    ]
  ],
  2 => [
    "nom" => "Prophète EJIBA Eugène",
    "photo" => BASE_URL . "assets/img/clt16.jpg",
    "rdv_jours" => [
      "Wednesday" => ["10:00", "11:00"],
      "Friday" => ["14:00", "15:00"]
    ]
  ],
  3 => [
    "nom" => "Prophète KABULO Francis",
    "photo" => BASE_URL . "assets/img/clt17.jpg",
    "rdv_jours" => [
      "Monday" => ["09:00", "10:00"],
      "Saturday" => ["16:00", "17:00"]
    ]
  ]
];

// Récupérer le pasteur
$id = isset($_GET['pasteur']) ? intval($_GET['pasteur']) : 1;
$pasteur = isset($pasteurs[$id]) ? $pasteurs[$id] : $pasteurs[1];

// Générer les prochains créneaux disponibles (7 jours à venir)
$rdv_slots = [];
for($i=0; $i<7; $i++) {
    $date = strtotime("+$i day");
    $jour = date('l', $date);
    if(isset($pasteur['rdv_jours'][$jour])) {
        foreach($pasteur['rdv_jours'][$jour] as $heure) {
            $rdv_slots[] = [
                'date' => date('Y-m-d', $date),
                'jour' => $jour,
                'heure' => $heure
            ];
        }
    }
}

// Simuler le nombre de RDV pris (à remplacer par une requête DB)
$rdv_pris = [
    // '2025-10-14_08:00' => 2, ...
];

// Limite de RDV par créneau
$max_rdv = 10;

?>

<section class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>Prendre rendez-vous avec un pasteur</h2>
      <ol>
        <li><a href="<?php echo BASE_URL; ?>index.php">Accueil</a></li>
        <li>RDV Pasteur</li>
      </ol>
    </div>
  </div>
</section>

<section class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <!-- Photo agrandie -->
      <div class="col-lg-5 mb-4 mb-lg-0 text-center">
        <img src="<?php echo $pasteur['photo']; ?>" alt="<?php echo $pasteur['nom']; ?>" class="rounded shadow-lg" style="width:100%; max-width:400px; height:auto; object-fit:cover;">
        <h3 class="fw-bold mt-4"><?php echo $pasteur['nom']; ?></h3>
      </div>
      <!-- Formulaire et horaires -->
      <div class="col-lg-7">
        <div class="card shadow border-0">
          <div class="card-body p-4">
            <h4 class="mb-4 text-primary">Prendre rendez-vous</h4>
            <form method="post" action="#">
              <div class="mb-3">
                <label for="nom" class="form-label">Votre nom complet</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="rdv_slot" class="form-label">Choisissez un créneau disponible</label>
                <select class="form-select" id="rdv_slot" name="rdv_slot" required>
                  <option value="">Sélectionner...</option>
                  <?php foreach($rdv_slots as $slot): 
                    $key = $slot['date'].'_'.$slot['heure'];
                    $nb_rdv = isset($rdv_pris[$key]) ? $rdv_pris[$key] : 0;
                    $disabled = ($nb_rdv >= $max_rdv) ? 'disabled' : '';
                  ?>
                    <option value="<?php echo $key; ?>" <?php echo $disabled; ?>>
                      <?php echo ucfirst(strftime('%A', strtotime($slot['date'])))." ".date('d/m/Y', strtotime($slot['date']))." à ".$slot['heure']; ?>
                      <?php if($disabled): ?> (Saturé)<?php endif; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="mb-3">
                <label for="motif" class="form-label">Motif du rendez-vous</label>
                <textarea class="form-control" id="motif" name="motif" rows="2"></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">Confirmer le RDV</button>
            </form>
            <div class="mt-3">
              <small class="text-muted">* Un pasteur peut recevoir jusqu'à 10 RDV par créneau (20 le dimanche).</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ ."/../includes/footer.php"; ?>