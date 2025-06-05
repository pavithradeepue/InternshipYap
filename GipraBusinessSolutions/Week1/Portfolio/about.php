<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About | Pavithra</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #e0e6ff;
      color: #333;
      text-align: center;
      padding: 20px;
    }
    nav a 
    {
      margin: 10px;
      text-decoration: none;
      color: #3366cc;
      font-weight: bold;
    }
    nav {
      margin-bottom: 30px;
    }
    h1 {
      color: #3366cc;
    }
  </style>
</head>
<body>

  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
  </nav>

  <h1>💻 About Me</h1>
  <p> Hi!! I'm Pavithra, an AI enthusiast and web developer in the making ✨ </p>

  <?php
    echo "<p>This page was last loaded at " . date("H:i:s") . ".</p>";
  ?>

</body>
</html>
