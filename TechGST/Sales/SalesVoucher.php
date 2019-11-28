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
            <li><a href="http://localhost/TechGST/Sales/SalesDisplay2.php">Delete Sales Voucher</a></li>
          </ul>
        </div>
      </div>
    </div>
	<form name="sales" action="Sales.php" method="post">
		<table>
			<tr align="center">
				<td colspan="3"><h3>Sales Inovice</h3></td>
			</tr>
			<tr align="center">
				<td colspan="3">
					<?php
						if(isset($_GET['Show']))
						{
							echo "Successfully Inserted";
						}
					?>
				</td>
			</tr>
			<tr>
				<td><b>Invoice No.<sup>*</sup></b></td>
				<td><input type="text" name="Invoice" placeholder="Inovice no.Ex.SAL/001"></td>
			</tr>
			<tr>
				<td><b>Invoice Date<sup>*</sup></b></td>
				<td><input type="date" name="Date"></td>
			</tr>
			<tr>
				<td><b>Customer Name<sup>*</sup><b></td>
				<td>
					<select name="cname">
					<?php
						$con=mysqli_connect("localhost","root","");
						mysqli_select_db($con,"Project") or die("Cant connect to Database");
						$cname=mysqli_query($con,"select * from customers") or die("Cant select Table");
						while($data=mysqli_fetch_array($cname))
						{
							echo "<option><a href='SalesVoucher1.php'>".$data['Name']."</a></option>";
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td><b>Product Name:</b></td>
				<td>
					<select name="iname">
						<?php
							$con=mysqli_connect("localhost","root","");
							mysqli_select_db($con,"Project") or die("Cant connect to Database");
							$iname=mysqli_query($con,"select * from invtmgmt") or die("Cant select Table");
							while($data=mysqli_fetch_array($iname))
							{
								echo "<option>".$data['Name']."</option>";
							}
						?>
					</select>
				</td>
			</tr>
				<tr>
				<td><b>Qty</b></td>
				<td><input type="text" name="qty" size="3"></td>
				</tr>
				<tr>
				<td><b>Price</b></td>
				<td><input type="text" name="price" size=7></td>
				</tr>
				<tr>
				<td><b>Total</b></td>
				<td><input type="text" name="total" size=7></td>
			</tr>
			<tr align="center">
				<td colspan="2">
					<input type="submit" name="save" value="Save Sales Invoice">
				</td>
			</tr>
		</table>
		<div id="footer">Developed by Mani(FYMCA)<br></div></div>
	</div>
	</body>
</html>