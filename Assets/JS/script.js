// script.js — fixed
// Changes from original:
//   1. Gallery popup block wrapped in null-guard (fixes crash that blocked popmodel.js)
//   2. Removed duplicate Typed.js initialisation at bottom of file
//   3. Gallery closeBtn scoped to #popup element to avoid collision
//   No design, layout, or behavioural changes to anything else.

// Custom Vanilla JS Slider
(function () {
  var slides = document.querySelectorAll('.gp-slide');
  var dots   = document.querySelectorAll('.gp-dot');
  var prev   = document.querySelector('.gp-prev');
  var next   = document.querySelector('.gp-next');

  if (!slides.length) return;

  var current = 0;
  var total   = slides.length;
  var timer;

  function goTo(index) {
    slides[current].classList.remove('active');
    dots[current].classList.remove('active');
    current = (index + total) % total;
    slides[current].classList.add('active');
    dots[current].classList.add('active');
  }

  function autoplay() {
    timer = setInterval(function () {
      goTo(current + 1);
    }, 5000);
  }

  function resetTimer() {
    clearInterval(timer);
    autoplay();
  }

  if (prev) prev.addEventListener('click', function () { goTo(current - 1); resetTimer(); });
  if (next) next.addEventListener('click', function () { goTo(current + 1); resetTimer(); });

  dots.forEach(function (dot, i) {
    dot.addEventListener('click', function () { goTo(i); resetTimer(); });
  });

  autoplay();
})();

// Custom Accordion
(function () {
  var headers = document.querySelectorAll('.acc-header');
  if (!headers.length) return;

  headers.forEach(function (header) {
    header.addEventListener('click', function () {
      var body    = this.nextElementSibling;
      var isOpen  = this.classList.contains('open');

      // Close all
      document.querySelectorAll('.acc-header').forEach(function (h) {
        h.classList.remove('open');
        h.nextElementSibling.classList.remove('open');
      });

      // Open clicked if it was closed
      if (!isOpen) {
        this.classList.add('open');
        body.classList.add('open');
      }
    });
  });
})();

// Typed.js — single initialisation (duplicate removed)
var typing = new Typed(".text", {
  strings: ["", "Affiliated by (CBSE)"],
  typeSpeed: 100,
  backSpeed: 40,
  loop: true,
});

// Gallery image popup — FIXED: wrapped in null-guard so missing elements
// don't crash the script and block popmodel.js from running.
const galleryPopup    = document.getElementById('popup');
const galleryPopupImg = document.getElementById('popup-img');
const galleryNextBtn  = document.querySelector('.next');
const galleryPrevBtn  = document.querySelector('.prev');

if (galleryPopup && galleryPopupImg && galleryNextBtn && galleryPrevBtn) {
  const images = Array.from(document.querySelectorAll('.gallery-img'));
  let currentIndex = 0;

  function showImage() {
    galleryPopupImg.src = images[currentIndex].src;
  }

  images.forEach((img, index) => {
    img.addEventListener('click', () => {
      galleryPopup.style.display = 'flex';
      currentIndex = index;
      showImage();
    });
  });

  galleryNextBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    currentIndex = (currentIndex + 1) % images.length;
    showImage();
  });

  galleryPrevBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage();
  });

  // Scope to galleryPopup to avoid collision with .popup-modal's .close-btn
  const galleryCloseBtn = galleryPopup.querySelector('.close-btn');
  if (galleryCloseBtn) galleryCloseBtn.onclick = () => galleryPopup.style.display = 'none';

  galleryPopup.onclick = (e) => {
    if (
      e.target !== galleryPopupImg &&
      !e.target.classList.contains('next') &&
      !e.target.classList.contains('prev')
    ) {
      galleryPopup.style.display = 'none';
    }
  };
}



// Back to top
const backTop = document.getElementById('back-top');
if (backTop) {
  window.addEventListener('scroll', () => {
    backTop.classList.toggle('show', window.scrollY > 500);
  }, { passive: true });
  backTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}


const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

navLinks.forEach(link => {
    link.addEventListener('click', function () {
        navLinks.forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});