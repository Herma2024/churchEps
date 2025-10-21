<?php require_once __DIR__ . "/../Config.php"; ?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Se connecter</title>
        <link href="<?php echo BASE_URL; ?>assets/img/lg.jpg" rel="icon">
         <link href="<?php echo BASE_URL; ?>assets/css/styles.css" rel="stylesheet">
       <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
   <body class="bg-secondary">

  <!-- Slides -->
 
 


 
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="card shadow-lg border-0 rounded-lg mt-5" style="height:100%;">
                                    <div class="card-header text-center"> 
                                        <a class="navbar-img img-fluid" href="#">
                                           <img src="<?php echo BASE_URL; ?>assets/img/lg.jpg" alt="logo" style="height:70px;">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Entrez votre adresse e-mail </label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Mot de passe</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="<?php echo BASE_URL; ?>login/password.php">Mot de passe oublié?</a>
                                                <a class="btn btn-primary" href="index.html">Se Connecter</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?php echo BASE_URL; ?>login/register.php">Créer un nouveau compte</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

        </div>
   
    

