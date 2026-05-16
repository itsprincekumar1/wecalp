/* =============================================================
   WeCalp — Main JavaScript
   ============================================================= */

document.addEventListener('DOMContentLoaded', () => {

    // ===== SCROLL REVEAL =====
    const reveals = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                const siblings = entry.target.parentElement.querySelectorAll('.reveal');
                const index = Array.from(siblings).indexOf(entry.target);
                entry.target.style.transitionDelay = (index % 4) * 0.1 + 's';
            }
        });
    }, { threshold: 0.15 });
    reveals.forEach(r => revealObserver.observe(r));

    // ===== NAVBAR SCROLL EFFECT =====
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
        // Trigger on load in case page is already scrolled
        navbar.classList.toggle('scrolled', window.scrollY > 50);
    }

    // ===== HAMBURGER MENU =====
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');
    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('open');
            // Animate hamburger icon
            hamburger.classList.toggle('active');
        });
        // Close menu when a link is clicked
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('open');
                hamburger.classList.remove('active');
            });
        });
    }

    // ===== TESTIMONIALS CAROUSEL =====
    function initTestiCarousel() {
        const track = document.getElementById('testiTrack');
        const prevBtn = document.getElementById('testiPrev');
        const nextBtn = document.getElementById('testiNext');
        const dotsContainer = document.getElementById('testiDots');

        if (!track || !dotsContainer) return;

        const items = track.querySelectorAll('.testi-item');
        const total = items.length;
        if (total === 0) return;

        let current = 0;
        let autoTimer = null;

        // Create dots
        for (let i = 0; i < total; i++) {
            const dot = document.createElement('button');
            dot.classList.add('testi-dot');
            dot.setAttribute('type', 'button');
            dot.setAttribute('aria-label', `Go to testimonial ${i + 1}`);
            if (i === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goTo(i));
            dotsContainer.appendChild(dot);
        }

        const dots = dotsContainer.querySelectorAll('.testi-dot');

        function goTo(index) {
            items[current].classList.remove('active');
            dots[current].classList.remove('active');
            current = (index + total) % total;
            items[current].classList.add('active');
            dots[current].classList.add('active');
        }

        function next() { goTo(current + 1); }
        function prev() { goTo(current - 1); }

        if (prevBtn) prevBtn.addEventListener('click', () => { prev(); resetAuto(); });
        if (nextBtn) nextBtn.addEventListener('click', () => { next(); resetAuto(); });

        // Auto-advance
        function startAuto() { autoTimer = setInterval(next, 7000); }
        function resetAuto() { clearInterval(autoTimer); startAuto(); }
        startAuto();

        // Pause on hover
        const carousel = track.closest('.testi-carousel');
        if (carousel) {
            carousel.addEventListener('mouseenter', () => clearInterval(autoTimer));
            carousel.addEventListener('mouseleave', startAuto);
        }
    }

    initTestiCarousel();

    // ===== GALLERY MODAL =====
    const galleryItems = document.querySelectorAll('.gallery-item');
    const galleryModal = document.getElementById('galleryModal');
    if (galleryItems.length && galleryModal) {
        const galleryModalContent = galleryModal.querySelector('.gallery-modal-placeholder, img');
        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                const emoji = item.querySelector('.gallery-placeholder');
                const img = item.querySelector('img');
                const display = galleryModal.querySelector('.gallery-modal-display');
                if (display) {
                    if (img) {
                        display.innerHTML = `<img src="${img.src}" alt="${img.alt || 'Gallery image'}" style="width:100%;border-radius:16px;">`;
                    } else if (emoji) {
                        display.innerHTML = `<span class="gallery-modal-placeholder">${emoji.textContent}</span>`;
                    }
                }
                openModal(galleryModal);
            });
        });
    }

    // ===== CASE STUDY MODALS =====
    const caseCards = document.querySelectorAll('.case-card');
    const caseModal = document.getElementById('caseModal');
    if (caseCards.length && caseModal) {
        caseCards.forEach(card => {
            card.addEventListener('click', () => {
                const id = card.dataset.caseId;
                const data = getCaseStudyData(id);
                if (data) {
                    populateCaseModal(caseModal, data);
                    openModal(caseModal);
                }
            });
        });
    }

    // ===== MODAL CLOSE HANDLERS =====
    document.querySelectorAll('.modal-overlay').forEach(modal => {
        // Close button
        const closeBtn = modal.querySelector('.modal-close');
        if (closeBtn) {
            closeBtn.addEventListener('click', () => closeModal(modal));
        }
        // Click on overlay
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal(modal);
        });
    });
    // ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            document.querySelectorAll('.modal-overlay.active').forEach(modal => closeModal(modal));
        }
    });

    // ===== CONTACT FORM VALIDATION =====
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = contactForm.querySelector('#contactName');
            const email = contactForm.querySelector('#contactEmail');
            const phone = contactForm.querySelector('#contactPhone');
            const message = contactForm.querySelector('#contactMessage');
            
            let valid = true;
            [name, email, phone, message].forEach(field => {
                if (field && !field.value.trim()) {
                    field.style.borderColor = 'var(--coral)';
                    valid = false;
                } else if (field) {
                    field.style.borderColor = '#eee';
                }
            });

            if (email && email.value && !isValidEmail(email.value)) {
                email.style.borderColor = 'var(--coral)';
                valid = false;
            }

            if (valid) {
                showFormSuccess(contactForm);
            }
        });
    }

    // ===== APPOINTMENT FORM =====
    const appointmentForm = document.getElementById('appointmentForm');
    if (appointmentForm) {
        appointmentForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = appointmentForm.querySelector('#apptName');
            const phone = appointmentForm.querySelector('#apptPhone');

            let valid = true;
            [name, phone].forEach(field => {
                if (field && !field.value.trim()) {
                    field.style.borderColor = 'var(--coral)';
                    valid = false;
                } else if (field) {
                    field.style.borderColor = 'rgba(255,255,255,0.3)';
                }
            });

            if (valid) {
                showFormSuccess(appointmentForm, true);
            }
        });
    }

    // ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', (e) => {
            const target = document.querySelector(link.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

});

