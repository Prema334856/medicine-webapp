<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM contact WHERE id = :id");
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header('Location: index.php');
        exit;
    } else {
        echo "Failed to delete message.";
    }
} else {
    header('Location: message.php');
    exit;
}
?>
