<?php   
    
   $section = null;
   if (isset($_GET["section"])) {
      $value = htmlspecialchars($_GET["section"]);

      if ($value == "catalogs") {
        $section = "catalogs";
      }
    } 

 ?>

<div class="container-fluid px-0">
      <div class="row col-12 px-0 mx-0">
        
        <header id="top-nav" class="col-12 px-0">
          <nav class="navbar navbar-expand-md col-12 mx-0 px-0">
            <div class="navbar-brand col-8 offset-2 offset-md-1 col-md-2"><img class="col-12 img-fluid" src="<?php echo ASSETS_PATH; ?>images/nw-logo.png" alt=""></div>
            <ul class="navbar-nav navbar-expand col-12 d-flex justify-content-start align-items-center offset-md-2">
              <li class="nav-item offset-0 col-2 col-md-1"><a class="nav-link <?php if($section == "about") {echo 'active';} ?>" href="about-us.php?section=catalog">About</a></li>
              <li class="nav-item col-2 col-md-1"><a class="nav-link" href="catalogs.php?section=catalogs">Shop</a></li>
              <li class="nav-item col-2 col-md-1"><a class="nav-link cart-btn <?php if($section == "cart") {echo 'active';} ?>" href="cart.php?section=cart"><i class="fas fa-cart-arrow-down"></i> Cart <span>2</span></a></li>
              <li class="nav-item col-2 offset-1 col-md-1"><a class="nav-link btn btn-outline-secondary login-btn animate-btn <?php if($section == "login") {echo 'active';}; ?>" href="login.php?section=login">Login</a></li>
              <li class="nav-item col-2 col-md-1"><a class="nav-link btn btn-outline-secondary register-btn <?php if($section == "signup") {echo 'active';} ?>" href="signup.php?section=signup">Register</a></li>
            </ul> <!-- End of links -->
          </nav> <!-- End of Navigation -->
        </header> <!-- End of top nav -->
