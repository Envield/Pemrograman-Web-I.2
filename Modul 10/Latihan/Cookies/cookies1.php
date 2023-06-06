<!-- Latihan 1 Membuat Cookies -->
<?php
    $value1 = 'Fira';
    $value2 = 'Fira Hasna';
    setcookie("username", $value1);
    setcookie("nama_lengkap",$value2, time()+3600);
    echo "<h2>Ini merupakan halaman untuk set Cookies</h2>";
    echo "<h2>Silahkan klik <a href='cookies2.php'>di sini</a> untuk melakukan pengecekan Cookies</h2>";
?>