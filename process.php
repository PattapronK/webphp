<?php
$servername = "localhost";
$username = "root";
$password = "asdf1234**";
$database = "majoret";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productionLine = mysqli_real_escape_string($conn, $_POST['productionLine']);
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // Add more variables for additional fields

    $sql = "INSERT INTO production (Production_Line, ID) VALUES ('$productionLine', '$id')";

    if (mysqli_query($conn, $sql)) {
        echo "Data added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
