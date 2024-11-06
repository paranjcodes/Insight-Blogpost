<?php
include 'db_connect.php';

$sql = "SELECT id, title, content, created_at FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);

if (!$result) {
    die("Error in query: " . $conn->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='post-card'>";
        echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
        echo "<p>" . htmlspecialchars($row['content']) . "</p>";
        echo "<small>Posted on " . $row['created_at'] . "</small>";
        echo "</div>";
    }
} else {
    echo "No posts available.";
}

$conn->close();
?>
