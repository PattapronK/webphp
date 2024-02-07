<?php
include 'check.php';

$servername = "localhost";
$username = "root";
$password = "asdf1234**";
$database = "majoret";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ตรวจสอบว่ามี ID ที่ส่งมา
if (isset($_POST['id'])) {
    $idToDelete = mysqli_real_escape_string($conn, $_POST['id']);
    
    // ลบแถวที่มี ID ตรงกับที่ส่งมา
    $sql = "DELETE FROM production WHERE ID = $idToDelete";

  
    if (mysqli_query($conn, $sql)) {
    echo "Data updated successfully";
    } else {
        echo "Error deleting row: " . mysqli_error($conn);
    }
} else {
    echo "Invalid parameters";
}

mysqli_close($conn);
?>
