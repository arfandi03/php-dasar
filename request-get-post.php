<?php
    // untuk memasukkan nilai melalui url tambahkan :
    // ?key=value&key=value
    // misal : http://localhost/php-dasar/request-get-post.php?username=apang&password=123
    if(isset($_GET["username"]) && isset($_GET["password"])){ // mengecek apakah ada variabel atau elemen pada $_GET
        var_dump($_GET);
    }
    if(isset($_POST["submit"])) { // mengecek apakah ada variabel atau elemen pada $_POST 
        var_dump($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request get dan post</title>
</head>
<body> 
    <ul>
    <!-- action bisa diisi ke url tujuan dan jika method tidak dipakai defaultnya get -->
        <form action="" method="post">  
            <li>
                <label for="username">Username : </label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" id="password" name="password"></li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>

    <?php 
        if(isset($_POST["submit"])) : 
            if($_POST["username"] == "apang" && $_POST["password"] == "123") :
    ?>
                <h1>Selamat datang <?= $_POST["username"] ?></h1>
        <?php else : ?>
                <h1>Username dan password salah</h1>
    <?php
            endif;
        endif; 
    ?>
</body>
</html>