<?php
include '../database.php';
$gaji = new Penggajihan();

$aksi = $_GET['aksi'];

if (isset($_POST['simpan'])) {
    $karyawan_id2 = $_POST['karyawan_id'];
    $karyawan_nama2 = $_POST['karyawan_nama'];
}
if ($aksi == "tambah") {
    $gaji->create($karyawan_nama2);
    header("location:index.php");
} elseif ($aksi == "update") {
    $gaji->update($karyawan_id2, $karyawan_nama2);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $gaji->delete($_GET['karyawan_id']);
    header("location:index.php");
}