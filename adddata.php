<?php

$servername = "localhost";
$username = "root";
$password = "asdf1234**";
$database = "majoret";

$conn = mysqli_connect($servername, $username, $password, $database);

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

    mysqli_stmt_bind_param($stmt, "ssssssssssssss", $productionLine, $id, $itemNumber, $description, $productionRate, $rateHours, $quantityOrdered, $quantityCompleted, $qtyOpen, $orderDate, $releaseDate, $dueDate, $salesJob, $woStat);

    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert("Data added successfully");</script>';
        echo '<script>window.location.href = "main.php";</script>';
        exit;

    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>

<form action="adddata.php" method="post">
    <label for="productionLine">Production Line:</label>
    <input type="text" name="Production_Line" required><br>

    <label for="id">ID:</label>
    <input type="text" name="ID" required><br>

    <label for="itemNumber">Item Number:</label>
    <input type="text" name="Item_Number" required><br>

    <label for="description">Description:</label>
    <input type="text" name="Description" required><br>

    <label for="productionRate">Production Rate:</label>
    <input type="text" name="Production_Rate" required><br>

    <label for="rateHours">Rate Hours:</label>
    <input type="text" name="Rate_Hours" required><br>

    <label for="QuantityOrdered">Quantity Ordered:</label>
    <input type="text" name="Quantity_Ordered" required><br>

    <label for="QuantityComplete">Quantity Completed:</label>
    <input type="text" name="Quantity_Completed" required><br>

    <label for="QtyOpen">Qty Open:</label>
    <input type="text" name="Qty_Open" required><br>

    <label for="OrderDate">OrderDate:</label>
    <input type="text" name="Order_Date" required><br>

    <label for="ReleaseDate">Release Date:</label>
    <input type="text" name="Release_Date" required><br>

    <label for="DueDate">Due Date:</label>
    <input type="text" name="Due_Date" required><br>

    <label for="SalesJob">Sales Job:</label>
    <input type="text" name="Sales_Job" required><br>    

    <label for="WOStat">WO Stat:</label>
    <input type="text" name="WO_Stat" required><br>  

    <input type="submit" value="Add Data">
</form>
