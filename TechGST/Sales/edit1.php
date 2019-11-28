<?php
	echo $id=$_POST['id'];
	echo $invoice=$_POST['invoice'];
	echo $date=$_POST['date'];
	echo $cname=$_POST['cname'];
	echo $iname=$_POST['iname'];
	echo $qty=$_POST['qty'];
	echo $price=$_POST['price'];
	echo $total=$_POST['total'];
	
	$connect=mysqli_connect("localhost","root","");
	mysqli_select_db($connect,"Project");
	$data="update `sales` set `Invoice`='$invoice',`Date`='$date',`CName`='$cname',`IName`='$iname',`Qty`='$qty',`Price`='$price',`Total`='$total' WHERE `Id`='$id'";
	$update=mysqli_query($connect,$data) or die("Cant update").mysqli_error($connect);
	header("location:SalesDisplay.php");
?>