# Simple URL Shortener

Simple URL Shortener using PHP and MySQL

## Requirement 🖥️

- PHP 7.0 +
- MySQL or MariaDB.
- Local Server (XAMPP).

## Project Structure 📁

- `shorting.php`
- `redirect.php`
- `index.html`
- `style.css`
- `database.sql`
  
## Database Structure 🗄️

- `id`
- `short_code`
- `original_url`
- `created`
- 
## Installation

### Step 1: Clone the Repository

First, clone the repository :
``` bash
git clone [https://github.com/yourusername/urlshortener.git](https://github.com/Thoede/URL-Shortener)
```
cd urlshortener

### Step 2: Set Up the Database
Open phpMyAdmin from your XAMPP dashboard (or access your MySQL server).
Create a new database named thoede_urlshort.
Import the database.sql file located in the project directory to set up the required tables. You can do this through phpMyAdmin by navigating to the Import tab and selecting the database.sql file.

Alternatively, you can manually run the following SQL commands to create the necessary table:
```sql
CREATE DATABASE thoede_urlshort;
USE thoede_urlshort;

CREATE TABLE url_map (
    id INT AUTO_INCREMENT PRIMARY KEY,
    short_code VARCHAR(20) NOT NULL,
    original_url TEXT NOT NULL,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
### Step 3: Configure Your Local Server
Place all the files from this repository into your web server's root directory (e.g., htdocs for XAMPP).
Make sure Apache and MySQL are running in XAMPP (or any other local server you're using).

### Step 4: Access the Application
Open your browser and visit http://localhost/urlshortener/.
You should see the URL Shortener page where you can input long URLs to be shortened.

## How to Use 📑

1. **Shorten a URL:**
   - Enter the original URL in the input field.
   - Click on the "Make it Short" button to get a shortened URL.

2. **Redirect to Original URL:**
   - Visit the shortened URL (e.g., `https://http://localhost/urlshortener/shorting.php/thoede_xyz`).
   - You will be automatically redirected to the original URL.


## Note ℹ️
- Ensure that the database (`thoede_urlshort`) is properly configured before using the application.

## License ⚖️ 

This project is licensed under the MIT License.
