<?php
include '../config/koneksi.php';

if(isset($_POST['simpan'])){

    $plat = $_POST['plat'];

    $masuk = date('Y-m-d H:i:s');

    mysqli_query($conn,"
    INSERT INTO transaksi VALUES(
        '',
        '$plat',
        '$masuk',
        '',
        'MASUK'
    )
    ");
}
?>

<form method="POST">

<input type="text" name="plat">

<button name="simpan">Masuk</button>

</form>