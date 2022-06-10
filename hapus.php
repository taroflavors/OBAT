<?php
include 'koneksi.php';

$id = $_GET['dosis'];
$sql = "delete FROM tabel_obat where dosis='$id'";

$hapus = $conn->query($sql);
echo '<script>window.location.href="index.php"</script>';