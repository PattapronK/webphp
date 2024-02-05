<?php
$servername = "localhost";
$username = "root";
$password = "asdf1234**";
$database = "majoret";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webphp</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<table>
    <tr>
        <th>Production Line</th>
        <th>ID</th>
        <th>Item_Number</th>
        <th>Description</th>
        <th>Production_Rate</th>
        <th>Rate_Hours</th>
        <th>Quantity_Ordered</th>
        <th>Quantity_Completed</th>
        <th>Qty_Open</th>
        <th>Order_Date</th>
        <th>Release_Date</th>
        <th>Due_Date</th>
        <th>Sales_Job</th>
        <th>WO_Stat</th>
    </tr>
    <?php
// Check if there's a search query
if (isset($_GET['search_query'])) {
    $searchQuery = mysqli_real_escape_string($conn, $_GET['search_query']);

    $sql = "SELECT * FROM production WHERE
            Production_Line LIKE '%$searchQuery%' OR
            ID LIKE '%$searchQuery%' OR
            Item_Number LIKE '%$searchQuery%' OR
            Description LIKE '%$searchQuery%' OR
            Production_Rate LIKE '%$searchQuery%' OR
            Rate_Hours LIKE '%$searchQuery%' OR
            Quantity_Ordered LIKE '%$searchQuery%' OR
            Quantity_Completed LIKE '%$searchQuery%' OR
            Qty_Open LIKE '%$searchQuery%' OR
            Order_Date LIKE '%$searchQuery%' OR
            Release_Date LIKE '%$searchQuery%' OR
            Due_Date LIKE '%$searchQuery%' OR
            Sales_Job LIKE '%$searchQuery%' OR
            WO_Stat LIKE '%$searchQuery%'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
    
        echo "<h2>Search Results:</h2>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["Production_Line"] . "</td>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["Item_Number"] . "</td>";
            echo "<td>" . $row["Description"] . "</td>";
            echo "<td>" . $row["Production_Rate"] . "</td>";
            echo "<td>" . $row["Rate_Hours"] . "</td>";
            echo "<td>" . $row["Quantity_Ordered"] . "</td>";
            echo "<td>" . $row["Quantity_Completed"] . "</td>";
            echo "<td>" . $row["Qty_Open"] . "</td>";
            echo "<td>" . $row["Order_Date"] . "</td>";
            echo "<td>" . $row["Release_Date"] . "</td>";
            echo "<td>" . $row["Due_Date"] . "</td>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["WO_Stat"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "Error in the query: " . mysqli_error($conn);
    }
} else {
    $sql = "SELECT * FROM production";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["Production_Line"] . "</td>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["Item_Number"] . "</td>";
            echo "<td>" . $row["Description"] . "</td>";
            echo "<td>" . $row["Production_Rate"] . "</td>";
            echo "<td>" . $row["Rate_Hours"] . "</td>";
            echo "<td>" . $row["Quantity_Ordered"] . "</td>";
            echo "<td>" . $row["Quantity_Completed"] . "</td>";
            echo "<td>" . $row["Qty_Open"] . "</td>";
            echo "<td>" . $row["Order_Date"] . "</td>";
            echo "<td>" . $row["Release_Date"] . "</td>";
            echo "<td>" . $row["Due_Date"] . "</td>";
            echo "<td>" . $row["ID"] . "</td>";
            echo "<td>" . $row["WO_Stat"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "Error in the query: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
