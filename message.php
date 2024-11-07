<?php
require 'db.php';

$stmt = $conn->query("SELECT * FROM contact ORDER BY created_at DESC");
$messages = $stmt->fetchAll();
?>



</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Responsiive Admin Dashboard | Spring Store</title>
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
                <a href="message.php"class="active">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Contact</span>
                </a>
            </li>
            <li>
                <a href="order.php">
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
           
              <h2>Messages</h2>
              
<div class="container my-4">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $message) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($message['name']); ?></td>
                    <td><?php echo htmlspecialchars($message['email']); ?></td>
                    <td><?php echo htmlspecialchars($message['message']); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $message['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="delete.php?id=<?php echo $message['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php } ?>
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