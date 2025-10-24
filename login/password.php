<?php require_once __DIR__ . "/../Config.php"; ?>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <link href="<?php echo BASE_URL; ?>assets/img/lg.jpg" rel="icon">
         <link href="<?php echo BASE_URL; ?>assets/css/styles.css" rel="stylesheet">
         <link href="<?php echo BASE_URL; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
       <link href="<?php echo BASE_URL; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-secondary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 mb-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Modifier le mot de passe</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted"></div>
                                        <form>
                                                   <?php

                                                    echo '<input type="text" name="numero" id="numero" value="'.$_SESSION['Numero'].'" class="form-control" hidden> '; 

                                                    ?>
                                            <div class="form-floating input-group mb-3">
                                   
                                                <input class="form-control" type="password" name="ancienMotDePasse" id="ancienMotDePasse" required />
                                                <label for="ancienMotDePasse"> Ancien mot de passe</label>
                                                <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
                                                <i class="bx bx-hide" id="toggleIcon"></i>
                                                </span>
                                            </div>
                                             <div class="form-floating input-group mb-3">
                                   
                                                <input class="form-control" type="password" name="nouveauMotDePasse" id="nouveauMotDePasse" required />
                                                <label for="nouveauMotDePasse"> Nouveau mot de passe</label>
                                                <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
                                                <i class="bx bx-hide" id="toggleIcon"></i>
                                                </span>
                                            </div>
                                             <div class="form-floating input-group mb-3">
                                   
                                                <input class="form-control" type="password" name="confirmeMotDePasse" id="confirmeMotDePasse" required />
                                                <label for="confirmeMotDePasse"> Confirmer le mot de passe</label>
                                                <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
                                                <i class="bx bx-hide" id="toggleIcon"></i>
                                                </span>
                                            </div>
                                             <div class="row my-5">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-5 mb-3">
                                                                <input type="submit" value="Modifier" name="bouton" class="form-control btn btn-outline-primary">
                                                            </div>
                                           


                                           <div class="col-lg-1"></div>
                                                   <div class="col-lg-5 mb-3">
                                                    <input type="reset" value="Annuler" name="bouton" class="form-control btn btn-outline-danger"> 
                                            </div>          
                                                            
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?php echo BASE_URL; ?>login/login.php">Retouner pour s'identifier</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
           
        </div>
       
<script>
                (function(){
                  var toggle = document.getElementById('togglePassword');
                  if (!toggle) return;
                  toggle.addEventListener('click', function () {
                    var pw = document.getElementById('ancienMotDePasse');
                    var pw = document.getElementById('nouveauMotDePasse');
                    var pw = document.getElementById('confirmeMotDePasse');
                    var icon = document.getElementById('toggleIcon');
                    if (!pw) return;
                    if (pw.type === 'password') {
                      pw.type = 'text';
                      icon.classList.remove('bx-hide'); icon.classList.add('bx-show');
                    } else {
                      pw.type = 'password';
                      icon.classList.remove('bx-show'); icon.classList.add('bx-hide');
                    }
                  });
                })();
                </script>
