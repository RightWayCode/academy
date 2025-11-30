// mobile menu toggle
document.getElementById('mobileToggle').addEventListener('click', function () {
    document.getElementById('mobileNav').classList.toggle('hidden');
});

// hero slider
(function () {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prev = document.getElementById('prev');
    const next = document.getElementById('next');
    let idx = 0, interval;

    function show(i) {
        slides.forEach((s, j) => {
            s.style.opacity = j === i ? '1' : '0';
            s.setAttribute('aria-hidden', j === i ? 'false' : 'true');
        });
        dots.forEach((d, j) => d.classList.toggle('active', j === i));
    }

    function nextSlide() { idx = (idx + 1) % slides.length; show(idx); }
    function prevSlide() { idx = (idx - 1 + slides.length) % slides.length; show(idx); }
    next.addEventListener('click', () => { nextSlide(); resetInterval(); });
    prev.addEventListener('click', () => { prevSlide(); resetInterval(); });
    dots.forEach((d, i) => d.addEventListener('click', () => { idx = i; show(idx); resetInterval(); }));

    function start() { interval = setInterval(nextSlide, 4500); }
    function resetInterval() { clearInterval(interval); start(); }
    show(idx); start();
})();

// testimonials simple carousel
(function () {
    const slides = Array.from(document.querySelectorAll('.testi-slide'));
    const next = document.getElementById('testiNext');
    const prev = document.getElementById('testiPrev');
    let i = 0;
    function showTest(i) {
        slides.forEach((s, idx) => s.classList.toggle('hidden', idx !== i));
    }
    next.addEventListener('click', () => { i = (i + 1) % slides.length; showTest(i); });
    prev.addEventListener('click', () => { i = (i - 1 + slides.length) % slides.length; showTest(i); });
    setInterval(() => { i = (i + 1) % slides.length; showTest(i); }, 5000);
    showTest(0);
})();

// footer year
document.getElementById('year').textContent = new Date().getFullYear();