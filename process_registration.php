<?php
include 'backend/config/database.php'; // Include the database connection file

// Collect and sanitize form data
$salary = $_POST['Salary'];
$experience = $_POST['Experience'];
$name = $_POST['Name'];
$stack = $_POST['Stack'];
$city = $_POST['City'];
$number = $_POST['Number'];

// Handle file upload
$image = $_FILES['Image']['name'];
$imageTmpName = $_FILES['Image']['tmp_name'];
$imagePath = 'assets/img/' . $image;

// Move the uploaded file to the target directory
if (move_uploaded_file($imageTmpName, $imagePath)) {
    // Prepare SQL statement
    $stmt = $connection->prepare("INSERT INTO developers (salary, experience, images, name, stack, city, phone) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $salary, $experience, $image, $name, $stack, $city, $number);

    // Execute the query
    if ($stmt->execute()) {
        echo "Registration successful!";
        header("Location: index.php"); // Redirect to the display page
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
} else {
    echo "Error uploading file.";
}

// Function to validate salary
function validate_salary($salary) {
    $salary = str_replace(',', '', $salary); // Remove commas
    if (!is_numeric($salary)) {
        return "Invalid salary format.";
    }
    if ($salary > 100000) {
        return "Salary should not exceed 100,000.";
    }
    return null;
}



// Validate form inputs
$errors = [];
$salary = $_POST['Salary'];
$experience = $_POST['Experience'];
$name = $_POST['Name'];
$stack = $_POST['Stack'];
$city = $_POST['City'];
$number = $_POST['Number'];

// Validate salary
$salary_error = validate_salary($salary);
if ($salary_error) {
    $errors[] = $salary_error;
}

// Validate full name and stack
if (!preg_match("/^[A-Za-z\s]+$/", $name)) {
    $errors[] = "Invalid full name.";
}
if (!preg_match("/^[A-Za-z\s]+$/", $stack)) {
    $errors[] = "Invalid stack.";
}

// Validate number
if (!is_numeric($number)) {
    $errors[] = "Invalid number.";
}

// Validate image upload
if (isset($_FILES['Image']) && $_FILES['Image']['error'] != UPLOAD_ERR_OK) {
    $errors[] = "Image upload failed.";
}

// Display errors if any
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
} else {
    // Process the form (e.g., save data to the database)
    // You can also format the salary with commas before saving
    $formatted_salary = number_format($salary);
    echo "<p>Registration successful! Salary: $formatted_salary</p>";
}

$connection->close();



// Collect and sanitize form data
$salary = $_POST['Salary'];
$experience = $_POST['Experience'];
$name = $_POST['Name'];
$stack = $_POST['Stack'];
$city = $_POST['City'];
$number = $_POST['Number'];
$email = $_POST['Email']; // Ensure you add an email input field in the registration form
$password = password_hash($_POST['Password'], PASSWORD_DEFAULT); // Securely hash the password

// Handle file upload
$image = $_FILES['Image']['name'];
$imageTmpName = $_FILES['Image']['tmp_name'];
$imagePath = 'assets/img/' . $image;

// Move the uploaded file to the target directory
if (move_uploaded_file($imageTmpName, $imagePath)) {
    // Prepare SQL statement
    $stmt = $connection->prepare("INSERT INTO developers_login (salary, experience, images, name, stack, city, phone, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $salary, $experience, $image, $name, $stack, $city, $number, $email, $password);

    // Execute the query
    if ($stmt->execute()) {
        echo "Registration successful!";
        header("Location: index.php"); // Redirect to the display page
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
} else {
    echo "Error uploading file.";
}


?>


