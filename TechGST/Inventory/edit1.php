<?php
	$id=$_POST['id'];
	$name=$_POST['name'];
	$qty=$_POST['qty'];
	$price=$_POST['price'];
	$code=$_POST['code'];
	$rate=$_POST['rate'];
	
	$connect=mysqli_connect("localhost","root","");
	mysqli_select_db($connect,"Project");
	
	$data="UPDATE `invtmgmt` SET `Name`='$name',`Qty`='$qty',`Price`=$price,`Code`='$code',`Rate`=$rate WHERE `Id`='$id'";
	$update=mysqli_query($connect,$data) or die("Cant update").mysqli_error($connect);
	header("location:InventoryDisplay.php");
?>