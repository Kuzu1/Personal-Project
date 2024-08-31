<?php
session_start();
include 'connect.php';

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['username'] = $row['username'];
            // Redirect to index.php after successful login
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo "Invalid username or password";
    }
}
