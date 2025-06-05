## Week_1: June 3 - June 6

### 🚀 Tools I Set Up
- Installed **XAMPP** on my system to create a local PHP development environment.
- Started the **Apache server** using the XAMPP Control Panel.
- Accessed `localhost` via browser and successfully ran my first PHP file (`hello.php`) inside the `htdocs` directory. (http://localhost/my_php/myfirstwp.php)

### 📚 What I Learned

#### 🔹 My First Impression
PHP felt like a blend of Java (because of its object-oriented features) and Shell scripting (due to its scripting style and syntax).

#### 🔹 Basics of PHP
- PHP is a powerful tool for building dynamic web pages.
- It uses similar tags as an HTML document like `<html>`, `<body>`, `<h1>`, etc.
- The PHP code is written inside special `<?php ... ?>` tags.
- For returning datatype we use `var_dump()`.
- Variables are **case sensitive**.
- String to upper and lower case: `strtoupper()` & `strtolower()`.
- Conditional statements: `if`, `else`, `elseif`, `switch`.
- Loops include `foreach ($colors as $x)`, `for`, `while`, `do-while`.
- Functions: Built-in and user-defined.
- Search text: `strpos()`.
- Trim white space: `trim()`.
- Slicing: `substr()`.
- `NaN` stands for **Not a Number**.
- Type casting to object: `object()`.

#### 🔹 Magic Constants
- 9 Magic constants, written with underscores (e.g., `__CLASS__`).

#### 🔹 Arrays and Sorting
- `sort()` - ascending order
- `rsort()` - descending order
- `ksort()` - associative array by key
- `asort()` - associative array by value (ascending)

#### 🔹 Superglobal Variables
- `$GLOBALS` – contains all global variables
- `$_SERVER` – info about headers, paths, and script location
- `$_REQUEST`, `$_POST`, `$_GET`

#### 🔹 RegEx
- `preg_match()` – returns 1 if found, 0 if not
- `preg_match_all()` – returns number of matches
- `preg_replace()` – replaces matched string

#### 🔹 PHP Forms
- Takes input and sends data to the same page using `POST` method.
- `$_GET` – array of variables passed via URL parameters
- `$_POST` – array of variables passed via HTTP POST method
