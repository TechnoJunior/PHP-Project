<html>
	<head>
		<title>Sales Invoice</title>
	</head>
	<body>
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
		$create_tb="create table Sales(Id int(5) not null auto_increment,Invoice varchar(20),Date date,CName varchar(20),IName varchar (20),Qty int(3),Price int(5),Total int(7), primary key (Id))";
		
		if(mysqli_query($connect,"select * from Sales")==true)
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
	if(isset($_POST['save']))
	{
		$Invoice=$_POST['Invoice'];
		$Date=$_POST['Date'];
		$CName=$_POST['cname'];
		$IName=$_POST['iname'];
		$Qty=$_POST['qty'];
		$Price=$_POST['price'];
		$Total=$_POST['total'];
		
		$iname=mysqli_query($connect,"select * from invtmgmt") or die("Cant select Table");
		while($data=mysqli_fetch_array($iname))
		{
			if($IName==$data['Name'])
			{
				if($data['Qty']<$Qty)
				{
					header ("location:SalesVoucher1.php");
				}
				else
				{
					$insert="insert into `sales` values ('','$Invoice','$Date','$CName','$IName','$Qty','$Price','$Total')";
					mysqli_query($connect,$insert) or die("Cant insert");
					echo "Inserted";
					$TotalQty=$data['Qty']-$Qty;
					$updateitem="update invtmgmt set Qty=$TotalQty WHERE Id=$data[Id]";
					mysqli_query($connect,$updateitem) or die("Cant Update".mysqli_error($connect));
					header("Location:SalesVoucher.php?Show=1");
				}
			}
		}
		
		/*$insert="insert into `sales` values ('','$Invoice','$Date','$CName','$IName','$Qty','$Price','$Total')";
		mysqli_query($connect,$insert) or die("Cant insert");*/
		
		//header("Location:SalesVoucher.php");
	}
	else
	{
		//header ("location:SalesVoucher.php");
	}
?>
	</body>
</html>