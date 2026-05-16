<?php
$currentPage = 'services';
$pageTitle = 'Our Services – WeCalp | Therapy & Education for Special Needs Children';
$pageDescription = 'Explore WeCalp\'s comprehensive therapy services including Early Intervention, Speech Therapy, Occupational Therapy, Special Education, and more.';
include 'includes/header.php';
?>

    <!-- PAGE HERO -->
    <section class="page-hero">
        <div class="floating-star" style="top:18%;left:12%;"></div>
        <div class="floating-star" style="top:35%;right:10%;width:22px;height:22px;animation-delay:1.5s;"></div>
        <div class="floating-circle" style="top:55%;right:8%;width:45px;height:45px;background:rgba(119,221,119,0.12);animation-delay:2s;"></div>
        <div class="floating-cloud" style="top:12%;right:22%;"></div>

        <h1>Our <span>Services</span> ✨</h1>
        <p>Comprehensive, results-oriented therapy programs designed for every child's unique needs</p>

        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" preserveAspectRatio="none"><path fill="#FFF" d="M0,60 C360,120 1080,0 1440,60 L1440,120 L0,120 Z"/></svg>
        </div>
    </section>

    <!-- SERVICES CARDS -->
    <section class="section" style="background: #FFF;">
        <div class="container">
            <div class="section-header reveal">
                <h2>Explore Our Programs 🌟</h2>
                <p>Each program is tailored to help your child grow, learn, and thrive</p>
            </div>
            <div class="services-page-grid">

                <!-- Early Intervention -->
                <div class="service-page-card reveal">
                    <span class="service-icon">🌅</span>
                    <h3>Early Intervention</h3>
                    <p>For children aged 1 year to 3 years. Our early intervention program identifies developmental delays early and provides targeted support to build a strong foundation for future growth.</p>
                    <a href="services/early-intervention.php" class="btn-learn-more">Learn More →</a>
                </div>

                <!-- Special Education -->
                <div class="service-page-card reveal">
                    <span class="service-icon">📚</span>
                    <h3>Special Education</h3>
                    <p>Individualized education plans designed for children with diverse learning needs. Our special educators create engaging, adaptive curricula that make learning accessible and enjoyable.</p>
                    <a href="services/special-education.php" class="btn-learn-more">Learn More →</a>
                </div>

                <!-- Councelling -->
                <div class="service-page-card reveal">
                    <span class="service-icon">📚</span>
                    <h3>Councelling</h3>
                    <p>Personal councelling plans designed for children with diverse needs. Our special councellors helps children to get a comfortable and open environment to help them with their difficulties.</p>
                    <a href="services/special-education.php" class="btn-learn-more">Learn More →</a>
                </div>

                <!-- Occupational Therapy -->
                <div class="service-page-card reveal">
                    <span class="service-icon">🤲</span>
                    <h3>Occupational Therapy</h3>
                    <p>Helping children develop fine motor skills, sensory processing abilities, and daily living skills. Our OT program empowers children to perform everyday activities with greater independence.</p>
                    <a href="services/occupational-therapy.php" class="btn-learn-more">Learn More →</a>
                </div>

                <!-- Speech Therapy -->
                <div class="service-page-card reveal">
                    <span class="service-icon">🗣️</span>
                    <h3>Speech Therapy</h3>
                    <p>Comprehensive communication support covering speech articulation, language development, fluency, and social communication skills for children of all ages.</p>
                    <a href="services/speech-therapy.php" class="btn-learn-more">Learn More →</a>
                </div>

                <!-- Additional Services -->
                <div class="service-page-card reveal">
                    <span class="service-icon">🌈</span>
                    <h3>Additional Services</h3>
                    <p>From ABA therapy and cognitive development to play-based learning, art therapy, and real-world vocational training — we offer a wide range of supplementary programs.</p>
                    <a href="services/additional-services.php" class="btn-learn-more">Learn More →</a>
                </div>

            </div>
        </div>
    </section>

    <!-- WHY OUR SERVICES STAND OUT -->
    <section class="section why-choose">
        <div class="container">
            <div class="section-header reveal">
                <h2>Why Our Services Stand Out 💡</h2>
                <p>What makes WeCalp's approach different and effective</p>
            </div>
            <div class="why-grid">
                <div class="why-card reveal">
                    <span class="card-icon">📊</span>
                    <h3>Evidence-Based Methods</h3>
                    <p>All our therapy programs are grounded in scientific research and proven techniques for maximum effectiveness.</p>
                </div>
                <div class="why-card reveal">
                    <span class="card-icon">🎯</span>
                    <h3>Personalized Plans</h3>
                    <p>Every child receives a custom therapy plan based on thorough assessment and individual goals.</p>
                </div>
                <div class="why-card reveal">
                    <span class="card-icon">👨‍👩‍👧</span>
                    <h3>Family-Centered Care</h3>
                    <p>We involve parents at every step — from goal setting to home activities and progress reviews.</p>
                </div>
                <div class="why-card reveal">
                    <span class="card-icon">📈</span>
                    <h3>Progress Tracking</h3>
                    <p>Our digital platform gives real-time visibility into your child's milestones and improvements.</p>
                </div>
                <div class="why-card reveal">
                    <span class="card-icon">🏆</span>
                    <h3>Certified Professionals</h3>
                    <p>Our team holds specialized certifications and undergoes continuous professional development.</p>
                </div>
                <div class="why-card reveal">
                    <span class="card-icon">💰</span>
                    <h3>Affordable & Accessible</h3>
                    <p>High-quality therapy shouldn't be a luxury — we keep our services accessible to all families.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section" style="background: #FFF;">
        <div class="container">
            <div class="cta-section reveal">
                <h2>Ready to Start Your Child's Journey? 🚀</h2>
                <p>Book a comprehensive assessment today and let us create a personalized plan for your child's growth.</p>
                <a href="contact.php" class="btn-primary">📋 Book Free Assessment</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
