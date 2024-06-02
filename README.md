
---

# Laravel Multilingual Multi-Currency E-commerce Application

This Laravel application supports multiple languages and currencies and includes add-to-cart functionality.

## Requirements

- PHP 7.4 or higher
- Composer
- MySQL or any other database supported by Laravel

## Installation

1. **Clone the repository:**

   ```sh
   git clone https://github.com/spatelamit/laravel-multilingual.git
   cd laravel-multilingual
   ```

2. **Create the Key:**

   ```sh
   php artisan key:generate

   ```

3. **Set up environment file:**

   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure your `.env` file with your database credentials and other necessary settings.**

5. **Run migrations:**

   ```sh
   php artisan migrate
   ```

6. **Import sample data:**

	Import File in your database 
	Or 
   ```sh
   mysql -u your_username -p your_database < DB_sample/sample.sql
   ```

7. **Serve the application:**

   ```sh
   php artisan serve --port=8000
   ```

8. **Access the application:**

   Open your browser and navigate to `http://localhost:8000`.

## Features

### Languages Supported

- English
- Español (Spanish)
- 日本語 (Japanese)
- Português (Portuguese)
- Polski (Polish)

### Currencies Supported

- USD (United States Dollar)
- EUR (Euro)
- JPY (Japanese Yen)
- BRL (Brazilian Real)
- PLN (Polish Zloty)

### Add to Cart Functionality

- guest can add products to their cart.
- The cart supports multiple currencies.
- The cart content persists across sessions.

## Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss your ideas.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

For any questions or feedback, please contact

---

Replace `your_username`, `your_database`, and `your-email@example.com` with your actual database username, database name, and email address. This version provides a clear structure and detailed instructions for users to understand and use your project effectively.