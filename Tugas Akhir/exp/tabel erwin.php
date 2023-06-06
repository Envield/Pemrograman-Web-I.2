<table align="center" id="data">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>L/P</th>
                <th>Instansi</th>
                <th>Menu</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include("./config/config.php");
                $no = 1;
                $data = mysqli_query($con, "SELECT * from data");
                while($d = mysqli_fetch_array($data)) : ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?= $d['nip']?></td>
                    <td><?= $d['nama']?></td>
                    <td><?= $d['gender']?></td>
                    <td><?= $d['instansi']?></td>
                    <td>
                        <a class="btn btn-success" href="look.php?nip=<?php echo $d['nip']; ?>">Lihat</a>
                        <a class="btn btn-warning" href="change.php?nip=<?php echo $d['nip']; ?>">Edit</a>
                        <a class="btn btn-danger" href="delete.php?nip=<?php echo $d['nip']; ?>" onclick="return confirmDelete()">Hapus</a>
                    </td>
                </tr>
                <script>
                    $(document).ready(function() 
                    {
                        $('#data').DataTable();
                    });
                    function confirmDelete() 
                    {
                        return confirm("Apakah anda yakin ingin menghapus data?");
                    }
                </script>
                
            <?php endwhile;?>
        </tbody>
    </table>