<?php 
    session_start();
    include 'module-conect.php';
?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="icon" href="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/liner_icon.css">
    <link rel="stylesheet" href="css/search.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse"
                          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse main-menu-item justify-content-center"
                          id="navbarSupportedContent">
                          <ul class="navbar-nav">
                              <li class="nav-item active">
                                  <a class="nav-link" href="index.php">Acceuil</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="archive.php">Galerie</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="shop.php"> Shopping</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="contact.php">Contact</a>
                              </li>
                              <?php if (isset($_SESSION['pseudo'])) 
                                    { ?>
                              <li class="nav-item nav-link" 
                                    style="padding-right: 0px; font-size: 14px">
                                            Bonjour <?= $_SESSION['pseudo']; ?>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="deconnect.php" 
                                        style="padding: 41px 0 41px 15px; font-size: 14px">Se déconnecter</a>
                              </li>
                                    <?php 
                                    } 
                                    else { ?> 
                              <li class="nav-item">
                                  <a class="nav-link" href="connection.php" 
                                        style="padding-right: 0px; font-size: 14px">Se connecter</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="inscription.php"
                                     style="padding: 41px 0 41px 15px; font-size: 14px" >S'inscrire</a>
                              </li>
                                    <?php 
                                    }
                                ?>
                          </ul>
                      </div>
                      <div class="header_social_icon d-none d-lg-block">
                          <ul>
                              <li><a href="https://facebook.com/Bibichecoiffure" class="d-none d-lg-block"><i class="ti-facebook"></i></a></li>
                              <li><a href="https://instagram.com/bibichecoiffure" class="d-none d-lg-block"><i class="ti-instagram"></i></a></li>
                          </ul>
                      </div>
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- Header part end-->