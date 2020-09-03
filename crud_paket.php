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
<head>
    <title>PAKET CRUD</title>
</head>
<body>
<h3><a href="create_paket.php">Tambah Paket</a> </h3>
<table border="1" class="table">
    <tr>
        <th>Nomer</th>
        <th>Nama Paket</th>
        <th>Harga</th>
        <th>Config</th>
    </tr>
    <?php
    include 'koneksi_laundry.php';
    $mysql_laundry = mysqli_query($laundry,"SELECT * FROM paket")or die(mysqli_error());
    while($data = mysqli_fetch_array($mysql_laundry)){
    ?>
    <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['paket'] ?></td>
        <td><?php echo $data['harga'] ?></td>
        <td>
            <a class="edit" href="update_paket.php?id=<?php echo $data['id']; ?>">Edit</a>
            <a class="delete" href="hapus_paket.php?id=<?php echo $data['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
</body>

