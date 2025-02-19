# Product Management System

A simple **Product & Category Management** application built with [Laravel](https://laravel.com/) (using Eloquent ORM), [Tailwind CSS](https://tailwindcss.com/) for styling, and MySQL as the database.

## Requirements

-   **PHP** ^8.0 (or higher)
-   **Composer** (latest version)
-   **Node.js** ^16.9.0 (or higher)
-   **NPM** (bundled with Node.js)
-   **MySQL** (or MariaDB)

## Installation

1. **Clone the Repository**

    ```bash
    git clone https://github.com/your-username/your-repo.git
    cd your-repo
    ```

2. **Install PHP Dependencies**

    ```bash
    composer install
    ```

3. **Create & Configure the Environment File**

    - Duplicate the `.env.example` file and rename it to `.env`.
    - Update your `.env` with the correct database credentials:
        ```dotenv
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=product_management
        DB_USERNAME=root
        DB_PASSWORD=secret
        ```
    - Generate an application key:
        ```bash
        php artisan key:generate
        ```

4. **Run Database Migrations**  
   This creates all necessary tables in your database:

    ```bash
    php artisan migrate
    ```

5. **Install Node Dependencies**  
   This will install Tailwind CSS, Vite, and other front-end dependencies:

    ```bash
    npm install
    ```

6. **Compile Your Front-end Assets**

    - **Development build** (auto-reload, debugging):
        ```bash
        npm run dev
        ```
    - **Production build** (optimized, minified):
        ```bash
        npm run build
        ```

7. **Run the Application**  
   Start Laravel’s development server:

    ```bash
    php artisan serve
    ```

    By default, it runs at [http://127.0.0.1:8000](http://127.0.0.1:8000).

8. **Visit the Application**
    - **Products:** [http://127.0.0.1:8000/products](http://127.0.0.1:8000/products)
    - **Categories:** [http://127.0.0.1:8000/categories](http://127.0.0.1:8000/categories)
