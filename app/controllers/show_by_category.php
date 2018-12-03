<?php 
	require "dbh.php";

	$catId = $_POST['catId'];
	$sql = "SELECT * FROM items where category_id = '$catId'";
	$result = mysqli_query($conn, $sql);
	$filtered_by_categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

	if ($filtered_by_categories) {
		echo json_encode($filtered_by_categories);
	} else {
		echo "";
	}

 ?>