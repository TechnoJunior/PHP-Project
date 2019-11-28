<?php
	$id=$_GET['tick'];
	$connect=mysqli_connect("localhost","root","");
	mysqli_select_db($connect,"Project");
	$delet=mysqli_query($connect,"DELETE FROM `sales` WHERE `Id`=$id");
	if($delete=true)
	{
		header("location:SalesDisplay2.php");
	}
	else
	{
		echo "Cant delete";
	}
	
?>