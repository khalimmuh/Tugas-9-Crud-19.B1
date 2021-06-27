<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$kode_obat = $_POST['kode_obat'];
	
	$nama=$_POST['nama'];
	$jenis=$_POST['jenis'];
	
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE obat SET nama='$nama', jenis='$jenis' WHERE kode_obat=$kode_obat");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kode_obat = $_GET['kode_obat'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM obat WHERE kode_obat=$kode_obat");
 
while($obat_data = mysqli_fetch_array($result))
{
	$nama = $obat_data['nama'];
	$jenis = $obat_data['jenis'];

}
?>
<html>
<head>	
	<title>Edit Data obat</title>
</head>
 <style> 
input {
  width: 100%;
}
</style>
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_obat" method="post" action="edit_obat.php">
		<table border="0">
			<tr> 
				<td>KODE OBAT</td>
				<td><input type="text" name="kode_obat" value=<?php echo $kode_obat;?>></td>
			</tr>
			<tr> 
				<td>NAMA</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>JENIS</td>
				<td><input type="text" name="jenis" value=<?php echo $jenis;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="kode_obat" value=<?php echo $_GET['kode_obat'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>