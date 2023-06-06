<?php
    include "./config/config.php";
    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM data WHERE id='$id'") or die();

    header("location:view.php?pesan=delete");
?>