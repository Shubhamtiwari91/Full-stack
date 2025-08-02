<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Floriffic Flowers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar-brand img {
      height: 60px;
      width: auto;
      border-radius:20%
    }
    .navbar {
      background-color: #f8f9fa;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
   /* .banner {
      height: 250px;
      background: #ee0a0a;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 2rem;
      font-weight: bold;
    }
     .carousel-item img {
      height: 250px;
      object-fit: cover;
      width: 50%;
    }
    
    
    .card img {
      height: 200px;
      object-fit: cover;
    }
    */
  </style>
</head>
<body>

<!-- Header with Logo -->
<div class="container-fluit">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="flower shop.jpg" alt="Floriffic Flowers Logo">Floriffic Flowers
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">occasions </a>
            <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="anniversary.php">anniversary</a></li>
              <li><a class="dropdown-item" href="Birthday.php">Birthday</a></li>
            
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">My Account</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><a class="dropdown-item" href="registion.php">Register</a></li>
            <li><a class="dropdown-item" href="view_order.php">View Orders</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="Mycard.php">Mycard</a></li>
      </ul>
    </div>
  </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
