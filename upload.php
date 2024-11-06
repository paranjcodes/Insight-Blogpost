<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Check if the title and content are not empty
    if (empty($title) || empty($content)) {
        die("Title and content are required fields.");
    }

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    $stmt->bind_param("ss", $title, $content);

    if (!$stmt->execute()) {
        die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    } else {
        // Redirect to posts page after successful upload
        header("Location: posts.php");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
