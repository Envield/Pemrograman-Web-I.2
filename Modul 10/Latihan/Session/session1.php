<!-- Latihan 2 Membuat Session -->
<?php
    session_start();
    if (isset($_POST['login']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
            if ($user == "Fira" && $pass =="360")
            {
                $_SESSION['login'] = $user;
                    echo "<h1>Halo, selamat kamu berhasil login!</h1>";
                    echo "<h2>Silahkan klik <a href = 'session2.php'>di sini</a> untuk menuju ke pemeriksaan session.</h2>";
            }
    }
    else 
    {
        ?>
        <html>
            <head>
                <title>Login di sini</title>
            </head>
            <body>
                <form action="" method="post">
                    <h2>Login di sini</h2>
                    Username : <input type="text" name="user"></input>
                    Password : <input type="password" name="pass"></input>
                    <input type="submit" name="login" value="login">
                </form>
            </body>
    </html>
    <?php
    }
?>