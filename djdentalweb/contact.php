 <?php session_start(); 
  ?>
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "./components/header.php" ?>
</head>

<body>
    <?php include "./components/navbar.php" ?>
    <header>
        <div class="container my-5 pb-5">
          <!-- ======================= Hero Header Section ======================= -->
          <header class="hero-section d-flex align-items-center rounded-4" style="background-image: url(./media/herosectionbanner.webp);
    object-fit: cover;
    min-height: 400px;
    background-repeat: no-repeat;
    background-size: cover;">
      <!-- Mobile/Tablet Doodle SVG -->
                         <div class="doodle-wrapper">
        <!-- Mobile/Tablet Doodle SVG -->
        <svg class="doodle mobile" width="480" height="767" viewBox="0 0 480 767" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M521.341 762.101C462.822 393.539 440.895 347.326 398.308 368.875C355.722 390.424 364.519 488.085 375.246 586.665C383.672 664.095 352.284 703.103 283.247 628.356C173.045 509.039 111.126 291.976 144.258 262.3C279.435 141.223 304.302 615.114 234.864 652.034C127.926 708.894 26.9112 379.347 -30.174 4.32244"
            stroke="#ffe6cb" stroke-opacity="0.3" stroke-width="56"></path>
        </svg>

        <!-- Desktop Doodle SVG -->
        <svg class="doodle desktop" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1048.319px" height="910px" viewBox="871.757 0 1048.319 910" style="enable-background:new 871.757 0 1048.319 910;"
        xml:space="preserve">
            <g>
                <defs>
                    <rect id="SVGID_1_" x="0" y="0" width="1920" height="910"></rect>
                </defs>
                <clipPath id="SVGID_2_">
                    <use xlink:href="#SVGID_1_" style="overflow:hidden;"></use>
                </clipPath>
                <g style="clip-path:url(#SVGID_2_);">
                    <path style="fill:none;stroke: #ffe6cb;  stroke-width:30;" d="M1999.5,993.502c-134-527.5-190.45-635.668-271.28-607.478
              c-80.83,28.192-46.71,208.77-20.37,349.576c20.7,110.598-62.63,176.401-174.891,53.991
              c-169.14-184.452-242.739-454.515-183.119-528.875c116.119-144.807,222.939,511.255,91.25,559.761
              c-202.811,74.701-416.46-399.763-548.067-936.37"></path>
                </g>
            </g>
        </svg>
     </div>
            <div class="container position-relative">
                  
              <div class="row">
                <!-- Text Content Column -->
               <div class="col-lg-7 col-md-8 p-4" >
               <h1 class="display-4 fw-bold text-white mb-3">
                Get in Touch<br>with <span class="gradient-text">DJ Dental College</span>
                </h1>
                <p class="lead text-white mb-4">
                Have questions or need assistance? Reach out to us for admission details, course information, or any other inquiries — we’re here to help you every step of the way.
                </p>
                <div class="rounded-4 px-4 pt-3 pb-4 mt-5 mt-lg-0" style="margin-left: -27px; margin-bottom: -135px; width: fit-content; background-color: #fffdfa;">
                    <a href="#" class="btn btn-dark rounded-pill p-2 mt-2 mt-lg-0">Explore More About Us</a>
                </div>
                </div>


              </div>
            </div>
          </header>
        </div>
    </header>
    <script>
        // Start doodle animation when page loads
    window.addEventListener('load', () => {
      const desktopDoodle = document.querySelector('.doodle.desktop');
      const mobileDoodle = document.querySelector('.doodle.mobile');
      
      setTimeout(() => {
        // Check screen width and show appropriate doodle
        if (window.innerWidth >= 992 && desktopDoodle) {
          // Desktop view (992px and above)
          desktopDoodle.classList.add('animate');
        } else if (window.innerWidth < 992 && mobileDoodle) {
          // Tablet and mobile view (below 992px)
          mobileDoodle.classList.add('animate');
        }
      }, 200);
    });

    // Handle window resize
    window.addEventListener('resize', () => {
      const desktopDoodle = document.querySelector('.doodle.desktop');
      const mobileDoodle = document.querySelector('.doodle.mobile');
      
      // Clear existing animations
      if (desktopDoodle) desktopDoodle.classList.remove('animate');
      if (mobileDoodle) mobileDoodle.classList.remove('animate');
      
      // Re-apply animations based on new screen size
      setTimeout(() => {
        if (window.innerWidth >= 992 && desktopDoodle) {
          desktopDoodle.classList.add('animate');
        } else if (window.innerWidth < 992 && mobileDoodle) {
          mobileDoodle.classList.add('animate');
        }
      }, 100);
    });
    </script>
    <style>
        /* ===== Doodle SVG Animation Styles ===== */
  .doodle-wrapper {
        position: absolute;
        left: 0;
        top: 0;
        width:100%;              
        height: 100%;
        overflow: hidden;         
        pointer-events: none;
        z-index: 0;
    }
    
    .doodle {
      position: absolute;
      z-index: 0;
      pointer-events: none;
    }
    
    /* Desktop Doodle - Only for screens above 992px */
    .doodle.desktop {
      display: block;
      left: 0;                    
      top: 50%;                   
      transform: translateY(-50%) scaleX(-1);   /* Vertical center + Mirror */
      width: 100%;
      max-width: 100%;
      height: 300%;
      opacity: 0;
      z-index: 0;
      animation: drawPath 1.5s ease-out 0.2s forwards, fadeIn 0.3s ease-out forwards;
    }
    
    /* Mobile/Tablet Doodle - For screens below 992px */
    .doodle.mobile {
      display: none;
      position: absolute;
      left: 0;                   
      top: 50%;                    
      transform: translateY(-50%) scaleX(-1);   /* Vertical center + Mirror */
      width: 100%;
      max-width: 100%;
      height: auto;
      opacity: 0;
      z-index: 0;
      animation: drawPath 1.5s ease-out 0.2s forwards, fadeIn 0.3s ease-out forwards;
    }

    .doodle path {
      stroke-dasharray: 4000;
      stroke-dashoffset: 4000;
      fill: none;
      stroke-opacity: 0.3;
    
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
      }
    }

    @keyframes drawPath {
      to {
        stroke-dashoffset: 0;
      }
    }
    </style>

      <!-- ======================= Contact Us Section ======================= -->
