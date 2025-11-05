<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "./components/header.php" ?>

        <style>
             
   
   /* ===== Doodle SVG Animation Styles ===== */
    .hero-section {
      position: relative;          /* Important for absolute positioning */
      overflow: hidden;            /* Doodle header se bahar na nikle */
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
      width: 45%;
      max-width: 45%;
      height: auto;
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
      width: 60%;
      max-width: 60%;
      height: auto;
      opacity: 0;
      z-index: 0;
      animation: drawPath 1.5s ease-out 0.2s forwards, fadeIn 0.3s ease-out forwards;
    }

    .doodle path {
      stroke-dasharray: 4000;
      stroke-dashoffset: 4000;
      fill: none;
      stroke: #9DDAF0;
      stroke-opacity: 1;
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
            .carousel-container {
            overflow-x: hidden;
            overflow-y: visible;
            position: relative;
            width: 100%;
            }

            .carousel-track {
              display: flex;
              gap: 1.5rem;
              width: max-content;
              animation: scroll 25s linear infinite;
              will-change: transform;
            }

            .carousel-container:hover .carousel-track {
              animation-play-state: paused;
              cursor: pointer;
            }

            .card {
              flex: 0 0 auto;
              min-width: 220px;
              max-width: 240px;
              border: none;
              background-color: aliceblue;
              border-radius: 1rem;
            }

            .card img {
              width: 100%;
              height: auto;
              border-radius: 1rem;
            }

            @keyframes scroll {
              0% { transform: translateX(0); }
              100% {
                transform: translateX(-50%);
              }
            }

            @media (max-width: 768px) {
              .card {
                min-width: 180px;
              }
            }

            @media (max-width: 500px) {
              .card {
                min-width: 150px;
              }
            }

            .gradient-text {
                background: linear-gradient(90deg, rgb(225 45 35), #ff8419, rgb(225 45 35));
                background-size: 200% auto;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                animation: gradientMove 3s linear infinite;
                font-weight: bold;
            }

            .service-card-image {
                position: relative;
                overflow: hidden;
                border-radius: 20px; /* same as ::before */
            }

            .service-card-image img {
              width: 100%;
              height: auto;
              display: block;
              border-radius: 20px;
            }

            .service-card-image::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(to bottom, rgb(225 45 35/ 10%), #ff8419 100%);
                border-radius: 20px;
                z-index: 0;
            }
        </style>
</head>

<body>
    <?php include "./components/navbar.php" ?>
    <header>
        <div class="container my-5 pb-5">
          <!-- ======================= Hero Header Section ======================= -->
          <header class="hero-section d-flex align-items-center rounded-4" style="background-image: url('./images/header.webp'); object-fit: contain; min-height: 400px;">
               <!-- Mobile Doodle SVG --> 
             <svg class="doodle mobile" width="480" height="767" viewBox="0 0 480 767" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M521.341 762.101C462.822 393.539 440.895 347.326 398.308 368.875C355.722 390.424 364.519 488.085 375.246 586.665C383.672 664.095 352.284 703.103 283.247 628.356C173.045 509.039 111.126 291.976 144.258 262.3C279.435 141.223 304.302 615.114 234.864 652.034C127.926 708.894 26.9112 379.347 -30.174 4.32244" stroke="#9DDAF0" stroke-opacity="0.3" stroke-width="56"></path>
      </svg>

      <!-- Desktop Doodle SVG --> 
      <svg class="doodle desktop" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1048.319px" height="910px" viewBox="871.757 0 1048.319 910" style="enable-background:new 871.757 0 1048.319 910;" xml:space="preserve">
        <g>
          <defs>
            <rect id="SVGID_1_" x="0" y="0" width="1920" height="910"></rect>
          </defs>
          <clipPath id="SVGID_2_">
            <use xlink:href="#SVGID_1_" style="overflow:visible;"></use>
          </clipPath>
          <g style="clip-path:url(#SVGID_2_);">
            <path style="fill:none;stroke:rgba(157, 218, 240, 0.3);stroke-width:80;" d="M1999.5,993.502c-134-527.5-190.45-635.668-271.28-607.478
              c-80.83,28.192-46.71,208.77-20.37,349.576c20.7,110.598-62.63,176.401-174.891,53.991
              c-169.14-184.452-242.739-454.515-183.119-528.875c116.119-144.807,222.939,511.255,91.25,559.761
              c-202.811,74.701-416.46-399.763-548.067-936.37"></path>
          </g>
        </g>
      </svg>

            <div class="container position-relative">
              <div class="row">
                <!-- Text Content Column -->
                <div class="col-lg-7 col-md-8">
                    
                  <h1 class="display-4 fw-bold text-white mb-3">
                      Designing Spaces<br>That Inspire & Endure
                  </h1>
                  <p class="lead text-white mb-4">
                      We transform visions into timeless architecture, blending innovative design with functional excellence.
                  </p>
                  <div class="rounded-4 px-4 pt-3 pb-4 mt-5 mt-lg-0 " style="margin-left: -27px; margin-bottom: -135px; width: fit-content; background-color:aliceblue;">
                    <a href="#" class="btn btn-dark rounded-pill p-2 mt-2 mt-lg-0">Schedule a Free Consultation</a>
                  </div>
                </div>
              </div>
            </div>
          </header>
        </div>
    </header>

        <!-- About US -->
        <div class="container my-5 bg-white rounded-4 shadow">
            <div class="row">
                <div class="col-md-8 p-4">
                    <h4 class="display-5 fw-semibold"><span class="gradient-text">About</span> Us</h4>
                    <p class="mt-4">DJ College of Dental Sciences and Research was established in 1999 under the founding guidance of founder and chairman Ajit Singh Jassar. We were one of the first five private colleges in the state of Uttar Pradesh.
                        <br>
                        <br> Over the last decade, DJCDSR, has worked to achieve excellence in the field of dental research, and now comprises the finest faculty and state-of-the-art equipment for groundbreaking scientific innovation. This is reflected in
                        the numerous laurels that students of our college have amassed over the years in both national and international conferences and competitions.</p>
                </div>
                <div class="col-md-4 mt-4 p-4">
                    <div class="d-grid gap-3">
                        <div class="d-flex gap-3">
                            <div class="flex-fill text-center rounded-4 px-2 py-3 shadow-sm" style="background-color: aliceblue;">
                                <p class="fs-2 fw-semibold mb-0">800+</p>
                                <p class="mb-0">Research Papers</p>
                            </div>
                            <div class="flex-fill text-center rounded-4 px-2 py-3 shadow-sm" style="background-color: aliceblue;">
                                <p class="fs-2 fw-semibold mb-0">75+</p>
                                <p class="mb-0">Acres Campus</p>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <div class="flex-fill text-center rounded-4 px-2 py-3 shadow-sm" style="background-color: aliceblue;">
                                <p class="fs-2 fw-semibold mb-0">110+</p>
                                <p class="mb-0">Patents Done</p>
                            </div>
                            <div class="flex-fill text-center rounded-4 px-2 py-3 shadow-sm" style="background-color: aliceblue;">
                                <p class="fs-2 fw-semibold mb-0">25+</p>
                                <p class="mb-0">Years Legacy</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Carousel -->
        <div class="container rounded-4 p-4 my-4">
            <div class="d-flex justify-content-between align-items-center">
                <p class="display-5 fw-semibold m-0"><span class="gradient-text">Services</span> we provide</p>
                <!-- <div>
                    <button id="prevBtn" class="rounded-circle py-1 px-2">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button id="nextBtn" class="rounded-circle py-1 px-2 ms-2">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div> -->
            </div>

            <div class="carousel-container mt-4" id="carousel">
                <div class="carousel-track" id="carouselTrack">
                    <!-- Duplicate cards for seamless loop -->
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 1</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 2</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 3</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 4</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 5</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 6</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 7</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 8</p>
                        </div>
                    </div>

                    <!-- Duplicate again for infinite loop -->
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 1</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 2</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 3</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 4</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 5</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 6</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 7</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="service-card-image">
                            <img src="./images/stock1.jpg">
                        </div>
                        <div class="card-body">
                            <p>Service 8</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Competency -->
        <div class="container my-4">
            <div class="row">
                <div class="col-md-4 mt-4 px-4 pb-4">
                    <img src="./images/bg.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-8 mt-4 p-4 bg-white rounded-4 shadow" style="height: fit-content;">
                    <h4 class="display-6"><span class="gradient-text">COMPETENCY</span> STATEMENTS</h4>
                    <div class="mt-3"><strong>The institute prepares the student to be :</strong></div>
                    <div class="d-flex gap-2 mt-3">
                        <div class="h-50 rounded-circle px-1 text-white" style="background: linear-gradient(135deg, #ff1200, #ffc107);"><i class="bi bi-check"></i></div>
                        <p>Knowledgeable in biomedical and oro-dental health sciences and evidence based dental clinical care.</p>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="h-50 rounded-circle px-1 text-white" style="background: linear-gradient(135deg, #ff1200, #ffc107);"><i class="bi bi-check"></i></div>
                        <p>A skilled communicator, empathetic health advocate and compassionate healthcare provider.</p>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="h-50 rounded-circle px-1 text-white" style="background: linear-gradient(135deg, #ff1200, #ffc107);"><i class="bi bi-check"></i></div>
                        <p>An ethical professional and an engaged team player</p>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="h-50 rounded-circle px-1 text-white" style="background: linear-gradient(135deg, #ff1200, #ffc107);"><i class="bi bi-check"></i></div>
                        <p>A continuous learner of practice and quality improvement.</p>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="h-50 rounded-circle px-1 text-white" style="background: linear-gradient(135deg, #ff1200, #ffc107);"><i class="bi bi-check"></i></div>
                        <p>An astute healthcare member, understanding its organization and economics of the health care system.</p>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="h-50 rounded-circle px-1 text-white" style="background: linear-gradient(135deg, #ff1200, #ffc107);"><i class="bi bi-check"></i></div>
                        <p>A responsible and upright citizen with leadership qualities.</p>
                    </div>
                </div>
            </div>
        </div>


        <!-- Vision & Mission -->
        <div class="container my-5">
            <h4 class="display-5 gradient-text">Vision & Mission</h4>
            <div class="container bg-white rounded-4 shadow pb-4 px-4 mt-4">
                <div class="row">
                <div class="col-md-8">
                    <img src="./images/ex1.webp" alt="" class="img-fluid mt-5 h-75 mx-4 rounded-4 mb-4 shadow">
                </div>
                <div class="col-md-4 mt-5">
                    <p class="display-6">Vision</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos consequuntur, veritatis animi eaque nisi tempora dolore asperiores quia vel sint optio quae ipsam accusamus, laborum itaque aliquid, qui dolores aliquam.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <p class="display-6">Mission</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum aspernatur cum, voluptate amet sunt ratione soluta ullam voluptas tempore rem nobis. Nostrum ducimus voluptas fugiat nulla provident laborum, facilis deserunt.</p>
                </div>
                <div class="col-md-4" style="margin-top: -130px;">
                    <img src="./images/MBA.webp" alt="" class="img-fluid rounded-4 shadow">
                </div>
            </div>
            </div>
        </div>


        <!-- Approvals -->
        <div class="container my-5">
            <div class="row">
                <h4 class="display-5 gradient-text">Approval & Affiliation</h4>
                <div class="col-md-8 mt-4 bg-white p-4 rounded-4 shadow">
                    Academic Affiliations: <a href="#" class="text-info text-decoration-none">DJ College of Dental Sciences & Research</a> currently affiliated to Atal Bihari Vajpayee Medical University (ABVMU), Lucknow, Atal Bihari Vajpayee Medical University (ABVMU) is a state collegiate university in Lucknow, Uttar Pradesh (India). It is expected to open in 2020 from a transit campus at Mall Avenue, Lucknow and will give affiliation to all government and private medical, dental, replica paramedical and nursing colleges in the state of Uttar Pradesh. It was established by Uttar Pradesh act no. 42 of 2018
                    <br><br>
                    To be one of the best medical hub for providing comprehensive teaching, training and research to all health care workers.
                    <br><br>
                    To serve the society by providing adequately trained manpower which can cater to the health needs, beginning from prevention to primary care to tertiary care.
                </div>
                <div class="col-md-4">
                    <div class="container rounded-4 shadow mx-5 bg-white p-4 mt-4">
                        <p class="fw-semibold fs-5">Academic Partners / Collaborations</p>
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./images/MBA.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/MBA.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/MBA.webp" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include "./components/footer.php"?>

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
            const track = document.getElementById('carouselTrack'); // your track element
            const container = document.getElementById('carouselContainer'); // wrapper with overflow:hidden
            let pxPerFrame = 0.6; // adjust speed (pixels per frame)
            let tx = 0;

            function animate() {
              tx -= pxPerFrame;
              // when we've scrolled half of the track (because we duplicated content), reset
              const half = track.scrollWidth / 2;
              if (Math.abs(tx) >= half) tx = 0;
              track.style.transform = `translateX(${tx}px)`;
              requestAnimationFrame(animate);
            }

            requestAnimationFrame(animate);

            // optional: pause on hover
            container.addEventListener('mouseenter', () => pxPerFrame = 0);
            container.addEventListener('mouseleave', () => pxPerFrame = 0.6);

        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>