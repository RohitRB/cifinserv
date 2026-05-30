/**
 * Chirag Investcare Finserv LLP — site interactions
 */
(function () {
    'use strict';

    const header = document.getElementById('site-header');
    const floatingCta = document.getElementById('floating-cta');

    /* Sticky header shadow */
    function onScroll() {
        if (header) {
            header.classList.toggle('scrolled', window.scrollY > 20);
        }
        if (floatingCta) {
            floatingCta.classList.toggle('visible', window.scrollY > 400);
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    /* Close mobile menu on link click */
    const navCollapse = document.getElementById('mainNavbar');
    if (navCollapse) {
        navCollapse.querySelectorAll('.nav-link').forEach(function (link) {
            link.addEventListener('click', function () {
                const toggler = document.querySelector('.navbar-toggler');
                if (navCollapse.classList.contains('show') && toggler) {
                    toggler.click();
                }
            });
        });
    }

    /* Counter animation for hero stats */
    document.querySelectorAll('[data-count]').forEach(function (el) {
        const target = parseInt(el.getAttribute('data-count'), 10);
        if (!target || isNaN(target)) return;

        const observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    observer.unobserve(el);
                    animateCount(el, target);
                });
            },
            { threshold: 0.3 }
        );
        observer.observe(el);
    });

    function animateCount(el, target) {
        const duration = 1500;
        const start = performance.now();
        function step(now) {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.floor(eased * target).toLocaleString();
            if (progress < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }

    /* Scroll reveal */
    const revealEls = document.querySelectorAll(
        '.service-card, .testimonial-card, .feature-box, .compare-card, .reason-card, .process-step, .leadership-card'
    );
    if ('IntersectionObserver' in window) {
        const revealObs = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                        revealObs.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
        );
        revealEls.forEach(function (el) {
            el.style.opacity = '0';
            revealObs.observe(el);
        });
    }

    /* Contact form demo submit */
    document.querySelectorAll('.site-contact-form').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }
            const btn = form.querySelector('[type="submit"]');
            const original = btn.textContent;
            btn.disabled = true;
            btn.textContent = 'Sending…';
            setTimeout(function () {
                btn.textContent = 'Thank you — we\'ll be in touch!';
                btn.classList.remove('btn-primary');
                btn.classList.add('btn-success');
                setTimeout(function () {
                    form.reset();
                    btn.disabled = false;
                    btn.textContent = original;
                    btn.classList.add('btn-primary');
                    btn.classList.remove('btn-success');
                    form.classList.remove('was-validated');
                }, 3000);
            }, 800);
        });
    });

    /* Smooth anchor scroll offset for sticky header */
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const id = this.getAttribute('href');
            if (id.length < 2) return;
            const target = document.querySelector(id);
            if (!target) return;
            e.preventDefault();
            const offset = (header ? header.offsetHeight : 0) + 16;
            const top = target.getBoundingClientRect().top + window.scrollY - offset;
            window.scrollTo({ top: top, behavior: 'smooth' });
        });
    });
})();
