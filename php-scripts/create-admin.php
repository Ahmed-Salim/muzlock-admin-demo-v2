<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codeditors_muzlock";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$admin_password = password_hash('admin123', PASSWORD_DEFAULT);

$sql = "INSERT INTO admin (admin_name, admin_username, admin_email, admin_password) VALUES ('Admin', 'Admin', 'admin@example.com', '$admin_password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
