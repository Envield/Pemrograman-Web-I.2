<?php 
   session_start();

   include("config/config.php");
   if(!isset($_SESSION['valid']))
   {
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
    <link rel="stylesheet" href="css/style.css">
    <title>Ubah Data</title>
</head>
<body>
    <?php
        include "config/config.php";
        $id = $_GET['id'];
        $data = mysqli_query($con, "SELECT * FROM data WHERE id='$id'") or die();
        $no = 1;
        
        while($d = mysqli_fetch_array($data)) 
        {
    ?>
    <div class="container">
        <div class="box form-box">
            <center><header>Edit Data Perwakilan</header></center> 
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="field input">
                    <label for="nip">NIP</label>
                    <input type="int" name="nip" id="nip" value="<?php echo $d['nip']; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" value="<?php echo $d['nama']; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="gender">L/P</label>
                    <input type="text" name="gender" id="gender" value="<?php echo $d['gender']; ?>" autocomplete="off" required>
                </div>
                
                <div class="field input">
                    <label for="instansi">Instansi</label>
                    <input type="text" name="instansi" id="instansi" value="<?php echo $d['instansi']; ?>" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
               
            </form>
            <?php } ?>
        </div>
      </div>
      <script>
      </script>
      
</body>
</html>