<?php 

// For windows version, just remove the ":8080" from the URL below.
define("ASSETS_PATH", "http://localhost:8080/capstone-2/app/assets/");
define("IMG_PATH", "http://localhost:8080/capstone-2/app/assets/images/");
define("PARTIALS_PATH", "http://localhost:8080/capstone-2/app/partials/");

?>

<!DOCTYPE html>
<html lang="en">
  <head>

  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>NoteWorthy | Home</title>

  <!-- Dependencies starting with Bootstrap -->
  <!-- Non-CDN -->
  <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/bootstrap.min.css">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/animate.css">
  <link href="<?php echo ASSETS_PATH; ?>css/hover.css" rel="stylesheet" media="all">
  <!-- And Animista CSS -->

  <!-- Slick -->
  <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>slick-root/slick/slick.css">
  <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>slick-root/slick/slick-theme.css">


  <!-- External Resources -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

  <!-- Google Fonts -->

  <!-- External CSS -->
  <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/styles.css">
  <!-- FAVICON -->
  <link rel="icon" href="<?php echo ASSETS_PATH; ?>logo/favicon.png">

  <!-- External Javascript Libraries -->
  <!-- Jquery, Popper, Bootstrap JS -->
  <script src="<?php echo ASSETS_PATH; ?>js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="<?php echo ASSETS_PATH; ?>js/bootstrap.min.js"></script>
  <script src="<?php echo ASSETS_PATH; ?>slick-root/slick/slick.min.js"></script>


 
  </head>
  <body>

  <!-- To Do

        / 1. Add media queries so the site will be responsive and the whole layout will be flexible to whatever size of the screen.
        / 2. Fix the login and register button on mobile phones.
        / 3. Reduce font size of top navigation links on mobile. 
        / 4. Put the proper links on the anchor tags.
        5. Change the link's font face.
        / 6. Fix the ::active property of the login and registration button.
        / 7. Watch your color palettes.

  -->
 
    <div class="container-fluid px-0">
      <div class="row col-12 px-0 mx-0">
        
        <header id="top-nav" class="col-12 px-0">
          <nav class="navbar navbar-expand-md col-12 mx-0 px-0">
            <div class="navbar-brand col-8 offset-2 offset-md-1 col-md-2"><img class="col-12 img-fluid" src="<?php echo ASSETS_PATH; ?>images/nw-logo.png" alt=""></div>
            <ul class="navbar-nav navbar-expand col-12 d-flex justify-content-start align-items-center offset-md-2">
              <li class="nav-item offset-0 col-2 col-md-1"><a class="nav-link active" href="">About</a></li>
              <li class="nav-item col-2 col-md-1"><a class="nav-link" href="">Shop</a></li>
              <li class="nav-item col-2 col-md-1"><a class="nav-link cart-btn" href=""><i class="fas fa-cart-arrow-down"></i> <span>2</span></a></li>
              <li class="nav-item col-2 offset-1 col-md-1"><a class="nav-link btn btn-outline-secondary login-btn animate-btn" href="">Login</a></li>
              <li class="nav-item col-2 col-md-1"><a class="nav-link btn btn-outline-secondary register-btn" href="">Register</a></li>
            </ul> <!-- End of links -->
          </nav> <!-- End of Navigation -->
        </header> <!-- End of top nav -->

      