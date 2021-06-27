<html>
<head>
	<title>Add stock</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_stock.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID STOCK</td>
				<td><input type="text" name="id_stock"></td>
			</tr>
			<tr> 
				<td>KODE OBAT</td>
				<td><input type="text" name="kode_obat"></td>
			</tr>
			<tr> 
				<td>STOCK</td>
				<td><input type="int" name="stock"></td>
			</tr>
			<tr> 
				<td>HARGA</td>
				<td><input type="int" name="harga"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit']))
	 {
		 $id_stock = $_POST['id_stock'];
		$kode_obat = $_POST['kode_obat'];
		$stock = $_POST['stock'];
		$harga = $_POST['harga'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO stock(id_stock,kode_obat,stock,harga) VALUES('$id_stock','$kode_obat','$stock','$harga')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View stock</a>";
	}
	?>
</body>
</html>

