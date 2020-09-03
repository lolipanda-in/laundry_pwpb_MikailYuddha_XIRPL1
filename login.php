<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "Login gagal! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
        echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
        echo "Anda harus login untuk mengakses halaman admin";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN DULU YUK</title>
    <link rel="stylesheet" type="text/css" href="#"
</head>

<body>
<h1>LOGIN LAUNDRY</h1>
<form method="POST" action="check_masuk.php">
    <input type="text" name="username" placeholder="Isi Username">
    <input type="text" name="password" placeholder="Isi Password">
    <input type="submit" name="" value="submit">
</form>
</body>
</html>

