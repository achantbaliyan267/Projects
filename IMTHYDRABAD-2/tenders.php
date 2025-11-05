<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMT Hyderabad: Best PGDM Colleges/B Schools in Hyderabad, Telangana</title>

  <!-- Favicon -->
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link rel="icon" href="./favicon.png" type="image/png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

  <!-- AOS Animation -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="./style.css">
</head>
<body>

  <?php include "./components/navbar.php"; ?>

  <!-- ===== Banner Section ===== -->
  <section class="faculty-section">
     <div class="faculty-hero text-center text-white py-5" style="background: url(./media/banners/programs.jpg); */
    position: relative;
    background-size: cover;
    height: 50vh;">
      <h2 class="display-5 fw-bold mb-2">Tenders</h2>
      <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis animi illum <br> facere fuga eaque ducimus, praesentium in distinctio.</p>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb p-4" style="background-color:rgb(22, 57, 119);">
      <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent p-0 m-0">
            <li class="breadcrumb-item">
              <a href="/" class="text-white fw-bold text-decoration-none">Home</a>
            </li>
            <li class="breadcrumb-item active text-warning fw-bold" aria-current="page">
              Tenders
            </li>
          </ol>
        </nav>
      </div>
    </div>

<section class="model py-5">
  <div class="container">
    <div class="card p-4 shadow-lg border-0">
      <h2 class="text-center mb-4 fw-bold">Procurement</h2>
      <p>
        Quotations are invited for Website Design & Development at Institute of Management Technology, Hyderabad 
      </p>
      <p><button class="btn rounded-pill btn-warning"><strong>Click here to view</strong></button></p>

    </div>
  </div>
</section>



  <!-- ===== Footer ===== -->
  <?php include "./components/footer.php"; ?>

  <!-- ===== Scripts ===== -->
<!-- AOS (if you need it) -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



  <script>
    AOS.init({ duration: 1000, once: true });

    $(document).ready(function(){
      $("#events-carousel").owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
          0: { items: 1 },
          600: { items: 2 },
          1000: { items: 4 }
        }
      });
    });
  </script>

  <!-- Custom JS -->
  <script src="./main.js"></script>

  <style>
.model .card {
  background-color: #f9f9f9;
  border-radius: 15px;
}

.model ul {
  list-style-type: disc;
  margin-left: 20px;
  padding-left: 20px;
}

.model ul li {
  margin-bottom: 8px;
  line-height: 1.6;
}


    /* Hero Section */
    .faculty-hero {
      background: url('./media/hero.jpg') center/cover no-repeat;
      position: relative;
      height: 50vh;
    }
    .faculty-hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.3);
    }
    .faculty-hero h2,
    .faculty-hero p {
      position: relative;
      z-index: 1;
    }
    .faculty-hero h2 {
      margin-top: 130px;
    }

    /* Nav Pills */
    .faculty-tabs .nav-pills .nav-link {
      border-radius: 50rem;
      background: #e9ecef;
      color: #08317a;
      margin: 5px;
      transition: all 0.3s;
      padding: 10px 20px;
      font-size: 1rem;
    }
    .faculty-tabs .nav-pills .nav-link.active {
      background: #ffc107;
      color: #000;
    }
  </style>
</body>
</html>
