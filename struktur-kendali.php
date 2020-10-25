<?php
    // Pengulanngan
    // for, while, do.. while, foreach -> untuk array

    for ($i = 0; $i < 5; $i++) : // template syntax : endfor;
        echo "for world";
        echo "<br>";
    endfor;
    $i = 0;
    while ($i < 5) :
        echo "while world";
        echo "<br>";
        $i++;
    endwhile;
    $i = 0;
    do {
        echo " do while world";
        echo "<br>";
        $i++;
    }
    while ($i < 5);

    // Percabangan
    // if, else if, else, ternari, switch
    $x = 20;
    if ($x < 20) :
        echo "if";
    elseif ($x == 20) :
        echo "else if";
    else :
        echo "else";
    endif;
    echo "<br>";
    switch ($x) :
        case 20 :
            echo "case 20";
            break;
        case 30 :
            echo "case 30";
            break;
        default :
            echo "default";
    endswitch;
    echo "<br>ternary ";
    echo $x < 20 ? "benar" : "salah";
    echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur kendali</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <!-- Cara satu -->
    <table border="1" cellpadding="10" cellspasing="0">
    <?php for($i = 1; $i <= 5; $i++) { 
        echo "<tr>";
        for($j = 1; $j <= 5; $j++) { 
            echo "<td>$i,$j</td>";
        }
        echo "</tr>";
    } ?>
    </table>
    <!-- Cara kedua -->
    <table border="1" cellpadding="10" cellspasing="0">
    <?php for($i = 1; $i <= 5; $i++) : ?>
        <?php if($i % 2 == 1) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for($j = 1; $j <= 5; $j++) : ?>
                <!-- jika isi tag php hanya echo dapat ditulis seperti dibawah -->
                <td><?= $i . "," . $j ?></td> 
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
</body>
</html>