<?php 

	$page_title = "Product Information";
	require "../partials/header.php";
	require "../controllers/get_product.php";

 ?>

 <?php require "../partials/navbar.php"; ?>

	<main id="main" role="main">
		<?php if ($product !== NULL): ?>
			<h1>Product Information</h1>
		<?php else: ?>
			<h1>Product is non-existent</h1>	
		<?php endif ?>
	</main>


 <?php require "../partials/footer.php"; ?>