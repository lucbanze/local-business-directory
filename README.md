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

# Local Business Discovery

A platform where local businesses can create profiles, list their services, and interact with users. Customers will be able to discover, review, and rate these businesses based on geolocation, categories, and other filters.

## Core Features

1. Business Profiles: Registration, service listings, images, contact info.
2. User Accounts: Sign up/login, profile, review history, favorite businesses.
3. Discovery Engine: Search by location, category, rating, and keywords.
4. Reviews & Ratings: Users leave feedback, star ratings, and photos.
5. Admin Dashboard: Manage listings, reviews, user reports, categories.
6. Notification System: Email and/or in-app updates for reviews, messages, etc.
7. Mobile Responsiveness: Fully responsive UI (React/Tailwind or similar).
8. Scalable API-first Backend: Modular architecture built with Laravel 11 (PHP).

## Installation

## Installation

1. Clone the repo into your XAMPP `htdocs/` directory  
2. Run `composer install`  
3. Copy `.env.example` to `.env` and update your DB config:  
   - `DB_DATABASE=lbd`  
   - `DB_USERNAME=root`  
   - `DB_PASSWORD=`  
4. Run the following commands:  
   - `php artisan key:generate`  
   - `php artisan config:cache`  
   - `php artisan migrate`  
5. Serve the project:  
   - Option 1: `php artisan serve` → http://localhost:8000  
   - Option 2: Access via XAMPP → http://localhost/local-business-discovery/public

## Git Branch Strategy

We follow a structured Git workflow to ensure clean and maintainable development.

### Main Branches
- `main`: Stable production-ready code.
- `develop`: Integration branch for features and fixes before merging into `main`.

### Supporting Branches
- `feature/<name>`: New feature development.
  - Example: `feature/business-listing-ui`
- `bugfix/<name>`: Fixes for non-critical bugs.
  - Example: `bugfix/image-upload-error`
- `hotfix/<name>`: Urgent fixes deployed immediately to `main`.
  - Example: `hotfix/broken-login`
- `docs/<name>`: Documentation updates.
  - Example: `docs/api-endpoints`
- `setup/<name>`: Initial setup or configuration tasks.
  - Example: `setup/deployment-pipeline`
- `test/<name>`: Testing, mocks, or testing-related scripts.
  - Example: `test/unit-review-model`


## Requirements

- PHP 8.1+
- Composer
- MySQL
- XAMPP
