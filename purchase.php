<?php
// Database connection details
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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $product = $_POST['product'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $number = $_POST['number'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO `order` (product, name, email, address, phone) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $product, $name, $email, $address, $number);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Thank you, your order has been received!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
}

$conn->close();
?>


<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <title>Medicine Ecommerce Website</title>
</head>

<body>
    <header class="bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="img/logo.png" alt="Logo" width="50px">
                </a>  <h3>Save Life</h3>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="cart.php"><i
                                    class="fas fa-shopping-cart mt-1"></i></a></li>
                                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-sm-none d-lg-inline-block"> User</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-title p-1">Logged in 5 min ago</div>
                                <div class="dropdown-divider"></div>
                                <a href="index.php" class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="boddy">
        <div class="card top"><br><br>
            <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                <i class="checkmark ii">✓</i>
            </div>
            <h1 class="h">Success</h1>
            <p>We received your purchase request;<br /> we'll be in touch shortly!</p><br><br><br><br>
        </div>
    </div>
    <footer class="bg-dark text-light py-4 ">
        <div class="text-center">&copy; Copyright 2023 - prema</div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>