<?php
$servername = "localhost";
$username = "root";  // Thay bằng tên người dùng MySQL của bạn
$password = "";  // Thay bằng mật khẩu MySQL của bạn
$dbname = "diemthi_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sbd = $_POST['sbd'];

    // Tra cứu điểm sinh viên
    $sql = "SELECT * FROM thanhhoa_2023_1 WHERE SBD='$sbd'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>SBD</th><th>Toán</th><th>Văn</th><th>Ngoại ngữ</th><th>Sinh</th><th>Sử</th><th>Địa</th><th>GDCD</th><th>Hóa</th><th>Lí</th><th>sumD</th><th>sumC</th><th>sumB</th><th>sumA</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["SBD"] . "</td>";
            echo "<td>" . $row["Toán"] . "</td>";
            echo "<td>" . $row["Văn"] . "</td>";
            echo "<td>" . $row["Ngoại_ngữ"] . "</td>";
            echo "<td>" . $row["Sinh"] . "</td>";
            echo "<td>" . $row["Sử"] . "</td>";
            echo "<td>" . $row["Địa"] . "</td>";
            echo "<td>" . $row["GDCD"] . "</td>";
            echo "<td>" . $row["Hóa"] . "</td>";
            echo "<td>" . $row["Lí"] . "</td>";
            echo "<td>" . $row["sumD"] . "</td>";
            echo "<td>" . $row["sumC"] . "</td>";
            echo "<td>" . $row["sumB"] . "</td>";
            echo "<td>" . $row["sumA"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Không tìm thấy kết quả";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tra cứu điểm</title>
</head>
<body>
    <h2>Tra cứu điểm sinh viên</h2>
    <form method="post" action="">
        Số báo danh: <input type="text" name="sbd" required>
        <input type="submit" value="Tra cứu">
    </form>
</body>
</html>
