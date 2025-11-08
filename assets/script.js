
  // Optional: Add slide-down animation for dropdown on hover
  document.querySelectorAll('.navbar .dropdown').forEach(function(dropdown){
    dropdown.addEventListener('mouseenter', function(){
      const menu = dropdown.querySelector('.dropdown-menu');
      dropdown.classList.add('show');
      menu.classList.add('show');
    });
    dropdown.addEventListener('mouseleave', function(){
      const menu = dropdown.querySelector('.dropdown-menu');
      dropdown.classList.remove('show');
      menu.classList.remove('show');
    });
  });


  // send message on whatsapp
    document.getElementById("contactForm").addEventListener("submit", function(e){
    e.preventDefault(); // prevent form from submitting normally

    var name = encodeURIComponent(document.getElementById("name").value);
    var email = encodeURIComponent(document.getElementById("email").value);
    var number = encodeURIComponent(document.getElementById("number").value);
    var subject = encodeURIComponent(document.getElementById("subject").value);
    var message = encodeURIComponent(document.getElementById("message").value);

    var whatsappNumber = "1234567890"; // Replace with your WhatsApp number
    var text = `Name: ${name}%0AEmail: ${email}%0APhone: ${number}%0ASubject: ${subject}%0AMessage: ${message}`;
    var url = `https://wa.me/${whatsappNumber}?text=${text}`;

    window.open(url, "_blank");
  });