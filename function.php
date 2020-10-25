<?php
    // Build-in Function dari php
    
    // date() parameter : hari = ("l"), tanggal = ("d),  bulan = ("M")
    // bulan bentuk angka = ("m"), tahun = ("Y")
    echo "date : ".date("l, d-M-Y");
    echo "<br>";

    // time()
    // UNIX Timestamp / EPOCH time sejak 1 Januari 1970 
    echo "time : ".time();
    echo "<br>";
    echo date("d-M-Y", time() - 60 * 60 * 24 * 30); // detik menit jam hari (-) -> sebelum
    echo "<br>";

    // mktime(0,0,0,0,0,0) membuat waktu sendiri
    // jam, menit, detik, bulan, tanggal, tahun
    echo "mktime : ".mktime(0,0,0,2,1,1998);
    echo "<br>";
    echo date("l, d-M-Y", mktime(0,0,0,2,1,1998)); // Tanggal lahir
    echo "<br>";

    // strtotime() membuat string format tanggal ke bentuk detik
    echo "strtotime : ".strtotime("01 feb 1998");
    echo "<br>";
    echo date("l, d-M-Y",strtotime("01 feb 1998"));
    echo "<br>";

    // string
    // strlen() mengetahui panjang string
    // strcmp() membandingkan 2 string
    // explode() memecah string menjadi array
    // htmlspesialchars() untuk keamanan mencegah hacker

    // unility
    // var_dump() mengetahui informasi variabel atau array
    // isset() mengetahui variabel udah ada(true) atau belum(false)
    // empty() mengatahui variabel ada isi atau belum
    // die() menghentikan program
    // sleep() menghentikan sementara

    // User-defined Function
     function salam($nama = "apang") { // default parameter nama =  apang
        //  echo date( ,"1359780799");
         $waktu = date("H", time());
         if ($waktu < 11) :
             $waktu = "pagi";
        elseif ($waktu < 13) :
            $waktu = "siang";
        elseif ($waktu < 17) :
            $waktu = "sore";
        else :
            $waktu = "malam";
        endif;
        //  if()
         return "Selamat $waktu, $nama";
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1><?php echo salam(); ?></h1>
    <h1><?php echo salam("siapa"); ?></h1>
    <p>Referensi : </p>
    <a href="https://www.php.net/manual/en/funcref.php">[1] Built in function</a>
    <br>
    <a href="https://www.php.net/manual/en/function.date">[2] Date function</a>
    <br>
</body>
</html>