<!-- Latihan 1 Memeriksa Cookies -->
<?php
    if (isset($_COOKIE['username']))
    {
        echo "<h1>Cookie dari 'username' ditemukan. </h1></br> Cookie tersebut berisi : " .$_COOKIE['username'];
    }
    else
    {
        echo "<h1>Cookie dari 'username' tidak dapat ditemukan.</h1>";
    }

    if (isset($_COOKIE['nama_lengkap']))
    {
        echo "<h1>Cookie dari 'nama_lengkap' ditemukan. </h1></br> Cookie tersebut berisi : " .$_COOKIE['nama_lengkap'];
    }
    else
    {
        echo "<h1>Cookie 'nama_lengkap' tidak dapat ditemukan.</h1>";
    }
    echo "<h2>Silahkan klik <a href='cookies3.php'>di sini</a> untuk menghapus Cookies.</h2>";
?>