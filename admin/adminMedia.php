<?php
// ...existing code...

require_once __DIR__ . "/../Config.php";
if (session_status() === PHP_SESSION_NONE) session_start();
require_role(['media']); // autorise media (full aussi possible via require_role helper)
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Admin Media</title>
  <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo BASE_URL; ?>assets/css/styles.css" rel="stylesheet">
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php"><img src="<?php echo BASE_URL; ?>assets/img/lg.jpg" style="height:48px;border-radius:50%;"></a>
  <ul class="navbar-nav ms-auto">
    <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>login/logout.php">Déconnecter</a></li>
  </ul>
</nav>

<div id="layoutSidenav">
  <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark">
      <div class="sb-sidenav-menu">
        <div class="nav">
          <div class="sb-sidenav-menu-heading">Media</div>
          <a class="nav-link" data-task="list-media"><div class="sb-nav-link-icon"><i class="fas fa-images"></i></div> Liste médias</a>
          <a class="nav-link" data-task="upload"><div class="sb-nav-link-icon"><i class="fas fa-upload"></i></div> Ajouter média</a>
          <a class="nav-link" data-task="program-event"><div class="sb-nav-link-icon"><i class="fas fa-calendar-plus"></i></div> Programmer évènement</a>
        </div>
      </div>
    </nav>
  </div>

  <div id="layoutSidenav_content">
    <main class="p-4">
      <div id="pane-list-media" class="task-pane active">
        <h3>Médias publiés</h3>
        <div id="media-list">Chargement…</div>
      </div>

      <div id="pane-upload" class="task-pane">
        <h3>Téléverser média</h3>
        <form id="upload-form" action="<?php echo BASE_URL; ?>admin/admin_media_upload.php" method="post" enctype="multipart/form-data">
          <div class="mb-2"><input type="file" name="media" accept="image/*,video/*" required class="form-control"></div>
          <div class="mb-2"><input name="title" class="form-control" placeholder="Titre"></div>
          <div class="mb-2"><input type="date" name="publish_date" class="form-control"></div>
          <button class="btn btn-success">Téléverser</button>
        </form>
      </div>

      <div id="pane-program-event" class="task-pane">
        <h3>Programmer un évènement</h3>
        <form id="event-form" action="<?php echo BASE_URL; ?>admin/admin_event_create.php" method="post">
          <div class="mb-2"><input name="title" class="form-control" placeholder="Titre" required></div>
          <div class="mb-2"><textarea name="description" class="form-control" placeholder="Description"></textarea></div>
          <div class="mb-2"><input type="datetime-local" name="starts_at" class="form-control" required></div>
          <button class="btn btn-primary">Créer</button>
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
      var pane = document.getElementById('pane-' + t.replace('-','-'));
      if (pane) pane.classList.add('active');
    });
  });

  // charger liste médias simple via fetch (endpoint à créer)
  fetch('<?php echo BASE_URL; ?>admin/admin_media_list.php').then(r=>r.text()).then(html=>{
    var d = document.getElementById('media-list');
    if (d) d.innerHTML = html;
  }).catch(()=>{ if (document.getElementById('media-list')) document.getElementById('media-list').innerHTML = 'Erreur chargement'; });
})();
</script>