<section id="contact" class="contact-section py-5">
  <div class="container">
    <!-- Contact Info -->
    <div class="row text-center mb-5 g-4">
      <div class="col-md-4">
        <div class="p-4 rounded-4 shadow h-100" style="background-color: #f9f9f9;">
          <i class="bi bi-telephone-fill fs-3 mb-2 gradient-text"></i>
          <h6 class="fw-bold">Phone No.</h6>
          <p class="small mb-0">+91-9368564766 / 9368564775</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 rounded-4 shadow h-100" style="background-color: #f9f9f9;">
          <i class="bi bi-envelope-fill fs-3 mb-2 gradient-text"></i>
          <h6 class="fw-bold">Email</h6>
          <p class="small mb-0">admissions@djdentalcollege.com</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 rounded-4 shadow h-100" style="background-color: #f9f9f9;">
          <i class="bi bi-geo-alt-fill fs-3 mb-2 gradient-text"></i>
          <h6 class="fw-bold">Address</h6>
          <p class="small mb-0">DJ College of Dental Sciences & Research Ajit Mahal, Niwari Road, Modinagar, Distt.- Ghaziabad, U.P.</p>
        </div>
      </div>
    </div>

    <div class="row g-4 mt-5">
      <!-- Contact Form -->
      <div class="col-lg-8">
 <?php if(isset($_SESSION['register_success'])): ?>
  <div class="alert alert-success text-center">
    <?= $_SESSION['register_success']; ?>
  </div>
  <?php unset($_SESSION['register_success']); ?>
<?php elseif(isset($_SESSION['register_error'])): ?>
  <div class="alert alert-danger text-center">
    <?= $_SESSION['register_error']; ?>
  </div>
  <?php unset($_SESSION['register_error']); ?>
<?php elseif(isset($_SESSION['register_info'])): ?>
  <div class="alert alert-warning text-center">
    <?= $_SESSION['register_info']; ?>
  </div>
  <?php unset($_SESSION['register_info']); ?>
<?php endif; ?>


        <form action="forms/contact_submit.php" method="POST" class="p-4 rounded-4 shadow" style="background-color: #f9f9f9;">
          <h5 class="fw-bold mb-3 gradient-text">Get in Touch :</h5>
          <div class="row g-3">
            <div class="col-12">
              <input type="text" name="name" class="form-control rounded-pill border-0 p-3" placeholder="Name" required>
            </div>
            <div class="col-md-6">
              <input type="email" name="email" class="form-control rounded-pill border-0 p-3" placeholder="Email" required>
            </div>
            <div class="col-md-6">
              <input type="tel" name="phone" class="form-control rounded-pill border-0 p-3" placeholder="Phone" required>
            </div>
            <div class="col-12">
              <input type="text" name="subject" class="form-control rounded-pill border-0 p-3" placeholder="Subject" required>
            </div>
            <div class="col-12">
              <textarea name="message" class="form-control rounded-4 border-0 p-3" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="col-12">
              <button type="submit" name="send" class="btn btn-dark rounded-pill px-5 py-2">Submit</button>
            </div>
          </div>
        </form>
      </div>

      <!-- Google Map -->
      <div class="col-lg-4">
        <div class="p-4 rounded-4 shadow text-white" style="background-color: #f9f9f9;">
          <h5 class="fw-bold text-dark mb-3 gradient-text">Our Location :</h5>
          <iframe
            src="https://maps.google.com/maps?width=600&height=400&hl=en&q=DJ%20College%20of%20Dental%20Sciences%20%26%20Research%20Ajit%20Mahal%2C%20Niwari%20Road%2C%20Modinagar%2C%20Distt.-%20Ghaziabad%2C%20U.P.&t=&z=14&ie=UTF8&iwloc=B&output=embed"
            width="100%" height="415" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">



        <?php include "./components/footer.php"?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>