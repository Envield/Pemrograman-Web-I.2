<?php 
    session_start();
    if (isset($_SESSION['login'])) 
    {
        unset ($_SESSION['login']);
        session_destroy();
        echo "<h1>Selamat, Anda telah berhasil melalukan logout!</h1>";
        echo "<h2>Silahkan klik <a href='index.php'>disini</a> jika ingin melakukan login kemabali (re-log). <br>Karena telah log-out, Kamu tidak akan bisa masuk ke <a href='home.php'>HOME(Beranda)</a> lagi</h2>";
    }
?>