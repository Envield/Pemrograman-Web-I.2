<h3> Tambah Data </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="120"> NIP </td>
        <td> <input type="int" name="nip"> </td>
    </tr>
    <tr>
        <td> Nama </td>
        <td> <input type="text" name="nama"> </td>
    </tr>
    <tr>
        <td> Instansi </td>
        <td> <input type="text" name="instansi"> </td>
    </tr>
    <tr>
        <td> L/P </td>
        <td> <input type="text" name="gender"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="SAVE"> </td>
    </tr>
</table>

</form>

    <?php
        include "config.php";

        if(isset($_POST['proses']))
        {
            mysqli_query($con, "insert into data set  
            nip = '$_POST[nip]',
            nama = '$_POST[nama]',
            instansi = '$_POST[instansi]'
            gender = '$_POST[gender]'
            ");

            echo "Data barang baru berhasil disimpan";

        }

    ?>