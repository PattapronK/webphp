<?php

$servername = "localhost";
$username = "root";
$password = "asdf1234**";
$database = "majoret";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ตรวจสอบว่ามี ID และ Sales_Job ส่งมา
if (isset($_GET['id']) && isset($_GET['salesJob'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $salesJob = mysqli_real_escape_string($conn, $_GET['salesJob']);


    $newSalesJob = '';  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $newSalesJob = mysqli_real_escape_string($conn, $_POST['new_Sales_Job']);

        $sql = "UPDATE production SET Sales_Job = ? WHERE ID = ? AND Sales_Job = ?";

        $stmt = mysqli_prepare($conn, $sql);

        
        if ($stmt) {
            
            mysqli_stmt_bind_param($stmt, "sss", $newSalesJob, $id, $salesJob);

            if (mysqli_stmt_execute($stmt)) {
                echo "Data updated successfully";
                 echo '<script>window.location.href = "main.php";</script>';
            } else {
                echo "Error updating data: " . mysqli_stmt_error($stmt);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }
    }
    
    else {
?>
   
    <form action="update.php?id=<?php echo $id; ?>&salesJob=<?php echo $salesJob; ?>" method="post">
        <label for="new_Sales_Job">New Sales Job:</label>
        <input type="text" name="new_Sales_Job" required><br>
        
        <input type="submit" value="Update Data">
    </form>
<?php
    }
} else {
    echo "Invalid parameters";
}

mysqli_close($conn);
?>
