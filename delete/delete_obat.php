<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$kode_obat = $_GET['kode_obat'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM obat WHERE kode_obat=$kode_obat");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>




