<?php
    include 'koneksi.php';
    $nip = $_GET['nip'];
    mysqli_query($koneksi, "DELETE FROM guru WHERE nip='$nip'")or die(mysqli_error());
    
    header("location:full.php?pesan=hapus");
?>