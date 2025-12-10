// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const offsetTop = target.offsetTop - 100; // Account for floating navbar
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > lastScrollTop && scrollTop > 100) {
            // Scrolling down
            navbar.style.transform = 'translateX(-50%) translateY(-100%)';
        } else {
            // Scrolling up
            navbar.style.transform = 'translateX(-50%) translateY(0)';
        }
        
        lastScrollTop = scrollTop;
    });

    // Animate cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all cards
    document.querySelectorAll('.card').forEach(card => {
        observer.observe(card);
    });

    // Close mobile menu when clicking on a nav link
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navbarCollapse.classList.contains('show')) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                bsCollapse.hide();
            }
        });
    });

    // Initialize EmailJS (Optional - you need to set up EmailJS account)
    // emailjs.init("YOUR_EMAILJS_PUBLIC_KEY"); // Uncomment and add your EmailJS public key

    console.log('CV. Surya Agung website loaded successfully!');
});

// Contact Form Functions
function getFormData() {
    const form = document.getElementById('contactForm');
    const formData = new FormData(form);
    const data = {};
    
    for (let [key, value] of formData.entries()) {
        data[key] = value;
    }
    
    return data;
}

function validateForm() {
    const form = document.getElementById('contactForm');
    const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
    let isValid = true;
    
    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.classList.add('is-invalid');
            isValid = false;
        } else {
            input.classList.remove('is-invalid');
        }
    });
    
    return isValid;
}

function showSuccessMessage() {
    const successMessage = document.getElementById('successMessage');
    successMessage.classList.remove('d-none');
    successMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}

// WhatsApp Integration
function sendViaWhatsApp() {
    if (!validateForm()) {
        alert('Mohon lengkapi semua field yang diperlukan');
        return;
    }
    
    const data = getFormData();
    const message = `*Permintaan Penawaran Layanan*

*Nama:* ${data.name}
*Email:* ${data.email}
*Telepon:* ${data.phone}
*Jenis Layanan:* ${data.service_type}

*Pesan:*
${data.message}

---
Dikirim melalui website CV. Surya Agung`;

    const whatsappURL = `https://wa.me/+6285232328282?text=${encodeURIComponent(message)}`;
    window.open(whatsappURL, '_blank');
    showSuccessMessage();
}

