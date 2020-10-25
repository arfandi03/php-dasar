<?php
    // array asosiatif adalah array yang index atau key kita definisikan sendiri
    $mahasiswa = [
        [
            "nama" => "Apang", 
            "nim" => "6706152065", 
            "fakultas" => "IlmuTerapan", 
            "prodi" => "Informatika"
        ],
        [
            "nama" => "Jonny", 
            "nim" => "6706152099", 
            "fakultas" => "IlmuTerapan", 
            "prodi" => "Informatika",
            "nilai" => [90,80,70]
        ]
    ];

    echo "Nilai tugas pertama : ".$mahasiswa[1]["nilai"][1]."<br>";

    $mahasiswa[0]["nilai"] = [60,100,80]; // menambahkan elemen pada array asosiatif

    var_dump($mahasiswa);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asosiatif</title>
</head>
<body>
    <p>Data mahasiswa : </p>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Prodi : <?= $mhs["prodi"]; ?></li>
            <li>Fakultas : <?= $mhs["fakultas"]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html>