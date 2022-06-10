<form method="post">
    <input type="text" name="id" placeholder="id_obat">
    <input type="text" name="nama" placeholder="nama_obat">
    <input type="text" name="maxmin" placeholder="dosis">
    <input type="text" name="cara" placeholder="cara_pemakaian">
    <input type="text" name="penjelasan" placeholder="keterangan">
    <input type="text" name="rego" placeholder="harga">
    <input type="submit" name="kirim">
</form>
<?php
include 'koneksi.php';
if (isset($_POST['kirim'])){
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $maxmin     = $_POST['maxmin'];
    $cara       = $_POST['cara'];
    $penjelasan = $_POST['penjelasan'];
    $rego       = $_POST['rego'];
             $sql = "INSERT INTO tabel_obat (id_obat, nama_obat, dosis, cara_pemakaian, keterangan, harga) VALUES ('$id', '$nama', '$maxmin', '$cara', '$penjelasan', '$rego');";
             $tambah = $conn->query($sql);
             echo '<script>window.location.href="index.php"</script>';
}
