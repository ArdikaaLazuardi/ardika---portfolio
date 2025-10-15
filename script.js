// Hamburger menu for mobile nav
document.addEventListener('DOMContentLoaded', function () {
  const navToggle = document.querySelector('.nav-toggle');
  const nav = document.querySelector('header.nav nav');
  if (navToggle && nav) {
    navToggle.addEventListener('click', function () {
      nav.classList.toggle('open');
      const expanded = navToggle.getAttribute('aria-expanded') === 'true';
      navToggle.setAttribute('aria-expanded', !expanded);
    });
    // Close nav when clicking outside (mobile)
    document.addEventListener('click', function (e) {
      if (
        nav.classList.contains('open') &&
        !nav.contains(e.target) &&
        !navToggle.contains(e.target)
      ) {
        nav.classList.remove('open');
        navToggle.setAttribute('aria-expanded', 'false');
      }
    });
  }
});
// Smooth reveal on scroll (IntersectionObserver)
document.addEventListener('DOMContentLoaded', () => {
  // set the current year
  const y = new Date().getFullYear();
  const yearEl = document.getElementById('year');
  if (yearEl) yearEl.textContent = y;

  // IntersectionObserver to add .in-view for .reveal elements
  const reveals = document.querySelectorAll('.reveal');
  const obs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        // optional: unobserve to avoid repeated triggers
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  reveals.forEach(el => obs.observe(el));

  // contact form (frontend-only)
  const form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = form.name.value.trim();
      const email = form.email.value.trim();
      const msg = form.message.value.trim();
      if (!name || !email || !msg) {
        alert('Please complete all fields.');
        return;
      }
      // demo feedback
      alert(`Thanks ${name}! Your message has been sent (demo).`);
      form.reset();
    });
  }

  // small header show/hide effect
  let lastScroll = 0;
  const header = document.querySelector('.nav');
  window.addEventListener('scroll', () => {
    const s = window.scrollY;
    if (s > lastScroll && s > 80) header.style.transform = 'translateY(-70px)';
    else header.style.transform = 'translateY(0)';
    lastScroll = s;
  });

  // Typewriter effect for hero kicker
  function typeWriterEffect(element, texts, speed = 60, pause = 1200, loop = true) {
    let i = 0, j = 0, isDeleting = false;
    function type() {
      const current = texts[i];
      let display = current.substring(0, j);
      element.textContent = display;
      if (!isDeleting && j < current.length) {
        j++;
        setTimeout(type, speed);
      } else if (!isDeleting && j === current.length) {
        setTimeout(() => { isDeleting = true; type(); }, pause);
      } else if (isDeleting && j > 0) {
        j--;
        setTimeout(type, Math.max(25, speed / 2));
      } else if (isDeleting && j === 0) {
        isDeleting = false;
        i = (i + 1) % texts.length;
        setTimeout(type, 400);
      }
    }
    type();
  }

  const typeEl = document.getElementById('typewriter');
  if (typeEl) {
    typeWriterEffect(typeEl, [
      "Hello, I'm",
      "Welcome to my portfolio!",
      "Let's build something amazing.",
      "Frontend. UI. Code. Design."
    ], 55, 1200, true);
  }
});

// Smooth scroll dan aktifkan link saat di klik
document.querySelectorAll('header nav a[href^="#"]').forEach(link => {
  link.addEventListener("click", e => {
    e.preventDefault();
    const target = document.querySelector(link.getAttribute("href"));
    if (target) {
      window.scrollTo({
        top: target.offsetTop - 80,
        behavior: "smooth"
      });
    }
  });
});

// Tambahkan efek aktif saat section terlihat
const sections = document.querySelectorAll("section[id]");
const navLinks = document.querySelectorAll("header nav a");

window.addEventListener("scroll", () => {
  let scrollY = window.scrollY;

  sections.forEach(sec => {
    const sectionTop = sec.offsetTop - 150;
    const sectionHeight = sec.offsetHeight;
    const sectionId = sec.getAttribute("id");

    if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
      navLinks.forEach(link => {
        link.classList.remove("active");
        if (link.getAttribute("href") === `#${sectionId}`) {
          link.classList.add("active");
        }
      });
    }
  });
});

// Tahun otomatis di footer
document.getElementById("year").textContent = new Date().getFullYear();

// Smooth scroll saat link navbar diklik
document.querySelectorAll('header nav a[href^="#"]').forEach(link => {
  link.addEventListener("click", e => {
    e.preventDefault();
    const target = document.querySelector(link.getAttribute("href"));
    if (target) {
      window.scrollTo({
        top: target.offsetTop - 80, // offset biar tidak tertutup navbar
        behavior: "smooth"
      });
    }
  });
});
