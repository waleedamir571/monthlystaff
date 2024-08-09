<?php
include 'backend/config/database.php';
session_start();

if (!isset($_SESSION['developer_id'])) {
    header("Location: login.php");
    exit();
}

$developer_id = $_SESSION['developer_id'];

// Fetch developer details
$stmt = $connection->prepare("SELECT * FROM developers_login WHERE id = ?");
$stmt->bind_param("i", $developer_id);
$stmt->execute();
$result = $stmt->get_result();
$developer = $result->fetch_assoc();

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <section class="container">
        <div class="form-container">
            <h1>EDIT PROFILE</h1>
            <form action="process_edit_profile.php" method="post" enctype="multipart/form-data">
                <label for="salary">Salary Per Month</label>
                <input type="text" name="Salary" value="<?php echo htmlspecialchars($developer['salary']); ?>" id="salary" required />

                <label for="experience">Experience</label>
                <input type="text" name="Experience" value="<?php echo htmlspecialchars($developer['experience']); ?>" id="experience" required />

                <label for="image">Image</label>
                <input type="file" name="Image" id="image" accept="image/*" />

                <label for="name">Full Name</label>
                <input type="text" name="Name" value="<?php echo htmlspecialchars($developer['name']); ?>" id="name" required />

                <label for="stack">Stack</label>
                <input type="text" name="Stack" value="<?php echo htmlspecialchars($developer['stack']); ?>" id="stack" required />

                <label for="city">City</label>
                <input type="text" name="City" value="<?php echo htmlspecialchars($developer['city']); ?>" id="city" required />

                <label for="number">Number</label>
                <input type="number" name="Number" value="<?php echo htmlspecialchars($developer['phone']); ?>" id="number" required />

                <button type="submit">UPDATE</button>
            </form>
        </div>
    </section>
</body>
</html>
