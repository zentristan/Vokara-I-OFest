var typed = new Typed('#typed-text', {
    strings: ['Kerjakan Project Nyata, Bukan Sekadar Tugas', 'Dari Siswa Jadi Freelancer Siap Kerja',
        'Bangun Portofolio Nyata Sebelum Lulus'
    ],
    typeSpeed: 40,
    backSpeed: 30,
    backDelay: 4000,
    loop: true,
});

let lastScroll = 0;
let scrollTimer = null;

const navbar = document.getElementById('mainNavbar');
window.addEventListener('scroll', () => {
  const current = window.scrollY;

  clearTimeout(scrollTimer);

  if (current > lastScroll) {
    navbar.classList.add('bounce-down');
    navbar.classList.remove('bounce-up');
  } else if (current < lastScroll) {
    navbar.classList.add('bounce-up');
    navbar.classList.remove('bounce-down');
  }

  // Setelah scroll berhenti, hapus class → navbar spring balik ke posisi normal
  scrollTimer = setTimeout(() => {
    navbar.classList.remove('bounce-down', 'bounce-up');
  }, 150);

  lastScroll = current <= 0 ? 0 : current;
});