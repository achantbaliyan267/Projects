<!-- Announcement Strip -->
  <!-- <div class="announcement-strip">
    <div class="announcement-text fw-bold">
    Admissions Open 2026 Apply Now! | Admissions Open 2026 Apply Now! | Admissions Open 2026 Apply Now!
    </div>
  </div> -->

<style>
/* Toggler */
.navbar-toggler {
  border-color: #ffc107;
}
.navbar-toggler-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='%23ffc107' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

/* Announcement strip */
.announcement-strip {
  width: 100%;
  background: #ffc107;
  color: #000;
  padding: 8px 0;
  overflow: hidden;
  position: relative;   /* not sticky */
  z-index: 1031;
  text-align: center;
}
.announcement-text {
  display: inline-block;
  white-space: nowrap;
  padding-left: 100%;
  animation: scroll-left 15s linear infinite;
}
@keyframes scroll-left {
  0%   { transform: translateX(0); }
  100% { transform: translateX(-100%); }
}

/* Navbar positions */
.navbar {
  position: fixed;
  top: 0px;        /* sits below strip initially */
  left: 0;
  width: 100%;
  z-index: 9999;
  transition: top 0.3s ease;
}

/* When page scrolled past strip */
.navbar.navbar-scrolled {
  top: 0;
}
</style>
<script>
document.addEventListener('DOMContentLoaded', () => {
  const navbar = document.querySelector('.navbar');
  const stripHeight = document.querySelector('.announcement-strip').offsetHeight;

  window.addEventListener('scroll', () => {
    if (window.scrollY > stripHeight) {
      navbar.classList.add('navbar-scrolled');
    } else {
      navbar.classList.remove('navbar-scrolled');
    }
  });
});
</script>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <div class="container shadow-sm">
    <!-- Logo -->
    <a class="navbar-brand" href="/">
      <img src="./media/imtpilllogo.png" alt="Logo" style="height:86px; margin-left: -9px !important;
    margin: 2px;">
    </a>

    <!-- Toggler (Mobile) -->
    <button class="navbar-toggler border-0" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav Links -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Campus Placements</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Summer Internships</a></li>
        <li class="nav-item"><a class="nav-link" href="#">CORPORATE CONNECT</a></li>
        
        <!-- Dropdown Menu -->
        
      </ul>

      <!-- Contact Us Button -->
      <a href="../contact-us.php" class="btn btn-warning border-dark rounded-pill mx-3">
        CONTACT US
      </a>
    </div>
  </div>
</nav>


<!-- Search Bar (Hidden by default) -->
<!-- <div id="searchBar" class="search-bar bg-light shadow-sm position-absolute w-100">
  <div class="search-overlay d-flex align-items-center justify-content-center">
    <div class="container py-5 text-center">
      
      <div class="logo-bg"></div>
      
      <h3 class="fw-bold mb-4">Search all IMT Hyderabad</h3>
      <div class="d-flex justify-content-center align-items-center gap-2 flex-wrap">
        <input type="text" class="form-control rounded-pill w-50" placeholder="Search by Keyword...">
        <button class="btn btn-outline-warning fw-semibold rounded-pill border-dark px-4">Search</button>
        <button class="btn btn-link text-danger fs-4" id="searchClose">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>


      <div class="mt-4">
        <p class="mb-2 fw-semibold">Quick Links:</p>
        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill me-2">Admissions</a>
        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill me-2">Programs</a>
        <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill">Faculty & Research</a>
      </div>
    </div>
  </div>
</div> -->
<!-- Back to Top Button -->
<button type="button" class="btn btn-warning btn-lg" id="btn-back-to-top"> ↑ </button>
