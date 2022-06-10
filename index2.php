<?php
session_start();
//kalau belum login arahkan ke login.php sekalian dikasih pesan
if($_SESSION['userweb']!='login'){
    echo '<script>alert("Anda belum login, silahkan login");</script>';
    header ("location:login.php");
}
include 'koneksi.php';
$tampil = $conn->query("select * from tabel_obat");
?>

<table border='1'>
    <a href="tambah.php">TAMBAH</a> <br>
    <a href="logout.php">LOGOUT</a><br>
    <tr>
        <th>id_obat</th>
        <th>nama_obat</th>
        <th>dosis</th>
        <th>cara_pemakaian</th>
        <th>keterangan</th>
        <th>harga</th>
        <th>aksi</th>
    <tr>
<?php foreach($tampil as $row) { ?>
    <tr>
        <td><?=$row['id_obat']?></td>       
        <td><?=$row['nama_obat']?></td> 
        <td><?=$row['dosis']?></td> 
        <td><?=$row['cara_pemakaian']?></td> 
        <td><?=$row['keterangan']?></td> 
        <td><?=$row['harga']?></td>
        <td><a onclick="return confirm('apakah kamu ingin mengahapus')" href="hapus.php?dosis=<?=$row['dosis'] ?>">delete</a>|
            <a href="edit.php?id_obat=<?=$row['id_obat'] ?>">Edit</a>

    </tr>    
<?php } ?>
</table>