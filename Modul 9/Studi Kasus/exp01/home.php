<?php 
    session_start();
    if (isset($_SESSION['login'])) 
    { 
        echo "<h1>Selamat datang, ". $_SESSION['login'] ."</h1>";
        echo "<h2>Ini adalah halaman HOME kamu.</h2>";
        echo "<h2>Silahkan klik <a href='logout.php'>disini</a> jika ingin melakukan logout</h2>";
    }
    else 
    {
        //session tidak muncul karena belum berhasil melakukan login atau gagal login
        die ("Anda belum login! Pastikan Login terlebih dahulu <a href='index.php'> disini</a>");
    }
?>