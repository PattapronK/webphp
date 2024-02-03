<?php
$servername = "localhost";
$username = "root";
$password = "asdf1234**";
$database = "majoret";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// ตรวจสอบว่ามี ID และ Sales_Job ที่ส่งมา
if (isset($_GET['id']) && isset($_GET['salesJob'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $salesJob = mysqli_real_escape_string($conn, $_GET['salesJob']);

    // เพิ่มตัวแปรอื่น ๆ ตามความจำเป็น
    $newSalesJob = '';  // เพิ่มตัวแปรอื่น ๆ ตามความจำเป็น

    // ตรวจสอบว่ามีการส่งข้อมูลผ่าน POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // ดึงค่าจากฟอร์มและให้ค่าใหม่
        $newSalesJob = mysqli_real_escape_string($conn, $_POST['new_Sales_Job']);

        // ทำการอัปเดตข้อมูลในฐานข้อมูล
        $sql = "UPDATE production SET Sales_Job = ? WHERE ID = ? AND Sales_Job = ?";

        // เตรียม statement
        $stmt = mysqli_prepare($conn, $sql);

        // ตรวจสอบว่า statement ถูกเตรียมเรียบร้อยหรือไม่
        if ($stmt) {
            // กำหนดค่าพารามิเตอร์
            mysqli_stmt_bind_param($stmt, "sss", $newSalesJob, $id, $salesJob);

            // ทำการ execute statement
            if (mysqli_stmt_execute($stmt)) {
                // echo "Data updated successfully";
                echo '<script>window.location.href = "home.php";</script>';
            } else {
                echo "Error updating data: " . mysqli_stmt_error($stmt);
            }

            // ปิด statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }
    }
    // ถ้าไม่ได้ส่งข้อมูลผ่าน POST ให้แสดงฟอร์มอัปเดต
    else {
?>
    <!-- แบบฟอร์มที่ให้กรอกข้อมูลที่ต้องการอัปเดต -->
    <form action="update.php?id=<?php echo $id; ?>&salesJob=<?php echo $salesJob; ?>" method="post">
        <label for="new_Sales_Job">New Sales Job:</label>
        <input type="text" name="new_Sales_Job" required><br>
        <!-- เพิ่มฟิลด์อื่น ๆ ตามต้องการ -->
        <input type="submit" value="Update Data">
    </form>
<?php
    }
} else {
    echo "Invalid parameters";
}

mysqli_close($conn);
?>
