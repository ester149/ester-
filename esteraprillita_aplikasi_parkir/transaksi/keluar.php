<?php
include '../config/koneksi.php';

$data = mysqli_query($conn,"
SELECT * FROM transaksi
WHERE status='MASUK'
");
?>