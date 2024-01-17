<?php

    include 'services/config.php';

    if(isset($_POST['register'])) {
        echo 'You clicked register button. <br>';
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT into pemilik (username, password) 
        VALUES ('$username', '$password')";
        
        # validation
        if($con->query($sql)) {
            echo 'berhasil membuat data';
        } else {
            echo 'gagl membuat data';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar</title>
</head>
<body>
    
    <h3>Ini Konten Register bagian Register akun</h3>
    <form action="register.php" method="POST">
        <input type="username" name="username" placeholder="Masukin username" /> 
        <input type="password" name="password" placeholder="Masukin password" /> &nbsp;
        <button type="submit" name="register">Daftar</button> 
    </form>

    <p>Kembali ke <a href="index.php">Rumah</a></p>

    <?php include 'layout/footer.html' ?>

</body>
</html>