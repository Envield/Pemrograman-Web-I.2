<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Administrasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
    <h1>Edit Data</h1>
    </div>
    <br>
    <br>

    <a href="full.php">Lihat Semua Data</a>
    <br>

    <h3>Edit Data</h3>

    <?php
        include "koneksi.php";
        $nip = $_GET['nip'];
        $data = mysqli_query($koneksi, "SELECT * from guru WHERE nip='$nip'") or die();
        $no = 1;
        while($d = mysqli_fetch_array($data)) 
        {
    ?>
        <form action="update.php" method="post" onsubmit="return confirmChanges()">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="nip" value="<?php echo $d['NIP'] ?>">
                        <input type="text" name="nama" value="<?php echo $d['Nama'] ?>">
                    </td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['Alamat'] ?>"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>

            </table>
        </form>
        <?php
        }
        ?>
        <script>
            function confirmChanges() 
            {
                return confirm("Apakah anda yakin ingin mengubah data?");
            }
        </script>
</body>
</html>