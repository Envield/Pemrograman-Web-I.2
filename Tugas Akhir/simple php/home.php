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
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
        <p><a href="home.php">Welcome</a></p>
        </div>

        <div class="right-links">

            <?php 
                        
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query))
            {
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Instansi = $result['Instansi'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'><button class ='btn btn-primary'>Change Profile</button></a>";
            ?>
            <script>
                function inform()
                {
                    alert("Anda yakin ingin keluar?")
                }
            </script>
            <a href="view.php"><button class="btn" value="click">View</button></a>
            <a href="logout.php"><button class="btn" value="click" onclick="return confirmLogout()">Log Out</button></a>

        </div>
    </div>
    <main>
       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hallo <b><?php echo $res_Uname ?></b></p>
            </div>
            <div class="box">
                <p>Anda masuk sebagai : <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
            <center>
                <p>Selamat datang Bpk/Ibu perwakilan dari <b><?php echo $res_Instansi ?></b>. <br>
                    Silahkan pilih menu di atas sesuai dengan kebutuhan anda.
                </p> 
            </center>
            </div>
          </div>
       </div>
    </main>
</body>
    <script>
        function confirmLogout() 
        {
            return confirm("Apakah anda yakin ingin Logout?");
        }
    </script>
</html>