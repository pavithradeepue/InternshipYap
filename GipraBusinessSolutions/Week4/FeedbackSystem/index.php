<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $stmt = $conn->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();

    echo "<p>Feedback submitted!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Collector</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Submit Your Feedback</h2>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Your Name" required><br>
        <input type="email" name="email" placeholder="Your Email" required><br>
        <textarea name="message" placeholder="Your Feedback" rows="4" required></textarea><br>
        <button type="submit">Submit</button>
    </form>

    <a href="view.php">View Feedback</a>
</body>
</html>
