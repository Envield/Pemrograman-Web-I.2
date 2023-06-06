<?php
    include 'koneksi.php';
    $nip = $_POST['NIP'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];

    mysqli_query($koneksi, "UPDATE guru SET nama='$nama', alamat='$alamat' WHERE nip='$nip'");
    
    header("location:full.php?pesan=update");
?>