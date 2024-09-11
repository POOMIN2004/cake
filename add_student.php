<?php
require("connect_db.php");
echo "<center>";
echo "<form action='save_add_student.php' method='post'>";
echo "<table border='1' width='40%' cellpadding='10' cellspacing='0' style='border-collapse: collapse; font-family: Arial, sans-serif;'>";
echo "<tr><td>Student Code:</td><td><input type='text' name='student_code' /></td></tr>";
echo "<tr><td>Student Name:</td><td><input type='text' name='student_name' /></td></tr>";
echo "<tr><td>Gender:</td><td><input type='text' name='gender' /></td></tr>";
echo "<tr><td colspan='2'><center><input type='submit' value='Submit' /></center></td></tr>";
echo "</table>";
echo "</form>";
// ปุ่มกลับไปหน้าโฮม
echo "<br/>";
echo "<a href='index.php' style='text-decoration: none; color: white; background-color: #007bff; padding: 10px 20px; border-radius: 5px; margin-top: 20px; display: inline-block; font-family: Arial, sans-serif;'>Home</a>";
echo "</center>";
// ปุ่มย้อนกลับ
echo "<br><a href='student_list.php' style='text-decoration: none; color: white; background-color: #007bff; padding: 10px 20px; border-radius: 5px; font-family: Arial, sans-serif;'>Back</a>";
echo "</center>";
?>
