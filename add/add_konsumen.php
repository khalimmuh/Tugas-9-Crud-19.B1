<html>
<head>
	<title>Add konsumen</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_konsumen.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>NO NOTA</td>
				<td><input type="text" name="no_nota"></td>
			</tr>
			<tr> 
				<td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>TOTAL</td>
				<td><input type="text" name="total"></td>
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
		$no_nota= $_POST['no_nota'];
		$nama = $_POST['nama'];
		$total = $_POST['total'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO konsumen(no_nota,nama,total) VALUES('$no_nota','$nama','$total')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View konsumen</a>";
	}
	?>
</body>
</html>
