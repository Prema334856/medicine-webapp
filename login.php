<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost"; // Change this to your database server name
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "medicine"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database to check if the user exists
    $sql = "SELECT id, username, email, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Password is correct, set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            // Redirect to the homepage or any other desired page
            header("Location: home.php");
            exit();
        } else {
            // Invalid password
            $error_message = "Invalid email or password.";
        }
    } else {
        // User not found
        $error_message = "User not found.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

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
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="productsHome.php">Products</a></li>
            <li class="nav-item"><a class="nav-link" href="login.php"><i class="fas fa-shopping-cart"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="adminLogin.php">Admin</a></li> -->
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <section class="vh-100">
    <br>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Login</h2>
                <?php if (isset($error_message)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    
    <div><br><br><br>
      <footer class="bg-dark text-light py-4 ">
        <div class="text-center">&copy; Copyright 2023 - prema</div>
      </footer>
    </div>
  </section>

</body>

</html>