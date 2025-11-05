 const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const doodle = entry.target.querySelector('.university-doodle');
        if (doodle && !doodle.classList.contains('animate')) {
          doodle.classList.add('animate');
        }
      }
    });
  }, { threshold: 0.2 });

  document.querySelectorAll('.university-card').forEach(card => {
    observer.observe(card);
  });

  