# 🐘 PHP Programming Language Complete Guide

![PHP Logo](https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg)

---

## 📌 What is PHP?

PHP (Hypertext Preprocessor) is a **server-side scripting language** designed for web development.

Created by **Rasmus Lerdorf (1994)**.

It powers:

- Dynamic websites
- Backend APIs
- CMS platforms
- E-commerce systems

> 🌐 PHP powers a large portion of the web.

---

## 🏗 PHP Architecture

![PHP Architecture](https://www.javatpoint.com/php/images/php-architecture.png)

```
Browser
   ↓
Web Server (Apache / Nginx)
   ↓
PHP Engine (Zend Engine)
   ↓
Database (MySQL / PostgreSQL)
   ↓
Response to Browser
```

---

## ⚙ Why PHP is Popular

- Easy to learn
- Embedded in HTML
- Large ecosystem
- Strong CMS support
- Wide hosting availability

---

## 📂 Basic PHP Program

```php
<?php
echo "Hello, PHP!";
?>
```

Run with local server:

```bash
php -S localhost:8000
```

---

## 🧠 How PHP Works

1. Client sends HTTP request
2. Web server passes request to PHP engine
3. PHP executes script
4. PHP interacts with database
5. Server sends HTML response

---

## 🔑 Variables & Data Types

```php
$name = "Bhanu";
$age = 20;
$price = 99.99;
$isActive = true;
```

---

## 🔄 Control Statements

```php
if ($age > 18) {
    echo "Adult";
}
```

---

## 🔁 Loops

```php
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
```

---

## 🧩 Functions

```php
function add($a, $b) {
    return $a + $b;
}
```

---

## 🧱 Object-Oriented PHP

```php
class Person {
    public $name;
    public $age;

    function display() {
        echo $this->name . " " . $this->age;
    }
}
```

---

## 📦 Arrays

```php
$numbers = array(1, 2, 3);
$user = ["name" => "Bhanu", "age" => 20];
```

---

## 🗃 Working with Forms

```php
<?php
$name = $_POST['name'];
echo "Hello " . $name;
?>
```

---

## 🛢 Database Connection (MySQL)

```php
$conn = new mysqli("localhost", "root", "", "test");

if ($conn->connect_error) {
    die("Connection failed");
}
```

---

## 🔐 PHP Security Practices

- Use prepared statements
- Validate input
- Escape output
- Use HTTPS
- Prevent SQL Injection
- Prevent XSS

Example Prepared Statement:

```php
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
```

---

## 🌐 Popular PHP Frameworks

| Framework | Use |
|------------|-----|
| Laravel | Modern Web Apps |
| Symfony | Enterprise Systems |
| CodeIgniter | Lightweight Apps |
| CakePHP | Rapid Development |

---

## 📊 PHP Execution Engine

![Zend Engine](https://www.phpinternalsbook.com/images/zend-engine-overview.png)

PHP uses **Zend Engine**:

- Compiles PHP to opcode
- Executes via interpreter
- Handles memory management

---

## 🚀 Advanced PHP Topics

- MVC Architecture
- REST APIs
- JWT Authentication
- Dependency Injection
- Composer Package Manager
- Caching (Redis, Memcached)
- Session Handling
- WebSockets
- Microservices

---

## 🖥 PHP vs Other Backend Languages

| Feature | PHP | Node.js | Python |
|----------|-----|---------|--------|
| Web-Focused | ✅ | ✅ | ✅ |
| Easy Hosting | ✅ | Medium | Medium |
| Large CMS Ecosystem | ✅ | ❌ | ❌ |
| Performance | Good | High | Medium |

---

## 🛠 Development Tools

- XAMPP
- WAMP
- LAMP
- Composer
- VS Code
- PhpStorm
- Docker

---

## 📦 Project Structure Example

```
project/
 ├── index.php
 ├── config/
 ├── controllers/
 ├── models/
 ├── views/
 ├── vendor/
 └── README.md
```

---

## 🎯 Learning Roadmap

1. Basics
2. Forms & Sessions
3. Database Integration
4. OOP in PHP
5. MVC Pattern
6. Laravel Framework
7. REST API Development
8. Security Best Practices
9. Deployment

---

## 🌍 Where PHP is Used

- WordPress
- E-commerce platforms
- CMS systems
- Backend APIs
- SaaS applications

---

## 👨‍💻 Creator

Created by **Rasmus Lerdorf (1994)**

---

# 🐘 PHP — The Backbone of the Web

![Web Development](https://wallpapercave.com/wp/wp2465928.jpg)

---
