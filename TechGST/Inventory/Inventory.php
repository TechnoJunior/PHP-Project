<?php
	$connect=mysqli_connect("localhost","root","");
	if(mysqli_select_db($connect,"Project")==true)
	{
		echo "Already Exists<br>";
		goto Table;
	}
	else
	{
		mysqli_query($connect,"create database Project")or die("Cant create Database<br>");
		echo "Created Database<br>";
		goto Table;
	}
	Table:
		$create_tb="create table InvtMgmt(Id int(5) not null auto_increment,Name varchar(20),Qty int(3),Price int(5),Code int(6),Rate int(3), primary key (Id))";
		
		if(mysqli_query($connect,"select * from InvtMgmt")==true)
		{
			echo "Table Already Created<br>";
			goto Insert;
		}
		else
		{
			mysqli_select_db($connect,"Project") or die("asd");
			mysqli_query($connect,$create_tb) or die("Cant create table<br>");
			goto Insert;
		}
	Insert:
	if(isset($_POST['submit']))
	{
		$Name=$_POST['invtname'];
		$Qty=$_POST['invtqty'];
		$Price=$_POST['Rate'];
		$Code=$_POST['invtcode'];
		$Rate=$_POST['invtrate'];
		
		$insert="insert into InvtMgmt values('','$Name','$Qty','$Price','$Code','$Rate')";
		mysqli_query($connect,$insert) or die("Cant insert");
		
		header("Location:Inventory.html");
	}
?>