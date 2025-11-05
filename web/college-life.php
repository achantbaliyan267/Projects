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

<body class="students-life-page">

 <?php include "./components/navbar.php" ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(./assets/img/BAMSBanner.webp); ">
      <div class="container position-relative py-5">
        <div class="badage">College Life</div>
        <h1><span class="gradient">College Life</span> </h1>
        <p>Step into a 5.5-year BAMS journey where Ayurveda reemerges as a modern medicine. As one of India’s leading BAMS colleges, we focus on real learning, <br> hands-on experience, and building confident, compassionate Ayurvedic doctors. With guidance for <br> MD courses and beyond, we’re here for the full journey.</p>
        <nav class="breadcrumbs mt-2" >
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">College Life</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Students Life Section -->
    <section id="students-life" class="students-life section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Hero Banner -->
        <div class="students-life-banner" data-aos="zoom-in" data-aos-delay="200">
          <div class="banner-content" data-aos="fade-right" data-aos-delay="300">
            <h2>Experience Campus Life</h2>
            <p>Campus life here is about more than simple academic classes. It’s where friendships are made, talents are discovered, and every day feels meaningful. Ayurveda, sports, events, clubs, there’s always something to look forward to.</p>
          </div>
          <img src="./assets/img/collegelife/cl1.webp" alt="Campus Life" class="img-fluid">
        </div>

        <!-- Life Categories -->
        <section id="fact-event">
          <div class="life-categories mt-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row g-4">
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
              <div class="category-card">
                <div class="icon-container">
                  <i class="bi bi-people-fill"></i>
                </div>
                <h4>Academic Facility</h4>
                <p>50+ Organizations</p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
              <div class="category-card">
                <div class="icon-container">
                  <i class="bi bi-trophy-fill"></i>
                </div>
                <h4>Events</h4>
                <p>15+ Sports Teams</p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
              <div class="category-card">
                <div class="icon-container">
                  <i class="bi bi-calendar-event"></i>
                </div>
                <h4>Campus Facility</h4>
                <p>200+ Annual Events</p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
              <div class="category-card">
                <div class="icon-container">
                  <i class="bi bi-house-door-fill"></i>
                </div>
                <h4>Housing</h4>
                <p>10 Residence Halls</p>
              </div>
            </div>
          </div>
        </div>
        </section>

        <!-- Tabs Section -->
        <div class="students-life-tabs mt-5" data-aos="fade-up" data-aos-delay="200">
          <ul class="nav nav-pills mb-4 justify-content-center" id="studentLifeTabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="clubs-tab" data-bs-toggle="pill" data-bs-target="#students-life-clubs" type="button" role="tab" aria-controls="clubs" aria-selected="true">
                <i class="bi bi-people"></i>  Academic Facility
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="athletics-tab" data-bs-toggle="pill" data-bs-target="#students-life-athletics" type="button" role="tab" aria-controls="athletics" aria-selected="false">
                <i class="bi bi-trophy"></i> Events
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="facilities-tab" data-bs-toggle="pill" data-bs-target="#students-life-facilities" type="button" role="tab" aria-controls="facilities" aria-selected="false">
                <i class="bi bi-building"></i> Campus Facility
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="support-tab" data-bs-toggle="pill" data-bs-target="#students-life-support" type="button" role="tab" aria-controls="support" aria-selected="false">
                <i class="bi bi-shield-check"></i> Housing
              </button>
            </li>
          </ul>

          <div class="tab-content" id="studentLifeTabsContent">
            <!-- Clubs & Organizations Tab -->
            <div class="tab-pane fade show active" id="students-life-clubs" role="tabpanel" aria-labelledby="clubs-tab">
              <div class="row g-4 mb-4">
        <!-- Card 1 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="bg-white rounded-3 p-4 h-100">
                <div class="rounded-circle bg-info px-2 py-1 mb-4" style="width:fit-content">
                  <i class="bi bi-tv"></i>
                </div>
                <h6 class="fw-bold">Smart Classrooms</h6>
                <p class="small text-muted"><strong>Description:</strong> Modern lecture halls with smart boards, projectors, and multimedia tools that make Ayurveda learning engaging and easy.</p>
                <ul>
                  <strong>Highlights</strong>
                  <li>Audio-Visual Setup</li>
                  <li>Interactive Learning</li>
                  <li>Spacious & ventilated</li>
                </ul>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="bg-white rounded-3 p-4 h-100">
                <div class="rounded-circle bg-danger px-2 py-1 mb-4" style="width:fit-content">
                  <i class="bi bi-journals"></i>
                </div>
                <h6 class="fw-bold">Central Library</h6>
                <p class="small text-muted"><strong>Description:</strong> A vast collection of Ayurvedic and modern medical texts, research journals, and digital resources for in-depth learning.</p>
                <ul>
                  <strong>Highlights</strong>
                  <li>5000+ Books</li>
                  <li>E-library Access</li>
                  <li>Peaceful study zones</li>
                </ul>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="bg-white rounded-3 p-4 h-100">
                <div class="rounded-circle bg-success px-2 py-1 mb-4" style="width:fit-content">
                  <i class="bi bi-flask"></i>
                </div>
                <h6 class="fw-bold">Laboratories</h6>
                <p class="small text-muted"><strong>Description:</strong> Specialized labs for Anatomy, Physiology, Pharmacology, and Medicine preparation, ensuring hands-on practical training.</p>
                <ul>
                  <strong>Highlights</strong>
                  <li>Modern equipment</li>
                  <li>Real-time experiments</li>
                  <li>Guidance from experts</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Row 2: Card 4 + CENTER IMAGE + Card 5 -->
    <div class="row g-4 mb-4">
        <!-- Card 4 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="bg-white rounded-3 p-4 h-100">
                <div class="rounded-circle bg-warning px-2 py-1 mb-4" style="width:fit-content">
                  <i class="bi bi-hospital"></i>
                </div>
                <h6 class="fw-bold">Teaching Hospital</h6>
                <p class="small text-muted"><strong>Description:</strong> On-campus hospital for real-world clinical exposure across all Ayurvedic and modern departments.</p>
                <ul>
                  <strong>Highlights</strong>
                  <li>OPD & IPD units</li>
                  <li>Panchakarma ward</li>
                  <li>Experienced faculty</li>
                </ul>
            </div>
        </div>

        <!-- Center Image -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <img 
                    src="./assets/img/collegelife/ACADEMIC.webp" 
                    alt="Central Feature Image" 
                    class="rounded-3 w-100 h-auto"
                    style="max-height: 300px;"
                >
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="bg-white rounded-3 p-4 h-100">
                <div class="rounded-circle bg-primary px-2 py-1 mb-4" style="width:fit-content">
                  <i class="bi bi-leaf"></i>
                </div>
                <h6 class="fw-bold">Herbal Garden</h6>
                <p class="small text-muted"><strong>Description:</strong>  Live medicinal plant garden with 200+ species used for herbal study and identification.</p>
                <ul>
                  <strong>Highlights</strong>
                  <li>Real-world learning</li>
                  <li>Botanical diversity</li>
                  <li>Herbal collection</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Row 3: 3 Icon Cards -->
    <div class="row g-4 mb-4">
        <!-- Card 6 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="bg-white rounded-3 p-4 h-100">
                <div class="rounded-circle bg-danger px-2 py-1 mb-4" style="width:fit-content">
                  <i class="bi bi-capsule"></i>
                </div>
                <h6 class="fw-bold">Ayurvedic Pharmacy</h6>
                <p class="small text-muted"><strong>Description:</strong> In-house unit for preparation and study of Ayurvedic medicines and formulations.</p>
                <ul>
                  <strong>Highlights</strong>
                  <li>Practical training</li>
                  <li>GMP-based setup</li>
                  <li>Quality control labs</li>
                </ul>
            </div>
        </div>

        <!-- Card 7 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="bg-white rounded-3 p-4 h-100">
                <div class="rounded-circle bg-info px-2 py-1 mb-4" style="width:fit-content">
                  <i class="bi bi-laptop"></i>
                </div>
                <h6 class="fw-bold"> IT & Research Lab</h6>
                <p class="small text-muted"><strong>Description:</strong> Research-friendly environment with modern computers and access to Ayurvedic databases.</p>
                <ul>
                  <strong>Highlights</strong>
                  <li>Research software</li>
                  <li>Internet access</li>
                  <li>Online journals</li>
                </ul>
            </div>
        </div>

        <!-- Card 8 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="bg-white rounded-3 p-4 h-100">
                <div class="rounded-circle bg-success px-2 py-1 mb-4" style="width:fit-content">
                  <i class="bi bi-person-arms-up"></i>
                </div>
                <h6 class="fw-bold">Panchakarma & Yoga Center</h6>
                <p class="small text-muted"><strong>Description:</strong> Dedicated unit for Ayurvedic therapies, detoxification, and yoga-based holistic health.</p>
                <ul>
                  <strong>Highlights</strong>
                  <li>Panchakarma rooms</li>
                  <li>Certified trainers</li>
                  <li>Wellness focus</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Row 4: 2 Centered Icon Cards -->
    <div class="row g-4 justify-content-center">
        <!-- Card 9 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="bg-white rounded-3 p-4 h-100">
                <div class="rounded-circle bg-primary px-2 py-1 mb-4" style="width:fit-content">
                  <i class="bi bi-h-circle"></i>
                </div>
                <h6 class="fw-bold">Clinical Training & Internship</h6>
                <p class="small text-muted"><strong>Description:</strong> 1-year hands-on internship with department rotations and community outreach.</p>
                <ul>
                  <strong>Highlights</strong>
                  <li>Practical exposure</li>
                  <li>Rural health camps</li>
                  <li>Skill development</li>
                </ul>
            </div>
        </div>

        <!-- Card 10 -->
        <div class="col-12 col-sm-6 col-md-4">
            <div class="bg-white rounded-3 p-4 h-100">
                <div class="rounded-circle bg-warning px-2 py-1 mb-4" style="width:fit-content">
                  <i class="bi bi-compass"></i>
                </div>
                <h6 class="fw-bold">Additional Facilities</h6>
                <p class="small text-muted"><strong>Description:</strong> Infrastructure that supports holistic growth and comfort of students.</p>
                <ul>
                  <strong>Highlights</strong>
                  <li>Seminar halls</li>
                  <li>Hostel & canteen</li>
                  <li>Sports & recreation</li>
                </ul>
            </div>
        </div>
    </div>

            </div>

            <!-- Athletics Tab -->
            <div class="tab-pane fade" id="students-life-athletics" role="tabpanel" aria-labelledby="athletics-tab">
              <div class="row g-4 mb-4 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                  <h3>Student life thrives on celebration, connection, and creativity.</h3>
                  <p>We create opportunities for every student to explore, express, and enjoy beyond academics.</p>
                  <p>We create space for all.</p>
                  <ul>
                    <li><strong>Cultural Festivals —</strong><span>Annual fests, traditional celebrations, and talent showcases that bring the whole campus together.</span></li>
                    <li><strong>Community Health Camps —</strong><span>Outreach programs promoting social responsibility and service.</span></li>
                    <li><strong>Workshops & Competitions —</strong><span>From art and debate to Ayurvedic innovation expos.</span></li>
                    <li><strong>Clubs & Societies —</strong><span>Music, dance, environment, social service, and more.</span></li>
                  </ul>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                  <div class="stats-container">
                    <div class="row">
                      <div class="col-md-6 h-100">
                        <div class="stat-item">
                          <span class="number">10+</span>
                          <span class="label">Cultural & <br> Wellness Events</span>
                        </div>
                      </div>

                      <div class="col-md-6 h-100">
                        <div class="stat-item">
                          <span class="number">50+</span>
                          <span class="label">Yoga & Health Workshops per year</span>

                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6 h-100">
                        <div class="stat-item" style="width:200px;">
                          <span class="number">8+</span>
                          <span class="label">Active <br> Societies</span>
                        </div>
                      </div>
                      <div class="col-md-6 h-100">
                        <div class="stat-item" style="width:200px;">
                          <span class="number">25+</span>
                          <span class="label">Outreach Camps annually</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="athletic-programs-slider swiper init-swiper" data-aos="fade-up" data-aos-delay="400">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "breakpoints": {
                      "576": {
                        "slidesPerView": 2
                      },
                      "992": {
                        "slidesPerView": 3
                      },
                      "1200": {
                        "slidesPerView": 4
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="sport-card">
                      <img src="./assets/img/collegelife/AYURVED MELA.webp" class="img-fluid" loading="lazy" alt="Mela">
                      <div class="sport-info">
                        <h5>Ayurveda Mela</h5>
                        <div class="badge">Varsity</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="sport-card">
                      <img src="./assets/img/collegelife/BLOOD DONATION.webp" class="img-fluid" loading="lazy" alt="Blood">
                      <div class="sport-info">
                        <h5>Blood Donation</h5>
                        <div class="badge">Varsity</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="sport-card">
                      <img src="./assets/img/collegelife/CONVOCATION DAY.webp" class="img-fluid" loading="lazy" alt="Convocation">
                      <div class="sport-info">
                        <h5>Convocation</h5>
                        <div class="badge">Varsity</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="sport-card">
                      <img src="./assets/img/collegelife/GANPATI VISARJAN.webp" class="img-fluid" loading="lazy" alt="Ganpati">
                      <div class="sport-info">
                        <h5>Ganpati Visarjan</h5>
                        <div class="badge">Varsity</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="sport-card">
                      <img src="./assets/img/collegelife/RALLY FOR AYURVEDA.webp" class="img-fluid" loading="lazy" alt="Rally">
                      <div class="sport-info">
                        <h5>Rally for Ayurveda</h5>
                        <div class="badge">Varsity</div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="sport-card">
                      <img src="./assets/img/collegelife/YOGA DAY.webp" class="img-fluid" loading="lazy" alt="Yoga">
                      <div class="sport-info">
                        <h5>Yoga Day</h5>
                        <div class="badge">Varsity</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <!-- Facilities Tab -->
            <div class="tab-pane fade" id="students-life-facilities" role="tabpanel" aria-labelledby="facilities-tab">
              <div class="row g-4">
                <div class="col-lg-8" data-aos="fade-right" data-aos-delay="200">
                  <div class="facilities-gallery">
                    <div class="row g-3">
                      <div class="col-md-6">
                        <img src="./assets/img/collegelife/LUSH GREEN CAMPUS.webp" alt="Housing" class="img-fluid rounded">
                      </div>
                      <div class="col-md-6">
                        <img src="./assets/img/collegelife/AMPHITHEATRE.webp" alt="Dining" class="img-fluid rounded">
                      </div>
                      <div class="col-md-6">
                        <img src="./assets/img/collegelife/MESS FACILITY.webp" alt="Dining" class="img-fluid rounded">
                      </div>
                      <div class="col-md-6">
                        <img src="./assets/img/collegelife/SPORTS FACILITY.webp" alt="Dining" class="img-fluid rounded">
                      </div>
                      <div class="col-md-12" style="max-height: 280px">
                        <img src="./assets/img/collegelife/CAMPUS.webp" alt="" class="img-fluid rounded">
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-lg-4" data-aos="fade-left" data-aos-delay="300">
                  <div class="facilities-info">
                    <h3>Campus Life at DJ Ayurvedic Medical College</h3>
                    <p> Life at DJ Ayurvedic Medical College goes beyond classrooms — it’s a vibrant, holistic experience that nurtures mind, body, and spirit. Students enjoy a balanced lifestyle filled with wellness, recreation, culture, and community engagement — all rooted in Ayurvedic values.</p>

                    <div class="facilities-list">
                      <div class="facility-item">
                        <i class="bi bi-house-door"></i>
                        <h5><strong>Comfortable Hostel Living —</strong>Safe, homely environment fostering lifelong friendships</h5>
                      </div>

                      <div class="facility-item">
                        <i class="bi bi-fork-knife"></i>
                        <h5><strong>Healthy Dining — </strong>Nutritious vegetarian meals aligned with Ayurvedic principles</h5>
                        
                      </div>

                      <div class="facility-item">
                        <i class="bi bi-person-arms-up"></i>
                        <h5><strong>Yoga & Meditation —</strong>Daily sessions promoting mental peace and mindfulness</h5>
                      </div>

                      <div class="facility-item">
                        <i class="bi bi-bicycle"></i>
                        <h5><strong>Sports & Recreation — </strong>Indoor and outdoor facilities for physical fitness and fun</h5>
                      </div>

                      <div class="facility-item">
                        <i class="bi bi-calendar2-event"></i>
                        <h5><strong>Cultural Events & Festivals — </strong>Celebration of traditional festivals and annual fests</h5>
                      </div>

                      <div class="facility-item">
                        <i class="bi bi-globe"></i>
                        <h5><strong>Community Outreach — </strong>Health camps and rural engagement programs</h5>
                      </div>

                      <div class="facility-item">
                        <i class="bi bi-palette"></i>
                        <h5><strong>Clubs & Societies — </strong>Student-led groups for art, wellness, and social service</h5>
                      </div>

                      <div class="facility-item">
                        <i class="bi bi-laptop"></i>
                        <h5><strong>Digital Lounge & Wi-Fi Zones — </strong>Relaxed study and networking spaces</h5>
                      </div>

                      <div class="facility-item">
                        <i class="bi bi-cup-hot"></i>
                        <h5><strong>Cafeteria & Common Rooms — </strong>Perfect hangout zones for relaxation</h5>
                      </div>

                      <div class="facility-item">
                        <i class="bi bi-chat"></i>
                        <h5><strong>Student Mentorship & Counseling —</strong>Em</h5>
                      </div>
                    </div>

                  
                  </div>
                </div>
              </div>
            </div>

            <!-- Support Services Tab -->
            <div class="tab-pane fade" id="students-life-support" role="tabpanel" aria-labelledby="support-tab">
  <!-- Responsive parent row: gaps + padded sides (adjusted for mobile) -->
  <div class="row g-4 px-3 px-md-5 py-2">

    <!-- Housing (wrapped in responsive column) -->
    <div class="col-12 col-md-6">
      <div class="card h-100 p-2"> <!-- h-100 = equal height cards; p-2 = fixed padding (fixed typo: p2 → p-2) -->
        <div class="row g-0 align-items-center"> <!-- Aligns image + text vertically -->
          <div class="col-md-4">
            <!-- Image: fits space without distortion (no random margins) -->
            <img 
              src="./assets/img/collegelife/13.webp" 
              class="img-fluid rounded-start w-100 h-100" 
              style="object-fit: cover;"
              alt="Housing"
            >
          </div>
          <div class="col-md-8">
            <div class="card-body p-2">
              <h5 class="card-title text-center fw-bold">Housing</h5>
              <p class="card-text small"> <!-- Small text for better fit (optional, remove if needed) -->
                A home away from home. Our residence halls are made for comfort, community, and peace of mind. Separate, secure housing for men and women. Rooms designed for both privacy and connection. 24/7 campus security to keep you safe.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Health & Wellness (wrapped in responsive column) -->
    <div class="col-12 col-md-6">
      <div class="card h-100 p-2">
        <div class="row g-0 align-items-center">
          <div class="col-md-4">
            <img 
              src="./assets/img/collegelife/14.webp" 
              class="img-fluid rounded-start w-100 h-100" 
              style="object-fit: cover;"
              alt="Health & Wellness"
            >
          </div>
          <div class="col-md-8">
            <div class="card-body p-2">
              <h5 class="card-title text-center fw-bold">Health & Wellness</h5>
              <p class="card-text small">
                Good health powers great learning. On-campus clinics for check-ups and medical support. Yoga and meditation sessions to support focus and calm. Wellness programs that fit into your student routine.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Career Services (wrapped in responsive column) -->
    <div class="col-12 col-md-6">
      <div class="card h-100 p-2">
        <div class="row g-0 align-items-center">
          <div class="col-md-4">
            <img 
              src="./assets/img/collegelife/15.webp" 
              class="img-fluid rounded-start w-100 h-100" 
              style="object-fit: cover;"
              alt="Career Services"
            >
          </div>
          <div class="col-md-8">
            <div class="card-body p-2">
              <h5 class="card-title text-center fw-bold">Career Services</h5>
              <p class="card-text small">
                From your first year to your first job, we’re with you. Internships with Ayurvedic hospitals and clinics. Placement assistance tailored to your interests and goals. Guidance for MD courses after BAMS and postgraduate options.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Accessibility (wrapped in responsive column) -->
    <div class="col-12 col-md-6">
      <div class="card h-100 p-2">
        <div class="row g-0 align-items-center">
          <div class="col-md-4">
            <img 
              src="./assets/img/collegelife/16.webp" 
              class="img-fluid rounded-start w-100 h-100" 
              style="object-fit: cover;"
              alt="Accessibility"
            >
          </div>
          <div class="col-md-8">
            <div class="card-body p-2">
              <h5 class="card-title text-center fw-bold">Accessibility</h5>
              <p class="card-text small">
                We believe in equal access to opportunity. Inclusive classrooms and study spaces. Personalised academic and campus life support. A commitment to making every student feel welcome and empowered.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

  <!-- <div class="row mt-5" data-aos="fade-up" data-aos-delay="500">
    <div class="col-md-6 offset-md-3 text-center">
      <div class="contact-info-box">
        <h4>Need Assistance?</h4>
        <p>Have a question or need support? We’re here for you. Reach out to our student support team Monday to Friday, 8 AM to 5 PM.</p>
        <a href="/contact" class="btn btn-explore mt-2">Contact Us <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
  </div> -->
</div>

          </div>
        </div>

        <!-- College Life Gallery -->
        <section id="gallery">
          <div class="container students-life-gallery mt-5" data-aos="fade-up" data-aos-delay="200">
          <div class="section-header text-center">
            <h3>Life on Campus</h3>
            <p>Take a glimpse into our vibrant student community</p>
          </div>

          <div class="row g-3">
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
              <a href="./assets/img/collegelife/17.webp" class="gallery-item glightbox">
                <img src="./assets/img/collegelife/17.webp" class="img-fluid" loading="lazy" alt="College Life">
                <div class="gallery-overlay">
                  <span>Campus Events</span>
                </div>
              </a>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
              <a href="./assets/img/collegelife/18.webp" class="gallery-item glightbox">
                <img src="./assets/img/collegelife/18.webp" class="img-fluid" loading="lazy" alt="College Life">
                <div class="gallery-overlay">
                  <span>Student Clubs</span>
                </div>
              </a>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
              <a href="./assets/img/collegelife/19.webp" class="gallery-item glightbox">
                <img src="./assets/img/collegelife/19.webp" class="img-fluid" loading="lazy" alt="College Life">
                <div class="gallery-overlay">
                  <span>Graduation Day</span>
                </div>
              </a>
            </div>

            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
              <a href="./assets/img/collegelife/20.webp" class="gallery-item glightbox">
                <img src="./assets/img/collegelife/20.webp" class="img-fluid" loading="lazy" alt="College Life">
                <div class="gallery-overlay">
                  <span>Study Groups</span>
                </div>
              </a>
            </div>

            <div class="col-md-6" data-aos="zoom-in" data-aos-delay="500">
              <a href="./assets/img/collegelife/21.webp" class="gallery-item glightbox">
                <img src="./assets/img/collegelife/21.webp" class="img- object-fit-fill" loading="lazy" alt="College Life">
                <div class="gallery-overlay">
                  <span>Campus Facilities</span>
                </div>
              </a>
            </div>
          </div>
        </div>
        </section>

        <!-- CTA -->


      </div>

    </section><!-- /Students Life Section -->

  </main>

  <?php include "./components/footer.php" ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
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