Luméa Cosmetics

Beauty that feels like you.

Luméa Cosmetics is a full-stack cosmetics e-commerce web application built with PHP, Laravel, MySQL, Blade, JavaScript, Vite and Composer.

✨ Features

Customer Features

Responsive home page

Product browsing and product details

Search, category filtering and sorting

Shopping cart and quantity management

Checkout and order placement

Coupon application and removal

Customer registration, login and logout

Customer order history

Wishlist

Product ratings and reviews

Responsive mobile-friendly UI

Admin Features

Admin dashboard

Product CRUD management

Category CRUD management

Dynamic product-category relationship

Order management and status updates

Customer management

Review management

Coupon CRUD management

Store reports

Low-stock product monitoring

Role-based admin access control

🛠️ Tech Stack

Technology

Usage

PHP

Backend development

Laravel

Web application framework

MySQL / SQLite

Database

Blade

Server-side templating

JavaScript

Frontend interactions

HTML5

Page structure

CSS3

Responsive UI styling

Vite

Asset bundling

Composer

PHP dependency management

Git & GitHub

Version control

🏗️ Architecture

The application follows the MVC (Model-View-Controller) architecture.

User
  ↓
Route
  ↓
Controller
  ↓
Model
  ↓
Database
  ↓
Controller
  ↓
Blade View
  ↓
User

Laravel features used in the project include:

Routing

Controllers

Eloquent ORM

Database migrations

Model relationships

Blade templates

Authentication

Middleware

Validation

Sessions

Redirects

📸 Screenshots

Home Page



Shop Page



Product Details



Shopping Cart



Checkout



🔐 Admin Panel

Admin Dashboard



Product Management



Category Management



Coupon Management



Review Management



Reports



📂 Main Project Structure

lumea-cosmetics/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── storage/
├── tests/
├── composer.json
├── package.json
└── vite.config.js

🚀 Installation

1. Clone the repository

git clone https://github.com/Nadeera-Sithmini/lumea-cosmetics.git
cd lumea-cosmetics

2. Install PHP dependencies

composer install

3. Create the environment file

copy .env.example .env

4. Generate the application key

php artisan key:generate

5. Configure the database

Update the database settings in .env.

For MySQL:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lumea_cosmetics
DB_USERNAME=root
DB_PASSWORD=

For SQLite:

DB_CONNECTION=sqlite

6. Run migrations

php artisan migrate

7. Install frontend dependencies

npm install

8. Build frontend assets

npm run build

9. Start the development server

composer run dev

The application will normally be available at:

http://127.0.0.1:8000

🛒 Application Flow

Home
  ↓
Shop
  ↓
Product Details
  ↓
Add to Cart
  ↓
Cart
  ↓
Checkout
  ↓
Apply Coupon
  ↓
Place Order
  ↓
Order Success
  ↓
Customer Order History

👤 Admin Flow

Admin Login
    ↓
Admin Dashboard
    ├── Products
    ├── Categories
    ├── Orders
    ├── Customers
    ├── Reviews
    ├── Coupons
    └── Reports

🔒 Security

The application uses authentication and role-based middleware to protect admin routes.

Authenticated User
       ↓
   Admin Middleware
       ↓
Is user role = admin?
       ↓
   ┌───┴────┐
  Yes       No
   ↓         ↓
Admin      403
Panel

📱 Responsive Design

The application interface is designed to work across:

Desktop

Tablet

Mobile

The project includes responsive layouts for both customer-facing pages and the admin dashboard.

📌 Project Highlights

Full-stack Laravel e-commerce implementation

MVC-based application structure

Relational product and category management

Customer authentication and authorization

Cart and checkout workflow

Coupon validation and discount handling

Order and stock management

Wishlist and review system

Admin dashboard and reporting

Responsive UI

👩‍💻 Developer

Nadeera Weerasinghe

GitHub: Nadeera-Sithmini

LinkedIn: Nadeera Sithmini

📄 License

This project is created for educational, portfolio and development purposes.
