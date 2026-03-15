// ── Popup modal saat halaman dimuat ─────────────────────────
document.addEventListener("DOMContentLoaded", function() {
  var imageSliderModal = new bootstrap.Modal(document.getElementById("imageSliderModal"));
  imageSliderModal.show();
  console.log('🔴 REGULAR LOADING');
  console.log('Semua gambar dimuat langsung tanpa optimasi');
  console.log('Total images:', document.querySelectorAll('img').length);
});

// ── Smooth scroll anchor ────────────────────────────────────
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('a[href^="#section-"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      var target = document.querySelector(this.getAttribute('href'));
      if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });
});

// ── Scroll reveal ───────────────────────────────────────────
const io = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('on'); io.unobserve(e.target); }
  });
}, { threshold: 0.08 });
document.querySelectorAll('.reveal').forEach(el => io.observe(el));

// ── Generic Carousel Factory ────────────────────────────────
function makeCarousel({ trackId, prevId, nextId, dotsId, slideClass, visibleFn }) {
  const track  = document.getElementById(trackId);
  const dotsEl = document.getElementById(dotsId);
  if (!track) return;

  const slides = track.querySelectorAll('.' + slideClass);
  const total  = slides.length;
  if (total === 0) return;

  let current = 0;
  let pagePos  = []; // valid page start positions, rebuilt on resize

  function getVisible() {
    const w = track.parentElement.parentElement.offsetWidth;
    if (visibleFn) return visibleFn(w);
    return w >= 1200 ? 5 : w >= 992 ? 4 : w >= 768 ? 3 : w >= 576 ? 2 : 1;
  }

  // Build page positions capped at (total - vis) so last page never has empty slots
  function calcPages() {
    const vis      = getVisible();
    const maxStart = Math.max(0, total - vis);
    const pos      = [];
    for (let i = 0; i * vis < total; i++) {
      const p = Math.min(i * vis, maxStart);
      if (!pos.length || pos[pos.length - 1] !== p) pos.push(p);
    }
    return pos;
  }

  function buildDots() {
    pagePos = calcPages();
    dotsEl.innerHTML = '';
    pagePos.forEach(p => {
      const d = document.createElement('div');
      d.className = 'c-dot';
      d.addEventListener('click', () => goTo(p));
      dotsEl.appendChild(d);
    });
    updateDots();
  }

  function updateDots() {
    const activeIdx = pagePos.indexOf(current);
    dotsEl.querySelectorAll('.c-dot').forEach((d, i) =>
      d.classList.toggle('active', i === activeIdx)
    );
  }

  function goTo(idx) {
    const vis = getVisible();
    // Cap to valid range — no empty slots ever shown
    current = Math.max(0, Math.min(idx, total - vis));
    // translateX uses (100/vis)*current because each slide = (100/vis)% wide
    track.style.transform = `translateX(-${(100 / vis) * current}%)`;
    updateDots();
  }

  function advance() {
    if (!pagePos.length) return;
    const i = pagePos.indexOf(current);
    goTo(i === -1 || i === pagePos.length - 1 ? pagePos[0] : pagePos[i + 1]);
  }

  function retreat() {
    if (!pagePos.length) return;
    const i = pagePos.indexOf(current);
    goTo(i <= 0 ? pagePos[pagePos.length - 1] : pagePos[i - 1]);
  }

  function setWidths() {
    const vis = getVisible();
    slides.forEach(s => s.style.minWidth = (100 / vis) + '%');
    buildDots();
    goTo(0);
  }

  document.getElementById(prevId).addEventListener('click', retreat);
  document.getElementById(nextId).addEventListener('click', advance);

  setWidths();
  window.addEventListener('resize', setWidths);
  setInterval(advance, 5000);
}

// ── Init carousels ──────────────────────────────────────────
makeCarousel({
  trackId: 'info-track', prevId: 'info-prev', nextId: 'info-next', dotsId: 'info-dots',
  slideClass: 'info-slide',
  visibleFn: w => w >= 1200 ? 5 : w >= 992 ? 4 : w >= 768 ? 3 : w >= 576 ? 2 : 1
});
makeCarousel({
  trackId: 'event-track', prevId: 'event-prev', nextId: 'event-next', dotsId: 'event-dots',
  slideClass: 'event-slide',
  visibleFn: w => w >= 1200 ? 5 : w >= 992 ? 4 : w >= 768 ? 3 : w >= 576 ? 2 : 1
});
