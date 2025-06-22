# 🚀 CourseSelling API

![Laravel](https://img.shields.io/badge/Laravel-12.x-red?style=for-the-badge&logo=laravel) ![PHP](https://img.shields.io/badge/PHP-8.x-777bb4?style=for-the-badge&logo=php) [Sanctum](https://img.shields.io/badge/sanctum-777bb4?style=for-the-badge&logo=sanctum) ![License](https://img.shields.io/github/license/ispastro/courseselling-api?style=for-the-badge)

> **A Next-Level Backend for the Ultimate Online Course Marketplace**

---

## ✨ Overview

**CourseSelling API** is an ultra-modern, battle-tested backend built with [Laravel](https://laravel.com/) to power a world-class e-learning experience. It seamlessly bridges instructors and students, enabling effortless course creation, management, and enrollment—all through a blazing-fast, RESTful JSON API.

Built for **scalability**, **security**, and **developer happiness**, this API is the heartbeat of a feature-rich online course platform. Whether you're building a startup or scaling to millions, CourseSelling API is your launchpad.

---

## 🔥 Core Features

- **🔒 Secure Auth & RBAC**
  - Registration & login via Laravel Sanctum API tokens
  - Role-based: _Instructor_ and _Student_
  - Secure token revocation & session management

- **🎓 Course Management**
  - Instructors: create, update, delete courses
  - Course media: title, description, price, thumbnail uploads
  - Public, filterable course listings with instructor profiles
  - Smart course search with relevance ranking

- **👥 Enrollment Engine**
  - Students enroll in any number of courses
  - Built-in duplicate enrollment prevention
  - Enrolled courses list with instructor details

- **🛡️ Bulletproof Validation & Security**
  - Strict validation on every endpoint
  - Passwords hashed with Laravel standards
  - Secure file storage for thumbnails

- **🧑‍💻 Developer-First API**
  - Consistent, clean JSON responses
  - Proper HTTP status codes for all scenarios

---

## 🧰 Tech Stack

| Technology           | Version     |
|----------------------|-------------|
| **PHP**              | 8.x         |
| **Laravel**          | 8.x         |
| **Database**         | MySQL / PostgreSQL (configurable) |
| **Auth**             | Laravel Sanctum |
| **Storage**          | Laravel Filesystem (Local & Public) |
| **Testing**          | PHPUnit     |

---

## ⚡️ Quickstart

### 🛠 Prerequisites

- PHP 8.x
- Composer
- MySQL or PostgreSQL
- Laravel CLI (optional, recommended)
- Git

### 🚀 Setup

```bash
# 1. Clone the repository
git clone https://github.com/ispastro/courseselling-api.git
cd courseselling-api

# 2. Install dependencies
composer install

# 3. Configure environment
cp .env.example .env
# → Edit .env for DB credentials and other config

# 4. Generate app key
php artisan key:generate

# 5. Run migrations
php artisan migrate

# 6. (Optional) Seed sample data
php artisan db:seed

# 7. Serve locally
php artisan serve
```

---

## 📚 API Endpoints

### 🔑 Authentication

| Method | Endpoint             | Description                      |
|--------|----------------------|----------------------------------|
| POST   | `/api/register`      | Register a new user              |
| POST   | `/api/login`         | Authenticate & get token         |
| POST   | `/api/logout`        | Logout & revoke token            |
| GET    | `/api/user`          | Get authenticated user info      |

### 📦 Courses

| Method | Endpoint                          | Description                          |
|--------|-----------------------------------|--------------------------------------|
| GET    | `/api/courses`                    | List all courses                     |
| GET    | `/api/courses/{id}`               | Get course details by ID             |
| POST   | `/api/courses`                    | Create a new course (instructor)     |
| PUT    | `/api/courses/{id}`               | Update owned course                  |
| DELETE | `/api/courses/{id}`               | Delete owned course                  |
| GET    | `/api/my-courses`                 | List instructor's courses            |
| GET    | `/api/search-courses?query=...`   | Search courses by title              |

### 📝 Enrollment

| Method | Endpoint                 | Description                              |
|--------|--------------------------|------------------------------------------|
| POST   | `/api/enroll/{course_id}`| Enroll student in a course               |
| GET    | `/api/enrolled-courses`  | List student's enrolled courses          |

---

## 🗂️ Folder Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── AuthController.php
│   │   ├── CourseController.php
│   │   └── EnrollmentController.php
│   └── Middleware/
├── Models/
│   ├── User.php
│   └── Course.php
routes/
├── api.php
database/
├── migrations/
tests/
```

---

## 🤝 Contributing

All contributions, issues, and feature requests are welcome!  
Check the [issues](https://github.com/ispastro/courseselling-api/issues) page to get started.

---

## 📜 License

This project is licensed under the MIT License.  
See the [LICENSE](LICENSE) file for details.

---

## 📬 Contact

Made with ❤️ by [Haile Asaye](https://github.com/ispastro)  
[GitHub](https://github.com/ispastro) | [LinkedIn](https://linkedin/in/haile-asaye21/) | haileasaye51@gmail.com

---


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
