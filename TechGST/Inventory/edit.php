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
			<li><a href="http://localhost/TechGST/Inventory/Inventory.php">Inventory</a></li>
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

	<form name="edit" action="edit1.php" method="post">
	<table border="1">
			<tr>
				<th>Name</th>
				<th>Qty</th>
				<th>Price</th>
				<th>Code</th>
				<th>Rate</th>
				<th>Done</th>
			</tr>
	<?php
		$id=$_GET['id'];
		$connect=mysqli_connect("localhost","root","");
		mysqli_select_db($connect,"Project");
		$table=mysqli_query($connect,"SELECT * FROM `invtmgmt` WHERE  Id=$id");

		while($data=mysqli_fetch_array($table))
		{
			echo "<tr>";
			echo "<input type='hidden' name='id' value='".$id."'>";
			echo "<td><input type='text' name='name' value='".$data['Name']."' required></td>";
			echo "<td><input type='text' name='qty' value='".$data['Qty']."' size='1' required></td>";
			echo "<td><input type='text' name='price' value='".$data['Price']."' size='1' required></td>";
			echo "<td><input type='text' name='code' value='".$data['Code']."' size='1' required></td>";
			echo "<td>";
				echo "<select name='rate'>";
					echo "<option value='5'>5%</option>";
					echo "<option value='12'>12%</option>";
					echo "<option value='18'>18%</option>";
					echo "<option value='28'>28%</option>";
				echo "</select>";
			echo "</td>";
			echo "<td><input type='image' src='save.jpg' name='submit' width='20' height='20'></td>";
			echo "</tr>";
		}
	?>
	</table>
	</form>
	</body>
		<div id="footer">Developed by Mani(FYMCA)<br></div></div>
	</div>
	</body>
</html>