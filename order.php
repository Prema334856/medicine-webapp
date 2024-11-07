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

// Delete operation
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    
    $stmt = $conn->prepare("DELETE FROM `order` WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    
    if ($stmt->execute()) {
        echo "<div class='alert alert-success' role='alert'>Record deleted successfully!</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error deleting record: " . $conn->error . "</div>";
    }
    
    $stmt->close();
}

// Fetch data
$sql = "SELECT * FROM `order`";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Responsive Admin Dashboard | Spring Store</title>
    <link rel="stylesheet" href="style2.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-bank'></i>
            <span class="logo_name"> Admin </span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php" >
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="message.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Contact</span>
                </a>
            </li>
            <li>
                <a href="order.php" class="active">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Order list</span>
                </a>
            </li>
            <li class="log_out">
                <a href="index.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard"></span>
            </div>
            <div class="search-box">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250" style="width: 250px;">
            </div>
            <div class="home">
                <a href="home.php"><i class='bx bxs-home'>
                        <span class="links_name">Home</span></i></a>
            </div>
            <div class="profile-details">
                <img src="images/profile.jpg" alt="">
                <span class="admin_name">Admin</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>

        <div class="home-content">
            <h2>Order List</h2>
            <div class="container my-4">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Product</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['product']) . "</td>";
                                    echo "<td>
                                            <a href='order_update.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a>
                                            <a href='order.php?delete_id=" . $row['id'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
                                          </td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No records found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>
</body>
</html>
