<!-- Latihan 1 Menghapus Cookies -->
<?php
    setcookie("username", "", time()-3600);
    setcookie("nama_lengkap", "", time()-3600);
    echo "<h1>Cookies berhasil dihapus<h1/>";
    echo "<h1>Silahkan klik <a href='cookies2.php'>di sini</a> untuk melakukan pemeriksaan Cookies.<h1/>";
?>