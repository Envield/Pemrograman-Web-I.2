<!DOCTYPE html>
<html lang="en">

<head>
    <title>Demo</title>
</head>

<body>
    <!-- Lat 1. Program PHP -->
        <?php
        echo 'Kode PHP di sini';
        // ...
        ?>
            <p> Dokumen HTML </p>
        <?php
        echo 'Kode PHP di sini';
        // ...
        ?>
            <p> Kode <?php echo "PHP";?> di HTML </p>

    <!-- Lat 2. Variabel -->
    <!-- ... variabel diidentifikasikan melalui karakter dollar ($) yang diikuti nama variabel.  -->
        <?php
        $bil = 3;
        echo $bil;
        ?>
    <!-- fungsi var_dump() atau print_r() untuk memudahkan pemeriksaan variabel. -->
        <?php
        // Deklarasi dan inisialisasi
        $bil = 3;
        // Dumping informasi mengenai variabel
        var_dump($bil);
        print_r($bil);
        ?>
        <!-- isset() digunakan untuk memeriksa apakah suatu variabel di-set atau tidak -->
        <?php
        $bil = 3;
        var_dump($bil);
        // Output: int(3)
        $var = "";
        var_dump($var);
        // Output: string(0) ""
        $var = null;
        var_dump($var);
        // Output: NULL
        ?>

    <!-- Lat 3. Tipe Data dan Casting -->
    <!-- == Tipe Data == -->
    <!-- fungsi berawalan is_ dapat dimanfaatkan untuk menguji tipe data suatu variabel kecuali fungsi is_bool() sisanya sama/bisa. -->
        <?php
        $bil = 3;
        var_dump(is_int($bil));
        // Output: bool(true)
        $var = "";
        var_dump(is_string($var));
        // Output: bool(true)
        ?>
    <!-- == Casting == -->
    <!-- Publikasi ke web server. -->
        <?php
        $str = '123abc';
        // Casting nilai vaiabel $str ke integer
        $bil = (int) $str; // $bil = 123
        echo gettype($str);
        // Output: string
        echo gettype($bil);
        // Output: integer
        ?>
    <!-- Lat 4. Seleksi -->
    <!-- Terdapat 4 pernyataan pengambilan keputusan di PHP : if, if-else, if-elseif, dan switch. -->
    <!-- if  -->
        <?php
        $a = 10;
        $b = 5;
        if ($a > $b) 
        {
            echo 'a lebih besar dari b';
        }
        ?>
    <!-- if-else -->
        <?php
        $a = 10;
        $b = 5;
        if ($a > $b) 
        {
            echo 'a lebih besar dari b';
        } 
        else 
        {
            echo 'a TIDAK lebih besar dari b';
        }
        ?>
    <!-- if-elseif -->
        <?php
        $a = 10;
        $b = 5;
        if ($a > $b) 
        {
            echo 'a lebih besar dari b';
        } 
        elseif ($a == $b) 
        {
            echo 'a sama dengan b';
        } 
        else 
        {
            echo 'a kurang dari b';
        }
        ?>
    <!-- switch -->
        <?php
        $i = 0;
        if ($i == 0) 
        {
            echo "i equals 0";
        } 
        elseif ($i == 1) 
        {
            echo "i equals 1";
        } 
        elseif ($i == 2) 
        {
            echo "i equals 2";
        }
        // Ekuivalen, dengan pendekatan switch
        switch ($i) 
        {
            case 0:
            echo "i equals 0";
            break;
            case 1:
            echo "i equals 1";
            break;
            case 2:
            echo "i equals 2";
            break;
        }
        ?>

    <!-- Lat 5. Pengulangan -->
    <!-- Pengulangan While -->
        <?php
        $i = 0;
        while ($i < 10) 
        {
            echo $i;
            // Inkremen counter
            $i++;
        }
        ?>
    <!-- Pengulangan do-while -->
       <?php
        $i = 0;
        do 
        {
            echo $i;
            // Inkremen counter
            $i++;
        } 
        while ($i < 10);
        ?>
    <!-- Pengulangan for -->
        <?php
        for ($i = 0; $i < 10; $i++) 
        {
            echo $i;
        }
        ?>
    <!-- Pengulangan foreach -->
        <?php
        $arr = array(1, 2, 3, 4);
        foreach ($arr as $value) 
        {
            echo $value;
        }
        ?>
    <!-- 6. Fungsi dan Prosedur -->
    <!-- Definisi Fungsi/Prosedur -->
        <?php
        // Contoh prosedur
        function do_print() 
        {
            // Mencetak informasi timestamp
            echo time();
        }
        // Memanggil prosedur
        do_print();
        echo '<br />';
        // Contoh fungsi penjumlahan
        function jumlah($a, $b) 
        {
            return ($a + $b);
        }
            echo jumlah(2, 3);
            // Output: 5
        ?>
    <!-- Argumen Fungsi/Prosedur -->
        <?php
        /**
        * Mencetak string
        * $teks nilai string
        * $bold adalah argumen opsional
        */
        function print_teks($teks, $bold = true) 
        {
            echo $bold ? '<b>' .$teks. '</b>' : $teks;
        }
        print_teks('Indonesiaku');
        // Mencetak dengan huruf tebal
        print_teks('Indonesiaku', false);
        // Mencetak dengan huruf reguler
        ?> 
</body>
</html>