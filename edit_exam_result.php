<?php
require("connect_db.php");
$id = $_GET["id"];
$sql = "SELECT * FROM exam_result WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$exam_result = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Exam Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 40%;
            margin: 0 auto;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f4f4f4;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .home-button {
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            margin-bottom: 20px;
        }
        .home-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="index.php" class="home-button">Home</a>
    <h1>Edit Exam Result</h1>
    <form action="save_exam_result.php" method="post">
        <table>
            <input type="hidden" name="id_edit" value="<?php echo htmlspecialchars($id); ?>" />
            <tr>
                <td>Course Code:</td>
                <td><?php echo htmlspecialchars($exam_result["course_code"]); ?></td>
            </tr>
            <tr>
                <td>Student Code:</td>
                <td><?php echo htmlspecialchars($exam_result["student_code"]); ?></td>
            </tr>
            <tr>
                <td>Point:</td>
                <td><input type="text" name="point" value="<?php echo htmlspecialchars($exam_result["point"]); ?>" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
