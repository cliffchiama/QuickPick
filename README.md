# Quickpick - Cafeteria Queue Management System

A Laravel-based system to reduce long queues at the cafeteria by allowing students to pre-order meals.

## Setup Instructions for Team

1. Clone the repository
2. Copy environment file: `cp .env.example .env`
3. Install dependencies: `composer install && npm install`
4. Generate app key: `php artisan key:generate`
5. Create database: `quickpick_db`
6. Run migrations: `php artisan migrate`
7. Seed database: `php artisan db:seed`
8. Run dev server: `php artisan serve`

## Test Accounts

- Admin: admin@quickpick.com / password
- Student: student@quickpick.com / password
- Staff: staff@quickpick.com / password

## Database Schema

- **users**: User authentication with roles (student/staff/admin)
- **menu_items**: Cafeteria menu with prices and availability
- **orders**: Customer orders with status tracking
- **order_items**: Individual items in each order