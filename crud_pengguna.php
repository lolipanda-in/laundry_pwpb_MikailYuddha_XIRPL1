<?php
if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input"){
        echo "Data berhasil di input.";
    }else if($pesan == "update"){
        echo "Data berhasil di update.";
    }else if($pesan == "hapus"){
        echo "Data berhasil di hapus.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Pengguna</title>
</head>
<body>
<h2>Create Data Pengguna</h2>
<h3><a href="#">TAMBAKAN USER</a> </h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>EMAIL</th>
        <th>username</th>
        <th>Password</th>
        <th>Alamat</th>
        <th>Telepon</th>
    </tr>
    <?php
    include 'koneksi_laundry.php';
    $mysql_laundry = mysqli_query($laundry,"SELECT * FROM user")or die(mysqli_error());
    while($data = mysqli_fetch_array($mysql_laundry)){
    ?>
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['username'] ?></td>
            <td><?php echo $data['password'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['tlpn'] ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
