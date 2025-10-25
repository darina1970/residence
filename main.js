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
});