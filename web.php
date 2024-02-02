<?php
include 'index.php';

$servername = "localhost";
$username = "root";
$password = "asdf1234**";
$database = "majoret";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM production";
$result = mysqli_query($conn, $sql);

// Check query
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>webphp</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>


<div class="table">
<?php
echo "<table>";
echo "<tr>
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
      </tr>";

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
  echo "<td>" . $row["Sales_Job"] . "</td>";
  echo "<td>" . $row["WO_Stat"] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</div>


</body>
</html>