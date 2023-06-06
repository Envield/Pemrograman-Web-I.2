<!-- latihan 2 Menghapus Session -->
<?php
    session_start();
    if (isset($_SESSION['login']))
    {
        unset($_SESSION['login']);
        session_destroy();
        echo "<h1>Selamat, Anda telah berhasil melalukan logout!</h1>";
        echo "<h1>Silahkan klik <a href='session1.php'>di sini</a> untuk melakukan login kembali (masuk).
        </br>
        Jika kamu tidak bisa mengakses <a href='session2.php'>HOME(Beranda)</a> lagi.</h1>";
    }
?>