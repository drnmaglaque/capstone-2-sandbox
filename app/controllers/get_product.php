<?php 

	require "dbh.php";

	if(isset($_GET['id'])) {
		$prod_id = htmlspecialchars($_GET['id']);
	}

	$sql = "SELECT * FROM items WHERE id = '$prod_id'";
	$result = mysqli_query($conn, $sql);
	$product = mysqli_fetch_assoc($result); 

	// if ($product !== "") {
	// } else {
	// 	$product = "";
	// }

	mysqli_close($conn);

 ?>