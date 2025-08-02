<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Floriffic Flowers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .carousel-item img {
      height: 250px;
      object-fit: cover;
      width: 50%;
    }
    .card img {
      height: 200px;
      object-fit: cover;
    }
     </style>
</head>
<body>
    
    
   <div class=contaner>
<!-- Image Slider -->
<div id="imageSlider" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="2"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="flower.jpg" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>First Slide</h5>
        <p>Description for slide 1.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="flower2.jpg" class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second Slide</h5>
        <p>Description for slide 2.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="flower1.jpg" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third Slide</h5>
        <p>Description for slide 3.</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#imageSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#imageSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div class="container py-5">
 
  <div class="row g-4">
    
    <!-- Card 1 -->
    <div class="col-md-4">
      <div class="card">
        <img src="rose card 1.jpg" class="card-img-top" alt="Rose Bouquet">
        <div class="card-body">
          <h5 class="card-title">Rose Bouquet</h5>
          <p class="card-text">A stunning bouquet of red and pink roses, perfect for romantic occasions and anniversaries.</p>
          <a href="#" class="btn btn-success">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4">
      <div class="card">
        <img src="tulip.jpg" class="card-img-top" alt="Tulip Arrangement">
        <div class="card-body">
          <h5 class="card-title">Tulip Arrangement</h5>
          <p class="card-text">Brighten someone’s day with our colorful tulip arrangement, great for birthdays and springtime.</p>
          <a href="#" class="btn btn-success">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Card 3  -->
    <div class="col-md-4">
      <div class="card">
        <img src="orchid.jpg" class="card-img-top" alt="Orchid Elegance">
        <div class="card-body">
          <h5 class="card-title">Orchid Elegance</h5>
          <p class="card-text">Elegant and exotic orchids arranged in a classy vase, perfect for formal gifts or office decor.</p>
          <a href="#" class="btn btn-success">Buy Now</a>
        </div>
      </div>
    </div>
    </div>
</div>
<?php include 'footer.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
