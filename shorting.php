<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "thoede_urlshort"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['long_url'])) {
    $original_url = $_POST['long_url'];
    
    if (filter_var($original_url, FILTER_VALIDATE_URL)) {
        $short_code = "thoede_" . substr(md5(time() . $original_url . rand()), 0, 6); 

        $stmt = $conn->prepare("SELECT short_code FROM url_map WHERE short_code = ?");
        $stmt->bind_param("s", $short_code);
        $stmt->execute();
        $stmt->store_result();

        while ($stmt->num_rows > 0) {
            $short_code = "thoede_" . substr(md5(time() . $original_url . rand()), 0, 6);
            $stmt->execute();
            $stmt->store_result();
        }

        $stmt = $conn->prepare("INSERT INTO url_map (short_code, original_url) VALUES (?, ?)"); 
        $stmt->bind_param("ss", $short_code, $original_url);
        $stmt->execute();

        echo "URL berhasil dipendekkan: <a href='http://localhost/urlshortener/$short_code'>http://localhost/urlshortener/$short_code</a>";
    } else {
        echo "URL tidak valid.";
    }
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn->close();
?>
