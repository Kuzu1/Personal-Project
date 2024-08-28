<?php

include 'connect.php';

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $hashedPassword = md5($password);

    // Check if passwords match
    if ($hashedPassword === md5($password2)) {
        // Check if email already exists
        $checkemail = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($checkemail);
        if ($result->num_rows > 0) {
            echo "Email Address Already Exists";
        } else {
            $insertQuery = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
            if ($conn->query($insertQuery) === TRUE) {
                // Redirect to login.php after successful registration
                header("Location: login.php");
                exit();
            } else {
                echo "Error: " . $insertQuery . "<br>" . $conn->error;
            }
        }
    } else {
        echo "Passwords do not match!";
    }
}

if (isset($_POST['signin'])) {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $hashedPassword = md5($password);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$hashedPassword'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        // Redirect to index.php after successful login
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>
