<?php
session_start();

include 'koneksi_laundry.php';

//HAPP TANGKAP DULU DATA LAUNDRYNYA
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($laundry,"select * from user where username= '$username' AND password= '$password'");

$check = mysqli_num_rows($data);

if($check > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:dashboard.php");
}else{
    header("location:login.php?pesan=gagal");
}