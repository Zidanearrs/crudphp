<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GILACODING</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container col-md-6 mt-4">
        <h1>TABEL GILACODING</h1>
        <div class="card">
            <div class="card-header bg-success text-white">
                DATA BARANG <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include('koneksi.php');
                        $datas = mysqli_query($koneksi, "select * from  barang") or die(msqli_error($koneksi));
                        $no = 1;
                        while($row = mysqli_fetch_assoc($datas)){
                    ?>

                <tr>
                    <td><?=$no;?></td>
                    <td><?= $row['nama'];?></td>
                    <td><?= $row['harga'];?></td>
                    <td><?= $row['deskripsi'];?></td>
                    <td> <a href="edit.php?id=<?= $row['id'];?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="hapus.php?id=<?=$row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a></td>
                </tr>
                    <?php $no++;} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>

</html>