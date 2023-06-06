<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD dan Database dari PHP dan MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="judul">
        <h3>Detail Data</h3>
    </div>
    </br>
    </br>
    <?php
        include "koneksi.php";
        $nip = $_GET['nip'];
        $data = mysqli_query($koneksi, "SELECT * from guru WHERE nip='$nip'") or die(mysqli_error());
        $no = 1;
        while($d = mysqli_fetch_array($data))
        {
    ?>
            <table>
                <tr>
                    <td>NIP</td>
                    <td>: <?php echo $d['NIP'] ?></td>
                </tr>
                    
                <tr>
                    <td>Nama</td>
                    <td>: <?php echo $d['Nama'] ?></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>: <?php echo $d['Alamat'] ?></td>
                </tr>
            </table>
        <?php
        }
        ?>
        <a href="full.php"><--Kembali untuk melihat semua data</a>
        <script>
        function confirmUpdate() {
            return confirm("Apakah anda yakin ingin mengubah data?");i
        }
        </script>
</body>
</html>