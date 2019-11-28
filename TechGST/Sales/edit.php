<html>
	<head>
		<title>TechGST</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<div id="wrapper"> 
		<div id="header"> 
			<div class="top_banner">
				<h1>Tech<span style="color:blue">GST</span></h1>
				<p>One <span style="color:blue">Tax</span> One <span style="color:blue">Nation</span></p>
			</div>
		</div>
	<div id="page_content">
    <div class="navigation">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="http://localhost/TechGST/Sales/SalesVoucher.php">Sales</a></li>
			<li><a href="http://localhost/TechGST/Inventory/Inventory.html">Inventory</a></li>
			<li><a href="#">About</a></li>
		</ul>
    </div>
    <div class="left_side_bar">
      <div class="col_1">
			<h1>Main Menu</h1>
        <div class="box">
          <ul>
            <li><a href="http://localhost/TechGST/Customer/Customer.html">New Customer</a></li>
            <li><a href="http://localhost/TechGST/Customer/CustomerDisplay.php">Exisitng Customers</a></li>
            <li><a href="http://localhost/TechGST/Customer/edit.php">Edit Customers</a></li>
            <li><a href="http://localhost/TechGST/Customer/delete.php">Delete Customers</a></li>
            <li><a href="http://localhost/TechGST/Inventory/Inventory.html">New Item</a></li>
            <li><a href="http://localhost/TechGST/Inventory/InventoryDisplay.php">Exisitng Item</a></li>
            <li><a href="http://localhost/TechGST/Inventory/edit.php">Update Item</a></li>
            <li><a href="http://localhost/TechGST/Inventory/delete.php">Delete Item</a></li>
            <li><a href="http://localhost/TechGST/Sales/SalesVoucher.php">Sales</a></li>
            <li><a href="http://localhost/TechGST/Sales/SalesDisplay.php">Display Sales voucher</a></li>
            <li><a href="http://localhost/TechGST/Sales/SalesDisplay1.php">Update Sales voucher</a></li>
            <li><a href="http://localhost/TechGST/Sales/delete.php">Delete Sales Voucher</a></li>
          </ul>
        </div>
      </div>
    </div>
	<form name="edit" action="edit1.php" method="post">
	<table border="1">
			<tr>
				<th>Invoice</th>
				<th>Date</th>
				<th>Customer Name</th>
				<th>Product Name</th>
				<th>Qty</th>
				<th>Price</th>
				<th>Total</th>
				<th>Edit</th>
			</tr>
	<?php
		$id=$_GET['tick'];
		$connect=mysqli_connect("localhost","root","");
		mysqli_select_db($connect,"Project");
		$table=mysqli_query($connect,"SELECT * FROM `sales` WHERE  Id=$id");
		
		$iname=mysqli_query($connect,"select * from invtmgmt") or die("Cant select Table");
			
		$cname=mysqli_query($connect,"select * from customers") or die("Cant select Table");

		while($data=mysqli_fetch_array($table))
		{
			echo "<input type='hidden' name='id' value='".$id."'>";
			echo "<tr>";
			echo "<td><input type='text' name='invoice' value='".$data['Invoice']."' size='1'></td>";
			echo "<td><input type='date' name='date' value='".$data['Date']."' size='1'></td>";
			echo "<td>";
				echo "<select name='cname'>";
				while($cust=mysqli_fetch_array($cname))
				{
					echo "<option>".$cust['Name']."</option>";
				}
				echo "</select>";
			echo "</td>";
			echo "<td>";
				echo "<select name='iname'>";
					while($invt=mysqli_fetch_array($iname))
					{
						echo "<option>".$invt['Name']."</option>";
					}
				echo "</select>";
			echo "</td>";
			echo "<td><input type='text' name='qty' value='".$data['Qty']."' size='1' required></td>";
			echo "<td><input type='text' name='price' value='".$data['Price']."' size='1' required></td>";
			echo "<td><input type='text' name='total' value='".$data['Total']."' size='1' required></td>";
			echo "<td><input type='image' src='save.jpg' name='submit' width='20' height='20'></td>";
			echo "</tr>";
		}
	?>
		</table>
		</form>
		<div id="footer">Developed by Mani(FYMCA)<br></div></div>
	</div>
	</body>
</html>