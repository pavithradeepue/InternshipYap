<link rel="stylesheet" href="style.css">
<?php include 'db.php'; 
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM posts WHERE id = $id");
$row = $result->fetch_assoc();
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?  $row['id']; ?>">
    <input type="text" name="title" value="<?  $row['title']; ?>" placeholder="Title"><br>
    <textarea name="content" placeholder="Content"><?  $row['content']; ?></textarea><br>
    <button type="submit">Update</button>
</form>"