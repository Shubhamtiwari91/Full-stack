<?php include 'header.php';?>

<?php 
$msg="";
if(isset($_POST['btn_register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $conn=@mysqli_connect("localhost","root","","florifydb",3308);
     if($conn == null){
        $msg="connection fail";
      }
      else{
        $qry="insert into users(name,email,phone,passward,role) values ('$name','$email',$phone,'$password','client')";
           mysqli_query($conn,$qry);
         if(mysqli_affected_rows($conn)>0)
           $msg="<h2>Account successfuly</h2>";
          else
            $msg="error";
            mysqli_close($conn);
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .register-box {
            max-width: 500px;
            margin: 80px auto;
            padding: 30px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
        }

        .register-box h2 {
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .form-control:focus {
            border-color: #6c63ff;
            box-shadow: 0 0 0 0.2rem rgba(108, 99, 255, 0.25);
        }

        .btn-primary {
            background-color: #6c63ff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #5548c8;
        }
    </style>
</head>
<body><h1>
<?php $msg; ?>
</h1>
<div class="container">
    <div class="register-box shadow">
        
        <h2 class="text-center">Create Account</h2>
        <form  method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <div class="mb-3">
                <label for="confirm" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirm" id="confirm" required>
            </div>

            <button type="submit" name="btn_register" class="btn btn-primary w-100">Register</button>
        </form>
    </div>
</div>
<?php include 'footer.php';?>
</body>
</html>