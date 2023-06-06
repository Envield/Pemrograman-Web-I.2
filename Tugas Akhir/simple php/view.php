<?php 
   session_start();

   include("config/config.php");
   if(!isset($_SESSION['valid']))
   {
    header("Location: login.php");
    exit;
   }
?>

<?php

include "./config/config.php";

$data = mysqli_query($con,"Select * from data");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <title>Data Perwakilan</title>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>

<body>
        <div class="nav">
            <div class="logo">
            <p><a href="home.php">Data</a></p>
            </div>

            <div class="right-links">
                <a href="home.php"><button class="btn btn-primary" value="click" onclick="return confirmHome()">Home</button></a>

            </div>
        </div>
        <div class="container mt-5 pt-5 pt-5">
        <div class="box">
            <h2 class="text-center mb-5 mt-5">Data Perwakilan Instansi</h2>
            <div class="box">
                <a href="add.php" class="btn btn-primary mb-3 ms-auto">Tambah Data</a>
                </form>
                <table class="table table-striped mt-3" id="data">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>L/P</th>
                            <th>Instansi</th>
                            <th>Menu</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include("config/config.php");
                        $no = 1;
                        $data = mysqli_query($con, "SELECT * from data");
                        while ($d = mysqli_fetch_array($data)) 
                        {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nip']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['gender']; ?></td>
                                <td><?php echo $d['instansi']; ?></td>

                                <td>
                                    <a class="btn btn-success" href="look.php?id=<?php echo $d['id']; ?>">Lihat</a>
                                    <a class="btn btn-warning" href="change.php?id=<?php echo $d['id']; ?>">Edit</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $d['id']; ?>" onclick="return confirmDelete()">Hapus</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
                    $(document).ready(function() 
                    {
                        $('#data').DataTable();
                    });
                    function confirmDelete() 
                    {
                        return confirm("Apakah anda yakin ingin menghapus data?");
                    }
                    function confirmHome() 
                    {
                        return confirm("Apakah anda yakin ingin kembali ke beranda?");
                    }
    </script>
</body>

</html>