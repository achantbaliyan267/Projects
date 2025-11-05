<div id="preloader">
    <img src="./media/imtpilllogo.png" alt="Website Logo">
  </div>
<script>
  window.addEventListener('load', function () {
  const preloader = document.getElementById('preloader');
  preloader.classList.add('fade-out');
  // Optional: remove from DOM after animation
  setTimeout(() => {
    preloader.style.display = 'none';
  }, 500); // match CSS transition duration
});

</script>
<footer id="footer" class="footer position-relative dark-background">
  <div class="container footer-top">
    <div class="row gy-4">
      <!-- About / Contact -->
      <div class="col-lg-4 col-md-6 footer-about">
  <!-- Follow Us / Get Connected -->
  <h4 class="mb-3">Follow Us &amp; Get Connected</h4>

  <div class="footer-social d-flex gap-3 mb-3">
  <a href="https://facebook.com/IMTHyderabad" class="text-reset" aria-label="Facebook">
    <i class="fab fa-xl text-warning fa-facebook-f"></i>
  </a>
  <a href="https://twitter.com/IMTHyderabad" class="text-reset" aria-label="Twitter">
    <i class="fab fa-xl text-warning fa-x-twitter"></i>
  </a>
  <a href="https://www.linkedin.com/school/imthyderabad/" class="text-reset" aria-label="LinkedIn">
    <i class="fab fa-xl text-warning fa-linkedin-in"></i>
  </a>
  <a href="https://instagram.com/IMTHyderabad" class="text-reset" aria-label="Instagram">
    <i class="fab fa-xl text-warning fa-instagram"></i>
  </a>
  <a href="https://www.youtube.com/@IMTHyderabad" class="text-reset" aria-label="YouTube">
    <i class="fab fa-xl text-warning fa-youtube"></i>
  </a>
</div>


  <div class="footer-contact pt-2 ">
    <h5 class="text-warning"><b>Address:</b></h5>
    <p class="text-light">38, Cherlaguda, Shamshabad, Hyderabad-501 218, <br> India</p>
    <p class="mt-3"><strong class="text-warning">Email:</strong> <span class="text-light">info@imthyderabad.edu.in</span></p>
    <p class="text-light"><strong class="text-warning">Phone:</strong> <span>+91-08414&nbsp;671661</span></p>
   <!-- Trigger Button -->
<button type="button" class="btn btn-warning rounded-pill border-white" data-bs-toggle="modal" data-bs-target="#qrModal">
  View QR Code
</button>

<!-- Modal -->
<div class="modal fade" id="qrModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg">
      <div class="modal-header border-0">
        <h5 class="modal-title">QR Code</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <!-- <img src="./media/qr.webp" alt="QR Code" style="height:300px" class="img-fluid rounded"> -->
      </div>
    </div>
  </div>
</div>

  </div>
</div>


      <!-- Quick Links -->
      <!-- Quick Links + Other Links (Grouped Together) -->
<div class="col-lg-4 col-md-6">
  <div class="row">
    <!-- Quick Links -->
    <div class="col-6 footer-links">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="pgdm-general-management.php">PGDM</a></li>
        <li><a href="fpm-program-hyderabad.php">FPM</a></li>
        <li><a href="executive-education.php">Executive Education</a></li>
        <li><a href="placements.php">Placements</a></li>
        <li><a href="https://alumni.imthyderabad.edu.in/">Alumni</a></li>
        <li><a href="Campus-Tour.php">Campus Tour</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
      </ul>
    </div>

    <!-- Other Links -->
    <div class="col-6 footer-links">
      <h4>Other Links</h4>
      <ul>
        <li><a href="student-life-imt.php">Student Life</a></li>
        <li><a href="international-associations.php">International Relations</a></li>
        <li><a href="sponsered-research-advisory.php">Research & Advisory</a></li>
        <li><a href="mandatory-disclosure.php">Mandatory Disclosure</a></li>
        <li><a href="newsletters.php">Newsletters</a></li>
        <li><a href="online-grievance-redressal-mechanism.php">Grievance Redressal</a></li>
        <li><a href="privacy-policy.php">Privacy Policy</a></li>
      </ul>
    </div>
  </div>
</div>


      <!-- Get Connected / Apply Now -->
      <div class="col-lg-4 col-md-6 footer-subscribe">
        <h4>Get Connected</h4>
        <p class="text-light">Stay updated with the latest news, research, and programs from IMT Hyderabad. Join our community of learners and professionals to never miss an update.</p>
        <a href="https://www.imthyderabad.edu.in/admissions" class="join-btn mt-2 btn btn-warning border-white">Enquire Now</a>
         <div class="accreditations mt-4">
    <h6 class="text-white fw-bold">Accreditations</h6>
    <div class="d-flex flex-wrap align-items-center gap-3 mt-2">
      <img src="./media/acc/nba.png" alt="Accreditation 1" style="background-color:white; height:40px;">
      <img src="./media/acc/saq.png" alt="Accreditation 2" style="background-color:white; height:40px;">
      <img src="./media/acc/aiu-n.png" alt="Accreditation 3" style="background-color:white; height:40px;">
      <img src="./media/acc/aicte.png" alt="Accreditation 4" style="background-color:white; height:40px;">
      <img src="./media/aacsb-logo.webp" alt="Accreditation 4" style="background-color:white; height:40px;">
    </div>
  </div>
      </div>
    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p class="text-light">©2025 Copyright <strong class="text-warning">IMT Hyderabad.</strong> All Rights Reserved</p>
  </div>
</footer>
