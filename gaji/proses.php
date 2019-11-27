<?php
include '../database.php';
$gaji = new Gaji();

$aksi = $_GET['aksi'];

if (isset($_POST['simpan'])) {
    $gaji_id2 = $_POST['gaji_id'];
    $karyawan_id2 = $_POST['karyawan_id'];
    $gaji_pokok2 = $_POST['gaji_pokok'];
}
if ($aksi == "tambah") {
    $gaji->create($karyawan_id2, $gaji_pokok2);
    header("location:index.php");
} elseif ($aksi == "update") {
    $gaji->update($gaji_id2,$karyawan_id2, $gaji_pokok2);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $gaji->delete($_GET['gaji_id']);
    header("location:index.php");
}