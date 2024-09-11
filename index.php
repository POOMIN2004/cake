<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page with Video Background</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            overflow: hidden; /* Prevent scrolling */
        }
        /* Background video styling */
        #background-video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1; /* Keep video behind everything */
        }
        .content {
            position: relative;
            z-index: 1; /* Ensure content is above the video */
            padding: 20px;
            border-radius: 10px;
            color: white;
            text-align: center;
            background-color: transparent;
        }
        .content h1 {
            margin: 0;
            font-size: 36px;
        }
        .nav-links {
            margin-top: 20px;
        }
        .nav-links a {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px 60px; /* Increase margin for more spacing */
            font-size: 18px;
            color: white;
            background-color: #28a745;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .nav-links a:hover {
            background-color: #218838;
        }
        footer {
            color: white;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
            z-index: 1;
            background-color: transparent;
        }
    </style>
</head>
<body>

    <!-- Background video -->
    <video autoplay muted loop id="background-video">
        <source src="https://motionbgs.com/media/5003/luffy-blue-horizon.960x540.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="content">
        <header>
            <h1>Welcome to the School Management System</h1>
        </header>

        <div class="nav-links">
            <a href="student_list.php">Student List</a>
            <a href="course_list.php">Course List</a>
            <a href="exam_result.php">Exam Results</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 School Management System</p>
    </footer>

</body>
</html>
