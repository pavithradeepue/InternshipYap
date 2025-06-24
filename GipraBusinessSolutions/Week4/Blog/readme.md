# Internship Daily Log — 24th June 2025

## 📌 Activities Completed

### 🔧 Git & GitHub
- Initialized Git in the local project directory using VS Code terminal.
- Configured Git remote correctly to push into an existing repository.
- Learned the correct way to push to a **subfolder inside a GitHub repo**.
- Resolved the `error: src refspec main does not match any` issue.
- Used `git add`, `commit`, and `push` commands selectively for specific files.

### 💻 PHP + XAMPP Development
- Worked on a mini **Blog project** using PHP and MySQL with XAMPP.
- Created a new table `posts` inside the `blog_db` database with the following fields:
  - `id`, `title`, `content`, `created_at`
- Developed a functional `index.php` page:
  - Connected to MySQL using `mysqli`.
  - Queried the `posts` table.
  - Displayed blog posts dynamically using a while loop.
  - Handled database errors and null results.
- Linked `style.css` to the blog for basic UI design.

### 🛠 File Management
- Moved selected PHP files (`index.php`, `add.php`, `db.php`) into the correct repo folder structure:  
  `GipraBusinessSolutions/Week5/Blog/`
- Pushed only selected files to GitHub using:
  - `git add path/to/file`
  - `git commit`
  - `git push`

### 🎨 Frontend Styling
- Created a `style.css` file with:
  - Basic styling for layout, fonts, and post boxes.
  - Clean, minimal, and readable design.

### 🐞 Debugging
- Enabled full PHP error reporting using:
  ```php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
