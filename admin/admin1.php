<?php
// ...existing code...

require_once __DIR__ . "/../Config.php";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Admin Full - Tableau de bord</title>
  <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/css/styles.css" rel="stylesheet">
   <link href="<?php echo BASE_URL; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="<?php echo BASE_URL; ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo BASE_URL; ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <style>
    /* petites adaptations */
    .sb-sidenav .nav-link { cursor:pointer; }
    .task-pane { display:none; padding:20px; }
    .task-pane.active { display:block; }
  </style>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php">
    <img src="<?php echo BASE_URL; ?>assets/img/lg.jpg" alt="logo" style="height:48px;border-radius:50%;">
  </a>
  <ul class="navbar-nav ms-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" href="#"><i class="bx bx-user"></i> <?php echo htmlspecialchars($_SESSION['user_name'] ?? 'Admin'); ?></a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>login/register.php">Créer administrateur</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>login/logout.php">Déconnecter</a></li>
      </ul>
    </li>
  </ul>
</nav>

<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading">Core</div>
          <a class="nav-link" data-task="dashboard"><div class="sb-nav-link-icon"><i class="bx bx-tachometer-alt"></i></div> Tableau de bord</a>

          <div class="sb-sidenav-menu-heading">Gestion</div>
          <a class="nav-link" data-task="users"><div class="sb-nav-link-icon"><i class="fas fa-users"></i></div> Utilisateurs</a>
          <a class="nav-link" data-task="media"><div class="sb-nav-link-icon"><i class="fas fa-photo-video"></i></div> Media</a>
          <a class="nav-link" data-task="events"><div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div> Evénements</a>
          <a class="nav-link" data-task="appointments"><div class="sb-nav-link-icon"><i class="fas fa-handshake"></i></div> Rendez-vous</a>
          <a class="nav-link" data-task="stats"><div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div> Statistiques</a>
          <a class="nav-link" data-task="notifications"><div class="sb-nav-link-icon"><i class="fas fa-bell"></i></div> Notifications</a>
        </div>
      </div>
    </nav>
  </div>

  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
        <!-- Panes: une pane par tâche, initialement dashboard -->
        <div id="pane-dashboard" class="task-pane active">
          <h1 class="mt-4">Bienvenue, Super administrateur</h1>
          <p>Vue d'ensemble rapide.</p>
          <div class="row">
            <div class="col-md-3"><div class="card p-3">Total fidèles: <strong id="stat-users">--</strong></div></div>
            <div class="col-md-3"><div class="card p-3">RDV aujourd'hui: <strong id="stat-appointments">--</strong></div></div>
            <div class="col-md-3"><div class="card p-3">Médias: <strong id="stat-media">--</strong></div></div>
            <div class="col-md-3"><div class="card p-3">Évènements: <strong id="stat-events">--</strong></div></div>
          </div>
        </div>

        <div id="pane-users" class="task-pane">
          <h2>Gestion des utilisateurs</h2>
          <div id="users-content">
            <!-- contenu géré côté serveur / AJAX; placeholder -->
            <p><a class="btn btn-sm btn-primary" href="editUser.php">Aller à la gestion utilisateurs</a></p>
            <table class="table table-sm" id="users-table"><thead><tr><th>Nom</th><th>Email</th><th>Rôle</th><th>Actions</th></tr></thead><tbody></tbody></table>
          </div>
        </div>

        <div id="pane-media" class="task-pane">
          <h2>Gestion Media</h2>
          <p><a class="btn btn-success" href="adminMedia.php">Ouvrir gestion media</a></p>
        </div>

        <div id="pane-events" class="task-pane">
          <h2>Événements</h2>
          <p>Créer / modifier / supprimer des événements.</p>
        </div>

        <div id="pane-appointments" class="task-pane">
          <h2>Rendez-vous</h2>
          <p>Voir demandes, confirmer/rejeter.</p>
        </div>

        <div id="pane-stats" class="task-pane">
          <h2>Statistiques</h2>
          <div id="stats-content"></div>
        </div>

        <div id="pane-notifications" class="task-pane">
          <h2>Notifications</h2>
          <form id="notify-form">
            <div class="mb-2"><select name="to_role" class="form-select"><option value="all">Tous</option><option value="media">Media</option><option value="secretaire">Secrétaire</option></select></div>
            <div class="mb-2"><textarea name="message" class="form-control" required></textarea></div>
            <button class="btn btn-danger">Envoyer</button>
          </form>
        </div>

      </div>
    </main>

    <footer class="py-4 bg-light mt-auto">
      <div class="container text-center small">© <?php echo date('Y'); ?> Eglise Pentecotiste des Secouristes</div>
    </footer>
  </div>
</div>

<script src="<?php echo BASE_URL; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
(function(){
  // bascule de panes via sidebar
  document.querySelectorAll('.sb-sidenav .nav-link[data-task]').forEach(function(a){
    a.addEventListener('click', function(){
      var task = this.getAttribute('data-task');
      document.querySelectorAll('.task-pane').forEach(function(p){ p.classList.remove('active'); });
      var pane = document.getElementById('pane-' + task);
      if (pane) pane.classList.add('active');
      // pour certaines panes on pourrait charger via fetch/AJAX - placeholder: call loadStats for dashboard
      if (task === 'dashboard') loadStats();
    });
  });

  function loadStats(){
    // simple fetch placeholder -> tu peux remplacer par endpoint réel
    document.getElementById('stat-users').textContent = '—';
    document.getElementById('stat-appointments').textContent = '—';
    document.getElementById('stat-media').textContent = '—';
    document.getElementById('stat-events').textContent = '—';
  }

  // initial load
  loadStats();

  // notification form submit (AJAX)
  var nf = document.getElementById('notify-form');
  if (nf) nf.addEventListener('submit', function(e){
    e.preventDefault();
    fetch('<?php echo BASE_URL; ?>admin/notifyAdmin.php', { method:'POST', body:new FormData(nf) })
      .then(r=>r.json()).then(j=>{
        alert(j.success ? 'Envoyé' : (j.error||'Erreur'));
      }).catch(()=>alert('Erreur réseau'));
  });
})();
</script>
