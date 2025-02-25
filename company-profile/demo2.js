// Navbar Toggle
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    hamburger.classList.toggle('active');
});

// Hero Slider
let slideIndex = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');

function showSlide(n) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));
    
    slideIndex = (n + slides.length) % slides.length;
    
    slides[slideIndex].classList.add('active');
    dots[slideIndex].classList.add('active');
}

function changeSlide(n) {
    showSlide(slideIndex + n);
}

function currentSlide(n) {
    showSlide(n);
}

// Auto Slide
let autoSlide = setInterval(() => changeSlide(1), 5000);

// Pause on hover
const hero = document.querySelector('.hero');
hero.addEventListener('mouseenter', () => clearInterval(autoSlide));
hero.addEventListener('mouseleave', () => {
    autoSlide = setInterval(() => changeSlide(1), 5000);
});

// Initial slide
showSlide(0);

// Smooth scrolling for navigation links
const navLinksA = document.querySelectorAll(".nav-links a");
navLinksA.forEach((link) => {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    const targetId = this.getAttribute("href");
    const targetSection = document.querySelector(targetId);
    targetSection.scrollIntoView({ behavior: "smooth" });
  });
});

// Animate on scroll
const animateElements = document.querySelectorAll(".animate");
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("animate");
      observer.unobserve(entry.target);
    }
  });
});

animateElements.forEach((element) => {
  observer.observe(element);
});

//modal process

function openModal(type) {
    document.getElementById(type + 'Modal').style.display = 'block';
}

function closeModal(type) {
    document.getElementById(type + 'Modal').style.display = 'none';
}

// Close modal when clicking outside
window.onclick = function(event) {
    if (event.target.className === 'modal') {
        event.target.style.display = 'none';
    }
}

// Team Card Interaction
document.querySelectorAll('.team-card').forEach(card => {
    card.addEventListener('click', function() {
        this.classList.toggle('expanded');
    });
});

// // Form Validation
// document.querySelector('.contact-form').addEventListener('submit', function(e) {
//     e.preventDefault();
    
//     // Validasi sederhana
//     const inputs = this.querySelectorAll('input, textarea, select');
//     let isValid = true;
    
//     inputs.forEach(input => {
//         if (!input.value.trim()) {
//             isValid = false;
//             input.classList.add('error');
//         } else {
//             input.classList.remove('error');
//         }
//     });
    
//     if (isValid) {
//         // Proses submit form
//         alert('Pesan berhasil dikirim!');
//         this.reset();
//     } else {
//         alert('Harap lengkapi semua field!');
//     }
// });

// Social Media Hover Effect
document.querySelectorAll('.social-icon').forEach(icon => {
    icon.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-3px) scale(1.1)';
    });
    
    icon.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
});

// Back to Top Functionality
const backToTopButton = document.querySelector('.back-to-top');

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backToTopButton.classList.add('show');
    } else {
        backToTopButton.classList.remove('show');
    }
});

backToTopButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

function sendWhatsAppMessage(e) {
    e.preventDefault();
    
    // Ambil data form
    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const service = document.getElementById('service').value;
    const message = document.getElementById('message').value;

    // Format nomor telepon (hilangkan karakter selain angka)
    const formattedPhone = phone.replace(/\D/g, '');

    // Format pesan
    const formattedMessage = `Halo LawCare,
    
Nama: ${name}
Nomor Telepon: ${formattedPhone}
Layanan yang dibutuhkan: ${service}

Pesan:
${message}

Terima kasih.`;

    // Encode message untuk URL
    const encodedMessage = encodeURIComponent(formattedMessage);
    
    // Buat link WhatsApp
    const whatsappUrl = `https://wa.me/6281649113708?text=${encodedMessage}`;
    
    // Buka jendela baru
    window.open(whatsappUrl, '_blank');
    
    // Reset form (opsional)
    e.target.reset();
}