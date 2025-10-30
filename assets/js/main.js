document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.header');

  function updateHeaderHeight() {
    const height = header.offsetHeight;
    document.documentElement.style.setProperty('--header-height', `${height}px`);
  }

  function handleScroll() {
    if (window.scrollY > 10) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }

  updateHeaderHeight();
  handleScroll();

  window.addEventListener('resize', updateHeaderHeight);
  window.addEventListener('scroll', handleScroll);

  const elements = document.querySelectorAll('.fade-in');

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.2
  });

  elements.forEach(el => observer.observe(el));

  const modal = document.getElementById('offerModal');
  const openButtons = document.querySelectorAll('.open-modal');
  const closeButton = modal.querySelector('.modal__close');
  const overlay = modal.querySelector('.modal__overlay');

  // Открыть модалку
  openButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      modal.classList.add('active');
      document.body.classList.add('hidden');
    });
  });

  // Закрыть модалку
  const closeModal = () => {
    modal.classList.remove('active');
    document.body.classList.remove('hidden');
  };

  closeButton.addEventListener('click', closeModal);
  overlay.addEventListener('click', closeModal);

  // Закрытие по ESC
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && modal.classList.contains('active')) {
      closeModal();
    }
  });
});