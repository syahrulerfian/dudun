<html>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<body>

<nav class="center navbar-dark bg-dark">
<h2><b><center><font color="white">Gaji Karyawan</center></h2></b>
</nav>

        <center>
        <nav class="center navbar-light" style="background-color: #e3f2fd;">
        <h5><a href="tambah.php">Tambah</a></h5> </center> 
            </nav>
              
            <table border="1">
                <tr>
                    <th class="table-dark">No</th>
                    <th class="table-dark">Nama Karyawan</th>
                    <th class="table-dark">Gaji Pokok</th>
                    <th class="table-dark">Aksi<th>
                </tr>

                <?php
                include '../database.php';
                $gaji = new Gaji();
                $no = 1;
                foreach ($gaji->index() as $data) {
                    ?>

                    <tr>
                        <td class="table-dark"><?php echo $no++; ?> </td>
                        <td class="table-light"><?php echo $data['karyawan_nama']; ?></td>
                        <td class="table-light"><?php echo $data['gaji_pokok']; ?></td>

                        <td class="table-light"><a href="show.php?gaji_id=<?php echo $data['gaji_id']; ?> " class="btn btn-success">Tampil</a>
                            <a href="edit.php?gaji_id=<?php echo $data['gaji_id']; ?>" class="btn btn-danger">Ubah</a>
                            <a href="proses.php?gaji_id=<?php echo $data['gaji_id']; ?>
                    & aksi=delete" onclick="return confirm('Apakah Anda 
                    Yakin Mau Menghapus Data Ini?')" class="btn btn-secondary" >Hapus</a>
                    <br>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
</body>

</html>