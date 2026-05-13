<?php
include '../config/koneksi.php';

$data = mysqli_query($conn,"SELECT * FROM kendaraan");
?>

<h2>Data Kendaraan</h2>
<a href="tambah.php">Tambah</a>