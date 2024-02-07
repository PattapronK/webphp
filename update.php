<?php
include 'head.php';
include 'check.php';
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
                echo 'window.location.href = "main.php";';
            } else {
                echo "Error updating data: " . mysqli_stmt_error($stmt);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }
    } else {
        // แสดงฟอร์มและเพิ่ม JavaScript สำหรับการส่ง Ajax request
?>
    <form id="updateForm" action="update.php?id=<?php echo $id; ?>&salesJob=<?php echo $salesJob; ?>" method="post">
        <label for="new_Sales_Job">New Sales Job:</label>
        <input type="text" name="new_Sales_Job" required><br>
        
        <input type="submit" value="Update Data">
    </form>

    <script>
        document.getElementById('updateForm').addEventListener('submit', function (event) {
            event.preventDefault();

            var formData = new FormData(this);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', this.action, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                    window.location.href = "main.php";
                } else {
                    console.error('Error:', xhr.statusText);
                }
            };
            xhr.send(formData);
        });
    </script>
<?php
    }
} else {
    echo "Invalid parameters";
}

mysqli_close($conn);
?>