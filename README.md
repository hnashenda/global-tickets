# Global Tickets Assessment

This is a Laravel application. Follow the instructions below to set up and run the application.

## Prerequisites
- PHP >= 8.2.18 (or as required by your project)
- Composer
- MySQL 
- Node.js & npm (for front-end assets and Laravel Mix)
- wamp : Ensure that WAMP is installed on your system to run Apache, MySQL, and PHP.
## Installation



1. **Use WAMP to start Apache and MySQL services.**
   Starting the Services

2. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/your-repository-name.git
   ```
3. **Navigate to the project directory**
   ```bash 
   cd your-repository-name
   ```
4. **Install PHP dependencies**
   ```bash 
   composer install   
   ```
5. **Install Node.js dependencies**
   ```bash 
   npm install
   ```
6. **Copy .env.example to .env**
   ```bash 
   cp .env.example .env
   ```
7. **Generate the application key**
   ```bash 
   php artisan key:generate
   ```
8. **Set up your database:** (dont forget the reseed) php artisan migrate:refresh --seed
   
   - Open the .env file and configure the DB_* settings (e.g., DB_DATABASE, DB_USERNAME, DB_PASSWORD).
   - Run the migrations and seed to create default user and urls:
   ```bash
   php artisan migrate php artisan migrate:fresh --seed
   ```
   Default user:
   ```bash
      username: hubert@tester.com
      password: password
   ```   
9. **Run the application:**
   ```bash 
   php artisan serve
    ```
10. **Run Laravel Mix to compile assets (optional for front-end assets):**
   ```bash 
     npm run dev
   ```

## Testing the APIS

Once logged in the system generates an Access API Token 

The user is redirected to the dashboard or home page. At the top of the page is a link  called "Access API Token".
Click on the Link and you will be redirected to an Access Token Page where you can copy your API Token.

API Token Authentication
For authenticated API routes, include the token in the Authorization header as follows:

Authorization: Bearer your-api-token

Test following API Endpoints  

Once you have your API token, you can test the following API endpoints using Postman:


**1. GET All URLs**

- **Method**: GET  
- **Endpoint**: `/api/url`  
- **Description**: Retrieves a list of all URLs for the authenticated user.  
- **Authorization**: Add the API token in the `Authorization` header.

Example Request:
```bash 

GET http://localhost:8000/api/url
```
**2. GET Single URL**

- **Method**: GET  
- **Endpoint**: `/api/url/{id}`  
- **Description**: Fetch a specific URL by its ID. 
- **Authorization**: Add the API token in the `Authorization` header.

Example Request:
```bash 

GET http://localhost:8000/api/url/1
```
**3. POST / Add a New URL**

- **Method**: GET  
- **Endpoint**: `/api/url/`  
- **Description**: Create a new shortened URL. 
- **Authorization**: Add the API token in the `Authorization` header.
- **Body**: Send data as JSON in the request body.

Example Request Body:
```bash 

{
  "target_url": "https://example.com",
  "shortened_url": "example"
}
```

Example Request:
```bash 

POST http://localhost:8000/api/url
```
**4. UPDATE an Existing URL**

- **Method**: PUT or PATCH 
- **Endpoint**: `/api/url/{id}`  
- **Description**: Update the target or shortened URL for a specific URL by its ID.
- **Authorization**: Add the API token in the `Authorization` header.
- **Body**: Send updated data as JSON in the request body.

Example Request Body:
```bash 

{
  "target_url": "https://updated-example.com",
  "shortened_url": "example-update"
}
```
Example Request:
```bash 

PUT http://localhost:8000/api/url/1
```
**5. DELETE a URL**

- **Method**: DELETE  
- **Endpoint**: `/api/url{id}`  
- **Description**: Delete a specific URL by its ID. 
- **Authorization**: Add the API token in the `Authorization` header.

Example Request:
```bash 

DELETE http://localhost:8000/api/url/1
```
## Postman Setup for API Requests
### Headers:

Go to the Headers section in Postman.

Add a header called Authorization and set its value to Bearer your-api-token.

Content Type:
```bash 
For POST and PUT requests, set the Content-Type header to application/json in the Headers section.
```
Body:
```bash 
For POST and PUT requests, make sure to choose raw in the body section and select JSON from the dropdown.
```