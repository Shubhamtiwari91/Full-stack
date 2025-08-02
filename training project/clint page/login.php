<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #abe939ff;
        }
        .login-container {
            margin-top: 100px;
        }
        .login-card {
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(90, 238, 74, 0.2);
            background-color: #fff;
        }
        .form-control:focus {
            box-shadow:normalizer_get_raw_decomposition;
        }
       
    </style>
</head>
<body>

<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="login-card">
                <h3 class="text-center mb-4">Login</h3>
                <form method="POST" action="login.php">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        // Dummy login validation
                        if ($email == "admin@example.com" && $password == "password123") {
                            echo "<div class='alert alert-success'>Login successful!</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Invalid email or password</div>";
                        }
                    }
                    ?>
                    <div class="mb-3">
                        <label type="username" class="form-label">user name</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    <p class="text-center mt-3">Don't have an account? <a href="register.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
