<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pavithra | Portfolio</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f0ff;
      color: #333;
      text-align: center;
      padding: 20px;
    }
    nav a {
      margin: 10px;
      text-decoration: none;
      color: #663399;
      font-weight: bold;
    }
    nav {
      margin-bottom: 30px;
    }
    h1 {
      color: #663399;
    }
  </style>
</head>
<body>

  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
  </nav>

  <h1>👋 Hello, I'm Pavithra</h1>
  <p>Welcome to my personal portfolio website built using PHP!</p>

  <?php
    echo "<p>Today is " . date("l, F j, Y") . ".</p>";
  ?>

</body>
</html>
