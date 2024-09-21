<?php
// koneksi.php

$servername = "localhost";
$username = "root";
$password = "";
$database = "web-hotel";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
