<?php

    include 'services/config.php';

    if(isset($_POST['login'])) {
        echo "You clicked the login button. <br>";
        $username = $_POST['username'];;
        $password = $_POST['password'];

        // echo 'Username: ' . $username . '<br>' . 'Password: ' . $password . '<br>';

        # compare 
        $sql = "SELECT * FROM pemilik WHERE username = '$username' AND password = '$password'";

        # execution
        $res = $con->query($sql);

        if ($res->num_rows > 0) {
            # pop up data
            $data = $res->fetch_assoc();

            # get username and password
            // echo 'data Username: ' . $data["username"] . '<br />';
            // echo 'data Password: ' . $data["password"];

            header('location: dashboard.php');
            
        } else {
            echo 'account doesn\'t exist in database';
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <?php include 'layout/header.html' ?>
    
    <h3>Ini Konten Login</h3>
    <form action="login.php" method="POST">
        <input type="username" name="username" placeholder="Masukin username" /> 
        <input type="password" name="password" placeholder="Masukin password" /> &nbsp;
        <button type="submit" name="login">Login</button> 
    </form>

    <p>Kembali ke <a href="index.php">Rumah</a></p>

    <?php include 'layout/footer.html' ?>

</body>
</html>