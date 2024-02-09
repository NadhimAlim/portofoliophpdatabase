<?php 
    include "namadatabase.php";

    $registermessage = "";

    if(isset($_POST['register'])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO  users (username,password) VALUES ('$username','$password')";

        if($db->query($sql)){
            $registermessage = "Daftar Berhasil,Silahkan Login";
        } else {
            $registermessage = "Daftar Gagal,Silahkan Daftar Kembali";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
        <h2>Register</h2>

        <i><?php $registermessage ?></i>
        <form method="post" action="register.php">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="button-group">
                <button type="submit" name="register" value="register">Dafter Sekarang</button>
                
                
            </div>
        </form>
    </div>
</body>
</html>