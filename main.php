<?php
include 'head.php';
include 'check.php';
// connect database
$servername = "localhost";
$username = "root";
$password = "asdf1234**";
$database = "majoret";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "SELECT * FROM production";
$result = mysqli_query($conn, $sql);

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
    <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- 
<h1>Data</h1> -->

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
        echo "<td><a style='display:block' href='update.php?id=" . $row["ID"] . "&salesJob=" . $row["Sales_Job"] . "'>" . $row["Sales_Job"] . "</a></td>";
        echo "<td class='delete-row' data-id='" . $row["ID"] . "'>" . $row["WO_Stat"] . "</td>";
        echo "</tr>";
    }
    mysqli_close($conn);
    ?>
</table>
<script>
    document.querySelectorAll('.delete-row').forEach(function (element) {
        element.addEventListener('click', function () {
            var idToDelete = this.getAttribute('data-id');
            
            var userResponse = confirm("Do you want to make this list?");
            
            if (userResponse) {
                // ส่งคำขอลบไปที่ delete.php ประมวลผลลบ
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'delete.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        alert(xhr.responseText);
                        // โหลดข้อมูลใหม่หลังจากลบแถว
                        location.reload();
                    } else {
                        console.error('Error:', xhr.statusText);
                    }
                };
                
                xhr.onerror = function() {
                    console.error('Request failed');
                };
                
                xhr.send('id=' + idToDelete);
            } else {
                alert("Undelete");
            }
        });
    });
</script>
</body>
</html>
