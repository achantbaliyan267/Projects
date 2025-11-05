<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <title>DJ AYURVEDA COLLEGE</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

<?php include "./components/head.php" ?>
</head>

<body class="contact-page">

  <?php include "./components/navbar.php" ?>


  <main class="main">

    <!-- Page Title -->
     <div class="page-title dark-background" style="background-image: url(../assets/img/education/banner.webp); ">
    <div class="container position-relative py-5">
    <div class="badage">Contact Us</div>
    <h1><span class="gradient">Contact Us</span></h1>
   <p>
  We’d love to hear from you! Whether you have questions about our courses, 
  admissions, or services, our team is here to assist you. <br>
  Reach out to us through phone, email, or by visiting our campus — 
  we’ll be happy to guide you and provide the information you need.
</p>


    <nav class="breadcrumbs mt-2">
      <ol>
        <li><a href="/">Home</a></li>
        <li class="current">Contact Us</li>
      </ol>
    </nav>
  </div>
</div>

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Contact Info Boxes -->
        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="info-content">
                <h4>Our Address</h4>
                <p>Niwari Road, <br> Modinagar,
                  Distt. - Ghaziabad, (U.P.). - 201204, India
                  </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="info-content">
                <h4>Email Address</h4>
                <p>djayurmedical@gmail.com</p>
                <p><b>Website:</b> djayurvedacollege.com</p>
                <p></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="info-content">
                <h4>Contact Us</h4>
                <p>9690846336 <br> 9634012133 <br> 7351843160</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Google Maps (Full Width) -->
      <div class="map-section" data-aos="fade-up" data-aos-delay="200">
       <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Divya Jyoti Ayurvedic Medical College & Hospital Ajit Mahal, Modinagar - Niwari Rd, opposite DJ Dental College, Uttar Pradesh 201204&amp;t=h&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
      </div>
      <!-- Contact Form Section (Overlapping) -->
      <div class="container form-container-overlap">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-10">
            <div class="contact-form-wrapper">
              <h2 class="text-center mb-4">Get in Touch</h2>

                 <form action="./forms/contact.php" method="post" class="php-email-form">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-with-icon">
                          <i class="bi bi-person"></i>
                          <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="input-with-icon">
                          <i class="bi bi-envelope"></i>
                          <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="input-with-icon">
                          <i class="bi bi-text-left"></i>
                          <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <div class="input-with-icon">
                          <i class="bi bi-chat-dots message-icon"></i>
                          <textarea class="form-control" name="message" placeholder="Write Message..." style="height: 180px" required></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="col-12 text-center">
                      <button type="submit" class="btn btn-primary btn-submit">SEND MESSAGE</button>
                    </div>
                  </div>
                </form>

            </div>
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

<?php include "./components/footer.php" ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="../assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.querySelector(".php-email-form").addEventListener("submit", function(e) {
  e.preventDefault(); // stop normal submission

  let form = this;
  let formData = new FormData(form);

  fetch(form.action, {
    method: "POST",
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === "success") {
      Swal.fire({
        icon: "success",
        title: "Message Sent!",
        text: data.message,
      });
      form.reset();
    } else {
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: data.message,
      });
    }
  })
  .catch(() => {
    Swal.fire({
      icon: "error",
      title: "Error!",
      text: "Something went wrong. Please try again.",
    });
  });
});
</script>
</body>


</html>