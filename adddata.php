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
<h2>Add Data</h2>
    <form action="process.php" method="post">

        <label for="productionLine">Production Line:</label>
        <input type="text" name="productionLine" required><br>

        <label for="id">ID:</label>
        <input type="text" name="id" required><br>

        <!-- Add more fields as needed -->

        <input type="submit" value="Add Data">
    </form>
</body>
</html>