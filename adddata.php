<?php
include 'head.php';
?>
!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <h1>Add Data</h1> -->
<div class="form">
    <form action="process.php" method="post">

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
</div>

   </div>

</body>
</html>