<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .product-form {
       max-width: 400px;
      margin: 50px auto;
      background-color: rgb(130, 167, 247);
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }
     .product-form:hover {
  background-color: rgb(47, 230, 184);
  font-size: 18px;
     }
    .form-title {
      text-align: center;
      margin-bottom: 20px;
      font-weight: bold;
      font-size: 24px;
    }
  </style>
</head>
<body>

<div class="product-form">
  <div class="form-title">Add New Product</div>
  <form action="addproduct.php" method="POST" enctype="multipart/form-data">
    
    <div class="mb-3">
      <label for="name" class="form-label">Product Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    
    <div class="mb-3">
      <label for="type" class="form-label">Product Type</label>
      <select class="form-select" id="type" name="type" required>
        <option value="">Select Type</option>
        <option value="Birthday">Birthday</option>
        <option value="Anniversary">Anniversary</option>
      </select>
    </div>
    
    <div class="mb-3">
      <label for="price" class="form-label">Product Price</label>
      <input type="number" class="form-control" id="price" name="price" required>
    </div>
    
    <div class="mb-3">
      <label for="desc" class="form-label">Product Description</label>
      <textarea class="form-control" id="desc" name="desc" rows="3" required></textarea>
    </div>
    
    <div class="mb-3">
      <label for="image" class="form-label">Product Image</label>
      <input class="form-control" type="file" id="image" name="image" accept="image/*" required>
    </div>
    
    <div class="text-center">
      <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
    </div>
  </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $type = $_POST['type'];
  $price = $_POST['price'];
  $desc = $_POST['desc'];
  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];

  $upload_dir = "uploads/C:\xampp\htdocs\training project";

  if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
  }

  $target_file = $upload_dir . basename($image);
  
  if (move_uploaded_file($tmp_name, $target_file)) {
    echo "<script>alert('Product added successfully!');</script>";
    
    $conn = new mysqli("localhost", "root", "", "florifydb",3308);
    $sql = "INSERT INTO products (name, type, price, description, image) 
            VALUES ('$name', '$type', '$price', '$desc', '$target_file')";
    $conn->query($sql);
    
  } else {
    echo "<script>alert('Failed to upload image.');</script>";
  }
}
?>
