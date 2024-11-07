<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bKash PGW</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <title>Medicine Ecommerce Website</title>
</head>
<body>
    <div class="container">
        <form action="purchase.php" method="POST">
            <div class="row">
                <div class="col">
                    <h3 class="title">Order</h3>

                    <div class="inputBox">
                        <label for="product">Product Name:</label>
                        <input type="text" id="product" name="product" placeholder="Enter product name" required>
                    </div>

                    <div class="inputBox">
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                    </div>

                    <div class="inputBox">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Enter email address" required>
                    </div>

                    <div class="inputBox">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" placeholder="Enter address" required>
                    </div>

                    <div class="inputBox">
                        <label for="number">Phone number:</label>
                        <input type="number" id="number" name="number" placeholder="Enter phone number" required>
                    </div>

                    <button type="submit" class="submit_btn">Proceed to Checkout</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
