<link rel="stylesheet" href="style.css">
<?php
include 'db.php';
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$conn->query("UPDATE posts SET title = '$title', content = '$content' WHERE id = $id");
header('Location: index.php');
?>