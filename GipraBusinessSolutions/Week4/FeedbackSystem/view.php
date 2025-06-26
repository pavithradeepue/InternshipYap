<?php
include 'db.php';

$result = $conn->query("SELECT * FROM feedback ORDER BY submitted_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Feedback</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>All Feedback</h2>
    <a href="index.php">← Back to Form</a><br><br>

    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="feedback">
            <strong><?= htmlspecialchars($row['name']) ?> (<?= $row['email'] ?>)</strong><br>
            <p><?= nl2br(htmlspecialchars($row['message'])) ?></p>
            <small>Submitted: <?= $row['submitted_at'] ?></small><br>
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this feedback?')">Delete</a>
            <hr>
        </div>
    <?php endwhile; ?>
</body>
</html>
