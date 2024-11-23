<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "kampus";

$conn = new mysqli($host, $username, $password, $dhname);

if ($conn->connect_error) {
    die("koneksi gagal: " . $conn->connect_error);
}