<?php
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "medicine"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Simple validation
    if (empty($user) || empty($pass)) {
        echo "<div class='alert alert-danger' role='alert'>Both fields are required.</div>";
    } else {
        // Prepare and execute the query
        $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Set session variables if needed
            $_SESSION['username'] = $user;

            // Redirect to admin.php
            header("Location: admin.php");
            exit(); // Ensure no further code is executed
        } else {
            echo "<div class='alert alert-danger' role='alert'>Invalid username or password.</div>";
        }

        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 400px;
            width: 100%;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Admin Login</h2>
        <form method="post" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <br>
        <br>
      
<a href="admin_signin.php"> <button type="submit" class="btn btn-primary w-100">Sign Up</button>
</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
