
# Laravel Multilingual and Multicurrency Project

This is a simple Laravel project with support for multiple languages and currencies.
 It also includes a basic "Add to Cart" functionality.

## Setup Instructions

Follow these steps to set up and run the project on your local machine:

### 1. Generate Laravel Application Key

Run the following command to generate a new Laravel application key:

```bash
php artisan key:generate
```

### 2. Create `.env` File

Create a copy of the `.env.example` file and name it `.env`. Update the necessary configurations such as database connection details, application URL, etc.

```bash
cp .env.example .env
```

### 3. Run Database Migrations

Run the database migrations to create the necessary tables in your database:

```bash
php artisan migrate
```

### 4. Import Sample Data

You have to import sample SQL file (e.g., `DB_sample/sample.sql`), you can import it into your MySQL database 
using phpMyAdmin or a similar tool. copy paste if not works

### 5. Start Laravel Server

Run the following command to start the Laravel development server:

```bash
php artisan serve --port=8000
```

### 6. Access the Application

Open your web browser and navigate to `http://localhost:8000` to access the application.

### Language and Currency Selection

You can change the language and currency of the application using the dropdown menu provided:

- English
- Español
- 日本語
- Português
- Polski

### Currencies

USD to EUR (Euro)

Exchange Rate: 0.92
Symbol: €
USD to JPY (Japanese Yen)

Exchange Rate: 157.00
Symbol: ¥
USD to BRL (Brazilian Real)

Exchange Rate: 5.25
Symbol: R$
USD to PLN (Polish Zloty)

Exchange Rate: 3.94
Symbol: zł

### Add to Cart Functionality

The project includes a simple "Add to Cart" functionality for managing items in the cart.

## License

This project is licensed under the [MIT License](LICENSE).


Feel free to use this updated content for your README.md file. 
Let me know if you need any further modifications!