<?php 

// For windows version, just remove the ":8080" from the URL below.
define("ASSETS_PATH", "http://localhost/capstone-2-sb/app/assets/");
define("IMG_PATH", "http://localhost/capstone-2-sb/app/assets/images/");
define("PARTIALS_PATH", "http://localhost/capstone-2-sb/app/partials/");


?>

<!DOCTYPE html>
<html lang="en">
  <head>

  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>NoteWorthy | <?php echo $page_title ?></title>

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
 
    

      