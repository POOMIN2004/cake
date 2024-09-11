<?php
require("connect_db.php");

$course_code = $_GET["course_code"];
// Query to get student codes
$result = mysqli_query($conn, "SELECT student_code FROM student");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Exam Result</title>
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
        select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
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
    <h1>Add Exam Result</h1>
    <form action="saveadd_exam_result.php" method="post">
        <table>
            <input type="hidden" name="course_code" value="<?php echo htmlspecialchars($course_code); ?>" />
            <tr>
                <td>Course Code:</td>
                <td><?php echo htmlspecialchars($course_code); ?></td>
            </tr>
            <tr>
                <td>Student Code:</td>
                <td>
                    <select name="student_code">
                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo htmlspecialchars($row["student_code"]); ?>">
                                <?php echo htmlspecialchars($row["student_code"]); ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Point:</td>
                <td><input type="text" name="point" /></td>
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
