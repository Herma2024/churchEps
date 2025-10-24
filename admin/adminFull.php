<?php require_once __DIR__ . "/../Config.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
       <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/css/styles.css" rel="stylesheet">
      <link href="<?php echo BASE_URL; ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo BASE_URL; ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
      
     <style>
      /* make the admin layout full height */
      html,body,#layoutSidenav, .page-wrapper { height: 100%; min-height: 100vh; }

      /* navbar tweaks */
      .sb-topnav .container {
        width: 100%;
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap:1rem;
      }

      .brand-and-title { display:flex; align-items:center; gap:0.75rem; }
      .brand-and-title .navbar-brand img { height:70px; width:70px; border-radius:50%; object-fit:cover; margin-left:0; }
      .header__navbar h4 { margin:0; font-size:1.05rem; color:#212529; }

      /* right corner: user + toggle grouped */
      .navbar-right { display:flex; align-items:center; gap:0.5rem; }

      /* sidebar toggle button – square that matches navbar height */
      #sidebarToggle {
        width:48px;
        height:48px;
        display:flex;
        align-items:center;
        justify-content:center;
        border-radius:8px;
        border:1px solid rgba(0,0,0,0.08);
        background:transparent;
      }

      /* mobile: stack logo and church name, make layout take full width */
      @media (max-width: 576px) {
        .sb-topnav .container { flex-direction:column; align-items:flex-start; padding:0.5rem; }
        .brand-and-title { flex-direction:row; align-items:center; width:100%; }
        .header__navbar { margin-left:0; margin-top:0.35rem; }
        .header__navbar h4 { font-size:0.95rem; }
        /* place user+toggle at the right of top row */
        .top-right-row { width:100%; display:flex; justify-content:space-between; align-items:center; }
        /* ensure toggle and dropdown don't wrap */
        .navbar-right { gap:0.3rem; }
      }

      /* ensure the small corner button visually aligns with the dropdown */
      .nav-link.dropdown-toggle { padding-right:0.6rem; padding-left:0.6rem; }
    </style>
    
    <body class="sb-nav-fixed">    
           <div class="page-wrapper">
                <nav class="sb-topnav navbar navbar-expand">
                        <div class="container">
                            <div class="brand-and-title">
                                <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php">
                                    <img src="<?php echo BASE_URL; ?>assets/img/lg.jpg" alt="logo">
                                </a>
                                <div class="header__navbar d-none d-sm-block">
                                    <h4>Eglise Pentecotiste des Secouristes</h4>
                                </div>
                            </div>

                            <!-- top-right area: username dropdown + sidebar toggle -->
                            <div class="top-right-row">
                                    <div class="navbar-right">
                                        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                                    <i class="fas fa-user fa-fw"></i> <?php echo htmlspecialchars($_SESSION['user_name'] ?? 'Admin'); ?>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>login/register.php"><i class="fas fa-user"></i> Créer administrateur</a></li>
                                                        <li><hr class="dropdown-divider" /></li>
                                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>login/password.php"><i class="fas fa-gear"></i> Paramètre</a></li>
                                                        <li><hr class="dropdown-divider" /></li>
                                                        <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>login/logout.php"><i class="fas fa-power-off"></i> Déconnecter</a></li>
                                                    </ul>
                                            </li>
                                        </ul>

                                        <button class="btn" id="sidebarToggle" title="Basculer le menu"><i class="fas fa-bars"></i></button>
                                    </div>
                            </div>

                            <!-- mobile church name displayed under the logo -->
                            <div class="header__navbar d-block d-sm-none w-100" style="margin-top:.35rem;">
                            <h4 class="text-start">Eglise Pentecotiste des Secouristes</h4>
                            </div>
                        </div>
                </nav>

               

                <div id="layoutSidenav">
                        <div id="layoutSidenav_nav">
                            <nav class="sb-sidenav bg-light accordion " id="sidenavAccordion">
                               <div class="sb-sidenav-menu">
                                    <div class="nav">
                                        <div class="sb-sidenav-menu-heading">Menu principales</div>
                                        <a class="nav-link" href="index.html">
                                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                            Tableau de bord
                                        </a>
                                    
                                    </div>
                                    <div class="nav">
                

                                        <div class="sb-sidenav-menu-heading">Gestion</div>
                                        <a class="nav-link" href="index.html" data-task="users"><div class="sb-nav-link-icon"><i class="fas fa-users"></i></div> Utilisateurs</a>
                                        <a class="nav-link" href="index.html" data-task="media"><div class="sb-nav-link-icon"><i class="fas fa-photo-video"></i></div> Media</a>
                                        <a class="nav-link" href="index.html" data-task="events"><div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div> Evénements</a>
                                        <a class="nav-link" href="index.html" data-task="appointments"><div class="sb-nav-link-icon"><i class="fas fa-handshake"></i></div> Rendez-vous</a>
                                        <a class="nav-link" href="index.html" data-task="stats"><div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div> Statistiques</a>
                                        <a class="nav-link" href="index.html" data-task="notifications"><div class="sb-nav-link-icon"><i class="fas fa-bell"></i></div> Notifications</a>
                                    </div>
                                </div>
                                                   
                             </nav>
                        </div>
                    <div id="layoutSidenav_content">
                        <main>
                            <div class="container-fluid px-4">
                                <h1 class="mt-4 text-center"></h1>
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active">Tableau de bord</li>
                                </ol>
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-primary text-white mb-4">
                                            <div class="card-body">Primary Card</div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white stretched-link" href="#">View Details</a>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-warning text-white mb-4">
                                            <div class="card-body">Warning Card</div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white stretched-link" href="#">View Details</a>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-success text-white mb-4">
                                            <div class="card-body">Success Card</div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white stretched-link" href="#">View Details</a>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-danger text-white mb-4">
                                            <div class="card-body">Danger Card</div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white stretched-link" href="#">View Details</a>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            
                            </div>
                            
                        </main>
                   </div>
                </div>  
                    <footer id="footer">

                        <div class="footer-top">
                            <div class="container d-md-flex py-2">

                                <div class="me-md-auto text-center text-md-start">
                                    <div class="copyright">
                                        &copy; Copyright <strong><span>Eglise Pentecotiste des Secouristes</span></strong>. Tous Droits Réservés.-
                                    
                                    </div>
                                    <div class="credits">
                                        
                                        Réalisé par <a href="https://hermansimbaleva.com/">Hermans IMBALEVA</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </footer>
               </div> 
         <script src="<?php echo BASE_URL; ?>assets/js/scripts.js"></script>
         <script src="<?php echo BASE_URL; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      </body>
</html>
