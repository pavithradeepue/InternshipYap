<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>My Projects</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            padding: 40px;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #222;
            margin-bottom: 40px;
        }

        .projects-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: auto;
        }

        .project-card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s, box-shadow 0.3s;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.12);
        }

        .project-title {
            font-size: 1.3em;
            color: #333;
            margin-bottom: 10px;
        }

        .project-desc {
            font-size: 0.95em;
            color: #555;
            margin-bottom: 15px;
        }

        .project-link a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }

        .project-link a:hover {
            text-decoration: underline;
        }

        .back-link {
            text-align: center;
            margin-top: 40px;
        }

        .back-link a {
            color: #444;
            text-decoration: none;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .back-link a:hover {
            background: #eee;
        }
    </style>
</head>
<body>

<h1>✨ My Projects ✨</h1>

<div class="projects-container">
<?php
$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="project-card">';
        echo '<div class="project-title">' . htmlspecialchars($row['title']) . '</div>';
        echo '<div class="project-desc">' . htmlspecialchars($row['description']) . '</div>';
        echo '<div class="project-link"><a href="' . htmlspecialchars($row['link']) . '" target="_blank">View Project</a></div>';
        echo '</div>';
    }
} else {
    echo '<p>No projects found.</p>';
}
$conn->close();
?>
</div>

<div class="back-link">
    <a href="index.php">&larr; Back to Home</a>
</div>

</body>
</html>
