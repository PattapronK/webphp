<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "asdf1234**";
$database = "userlogin";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $check_sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);
    $check_result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($check_result) > 0) {
        // Username and password are correct
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('location: main.php');
        exit; 
    } else {
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
     
    </style>
</head>
<body>
    <div class="longin">
        <h2 id="textlog">Login</h2>
        
         <form id="frormlog" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>

            <input type="submit" name="submit" value="submit">
        </form>
    </div>
    
</body>
</html>
       
