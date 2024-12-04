# Laravel Portfolio Project Setup

Follow the steps below to get your Laravel portfolio project up and running.

## Prerequisites

Make sure you have the following installed on your machine:

- **MySQL (XAMPP or any other MySQL server)**
- **Node.js (Version 16)**
- **PHP (Version 8)**
- **Composer**

## Steps to Set Up the Project

1. **Clone the project repository**  
   Pull the Laravel portfolio project from your Git repository:
   ```
   git clone https://github.com/Ferjaboss/Portfolio
   ``` 
Navigate to the project directory
Open the project folder:

bash
Copy code
cd your-project-folder
Configure the .env file
Rename .env.example to .env:

bash
Copy code
mv .env.example .env
Configure the Database
Open the .env file and configure your database settings:

env
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
Add File System Disk Configuration
At the end of the .env file, add:

env
Copy code
FILESYSTEM_DISK=public
Install Node Modules
Run the following command to install the required node packages:

bash
Copy code
npm install
Install PHP Dependencies
Use Composer to install all required PHP packages:

bash
Copy code
composer install
Generate the Application Key
Run the Artisan command to generate the application key:

bash
Copy code
php artisan key:generate
Run Migrations
Apply the database migrations:

bash
Copy code
php artisan migrate
Create a Symlink for Storage
Run the following command to create a symbolic link for storage:

bash
Copy code
php artisan storage:link
Run Development Servers

First, start the Vite development server:
bash
Copy code
npm run dev
Then, start the Laravel development server:
bash
Copy code
php artisan serve
Your Laravel portfolio project should now be up and running. Visit http://localhost:8000 to see it in action!
