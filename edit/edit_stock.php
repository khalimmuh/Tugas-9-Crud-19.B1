<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id_stock = $_POST['id_stock'];
	$kode_obat=$_POST['kode_obat'];
    $stock=$_POST['stock'];
	$harga=$_POST['harga'];
	
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE stock SET  kode_obat='$kode_obat',stock='$stock',harga='$harga' WHERE id_stock=$id_stock");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_stock= $_GET['id_stock'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM stock WHERE id_stock=$id_stock");
 
while($stock_data = mysqli_fetch_array($result))
{
    $kode_obat=$stock_data['kode_obat'];
    $stock=$stock_data['stock'];
	$harga=$stock_data['harga'];
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
	
	<form name="update_stock" method="post" action="edit_stock.php">
		<table border="0">
			<tr> 
				<td>ID STOCK</td>
				<td><input type="text" name="id_stock" value=<?php echo $id_stock;?>></td>
			</tr>
			<tr> 
				<td>KODE OBAT</td>
				<td><input type="text" name="kode obat" value=<?php echo $kode_obat;?>></td>
			</tr>
			<tr> 
				<td>STOCK</td>
				<td><input type="text" name="stock" value=<?php echo $stock;?>></td>
			</tr>
            <tr> 
				<td>HARGA</td>
				<td><input type="text" name="harga" value=<?php echo $harga;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_stock" value=<?php echo $_GET['id_stock'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>