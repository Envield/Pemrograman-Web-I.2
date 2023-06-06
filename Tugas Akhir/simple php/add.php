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
    <title>Tambah Data</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("./config/config.php");
         if(isset($_POST['submit']))
         {
            $nip = $_POST['nip'];
            $nama = $_POST['nama'];
            $gender = $_POST['gender'];
            $instansi = $_POST['instansi'];
            
         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT nip FROM data WHERE nip='$nip'");

         if(mysqli_num_rows($verify_query) !=0 )
         {
            echo "<div class='message'>
                      <p>This NIP already used, Try another One Please!</p>
                  </div> <br>";
            echo "<center><a href='javascript:self.history.back()'><button class='btn'>Go Back</button></center>";
         }
         else
         {

            mysqli_query($con,"INSERT INTO data(nip,nama,instansi,gender) VALUES($nip,'$nama','$instansi','$gender')") or die("Error Occured");

            echo "<div class='message'>
                      <p>Adding Data Succeed!</p>
                  </div> <br>";
            echo "<center><a href='view.php'><button class='btn'>Lihat Data</button></center>"; 

         }

         }
         else
         {
         
        ?>
        <center><header>Tambah Data</header></center>
                <form action="" method="post">
                <div class="field input">
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" id="nip" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="gender">L/P</label>
                    <input type="text" name="gender" id="gender" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="isntansi">Instansi</label>
                    <input type="text" name="instansi" id="instansi" autocomplete="off" required>
                </div>
                
                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Tambah" required>
                </div>
                <div class="links">
                    Batalkan tambah data? <a href="view.php">Cancel</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>