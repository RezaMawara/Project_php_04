<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "blog_db"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM blogs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='blog-list'>";
    while ($row = $result->fetch_assoc()) {
        echo "<div class='blog-item'>";
        echo "<h3 class='blog-title' data-id='" . $row['id'] . "'>" . $row['title'] . "</h3>";
        echo "<div class='blog-content' id='content-" . $row['id'] . "' style='display: none;'>";
        echo "<p>" . $row['content'] . "</p>";
        echo "<img src='img/" . $row['category'] . ".jpg' alt='" . $row['title'] . "'>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "Tidak ada blog ditemukan";
}

$conn->close();