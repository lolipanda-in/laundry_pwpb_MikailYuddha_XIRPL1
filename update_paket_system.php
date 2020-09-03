<?php
include 'koneksi_laundry.php';
$id = $_POST['id'];
$paket = $_POST['paket'];
$harga = $_POST['harga'];

mysqli_query($laundry,"UPDATE paket SET paket='$paket', harga='$harga' WHERE id='$id'");

header("location:crud_paket.php?pesan=Update");
?>