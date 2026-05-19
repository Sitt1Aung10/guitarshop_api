# Guitar Shop API

A Laravel REST API backend for the Guitar Shop mobile application.

## Features

- Product management
- Order creation
- API endpoints for mobile app
- MySQL database integration
- JSON API responses

## Tech Stack

- Laravel
- PHP
- MySQL
- Eloquent ORM

## Installation

Clone repository:

bash
git clone https://github.com/yourusername/guitarshop-api.git# guitarshop_api

Install dependencies:

composer install

Copy environment file:

cp .env.example .env

Generate app key:

php artisan key:generate

DB_DATABASE=guitarshop
DB_USERNAME=root
DB_PASSWORD=

Run migrations:

php artisan migrate

Start server:

php artisan serve --host=0.0.0.0 --port=8000

API Endpoints
Get Products
GET /api/allitems
Create Order
POST /api/orders

Database Tables
allitems
orders
Mobile App Connection

When testing on physical devices:

Use your local IP address instead of localhost.

Future Improvements
Authentication
Admin panel
Image upload
Payment system
Stock management
Order tracking
License

This project is for educational purposes.
