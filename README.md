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
