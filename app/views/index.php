<?php 
  require "../partials/header.php";
?>

  <div class="container col-12 col-md-10 offset-md-1">

    <main class="hero">
      <div class="card hero-card-left col-12 offset-md-2 col-md-4">
        <img src="<?php echo IMG_PATH; ?>banner1.jpeg" alt="Woman writing in a notebook" class="card-img-top">
      </div>

      <div class="card hero-card-right col-md-4">
        <img src="<?php echo IMG_PATH; ?>banner2.jpeg" alt="Fountain Pen" class="card-img-top">
      </div>
      
      <div class="card hero-card-right-2 col-md-4">
        <div class="card-body welcome-banner-card">
          <h2 class="card-title welcome-banner">Welcome to NoteWorthy</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quibusdam commodi neque, quod minima sequi.</p>
          <a href="#" class="btn animate-btn cta-btn">Shop Now</a>
          <a href="#" class="btn cta-btn cta-register-btn">Don't have an account? Click here to sign up</a>
        </div>
      </div>	
    </main>
</div>

  <!-- TO DO 
  
      1. Featured secrion and a little about us.
      2. Fix the mobile version of home.
      3. Change the font-face.
      4. Make the banner photos a slideshow.
      5. Maybe we can do something about the welcome section of the banner? Make it bigger, perhaps?

  -->

  <section class="featured col-12 col-md-10 offset-md-1">
    <header class="featured-header"><h2>Featured Items</h2>
      <div class="featured-body"><p>Check out these products.</p></div>
      <div class="featured-cta"><p><i class="fas fa-arrow-alt-circle-right"></i></p></div>
    </header>
    <div class="carousel-featured">
      <div class="carousel-item"><div class="carousel-img-label">Design Your Life - Diary</div><img class="carousel-img" src="<?php echo IMG_PATH; ?>cap-p6.png" alt=""></div>
      <div class="carousel-item"><div class="carousel-img-label">Navi 2019 Planner</div><img class="carousel-img" src="<?php echo IMG_PATH; ?>featured-1b.png" alt=""></div>
      <div class="carousel-item"><div class="carousel-img-label">Starbucks 2019 Planner</div><img class="carousel-img" src="<?php echo IMG_PATH; ?>cap-p3.png" alt=""></div>
      <div class="carousel-item"><div class="carousel-img-label">Let's Be Exlorers Planner</div><img class="carousel-img" src="<?php echo IMG_PATH; ?>cap-p4.png" alt=""></div>
      <div class="carousel-item"><div class="carousel-img-label">Paulo Coelho - Paths</div><img class="carousel-img" src="<?php echo IMG_PATH; ?>cap-p7.png" alt=""></div>
      <div class="carousel-item"><div class="carousel-img-label">Classic Leather</div><img class="carousel-img" src="<?php echo IMG_PATH; ?>cap-p8.png" alt=""></div>
    </div>
  </section>



<?php 
  require "../partials/footer.php";
?>