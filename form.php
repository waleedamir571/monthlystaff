<?php
// Include the database connection
include 'backend/config/database.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $stack = $_POST['stack'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $salary = $_POST['salary'];

    // Prepare an SQL statement to insert data
    $stmt = $connection->prepare("INSERT INTO developers (name, phone, stack, city, country, salary) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $phone, $stack, $city, $country, $salary);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly Staff Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <h1 class="opacity">REGISTER</h1>
                <form action="index.php" method="post">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name" id="name" required>

                    <label for="phone">Phone</label>
                    <input type="number" name="phone" placeholder="Phone" id="phone" required>

                    <label for="stack">Stack</label>
                    <input type="text" name="stack" placeholder="Stack" id="stack" required>

                    <label for="city">City</label>
                    <input type="text" name="city" placeholder="City" id="city" required>

                    <label for="country">Country</label>
                    <input type="text" name="country" placeholder="Country" id="country" required>

                    <label for="salary">Salary</label>
                    <input type="text" name="salary" placeholder="Salary" id="salary" required>

                    <button type="submit" class="opacity">SUBMIT</button>
                </form>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>



<style>
    :root {
        --background: #1a1a2e;
        --color: #ffffff;
        --primary-color: #0f3460;
    }

    * {
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        margin: 0;
        box-sizing: border-box;
        font-family: "poppins";
        background: var(--background);
        color: var(--color);
        letter-spacing: 1px;
        transition: background 0.2s ease;
        -webkit-transition: background 0.2s ease;
        -moz-transition: background 0.2s ease;
        -ms-transition: background 0.2s ease;
        -o-transition: background 0.2s ease;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    /* @keyframes wobble {
        0% {
            transform: scale(1.025);
            -webkit-transform: scale(1.025);
            -moz-transform: scale(1.025);
            -ms-transform: scale(1.025);
            -o-transform: scale(1.025);
        }

        25% {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
        }

        75% {
            transform: scale(1.025);
            -webkit-transform: scale(1.025);
            -moz-transform: scale(1.025);
            -ms-transform: scale(1.025);
            -o-transform: scale(1.025);
        }

        100% {
            transform: scale(1);
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
        }
    } */
</style>