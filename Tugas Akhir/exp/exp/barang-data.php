<center>
<h3> Data barang </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th> NIP </th>
        <th> Nama </th>
        <th> Instansi </th>
        <th> Gender </th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "config.php";

    $no=1;
    $ambildata = mysqli_query($con,"select * from data");
    while($tampil = mysqli_fetch_array($ambildata))
    {
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[nip]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[instansi]</td>
            <td>$tampil[gender]</td>
            <td><a href='?kode=$tampil[nip]'> Hapus </a></td>
            <td><a href='barang-ubah.php?kode=$tampil[nip]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>
</center>
    <?php
    include "config.php";

    if(isset($_GET['kode']))
    {
    mysqli_query($con,"delete  from barang where nip='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='barang-data.php'>";

    }
    ?>
