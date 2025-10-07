<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>
    <!-- header -->
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm fixed-top">
  <div class="container">
    <!-- Brand / Logo -->
    <a class="navbar-brand fw-bold text-light" href="#">
      <img src="image/logo.png" alt="Logo" height="60" class="me-2 rounded-circle">
      TravelMate
    </a>

    <!-- Navbar Toggle (for mobile) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTravel"
      aria-controls="navbarTravel" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarTravel">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Destinations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Tours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('about')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Contact</a>
        </li>
      </ul>

      <!-- Search Form -->
      <form class="d-flex ms-lg-3">
        <input class="form-control me-2" type="search" placeholder="Search places..." aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    

    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/carousel1.jpeg" class="d-block w-100" alt="..." style="height: 600px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/carousel2.jpg" class="d-block w-100" alt="..." style="height: 600px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/carousel.webp" class="d-block w-100" alt="..." style="height: 600px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <!-- card -->

  <!-- ======= Popular Packages Section ======= -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Popular Travel Packages</h2>

    <div class="row g-4">
      <!-- ===== Row 1 ===== -->
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-200 shadow-sm">
         <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" 
     class="card-img-top" alt="Beach Paradise">

          <!-- <img src="images/package1.jpg" class="card-img-top" alt="Beach Paradise"> -->
          <div class="card-body">
            <h5 class="card-title fw-bold">🏖️ Beach Paradise</h5>
            <p class="card-text">Relax at sunny beaches and enjoy tropical vibes.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-200 shadow-sm">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" 
     class="card-img-top" alt="Mountain Adventure">

          <!-- <img src="images/package2.jpg" class="card-img-top" alt="Mountain Adventure"> -->
          <div class="card-body">
            <h5 class="card-title fw-bold">🏔️ Mountain Adventure</h5>
            <p class="card-text">Explore scenic mountain trails and waterfalls.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-200 shadow-sm">
        <img src="https://images.unsplash.com/photo-1494526585095-c41746248156"
     class="card-img-top" alt="City Tour">

          <!-- <img src="images/package3.jpg" class="card-img-top" alt="City Tour"> -->
          <div class="card-body">
            <h5 class="card-title fw-bold">🏙️ City Tour</h5>
            <p class="card-text">Experience vibrant city life and famous landmarks.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-200 shadow-sm">
        <img src="https://images.unsplash.com/photo-1508672019048-805c876b67e2"
     class="card-img-top" alt="Safari Journey">

          <!-- <img src="images/package4.jpg" class="card-img-top" alt="Safari Journey"> -->
          <div class="card-body">
            <h5 class="card-title fw-bold">🐘 Safari Journey</h5>
            <p class="card-text">Witness wildlife up close with expert guides.</p>
          </div>
        </div>
      </div>

        <!-- ===== Row 2 ===== -->

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-200 shadow-sm">
        <img src="https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba?auto=format&fit=crop&w=1200&q=80"
     class="card-img-top"
     alt="Cultural Escape"
     style="height:180px; object-fit:cover;">


          <!-- <img src="images/package5.jpg" class="card-img-top" alt="Cultural Escape"> -->
          <div class="card-body">
            <h5 class="card-title fw-bold">🕌 Cultural Escape</h5>
            <p class="card-text">Discover history, art, and traditions of local culture.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-200 shadow-sm">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80"
     class="card-img-top" alt="Desert Safari" style="height:180px; object-fit:cover;">

          <!-- <img src="images/package6.jpg" class="card-img-top" alt="Desert Safari"> -->
          <div class="card-body">
            <h5 class="card-title fw-bold">🏜️ Desert Safari</h5>
            <p class="card-text">Ride through the golden dunes and enjoy a desert sunset.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-200 shadow-sm">
        <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=80"
     class="card-img-top" alt="Island Retreat" style="height:180px; object-fit:cover;">

          <!-- <img src="images/package7.jpg" class="card-img-top" alt="Island Retreat"> -->
          <div class="card-body">
            <h5 class="card-title fw-bold">🏝️ Island Retreat</h5>
            <p class="card-text">Spend peaceful days on private tropical islands.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-200 shadow-sm">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80"
     class="card-img-top" alt="Forest Camp" style="height:180px; object-fit:cover;">

          <!-- <img src="images/package8.jpg" class="card-img-top" alt="Forest Camp"> -->
          <div class="card-body">
            <h5 class="card-title fw-bold">🌲 Forest Camp</h5>
            <p class="card-text">Camp in lush green forests with guided hiking tours.</p>
          </div>
        </div>
      </div>

    <!-- ===== Row 3 ===== -->

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-200 shadow-sm">
        <img src="image/winter_card.jpeg"
     class="card-img-top" alt="Winter Wonderland"
     style="height:180px; object-fit:cover;">


          <!-- <img src="images/package9.jpg" class="card-img-top" alt="Winter Wonderland"> -->
          <div class="card-body">
            <h5 class="card-title fw-bold">❄️ Winter Wonderland</h5>
            <p class="card-text">Enjoy snow, skiing, and cozy mountain cabins.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-200 shadow-sm">
        <img src="image/romantic_card.jpeg"
     class="card-img-top" alt="Romantic Escape"
     style="height:180px; object-fit:cover;">

          <!-- <img src="images/package10.jpg" class="card-img-top" alt="Romantic Escape"> -->
          <div class="card-body">
            <h5 class="card-title fw-bold">💞 Romantic Escape</h5>
            <p class="card-text">Unwind with your loved one in stunning resorts.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-200 shadow-sm">
        <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?auto=format&fit=crop&w=1200&q=80"
     class="card-img-top" alt="Adventure Trek" style="height:180px; object-fit:cover;">

          <!-- <img src="images/package10.jpg" class="card-img-top" alt="Romantic Escape"> -->
          <div class="card-body">
            <h5 class="card-title fw-bold">✈️ Adventure Trek</h5>
            <p class="card-text">Unwind with your loved one in stunning resorts.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="card h-200 shadow-sm">
        <img src="https://images.unsplash.com/photo-1528909514045-2fa4ac7a08ba?auto=format&fit=crop&w=1200&q=80"
     class="card-img-top" alt="Historical Tour" style="height:180px; object-fit:cover;">

          <!-- <img src="images/package10.jpg" class="card-img-top" alt="Romantic Escape"> -->
          <div class="card-body">
            <h5 class="card-title fw-bold">🏰 Historical Tour</h5>
            <p class="card-text">Unwind with your loved one in stunning resorts.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- ======= Footer Section ======= -->
