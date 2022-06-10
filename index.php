<?php
session_start();
//kalau belum login arahkan ke login.php sekalian dikasih pesan
if ($_SESSION['userweb'] != 'login') {
    echo '<script>alert("Anda belum login, silahkan login");</script>';
    header("location:login.php");
}
include 'koneksi.php';
$tampil = $conn->query("select * from `tabel_obat`");
?>
<a href="tambah.php" button type="button" class="btn btn-light">TAMBAH</button> 
<a href="logout.php" button type="button" class="btn btn-light">LOGOUT</button> 

<a href="index2.php" >AKSI </a>  <br>
<html>

<head>
    <title>Table obat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <h2>Table obat</h2>
        <h4>(Inventory)</h4>
        <div class="data-tables datatable-dark">

            <!-- Masukkan table nya disini, dimulai dari tag TABLE -->
            <table class="table-bordered" id="mauexport" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>id_obat</th>
                    <th>nama_obat</th>
                    <th>dosis</th>
                    <th>cara_pemakaian</th>
                    <th>keterangan</th>
                    <th>harga</th>

                    </tr>
                </thead>
                <?php foreach ($tampil as $row) { ?>
                    <tr>
                    <td><?=$row['id_obat']?></td>       
                    <td><?=$row['nama_obat']?></td> 
                    <td><?=$row['dosis']?></td> 
                    <td><?=$row['cara_pemakaian']?></td> 
                    <td><?=$row['keterangan']?></td> 
                    <td><?=$row['harga']?></td>

                    </tr>
                <?php } ?>
            </table>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#mauexport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>