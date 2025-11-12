<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Motherland Farm - About Us</title>
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
    <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
  </ol>
</nav>


  <!-- about sections -->
  <div class="container-fluid py-5" style="background-color: #ffffff; color: #1a1a1a;">
    <div class="container">

      <!-- Section Header -->
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold" style="color: #3b2f2f;">About Us</h2>
        <p style="color: #333333;">
          Rooted in purity and tradition, <strong>Motherland Farm</strong> is committed to delivering natural and
          wholesome sweeteners made from the finest sugarcane.
          Our focus is on sustainability, authenticity, and preserving the true taste of nature through our handcrafted
          jaggery products.
        </p>
      </div>

      <div class="row align-items-center">

        <!-- Left Image -->
        <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
          <img src="assets/img/Jaggerypowder.webp" class="img-fluid rounded shadow"
            alt="Motherland Farm Jaggery Products">
        </div>

        <!-- Right Content -->
        <div class="col-md-6" data-aos="fade-left">
          <h3 class="mb-4" style="color: #1a1a1a;">About MOTHERLAND FARM</h3>
          <p style="color: #333333;">
            At <strong>Motherland Farm</strong>, we take pride in producing 100% natural <strong>Jaggery Cake</strong>
            and <strong>Jaggery Powder</strong>
            that retain the rich minerals and nutrients of sugarcane. Our products are free from chemicals and
            artificial additives,
            ensuring a healthier and more authentic alternative to refined sugar.
          </p>

          <!-- Key Points -->
          <ul class="list-unstyled mb-4" style="color: #333333;">
            <li class="mb-2"><i class="bi bi-check-circle-fill" style="color: #1a1a1a;"></i> Pure and chemical-free
              jaggery products</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill" style="color: #1a1a1a;"></i> Traditional processing
              methods for authentic flavor</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill" style="color: #1a1a1a;"></i> Hygienic production with
              strict quality standards</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill" style="color: #1a1a1a;"></i> Supporting sustainable
              farming and rural communities</li>
          </ul>

          <!-- Read More Button -->
          <a href="#more-info" class="btn" style="background-color: #1a1a1a; color: #ffffff; font-weight: bold;">
            Read More
          </a>
        </div>

      </div>
    </div>
  </div>
  <!-- end about sections -->



  <!-- footer -->
   <?php include('footer.php') ?>