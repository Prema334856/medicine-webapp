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
            <nav class="navbar navbar-expand navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="img/logo.png" alt="Logo" width="50px">
                </a>
                <h3>Save Life</h3>
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

    <!--- Banner -->
    <section class="container-fluid">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center justify-content-center bg-info text-dark p-5">
                <div>
                    <h1>Shop Trusted Brands for Your Health Needs</h1>
                    <p class="mb-4"><em>Explore our extensive range of premium-quality health products, carefully
                            curated to support your journey towards a happier, healthier life. From vitamins and
                            supplements to personal care items and medical essentials, we've got everything you need
                            conveniently available at your fingertips. With fast delivery and easy returns, shopping
                            with us is not only convenient but also worry-free. Join our community of health-conscious
                            individuals today and start investing in your wellbeing with confidence. Your health
                            deserves the best, and we're here to provide it. Shop now and embark on your path to optimal
                            wellness!</em></p>
                    <a href="products.php" class="btn btn-light btn-lg">Shop Now &#10142;</a>
                </div>
            </div>
            <div class="col-md-6 banner-image"></div>
        </div>
    </section>

    <!--- Featured Products -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Featured Products</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="img/product-1.webp" class="card-img-top" alt="Product" height="150px">
                    <div class="card-body">
                        <div class="d-flex row-cols-md-2">
                            <h5 class="card-title">Sergel </h5>
                            <p class=""> 20 mg</p>
                        </div>
                        <p class="card-sub-title">Esomeprazole Magnesium Trihydrate.</p>
                        <h6 class="card-title">Healthcare Pharmacuticals Ltd.</h6>
                        <p class="card-text">৳ 6.30</p>
                        <form action="cart1.php" method="GET">
                            <input type="hidden" name="product" value="  Sergel">
                            <input type="hidden" name="price" value=" 6.30">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/product-2.webp" class="card-img-top" alt="Product" height="150px">
                    <div class="card-body">
                        <div class="d-flex row-cols-md-2">
                            <h5 class="card-title">Ceevit </h5>
                            <p class=""> 250 mg</p>
                        </div>
                        <p class="card-sub-title">Vitamin C [Ascorbic acid].</p>
                        <h6 class="card-title">Square Pharmaceuticals PLC.</h6>
                        <p class="card-text">৳ 1.71</p>
                        <form action="cart2.php" method="GET">
                            <input type="hidden" name="product" value="Ceevit">
                            <input type="hidden" name="price" value="1.71">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/product-3.webp" class="card-img-top" alt="Product" height="150px">
                    <div class="card-body">
                        <div class="d-flex row-cols-md-2">
                            <h5 class="card-title">Monas 10 </h5>
                            <p class=""> 10 mg</p>
                        </div>
                        <p class="card-sub-title">Montelukast.</p>
                        <h6 class="card-title"> ACME Laboratories Ltd.</h6>
                        <p class="card-text">৳ 6.30</p>
                        <form action="cart3.php" method="GET">
                            <input type="hidden" name="product" value=" ">
                            <input type="hidden" name="price" value="">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/product-4.webp" class="card-img-top" alt="Product" height="150px">
                    <div class="card-body">
                        <div class="d-flex row-cols-md-2">
                            <h5 class="card-title">Napa </h5>
                            <p class=""> 500 mg</p>
                        </div>
                        <p class="card-sub-title">Paracetamol.</p>
                        <h6 class="card-title">Beximco Pharmaceuticals Ltd.</h6>
                        <p class="card-text">৳ 1.08</p>
                        <form action="cart4.php" method="GET">
                            <input type="hidden" name="product" value="Facial Recognition Home Hub">
                            <input type="hidden" name="price" value="$199.00">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!--- New Product -->
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <img src="img/new-product.png" class="img-fluid " alt="New Product">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <p>Our Newest Product Offer</p>
                    <h1>Thermometer</h1>
                    <small>TDigital Thermometer </small>
                    <h6>
                        Mundipharma (BD) Pvt. Ltd.</h6>
                    <p class="card-text">৳ 100.00</p>
                    <br>
                    <form action="cart.php" method="GET">
                        <input type="hidden" name="product" value="Smart Ring">
                        <input type="hidden" name="price" value="199.00">
                        <input type="hidden" name="quantity" value="1">
                        <input type="submit" class="btn btn-warning" value="Add to Cart">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>

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
                        <input type="text" name="name" class="form-control" id="contactName" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="contactEmail" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="contactMessage" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="contactMessage" rows="3" placeholder="Your message"></textarea>
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
                        <li><a href="products.php" class="text-decoration-none text-light">Products</a></li>
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
            <div class="text-center">&copy; Copyright 2024 - prema</div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>