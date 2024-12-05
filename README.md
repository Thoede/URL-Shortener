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

## How to Use 📑

1. **Shorten a URL:**
   - Go to the homepage.
   - Enter the original URL in the input field.
   - Click on the "Make it Short" button to get a shortened URL.

2. **Redirect to Original URL:**
   - Visit the shortened URL (e.g., `https://http://localhost/urlshortener/shorting.php/thoede_xyz`).
   - You will be automatically redirected to the original URL.


## Note ℹ️

- This project has already been deployed to Vercel. You can access the application directly from the deployed link.
- Ensure that the database (`thoede_urlshort`) is properly configured before using the application.

## License ⚖️ 

This project is licensed under the MIT License.
