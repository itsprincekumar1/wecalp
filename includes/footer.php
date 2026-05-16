    <!-- ===== FOOTER ===== -->

    <!-- Book Appointment Section -->
    <div class="footer-appointment">
        <div class="footer-appointment-inner">
            <h3>📋 Book an Appointment</h3>
            <p>Take the first step towards your child's brighter future</p>
            <form class="appointment-form" id="appointmentForm">
                <input type="text" id="apptName" placeholder="Your Name" required aria-label="Your Name">
                <input type="tel" id="apptPhone" placeholder="Phone Number" required aria-label="Phone Number">
                <button type="submit" class="btn-primary">🚀 Book Now</button>
            </form>
        </div>
    </div>

    <!-- Main Footer -->
    <footer class="footer">
        <div class="footer-main">
            <div class="footer-inner">
                <!-- About WeCalp -->
                <div>
                    <h3>WeCalp 🌟</h3>
                    <p>Helping Special Children Grow with Care since 2022.</p>
                    <p>Every child deserves a chance to shine. We provide high-quality, results-oriented therapy services for special needs children aged 3 months to 28 years.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4>Quick Links</h4>
                    <div class="footer-links">
                        <a href="<?php echo $basePath; ?>index.php">🏠 Home</a>
                        <a href="<?php echo $basePath; ?>about.php">👨‍👩‍👧 About Us</a>
                        <a href="<?php echo $basePath; ?>services.php">⭐ Services</a>
                        <a href="<?php echo $basePath; ?>case-studies.php">📖 Case Studies</a>
                        <a href="<?php echo $basePath; ?>contact.php">📞 Contact Us</a>
                    </div>
                </div>

                <!-- Services Links -->
                <div>
                    <h4>Our Services</h4>
                    <div class="footer-links">
                        <a href="<?php echo $basePath; ?>services/early-intervention.php">Early Intervention</a>
                        <a href="<?php echo $basePath; ?>services/special-education.php">Special Education</a>
                        <a href="<?php echo $basePath; ?>services/occupational-therapy.php">Occupational Therapy</a>
                        <a href="<?php echo $basePath; ?>services/speech-therapy.php">Speech Therapy</a>
                        <a href="<?php echo $basePath; ?>services/additional-services.php">Additional Services</a>
                    </div>
                </div>

                <!-- Contact Details -->
                <div>
                    <h4>Contact Us</h4>
                    <div class="footer-contact-item">
                        <span>📍</span>
                        <span>Rz G266A Sitapuri Street no 13 part 2 New Delhi 110045 India</span>
                    </div>
                    <div class="footer-contact-item">
                        <span>📞</span>
                        <span>+91 98185 77161</span>
                    </div>
                    <div class="footer-contact-item">
                        <span>📧</span>
                        <span>org@wecalp.in</span>
                    </div>
                    <div class="footer-contact-item">
                        <span>🕐</span>
                        <span>Mon – Sat: 9:00 AM – 6:00 PM</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Embedded Map -->
        <div class="footer-map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.0!2d77.2!3d28.6!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDM2JzAwLjAiTiA3N8KwMTInMDAuMCJF!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                title="WeCalp Location">
            </iframe>
        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <p>Made with 💛 for special children | © <?php echo date('Y'); ?> WeCalp. All rights reserved.</p>
            <div>
                <a href="#">Privacy Policy</a> · <a href="#">Terms of Service</a> · <span>Designed with care ❤️</span>
            </div>
        </div>
    </footer>

    <!-- ===== FLOATING BUTTONS ===== -->

    <!-- WhatsApp Button -->
    <a href="https://wa.me/919818577161?text=Hello%2C%20I%20want%20support%20for%20my%20child.%20%28Age%3A%20____%2C%20Concern%3A%20______%29" target="_blank" rel="noopener" class="floating-whatsapp" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </a>

    <!-- Book Appointment Floating Button -->
    <a href="<?php echo $basePath; ?>contact.php" class="floating-book-btn" aria-label="Book Appointment">
        📋 Book Appointment
    </a>

    <!-- Scripts -->
    <script src="<?php echo $basePath; ?>js/script.js"></script>
</body>
</html>
