# Neureka Project Setup

This README provides a step-by-step guide on how to install and setup project. Please follow the instructions below to get started.

## Prerequisites

Before you begin, ensure that you have the following installed on your local development environment:

1. PHP >= 8.1
2. Composer
3. Node.js >= 16.x
4. PHP MongoDB Driver/Extension
5. Redis

## Installation

### 1. Clone the repository

Clone the project repository to your local machine by running:

```bash
git clone https://bitbucket.org/square1/neureka.git
```

Navigate to the project directory:

```bash
cd neureka
```

### 2. Install PHP dependencies

Install PHP dependencies using Composer:

```bash
composer install
```

---

### 3. Set up environment variables

Create a new `.env` file using the example provided:

```bash
cp .env.example .env
```

Open the `.env` file and update the environment variables as required, such as your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 4. Generate application key

Generate a new application key:

```bash
php artisan key:generate
```

### 5. Run database migrations and seeders

Migrate and seed the database:

```bash
php artisan migrate --seed
```

### 6. Install JavaScript dependencies

Install JavaScript dependencies using npm:

```bash
npm install
```

### 7. Compile JavaScript assets

Compile the JavaScript assets for development:

```bash
npm run dev
```

Or for production:

```bash
npm run prod
```

## Running the Application

Start the Laravel development server:

```bash
php artisan serve
```

Visit `http://127.0.0.1:8000` in your web browser to access the application.

## Contributing

Please refer to the [CONTRIBUTING.md](CONTRIBUTING.md) file for guidelines on how to contribute to this project.

## License

This project is licensed under the [MIT License](LICENSE.md).
