# Carvision

College project for the web development class, with focus on PHP use with the framework Laravel to create an API using Laravel Sanctum.

Developed by João Lucas Biglia and Tiago Comeron


## Installation

- 1 . Download and install XAMPP on your machine. This will help us by getting ready to use the mysql database. [Download.](https://www.apachefriends.org/pt_br/download.html)

- 2 . Open XAMPP and start mysql

- 3 . Import the database from the database.sql file at the root of the project. We recommend make use of a database manager, such as PhpMyAdmin or HeidiSQL.

    - It's important to note that your must create the database name such as the name informed at the .env file. You can change the name if you want it to connect in a different database name.

    - You can also just create a new database and then just use migration to create the necessary tables by typing the following command at your terminal:

```bash
    php artisan migrate
```

- 5 . Open your terminal at the project folder and enter the following command to start the laravel project.

```bash
    php artisan serve
```

- If everything went well, you now can check if the project is running accessing the web application at **localhost:8080** (This will show only the start page of laravel, the main goal here is to use the project as an API)

## Testing the API

We use Insomnia to make the tests so, for better understanding we recommend to use the same software. But feel free to use Postman or similar softwares to test end-points.

**All POST and PUT routes MUST be using Form URL Encoded to send data.**

**It's also important to note that we MUST use the key and value (Accept : application/json) on the header in order to always get the json response, otherwise we are gonne be redirect by laravel to root route.**

- Register (POST)
    - http://127.0.0.1:8000/api/auth/register
    - Required fields: 
        - name
        - email
        - password
        - access_level_id (0 or 1)
    
- Login (POST)
    - http://127.0.0.1:8000/api/auth/login
    - Required fields: 
        - email
        - password

- Update (PUT)
    - http://127.0.0.1:8000/api/auth/update
    - Required headers: 
        - Authentication : Bearer <Token>

- Delete (DELETE)
    - http://127.0.0.1:8000/api/auth/delete
    - Required headers: 
        - Authentication : Bearer <Token>

- Logout (GET)
    - http://127.0.0.1:8000/api/auth/logout
    - Required headers: 
        - Authentication : Bearer <Token>

- User (GET)
    - It returns the current user based on it's token
    - http://127.0.0.1:8000/api/auth/user
    - Required headers: 
        - Authentication : Bearer <Token>
    
