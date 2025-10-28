  <nav class="sb-topnav navbar navbar-expand">

                    <a class="navbar-brand" href="<?php echo BASE_URL; ?>index.php">
                        <img src="<?php echo BASE_URL; ?>assets/img/lg.jpg" alt="logo" 
                        style="height:60px; height :70px; width : 70px; border-radius: 50%; object-fit: cover; margin-left:30px;">
                    </a>
                    <div class="header__navbar d-none d-sm-block w-100" style="margin-top:.35rem;">
                            <h4 class=" text-stars">Eglise Pentecotiste des Secouristes</h4>
                            
                    </div>
                    
                    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                    <!-- Navbar Search-->
                    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <div class="input-group">
                            
                        </div>
                    </form>
                    <!-- Navbar-->
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown" href="#"><i class="fas fa-user fa-fw"></i> <?php echo htmlspecialchars($_SESSION['user_name'] ?? 'Admin'); ?></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">    
                                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>login/register.php">
                                    <i class="fas  fa-user"></i>Créer administrateur</a></li>
                            </div>
                            <div class="account-dropdown__item">   
                                <li><hr class="dropdown-divider" /></li> 
                                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>login/password.php">
                                    <i class="fas  fa-gear"></i>Paramètre</a></li>
                                </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <li><hr class="dropdown-divider" /></li>
                                    <li><a class="dropdown-item" href="#!"><i class="fas fa-power-off"></i>
                                        Deconnecter</a></li>
                               </div>
                            </ul>
                        </li>
                    </ul>
                </nav>