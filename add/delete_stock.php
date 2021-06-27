<?php

include_once("config.php");

$id_stock = $_GET['id_stock'];
 
$result = mysqli_query($mysqli, "DELETE FROM stock WHERE id_stock=$id_stock");

header("Location:index.php");
?>