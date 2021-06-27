<html>
<head>
	<title>Add obat</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_obat.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>KODE OBAT</td>
				<td><input type="text" name="kode_obat"></td>
			</tr>
			<tr> 
				<td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>JENIS</td>
				<td><input type="text" name="jenis"></td>
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
		$kode_obat = $_POST['kode_obat'];
		$nama = $_POST['nama'];
		$jenis = $_POST['jenis'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO obat(kode_obat,nama,jenis) VALUES('$kode_obat','$nama','$jenis')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View obat</a>";
	}
	?>
</body>
</html>
