<?php
	$id=$_GET['tick'];
	$connect=mysqli_connect("localhost","root","");
	mysqli_select_db($connect,"Project");
	$delet=mysqli_query($connect,"DELETE FROM `customers` WHERE `Id`=$id");
	if($delete=true)
	{
		header("location:delete1.php");
	}
	else
	{
		echo "Cant delete";
	}
	
?>