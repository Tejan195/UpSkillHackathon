<?php
require 'Dbconnect.php';
function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email=? LIMIT 1");
    if (!$stmt) {
        die("Preparation failed: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $stmt->close();
            $conn->close();
            header("Location: main.php");
            exit();
        } else {
            alert('Incorrect password!');
        }
    } else {
        alert('Email not registered or multiple users found!');
    }

    $stmt->close();
    $conn->close();
} else {
    alert( 'Invalid request method.');
}
?>
