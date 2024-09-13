# Global Tickets Assessment

This is a Laravel application. Follow the instructions below to set up and run the application.

## Prerequisites
- PHP >= 7.4 (or as required by your project)
- Composer
- MySQL (or any other database you're using)
- Node.js & npm (for front-end assets and Laravel Mix)

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/your-repository-name.git

2. **Navigate to the project directory**
   ```bash 
   cd your-repository-name

3. **Install PHP dependencies**
   ```bash 
   composer install   

4. **Install Node.js dependencies**
   ```bash 
   npm install

5. **Copy .env.example to .env**
   ```bash 
   cp .env.example .env

6. **Generate the application key**
   ```bash 
   php artisan key:generate

7. **Set up your database:**
   ```bash 
   - Open the .env file and configure the DB_* settings (e.g., DB_DATABASE, DB_USERNAME, DB_PASSWORD).
   - Run the migrations:
   ```bash
   php artisan migrate 

8. **Run the application:**
   ```bash 
   php artisan serve

9. **Run Laravel Mix to compile assets (optional for front-end assets):**
   ```bash 
   npm run dev

## Testing the APIS

Once logged in the system generates an Access API Token 

The user is redirected to the dashboard or home page. At the top of the page is a link  called "Access API Token".
Click on the Link and you will be redirected to an Access Token Page where you can copy your API Token.

API Token Authentication
For authenticated API routes, include the token in the Authorization header as follows:

Authorization: Bearer your-api-token

Test following API Endpoints

GET ALL Urls: 

GET Single URL

POST/ADD URL

UPDATE URL:

DELETE URL: