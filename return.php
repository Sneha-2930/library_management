<?php

$conn = new mysqli("localhost", "root", "", "library_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$book_id = $_POST['book_id'];
$issue_date = $_POST['issue_date'];

$sql = "INSERT INTO return_books (book_id, issue_date)
VALUES ('$book_id', '$issue_date')";

if ($conn->query($sql) === TRUE) {
    header("Location: dashboard.html");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

?>