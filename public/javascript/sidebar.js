// Tombol Buka/Tutup Sidebar
const menuBtn = document.getElementById('menu-btn');
const sidebar = document.getElementById('sidebar');
const closeBtn = document.getElementById('close-btn');
const overlay = document.getElementById('overlay');

// Buat debug
function debugSidebarState(action) {
  console.log(`=== ${action} ===`);
  console.log('Has -translate-x-full:', sidebar.classList.contains('-translate-x-full'));
  console.log('Has translate-x-0:', sidebar.classList.contains('translate-x-0'));
  console.log('Overlay hidden:', overlay.classList.contains('hidden'));
  console.log('-------------------');
}

// Fungsi Buka Sidebar
menuBtn.addEventListener('click', () => {
  sidebar.classList.remove('-translate-x-full');
  sidebar.classList.add('translate-x-0');
  overlay.classList.remove('hidden');
  document.body.style.overflow = 'hidden';
  
  debugSidebarState('OPEN SIDEBAR');
});

// Fungsi tutup sidebar
function closeSidebar() {
  sidebar.classList.remove('translate-x-0');
  sidebar.classList.add('-translate-x-full');
  overlay.classList.add('hidden');
  document.body.style.overflow = '';
  
  debugSidebarState('CLOSE SIDEBAR');
}

closeBtn.addEventListener('click', closeSidebar);
overlay.addEventListener('click', closeSidebar);

// Biar bisa Close pake esc
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' && sidebar.classList.contains('translate-x-0')) {
    closeSidebar();
  }
});

// Biar sidebar ketutup bener bener bakayaro
document.addEventListener('DOMContentLoaded', () => {
  sidebar.classList.add('-translate-x-full');
  sidebar.classList.remove('translate-x-0');
  overlay.classList.add('hidden');
  
  debugSidebarState('INITIAL LOAD');
});

// Tabs Navbar
document.addEventListener('DOMContentLoaded', () => {
  const navbar = document.getElementById('tabs-navbar');
  const modelShowcase = document.getElementById('model-showcase');
  const sectionSpecs = document.getElementById('section-specs'); 
  const sectionExterior = document.getElementById('section-exterior');
  const sectionInterior = document.getElementById('section-interior');

  if (!navbar || !modelShowcase || !sectionSpecs || !sectionExterior ||!sectionInterior) return;

  navbar.classList.add('opacity-0', 'pointer-events-none', 'transition-opacity', 'duration-500');

  function checkVisibility() {
    const rectModel = modelShowcase.getBoundingClientRect();
    const rectSpecs = sectionSpecs.getBoundingClientRect();
    const rectExterior = sectionExterior.getBoundingClientRect();
    const rectInterior = sectionInterior.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    const inModel = rectModel.top < windowHeight * 0.8 && rectModel.bottom > 0;
    const inSpecs = rectSpecs.top < windowHeight * 0.8 && rectSpecs.bottom > 0;
    const inExterior = rectExterior.top < windowHeight * 0.8 && rectExterior.bottom > 0;
    const inInterior = rectInterior.top < windowHeight * 0.8 && rectInterior.bottom > 0;

    if (inModel || inSpecs || inExterior || inInterior) {
      navbar.classList.remove('opacity-0', 'pointer-events-none');
      navbar.classList.add('opacity-100');
    } else {
      navbar.classList.add('opacity-0', 'pointer-events-none');
      navbar.classList.remove('opacity-100');
    }
  }

  window.addEventListener('scroll', checkVisibility);
  window.addEventListener('resize', checkVisibility);
  checkVisibility();
});