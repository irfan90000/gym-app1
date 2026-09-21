# Gym App

A gym management and fitness e-commerce application built with **Laravel 10**, **PHP 8.1+**, and **Vue 3**. The application provides a public fitness storefront alongside authenticated administration features for managing users, trainers, products, categories, settings, and orders.

## Features

- User registration, login, OTP, and password reset flows
- API authentication with Laravel Passport/Sanctum configuration
- Role-based access and user management
- Trainer listing and management
- Product and category CRUD operations
- Fitness programs, subscriptions, and personal programs
- Order viewing and management
- Stripe payment integration
- Health-related data submission
- File upload, download, and product media support
- Vue dashboard and responsive gym-themed frontend

## Technology Stack

### Backend

- PHP 8.1+
- Laravel 10
- Laravel Eloquent ORM
- Laravel Passport and Sanctum
- Stripe PHP SDK
- PHPUnit

### Frontend

- Vue 3
- Vue Router 4
- Vuex 4 with persisted state
- Axios
- Bootstrap 5
- Sass
- Font Awesome
- Laravel Mix/Vite tooling

## Project Structure

```text
app/
├── Http/Controllers/     API and web request handlers
├── Models/               Eloquent models
├── Mail/                 OTP and coupon email classes
└── Providers/            Laravel service providers

database/
├── migrations/           Database schema changes
├── seeders/              Initial roles, users, products, and categories
└── factories/            Test data factories

resources/js/
├── component/            Vue feature components
├── pages/                Login, signup, reset, subscription, and program pages
├── Vuex/                 Centralized frontend state management
├── router.js             Vue route definitions
└── App.vue               Vue application entry point

resources/views/          Blade application shell and email templates
routes/
├── api.php               Authentication and application API endpoints
└── web.php               SPA fallback and payment callback routes
public/                   Public assets, uploaded files, compiled JavaScript, and styles
```

## Main API Areas

Most protected management endpoints are grouped behind the `auth:api` middleware. The API includes routes for:

- Authentication and password recovery
- Users and trainers
- Categories
- Products and product files
- Settings
- Orders
- Health records
- Stripe payment initiation, completion, and failure callbacks

The API is defined in [`routes/api.php`](routes/api.php), while SPA fallback and payment callback routes are defined in [`routes/web.php`](routes/web.php).

## Requirements

Before installing the project, make sure the following are available:

- PHP 8.1 or newer
- Composer
- Node.js and npm
- A supported database configured for Laravel
- Stripe test or live credentials, if payment features are enabled

## Installation

1. Clone the repository and enter the project directory:

   ```bash
   git clone https://github.com/irfan90000/gym-app1.git
   cd gym-app1
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Create the environment file:

   ```bash
   cp .env.example .env
   ```

   On Windows, create a copy of `.env.example` named `.env` instead.

4. Generate the application key:

   ```bash
   php artisan key:generate
   ```

5. Configure the database, mail service, authentication settings, and Stripe keys in `.env`.

6. Run migrations and seed the database when appropriate:

   ```bash
   php artisan migrate --seed
   ```

7. Install and build frontend dependencies:

   ```bash
   npm install
   npm run dev
   ```

8. Start the Laravel development server in a separate terminal:

   ```bash
   php artisan serve
   ```

   The application is normally available at `http://127.0.0.1:8000`.

## Useful Commands

```bash
# Start the Laravel server
php artisan serve

# Run database migrations
php artisan migrate

# Seed development data
php artisan db:seed

# Run frontend development build
npm run dev

# Build frontend assets for production
npm run production

# Run automated tests
php artisan test
```

## Configuration Notes

Do not commit `.env` or real credentials to the repository. Configure sensitive values locally, including:

- Database connection values
- Application URL and encryption key
- Mail credentials for OTP and coupon emails
- Passport/API authentication settings
- Stripe secret and publishable keys

For production, use Stripe webhooks and production credentials only after validating the complete payment flow in test mode.

## Testing

The project includes Laravel feature and unit test directories under `tests/`. Run the test suite with:

```bash
php artisan test
```

## License

This project is based on the Laravel framework and is provided under the MIT license unless a separate project license is added.
