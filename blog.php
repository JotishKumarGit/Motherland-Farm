<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Motherland Farm - Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
  <!-- AOS CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/style.css" />
</head>

<body>

  <!-- header -->
  <?php include('header.php') ?>

  <!-- bread crumb -->
  <nav aria-label="breadcrumb" 
     class="breadcrumb-container d-flex align-items-center justify-content-center text-white"
     style="background-image: url('https://images.unsplash.com/photo-1503264116251-35a269479413?auto=format&fit=crop&w=1350&q=80'); 
            background-size: cover; 
                background-position: center; 
            height: 200px;">
  <ol class="breadcrumb bg-transparent mb-0">
    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none fw-semibold">Home</a></li>
    <li class="breadcrumb-item"><a href="#" class="text-white-50 text-decoration-none">Pages</a></li>
    <li class="breadcrumb-item active text-white" aria-current="page">Blog</li>
  </ol>
</nav>


  <!-- Blog Section -->
  <div class="container-fluid py-5" style="background: linear-gradient(135deg, #383838, #000000);">
    <div class="container">
      <!-- Section Title -->
      <h2 class="fw-bold text-center mb-3" data-aos="fade-down" style="color: #fff;">Our Blog</h2>
      <p class="text-center mb-5" data-aos="fade-up" style="color: #fff;">
        Explore insights, recipes, and wellness tips from <strong>Motherland Farm</strong> — where we bring you pure and
        natural jaggery products made with care.
      </p>

      <div class="row g-4">
        <!-- Blog Post 1 -->
        <div class="col-12 col-sm-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
            <img src="assets/img/Jaggery_baner.jpg" height="250px" class="card-img-top"
              alt="Benefits of Jaggery Powder">
            <div class="card-body">
              <small class="text-muted d-block mb-2"><i class="bi bi-calendar"></i> Oct 15, 2025</small>
              <h5 class="fw-bold" style="color: #000000;">Health Benefits of Jaggery Powder</h5>
              <p class="text-muted">Discover how natural jaggery powder helps in digestion, boosts immunity, and
                provides a healthy alternative to refined sugar.</p>
              <a href="#" class="btn  btn-outline-dark rounded-pill">Read More</a>
            </div>
          </div>
        </div>

        <!-- Blog Post 2 -->
        <div class="col-12 col-sm-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
            <img src="assets/img/Jaggerypowder.webp" height="250px" class="card-img-top"
              alt="Traditional Jaggery Making Process">
            <div class="card-body">
              <small class="text-muted d-block mb-2"><i class="bi bi-calendar"></i> Sep 28, 2025</small>
              <h5 class="fw-bold" style="color: #000;">The Traditional Art of Jaggery Making</h5>
              <p class="text-muted">Step into our farms to see how Motherland Farm preserves ancient techniques of
                crafting pure, chemical-free jaggery.</p>
              <a href="#" class="btn  btn-outline-dark rounded-pill">Read More</a>
            </div>
          </div>
        </div>

        <!-- Blog Post 3 -->
        <div class="col-12 col-sm-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
            <img src="assets/img/jaggerycakenew.jpg" height="250px" class="card-img-top" alt="Jaggery Cake Recipes">
            <div class="card-body">
              <small class="text-muted d-block mb-2"><i class="bi bi-calendar"></i> Aug 12, 2025</small>
              <h5 class="fw-bold" style="color: #000;">Delicious Recipes Using Jaggery Cake</h5>
              <p class="text-muted">From traditional sweets to modern desserts, try out mouth-watering recipes made with
                our pure jaggery cake.</p>
              <a href="#" class="btn  btn-outline-dark rounded-pill">Read More</a>
            </div>
          </div>
        </div>

        <!-- Blog Post 4 -->
        <div class="col-12 col-sm-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
            <img src="assets/img/Jaggerypowdernew.webp" height="250px" class="card-img-top"
              alt="Natural Sweetener Benefits">
            <div class="card-body">
              <small class="text-muted d-block mb-2"><i class="bi bi-calendar"></i> Jul 30, 2025</small>
              <h5 class="fw-bold" style="color: #000;">Why Jaggery Is the Healthier Sweetener</h5>
              <p class="text-muted">Learn why replacing refined sugar with jaggery can make a big difference in your
                daily nutrition and energy levels.</p>
              <a href="#" class="btn  btn-outline-dark rounded-pill">Read More</a>
            </div>
          </div>
        </div>

        <!-- Blog Post 5 -->
        <div class="col-12 col-sm-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
            <img src="assets/img/jaggey_cake.jpg" height="250px" class="card-img-top"
              alt="Motherland Farm Sustainability">
            <div class="card-body">
              <small class="text-muted d-block mb-2"><i class="bi bi-calendar"></i> Jun 10, 2025</small>
              <h5 class="fw-bold" style="color: #000;">Sustainability at Motherland Farm</h5>
              <p class="text-muted">See how our farm practices eco-friendly cultivation and packaging to protect nature
                while delivering purity.</p>
              <a href="#" class="btn btn-outline-dark rounded-pill">Read More</a>
            </div>
          </div>
        </div>

        <!-- Blog Post 6 -->
        <div class="col-12 col-sm-6 col-lg-4" data-aos="zoom-in" data-aos-delay="600">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
            <img src="assets/img/jaggeycake_baner.jpg" height="250px" class="card-img-top"
              alt="Jaggery for Fitness and Detox">
            <div class="card-body">
              <small class="text-muted d-block mb-2"><i class="bi bi-calendar"></i> May 22, 2025</small>
              <h5 class="fw-bold" style="color: #000;">Jaggery for Fitness and Detox</h5>
              <p class="text-muted">Find out how jaggery supports natural detoxification, boosts metabolism, and keeps
                you energized throughout the day.</p>
              <a href="#" class="btn  btn-outline-dark rounded-pill">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- footer -->
   <?php include('footer.php') ?>