// ===== HELPER FUNCTIONS =====

function openModal(modal) {
    modal.style.display = 'flex';
    // Force reflow
    modal.offsetHeight;
    modal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeModal(modal) {
    modal.classList.remove('active');
    document.body.style.overflow = '';
    setTimeout(() => {
        modal.style.display = 'none';
    }, 300);
}

function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function showFormSuccess(form, isAppointment = false) {
    const btn = form.querySelector('button[type="submit"], .btn-primary');
    const originalText = btn.textContent;
    btn.textContent = '✓ Sent Successfully!';
    btn.style.background = 'var(--soft-green)';
    btn.style.color = 'var(--white)';
    
    // Reset form
    form.reset();
    
    setTimeout(() => {
        btn.textContent = originalText;
        btn.style.background = '';
        btn.style.color = '';
    }, 3000);
}

// ===== CASE STUDY DATA =====
function getCaseStudyData(id) {
    const studies = {
        'case-1': {
            title: 'Aarav\'s Communication Journey',
            subtitle: 'Speech Therapy Success Story',
            age: '4 years old',
            description: 'Aarav was diagnosed with speech delay at age 2.5. When he joined WeCalp, he could only say a few words and relied heavily on gestures. Through our intensive speech therapy program combined with play-based learning, Aarav has made remarkable progress over 18 months.',
            before: 'Limited to 5-6 words, frequent frustration, difficulty expressing needs, no sentence formation',
            after: 'Speaks in full sentences, expresses emotions clearly, improved social interaction, participates actively in group activities',
            story: 'Our speech therapists worked closely with Aarav\'s family to create a consistent communication environment both at the center and at home. Using visual aids, interactive games, and music therapy, Aarav gradually built his vocabulary and confidence.'
        },
        'case-2': {
            title: 'Meera\'s Motor Skills Milestone',
            subtitle: 'Occupational Therapy Success',
            age: '5 years old',
            description: 'Meera came to WeCalp with significant fine motor skill challenges. Simple tasks like holding a crayon or buttoning her shirt were extremely difficult. Our occupational therapy team designed a personalized program to strengthen her motor skills.',
            before: 'Unable to hold pencil properly, difficulty with self-care tasks, poor hand-eye coordination, struggled with daily activities',
            after: 'Writes her name independently, dresses herself, improved coordination, participates in art activities with confidence',
            story: 'Using sensory integration techniques and progressive motor skill exercises, our OT team helped Meera develop strength and control in her hands. Fun activities like clay modeling, bead threading, and finger painting made therapy feel like play.'
        },
        'case-3': {
            title: 'Rohan\'s Behavioral Transformation',
            subtitle: 'ABA Therapy & Special Education',
            age: '6 years old',
            description: 'Rohan exhibited challenging behaviors including frequent meltdowns, difficulty following routines, and limited social engagement. Through our ABA therapy and special education program, he has shown incredible growth.',
            before: 'Frequent tantrums (5-6 daily), unable to sit for more than 2 minutes, no peer interaction, routine resistance',
            after: 'Self-regulation skills developed, attends 30-minute sessions, has 2 friends at center, follows daily routine independently',
            story: 'Our behavior analysts created a structured behavior support plan with positive reinforcement strategies. Combined with our special education curriculum, Rohan learned to manage his emotions and engage meaningfully with peers and learning activities.'
        },
        'case-4': {
            title: 'Priya\'s Early Intervention Win',
            subtitle: 'Early Intervention Program',
            age: '18 months old',
            description: 'Priya\'s parents noticed developmental delays at 12 months. By starting early intervention at WeCalp, they gave her the best possible head start. Our team worked on multiple developmental domains simultaneously.',
            before: 'Not reaching developmental milestones, limited eye contact, no babbling, poor muscle tone',
            after: 'Meeting age-appropriate milestones, responsive eye contact, first words emerging, improved strength and movement',
            story: 'Early intervention is crucial, and Priya\'s case demonstrates this beautifully. Our multidisciplinary team — including speech therapists, occupational therapists, and special educators — created an integrated plan that addressed all areas of development.'
        },
        'case-5': {
            title: 'Arjun\'s Independent Living Skills',
            subtitle: 'Life Skills & Vocational Training',
            age: '16 years old',
            description: 'Arjun, a teenager with intellectual disability, joined our life skills program to prepare for greater independence. Our focus was on practical skills that would help him navigate daily life with confidence.',
            before: 'Dependent on caregivers for daily activities, no money concept, unable to use public transport, limited social skills',
            after: 'Manages personal hygiene independently, understands basic transactions, travels supervised, communicates needs effectively',
            story: 'Our real-world training program took Arjun on supervised community outings — to markets, parks, and public transport. Combined with in-center practice sessions, he developed the confidence and skills to handle many daily tasks on his own.'
        },
        'case-6': {
            title: 'Ananya\'s Cognitive Growth',
            subtitle: 'Cognitive Development Program',
            age: '7 years old',
            description: 'Ananya struggled with basic cognitive tasks including memory, attention, and problem-solving. Our cognitive development program used evidence-based techniques to strengthen her thinking skills.',
            before: 'Short attention span (under 1 minute), unable to sort objects, no pattern recognition, memory challenges',
            after: 'Sustains attention for 15+ minutes, completes puzzles independently, recognizes patterns, improved academic readiness',
            story: 'Using a combination of computer-based cognitive training, structured play activities, and one-on-one instruction, our team helped Ananya build the foundational cognitive skills she needed. Her parents noticed improvements not just at the center, but in everyday activities at home.'
        }
    };
    return studies[id] || null;
}

function populateCaseModal(modal, data) {
    const content = modal.querySelector('.modal-content');
    content.innerHTML = `
        <button class="modal-close" aria-label="Close modal">✕</button>
        <h2>${data.title}</h2>
        <div class="modal-subtitle">${data.subtitle} · ${data.age}</div>
        <p>${data.description}</p>
        <h3>📖 The Journey</h3>
        <p>${data.story}</p>
        <h3>📊 Progress Comparison</h3>
        <div class="modal-progress">
            <div class="progress-box before">
                <h4>❌ Before</h4>
                <p>${data.before}</p>
            </div>
            <div class="progress-box after">
                <h4>✅ After</h4>
                <p>${data.after}</p>
            </div>
        </div>
    `;
    // Re-attach close handler
    content.querySelector('.modal-close').addEventListener('click', () => closeModal(modal));
}
