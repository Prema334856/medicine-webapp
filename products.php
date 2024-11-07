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
                    <img src="img/logo.png" alt="CoolGadgets Logo" width="50px">
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

    <!--- Products Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Our Products</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Product 1 -->
            <div class="col">
                <div class="card h-100 " id="product-1">
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
                <div class="card h-100" id="product-2">
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
                <div class="card h-100" id="product-3">
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
                <div class="card h-100" id="product-4">
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
            <div class="col">
                <div class="card h-100" id="product-5">
                    <img src="img/product-5.webp" class="card-img-top" alt="Product" height="150px">
                    <div class="card-body">
                        <div class="d-flex row-cols-md-2">
                            <h5 class="card-title">Pantonix </h5>
                            <p class=""> 20 mg</p>
                        </div>
                        <p class="card-sub-title">Pantoprazole.</p>
                        <h6 class="card-title">Incepta Pharmaceuticals Ltd.</h6>
                        <p class="card-text">৳ 6.30</p>
                        <form action="cart5.php" method="GET">
                            <input type="hidden" name="product" value="  Sergel">
                            <input type="hidden" name="price" value=" 6.30">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" id="product-6">
                    <img src="img/product-6.webp" class="card-img-top" alt="Product" height="150px">
                    <div class="card-body">
                        <div class="d-flex row-cols-md-2">
                            <h5 class="card-title">Fexo </h5>
                            <p class=""> 120 mg</p>
                        </div>
                        <p class="card-sub-title">Fexofenadine Hydrochloride.</p>
                        <h6 class="card-title">Square Pharmaceuticals PLC.</h6>
                        <p class="card-text">৳ 8.10</p>
                        <form action="cart6.php" method="GET">
                            <input type="hidden" name="product" value="Ceevit">
                            <input type="hidden" name="price" value="1.71">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" id="product-7">
                    <img src="img/product-7.webp" class="card-img-top" alt="Product" height="150px">
                    <div class="card-body">
                        <div class="d-flex row-cols-md-2">
                            <h5 class="card-title">Neuro-B</h5>
                            <p class=""> </p>
                        </div>
                        <p class="card-sub-title">Vitamin B1 + B6 + B12.</p>
                        <h6 class="card-title"> Square Pharmaceuticals PLC.</h6>
                        <p class="card-text">৳ 270.00
                        </p>
                        <form action="cart7.php" method="GET">
                            <input type="hidden" name="product" value=" ">
                            <input type="hidden" name="price" value="">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" id="product-8">
                    <img src="img/product-8.webp" class="card-img-top" alt="Product" height="150px">
                    <div class="card-body">
                        <div class="d-flex row-cols-md-2">
                            <h5 class="card-title">Maxpro </h5>
                            <p class=""> 20 mg</p>
                        </div>
                        <p class="card-sub-title">Esomeprazole Magnesium Trihydrate.</p>
                        <h6 class="card-title">Renata Limited</h6>
                        <p class="card-text">৳ 6.30</p>
                        <form action="cart8.php" method="GET">
                            <input type="hidden" name="product" value="Facial Recognition Home Hub">
                            <input type="hidden" name="price" value="$199.00">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" id="product-9">
                    <img src="img/product-9.webp" class="card-img-top" alt="Product" height="150px">
                    <div class="card-body">
                        <div class="d-flex row-cols-md-2">
                            <h5 class="card-title">Montair </h5>
                            <p class="">10 mg</p>
                        </div>
                        <p class="card-sub-title">Montelukast.</p>
                        <h6 class="card-title">Incepta Pharmaceuticals Ltd.</h6>
                        <p class="card-text">৳ 157.50</p>
                        <form action="cart9.php" method="GET">
                            <input type="hidden" name="product" value="  Sergel">
                            <input type="hidden" name="price" value=" 6.30">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" id="product-10">
                    <img src="img/product-10.webp" class="card-img-top" alt="Product" height="150px">
                    <div class="card-body">
                        <div class="d-flex row-cols-md-2">
                            <h5 class="card-title">Napa Extend </h5>
                            <p class=""> 665 mg</p>
                        </div>
                        <p class="card-sub-title">Paracetamol.</p>
                        <h6 class="card-title">Beximco Pharmaceuticals Ltd.</h6>
                        <p class="card-text">৳ 1.80</p>
                        <form action="cart10.php" method="GET">
                            <input type="hidden" name="product" value="Ceevit">
                            <input type="hidden" name="price" value="1.71">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" id="product-11">
                    <img src="img/product-11.webp" class="card-img-top" alt="Product" height="150px">
                    <div class="card-body">
                        <div class="d-flex row-cols-md-2">
                            <h5 class="card-title">Finix</h5>
                            <p class=""> 20 mg</p>
                        </div>
                        <p class="card-sub-title">Rabeprazole Sodium.</p>
                        <h6 class="card-title"> Opsonin Pharma Ltd.</h6>
                        <p class="card-text">৳ 126.00</p>
                        <form action="cart11.php" method="GET">
                            <input type="hidden" name="product" value=" ">
                            <input type="hidden" name="price" value="">
                            <input type="hidden" name="quantity" value="1">
                            <input type="submit" class="btn btn-warning" value="Add to Cart">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" id="product-12">
                    <img src="img/product-12.webp" class="card-img-top" alt="Product" height="150px">
                    <div class="card-body">
                        <div class="d-flex row-cols-md-2">
                            <h5 class="card-title">Provair </h5>
                            <p class=""> 10 mg</p>
                        </div>
                        <p class="card-sub-title">Montelukast.</p>
                        <h6 class="card-title">Unimed Unihealth MFG. Ltd.</h6>
                        <p class="card-text">৳ 157.50</p>
                        <form action="cart12.php" method="GET">
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
    <!--- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/logo.png" alt="CoolGadgets Logo" class="mb-2" width="100">
                    <p>Discover the Future <br> With CoolGadgets!</p>
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
            <div class="text-center">&copy; Copyright 2023 - Prema</div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>