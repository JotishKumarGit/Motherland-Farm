<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Motherland Farm - Tea</title>
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
    <li class="breadcrumb-item active text-white" aria-current="page">Tea</li>
  </ol>
</nav>

<!-- pro details -->
<section class="container py-5">
  <div class="row align-items-center">
    <div class="col-md-6 text-center">
      <img src="assets/img/tea.jpg" alt="Tea" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6">
      <h2 class="fw-bold mb-3">Tea</h2>
      <p class="text-muted mb-4">
        Savor the soothing aroma and natural flavors of our <strong>Tea</strong> — carefully selected for quality and freshness.
        Whether for a relaxing cup at home or a refreshing start to your day, our tea offers a rich, full-bodied taste.
        Pure, natural, and preservative-free — a perfect companion for every tea lover.
      </p>
      <ul class="mb-4">
        <li>Premium quality leaves for rich flavor</li>
        <li>100% natural and chemical-free</li>
        <li>Freshly packed for optimal aroma and taste</li>
        <li>Ideal for daily brewing or special occasions</li>
      </ul>
      <button type="button" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-primary btn-lg">
        Enquiry Now
      </button>
    </div>
  </div>
</section>


  <!-- footer -->
   <?php include('footer.php') ?>