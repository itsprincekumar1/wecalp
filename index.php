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
                <p class="tagline">Where every child achieves limitless potential 🌟</p>
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
                <div class="service-card reveal"><span class="icon">🏡</span><h3>Provide Home Sessions</h3></div>
                <div class="service-card reveal"><span class="icon">📚</span><h3>Individualized Education Plan(IEP)</h3></div>
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
                <div class="why-card reveal"><span class="card-icon">🏆</span><h3>Personalized 1 to 1 session</h3><p>Each child receives dedicated one-on-one attention from a trained therapist, ensuring focused care tailored to their individual needs.</p></div>
                <div class="why-card reveal"><span class="card-icon">📈</span><h3>Home Based therapy</h3><p>Therapy sessions conducted in the comfort of your home, helping your child learn and grow in a familiar, stress-free environment.</p></div>
                <div class="why-card reveal"><span class="card-icon">👨‍👩‍👧</span><h3>Parent Guidance and Support</h3><p>We empower parents with practical strategies and ongoing support to reinforce therapy goals at home every day.</p></div>
                <div class="why-card reveal"><span class="card-icon">🎯</span><h3>Experience Special Educators</h3><p>Our team of qualified special educators brings years of hands-on experience in working with children across diverse needs.</p></div>
                <div class="why-card reveal"><span class="card-icon">💰</span><h3>Regular Progress Tracking</h3><p>Detailed assessments and progress reports at regular intervals so you can see your child's growth milestones clearly.</p></div>
                <div class="why-card reveal"><span class="card-icon">💻</span><h3>Collabarative Approach</h3><p>Therapists, educators, and parents work together as a unified team to create the best outcomes for every child.</p></div>
            </div>
        </div>
    </section>

    <!-- HOW WE WORK -->
    <section class="section how-we-work" id="how-we-work">
        <div class="container">
            <div class="section-header reveal">
                <h2>How We Work 🛤️</h2>
                <p>Your child's journey with us — step by step</p>
            </div>
            <div class="hww-roadmap">
                <!-- Connecting path line -->
                <div class="hww-path" aria-hidden="true"></div>

                <!-- Step 1 -->
                <div class="hww-step hww-left reveal">
                    <div class="hww-card">
                        <span class="hww-emoji">📞</span>
                        <h3>Connect</h3>
                        <p>Reach out to us via phone, WhatsApp, or our contact form. We listen to your concerns and schedule a convenient time to meet.</p>
                    </div>
                    <div class="hww-node"><span>1</span></div>
                </div>

                <!-- Step 2 -->
                <div class="hww-step hww-right reveal">
                    <div class="hww-node"><span>2</span></div>
                    <div class="hww-card">
                        <span class="hww-emoji">🔍</span>
                        <h3>Child Assessment</h3>
                        <p>Our specialists conduct a comprehensive evaluation covering academic, functional, speech, and occupational abilities with a detailed computerized report.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="hww-step hww-left reveal">
                    <div class="hww-card">
                        <span class="hww-emoji">📋</span>
                        <h3>Personalised IEP</h3>
                        <p>Based on the assessment, we craft an Individualized Education Plan with clear goals, timelines, and therapy strategies tailored to your child.</p>
                    </div>
                    <div class="hww-node"><span>3</span></div>
                </div>

                <!-- Step 4 -->
                <div class="hww-step hww-right reveal">
                    <div class="hww-node"><span>4</span></div>
                    <div class="hww-card">
                        <span class="hww-emoji">🧩</span>
                        <h3>Regular Therapy Session</h3>
                        <p>Dedicated one-on-one sessions with trained therapists using play-based, evidence-driven techniques in a nurturing environment.</p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="hww-step hww-left reveal">
                    <div class="hww-card">
                        <span class="hww-emoji">📊</span>
                        <h3>Progress Monitoring</h3>
                        <p>Regular assessments, parent meetings, and real-time progress reports ensure your child is consistently moving towards their milestones.</p>
                    </div>
                    <div class="hww-node"><span>5</span></div>
                </div>
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

    

    <!-- TRUST SECTION -->
    <section class="section trust" id="trust">
        <div class="container">
            <div class="section-header reveal">
                <h2>Why Families Trust Us 🤝</h2>
                <p>Our credentials, experience, and commitment to excellence</p>
            </div>
            <div class="trust-grid">
                <div class="trust-card reveal">
                    <span class="trust-icon">📜</span>
                    <h3>Certified Professionals</h3>
                    <p>All our therapists and educators are certified with specialized training in child development and special education.</p>
                </div>
                <div class="trust-card reveal">
                    <span class="trust-icon">⏰</span>
                    <h3>4+ Years Experience</h3>
                    <p>Our founding team brings over 4 years of hands-on experience working with special needs children.</p>
                </div>
                <div class="trust-card reveal">
                    <span class="trust-icon">🏥</span>
                    <h3>Evidence-Based Approach</h3>
                    <p>We use scientifically-proven therapy methods including ABA, speech therapy, and occupational therapy.</p>
                </div>
                <div class="trust-card reveal">
                    <span class="trust-icon">🎓</span>
                    <h3>Continuous Learning</h3>
                    <p>Our team undergoes regular professional development to stay updated with latest therapy techniques.</p>
                </div>
                <div class="trust-card reveal">
                    <span class="trust-icon">👨‍👩‍👧‍👦</span>
                    <h3>100+ Success Stories</h3>
                    <p>Over 100 children have shown remarkable growth and improvement through our comprehensive programs.</p>
                </div>
                <div class="trust-card reveal">
                    <span class="trust-icon">🔒</span>
                    <h3>Safe &amp; Supportive</h3>
                    <p>A secure, sanitized environment where every child feels valued, protected, and encouraged to grow.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="section testimonials-section" id="testimonials">
        <div class="container">
            <div class="section-header reveal">
                <h2>What Parents Say 💬</h2>
                <p>Real stories from families whose children have thrived with us</p>
            </div>
            <div class="testi-carousel reveal">
                <div class="testi-track" id="testiTrack">
                    <!-- Slide 1 -->
                    <div class="testi-item active">
                        <div class="testi-quote-icon">❝</div>
                        <p class="testi-body">My son has transformed so much in just 8 months! The team at WeCalp is incredibly dedicated and genuinely cares about each child's progress. His speech has improved dramatically and he's now more confident in social situations.</p>
                        <div class="testi-rating">★★★★★</div>
                        <div class="testi-footer">
                            <div class="testi-avatar" style="background:linear-gradient(135deg,#FFD93D,#FFA726);">👩</div>
                            <div>
                                <h4 class="testi-name">Priya Mehta</h4>
                                <p class="testi-role">Parent of Aditya, 5 years old</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="testi-item">
                        <div class="testi-quote-icon">❝</div>
                        <p class="testi-body">We were skeptical at first, but the personalized approach and constant communication from the team made all the difference. Our daughter's motor skills have improved remarkably and she loves coming here every single day!</p>
                        <div class="testi-rating">★★★★★</div>
                        <div class="testi-footer">
                            <div class="testi-avatar" style="background:linear-gradient(135deg,#6EC6FF,#42A5F5);">👨</div>
                            <div>
                                <h4 class="testi-name">Rajesh Kumar</h4>
                                <p class="testi-role">Parent of Isha, 6 years old</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="testi-item">
                        <div class="testi-quote-icon">❝</div>
                        <p class="testi-body">The smart tracking software is incredible! I can see my child's daily progress in real-time. It gives me so much confidence knowing exactly what's being worked on and how I can support learning at home.</p>
                        <div class="testi-rating">★★★★★</div>
                        <div class="testi-footer">
                            <div class="testi-avatar" style="background:linear-gradient(135deg,#77DD77,#66BB6A);">👩</div>
                            <div>
                                <h4 class="testi-name">Neha Singh</h4>
                                <p class="testi-role">Parent of Rohan, 4 years old</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="testi-item">
                        <div class="testi-quote-icon">❝</div>
                        <p class="testi-body">As a special educator myself, I was very picky about where to take my son. WeCalp's evidence-based approach and their qualified, caring team impressed me immediately. I cannot recommend them enough!</p>
                        <div class="testi-rating">★★★★★</div>
                        <div class="testi-footer">
                            <div class="testi-avatar" style="background:linear-gradient(135deg,#FF8A80,#EF5350);">👨</div>
                            <div>
                                <h4 class="testi-name">Vikram Patel</h4>
                                <p class="testi-role">Parent of Arjun, 5 years old</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 5 -->
                    <div class="testi-item">
                        <div class="testi-quote-icon">❝</div>
                        <p class="testi-body">When we first came to WeCalp, our daughter couldn't express her needs at all. After just one year of therapy, she speaks in sentences and even makes jokes! The home learning guidance helped us support her growth every day.</p>
                        <div class="testi-rating">★★★★★</div>
                        <div class="testi-footer">
                            <div class="testi-avatar" style="background:linear-gradient(135deg,#C5A3FF,#AB47BC);">👩</div>
                            <div>
                                <h4 class="testi-name">Sunita Sharma</h4>
                                <p class="testi-role">Parent of Kavya, 7 years old</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation Buttons -->
                <button class="testi-btn testi-prev" id="testiPrev" aria-label="Previous testimonial">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
                </button>
                <button class="testi-btn testi-next" id="testiNext" aria-label="Next testimonial">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 6 15 12 9 18"/></svg>
                </button>
                <!-- Dots -->
                <div class="testi-dots" id="testiDots"></div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
