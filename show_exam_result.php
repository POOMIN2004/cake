<?php
require("connect_db.php");
$course_code = $_GET["course_code"];

// Query to get course information
$sql = "SELECT * FROM course WHERE course_code='$course_code'";
$result = mysqli_query($conn, $sql);
$course = mysqli_fetch_assoc($result);

// Query to get exam results
$sql = "SELECT E.*, S.student_name";
$sql .= " FROM exam_result AS E";
$sql .= " INNER JOIN student AS S ON E.student_code=S.student_code";
$sql .= " WHERE E.course_code='$course_code'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Result</title>
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
            width: 60%;
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
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .home-button, .add-button {
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            margin: 10px;
        }
        .home-button:hover, .add-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="index.php" class="home-button">Home</a>
        <h1>Exam Results for <?php echo htmlspecialchars($course["course_name"]); ?></h1>
        <table>
            <tr>
                <th>Student Code</th>
                <th>Student Name</th>
                <th>Point</th>
                <th>Edit</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row["student_code"]); ?></td>
                    <td><?php echo htmlspecialchars($row["student_name"]); ?></td>
                    <td><?php echo htmlspecialchars($row["point"]); ?></td>
                    <td><a href="edit_exam_result.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <a href="add_exam_result.php?course_code=<?php echo urlencode($course_code); ?>" class="add-button">Add Exam Result</a>
    </div>
</body>
</html>
