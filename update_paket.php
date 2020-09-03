<!DOCTYPE html>
<html>
<head>
    <title>Update Paket</title>
</head>
<body>
<h3>UPDATE DATA PAKET</h3>
<?php
include 'koneksi_laundry.php';
$id = $_GET['id'];
$mysql_laundry = mysqli_query($laundry, "SELECT * FROM paket WHERE id='$id'")or die(mysqli_error());
while($data = mysqli_fetch_array($mysql_laundry)){
?>
<form action="update_paket_system.php" method="post">
    <table>
        <tr>
            <td>Paket</td>
            <td><input type="hidden" name="id" value="<?php echo $data['id'] ?>"></td>
            <td><input type="text" name="paket" value="<?php echo $data['paket'] ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan"></td>
        </tr>
    </table>
</form>
<?php } ?>
</body>
</html>