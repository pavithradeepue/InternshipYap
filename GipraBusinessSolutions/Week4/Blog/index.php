<?php
// Show errors while debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connect to database
$conn = new mysqli("localhost", "root", "", "blog_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch posts from 'posts' table
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to My Blog</h1>

    <?php if ($result && $result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="post">
                <h2><?= htmlspecialchars($row['title']) ?></h2>
                <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
                <small>Posted on: <?= $row['created_at'] ?></small>
                <hr>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No blog posts found.</p>
    <?php endif; ?>

</body>
</html>
