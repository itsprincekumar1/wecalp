<?php
$currentPage = 'case-studies';
$pageTitle = 'Case Studies – WeCalp | Real Stories of Growth & Progress';
$pageDescription = 'Read inspiring case studies of children who have made remarkable progress through WeCalp\'s therapy programs. Real stories, real results.';
include 'includes/header.php';
?>

    <!-- PAGE HERO -->
    <section class="page-hero">
        <div class="floating-star" style="top:22%;left:8%;"></div>
        <div class="floating-star" style="top:28%;right:14%;width:18px;height:18px;animation-delay:1.5s;"></div>
        <div class="floating-circle" style="top:45%;left:6%;width:55px;height:55px;background:rgba(197,163,255,0.12);"></div>
        <div class="floating-cloud" style="top:10%;right:16%;"></div>

        <h1>Case <span>Studies</span> 📖</h1>
        <p>Real stories of transformation, progress, and the incredible journey of our children</p>

        <div class="hero-wave">
            <svg viewBox="0 0 1440 120" preserveAspectRatio="none"><path fill="#FFF" d="M0,60 C360,120 1080,0 1440,60 L1440,120 L0,120 Z"/></svg>
        </div>
    </section>

    <!-- CASE STUDIES GRID -->
    <section class="section" style="background: #FFF;">
        <div class="container">
            <div class="section-header reveal">
                <h2>Stories of Progress 🌟</h2>
                <p>Click on any story to read the full journey</p>
            </div>
            <div class="case-studies-grid">

                <!-- Case 1 -->
                <div class="case-card reveal" data-case-id="case-1">
                    <div class="case-card-image">
                        <span class="case-emoji">🗣️</span>
                    </div>
                    <div class="case-card-body">
                        <h3>Aarav's Communication Journey</h3>
                        <p>From speaking just 5-6 words to forming full sentences — Aarav's 18-month speech therapy transformation at WeCalp.</p>
                        <span class="read-more">Read Full Story →</span>
                    </div>
                </div>

                <!-- Case 2 -->
                <div class="case-card reveal" data-case-id="case-2">
                    <div class="case-card-image">
                        <span class="case-emoji">✋</span>
                    </div>
                    <div class="case-card-body">
                        <h3>Meera's Motor Skills Milestone</h3>
                        <p>How occupational therapy helped Meera go from struggling to hold a crayon to writing her own name independently.</p>
                        <span class="read-more">Read Full Story →</span>
                    </div>
                </div>

                <!-- Case 3 -->
                <div class="case-card reveal" data-case-id="case-3">
                    <div class="case-card-image">
                        <span class="case-emoji">🧩</span>
                    </div>
                    <div class="case-card-body">
                        <h3>Rohan's Behavioral Transformation</h3>
                        <p>Through ABA therapy, Rohan went from daily meltdowns to self-regulation and meaningful friendships.</p>
                        <span class="read-more">Read Full Story →</span>
                    </div>
                </div>

                <!-- Case 4 -->
                <div class="case-card reveal" data-case-id="case-4">
                    <div class="case-card-image">
                        <span class="case-emoji">👶</span>
                    </div>
                    <div class="case-card-body">
                        <h3>Priya's Early Intervention Win</h3>
                        <p>Starting at just 18 months, early intervention gave Priya the head start she needed to catch up on key milestones.</p>
                        <span class="read-more">Read Full Story →</span>
                    </div>
                </div>

                <!-- Case 5 -->
                <div class="case-card reveal" data-case-id="case-5">
                    <div class="case-card-image">
                        <span class="case-emoji">🏡</span>
                    </div>
                    <div class="case-card-body">
                        <h3>Arjun's Independent Living Skills</h3>
                        <p>A teenager's journey towards independence — learning daily living skills, money management, and community navigation.</p>
                        <span class="read-more">Read Full Story →</span>
                    </div>
                </div>

                <!-- Case 6 -->
                <div class="case-card reveal" data-case-id="case-6">
                    <div class="case-card-image">
                        <span class="case-emoji">🧠</span>
                    </div>
                    <div class="case-card-body">
                        <h3>Ananya's Cognitive Growth</h3>
                        <p>From a 1-minute attention span to 15+ minutes of focused engagement — Ananya's cognitive development story.</p>
                        <span class="read-more">Read Full Story →</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section" style="background: linear-gradient(180deg, #FFFDF5, #E8F8FF);">
        <div class="container">
            <div class="cta-section reveal">
                <h2>Every Child Has a Story Waiting to Be Written 💛</h2>
                <p>Your child could be our next success story. Book an assessment and let's begin the journey together.</p>
                <a href="contact.php" class="btn-primary">📋 Start Your Child's Story</a>
            </div>
        </div>
    </section>

    <!-- CASE STUDY MODAL -->
    <div class="modal-overlay" id="caseModal">
        <div class="modal-content">
            <button class="modal-close" aria-label="Close modal">✕</button>
            <h2>Loading...</h2>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>
