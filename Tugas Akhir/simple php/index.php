<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header("Location: home.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="images/Tut-Wuri-Logo.ico">
    <title>Welcome</title>
</head>
<body>
    <div class="container-fluid vh-100 justify-content-center" style="background-color: #ececec">
        <div class="container-fluid justify-content-center" style="height: 95vh">
            <div class="container-fluid" style="height: 35vh"></div>
            <div class="text-center">
                <img class="d-block mx-auto mb-4 mb-sm-3" src="images/Tut Wuri Logo.png" alt width="200" height="200">
                <p class="text-black m-1" style="font-size: 90%">Selamat Datang!</p>
                <p class="text-black m-1" style="font-size: 90%">Silahkan Log In menggunakan akun anda</p>
                <p class="text-black m-1" style="font-size: 90%">Jika belum memiliki akun, lakukan Sign Up terlebih dahulu</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-3">
                    <a href="register.php"><button type="button" class="btn btn-sm me-sm-1 px-2 py-1 text-white" style="background-color: #4c8cd2">Sign Up</button></a>
                    <a href="login.php"><button type="button" class="btn btn-sm me-sm-1 px-2 py-1 text-white" style="background-color: #4c8cd2">Log In</button></a>
                </div>
            </div>
        </div>
        <footer>
            <ul class="nav justify-content-center" style="color: #8e8ea0; font-size: x-small;">
                <li class="nav-item p-1">Terms of use</li>
                <li class="nav-item p-1" style="color: #565869"> | </li>
                <li class="nav-item p-1">Privacy Policy</li>
            </ul>
        </footer>
    </div>
</body>
</html>