<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "thoede_urlshort"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$alias = isset($_GET['alias']) ? $_GET['alias'] : '';

if ($alias) {
    $stmt = $conn->prepare("SELECT original_url FROM url_map WHERE short_code = ?");
    $stmt->bind_param("s", $alias);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($original_url);
        $stmt->fetch();
        header("Location: $original_url");
        exit();
    } else {
        echo "URL tidak ditemukan!";
    }
    $stmt->close();
} else {
    echo "Alias tidak ditemukan!";
}

$conn->close();
?>
