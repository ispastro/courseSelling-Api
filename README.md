
CourseSelling API



Overview
CourseSelling API is a robust, scalable, and secure backend API built with Laravel that powers a comprehensive online course marketplace. It enables instructors to create, manage, and sell courses while allowing students to browse, enroll, and access educational content seamlessly.

This API serves as the backbone for a modern e-learning platform, supporting features like user authentication, role-based access control, course management with media uploads, and student enrollment management — all delivered through clean, RESTful JSON endpoints.

Features
User Authentication & Authorization

Secure registration & login with Laravel Sanctum API tokens

Role-based users: Instructor and Student

Token-based logout and session management

Course Management

Instructors can create, update, and delete their own courses

Courses include title, description, price, and optional thumbnail uploads

Public course listing with instructor details

Search courses with relevance ranking

Enrollment System

Students can enroll in multiple courses

Prevents duplicate enrollments

View all enrolled courses with instructor info

Data Validation & Security

Robust request validation for all endpoints

Passwords hashed using Laravel’s built-in Hash facade

Secure file storage for course thumbnails using Laravel's filesystem

Clean JSON API Responses

Consistent success and error response formats

HTTP status codes properly used for errors and success

Technology Stack
Technology	Version
PHP	8.x
Laravel Framework	8.x
Database	MySQL/PostgreSQL (configurable)
Authentication	Laravel Sanctum
Storage	Laravel Filesystem (Local & Public)
Testing	PHPUnit

Installation
Prerequisites
PHP 8.x

Composer

MySQL or PostgreSQL database

Laravel CLI (optional but recommended)

Git

Setup Steps
bash
Copy
Edit
# Clone the repository
git clone https://github.com/yourusername/courseselling-api.git
cd courseselling-api

# Install dependencies
composer install

# Copy environment file and configure
cp .env.example .env
# Set database credentials and other config in .env

# Generate app key
php artisan key:generate

# Run migrations to create database tables
php artisan migrate

# (Optional) Seed the database
php artisan db:seed

# Serve the application locally
php artisan serve
API Endpoints
Authentication
Method	Endpoint	Description
POST	/api/register	Register a new user
POST	/api/login	Authenticate user & get token
POST	/api/logout	Logout user & revoke token
GET	/api/user	Get authenticated user info

Courses
Method	Endpoint	Description
GET	/api/courses	List all courses
GET	/api/courses/{id}	Get course details by ID
POST	/api/courses	Create a new course (instructor)
PUT	/api/courses/{id}	Update owned course
DELETE	/api/courses/{id}	Delete owned course
GET	/api/my-courses	List authenticated instructor's courses
GET	/api/search-courses?query=...	Search courses by title

Enrollment
Method	Endpoint	Description
POST	/api/enroll/{course_id}	Enroll authenticated student in a course
GET	/api/enrolled-courses	List authenticated student's enrolled courses

Folder Structure
pgsql
Copy
Edit
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
Contribution
Contributions, issues, and feature requests are welcome! Feel free to check issues page if you want to contribute.

License
This project is licensed under the MIT License - see the LICENSE file for details.

Contact
Made with ❤️ by Haile Asaye
GitHub |linkedin/in/haile-asaye21/  | haileasaye51@gmail.com




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
