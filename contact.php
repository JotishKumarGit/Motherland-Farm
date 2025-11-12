<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Motherland Farm - Contact Us</title>
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
      <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
    </ol>
  </nav>

  <!-- Contact Us Section -->
  <div class="container-fluid py-5" style="background: #fff8e7;">
    <div class="container">
      <h2 class="fw-bold text-center mb-4" data-aos="fade-down" style="color: #3b2f2f;"">Contact Us</h2>
      <p class=" text-center text-muted mb-5" data-aos="fade-up">
        Have questions or want to place an order? Fill out the form below and reach us directly on WhatsApp!
        </p>

        <div class="row g-4">
          <!-- Left Side: Map -->
          <div class="col-12 col-md-6" data-aos="fade-right">
            <div class="map-responsive rounded-4 overflow-hidden shadow-sm">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15274852.026439346!2d69.01210613194546!3d20.823147211139155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sA%2FP%20Yarat%20Tal%20-%20Duand%20District%20Madhubani%2C%20Maharashtra%2C%20India%20412214!5e0!3m2!1sen!2sin!4v1762600838834!5m2!1sen!2sin"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <!-- Right Side: Contact Form -->
          <div class="col-12 col-md-6" data-aos="fade-left">
            <div class="card shadow-sm border-0 rounded-4 p-4">
              <h5 class="fw-bold mb-4" style="color: #d4af37;">Send Us a Message</h5>
              <form id="contactForm">
                <div class="mb-3">
                  <input type="text" class="form-control rounded-pill" id="name" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control rounded-pill" id="email" placeholder="Email Address" required>
                </div>
                <div class="mb-3">
                  <input type="tel" class="form-control rounded-pill" id="number" placeholder="Phone Number" required>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control rounded-pill" id="subject" placeholder="Subject" required>
                </div>
                <div class="mb-3">
                  <textarea class="form-control rounded-4" id="message" rows="4" placeholder="Your Message"
                    required></textarea>
                </div>
                <button type="submit" class="btn btn-primary rounded-pill w-100">Send via WhatsApp</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </div>

  <!-- footer -->
  <?php include('footer.php') ?>