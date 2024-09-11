<?php
require("connect_db.php");
$id_edit = $_POST["id_edit"];
$point = $_POST["point"];
$sql ="UPDATE exam_result SET point='$point' WHERE id='$id_edit'";
mysqli_query($conn, $sql);
// print($sql);
header("location: exam_result.php");
exit(0);
?>