<footer class="bg-dark text-light pt-5 pb-4 mt-5">
  <div class="container text-md-start text-center">

    <div class="row text-md-start text-center">
      <!-- Brand / About -->
      <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
        <h5 class="text-uppercase fw-bold mb-3">
          <img src="images/logo.png" alt="Logo" height="40" class="me-2">
          TravelMate
        </h5>
        <p>
          Explore the world with TravelMate. We bring you the best tour packages, destinations,
          and travel experiences at unbeatable prices.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Quick Links</h6>
        <p><a href="#" class="text-light text-decoration-none">Home</a></p>
        <p><a href="#" class="text-light text-decoration-none">Destinations</a></p>
        <p><a href="#" class="text-light text-decoration-none">Packages</a></p>
        <p><a href="#" class="text-light text-decoration-none">Contact</a></p>
      </div>

      <!-- Support -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Support</h6>
        <p><a href="#" class="text-light text-decoration-none">FAQ</a></p>
        <p><a href="#" class="text-light text-decoration-none">Terms & Conditions</a></p>
        <p><a href="#" class="text-light text-decoration-none">Privacy Policy</a></p>
        <p><a href="#" class="text-light text-decoration-none">Help Center</a></p>
      </div>

      <!-- Contact Info -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold mb-3">Contact</h6>
        <p><i class="bi bi-geo-alt-fill me-2"></i> Dhaka, Bangladesh</p>
        <p><i class="bi bi-envelope-fill me-2"></i> info@travelmate.com</p>
        <p><i class="bi bi-phone-fill me-2"></i> +880 1234 567 890</p>

        <!-- Social Links -->
        <div class="mt-3">
          <a href="#" class="text-light me-3"><i class="bi bi-facebook fs-5"></i></a>
          <a href="#" class="text-light me-3"><i class="bi bi-instagram fs-5"></i></a>
          <a href="#" class="text-light me-3"><i class="bi bi-twitter fs-5"></i></a>
          <a href="#" class="text-light"><i class="bi bi-youtube fs-5"></i></a>
        </div>
      </div>
    </div>

    <hr class="mb-3">

    <!-- Copyright -->
    <div class="text-center">
      <p class="mb-0">
        © 2025 <strong>TravelMate</strong>. All Rights Reserved.
      </p>
    </div>
  </div>
</footer>
<!-- ======= End Footer Section ======= -->


    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>