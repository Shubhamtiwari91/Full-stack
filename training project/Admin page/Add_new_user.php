<?php include 'header.php' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 400px;
      margin: 50px auto;
      background-color: rgb(130, 167, 247);
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      border-radius: 10px;
    }
    .form-container:hover {
  background-color: rgb(47, 230, 184);
  font-size: 18px;
}
    .form-title {
      text-align: center;
      margin-bottom: 25px;
      font-weight: bold;
      color: #343a40;
    }
    .btn-custom {
      width: 100%;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2 class="form-title">Add New User</h2>
    <form action="adduser.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" required>
      </div>
      
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>
      
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required>
      </div>
      
      <div class="mb-3">
        <label for="cpassword" class="form-label">Confirm Password</label>
        <input type="password" name="cpassword" class="form-control" id="cpassword" required>
      </div>
      
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="tel" name="phone" class="form-control" id="phone" required>
      </div>
      
      <div class="mb-4">
        <label for="role" class="form-label">Role</label>
        <select name="role" class="form-select" id="role" required>
          <option value="">-- Select Role --</option>
          <option value="client">Client</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      
      <button type="submit" class="btn btn-primary btn-custom">Create Account</button>
    </form>
  </div>

</body>
</html>
