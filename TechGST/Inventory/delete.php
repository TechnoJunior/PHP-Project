<?php
	$id=$_GET['tick'];
	$connect=mysqli_connect("localhost","root","");
	mysqli_select_db($connect,"Project");
	$delet=mysqli_query($connect,"DELETE FROM `invtmgmt` WHERE `Id`=$id");
	if($delete=true)
	{
		header("location:InventoryDisplay.php");
	}
	else
	{
		echo "Cant delete";
	}
	
?>