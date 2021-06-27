<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$no_nota = $_POST['no_nota'];
	$nama=$_POST['nama'];
	$total=$_POST['total'];
	
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE konsumen SET nama='$nama', total='$total' WHERE no_nota=$no_nota");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$no_nota= $_GET['no_nota'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM konsumen WHERE no_nota=$no_nota");
 
while($konsumen_data = mysqli_fetch_array($result))
{
	$nama=$konsumen_data['nama'];
	$total=$konsumen_data['total'];

}
?>
<html>
<head>	
	<title>Edit Data Konsumen</title>
</head>
 <style> 
input {
  width: 100%;
}
</style>
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_konsumen" method="post" action="edit_konsumen.php">
		<table border="0">
			<tr> 
				<td>NO NOTA</td>
				<td><input type="text" name="no_nota" value=<?php echo $no_nota;?>></td>
			</tr>
			<tr> 
				<td>NAMA</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>TOTAL</td>
				<td><input type="int" name="total" value=<?php echo $total;?>></td>
			</tr>
            
			<tr>
				<td><input type="hidden" name="no_nota" value=<?php echo $_GET['no_nota'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>