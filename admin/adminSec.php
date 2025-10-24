<?php
// ...existing code...

require_once __DIR__ . "/../Config.php";
if (session_status() === PHP_SESSION_NONE) session_start();
require_role(['secretaire']);
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Admin Secrétaire</title>
  <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/css/styles.css" rel="stylesheet">
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php"><img src="<?php echo BASE_URL; ?>assets/img/lg.jpg" style="height:48px;border-radius:50%;"></a>
  <ul class="navbar-nav ms-auto"><li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>login/logout.php">Déconnecter</a></li></ul>
</nav>

<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading">Secrétariat</div>
          <a class="nav-link" data-task="slots"><div class="sb-nav-link-icon"><i class="fas fa-clock"></i></div> Gérer créneaux pasteurs</a>
          <a class="nav-link" data-task="requests"><div class="sb-nav-link-icon"><i class="fas fa-inbox"></i></div> Demandes RDV</a>
          <a class="nav-link" data-task="create-appointment"><div class="sb-nav-link-icon"><i class="fas fa-calendar-plus"></i></div> Prendre RDV</a>
        </div>
      </div>
    </nav>
  </div>

  <div id="layoutSidenav_content">
    <main class="p-4">
      <div id="pane-slots" class="task-pane active">
        <h3>Créneaux des pasteurs</h3>
        <p><a class="btn btn-primary" href="admin_slot_manage.php">Ouvrir gestion créneaux</a></p>
      </div>

      <div id="pane-requests" class="task-pane">
        <h3>Demandes de rendez-vous</h3>
        <div id="requests-list">Chargement…</div>
      </div>

      <div id="pane-create-appointment" class="task-pane">
        <h3>Prendre un rendez-vous pour un fidèle</h3>
        <form id="create-rdv" action="<?php echo BASE_URL; ?>admin/admin_appointment_create.php" method="post">
          <div class="mb-2"><input name="user_name" class="form-control" placeholder="Nom du fidèle" required></div>
          <div class="mb-2"><input name="user_email" class="form-control" placeholder="Email (optionnel)"></div>
          <div class="mb-2"><select name="pastor_id" class="form-select" required><?php
            foreach($pdo->query("SELECT id, name FROM pastors") as $p) echo "<option value=\"{$p['id']}\">".htmlspecialchars($p['name'])."</option>";
          ?></select></div>
          <div class="row g-2">
            <div class="col"><input type="date" name="slot_date" class="form-control" required></div>
            <div class="col"><input type="time" name="slot_time" class="form-control" required></div>
          </div>
          <div class="mb-2"><textarea name="notes" class="form-control" placeholder="Notes"></textarea></div>
          <button class="btn btn-success">Enregistrer RDV</button>
        </form>
      </div>
    </main>
    <footer class="py-2 text-center small">© <?php echo date('Y'); ?></footer>
  </div>
</div>

<script src="<?php echo BASE_URL; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
(function(){
  document.querySelectorAll('.sb-sidenav .nav-link[data-task]').forEach(a=>{
    a.addEventListener('click',function(){
      var t = this.getAttribute('data-task');
      document.querySelectorAll('.task-pane').forEach(p=>p.classList.remove('active'));
      var pane = document.getElementById('pane-' + t);
      if (pane) pane.classList.add('active');
    });
  });

  // charger demandes RDV (endpoint à créer)
  fetch('<?php echo BASE_URL; ?>admin/admin_rdv_list.php').then(r=>r.text()).then(html=>{
    var d = document.getElementById('requests-list');
    if (d) d.innerHTML = html;
  }).catch(()=>{ if (document.getElementById('requests-list')) document.getElementById('requests-list').innerHTML = 'Erreur chargement'; });
})();
</script>
