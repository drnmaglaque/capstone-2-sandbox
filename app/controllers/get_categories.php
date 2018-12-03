<?php 

	require "dbh.php";

	$sql = "SELECT * FROM categories";
	$result = mysqli_query($conn, $sql);

	if ($result) {
		$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);		
	}


 ?>