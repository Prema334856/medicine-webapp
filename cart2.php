<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - CoolGadgets</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <header class="py-3">
        <div class="container">
            <h1>Your Shopping Cart</h1>
        </div>
    </header>


    <section class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <!-- Cart Items List -->
                <div class="cart-item">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="img/product-2.webp" class="img-fluid" alt="Product">
                        </div>
                        <div class="col-md-5">
                            <h4>Ceevit</h4>
                            <p>৳ <span class="price">1.71</span></p>
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control quantity" value="1">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger remove">Remove</button>
                        </div>
                    </div>
                </div>
                <!-- Add more cart items here -->
            </div>

            <div class="col-md-4">
                <!-- Cart Summary -->
                <div class="border p-3 mb-3">
                    <h3 class="mb-3">Cart Summary</h3>
                    <div class="d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span class="subtotal">৳ 1.71 </span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Tax</span>
                        <span class="tax">৳ .30</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Total</span>
                        <span class="total">৳ ৳ 1.71 </span>
                    </div>
                    <a href="gw.php"><button class="btn btn-warning w-100 mt-3">Proceed to Checkout</button></a><br><br><br>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Get the elements
        const quantities = document.querySelectorAll('.quantity');
        const prices = document.querySelectorAll('.price');
        const subtotals = document.querySelectorAll('.subtotal');
        const taxes = document.querySelectorAll('.tax');
        const totals = document.querySelectorAll('.total');

        // Add event listener to each quantity input
        quantities.forEach((quantity, index) => {
            quantity.addEventListener('input', () => {
                // Calculate subtotal
                const price = parseFloat(prices[index].textContent);
                const qty = parseInt(quantity.value);
                const subtotal = price * qty;

                // Calculate tax
                const tax = 0.30 * qty; // Just a sample tax calculation

                // Calculate total
                const total = subtotal + tax;

                // Update UI
                subtotals[index].textContent = `৳ ${subtotal.toFixed(2)}`;
                taxes[index].textContent = `৳ ${tax.toFixed(2)}`;
                totals[index].textContent = `৳ ${total.toFixed(2)}`;
            });
        });
    </script>
    <script>
        // Function to handle removal of cart item
        function removeCartItem(button) {
            // Find the parent cart-item element
            const cartItem = button.closest('.cart-item');
            // Remove the cart item from the DOM
            cartItem.remove();
            // Check if it's the last item
            const cartItems = document.querySelectorAll('.cart-item');
            if (cartItems.length === 0) {
                // If no items left, remove cart summary
                document.querySelector('.cart-summary').remove();
            }
            // Update cart summary after removal
            updateCartSummary();
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Get the elements
            const quantities = document.querySelectorAll('.quantity');
            const prices = document.querySelectorAll('.price');
            const subtotals = document.querySelectorAll('.subtotal');
            const taxes = document.querySelectorAll('.tax');
            const totals = document.querySelectorAll('.total');
            const removeButtons = document.querySelectorAll('.remove');

            // Add event listener to each quantity input
            quantities.forEach((quantity, index) => {
                quantity.addEventListener('input', () => {
                    // Calculate subtotal
                    const price = parseFloat(prices[index].textContent);
                    const qty = parseInt(quantity.value);
                    const subtotal = price * qty;

                    // Calculate tax
                    const tax = 0.30 * qty; // Just a sample tax calculation

                    // Calculate total
                    const total = subtotal + tax;

                    // Update UI
                    subtotals[index].textContent = `৳ ${subtotal.toFixed(2)}`;
                    taxes[index].textContent = `৳ ${tax.toFixed(2)}`;
                    totals[index].textContent = `৳ ${total.toFixed(2)}`;

                    // Update cart summary after quantity change
                    updateCartSummary();
                });
            });

            // Add event listener to each remove button
            removeButtons.forEach(removeButton => {
                removeButton.addEventListener('click', () => {
                    removeCartItem(removeButton);
                });
            });

            // Function to update the cart summary
            function updateCartSummary() {
                // Implement your logic to update the cart summary here
            }
        });
    </script>



    <footer class="bg-dark text-light py-4 ">
        <div class="text-center">&copy; Copyright 2023 - prema</div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-PPmltI4DzdaNfQz9JdGpI3TZfvlw7irzjBn3wKgNmCUp0auj/uTPmSy7Ou1EP9J4" crossorigin="anonymous"></script>

</html>