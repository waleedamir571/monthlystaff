<?php
include 'backend/config/database.php';

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

// Validate input
if (empty($email) || empty($password)) {
    echo "All fields are required.";
    exit();
}

// Check credentials
$stmt = $connection->prepare("SELECT * FROM developers_login WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        $_SESSION['developer_id'] = $row['id'];
        header("Location: edit_profile.php");
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "Invalid email.";
}

$stmt->close();
$connection->close();
?>
