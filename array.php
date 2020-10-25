<?php
    $arrayLama = array("Aa", "Bb", "Cc");
    $arrayBaru = [1, true, "Aa"]; // Elemen array boleh beragam tipe data

    // Menampilkan array
    var_dump($arrayBaru);
    echo "<br>";
    print_r($arrayBaru);
    // var_dump dan print_r digunakan saat debug
    echo "<br>";
    echo $arrayBaru[1]; 
    echo "<br>";
    // echo tidak dapat menampilkan semua array hanya bisa penampilkan satu elemen saja

    $arrayBaru[] = "apang"; // menambahkan elemen baru pada akhir array
    var_dump($arrayBaru);
    echo "<br>Panjang arrayBaru : ".count($arrayBaru);

    // Perulangan pada array dengan foreach

    $mahasiswa = [
        ["Apang", "6706152065", "IlmuTerapan", "Informatika"],
        ["Jonny", "6706152099", "IlmuTerapan", "Informatika"]
    ];

    // array yang dibuat disini merupakan array numeric dimana key angka dimulai dari 0
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: green;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <br>
    <?php foreach($arrayBaru as $elemen) : ?>
        <div><?= $elemen; ?></div>
    <?php endforeach; ?>
    <br><br><br>
    <p>Data mahasiswa : </p>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <?php foreach($mhs as $m) : ?>
                <li><?= $m; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>