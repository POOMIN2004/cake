<?php
require("connect_db.php");

echo "<center>";
echo "<h2 style='font-family: Arial, sans-serif; color: #333;'>Add New Course</h2>";
echo "<form action='save_add_course.php' method='post'>";
echo "<table border='1' width='40%' cellpadding='10' cellspacing='0' style='border-collapse: collapse; font-family: Arial, sans-serif;'>";
echo "<tr><td>Course Code:</td><td><input type='text' name='course_code' /></td></tr>";
echo "<tr><td>Course Name:</td><td><input type='text' name='course_name' /></td></tr>";
echo "<tr><td>Credit:</td><td><input type='text' name='credit' /></td></tr>";
echo "<tr><td colspan='2'><center><input type='submit' value='Submit' style='padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; font-family: Arial, sans-serif;' /></center></td></tr>";
echo "</table>";
echo "</form>";

// ปุ่มกลับไปหน้าโฮม
echo "<br/>";
echo "<a href='index.php' style='text-decoration: none; color: white; background-color: #007bff; padding: 10px 20px; border-radius: 5px; margin-top: 20px; display: inline-block; font-family: Arial, sans-serif;'>Back to Home</a>";
echo "</center>";
?>
