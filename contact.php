<?php include "langues/decide-lan.php"; ?>

<!DOCTYPE html>
<html lang="<?php echo $lang["html-lang"]; ?>">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?php echo $lang["title3"]; ?></title>
    <link rel="icon" type="image/x-icon" href="assets/images/flavicone.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- include sub Header layout  -->
    <?php include 'layout/header.php'; ?>


    <!-- header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a href="index.php" class="d-lg-none"><img src="assets/images/logo-w.png" alt="logo" width="40" height="40" style="margin-left: 20px; margin-top: 5px;"></a>
          <a class="navbar-brand d-none d-lg-block" href="index.php"><h2>Green Planet Communication</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php"><?php echo $lang["nav-home"]; ?>
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"><?php echo $lang["nav-about"]; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php"><?php echo $lang["nav-service"]; ?></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.php"><?php echo $lang["nav-contact"]; ?></a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $lang["lang-btn"]; ?></a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="contact.php?lang=fr"><?php echo $lang["lang-fr"]; ?></a></li>
                <li><a class="dropdown-item" href="contact.php?lang=en"><?php echo $lang["lang-ang"]; ?></a></li>
                <li><a class="dropdown-item" href="contact.php?lang=es"><?php echo $lang["lang-es"]; ?></a></li>
              </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>


    <!-- Page Content -->
    <div class="page-heading header-text" id="top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><?php echo $lang["section-heading-h1-3"]; ?></h1>
            <span><?php echo $lang["section-heading-span-2"]; ?></span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information" id="Contacts">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4><?php echo $lang["contact-item1-h4"]; ?></h4>
              <a href="#"><?php echo $lang["Contact-item1-a"]; ?></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4><?php echo $lang["contact-item2-h4"]; ?></h4>
              <a href="#"><?php echo $lang["Contact-item2-a"]; ?></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4><?php echo $lang["contact-item3-h4"]; ?></h4>
              <a href="#"><?php echo $lang["Contact-item3-a"]; ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'layout/callback.php' ?>

    <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
      <!-- <iframe src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        <iframe src="https://maps.google.com/maps?q=E-Valley+–+Parc+E-Logistique+Épinoy-Cambrai,+France&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

    <div class="partners contact-partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
            <a href="https://www.andine-groupe.com/" target="_blank">
              <div class="partner-item">

                <img src="assets/images/client-01.png" title="1" alt="1">

                </div>
              </a>
              
             
              <a href="http://safeone-solution.com/" target="_blank">
            <div class="partner-item">

                <img src="assets/images/client-02.png" title="2" alt="2">

                </div>

            </a>

            <a href="http://www.predicens.com/" target="_blank">
            <div class="partner-item">

              <img src="assets/images/client-03.png" title="3" alt="3">

              </div>
            </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="notification" style="text-align: center;">
  
  </div>
  
  
  
      <!-- Footer Starts Here -->
      <?php include 'layout/footer.php' ?>
  </body>
</html>