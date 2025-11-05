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

<body class="campus-facilities-page">

 <?php include "./components/navbar.php" ?>


  <main class="main">

    <!-- Page Title -->
   <div class="page-title dark-background" style="background-image: url(./assets/img/BAMSBanner.webp); ">
      <div class="container position-relative py-5">
        <div class="badage">Hospital</div>
        <h1><span class="gradient">Our Hospital</span> </h1>
        <p>Bachelor of Ayurvedic Medicine and Surgery - Master the ancient science <br>
        of Ayurveda and modern medical practices in this comprehensive 5.5-year
        program</p>
        <nav class="breadcrumbs mt-2" >
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Hospital</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Campus Facilities Section -->
    <section id="campus-facilities" class="campus-facilities section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Introduction -->
        <div class="intro-row">
          <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
              <div class="intro-content">
                <h2 class="fw-bold">Experience Our Hospital</h2>
                <p class="lead">Blending traditional Ayurveda with modern healthcare.</p>
                <p>Discover compassionate Ayurvedic care with modern facilities. Our hospital offers OPD, IPD, Panchakarma, and diagnostic services, while providing students with hands-on clinical training and real-world patient care experience.</p>
                <div class="stats-container">
                  <div class="stat-item">
                    <span class="stat-number">120+</span>
                    <span class="stat-label">OPD Numbers</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number">45 +</span>
                    <span class="stat-label">Expert Doctors</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number">15k+</span>
                    <span class="stat-label">Students</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
              <div class="intro-image-container">
                <div class="intro-image main-image">
                  <img src="assets/img/education/banner.webp" alt="Main Campus" class="img-fluid rounded">
                </div>
                <div class="intro-image accent-image">
                  <img src="./assets/img/hospital/1.webp" alt="Campus Feature" class="img-fluid rounded">
                </div>
                <!-- Button -->
<div class="tour-button text-center">
  <a href="#" class="btn-tour" data-bs-toggle="modal" data-bs-target="#videoModal">
    <i class="bi bi-play-circle-fill"></i> View More
  </a>
</div>

<!-- Modal -->
<section id="faculties">
  <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content video-modal">
      <button type="button" class="btn-close btn-close-white close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="ratio ratio-16x9">
        <iframe id="videoFrame" 
                src="" 
                title="Video player" 
                allow="autoplay; encrypted-media" 
                allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
</section>

<script>
  // Handle video autoplay
  const videoModal = document.getElementById('videoModal');
  const videoFrame = document.getElementById('videoFrame');

  videoModal.addEventListener('show.bs.modal', function () {
    videoFrame.src = "./assets/img/hospitalvideo.mp4";
  });

  videoModal.addEventListener('hidden.bs.modal', function () {
    videoFrame.src = "";
  });
</script>

<style>
/* Modal background overlay */
.modal-backdrop.show {
  background: rgba(0, 0, 0, 0.9);
}

/* Modal content styling */
.video-modal {
  background: #000;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0px 0px 25px rgba(0,0,0,0.6);
  position: relative;
}

/* Close button styling */
.video-modal .close-btn {
  position: absolute;
  top: 10px;
  right: 15px;
  z-index: 1051;
  border-radius: 50%;
  padding: 8px;
  transition: all 0.3s ease;
}


