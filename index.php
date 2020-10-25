<!doctype html>
<?php
                        if(isset($_GET["submit"])){
                            if($_GET["name"]!=""){
                                if($_GET["email"]!=""){
                                    if($_GET["message"]!=""){
                                        $to      = 'rebouli.saifeddine@gmail.com';
                                        $subject = 'portfilio email';
                                        $message = $_GET["message"];
                                        $headers = $_GET["email"] . "\r\n" .
                                            'Reply-To: '.$_GET["email"] . "\r\n" .
                                            'X-Mailer: PHP/' . phpversion();
                                        mail($to, $subject, $message, $headers);
                                        header("location:index.php?type=success&error=bien poster");

                                    }
                                    else{
                                        header("location:index.php?type=danger&error=insert votre message");
                                    }
                                }
                                else{
                                    header("location:index.php?type=danger&error=insert votre email");
                                }
                            }
                            else{
                                header("location: index.php?type=danger&error=insert votre nom");
                            }
                        }
                    ?>
<html lang="fr">
    <head>
        <meta charset="UTF-8"/>
        <meta name="desciption" content="un portfolio de développeur Web. on peut crée des site ou des pages responsive avec tous les écran et respect les regles de seo bassé sur des langage trée modern comme css3,bootstrap 4 et javascript,php." />
        <meta name="keywords" content="html css javascript php jquery web développement full stack front-end back-end">
        <meta name="application-name" content="rsf développement">
        <meta name="author" content="rsf développement">
        <!-- première telephone -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- comtabilité avec internet explorer -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap_mod.css">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/page.css">
        <title>rsf developpement</title>
        <link rel="shortcut icon" sizes="32x32" href="../image/rsf.PNG" type="mage/x-icon">
        <script src="https://kit.fontawesome.com/7f7d28272a.js" crossorigin="anonymous"></script>
         <!--[if lt IE 9]>
        <!-- pour internet explorer comprond les tag nav,header... -->
      <script src="../javascript/html5shiv.min.js"></script>
        <!-- pour internet explorer comprond media quirer... -->
      <script src="../javascript/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
                       

        <!--debut navbare-->
        <div id="loding">
            <div class="lds-ripple"><div></div><div></div></div>
        </div>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="index.php">rebouli saif eddine</a>
          <button id="navbar-toggler"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" style="border-bottom-width:0px;" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Apropos de moi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Mes compétence</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">mes travaux</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">où me trouver</a>
                </li>
            </ul>
          </div>
        
          <input type="button" id="btn-contact" value="contact">
        </nav>
        
        <!--fin navbare-->
        
        <!--debut home -->
        <div class="home">
            <div class="content-fluid">
                <div class="row">
                <div class="col-lg-7 col-12" >
                    <div  class="description text-center">
                        <h4 class="lead">Bienvenue chez-nous . nous remercie vous pour visite mon portfolio .dans ce site vous trouve tous about-nous .à partir de mon cv , mes compitance ,et mes traveux  jusqu'a mes resaux sociaux et meme contacter nous.</h4>
                    </div>  
                </div>
                <div class=" col-lg-5 col-12">
                    <div class="photo-presontation">
                      <img class="img-fluid" src="../photo/4.png">
                    </div>
                 </div>
                </div>
                <div class=' col-12 text-center' >
                    <i id="down"  class="fas fa-chevron-down wow flash" data-wow-duration="3s" data-wow-iteration="infinite" ></i>
                </div>
            </div>
        </div>
        <!--fin home -->
        
        <!-- debut biographie-->
        
        <div id="biographi">
            <div class="content-fluid">
                <div class="row">
                    <div id="biographie-text" class="col-lg-7 col-12">
                        <div>
                        <h6 class="lead">
                        je m'appelle rebouli saif eddine je suis étudiant en informatique.j'ai la lecence en Ingénierie des systèmes d'information et du logiciel "isil" .je prépare au master en softwer ingénierie . pour plus de détaille voire mon cv dessous.
                        </h6>
                        </div>
                        <div class="offset-2 col-7 offset-lg-0 col-lg-12">
                        <ul>
                            <li><a href="../image/20-modele-cv-academique-noir.pdf" download><i class="fas fa-file-pdf"></i></a></li>
                            <li><a href="../image/20-modele-cv-academique-noir.docx" download><i class="fas fa-file-word"></i></a></li>
                        </ul>
                        </div>
                    </div>
                    <div id="photo-personel" class="col-lg-5 col-12">
                        <img class="img-fluid" src="../photo/sifo.jpg">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- fin biographie-->
        <!-- debut compitance-->
        <div id="compitance">
            <div id="mes-compitances" class="content">
                <div class="row">
                    <div class="html wow fadeInUp text-center col-6  col-lg-3">
                        <img src="../photo/html.png" class="img-fluid">
                        <h4>html5</h4>
                       
                    </div>
                    <div class="css wow fadeInUp text-center col-6 col-lg-3">
                        <img src="../photo/css.PNG" class="img-fluid">
                        <h4>css3</h4>
                        
                    </div>
                    <div class="js wow fadeInUp  text-center col-6 col-lg-3">
                        <img src="../photo/js.png" class="img-fluid">
                        <h4>javascript</h4>
                        
                    </div>
                    <div class="mysql wow fadeInUp text-center col-6 col-lg-3">
                        <img src="../photo/logo-mysql-26295.png" class="img-fluid">
                        <h4>mysql</h4>
                        
                    </div>
                    <div class="php wow fadeInUp text-center col-6 offset-lg-3 col-lg-3">
                        <img src="../photo/new-php-logo.png" class="img-fluid"><br/>
                        <h4>php</h4>
                        
                    </div>
                    <div class="jquery wow fadeInUp text-center col-6 col-lg-3">
                        <img src="../photo/jquery-logo-png--800.gif" class="img-fluid"><br/>
                        <h4>jquery</h4>
                        
                    </div>
                </div>            
            </div>
        </div>
        <!-- fin compitance-->
        
        <!-- debut mes traveux -->
        
        <div id="mes_traveux">
            <div class="content-fluid">
                <div class="row">
                    <div class="col-lg-6 wow bounceInLeft">
                        <div class="mon_travaile ">
                            <img   class=" img-fluid" src="../photo/20200719_045022_0000.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow bounceInRight">
                        <div class=" mon_travaile">
                            <img  class=" img-fluid" src="../photo/20.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- end mes traveux -->
        
        <!--debut contact-->
        
                    
        <div class="contact-me">
            <div class="content-fluid">
                    <form action="index.php" method="get">
                        <div class="row">
                            <div class="col-lg-3 offset-lg-3">
                            <input type="text" name="name" class="form-control-lg " id="user-name" placeholder="name"><br/>
                            <input type="email" name="email" class="form-control-lg " id="email" placeholder="email" ><br/> 
                            </div>
                            <div class="col-lg-3">
                                <textarea name="message" class="form-control-lg "  id="contenue" placeholder="message" ></textarea>
                            </div><br/>
                            <div class="offset-lg-3 col-12 col-lg-6"><input name="submit" type="submit" value="envoyer"></div>
                            <div class="error offset-lg-3 col-12 col-lg-6">
                                <div class="alert alert-<?php echo @$_GET["type"]; ?>" role="alert">
                                    <?php echo @$_GET["error"] ;?>
                                </div>
                            </div>
                        </div>
                    </form>
                        
            </div>
        </div>
        <!--end contact-->
        <!-- debut ou me trouve -->
        <div class="me_trouve ">
            <div class="content-fluid">
                <div class="row">
                    <div class="offset-md-4 offset-4 col-5 col-md-5">
                        <ul >
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- end ou me trouve -->
    <script src="../javascript/jquery_li.js"></script>
    <script src="../javascript/bootstrap.min.js"></script>
    <script src="../javascript/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="../javascript/page.js"></script>
    </body>
</html>
