<?php

include_once("config.php");

$kode_pembelian = $_GET['kode_pembelian'];
 
$result = mysqli_query($mysqli, "DELETE FROM pembelian WHERE kode_pembelian=$kode_pembelian");
 
header("Location:index.php");
?>