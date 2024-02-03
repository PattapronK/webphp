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
    $productionLine = mysqli_real_escape_string($conn, $_POST['Production_Line']);
    $id = mysqli_real_escape_string($conn, $_POST['ID']);
    $itemNumber = mysqli_real_escape_string($conn, $_POST['Item_Number']);
    $description = mysqli_real_escape_string($conn, $_POST['Description']);
    $productionRate = mysqli_real_escape_string($conn, $_POST['Production_Rate']);
    $rateHours = mysqli_real_escape_string($conn, $_POST['Rate_Hours']);
    $quantityOrdered = mysqli_real_escape_string($conn, $_POST['Quantity_Ordered']);
    $quantityCompleted = mysqli_real_escape_string($conn, $_POST['Quantity_Completed']);
    $qtyOpen = mysqli_real_escape_string($conn, $_POST['Qty_Open']);
    $orderDate = mysqli_real_escape_string($conn, $_POST['Order_Date']);
    $releaseDate = mysqli_real_escape_string($conn, $_POST['Release_Date']);
    $dueDate = mysqli_real_escape_string($conn, $_POST['Due_Date']);
    $salesJob = mysqli_real_escape_string($conn, $_POST['Sales_Job']);
    $woStat = mysqli_real_escape_string($conn, $_POST['WO_Stat']);

    // Use prepared statement to insert data
    $stmt = mysqli_prepare($conn, "INSERT INTO production (
        Production_Line,
        ID,
        Item_Number,
        Description,
        Production_Rate,
        Rate_Hours,
        Quantity_Ordered,
        Quantity_Completed,
        Qty_Open,
        Order_Date,
        Release_Date,
        Due_Date,
        Sales_Job,
        WO_Stat
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ssssssssssssss", $productionLine, $id, $itemNumber, $description, $productionRate, $rateHours, $quantityOrdered, $quantityCompleted, $qtyOpen, $orderDate, $releaseDate, $dueDate, $salesJob, $woStat);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo "Data added successfully";
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conn);
?>
