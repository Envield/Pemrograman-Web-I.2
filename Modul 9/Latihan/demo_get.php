<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1.</title>
</head>
<body>
    <h3>Menangani Masukan Data</h3>
    <h4>Metode Get</h4>
    <!-- Metode GET -->
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
            Nama
            <input type="text" name="Nama0"/>
            <br><br/>
            <input type="submit" value="Submit"/>
        </form>

        <?php
            if (isset($_GET['Nama0']))
            {
                echo 'Welcome, ' . $_GET['Nama0'];
            }
        ?>
    
    <h4>Metode Post</h4>
    <!-- Metode POST -->
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            Nama
            <input type="text" name="Nama1"/>
            <br><br/>
            <input type="submit" value="Submit"/>
        </form>

        <?php
            if (isset($_POST['Nama1']))
            {
                echo 'Metode, '. $_POST['Nama1'];
            }
        ?>

    <h4>Identifikasi Metode</h4>
    <!-- Metode REQUEST -->
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="reset">
            Nama
            <input type="text" name="Nama2"/>
            <br><br/>
            <input type="submit" value="Submit"/>
        </form>

        <?php
            if (isset($_REQUEST['Nama2']))
            {
                echo 'Metode, '. $_SERVER['REQUEST_METHOD'];
            }
        ?>    
</body>
</html>