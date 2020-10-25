<?php
    $x = 1;
    $y = 2;

    function tampil() {
        // Variabel dalam function hanya bisa dipanggil dilingkupnya saja
        global $x; // untuk memanggil variabel diluar global atau diluar function
        $y = 20;
        echo $x."<br>";
        echo $y."<br>";
    }

    echo $x."<br>";
    echo $y."<br>";

    // Superglobals variabel php yang biasa diakses dimanapun, 
    // mempunyai tipe array asosiatif
    echo "_GET : ".var_dump($_GET)."<br>";
    echo "_POST : ".var_dump($_POST)."<br>";
    echo "_REQUEST : ".var_dump($_REQUEST)."<br>";
    echo "_SESSION<br>";
    echo "_COOKIE : ".var_dump($_COOKIE)."<br>";
    echo "_SERVER : ".var_dump($_SERVER)."<br>";
    echo "SERVER_NAME : ".$_SERVER["SERVER_NAME"]."<br>";
    echo "_ENV : ".var_dump($_ENV)."<br>";
    echo "_FILES : ".var_dump($_FILES)."<br>";
?>