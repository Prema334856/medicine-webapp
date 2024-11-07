<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (:name, :email, :message)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    if ($stmt->execute()) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                        <li class="nav-item"><a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>
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
    <!-- Contact Us Section -->
    <section id="contact" class="container my-5">
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="text-center">Contact Us</h2>
            </div>
            <div class="col-md-8 mx-auto border rounded p-4 shadow-sm">
                <!-- Assuming you might want a form for the users to fill out -->
                <form action="store.php" method="POST">
                    <div class="mb-3">
                        <label for="contactName" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="contactName" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="contactEmail" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="contactMessage" class="form-label">Message</label>
                        <textarea class="form-control " name="message" id="contactMessage" rows="3" placeholder="Your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <!--- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/logo.png" alt="CoolGadgets Logo" class="mb-2" width="100">
                    <p>Shop Trusted Brands<br>for Your Health Needs!</p>
                </div>
                <div class="col-md-3">
                    <h3>Navigation</h3>
                    <ul class="list-unstyled">
                        <li><a href="/" class="text-decoration-none text-light">Home</a></li>
                        <li><a href="products.html" class="text-decoration-none text-light">Products</a></li>
                        <li><a href="#contact" class="text-decoration-none text-light">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Useful Links</h3>
                    <ul class="list-unstyled">

                        <li><a href="#" class="text-decoration-none text-light">Return Policy</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Join Affiliate</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Follow Us</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none text-light">Facebook</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Twitter</a></li>
                        <li><a href="#" class="text-decoration-none text-light">Instagram</a></li>
                        <li><a href="#" class="text-decoration-none text-light">YouTube</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">&copy; Copyright 2023 - prema</div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>