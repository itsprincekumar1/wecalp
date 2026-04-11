<?php
$currentPage = 'contact';
$pageTitle = 'Contact Us – WeCalp | Book Assessment & Get in Touch';
$pageDescription = 'Get in touch with WeCalp. Book a free assessment, ask questions, or visit us. We\'re here to help your child grow with care.';
include 'includes/header.php';
?>

    <!-- PAGE HERO -->
    <section class="page-hero">
        <div class="floating-star" style="top:20%;left:10%;"></div>
        <div class="floating-star" style="top:32%;right:12%;width:20px;height:20px;animation-delay:2s;"></div>
        <div class="floating-circle" style="top:50%;right:6%;width:50px;height:50px;background:rgba(255,138,128,0.12);animation-delay:1s;"></div>
        <div class="floating-cloud" style="top:14%;right:20%;"></div>

        <h1>Contact <span>Us</span> 📞</h1>
        <p>We'd love to hear from you. Reach out to book an assessment or ask any questions</p>

        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" preserveAspectRatio="none"><path fill="#FFF" d="M0,60 C360,120 1080,0 1440,60 L1440,120 L0,120 Z"/></svg>
        </div>
    </section>

    <!-- CONTACT CONTENT -->
    <section class="section" style="background: #FFF;">
        <div class="container">
            <div class="contact-grid">

                <!-- Contact Form -->
                <div class="contact-form reveal">
                    <h3>Send Us a Message 💌</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="contactName">Full Name</label>
                            <input type="text" id="contactName" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label for="contactEmail">Email Address</label>
                            <input type="email" id="contactEmail" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="contactPhone">Phone Number</label>
                            <input type="tel" id="contactPhone" placeholder="Enter your phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="contactMessage">Your Message</label>
                            <textarea id="contactMessage" placeholder="Tell us how we can help..." required></textarea>
                        </div>
                        <button type="submit" class="btn-primary">🚀 Send Message</button>
                    </form>
                </div>

                <!-- Contact Info Cards -->
                <div class="contact-info reveal">
                    <div class="contact-info-card">
                        <div class="info-icon">📍</div>
                        <div>
                            <h4>Visit Us</h4>
                            <p>Rz G266A Sitapuri Street no 13 part 2 <br>New Delhi, 110045 India</p>
                        </div>
                    </div>
                    <div class="contact-info-card">
                        <div class="info-icon">📞</div>
                        <div>
                            <h4>Call Us</h4>
                            <p>+91 98185 77161<br>Mon – Sat: 9 AM – 6 PM</p>
                        </div>
                    </div>
                    <div class="contact-info-card">
                        <div class="info-icon">📧</div>
                        <div>
                            <h4>Email Us</h4>
                            <p>org@wecalp.in<br>We reply within 24 hours</p>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div style="display:flex; gap:12px; flex-wrap:wrap; margin-top:8px;">
                        <a href="https://wa.me/919818577161" target="_blank" rel="noopener" class="btn-primary" style="flex:1; justify-content:center; min-width:140px; font-size:0.95rem; padding:12px 20px;">
                            💬 WhatsApp
                        </a>
                        <a href="tel:+919818577161" class="btn-secondary" style="flex:1; text-align:center; min-width:140px; font-size:0.95rem; padding:12px 20px;">
                            📞 Call Now
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FULL WIDTH MAP -->
    <section class="map-section">
        <div class="map-container" style="border-radius:0; height:450px;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.0!2d77.2!3d28.6!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDM2JzAwLjAiTiA3N8KwMTInMDAuMCJF!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                title="WeCalp Location Map">
            </iframe>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