// Email Integration
function sendViaEmail() {
    if (!validateForm()) {
        alert('Mohon lengkapi semua field yang diperlukan');
        return;
    }
    
    const data = getFormData();
    const subject = `Permintaan Penawaran - ${data.service_type} dari ${data.name}`;
    const body = `Permintaan Penawaran Layanan

Nama: ${data.name}
Email: ${data.email}
Telepon: ${data.phone}
Jenis Layanan: ${data.service_type}

Pesan:
${data.message}

---
Dikirim melalui website CV. Surya Agung`;

    const emailURL = `mailto:suryaagungcctv@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    window.location.href = emailURL;
    showSuccessMessage();
}

// PDF Generation
function downloadAsPDF() {
    if (!validateForm()) {
        alert('Mohon lengkapi semua field yang diperlukan');
        return;
    }

    const data = getFormData();
    
    // Check if jsPDF is loaded
    if (typeof window.jsPDF === 'undefined') {
        alert('PDF generator tidak tersedia. Silakan gunakan WhatsApp atau Email.');
        return;
    }

    const { jsPDF } = window.jsPDF;
    const doc = new jsPDF();
    
    // Set font
    doc.setFont('helvetica', 'normal');
    
    // Header
    doc.setFontSize(20);
    doc.setTextColor(59, 130, 246); // Primary blue color
    doc.text('CV. SURYA AGUNG', 20, 30);
    
    doc.setFontSize(12);
    doc.setTextColor(0, 0, 0);
    doc.text('MECHANICAL ELECTRICAL', 20, 40);
    
    // Title
    doc.setFontSize(16);
    doc.setFont('helvetica', 'bold');
    doc.text('PERMINTAAN PENAWARAN LAYANAN', 20, 60);
    
    // Content
    doc.setFont('helvetica', 'normal');
    doc.setFontSize(12);
    
    let yPosition = 80;
    const lineHeight = 10;
    
    // Customer details
    doc.setFont('helvetica', 'bold');
    doc.text('Data Pelanggan:', 20, yPosition);
    yPosition += lineHeight;
    
    doc.setFont('helvetica', 'normal');
    doc.text(`Nama: ${data.name}`, 20, yPosition);
    yPosition += lineHeight;
    
    doc.text(`Email: ${data.email}`, 20, yPosition);
    yPosition += lineHeight;
    
    doc.text(`Telepon: ${data.phone}`, 20, yPosition);
    yPosition += lineHeight;
    
    doc.text(`Jenis Layanan: ${data.service_type}`, 20, yPosition);
    yPosition += lineHeight * 1.5;
    
    // Message
    doc.setFont('helvetica', 'bold');
    doc.text('Pesan/Kebutuhan:', 20, yPosition);
    yPosition += lineHeight;
    
    doc.setFont('helvetica', 'normal');
    
    // Split long message into multiple lines
    const messageLines = doc.splitTextToSize(data.message, 170);
    messageLines.forEach(line => {
        if (yPosition > 250) { // Check if we need a new page
            doc.addPage();
            yPosition = 20;
        }
        doc.text(line, 20, yPosition);
        yPosition += lineHeight;
    });
    
    // Footer
    yPosition += lineHeight;
    doc.setFontSize(10);
    doc.setTextColor(128, 128, 128);
    doc.text('---', 20, yPosition);
    yPosition += lineHeight;
    doc.text('Dikirim melalui website CV. Surya Agung', 20, yPosition);
    yPosition += lineHeight;
    doc.text(`Tanggal: ${new Date().toLocaleDateString('id-ID')}`, 20, yPosition);
    
    // Contact info
    yPosition += lineHeight * 2;
    doc.setTextColor(59, 130, 246);
    doc.text('Kontak Kami:', 20, yPosition);
    yPosition += lineHeight;
    doc.setTextColor(0, 0, 0);
    doc.text('WhatsApp: +62 852-3232-8282', 20, yPosition);
    yPosition += lineHeight;
    doc.text('Email: suryaagungcctv@gmail.com', 20, yPosition);
    yPosition += lineHeight;
    doc.text('Alamat: Jl. Klipang Blok R XVII Kota Semarang, Jawa Tengah 50272', 20, yPosition);
    
    // Save the PDF
    const fileName = `Permintaan_Penawaran_${data.name.replace(/\s+/g, '_')}_${new Date().toISOString().slice(0, 10)}.pdf`;
    doc.save(fileName);
    
    showSuccessMessage();
}

// EmailJS Integration (Optional)
function sendViaEmailJS() {
    if (!validateForm()) {
        alert('Mohon lengkapi semua field yang diperlukan');
        return;
    }

    // You need to set up EmailJS account and configure it
    // 1. Go to https://www.emailjs.com/
    // 2. Create account and service
    // 3. Get your service ID, template ID, and public key
    // 4. Uncomment the emailjs.init() in the DOMContentLoaded event
    // 5. Configure your template in EmailJS dashboard

    const data = getFormData();
    
    // Example EmailJS integration (requires setup)
    /*
    const templateParams = {
        from_name: data.name,
        from_email: data.email,
        phone: data.phone,
        service_type: data.service_type,
        message: data.message,
        to_email: 'suryaagungcctv@gmail.com'
    };

    emailjs.send('YOUR_SERVICE_ID', 'YOUR_TEMPLATE_ID', templateParams)
        .then(function(response) {
            showSuccessMessage();
            alert('Email berhasil dikirim!');
        }, function(error) {
            alert('Gagal mengirim email. Silakan gunakan WhatsApp atau metode lain.');
        });
    */
    
    // Fallback to regular email
    sendViaEmail();
}

// Helper function for WhatsApp contact
function openWhatsApp(service = '') {
    let message = 'Halo, saya tertarik dengan layanan CV. Surya Agung';
    if (service) {
        message = `Halo, saya tertarik dengan layanan ${service} dari CV. Surya Agung`;
    }
    const url = `https://wa.me/+6285232328282?text=${encodeURIComponent(message)}`;
    window.open(url, '_blank');
}

// Helper function for email contact
function openEmail(service = '') {
    let subject = 'Permintaan Informasi Layanan';
    let body = 'Halo,\n\nSaya tertarik untuk mengetahui lebih lanjut tentang layanan yang tersedia.\n\nTerima kasih.';
    
    if (service) {
        subject = `Permintaan Informasi - ${service}`;
        body = `Halo,\n\nSaya tertarik untuk mengetahui lebih lanjut tentang layanan ${service}.\n\nTerima kasih.`;
    }
    
    const url = `mailto:suryaagungcctv@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
    window.location.href = url;
}

// Performance optimization
window.addEventListener('load', function() {
    document.body.classList.remove('loading');
});