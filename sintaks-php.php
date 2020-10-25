<?php 
// Sintaks php
// echo dan print untuk mencetak tulisan atau variabel
// print_r biasanya dipakai untuk mencetak isi array
// var_damp untuk melihat isi atau informasi dari variabel biasanya dipake untuk debuging
echo " echo <br>";
echo 123;
echo "<br>";
echo true;
echo "<br>";
print "print";
echo "<br>";
print_r("print_r biasa juga untuk string");
echo "<br>";
var_dump("var_dump melihat type, panjang, dan isi variabel");
echo "<br>";

// Penulisan sintaks php
// 1. php dalam html
// 2. html dalam php

// Variabel
$nama = "apang";
echo "nama saya $nama";
echo "<br>";
echo 'nama saya $nama';
echo "<br>";

// Concat
$halo = "halo";
echo $halo . " " . $nama;
echo "<br>";

// Assigment
// =, +=, -=, *=, /=, %=, .=
$halo .= " ";
$halo .= " gabung dengan string menggunakan assigment concat";
echo "<br>";

// Operrator 
// ==, >, <, >=, <=, != perbandingan
// === identitas
// &&, ||, ! logika
var_dump(1 == 5);
var_dump(1 == "1"); // hanya mengecek nilai
var_dump(1 === "1");// mengecek tipe datanya
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaks php</title>
</head>
<body>
    <h1>html dalam php</h1>
    <?php echo '<p>php dalam html</p>' ?>
</body>
</html>


