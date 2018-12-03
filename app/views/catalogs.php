<?php 


	$page_title = "Catalog";
	require "../partials/header.php";
	require "../controllers/get_categories.php";
	require "../controllers/get_items.php";

?>

	<?php require "../partials/navbar.php"; ?>

	<section class="catalog-sidebar-container col-md-3">
		<ul class="list-group">	
				<?php foreach ($categories as $category): ?>
						<li id="<?php echo $category['id']; ?>" class="list-group-item"><?php echo $category["category_name"]; ?></li>
				<?php endforeach; ?>
		</ul>
	</section>

	<section class="items-group-container col-md-9">
		<ul class="items-group">
				<div class="card-columns">
					<?php foreach ($items as $item): ?>
						<div class="card" id="<?php echo $item['id'] ?>" >
							<img class="img-card-top img-fluid" src="<?php echo $item['img_path'] ?>" alt="">
							<div class="card-body">
								<div class="card-title"><h3><a href="product.php?id=<?php echo $item['id']; ?>"><?php echo $item['item_name']; ?></a></h3></div>
								<div class="card-text"><p><?php echo $item['description']; ?></p>
									<?php echo $item['price']; ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
		</ul>
	</section>

<script src="../assets/js/filterByCategory.js"></script>



<?php 
	require "../partials/footer.php";
?>



