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
            <li><a href="http://localhost/TechGST/Inventory/edit2.php">Update Item</a></li>
            <li><a href="http://localhost/TechGST/Inventory/delete.php">Delete Item</a></li>
            <li><a href="http://localhost/TechGST/Sales/SalesVoucher.php">Sales</a></li>
            <li><a href="http://localhost/TechGST/Sales/SalesDisplay.php">Display Sales voucher</a></li>
            <li><a href="http://localhost/TechGST/Sales/SalesDisplay1.php">Update Sales voucher</a></li>
            <li><a href="http://localhost/TechGST/Sales/delete.php">Delete Sales Voucher</a></li>
          </ul>
        </div>
      </div>
    </div>
   	<form name="Inventory Details">
		<table border=1>
			<tr>
				<th>Invoice</th>
				<th>Date</th>
				<th>Customer Name</th>
				<th>Product Name</th>
				<th>Qty</th>
				<th>Price</th>
				<th>Total</th>
				<th>Delete</th>
			</tr>
	<?php
		$connect=mysqli_connect("localhost","root","");
		mysqli_select_db($connect,"Project");
		$table=mysqli_query($connect,"select * from sales");

		while($data=mysqli_fetch_array($table))
		{
			echo "<tr>";
			echo "<td>".$data['Invoice']."</td>";
			echo "<td>".$data['Date']."</td>";
			echo "<td>".$data['CName']."</td>";
			echo "<td>".$data['IName']."</td>";
			echo "<td>".$data['Qty']."</td>";
			echo "<td>".$data['Price']."</td>";
			echo "<td>".$data['Total']."</td>";
			echo "<td align='center'><a href='delete.php?tick=".$data['Id']."'><img src='delete.jpg' height='20' widht='10'></td>";
			echo "</td>";
			echo "</tr>";
		}
	?>
		</table>
	</form>
    <div id="footer">Developed by Mani(FYMCA)<br></div></div>
	</div>
	</body>
</html>