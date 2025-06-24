<?php include 'db.php'; ?>
<h1> My Blog </h1>
<a href="add.php">Add New Post</a>

<?php 
$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
while($row = $RESult->fetch_assoc()):
?>
    <h2>
        <?= $row['title']; ?>
    </h2>
    <p><?= $row['content']; ?></p>
    <a href="edit.php?id=<? $row['id']; ?>"> Edit</a> |
    <a href="delete.php?id=<? $row['id']; ?>"> Delete</a>
<?php endwhile; ?>
    