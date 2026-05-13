<?php
include '../config/koneksi.php';

if(isset($_POST['simpan'])){

    $plat = $_POST['plat'];
    $jenis = $_POST['jenis'];

    mysqli_query($conn,"
    INSERT INTO kendaraan VALUES(
        '',
        '$plat',
        '$jenis'
    )
    ");

    header("Location:index.php");
}
?>

<form method="POST">

<input type="text" name="plat">

<select name="jenis">
<option>Motor</option>
<option>Mobil</option>
</select>

<button name="simpan">Simpan</button>

</form>