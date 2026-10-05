(() => {
  const navToggle = document.getElementById('nav-toggle');
  const navMenu = document.getElementById('nav-menu');
  const stickyBook = document.getElementById('sticky-book');
  const header = document.getElementById('site-header');

  if (navToggle && navMenu) {
    navToggle.addEventListener('click', () => {
      const open = navToggle.getAttribute('aria-expanded') === 'true';
      navToggle.setAttribute('aria-expanded', String(!open));
      if (open) {
        navMenu.setAttribute('hidden', '');
      } else {
        navMenu.removeAttribute('hidden');
      }
    });

    navMenu.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        navToggle.setAttribute('aria-expanded', 'false');
        navMenu.setAttribute('hidden', '');
      });
    });
  }

  // Sticky Book Now after scrolling past hero / header
  if (stickyBook) {
    const revealAt = () => {
      const y = window.scrollY || document.documentElement.scrollTop;
      const threshold = Math.max((header?.offsetHeight || 56) + 120, 180);
      stickyBook.classList.toggle('is-visible', y > threshold);
    };
    revealAt();
    window.addEventListener('scroll', revealAt, { passive: true });
  }

  // Portfolio filters
  const filterBtns = document.querySelectorAll('.filter-btn');
  const items = document.querySelectorAll('.portfolio-item');
  if (filterBtns.length && items.length) {
    filterBtns.forEach((btn) => {
      btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter') || 'all';
        filterBtns.forEach((b) => b.classList.toggle('is-active', b === btn));
        items.forEach((item) => {
          const cat = item.getAttribute('data-category');
          const show = filter === 'all' || cat === filter;
          item.classList.toggle('is-hidden', !show);
        });
      });
    });
  }

  // Simple touch-friendly lightbox for placeholders / future images
  const lightbox = document.getElementById('lightbox');
  const lightboxBody = document.getElementById('lightbox-body');
  const lightboxClose = document.getElementById('lightbox-close');
  if (lightbox && lightboxBody) {
    document.querySelectorAll('[data-lightbox]').forEach((tile) => {
      tile.addEventListener('click', () => {
        const label = tile.getAttribute('data-lightbox') || 'Portfolio';
        lightboxBody.textContent = label + ' — client photos coming soon.';
        if (typeof lightbox.showModal === 'function') {
          lightbox.showModal();
        }
      });
    });
    lightboxClose?.addEventListener('click', () => lightbox.close());
    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) lightbox.close();
    });
  }
})();
