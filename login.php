<?php 
    include "namadatabase.php";

    $errorMessage = ''; // Initialize error message variable

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $db->query($sql);

        if($result->num_rows > 0){
            $data = $result->fetch_assoc();
            header("location: halaman.php");
            exit; // Add exit to prevent further execution
        } else {
            $errorMessage = "Akun Tidak Ditemukan";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="#" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <!-- <?php echo $errorMessage; ?> -->
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            
            <div class="button-group">
                <button type="submit" name="login" value="login">Login</button>
                <a href="./register.php" class="button">Register</a>
            </div>
        </form>
    </div>
</body>
</html>
