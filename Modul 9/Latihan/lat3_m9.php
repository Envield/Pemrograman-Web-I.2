<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menangani Nilai Radio Button</title>
</head>
<body>
    <!-- Mendapatkan Nilai Radio Button -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    Jenis Kelamin
        <br/>
        <input type="radio" name="sex" value="Pria" />Pria
        <br/>
        <input type="radio" name="sex" value="Wanita" />Wanita 
        <br><br/>
        <input type="submit" value="OK" />
    </form>
    <?php
        if (isset($_POST['sex'])) 
        {
            echo $_POST['sex'];
        }
    ?>
    <!-- Prefilling Radio Button -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    Jenis Kelamin
    <input type="radio" name="sex" value="Pria" checked
        <?php
        if ($_POST['sex'] == 'Pria') 
        {
            echo 'checked="checked"';
        }
        ?>
    />Pria
    <input type="radio" name="sex" value="Wanita"
        <?php
        if ($_POST['sex'] == 'Wanita') 
        {
            echo 'checked="checked"';
        }
        ?>
    />Wanita 
    <br/>
    <input type="submit" value="OK"/>
    </form>
        <?php
        if (isset($_POST['sex'])) 
        {
            echo $_POST['sex'];
        }
        ?>
</body>
</html>