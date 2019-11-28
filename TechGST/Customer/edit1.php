<?php
	$id=$_POST['id'];
	$name=$_POST['name'];
	$address=$_POST['add'];
	$state=$_POST['state'];
	$gstin=$_POST['gstin'];
	
	$connect=mysqli_connect("localhost","root","");
	mysqli_select_db($connect,"Project");
	$data="UPDATE `customers` SET `Name`='$name',`Address`='$address',`State`='$state',`GSTIN`='$gstin' WHERE `Id`=$id";
	$update=mysqli_query($connect,$data) or die("Cant update").mysqli_error($connect);
	header("location:edit.php");
?>