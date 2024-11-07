<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicine";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$order = [];
$updateSuccess = false;

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $product = $conn->real_escape_string($_POST['product']);

    // Update query
    $stmt = $conn->prepare("UPDATE `order` SET name = ?, email = ?, address = ?, phone = ?, product = ? WHERE id = ?");
    $stmt->bind_param("sssssi", $name, $email, $address, $phone, $product, $id);

    if ($stmt->execute()) {
        $updateSuccess = true;
        // Redirect after successful update
        header("Location: order.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
}

// Fetch data for the specific order
if (isset($_GET['id']) && !$updateSuccess) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM `order` WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $order = $result->fetch_assoc();
    } else {
        echo "No record found";
        exit;
    }
    
    $stmt->close();
} else if (!$updateSuccess) {
    echo "No ID specified";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order | Spring Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Order</h2>
        <form action="order_update.php?id=<?php echo htmlspecialchars($order['id']); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($order['id']); ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($order['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($order['email']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required><?php echo htmlspecialchars($order['address']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($order['phone']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="product" class="form-label">Product</label>
                <input type="text" class="form-control" id="product" name="product" value="<?php echo htmlspecialchars($order['product']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Order</button>
            <a href="order.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
