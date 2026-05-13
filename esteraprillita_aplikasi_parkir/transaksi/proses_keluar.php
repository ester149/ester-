<?php
include '../config/koneksi.php';

$id = $_GET['id'];

$keluar = date('Y-m-d H:i:s');

mysqli_query($conn,"
UPDATE transaksi SET
jam_keluar='$keluar',
status='KELUAR'
WHERE id='$id'
");
?>