<?php
    include "config.php";
    $sql=mysqli_query($con,"select * from data where nip='$_GET[nip]'");
    $data=mysqli_fetch_array($sql);
?>

<h3> Edit Data Guru </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> NIP </td>
        <td> <input type="int" name="nip" value="<?php echo $data['nip']; ?>"> </td>
    </tr>
    <tr>
        <td> Nama </td>
        <td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
    </tr>
    <tr>
        <td> Instansi </td>
        <td> <input type="text" name="instansi" value="<?php echo $data['instansi']; ?>"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Edit"> </td>
    </tr>
</table>

</form>

    <?php
    include "config.php";

    if(isset($_POST['proses']))
    {
        mysqli_query($con, "update data set  
        nama = '$_POST[nama]',
        instansi = '$_POST[instansi]'
        gender = '$_POST[gender]'
        where nip = '$_GET[nip]'");

        echo "Data berhasil diubah";
        echo "<meta http-equiv=refresh content=1;URL='barang-data.php'>";

    }

    ?>