<html>
<head>
	<title>Add pembelian</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_pembelian.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>KODE PEMBELIAN</td>
				<td><input type="text" name="kode_pembelian"></td>
			</tr>
            <tr> 
				<td>NO NOTA</td>
				<td><input type="int" name="no_nota"></td>
			</tr>
			<tr> 
				<td>KODE OBAT</td>
				<td><input type="text" name="kode_obat"></td>
			</tr>
			
			<tr> 
				<td>JUMLAH</td>
				<td><input type="int" name="jumlah"></td>
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
		 $kode_pembelian = $_POST['kode_pembelian'];
         $no_nota = $_POST['no_nota'];
		$kode_obat = $_POST['kode_obat'];
		
		$jumlah = $_POST['jumlah'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO pembelian (kode_pembelian,no_nota,kode_obat,jumlah) VALUES('$kode_pembelian','$no_nota','$kode_obat','$jumlah')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View pembelian</a>";
	}
	?>
</body>
</html>

