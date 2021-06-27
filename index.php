<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM obat");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <style>

         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 15px; border: 2px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
         a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 10px 19px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
         </style>
         <meta charset="UTF-8">
  
    <h1 align =center> Transaksi Apotek</h1>
</head>
 
<body>
<h2>  Obat</h2>
<a href="add_obat.php">Add</a><br/><br/>
 
    <table width='35%' border=1>
 
    <tr>
        <th>KODE OBAT</th> <th>NAMA</th> <th>JENIS</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kode_obat']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jenis']."</td>";    
        echo "<td><a href='edit_obat.php?kode_obat=$user_data[kode_obat]'>Edit</a> | <a href='delete_obat.php?kode_obat=$user_data[kode_obat]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    
</body>
<h2>Konsumen</h2>
<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM konsumen");
?>
<body><a href="add_konsumen.php">Add</a><br/><br/>
<table width='35%' border=1>
 
    <tr>
        <th>NO. NOTA</th> <th>NAMA</th> <th>TOTAL</th>  <th>Update</th>
    </tr>
     <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['no_nota']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['total']."</td>";    
        echo "<td><a href='edit_konsumen.php?no_nota=$user_data[no_nota]'>Edit</a> | <a href='delete_konsumen.php?no_nota=$user_data[no_nota]'>Delete</a></td></tr>";
    }
    ?>
    </table>
<h2>Pembelian </h2>
<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pembelian ");
?>
<html>
<body><a href="add_pembelian.php">Add</a><br/><br/>
<table width='50%' border=1>
 
    <tr>
        <th>KODE PEMBELIAN</th><th>NO. NOTA</th> <th>KODE OBAT</th> <th>JUMLAH</th> <th>Update</th>
    </tr>
     <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kode_pembelian']."</td>";
        echo "<td>".$user_data['no_nota']."</td>";
        echo "<td>".$user_data['kode_obat']."</td>";
        echo "<td>".$user_data['jumlah']."</td>";    
        echo "<td><a href='edit_pembelian.php?kode_pembelian=$user_data[kode_pembelian]'>Edit</a> | <a href='delete_pembelian.php?kode_pembelian=$user_data[kode_pembelian]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
<h2>Stock</h2>
<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM stock");
?>
<body><a href="add_stock.php">Add</a><br/><br/>
<table width='40%' border=1>
 
    <tr>
        <th>ID STOCK</th> <th>KODE OBAT</th> <th>STOCK</th> <th>HARGA</th> <th>Update</th>
    </tr>
     <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_stock']."</td>";
        echo "<td>".$user_data['kode_obat']."</td>";
        echo "<td>".$user_data['stock']."</td>";    
        echo "<td>".$user_data['harga']."</td>"; 
        echo "<td><a href='edit_stock.php?id_stock=$user_data[id_stock]'>Edit</a> | <a href='delete_stock.php?id_stock=$user_data[id_stock]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</body>
</html>