/* Button styling */
.btn-tour {
  display: inline-block;
  padding: 12px 25px;
  font-size: 18px;
  font-weight: 600;
  color: #fff;
  background: linear-gradient(135deg, #d81b60, #f69322);
  border-radius: 50px;
  text-decoration: none;
  transition: all 0.3s ease;
}

.btn-tour:hover {
  transform: scale(1.05);
  box-shadow: 0px 5px 15px rgba(0,0,0,0.3);
}
</style>

              </div>
            </div>
          </div>
        </div>

        <!-- Facilities Tabs (RESPONSIVE UPDATED) -->
<div class="facilities-tabs" data-aos="fade-up" data-aos-delay="200">
  <!-- RESPONSIVE NAV TABS: wraps on small screens, scrolls if needed -->
  <ul class="nav nav-tabs flex-wrap gap-2 py-2" role="tablist" style="overflow-x: auto; padding-bottom: 0.5rem;">
    <li class="nav-item flex-shrink-0" role="presentation">
      <button class="nav-link active px-3 py-2" id="academic-tab" data-bs-toggle="tab" data-bs-target="#campus-facilities-academic" type="button" role="tab">
        <i class="bi bi-hospital me-1"></i> Hospital OPD
      </button>
    </li>
    <li class="nav-item flex-shrink-0" role="presentation">
      <button class="nav-link px-3 py-2" id="athletic-tab" data-bs-toggle="tab" data-bs-target="#campus-facilities-athletic" type="button" role="tab">
        <i class="bi bi-flower3 me-1"></i> Health Campus
      </button>
    </li>
    <li class="nav-item flex-shrink-0" role="presentation">
      <button class="nav-link px-3 py-2" id="residential-tab" data-bs-toggle="tab" data-bs-target="#campus-facilities-residential" type="button" role="tab">
        <i class="bi bi-hospital-fill me-1"></i> Panchakarma & Yoga
      </button>
    </li>
    <li class="nav-item flex-shrink-0" role="presentation">
      <button class="nav-link px-3 py-2" id="community-tab" data-bs-toggle="tab" data-bs-target="#campus-facilities-community" type="button" role="tab">
        <i class="bi bi-person-heart me-1"></i> Doctors
      </button>
    </li>
  </ul>


  <div class="tab-content">
    <!-- Academic Facilities Tab -->
    <div class="tab-pane fade show active" id="campus-facilities-academic" role="tabpanel">
      <!-- RESPONSIVE COLUMNS: stack on mobile (col-12), split on desktop (col-md-7/5) -->
      <div class="row gy-4">
        <div class="col-12 col-md-7" data-aos="fade-right" data-aos-delay="100">
          <div class="facility-highlight">
            <div class="facility-slider">
              <div class="facility-slide">
                <!-- RESPONSIVE IMAGE: scales to container -->
                <img src="./assets/img/hospital/2.webp" alt="Library" class="img-fluid rounded w-100">
                <div class="slide-caption">Hospital OPD</div>
              </div>
            </div>
            <div class="facility-description">
              <h3>Hospital OPD</h3>
              <p>Providing compassionate and authentic Ayurvedic healthcare through our dedicated Outpatient Department.</p>
              <b class="colorchange">Comprehensive Ayurvedic Outpatient Services</b>
              <p>Our OPD offers a wide range of consultations and treatments based on traditional Ayurvedic principles, combining ancient wisdom with modern diagnostic support to ensure holistic patient care.</p>
              <ul class="feature-list">
                <li><i class="bi bi-check-circle-fill"></i> Specialized clinics for chronic ailments and lifestyle disorders</li>
                <li><i class="bi bi-check-circle-fill"></i> Experienced Vaidyas (Ayurvedic doctors) for personalized consultations</li>
                <li><i class="bi bi-check-circle-fill"></i>Advanced diagnostic facilities for accurate assessment</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-5" data-aos="fade-left" data-aos-delay="200">
          <div class="facility-cards">
            <div class="facility-card mb-3"> <!-- mb-3 for mobile spacing -->
              <div class="icon-container">
                <i class="bi bi-laptop"></i>
              </div>
              <h4>Specialist Clinics</h4>
              <p>Explore our various specialty clinics for skin diseases, joint disorders, and pediatric care. </p>
              <span class="info-badge"><i class="bi bi-info-circle"></i> 10+ Specialized Clinics</span>
            </div>

            <div class="facility-card">
              <div class="icon-container">
                <i class="bi bi-flask"></i>
              </div>
              <h4>Patient Footfall</h4>
              <p>Our OPD caters to a large number of patients seeking genuine Ayurvedic care daily.</p>
              <span class="info-badge"><i class="bi bi-info-circle"></i> 200+ Daily Patients</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Athletic Facilities Tab -->
    <div class="tab-pane fade" id="campus-facilities-athletic" role="tabpanel">
      <div class="row gy-4">
        <div class="col-12 col-md-7" data-aos="fade-right" data-aos-delay="100">
          <div class="facility-highlight">
            <div class="facility-slider">
              <div class="facility-slide">
                <img src="./assets/img/hospital/3.webp" alt="Athletic Center" class="img-fluid rounded w-100">
                <div class="slide-caption">Medical Camps</div>
              </div>
            </div>
            <div class="facility-description">
              <h3>Medical Camps</h3>
              <p>Extending the benefits of Ayurveda to underserved communities through our dedicated health camps.</p>
              <b class="colorchange">Community Healthcare Initiatives</b>
              <p>As part of our commitment to social welfare, Divya Jyoti organizes regular medical camps in rural and urban areas, providing free consultations, health check-ups, and Ayurvedic medicines to those in need.</p>
              <ul class="feature-list">
                <li><i class="bi bi-check-circle-fill"></i> Free Ayurvedic consultations and health check-ups</li>
                <li><i class="bi bi-check-circle-fill"></i>Distribution of essential medicines and herbal supplements</li>
                <li><i class="bi bi-check-circle-fill"></i>Awareness sessions on preventative healthcare and lifestyle</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-5" data-aos="fade-left" data-aos-delay="200">
          <div class="facility-cards">
            <div class="facility-card mb-3">
              <div class="icon-container">
                <i class="bi bi-water"></i>
              </div>
              <h4>Camps Conducted</h4>
              <p>We actively organize multiple camps throughout the year to reach diverse populations.</p>
              <span class="info-badge"><i class="bi bi-info-circle"></i> 10+ Camps Annually</span>
            </div>

            <div class="facility-card">
              <div class="icon-container">
                <i class="bi bi-stopwatch"></i>
              </div>
              <h4>People Served</h4>
              <p>Our outreach programs have positively impacted thousands of lives in the region.</p>
              <span class="info-badge"><i class="bi bi-info-circle"></i> 5000+ People Served</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Residential Facilities Tab -->
    <div class="tab-pane fade" id="campus-facilities-residential" role="tabpanel">
      <div class="row gy-4">
        <div class="col-12 col-md-7" data-aos="fade-right" data-aos-delay="100">
          <div class="facility-highlight">
            <div class="facility-slider">
              <div class="facility-slide">
                <img src="./assets/img/hospital/4.webp" alt="Residence Hall" class="img-fluid rounded w-100">
                <div class="slide-caption">Panchkarma </div>
              </div>
            </div>
            <div class="facility-description">
              <h3>Panchkarma & Yoga Therapy</h3>
              <p>Experience profound detoxification and rejuvenation through our traditional Panchkarma and Yoga therapies.</p>
              <b class="colorchange">Revitalize Your Body and Mind Naturally</b>
              <p>Our dedicated center offers authentic Panchkarma treatments and therapeutic yoga sessions, guided by certified experts. These therapies are designed to cleanse the body, balance the doshas, and restore overall well-being.</p>
              <ul class="feature-list">
                <li><i class="bi bi-check-circle-fill"></i> Individualized Panchkarma treatment plans</li>
                <li><i class="bi bi-check-circle-fill"></i> Yoga for specific health conditions</li>
                <li><i class="bi bi-check-circle-fill"></i> Expert guidance for holistic healing </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-5" data-aos="fade-left" data-aos-delay="200">
          <div class="facility-cards">
            <div class="facility-card mb-3">
              <div class="icon-container">
                <i class="bi bi-cup-hot"></i>
              </div>
              <h4>Therapy Rooms</h4>
              <p>We have modern, well-equipped therapy rooms for a serene and effective treatment experience.</p>
              <span class="info-badge"><i class="bi bi-info-circle"></i> 10+ Therapy Rooms</span>
            </div>

            <div class="facility-card">
              <div class="icon-container">
                <i class="bi bi-shield-check"></i>
              </div>
              <h4>Certified Therapists</h4>
              <p>Our team of trained and certified therapists ensures each treatment is performed with precision and care.</p>
              <span class="info-badge"><i class="bi bi-info-circle"></i> 8 Certified Therapists</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Community Facilities Tab (Doctors List) -->
    <div class="tab-pane fade" id="campus-facilities-community" role="tabpanel">
      <div id="leadership" class="leadership">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="leadership-team mt-3">
            <!-- RESPONSIVE DOCTOR CARDS: stacks on mobile, 2/row on tablet, 3/row on desktop -->
            <div class="row g-3">
              <!-- Kayachikitsa -->
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="leader-card p-3 bg-white rounded shadow-sm"> <!-- Shadow/padding for mobile readability -->
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Rinki Langeh</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Kayachikitsa</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Priyanka Goyal</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Kayachikitsa</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Shivani Rawat</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Kayachikitsa</i></p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Megha</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Kayachikitsa</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Sharada</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Kayachikitsa</i></p>
                  </div>
                </div>
              </div>

              <!-- Panchkarma -->
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Harsh Gupta</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Panchkarma</i></p>
                  </div>
                </div>
              </div>

              <!-- Shalya -->
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Jitesh Ray</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Shalya</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Chhavi</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Shalya</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Charu Gupta</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Shalya</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Pooja Panwar</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Shalya</i></p>
                  </div>
                </div>
              </div>

              <!-- Shalak Eye -->
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Kanchan Chauhan</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Shalak Eye</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Parul Chauhan</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Shalak Eye</i></p>
                  </div>
                </div>
              </div>

              <!-- Stri Roga -->
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Rashmi Sangwan</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Stri Roga</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Shikha Shukla</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Stri Roga</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Vandana</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Stri Roga</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Varsha</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Stri Roga</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Snehalatha J</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Stri Roga</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Amit Gaur</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Stri Roga</i></p>
                  </div>
                </div>
              </div>

              <!-- Swasthyarakshan -->
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Survir Singh</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Swasthyarakshan</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Kalpana</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>Swasthyarakshan</i></p>
                  </div>
                </div>
              </div>

              <!-- SLK ENT -->
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Pooja Panwar</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>SLK ENT</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Kanchan Chauhan</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>SLK ENT</i></p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="leader-card p-3 bg-white rounded shadow-sm">
                  <div class="leader-info">
                    <h4 class="colorchange">Dr Parul Chauhan</h4>
                    <p class="position"><b class="text-dark">Department: </b><i>SLK ENT</i></p>
                  </div>
                </div>
              </div>

            </div><!-- /.row -->
          </div><!-- /.leadership-team -->

        </div>
      </div>
    </div>

  </div>
</div>
        <!-- Campus Gallery -->
        <div class="campus-gallery-section" data-aos="fade-up" data-aos-delay="300">

          <div class="gallery-grid">
            <div class="gallery-item large" data-aos="zoom-in" data-aos-delay="100">
              <img src="./assets/img/hospital/5.webp" alt="Library" class="img-fluid" loading="lazy">
              <div class="gallery-overlay">
               
              </div>
            </div>
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <img src="./assets/img/hospital/6.webp" alt="Student Center" class="img-fluid" loading="lazy">
              <div class="gallery-overlay">
               
              </div>
            </div>
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <img src="./assets/img/hospital/7.webp" alt="Dormitory" class="img-fluid" loading="lazy">
              <div class="gallery-overlay">
               
              </div>
            </div>
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <img src="./assets/img/hospital/8.webp" alt="Study Areas" class="img-fluid" loading="lazy">
              <div class="gallery-overlay">
               
              </div>
            </div>
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500">
              <img src="./assets/img/hospital/9.webp" alt="Sports Complex" class="img-fluid" loading="lazy">
              <div class="gallery-overlay">
                
              </div>
            </div>
          </div>
        </div>



        
        <!-- Campus Map -->
        <!-- <div class="campus-map-section" data-aos="fade-up" data-aos-delay="200">
          <div class="row align-items-center">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
              <div class="map-info">
                <h2>Hospital Map</h2>
                <p>Navigate our expansive campus with ease using our interactive map. Locate buildings, facilities, and services to find your way around.</p>
                <div class="map-legend">
                  <div class="legend-item">
                    <span class="marker academic"></span>
                    <span>Academic Buildings</span>
                  </div>
                  <div class="legend-item">
                    <span class="marker residential"></span>
                    <span>Residence Halls</span>
                  </div>
                  <div class="legend-item">
                    <span class="marker athletic"></span>
                    <span>Athletic Facilities</span>
                  </div>
                  <div class="legend-item">
                    <span class="marker dining"></span>
                    <span>Dining Facilities</span>
                  </div>
                  <div class="legend-item">
                    <span class="marker parking"></span>
                    <span>Parking Areas</span>
                  </div>
                </div>
                <a href="https://goldenglobetech.com/dj_group/" class="btn-map">
                  <i class="bi bi-vr"></i> Virtual Tour
                </a>

              </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
              <div class="map-container">
                <div class="ratio ratio-16x9">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.142047033408!2d-73.96257908469264!3d40.8026564793159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f7a00e3ea009%3A0x4e63c3c3d93908b5!2sColumbia%20University!5e0!3m2!1sen!2sus!4v1625598195750!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div> -->

      </div>

    </section><!-- /Campus Facilities Section -->
     
    <section class="booking-section py-5 ">
  <div class="container booking" data-aos="fade-up" data-aos-delay="100" style="box-shadow: 0 0 30px grey;
    border-radius: 29px;
    padding: 0px 28px 22px 50px; ">
<style>
    @media (max-width: 576px) {
      .booking {
        box-shadow: 0 0 30px grey;
        border-radius: 29px;
        padding: 0px 0px 22px 0px !important;
      }
    }
  </style>
    <div class="row align-items-center">
       <div class="col-lg-6 text-center text-lg-start mt-3" data-aos="fade-right" data-aos-delay="200">
       <h6>HOSPITAL DEPARTMENTS</h6>
        <h2 class="display-6 fw-bold mb-4">
          Book an Appointment with  <span class="colorchange">Our Departments</span>
        </h2>
        <div class="row g-3 mt-4">
  <div class="col-4">
  <div class="pill-box t shadow text-center">
    <i class="fa-solid fa-xl fa-stethoscope d-block mb-2"></i>
    General Medicine
  </div>
</div>

<div class="col-4">
  <div class="pill-box shadow text-center">
    <i class="fa-solid fa-xl fa-user-doctor d-block mb-2"></i>
    Surgery
  </div>
</div>

<div class="col-4">
  <div class="pill-box shadow text-center">
    <i class="fa-solid fa-xl fa-ear-listen d-block mb-2"></i>
    ENT
  </div>
</div>

<div class="col-4">
  <div class="pill-box shadow text-center">
    <i class="fa-solid fa-xl fa-baby d-block mb-2"></i>
    Pediatrics
  </div>
</div>

<div class="col-4">
  <div class="pill-box shadow text-center">
    <i class="fa-solid fa-xl fa-person-dress d-block mb-2"></i>
    Gynae
  </div>
</div>

<div class="col-4">
  <div class="pill-box shadow text-center">
    <i class="fa-solid fa-xl fa-spa d-block mb-2"></i>
    Panchkarma
  </div>
</div>

</div>
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

      </div>
      <!-- Left Column: Image + Form -->
      <div class="col-lg-6 mb-4 mb-lg-0 position-relative" data-aos="fade-left" data-aos-delay="300">
        <div class="booking-img-wrapper mt-4">
          <img src="./assets/img/hospital.webp" alt="Hospital" class="img-fluid rounded">
          <div class=" glass-form p-4">
            <h4 class="fw-bold mb-3 tex-dark">Book Appointment</h4>
            <form>
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="mb-3">
                <input type="tel" class="form-control" placeholder="Phone Number" required>
              </div>
              <div class="mb-3">
                <input type="date" class="form-control" required>
              </div>
              <button type="submit" class="btn join-btn w-100 fw-bold">Submit</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Right Column: Text + Departments -->
      

    </div>
  </div>
</section>

<style>
/* Booking Section */
.booking-section {
  background: #f1f5f4;
  padding: 60px 0;
}

/* Image Wrapper */
.booking-img-wrapper {
  position: relative;
  display: inline-block;
  width: 100%;
  overflow: hidden;
}

.booking-img-wrapper img {
  width: 100%;
  height: 60vh;
  object-fit: cover;
  clip-path: polygon(12% 0, 100% 0, 100% 100%, 1% 100%);
  /* left slant = 12%, right slant = 100% */
}

/* Tablet */
@media (max-width: 992px) {
  .booking-img-wrapper img {
    height: 60vh;
    clip-path: polygon(8% 0, 100% 0, 100% 100%, 2% 100%);
    /* gentler slant for medium screens */
  }
}

/* Mobile */
@media (max-width: 576px) {
  .booking-img-wrapper img {
    height: 60vh;
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    /* remove slant on small screens (normal rectangle) */
  }
}

/* Glassmorphism Form */
.glass-form {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border-radius: 12px;
  border: 1px solid rgba(255, 255, 255, 0.3);
  width: 80%;
  max-width: 400px;
  padding: 20px;
}

.glass-form input {
  border-radius: 8px;
  border: none;
  padding: 10px;
}

.glass-form button {
  border-radius: 8px;
  padding: 10px;
}

/* Departments Pill Style */
.pill-box {
  background:linear-gradient(145deg, #ffffff, #f0f0f0);;
  color: #5c9d00;
  font-weight: 500;
  padding: 10px 20px;
  border-radius: 10px;
  text-align: center;
  transition: all 0.3s ease;
  cursor: pointer;
  height: 100%;
}

.pill-box i {
  font-size: 30px; /* bigger icons */
  color: #5c9d00; /* green tone */
  padding: 10px !important;
  margin:15px;
}
/* ✅ MOBILE VIEW FIXES */
@media (max-width: 576px) {

  /* Reduce inner container padding */
  .booking {
    padding: 15px !important;
    border-radius: 20px;
  }

  /* Stack image + form properly */
  .booking-img-wrapper {
    margin-top: 20px;
  }

  .booking-img-wrapper img {
    width: 100%;
    height: auto;
    clip-path: none; /* remove slant on mobile */
    border-radius: 12px;
  }

  /* Move glass form below the image */
  .glass-form {
    position: static;
    transform: none;
    width: 100%;
    max-width: none;
    margin-top: 15px;
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: none;
    border: 1px solid #ddd;
  }

  /* Headings and texts center aligned */
  .booking-section h2,
  .booking-section h6 {
    text-align: center;
  }

  /* Department icons stack neatly */
  .pill-box {
    font-size: 14px;
    padding: 8px;
    margin-bottom: 12px;
  }

  .pill-box i {
    font-size: 24px;
    margin: 10px 0;
  }

  .col-4 {
    width: 50%; /* show 2 per row on mobile */
  }

  .events .section-title h2 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 0.75rem;
}
}


</style>
  </main>

<?php include "./components/footer.php" ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/php-email-form/validate.js"></script>
  <script src="./assets/vendor/aos/aos.js"></script>
  <script src="./assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="./assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="./assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="./assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>