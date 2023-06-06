<!-- Latihan 2 Memeriksa Session -->
<?php
    session_start();
    if (isset($_SESSION['login']))
    {
        echo "<h1>Selamat datang, ". $_SESSION['login'] ."</h1>";
        echo "<h2>Halaman ini hanya bisa tampil jika anda berhasil melakukan log in. Halaman HOME (Beranda) ini adalah beranda milik Anda.</h2>";
        echo "<h2>Silahkan klik <a href='session3.php'>di sini(session3.php)</a> untuk melakukan logout (keluar).</h2>";
    }
?>