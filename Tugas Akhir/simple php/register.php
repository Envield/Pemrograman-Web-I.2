<?php 
   session_start();

   include("config/config.php");
   if(isset($_SESSION['valid']))
   {
    header("Location: login.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         
         include("config/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $instansi = $_POST['instansi'];
            $email = $_POST['email'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 )
         {
            echo "<div class='message'>
                      <p>This email is already used, Try another One Please!</p>
                  </div> <br>";
            echo "<center><a href='javascript:self.history.back()'><button class='btn'>Go Back</button></center>";
         }
         else
         {

            mysqli_query($con,"INSERT INTO users(Username,Email,Instansi,Password) VALUES('$username','$email','$instansi','$password')") or die("Error Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<center><a href='login.php'><button class='btn'>Login Now</button></center>"; 

         }

         }
         else
         {
         
        ?>
        <center><header>Sign Up</header></center>
                <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="isntansi">Instansi</label>
                    <input type="text" name="instansi" id="instansi" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Sudah memiliki akun? <a href="login.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>