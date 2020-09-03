<?php
include 'koneksi_laundry.php';
$id = $_GET['id'];
mysqli_query($laundry,"DELETE FROM paket WHERE id='$id'")or die(mysqli_error());

header("location:crud_paket.php?pesan=hapus");
?>