<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Motherland Farm - Services</title>
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
            <li class="breadcrumb-item active text-white" aria-current="page">Services</li>
        </ol>
    </nav>


      <!-- Services Section -->
  <div class="container-fluid py-5">
    <div class="container text-center">
      <!-- Section Title -->
      <h2 class="fw-bold mb-3" data-aos="fade-down" style="color: #3b2f2f;">Our Services</h2>
      <p class="text-muted mb-5" data-aos="fade-up">
        We provide a range of top-quality cleaning products and services to ensure your home and business spaces remain
        sparkling clean and well-maintained.
      </p>

      <div class="row g-4 justify-content-center">
        <!-- Service 1 -->
        <div class="col-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card h-100 shadow-lg border-0 rounded-4 text-center p-4"
            style="transition: transform 0.3s, box-shadow 0.3s;">
            <div class="mb-3">
              <i class="bi bi-basket fs-1" style="color: #0e0d0c;"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: #0e0d0c;">Premium Products</h5>
            <p class="text-muted">High-quality jaggery powder and jaggery cake softeners delivering exceptional
              cleaning results.</p>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card h-100 shadow-lg border-0 rounded-4 text-center p-4"
            style="transition: transform 0.3s, box-shadow 0.3s;">
            <div class="mb-3">
              <i class="bi bi-truck fs-1" style="color: #0e0d0c;"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: #0e0d0c;">Fast Delivery</h5>
            <p class="text-muted">We ensure your orders are delivered quickly and safely, with tracking available for
              all shipments.</p>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card h-100 shadow-lg border-0 rounded-4 text-center p-4"
            style="transition: transform 0.3s, box-shadow 0.3s;">
            <div class="mb-3">
              <i class="bi bi-headset fs-1" style="color: #0e0d0c;"></i>
            </div>
            <h5 class="fw-bold mb-3" style="color: #0e0d0c;">Customer Support</h5>
            <p class="text-muted">Our dedicated support team assists you with product inquiries, orders, and after-sales
              service.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Services Section -->



    <!-- footer -->
    <?php include('footer.php') ?>