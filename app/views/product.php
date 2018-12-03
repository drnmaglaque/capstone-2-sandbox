<?php 

	$page_title = "Product Information";
	require "../partials/header.php";
	require "../controllers/get_product.php";
	extract($product);
 ?>

 <?php require "../partials/navbar.php"; ?>

	<main id="main" role="main">
		<?php if ($product !== NULL): ?>
			<h1>Product Information</h1>
			<h2><?php echo $item_name ?></h2>
			<h2><?php echo $description ?></h2>
			<h2><?php echo $price ?></h2>
			<h2><img src="../assets/<?php echo $img_path; ?>" alt=""></h2>
			
		<?php else: ?>
			<h1>Product is non-existent</h1>	
		<?php endif ?>
	</main>

	

 <?php require "../partials/footer.php"; ?>