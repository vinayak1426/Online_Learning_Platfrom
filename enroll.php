<?php
if (!isset($_GET['id'])) {
    die("Invalid Course!");
}

$courseId = $_GET['id'];

// Define updated video paths (Removed Web Dev & Data Science)
$videos = [
    "c-programming" => "uploads/c-programming.mp4",
    "python" => "uploads/python.mp4",
    "Java-Programming" => "uploads/java-programming.mp4",
    "Basic of HTML" => "uploads/Basic of HTML.mp4"
];

// Check if course exists
if (!array_key_exists($courseId, $videos)) {
    die("Course Not Found!");
}

// Get the correct video path
$videoPath = $videos[$courseId];

// Full URL to the video
$videoURL = "http://localhost/online_learning_platform/" . $videoPath;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Lecture</title>
    <style>
        body {
            margin: 0;
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        video {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <video controls autoplay>
        <source src="<?php echo $videoURL; ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>

</body>
</html>
