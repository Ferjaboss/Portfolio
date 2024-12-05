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
2. **Navigate to the project directory**  
Open the project folder: (in my case when i cloned the repo i got portfolio-master yours might be different 

```
cd Portfolio-master
```

3. **Configure the .env file**
Rename .env.example to .env:

```
mv .env.example .env
```

4. **Configure the Database**
Open the .env file and configure your database settings:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

5. **Add File System Disk Configuration**
At the end of the .env file, add:

```
FILESYSTEM_DISK=public
```

6. **Install Node Modules**
Run the following command to install the required node packages:

```
npm install
```

7. **Install PHP Dependencies**
Use Composer to install all required PHP packages:

```
composer install
```

8. **Generate the Application Key7.**
Run the Artisan command to generate the application key:

```
php artisan key:generate
```

9. **Run Migrations**
Apply the database migrations:

```
php artisan migrate
```

10. **Create a Symlink for Storage**
Run the following command to create a symbolic link for storage:

```
php artisan storage:link
```

11. **Run Development Servers**

First, start the Vite development server:
```
npm run dev
```
Then, start the Laravel development server:
```
php artisan serve
```
Your Laravel portfolio project should now be up and running. Visit http://localhost:8000 to see it in action!