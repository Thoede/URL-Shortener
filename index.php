<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple URL Shortener | Thoede</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Simple URL Shortener</h1>
    <form action="shorting.php" method="POST">
        <label for="long_url">Input URL:</label>
        <input type="text" name="long_url" id="long_url" placeholder="https://thoede.com" required>
        
        <button type="submit">Make it Short</button>
    </form>
</body>
</html>