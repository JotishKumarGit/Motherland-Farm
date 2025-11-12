<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" data-aos="zoom-in">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="enquiryForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" id="number" placeholder="Your Number" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="message" rows="4" placeholder="Your Message"
                                required></textarea>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success btn-lg rounded-pill">Send via WhatsApp</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--  Modal Styles -->
<style>
    .modal-content {
        border-radius: 15px;
    }

    #enquiryForm input,
    #enquiryForm textarea {
        border-radius: 10px;
        border: 1px solid #198754;
        padding: 10px;
    }

    #enquiryForm input:focus,
    #enquiryForm textarea:focus {
        border-color: #25d366;
        box-shadow: 0 0 10px rgba(37, 211, 102, 0.5);
        outline: none;
    }

    .btn-success {
        background: linear-gradient(135deg, #25d366, #198754);
        border: none;
        transition: all 0.3s ease;
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #198754, #128c7e);
        transform: scale(1.05);
    }
</style>

<!-- Modal JS to Send WhatsApp -->
<script>
    document.getElementById('enquiryForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let number = document.getElementById('number').value;
        let subject = document.getElementById('subject').value;
        let message = document.getElementById('message').value;

        let whatsappMessage = `*Enquiry Form Submission*\n\nName: ${name}\nEmail: ${email}\nNumber: ${number}\nSubject: ${subject}\nMessage: ${message}`;

        // Replace with your WhatsApp number (with country code)
        let whatsappNumber = "919172887314";
        let whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

        window.open(whatsappURL, '_blank');
    });
</script>
<!--  WHATSAPP SCRIPT -->

<!-- Footer Section -->
<footer class="text-light py-5" style="background-color: #000;">
    <div class="container">
        <div class="row g-4">

            <!-- Company Info -->
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
                <h5 class="fw-bold mb-3" style="color: #fff;">Motherland Farm</h5>
                <p class="text-white-50">
                    At Motherland Farm, we bring you the pure goodness of nature through our traditionally made
                    <strong>Jaggery Cake</strong> and <strong>Jaggery Powder</strong>. 100% natural, chemical-free, and rich in
                    authentic sweetness.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
                <h5 class="fw-bold mb-3" style="color: #fff;">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white-50 text-decoration-none">Home</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none">About Us</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none">Our Products</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none">Blog</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="300">
                <h5 class="fw-bold mb-3" style="color: #fff;">Get In Touch</h5>
                <p class="text-white-50 mb-1"><i class="bi bi-geo-alt-fill" style="color:#fff;"></i> A/P Yarat Tal - Duand
                    District Madhubani, Maharashtra, India 412214</p>
                <p class="text-white-50 mb-1"><i class="bi bi-telephone-fill" style="color:#fff;"></i> +91 9172887314 ||
                    8010579974</p>
                <p class="text-white-50 mb-3"><i class="bi bi-envelope-fill" style="color:#fff;"></i>
                    ganeshdhamdhere1983@gmail.com</p>

                <!-- Social Icons -->
                <div>
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-twitter fs-5"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-whatsapp fs-5"></i></a>
                </div>
            </div>
        </div>

        <hr class="border-secondary my-4">

        <!-- Bottom Footer -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
            <p class="mb-0 text-white-50">
                &copy; 2025 <strong style="color: #fff;">Motherland Farm</strong>. All Rights Reserved.
                | Managed By <span><a href="https://trade4export.com/"></a> Trade4Export</span>
            </p>
        </div>
    </div>
</footer>

<!-- JS to handle WhatsApp submission -->
<script>
    document.getElementById("contactForm").addEventListener("submit", function(e) {
        e.preventDefault(); // prevent form from submitting normally

        var name = encodeURIComponent(document.getElementById("name").value);
        var email = encodeURIComponent(document.getElementById("email").value);
        var number = encodeURIComponent(document.getElementById("number").value);
        var subject = encodeURIComponent(document.getElementById("subject").value);
        var message = encodeURIComponent(document.getElementById("message").value);

        var whatsappNumber = "9172887314"; // Replace with your WhatsApp number
        var text = `Name: ${name}%0AEmail: ${email}%0APhone: ${number}%0ASubject: ${subject}%0AMessage: ${message}`;
        var url = `https://wa.me/${whatsappNumber}?text=${text}`;

        window.open(url, "_blank");
    });
</script>

<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // animation duration in ms
        once: true // whether animation should happen only once - while scrolling down
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script src="assets/script.js"></script>
</body>

</html>