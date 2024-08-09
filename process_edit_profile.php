<?php
include 'backend/config/database.php';
session_start();

if (!isset($_SESSION['developer_id'])) {
    header("Location: login.php");
    exit();
}

$developer_id = $_SESSION['developer_id'];

$salary = $_POST['Salary'];
$experience = $_POST['Experience'];
$name = $_POST['Name'];
$stack = $_POST['Stack'];
$city = $_POST['City'];
$number = $_POST['Number'];

$image = $_FILES['Image']['name'];
$imageTmpName = $_FILES['Image']['tmp_name'];
$imagePath = 'assets/img/' . $image;

// Update query
if (!empty($image)) {
    if (move_uploaded_file($imageTmpName, $imagePath)) {
        $stmt = $connection->prepare("UPDATE developers_login SET salary = ?, experience = ?, images = ?, name = ?, stack = ?, city = ?, phone = ? WHERE id = ?");
        $stmt->bind_param("sssssssi", $salary, $experience, $image, $name, $stack, $city, $number, $developer_id);
    } else {
        echo "Error uploading file.";
        exit();
    }
} else {
    $stmt = $connection->prepare("UPDATE developers_login SET salary = ?, experience = ?, name = ?, stack = ?, city = ?, phone = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $salary, $experience, $name, $stack, $city, $number, $developer_id);
}

if ($stmt->execute()) {
    echo "Profile updated successfully!";
    header("Location: edit_profile.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$connection->close();
?>
