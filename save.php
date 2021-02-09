<?php
	include 'database.php';
	$name=$_POST['name'];
	$price=$_POST['price'];
	$desc=$_POST['desc'];
	$qty=$_POST['qty'];
	$discount=$_POST['discount'];
	$total=$_POST['total'];
	$sql = "INSERT INTO `product_data`( `p_name`, `p_price`, `p_desc`, `qty`, `discount`, `total`) 
	VALUES ('$name','$price','$desc','$qty','$discount','$total')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>