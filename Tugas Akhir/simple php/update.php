<?php
    include "config/config.php";
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $instansi = $_POST['instansi'];
    
    $query = mysqli_query($con, "UPDATE data SET nip='$nip', nama='$nama', gender='$gender', instansi='$instansi' WHERE id='$id'");
    
    if($query){
        header("location:view.php?pesan=update");
    }
?>