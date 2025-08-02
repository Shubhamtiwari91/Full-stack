<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Floriffic Flowers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
<style>
    body {
      background-color: #f8f9fa;
    }

    .contact-container {
      padding: 50px 20px;
    }

    .contact-form {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    .contact-info {
      background-color: #0d6efd;
      color: #fff;
      padding: 30px;
      border-radius: 15px;
    }

    .contact-info h4 {
      margin-bottom: 20px;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #0d6efd;
    }
  </style>
</head>
<body>

<div class="container contact-container">
  <div class="row g-4">
    <!-- Contact Info Section -->
    <div class="col-md-5 contact-info">
      <h4>Contact Information</h4>
      <p><strong>Address:</strong> 123 Main Street, City, Country</p>
      <p><strong>Email:</strong> contact@example.com</p>
      <p><strong>Phone:</strong> +91 9876543210</p>
      <p><strong>Hours:</strong> Mon - Fri (9am - 6pm)</p>
    </div>

    <!-- Contact Form Section -->
    <div class="col-md-7">
      <div class="contact-form">
        <h4 class="mb-4">Get in Touch</h4>
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Type your message here..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Optional: Google Maps -->
  <div class="row mt-5">
    <div class="col-12">
      <h5 class="mb-3">Our Location</h5>
      <div class="ratio ratio-16x9">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0196535047125!2d144.96305791574758!3d-37.81410797975173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f3a2f17b%3A0x2b0f4a716293d5f6!2sMelbourne%20CBD!5e0!3m2!1sen!2sau!4v1600000000000"
          width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>