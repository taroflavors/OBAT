<?php
include 'koneksi.php';


$id = $_GET['id_obat'];
$sql = "select * FROM tabel_obat where id_obat='$id'";
$tampil = $conn->query($sql)->fetch_assoc();
//exit($sql);
?>
<form method="POST">
	<input type="text" value="<?=$tampil['id_obat']?>" name="id_obat" placeholder="id_obat">
	<input type="text" value="<?=$tampil['nama_obat']?>" name="nama_obat" placeholder="nama_obat">
	<input type="text" value="<?=$tampil['dosis']?>" name="dosis" placeholder="dosis">
	<input type="text" value="<?=$tampil['cara_pemakaian']?>" name="cara_pemakaian" placeholder="cara_pemakaian">
    <input type="text" value="<?=$tampil['keterangan']?>" name="keterangan" placeholder="keterangan">
    <input type="text" value="<?=$tampil['harga']?>" name="harga" placeholder="harga">
	<input type="submit" name="kirim">
</form>

<?php
include 'koneksi.php';
if(isset($_POST['kirim'])){
	$id_obat = $_POST['id_obat'];
	$nama_obat = $_POST['nama_obat'];
	$dosis = $_POST['dosis'];
	$cara_pemakaian = $_POST['cara_pemakaian'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
		$sql = "update tabel_obat set
				id_obat = '$id_obat',
				nama_obat = '$nama_obat',
				dosis = '$dosis',
				cara_pemakaian='$cara_pemakaian',
                keterangan = '$keterangan',
                harga = '$harga'
				where id_obat='$id_obat'
	"; 
	
		$tambah = $conn->query($sql);
		echo '<script>window.location.href="index.php"</script>';
}