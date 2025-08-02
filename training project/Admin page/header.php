<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar-brand, .nav-link, .dropdown-toggle {
      color: white !important;
    }
   
  </style>
</head>
<body>
<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Admin Panel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mx-auto">

          <!-- Dashboard -->
          <li class="nav-item">
            <a class="nav-link" href="dasboard.php">Dashboard</a>
          </li>

          <!-- Users Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="usersDropdown" role="button" data-bs-toggle="dropdown">
              Users
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Add_new_user.php">Add New User</a></li>
              <li><a class="dropdown-item" href="view_user.php">View All Users</a></li>
            </ul>
          </li>

          <!-- Products Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-bs-toggle="dropdown">
              Products
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Add_new_product.php">Add New Product</a></li>
              <li><a class="dropdown-item" href="view_product.php">View All Products</a></li>
            </ul>
          </li>

          <!-- Orders -->
          <li class="nav-item">
            <a class="nav-link" href="view_order.php">Orders</a>
          </li>

          <!-- Logout -->
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  
</body>
</html>