<?php
require("connect_db.php");
$course_code = $_POST["course_code"];
$student_code = $_POST["student_code"];
$point = $_POST["point"];
$sql ="INSERT INTO exam_result(course_code, student_code, point) VALUES('$course_code',
'$student_code', '$point')";
mysqli_query($conn, $sql);
// print($sql);
header("location: exam_result.php");
exit(0);
?>