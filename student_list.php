<?php
require("connect_db.php");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Student List</title>";
echo "<style>";
echo "body {";
echo "  margin: 0;";
echo "  padding: 0;";
echo "  font-family: Arial, sans-serif;";
echo "  background-color: transparent;";
echo "}";
echo "video {";
echo "  position: fixed;";
echo "  top: 0;";
echo "  left: 0;";
echo "  width: 100%;";
echo "  height: 100%;";
echo "  object-fit: cover;";
echo "  z-index: -1;";
echo "}";
echo ".container {";
echo "  position: relative;";
echo "  z-index: 1;";
echo "  max-width: 900px;";
echo "  margin: 50px auto;";
echo "  padding: 20px;";
echo "  text-align: center;";
echo "  color: white;";
echo "}";
echo "h2 {";
echo "  color: #ffffff;";
echo "}";
echo "table {";
echo "  width: 100%;";
echo "  border-collapse: collapse;";
echo "  margin-top: 20px;";
echo "}";
echo "th, td {";
echo "  padding: 12px;";
echo "  text-align: center;";
echo "  border: 1px solid #ddd;";
echo "}";
echo "th {";
echo "  background-color: #007bff;";
echo "  color: white;";
echo "}";
echo "tr:nth-child(even) {";
echo "  background-color: rgba(255, 255, 255, 0.1);"; // เพิ่มความโปร่งใสให้ตาราง
echo "}";
echo "a {";
echo "  text-decoration: none;";
echo "  color: white;";
echo "  background-color: #007bff;";
echo "  padding: 10px 20px;";
echo "  border-radius: 5px;";
echo "  display: inline-block;";
echo "  margin-top: 20px;";
echo "  transition: all 0.3s ease;"; // เพิ่ม transition เพื่อให้การเปลี่ยนแปลงลื่นไหล
echo "}";
echo "a.green-btn {";
echo "  background-color: #28a745;";
echo "}";
echo "a:hover {";
echo "  background-color: #0056b3;"; // เปลี่ยนสีเมื่อ hover
echo "  transform: scale(1.1);"; // ขยายขนาดเล็กน้อยเมื่อ hover
echo "  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);"; // เพิ่มเงาให้ปุ่มเมื่อ hover
echo "}";
echo "</style>";
echo "</head>";
echo "<body>";

echo "<video autoplay muted loop>";
echo "<source src='https://motionbgs.com/media/1976/luffy-kid-in-gray-terminal.960x540.mp4' type='video/mp4'>";
echo "เบราว์เซอร์ของคุณไม่รองรับแท็กวิดีโอ";
echo "</video>";

echo "<div class='container'>";
echo "<h2>รายการนักเรียน</h2>";
echo "<a href='index.php' style='margin-bottom: 20px;'>หน้าแรก</a>";

echo "<table>";
echo "<tr>";
echo "<th>รหัสนักเรียน</th>";
echo "<th>ชื่อนักเรียน</th>";
echo "<th>เพศ</th>";
echo "<th>การดำเนินการ</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['student_code']."</td>";
    echo "<td>".$row['student_name']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td><a href='edit_student.php?student_code=".$row['student_code']."'>แก้ไข</a></td>";
    echo "</tr>";
}

echo "</table>";

echo "<a href='add_student.php' class='green-btn'>เพิ่มนักเรียน</a><br>";
echo "<a href='index.php'>กลับ</a>";
echo "</div>";

echo "</body>";
echo "</html>";
?>
