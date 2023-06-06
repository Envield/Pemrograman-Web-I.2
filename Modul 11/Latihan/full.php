<!-- latihan 4 Administrasi Data -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrasi Data</title>
</head>

<body>
    <!-- Tambah Data -->
    <h2>Data Guru</h2>
    <h4>Menambahkan Data Guru</h4>
    <form method="post" action="tambah_aksi_full.php" onsubmit="return confirmInsert()">
        <table>
            <tr>
                <td>NIP</td>
                <td><input type="number" name="nip"></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="SAVE"></td>
            </tr>
        </table>
    </form>

    <!-- Tampil Data -->
    <h4>Menampilkan data Guru</h4>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Menu</th>
        </tr>
    <?php
       include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"SELECT * from guru");
        while($d = mysqli_fetch_array($data))
        {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['NIP']; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td>
                    <a href="lihat.php?nip=<?php echo $d['NIP']; ?>">Lihat</a>
                    <a href="edit.php?nip=<?php echo $d['NIP'];  ?>">Edit</a>
                    <a href="hapus.php?nip=<?php echo $d['NIP']; ?>" onclick="return confirmDelete()">Hapus</a>
                </td>
            </tr>
            <?php
        }
    ?> 

    </table>

    <script>
        $(document).ready(function() 
        {
            $('#data').DataTable();
        });

        function confirmInsert() 
        {
            return confirm("Apakah anda yakin ingin menambah data?");
        }

        function confirmDelete() 
        {
            return confirm("Apakah anda yakin ingin menghapus data?");
        }
    </script>

</body>

</html>