# CodeIgniter Blog Application (MOHIT-IITP)

A full-stack blog application with an admin panel, built using PHP CodeIgniter, MySQL, and Bootstrap.  
**Demo:**  https://drive.google.com/file/d/1BIZMsKCK3JMN0fBqhOmg65es9BjtBBay/view?usp=sharing

---

## 📝 Project Overview

### Features
1. **Homepage**  
   - Lists all blog posts with title, excerpt (first 100 characters), author name, publication date, and a "Read More" link.
   - Responsive design using Bootstrap.

2. **Blog Detail Page**  
   - Displays full blog content.
   - Comment section: Users can submit comments with name, email, and comment text.
   - Shows existing comments chronologically.

3. **Admin Panel**  
   - **Add/Edit/Delete Blog Posts**: Admin can manage blog content (title, content, author).

### Technologies
- **Backend**: PHP CodeIgniter 4 (MVC architecture)
- **Frontend**: HTML, CSS, JavaScript, Bootstrap 5
- **Database**: MySQL
- **Version Control**: Git

---

## 🎥 Video Demo

Watch the application demo to see it in action:
[![Blog Application Demo](https://img.shields.io/badge/Watch-Demo-red)](https://drive.google.com/file/d/1BIZMsKCK3JMN0fBqhOmg65es9BjtBBay/view?usp=sharing)

---

## 🛠️ Setup Instructions

### Prerequisites
- PHP 7.4+ (with `mbstring` and `pdo_mysql` extensions enabled)
- MySQL 5.6+
- Apache/Nginx or PHP built-in server
- Composer 

### Steps
1. **Clone the Repository**  
git clone https://github.com/MOHIT-IITP/php-codeigniter-blog-assessment.git
cd blogapp 

text

2. **Database Setup**  
- Create a MySQL database (e.g., `blogapp`).
- Make the SQL schema :
  ```
  php spark migrate 
  ```

3. **Configure the Database**  
Update `blogapp/app/config/database.php` with your credentials:
$db['default'] = [
'dsn' => '',
'hostname' => 'localhost',
'username' => 'your_db_username',
'password' => 'your_db_password',
'database' => 'blogapp',
// ... rest of the config
];

text

4. **Configure Base URL**  
Update `blogapp/app/config/config.php`:
$config['base_url'] = 'http://localhost:8080/'; // Adjust port/path as needed

text

---

## 🚀 Run the Project

### Using PHP Built-in Server
php spark serve

text
Visit `http://localhost:8080` in your browser.

### Using Apache/Nginx
- Place the project in your web server's root directory (e.g., `htdocs` or `/var/www/html`).
- Ensure `mod_rewrite` is enabled for clean URLs.

---

## 📂 Directory Structure (Key Files) (Blog App)
app/
├── controllers/
│ ├── HomeController.php # Handles homepage/blog details
│ └── Admin/BlogPostController.php # Admin CRUD operations
├── models/
│ ├── BlogPostModel.php # Blog database operations
│ └── CommentModel.php # Comment database operations
├── views/
  ├── /home/index.php/ # Homepage and detail page templates
  └── admin/create.php , etc/ # Admin panel templates

text

---
