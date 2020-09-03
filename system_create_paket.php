<?php
include 'koneksi_laundry.php';
$id = $_POST['id'];
$paket = $_POST['paket'];
$harga = $_POST['harga'];

mysqli_query($laundry,"INSERT INTO paket VALUES('$id', '$paket', '$harga')");

header("location:crud_paket.php?pesan=input");
?>

