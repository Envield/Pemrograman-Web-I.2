<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Tugas Akhir</title>
</head>

<body>
        <script>
        function validateForm() 
        {
            const username = document.querySelector('input[name="username"]').value;
            const password = document.querySelector('input[name="password"]').value;

            if (!username || !password) 
            {
                alert('Username dan Password harus di isi!');
                document.forms["loginForm"]["username"].focus()
                return false;
            }
            if (!/^[a-zA-Z]*$/g.test(username) || !/^[a-zA-Z]*$/g.test(pasword)) 
            {
                alert("Username dan Password hanya boleh berisi huruf");
                document.forms["loginForm"]["username"].focus();
                return false;
            }
        }
        </script>

        <?php              
             include("config.php");
             if(isset($_POST['submit']))
             {
               $email = mysqli_real_escape_string($con,$_POST['email']);
               $password = mysqli_real_escape_string($con,$_POST['password']);

               $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
               $row = mysqli_fetch_assoc($result);

               if(is_array($row) && !empty($row))
               {
                   $_SESSION['valid'] = $row['Email'];
                   $_SESSION['username'] = $row['Username'];
                   $_SESSION['age'] = $row['Age'];
                   $_SESSION['id'] = $row['Id'];
               }
               else
               {
                   echo "<div class='message'>
                     <p>Wrong Username or Password</p>
                      </div> <br>";
                  echo "<a href='index.php'><button class='btn'>Go Back</button>";
        
               }
               if(isset($_SESSION['valid'])){
                   header("Location: home.php");
               }
             }
             else
             {
                ?>
                <div class="container d-flex justify-content-center align-items-center min-vh-100">
                <div class="row border rounded-5 p-3 bg-white shadow box-area">
                    <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                        style="background: #53057c;">
                        <div class="featured-image mb-3">
                            <img src="images/img1.png" class="img-fluid" style="width: 250px;">
                        </div>
                        <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">
                        </p>
                        <small class="text-white text-wrap text-center"
                            style="width: 17rem;font-family: 'Courier New', Courier, monospace;"></small>
                    </div>
                    <div class="col-md-6 right-box">
                        <div class="row align-items-center">
                            <div class="header-text mb-4">
                                <h2>Login</h2>
                                <p>Please login to have maximum experience while using our product!</p>
                            </div>
                            <form action="" method="post" onsubmit="return validateForm()">
                                <div class="input-group mb-3">
                                    <input type="text" name="username" class="form-control form-control-lg bg-light fs-6"
                                        placeholder="Username">
                                </div>
                                <div class="input-group mb-1">
                                    <input type="password" name="password" class="form-control form-control-lg bg-light fs-6"
                                        placeholder="Password">
                                </div>
                                <div class="input-group mb-5 d-flex justify-content-between">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="formCheck">
                                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember
                                                Me</small></label>
                                    </div>
                                    <div class="forgot">
                                        <small><a href="#">Forgot Password?</a></small>
                                    </div>
                                </div>
                                <?php if (isset($message)): ?>
                                    <div class="message">
                                        <?= $message ?>
                                    </div>
                                <?php endif; ?>
                                <div class="input-group mb-3">
                                    <input type="submit" name="login" value="Login" class="btn btn-lg btn-primary w-100 fs-6">
                                </div>
                                <div class="input-group mb-3">
                                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png"
                                            style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                                </div>
                            </form>
                            <div class="row">
                                <small>Don't have account? <a href="#">Sign Up</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        
            <?php 
             }
            ?>    



</body>

</html>