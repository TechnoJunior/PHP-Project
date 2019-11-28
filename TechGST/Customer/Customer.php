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
		$create_tb="create table Customers(Id int(5) not null auto_increment,Name varchar(20),Address text,State varchar (20),GSTIN varchar(15), primary key (Id))";
		
		if(mysqli_query($connect,"select * from Customers")==true)
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
		$Name=$_POST['custname'];
		$Address=$_POST['custadd'];
		$State=$_POST['custstate'];
		$GSTIN=$_POST['custgstin'];
		
		$insert="insert into Customers values('','$Name','$Address','$State','$GSTIN')";
		mysqli_query($connect,$insert) or die("Cant insert");
		
		header("Location:Customer.html");
	}
?>