<?php
require("connect_db.php");
$sql = "SELECT * FROM course";
$result = mysqli_query($conn, $sql);

echo "<html>";
echo "<head>";
echo "<style>";
echo "body {";
echo "    background-image: url('https://static.trueplookpanya.com/cmsblog/1361/77361/banner_file.jpg'); /* ใส่ URL ของภาพพื้นหลังที่นี่ */";
echo "    background-size: cover; /* ปรับให้ภาพพื้นหลังเต็มหน้าจอ */";
echo "    background-position: center; /* จัดตำแหน่งภาพให้อยู่กึ่งกลาง */";
echo "    background-repeat: no-repeat; /* ป้องกันการซ้ำของภาพพื้นหลัง */";
echo "    font-family: Arial, sans-serif;";
echo "    margin: 0;";
echo "    padding: 0;";
echo "    text-align: center;";
echo "}";
echo "table {";
echo "    margin-top: 50px;";
echo "}";
echo "</style>";
echo "</head>";
echo "<body>";

echo "<center>";
echo "<h2 style='font-family: Arial, sans-serif; color: #333;'>Course List</h2>";
echo "<a href='index.php' style='text-decoration: none; color: white; background-color: #007bff; padding: 10px 20px; border-radius: 5px; margin-bottom: 20px; display: inline-block; font-family: Arial, sans-serif;'>Home</a><br><br>";

echo "<table border='1' width='60%' cellpadding='10' cellspacing='0' style='border-collapse: collapse; font-family: Arial, sans-serif;'>";
echo "<tr style='background-color: #007bff; color: white;'>";
echo "<th style='padding: 10px;'>Course Code</th>";
echo "<th style='padding: 10px;'>Course Name</th>";
echo "<th style='padding: 10px;'>Credit</th>";
echo "<th style='padding: 10px;'>Operation</th>";
echo "</tr>";

while($row = mysqli_fetch_assoc($result)){
    echo "<tr style='text-align: center;'>";
    echo "<td style='padding: 10px;'>".$row["course_code"]."</td>";
    echo "<td style='padding: 10px;'>".$row["course_name"]."</td>";
    echo "<td style='padding: 10px;'>".$row["credit"]."</td>";
    echo "<td style='padding: 10px;'><a href='edit_course.php?course_code=".$row["course_code"]."' style='color: #007bff; text-decoration: none;'>Edit</a></td>";
    echo "</tr>";
}

echo "</table>";

echo "<br><a href='add_course.php' style='text-decoration: none; color: white; background-color: #28a745; padding: 10px 20px; border-radius: 5px; font-family: Arial, sans-serif;'>Add Course</a>";
echo "</center>";

echo "</body>";
echo "</html>";
?>
