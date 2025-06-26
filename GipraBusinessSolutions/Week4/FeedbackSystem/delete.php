<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM feedback WHERE id = $id");
}

header("Location: view.php");
exit;
?>
