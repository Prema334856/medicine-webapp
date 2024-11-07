<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM contact WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $message = $stmt->fetch();

    if (!$message) {
        echo "Message not found.";
        exit;
    }
} else {
    header('Location: message.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message_content = $_POST['message'];

    $stmt = $conn->prepare("UPDATE contact SET name = :name, email = :email, message = :message WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message_content);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header('Location: message.php');
        exit;
    } else {
        echo "Failed to update message.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Message</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<body>


<div class="container my-4">
    <form action="edit.php?id=<?php echo $id; ?>" method="POST" class="p-4 border rounded">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($message['name']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($message['email']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="5" required><?php echo htmlspecialchars($message['message']); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
