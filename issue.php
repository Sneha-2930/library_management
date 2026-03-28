<?php

$conn = new mysqli("localhost", "root", "", "library_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$subject = $_POST['subject'] ?? '';
$description = $_POST['description'] ?? '';
$semester = $_POST['semester'] ?? '';

$sql = "INSERT INTO issue_books (subject, description, semester)
VALUES ('$subject', '$description', '$semester')";

if ($conn->query($sql) === TRUE) {
    header("Location: dashboard.html");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>