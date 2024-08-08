<?php
require_once 'backend/config/database.php';

// Fetch the record to edit
$id = $_GET['id'] ?? null;
if ($id) {
    $sql = "SELECT * FROM developers WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $developer = $result->fetch_assoc();
} else {
    echo "No record selected";
    exit;
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salary = $_POST['salary'];
    $experience = $_POST['experience'];
    $name = $_POST['name'];
    $stack = $_POST['stack'];
    $city = $_POST['city'];
    $phone = $_POST['number'];

    // Check if an image was uploaded
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target = "assets/img/" . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    } else {
        // If no image was uploaded, keep the existing image
        $image = $developer['images'];
    }

    $sql = "UPDATE developers SET salary=?, experience=?, images=?, name=?, stack=?, city=?, phone=? WHERE id=?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('sssssssi', $salary, $experience, $image, $name, $stack, $city, $phone, $id);

    if ($stmt->execute()) {
        header("Location: admin-panel.php");
        exit();
    } else {
        echo "Error updating record: " . $connection->error;
    }
}
?>

<?php
include 'partials/header.php';
?>

<body>
    <section class="container">
        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">
                <h1 class="opacity">Edit Developer</h1>
                <form action="edit.php?id=<?= htmlspecialchars($id) ?>" method="post" enctype="multipart/form-data">
                    <label for="salary">Salary Per Month</label>
                    <input type="text" name="salary" placeholder="Salary" id="salary" value="<?= htmlspecialchars($developer['salary']) ?>" required pattern="\d{1,3}(,\d{3})*" title="Enter a valid salary (e.g., 1,000)" />

                    <label for="experience">Experience</label>
                    <input type="text" name="experience" placeholder="Experience" id="experience" value="<?= htmlspecialchars($developer['experience']) ?>" required />

                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" accept="image/*" />

                    <label for="name">Full Name</label>
                    <input type="text" name="name" placeholder="Full Name" id="name" value="<?= htmlspecialchars($developer['name']) ?>" required pattern="[A-Za-z\s]+" title="Enter a valid name" />

                    <label for="stack">Stack</label>
                    <input type="text" name="stack" placeholder="Stack" id="stack" value="<?= htmlspecialchars($developer['stack']) ?>" required pattern="[A-Za-z\s]+" title="Enter a valid stack" />

                    <label for="city">City</label>
                    <input type="text" name="city" placeholder="City" id="city" value="<?= htmlspecialchars($developer['city']) ?>" required />

                    <label for="number">Number</label>
                    <input type="number" name="number" placeholder="Number" id="number" value="<?= htmlspecialchars($developer['phone']) ?>" required />

                  
                    <!-- <img src="assets/img/<?= htmlspecialchars($developer['images']) ?>" alt="<?= htmlspecialchars($developer['name']) ?>" height="50"> -->

                    <button type="submit" class="opacity">Update</button>
                </form>
            </div>
            <div class="circle circle-two"></div>
        </div>
        <div class="theme-btn-container"></div>
    </section>
</body>
</html>
