<?php
require_once 'backend/config/database.php';

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $sql = "DELETE FROM developers WHERE id = ?";
    
    if ($stmt = $connection->prepare($sql)) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo 'error';
        }
        $stmt->close();
    } else {
        echo 'error';
    }
    $connection->close();
} else {
    echo 'error';
}
?>
