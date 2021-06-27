<?php

include_once("config.php");

$no_nota = $_GET['no_nota'];
 
$result = mysqli_query($mysqli, "DELETE FROM konsumen WHERE no_nota=$no_nota");

header("Location:index.php");
?>