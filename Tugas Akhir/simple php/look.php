<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body>  
    <!-- Mine -->
    <div class="nav">
        <div class="logo">
        <p><a href="home.php">Data</a></p>
        </div>

        <div class="right-links">
            <script>
                function confirmHome()
                {
                    return confirm("Anda yakin ingin kembali ke beranda?");
                }
            </script>
            <a href="home.php"><button class="btn" value="click" onclick="return confirmHome()">Home</button></a>

        </div>
    </div>

    <div class="container">
        <div class="box form-box">

        <?php
            include ("./config/config.php");
            $id = $_GET['id'];
            $data = mysqli_query($con, "SELECT * from data WHERE id='$id'") or die('Error Occured');
            $no = 1;
            while($d = mysqli_fetch_array($data))
            {
            ?>
        <center><h3> Lihat Data <?php echo $d['nama'] ?> </h3><br></center>
        <table>
                    <tr>
                        <td>NIP</td>
                        <td>: <?php echo $d['nip'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: <?php echo $d['nama'] ?></td>
                    </tr>
                    <tr>
                        <td>L/P</td>
                        <td>: <?php echo $d['gender'] ?></td>
                    </tr>
                    <tr>
                        <td>Instansi</td>
                        <td>: <?php echo $d['instansi'] ?></td>
                    </tr>
                    <tr></tr>
            </table>
            <center>
            <div>
                <a href = "view.php" class = "btn btn-danger mt-3"> Kembali </a>
            </div>
            </center>
        </div>
        <?php } ?>
      </div>

</body>

</html>