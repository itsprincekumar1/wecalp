<?php
$currentPage = 'home';
$pageTitle = 'WeCalp – Helping Special Children Grow with Care';
$pageDescription = 'WeCalp – Helping special children grow with care since 2022. High-quality, results-oriented therapy services for special needs children aged 3 months to 28 years.';
include 'includes/header.php';
?>

    <!-- HERO -->
    <section class="hero" id="hero">
        <!-- Floating elements -->
        <div class="floating-star" style="top:15%;left:8%;"></div>
        <div class="floating-star" style="top:25%;right:12%;width:20px;height:20px;animation-delay:2s;"></div>
        <div class="floating-circle" style="top:60%;left:5%;width:60px;height:60px;background:rgba(255,217,61,0.15);"></div>
        <div class="floating-circle" style="top:20%;right:25%;width:40px;height:40px;background:rgba(119,221,119,0.15);animation-delay:3s;"></div>
        <div class="floating-cloud" style="top:12%;right:18%;"></div>
        <div class="floating-cloud" style="bottom:30%;left:3%;width:60px;height:30px;animation-delay:4s;"></div>

        <div class="hero-inner">
            <div class="hero-text">
                <h1>We<span>Calp</span></h1>
                <p class="tagline">Helping Special Children Grow with Care 🌟</p>
                <p class="intro">Since 2022, WeCalp has been providing high quality and results-oriented therapy services for special needs children.</p>
                <div class="hero-btns">
                    <a href="contact.php" class="btn-primary">📋 Book Assessment</a>
                    <a href="services.php" class="btn-secondary">🎯 Explore Programs</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-illustration">
                    <span class="hero-emoji">🧒</span>
                    <span class="orbit-icon">⭐</span>
                    <span class="orbit-icon">🌈</span>
                    <span class="orbit-icon">🎨</span>
                    <span class="orbit-icon">💖</span>
                </div>
            </div>
        </div>

        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" preserveAspectRatio="none"><path fill="#FFF" d="M0,60 C360,120 1080,0 1440,60 L1440,120 L0,120 Z"/></svg>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="section about" id="about">
        <div class="container">
            <div class="section-header reveal">
                <h2>About WeCalp 🌈</h2>
                <p>A nurturing space where every child's potential blossoms</p>
            </div>
            <div class="about-grid">
                <div class="about-card reveal">
                    <span class="card-emoji">👶</span>
                    <div class="big-number">100+</div>
                    <h3>Children Helped</h3>
                    <p>Over a hundred children have found growth and joy with our dedicated team.</p>
                </div>
                <div class="about-card reveal">
                    <span class="card-emoji">📅</span>
                    <h3>Age Range</h3>
                    <div class="big-number" style="font-size:1.6rem;color:var(--coral);">3 months – 28 years</div>
                    <p>We support individuals from infancy through young adulthood.</p>
                </div>
                <div class="about-card reveal">
                    <span class="card-emoji">🌱</span>
                    <h3>Our Focus</h3>
                    <p>Growth, overcoming deficiencies, and building life skills for a brighter future.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section services" id="services">
        <div class="container">
            <div class="section-header reveal">
                <h2>Our Services ✨</h2>
                <p>Comprehensive therapy and learning programs tailored for every child</p>
            </div>
            <div class="services-grid">
                <div class="service-card reveal"><span class="icon">🌅</span><h3>Early Intervention</h3></div>
                <div class="service-card reveal"><span class="icon">🤲</span><h3>Occupational Therapy</h3></div>
                <div class="service-card reveal"><span class="icon">🗣️</span><h3>Speech Therapy</h3></div>
                <div class="service-card reveal"><span class="icon">🧩</span><h3>ABA Therapy</h3></div>
                <div class="service-card reveal"><span class="icon">📚</span><h3>Special Education</h3></div>
                <div class="service-card reveal"><span class="icon">🎮</span><h3>Play-Based Learning</h3></div>
                <div class="service-card reveal"><span class="icon">🧠</span><h3>Cognitive Development</h3></div>
                <div class="service-card reveal"><span class="icon">👩‍🏫</span><h3>One-on-One Learning</h3></div>
                <div class="service-card reveal"><span class="icon">🎨</span><h3>Hobbies &amp; Arts</h3></div>
                <div class="service-card reveal"><span class="icon">🛒</span><h3>Real-World Training</h3></div>
            </div>
        </div>
    </section>

    <!-- ASSESSMENT -->
    <section class="section assessment" id="assessment">
        <div class="container">
            <div class="section-header reveal">
                <h2>Comprehensive Assessment 📝</h2>
                <p>Detailed evaluation with computerized reports to guide every child's journey</p>
            </div>
            <div class="assessment-layout">
                <div class="assessment-highlight reveal">
                    <h3>Why Our Assessment Matters</h3>
                    <p>A thorough, multi-dimensional assessment is the foundation for an effective personalized therapy plan. Our computerized detailed reports give parents and therapists clear insights.</p>
                    <span class="badge">📊 Computerized Detailed Report</span>
                </div>
                <div class="assessment-types reveal">
                    <div class="assess-type"><div class="type-icon">📖</div><div><h4>Academic Assessment</h4><p>Evaluate learning capabilities</p></div></div>
                    <div class="assess-type"><div class="type-icon">🎯</div><div><h4>Skill Assessment</h4><p>Identify strengths &amp; areas to grow</p></div></div>
                    <div class="assess-type"><div class="type-icon">💡</div><div><h4>Aptitude Assessment</h4><p>Discover innate abilities</p></div></div>
                    <div class="assess-type"><div class="type-icon">🔧</div><div><h4>Functional Assessment</h4><p>Daily life skill readiness</p></div></div>
                    <div class="assess-type"><div class="type-icon">🤲</div><div><h4>Occupational Assessment</h4><p>Motor skill evaluation</p></div></div>
                    <div class="assess-type"><div class="type-icon">🗣️</div><div><h4>Speech &amp; Language</h4><p>Communication proficiency check</p></div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="section why-choose" id="why">
        <div class="container">
            <div class="section-header reveal">
                <h2>Why Choose WeCalp? 💛</h2>
                <p>What makes us the trusted partner for your child's growth</p>
            </div>
            <div class="why-grid">
                <div class="why-card reveal"><span class="card-icon">🏆</span><h3>Results-Oriented Approach</h3><p>We focus on measurable outcomes and tangible growth for every child.</p></div>
                <div class="why-card reveal"><span class="card-icon">📈</span><h3>Continuous Improvement</h3><p>Constantly evolving methods to offer cutting-edge therapy techniques.</p></div>
                <div class="why-card reveal"><span class="card-icon">👨‍👩‍👧</span><h3>Parent Collaboration</h3><p>Parents are partners in the therapy journey, not spectators.</p></div>
                <div class="why-card reveal"><span class="card-icon">🔒</span><h3>Safe &amp; Secure</h3><p>CCTV surveillance, sanitization protocols, and a warm, secure environment.</p></div>
                <div class="why-card reveal"><span class="card-icon">🎯</span><h3>Personalized Programs</h3><p>Every child receives a custom therapy plan based on their unique needs.</p></div>
                <div class="why-card reveal"><span class="card-icon">💰</span><h3>Affordable Services</h3><p>Quality therapy that doesn't break the bank — accessible to all families.</p></div>
                <div class="why-card reveal"><span class="card-icon">💻</span><h3>Smart Progress Tracking</h3><p>Unique software to track your child's milestones and progress in real time.</p></div>
            </div>
        </div>
    </section>

    <!-- ENVIRONMENT -->
    <section class="section environment" id="environment">
        <div class="container">
            <div class="section-header reveal">
                <h2>Our Learning Environment 🏫</h2>
                <p>Designed to inspire curiosity and comfort</p>
            </div>
            <div class="env-grid">
                <div class="env-card reveal">
                    <span class="env-icon">📱</span>
                    <div><h3>Smart Technology</h3><p>Smart boards, tablets, and interactive tools make learning fun and engaging.</p></div>
                </div>
                <div class="env-card reveal">
                    <span class="env-icon">🎪</span>
                    <div><h3>Playful Spaces</h3><p>Colorful, stimulating areas designed to encourage exploration and joy.</p></div>
                </div>
                <div class="env-card reveal">
                    <span class="env-icon">🛡️</span>
                    <div><h3>Comfortable &amp; Safe</h3><p>Child-proofed, sanitized spaces where every child feels secure and at home.</p></div>
                </div>
                <div class="env-card reveal">
                    <span class="env-icon">🤝</span>
                    <div><h3>Social Interaction</h3><p>Group activities and peer learning for social skill development.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- PARENT INVOLVEMENT -->
    <section class="section parent" id="parent">
        <div class="container">
            <div class="section-header reveal">
                <h2>Parent Involvement 👨‍👩‍👧‍👦</h2>
                <p>Your role is vital — and we make it easy</p>
            </div>
            <div class="parent-grid">
                <div class="parent-card reveal">
                    <span class="p-icon">🏠</span>
                    <h3>Home Learning Guidance</h3>
                    <p>Structured tips and activities to continue growth at home.</p>
                </div>
                <div class="parent-card reveal">
                    <span class="p-icon">📊</span>
                    <h3>Real-Time Tracking</h3>
                    <p>Monitor your child's progress with our dedicated software platform.</p>
                </div>
                <div class="parent-card reveal">
                    <span class="p-icon">🩺</span>
                    <h3>Doctor Recommendations</h3>
                    <p>We provide support and coordination with your child's healthcare providers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ACTIVITIES -->
    <section class="section activities" id="activities">
        <div class="container">
            <div class="section-header reveal">
                <h2>Fun Activities 🎉</h2>
                <p>Beyond therapy — building memories and life skills</p>
            </div>
            <div class="activities-scroll">
                <div class="activity-chip"><span class="a-icon">🌳</span><h4>Picnics &amp; Field Visits</h4></div>
                <div class="activity-chip"><span class="a-icon">🌙</span><h4>Night Stays</h4></div>
                <div class="activity-chip"><span class="a-icon">🏋️</span><h4>Exercise &amp; Yoga</h4></div>
                <div class="activity-chip"><span class="a-icon">🧘</span><h4>Meditation</h4></div>
                <div class="activity-chip"><span class="a-icon">🍽️</span><h4>Eating Skills</h4></div>
                <div class="activity-chip"><span class="a-icon">👕</span><h4>Dressing Skills</h4></div>
                <div class="activity-chip"><span class="a-icon">🧹</span><h4>Grooming Skills</h4></div>
                <div class="activity-chip"><span class="a-icon">🎵</span><h4>Music &amp; Dance</h4></div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
