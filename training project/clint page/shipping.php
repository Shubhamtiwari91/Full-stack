<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shipping Page</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .shipping-form {
      max-width: 600px;
      margin: 50px auto;
      padding: 30px;
      border: 1px solid #75e93f;
      border-radius: 15px;
      background-color: #7deee4;
      box-shadow: 0 0 15px rgba(44, 236, 26, 0.1);
    }
    .shipping-form:hover {
  background-color: rgb(243, 243, 234);
  font-size: 18px;
}

    .shipping-form h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #4e51f8;
    }

    .form-label {
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="shipping-form">
      <h2>Shipping Page</h2>
      <form action="shipping.php" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="mb-3">
          <label for="address" class="form-label">Address</label>
          <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>

        <div class="mb-3">
          <label for="payment" class="form-label">Payment Method</label>
          <select class="form-select" id="payment" name="payment" required>
            <option value="">Select Payment Method</option>
            <option value="cod">Cash on Delivery</option>
            <option value="card">Online Payment</option>
            
          </select>
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-danger">place order</button>
        </div>
      </form>
    </div>
  </div>
<?php include 'footer.php';?>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
