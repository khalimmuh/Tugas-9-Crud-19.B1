<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$kode_pembelian = $_POST['kode_pembelian'];
	$no_nota=$_POST['no_nota'];
	$kode_obat=$_POST['kode_obat'];
	$jumlah=$_POST['jumlah'];
	
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE pembelian SET no_nota='$no_nota', kode_obat='$kode_obat',jumlah='$jumlah' WHERE kode_pembelian=$kode_pembelian");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kode_pembelian= $_GET['kode_pembelian'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pembelian WHERE kode_pembelian=$kode_pembelian");
 
while($pembelian_data = mysqli_fetch_array($result))
{
    $no_nota=$pembelian_data['no_nota'];
	$kode_obat=$pembelian_data['kode_obat'];
	$jumlah=$pembelian_data['jumlah'];

}
?>
<html>
<head>	
	<title>Edit Data pembelian</title>
</head>
 <style> 
input {
  width: 100%;
}
</style>
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_pembelian" method="post" action="edit_pembelian.php">
		<table border="0">
			<tr> 
				<td>KODE PEMBELIAN</td>
				<td><input type="text" name="kode_pembelian" value=<?php echo $kode_pembelian;?>></td>
			</tr>
			<tr> 
				<td>NO NOTA</td>
				<td><input type="text" name="no_nota" value=<?php echo $no_nota;?>></td>
			</tr>
			<tr> 
				<td>KODE OBAT</td>
				<td><input type="text" name="kode_obat" value=<?php echo $kode_obat;?>></td>
			</tr>
            <tr> 
				<td>JUMLAH</td>
				<td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="kode_pembelian" value=<?php echo $_GET['kode_pembelian'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>