<?php 
   include 'assets/php/contactForm/ClassForm.php';
// print_r($_POST);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- jQuery CDN -->
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">
    </script>
    <!-- my CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>CV sabuj</title>
</head>
<body>
    <!-- <img src="assets/img/bg.jpg" alt="" style="position:absolute; z-index: -1; width: 100%; opacity: 0.8;"> test opacity on BGI -->
    <div class="container-fluid"> 
        <!-- header start here -->
        <header>
            <div id="burger" onclick="myBurger()">
                <div class="burger">
                    <p class="first-p"></p>
                    <p class="mid-p"></p>
                    <p class="last-p"></p>                        
                </div>
                <nav>
                    <ul>
                        <li><a href="#burger" class="underline">A Propos</a></li>
                        <li><a href="#competences" class="underline">Mes Compétences</a></li>
                        <li><a href="#formations" class="underline">Mes formations</a></li>
                        <li><a href="#experiences" class="underline">Mes Expériences</a></li>
                        <li><a href="#realisations" class="underline">Mes Réalisations</a></li>
                        <li><a href="#hobbys" class="underline">Mes Hobbys</a></li>
                        <li><a href="#footer" class="underline">Contactez Moi</a></li>
                        
                    </ul>
                </nav>
            </div>
        </header>
        <!-- header end here -->

        <!-- main start here -->
        <main>
            <div class="container">

                <div class="logo">
                    <img class="img-logo" src="assets/img/logo1.png" alt="">
                    <h1><span>S</span>ABUJ <span>B</span>ARUA</h1>
                    <h2><span>D</span>ÉVELOPPEUR <span>W</span>EB</h2>
                    <p class="motif">Actuellement en formation chez LepoleS, je cherche un stage (du 13 février au 12 avril) en tant que Développeur Web où je pourrais appliquer mes connaissances, compétences et progresser.</p>
                </div>
                <!-- /.logo -->

                <div class="link">
                    <a href="assets/img/CV-sabujBarua.pdf" target="_blank" downloaded>
                        <span>Télécharger mon CV</span>
                        <img src="assets/img/resume3.svg" alt="">
                    </a>

                    <a href="https://www.linkedin.com/in/sabuj-barua/" target="_blank"><i style="height: 50px;width: 50px;" class="text-white fab fa-linkedin"></i></a>
                    <a href="https://github.com/Sabujbarua" target="_blank"><i style="height: 50px;width: 50px;" class="text-white fab fa-github-square"></i></a>
                    <a href="https://twitter.com/rajsabuj" target="_blank"><i style="height: 50px;width: 50px;" class="text-white fab fa-twitter-square"></i></a>
                </div>
                <!-- /.link -->
                <div id="competences" class="competences">
                    <h3 class="fadeInOut">Mes Compétences</h3>
                    <div class="row">
                        <div class="col-lg-2 offset-1 test fadeInOut">
                            <img src="assets/img/logo/html.png" alt="">
                        </div>
                        
                        <div class="col-lg-2 offset-1 test fadeInOut">
                            <img src="assets/img/logo/css.png" alt="">
                        </div>
                        
                        <div class="col-lg-2 offset-1 fadeInOut">
                            <img src="assets/img/logo/javascript.png" alt="">
                        </div>
                        
                        <div class="col-lg-2 offset-1 fadeInOut">
                             <img src="assets/img/logo/php.png" alt="">
                        </div>
                        
                        <div class="col-lg-2 offset-1 fadeInOut">
                             <img src="assets/img/logo/jquery.png" alt="">
                        </div>
                        
                        <div class="col-lg-2 offset-1 fadeInOut">
                             <img src="assets/img/logo/mysql2.png" alt="">
                        </div>
                        
                        <div class="col-lg-2 offset-1 fadeInOut">
                             <img src="assets/img/logo/wordpress.png" alt="">
                        </div>
                        
                        <div class="col-lg-2 offset-1 fadeInOut">
                             <img src="assets/img/logo/ux.png" alt="">
                        </div>
                        
                    </div>
                    <!-- /.row -->

                    <h4  class="fadeInOut">Compétences à venir</h4>
                    <div class="row a_venir fadeInOut">
                        <div class="col-lg-2 offset-1">
                             <img src="assets/img/logo/Ajax1.png" alt="">
                        </div>
                        <div class="col-lg-2 offset-1">
                             <img src="assets/img/logo/angular.png" alt="">
                        </div>
                        <div class="col-lg-2 offset-1">
                             <img src="assets/img/logo/symfony.png" alt="">
                        </div>
                        <div class="col-lg-2 offset-1">
                             <img src="assets/img/logo/React-JS.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- /.competences -->


                <div id="experiences" class="experiences">
                    <h3 class="fadeInOut">Mes Expériences</h3>
                    <div class="experience1">
                        <div class="experience_text fadeInOut">
                            <h5>Développeur Front End (2018)</h5>
                            <p class="ent_name">ÉPATÉ à Station F</p>
                            <p class="e_text1">
                            - Intégration d'une page web <br>
                            - Création de logo <br>
                            - Maquette d'une page web <br> 
                            </p>
                        </div>
                        <div class="experience_img fadeInOut">
                            <img src="assets/img/stationf.gif" alt="">
                        </div>
                    </div>
                    <div class="experience2">
                        <div class="experience_text fadeInOut">
                            <h5>Commis De Cuisine Hôtel 4* (2015 - 2016) </h5>
                            <p class="ent_name">Restaurant Bachaumont</p>
                            <p class="e_text1">
                                - Appliquer les codes de communication internes<br>
                                - S'adapter aux fluctuations de l'activité<br>
                                - Organiser son poste de travail en appliquant des consignes 
                            </p>
                        </div>
                        <div class="experience_img fadeInOut">
                            <img src="assets/img/bachaumont.JPG" alt="">
                        </div>
                    </div>
                    <div class="experience3">
                        <div class="experience_text fadeInOut">
                            <h5>Vendeur Marche De Saint-Denis (2014-2015) </h5>
                            <p class="ent_name">Maison De Boutique</p>
                            <p class="e_text1">
                                - Organiser un espace de travail <br>
                                - Construire une relation clientele <br>
                                - Développer le CA 
                            </p>
                        </div>
                        <div class="experience_img fadeInOut">
                            <img src="assets/img/salesman.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- /.experiences -->

                <div id="formations" class="formations">
                    <h3 class="fadeInOut">Mes Formations</h3>
                    <div class="formation1">
                        <div class="formation_text fadeInOut">
                            <h5>Développeur Intégrateur Web  (Juillet 2018 - Avril 2019)</h5>
                            <p class="school">LePoleS</p>
                            <p class="e_text1">
                                - Concevoir des sites web responsives <br>
                                - Concevoir des pages web interactives pour l’internaute en JavaScript <br>
                                - Ajouter de l’interactivité aux pages web avec AJAX <br>
                                - Administrer des bases de données SGBDR avec le logiciel MySQL <br>
                                - Coder un site web complexe utilisant un framework MVC 
                            </p>
                        </div>
                        <div class="formation_img fadeInOut">
                            <img src="assets/img/lepoles.jpg" alt="">
                        </div>
                    </div>
                    <div class="formation1">
                        <div class="formation_text fadeInOut">
                            <h5>Développeur Web Fullstack JS (Octobre 2017 - Avril 2018)</h5>
                            <p class="school">Simplon.co</p>
                            <p class="e_text1">
                                - Maquetter une application <br>
                                - Concevoir une base de données <br>
                                - Mettre en place une base de données <br>
                                - Développer une interface utilisateur <br>
                                - Développer des composants d'accès aux données 
                            </p>
                        </div>
                        <div class="formation_img fadeInOut">
                            <img src="assets/img/simplon.jpg" alt="">
                        </div>
                    </div>

                </div>
                <!-- /.formations -->

                <div id="realisations" class="realisations">
                    <h3 class="fadeInOut">Mes Réalisations</h3>
                    <div class="row">
                        <div class="col-md-4 fadeInOut">
                            <div class="realisation" style="">
                                <div class="plus" style="">
                                    <div class="horizontal2" style=""></div>
                                    <div class="vertical2" style=""></div>
                                </div>
                    
                                <div class="realisation_img">
                                    <a href="assets/img/my-first-site.png" target="_blank"> 
                                        <img src="assets/img/my-first-site.png" alt="" style="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 fadeInOut">
                            <div class="realisation" style="">
                                <div class="plus" style="">
                                    <div class="horizontal2" style=""></div>
                                    <div class="vertical2" style=""></div>
                                </div>
                    
                                <div class="realisation_img">
                                    <a href="assets/img/my-second-site.png" target="_blank"> 
                                        <img src="assets/img/my-second-site.png" alt="" style="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 fadeInOut">
                            <div class="realisation" style="">
                                <div class="plus" style="">
                                    <div class="horizontal2" style=""></div>
                                    <div class="vertical2" style=""></div>
                                </div>
                    
                                <div class="realisation_img">
                                    <a href="https://rajsabuj.000webhostapp.com/puma-triple-black-pack/index.html" target="_blank">
                                        <img src="assets/img/my-third-site.jpg" alt="" style="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-5 fadeInOut">
                            <div class="realisation" style="">
                                <div class="plus" style="">
                                    <div class="horizontal2" style=""></div>
                                    <div class="vertical2" style=""></div>
                                </div>
                    
                                <div class="realisation_img">
                                    <a href="assets/img/Jurassic.jpg" target="_blank">
                                        <img src="assets/img/Jurassic.jpg" alt="" style="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-5 fadeInOut">
                            <div class="realisation" style="">
                                <div class="plus" style="">
                                    <div class="horizontal2" style=""></div>
                                    <div class="vertical2" style=""></div>
                                </div>
                    
                                <div class="realisation_img">
                                    <a href="assets/img/Restaurant.jpg" target="_blank">
                                        <img src="assets/img/Restaurant.jpg" alt="" style="">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-5 fadeInOut">
                            <div class="realisation" style="">
                                <div class="plus" style="">
                                    <div class="horizontal2" style=""></div>
                                    <div class="vertical2" style=""></div>
                                </div>
                    
                                <div class="realisation_img">
                                    <a href="assets/img/eshop.jpg" target="_blank">
                                        <img src="assets/img/eshop.jpg" alt="" style="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.realisations -->

                <div id="hobbys" class="hobbys">
                    <h3 class="fadeInOut">Mes Hobbys</h3>
                    <div class="row">
                        <div class="col-md-4 fadeInOut">
                            <div class="realisation2">
                                <div class="site">
                                    <div class="devant">
                                        <figure>
                                            <img src="assets/img/gym.jpg" alt="" style="">
                                        </figure>
                                    </div>
                                    <div class="arriere">
                                        <!-- <a target="_blank" href="assets/img/gym2.jpeg"> + </a> -->
                                        <img src="assets/img/gym3.JPG" alt="" style="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 fadeInOut">
                            <div class="realisation2">
                                <div class="site">
                                    <div class="devant">
                                        <figure>
                                            <img src="assets/img/swimming.jpg" alt="" style="">
                                        </figure>
                                    </div>
                                    <div class="arriere">
                                        <!-- <a target="_blank" href="assets/img/swimming.jpeg"> + </a> -->
                                        <img src="assets/img/swimming.jpeg" alt="" style="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 fadeInOut">
                            <div class="realisation2">
                                <div class="site">
                                    <div class="devant">
                                        <figure>
                                            <img src="assets/img/madol-doova.jpg" alt="" style="">
                                        </figure>
                                    </div>
                                    <div class="arriere">
                                        <!-- <a target="_blank" href="https://rajsabuj.000webhostapp.com/puma-triple-black-pack/index.html"> +
                                        </a> -->
                                        <img src="assets/img/devdas.jpg" alt="" style="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 fadeInOut">
                            <div class="realisation2">
                                <div class="site">
                                    <div class="devant">
                                        <figure>
                                            <img src="assets/img/kitchen.jpg" alt="" style="">
                                        </figure>
                                    </div>
                                    <div class="arriere">
                                        <img src="assets/img/food.JPG" alt="" style="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 fadeInOut">
                            <div class="realisation2">
                                <div class="site">
                                    <div class="devant">
                                        <figure>
                                            <img src="assets/img/picture1.jpg" alt="" style="">
                                        </figure>
                                    </div>
                                    <div class="arriere">
                                        <img src="assets/img/picture2.jpg" alt="" style="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-5 fadeInOut">
                            <div class="realisation2">
                                <div class="site">
                                    <div class="devant">
                                        <figure>
                                            <img src="assets/img/picture3.jpg" alt="" style="">
                                        </figure>
                                    </div>
                                    <div class="arriere">
                                            <img src="assets/img/picture4.jpg" alt="" style="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.hobbys -->

            </div>
            <!-- /.container -->
        </main>
        <!-- main end here -->
    
        <!-- footer start here -->
        <footer id="footer">
            <div class="container">
                <h3 class="fadeInOut">Contactez moi</h3>
                <!-- php here for success message -->
                <?php if(isset($success)): ?>
                    <div class=" mb-5 alert alert-success"><?= $success;?></div>
                <?php endif ?>
                <!-- end of the php for success message -->

                <form method="POST" action="">
                    <div class="col-md-10 offset-1 mb-3">
                        <span><?php if(isset($errNP)) echo $errNP;  ?></span>
                        <input type="text" class="form-control" name="nomPrenom" id="nom" placeholder="Nom Prenom" value="<?php //echo $_POST['nomPrenom'] ?? ''; ?>" required>
                    </div>

                    <div class="col-md-10 offset-1 mb-3">
                        <span><?php if(isset($errEmail)) echo $errEmail;  ?></span>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php //echo $_POST['email'] ?? ''; ?>" required>
                    </div>

                    <div class="col-md-10 offset-1 mb-3 fadeInOut">
                        <span><?php if(isset($errSujet)) echo $errSujet;  ?></span>
                        <input type="text" class="form-control text-light" name="sujet" id="sujet" placeholder="Sujet" value="<?php //echo $_POST['sujet'] ?? ''; ?>" required>
                    </div>

                    <div class="col-md-10 offset-1 mb-3 fadeInOut">
                        <span><?php if(isset($errMessage)) echo $errMessage;  ?></span>
                        <textarea value="<?php //echo $_POST['message'] ?? ''; ?>" class="fadeInOut text-light" placeholder=" Écrit votre message ici" name="message" id="message" cols="30" rows="8"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 offset-3 fadeInOut">
                            <button type="submit" class="btn btn-block btn-outline-light mb-4">Enregistrer</button>
                        </div>
                    </div>

                </form>
            </div>
            
        </footer>
        <!-- footer end here -->
        
    </div> <!--ending of Container-fluid -->
    
    <div class="copyRight">
        <p>Copyright &copy; CVSabuj 2018<p>
    </div>


    
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- my script js -->
    <script src="assets/js/main.js"></script>
    <!-- link for jQuery fadeIn fadeOut -->
    <script src="assets/js/jquery.js"></script>


</body>
</html>
