<?php
include 'koneksi.php';
$tampil = $conn->query("select * from tabel_obat");

?>

<table border="1">
    <tr>
        <th>id_obat</th>
        <th>nama_obat</th>
        <th>dosis</th>
        <th>cara_pemakaian</th>
        <th>keterangan</th>
        <th>harga</th>
    <tr>
<?php foreach ($tampil as $tabel_obat) { ?>
    <tr>
        <td><?=$tabel_obat['id_obat']?></td>       
        <td><?=$tabel_obat['nama_obat']?></td> 
        <td><?=$tabel_obat['dosis']?></td> 
        <td><?=$tabel_obat['cara_pemakaian']?></td> 
        <td><?=$tabel_obat['keterangan']?></td> 
        <td><?=$tabel_obat['harga']?></td>
    </tr>    
<?php } ?>
</table>          