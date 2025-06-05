# Week_1: June 3 - June 6

### 📚 What I Learned
#### 🔹 My First Impression
- PHP felt like a blend of **Java** (because of its object-oriented features) and **Shell scripting** (due to its scripting style and syntax).

#### 🔹 Basics of PHP
- PHP is a powerful tool for building dynamic web pages.
- It uses similar tags as an HTML document like `<html>`, `<body>`, `<h1>`, etc.
- The PHP code is written inside special `<?php ... ?>` tags.
- For returning datatype we use `var_dump`.
- Variables are case sensitive.
- String to upper and lower case function `strtoupper()` & `strtolower()`
- The usual if,else,elseif,switch.
- In loops we have foreach with syntax `foreach ($colors as $x)` along with other loops like for,while,do-while.
- Functions has both built-in ones and user defined fuctions.
- To search for text within a string -- `strpos()`
- `trim()` to remove white spaces from end or beginning.
- slicing can be done using `substr()`.
- NaN stands for Not a Number.
- We can caste any datatype to an object using `object()` statement.
- There are 9 Magic_constants -- written with underscore at beggining and end (eg:_CLASS_)
- Arrays and sorting
  - sort() - asc
  - rsort() - desc
  - ksort() - associative arr acc to key
  - asort() - associative arr acc to value in asc
- Superglobal variables
  - `$GLOBALS` - has all Global variables
  - `$_SERVER` - info about headers,paths and script locations.
  - `$_REQUEST, $_POST, %_GET`
- RegEx
  - `preg_match()` 1 if found and 0 if not
  - `preg_match_all()` how many matches found in a string
  - `preg_replace()` replace matches of string with another string

#### 🔹 PHP Forms
- Takes input and sends data to the same page using POST method.
- `$_GET` - array of variables passed to current script via url parameters
- `$_POST` - array of variables passed to current script viva HTTP POST method.
  
  

