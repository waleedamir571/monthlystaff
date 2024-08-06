<?php
include 'partials/header.php';

// Start the session
session_start();

// Define the correct email and password
$correct_email = 'admin@786@gmail.com';
$correct_password = 'admin786';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted email and password
    $email = $_POST['Name'];
    $password = $_POST['Password'];

    // Validate the credentials
    if ($email === $correct_email && $password === $correct_password) {
        // Store user info in session
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;

        // Redirect to admin panel
        header("Location: admin-panel.php");
        exit;
    } else {
        // Invalid credentials, show an error message
        $error_message = "Invalid email or password.";
    }
}
?>

<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <h1 class="opacity">Login</h1>
                <?php
                // Show the error message if credentials are invalid
                if (!empty($error_message)) {
                    echo "<p style='color:red;'>$error_message</p>";
                }
                ?>
                <form action="" method="post">

                    <label for="name">Email</label>
                    <input type="text" name="Name" placeholder="Email" id="name" required>

                    <label for="password">Password</label>
                    <input type="password" name="Password" placeholder="Password" id="password" required>

                    <button type="submit" class="opacity">SUBMIT</button>
                </form>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>
