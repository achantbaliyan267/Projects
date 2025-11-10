<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DJ DENTAL</title>
  <?php include "./components/header.php" ?>
</head>
<body>

  <!-- ===== Navigation Bar ===== -->
 <?php include "./components/navbar.php" ?> 
 <?php include "./components/preloader.php" ?> 

<!-- ===== Hero Section with Doodle Animation ===== -->
<div class="hero-wrapper py-2">
  <section class="hero-section py-5">
    <div class="container hero-content">
      
      <svg class="doodle desktop mobile"
       xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 2000 2000"><g><g fill="hsl(43, 97%, 49%)" id="star"><path d="M 500 500 C 1000 1000 1000 1000 1500 500 C 1000 1000 1000 1000 1500 1500 C 1000 1000 1000 1000 500 1500 C 1000 1000 1000 1000 500 500" stroke-linecap="round" stroke-linejoin="round"></path></g></g></svg>
      
      <!-- Desktop Layout -->
      <div class="d-none d-lg-block">
        <div class="row align-items-start">
          <!-- Left Column -->
          <div class="col-lg-6 hero-content-left">
            <p class="fw-semibold text-uppercase mb-2 gradient-text" style="font-size: 0.85rem;">Advance Your Expertise.</p>
            <h1 class="hero-heading">
              With <span class="text-info gradient-text">25+ Years</span> of Excellence, 
              Education That Powers Your <span class="">Future in <span class="text-info gradient-text">Dentistry</span> Starts Here</span>
            </h1>
            <!-- <p class="subtext">Online degrees & courses from <span>Manipal universities.</span></p> -->
            <a href="#" class="btn btn-apply">Apply Now</a>
            <a href="#" class="btn btn-apply">Start Your Journey</a>
          </div>

          <!-- Right Column -->
          <div class="col-lg-6 hero-image-wrapper">
            <img src="images/bg.png" alt="Hero" class="hero-img">
          </div>
        </div>
      </div>

      <!-- Mobile/Tablet Layout -->
      <div class="d-lg-none">
        <div class="mobile-heading">
           <p class="fw-semibold text-uppercase mb-2 gradient-text" style="font-size: 0.85rem;">Advance Your Expertise.</p>
         <h1 class="hero-heading">
              With <span class="text-info gradient-text">25+ Years</span> of Excellence, 
              Education That Powers Your <span class="">Future in <span class="text-info gradient-text">Dentistry</span> Starts Here</span>
            </h1>
             <a href="#" class="btn btn-apply">Apply Now</a>
            <a href="#" class="btn btn-apply">Start Your Journey</a>
        </div>

        <div class="hero-image-wrapper">
          <img src="images/bg.png" alt="Hero" class="hero-img">
        </div>
      </div>

      <!-- Auto Scrolling Cards -->
     <div class="cards-scroller-wrapper">
  <div class="cards-scroller">
    <!-- DJ Dental College Courses -->
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2463.webp" alt="BDS">
      <p>BDS</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2658.webp" alt="MDS Prosthodontics">
      <p>MDS Prosthodontics</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2370.webp" alt="MDS Endodontics">
      <p>MDS Endodontics</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/auditorium/1-3.webp" alt="MDS Periodontology">
      <p>MDS Periodontology</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2463.webp" alt="MDS Orthodontics">
      <p>MDS Orthodontics</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2658.webp" alt="MDS Surgery">
      <p>MDS Surgery</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2370.webp" alt="MDS Pathology">
      <p>MDS Pathology</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/auditorium/1-3.webp" alt="MDS Pedodontics">
      <p>MDS Pedodontics</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2463.webp" alt="MDS Radiology">
      <p>MDS Radiology</p>
    </div>

    <!-- Duplicate for Infinite Scroll -->
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2463.webp" alt="BDS">
      <p>BDS</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2658.webp" alt="MDS Prosthodontics">
      <p>MDS Prosthodontics</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2370.webp" alt="MDS Endodontics">
      <p>MDS Endodontics</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/auditorium/1-3.webp" alt="MDS Periodontology">
      <p>MDS Periodontology</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2463.webp" alt="MDS Orthodontics">
      <p>MDS Orthodontics</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2658.webp" alt="MDS Surgery">
      <p>MDS Surgery</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2370.webp" alt="MDS Pathology">
      <p>MDS Pathology</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/auditorium/1-3.webp" alt="MDS Pedodontics">
      <p>MDS Pedodontics</p>
    </div>
    <div class="course-card">
      <img src="https://djdentalcollege.com/img/gallery/IMG_2463.webp" alt="MDS Radiology">
      <p>MDS Radiology</p>
    </div>
  </div>
</div>

    </div>
  </section>
</div>
<!-- Benefits Section -->
<section class="benefits-section " id="benefits">
    <div class="container">
        <div class="row mb-5 fade-in">
            <div class="col-lg-8">
                <h2 class="display-5 fw-bold mb-4">The Best <span class="text-info gradient-text">Private Dental College</span><br> in Delhi NCR</h2>
            </div>
            <div class="col-lg-4">
                <p class="lead">There are many variations of passages available, but the majority have suffered alteration in some form, by injected</p>
                <!-- Yeh button ab ek pill shape mein hai -->
                <a href="#" class="btn btn-dark rounded-pill mt-3">Read More <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
        
        <!-- First Row: 2 Image Cards + 2 Text Cards -->
        <div class="row g-4 fade-in">
            <!-- Image Card 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="benefit-card benefit-card-image" style="background-image: url('./images/BCA.webp');">
                    <h4 class="mb-4">Qualified & Experience Teachers</h4>
                    <!-- Naya Arrow Button -->
                    <a href="#" class="btn-arrow"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
           
            <!-- Text Card 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="benefit-card">
                    <h4>Special Education</h4>
                    <p class="text-muted">There are many scholarships that the undergraduate BDS students of DJ College of Dental Sciences </p>
                    <!-- Naya Arrow Button -->
                    <a href="#" class="btn-arrow"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

             <!-- Image Card 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="benefit-card benefit-card-image" style="background-image: url('./images/BBA-MUJ.png');">
                    <h4 class="mb-4">Books & Library</h4>
                    <!-- Naya Arrow Button -->
                    <a href="#" class="btn-arrow"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <!-- Text Card 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="benefit-card">
                    <h4>Better Placements</h4>
                    <p class="text-muted">The only dental college in Asia to have membership of American Academy of Developmental Medicine </p>
                    <!-- Naya Arrow Button -->
                    <a href="#" class="btn-arrow"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
  <section class="parallax-section border rounded-5 ">
  <div class="p-5 container">
    <div class="row justify-content-center g-4">
      <!-- Card 1 -->
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="glass-card text-center  p-3 h-100 d-flex flex-column align-items-center">
          <img src="./images/i1.png" alt="Icon" class="card-icon mb-3">
          <div class="card-text">
            <strong>75 ACRE<br>CAMPUS</strong>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="glass-card text-center p-3 h-100 d-flex flex-column align-items-center">
          <img src="./images/i2.png" alt="Icon" class="card-icon mb-3">
          <div class="card-text">
            <strong>TOP IN<br>UTTAR PRADESH</strong>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="glass-card text-center p-3 h-100 d-flex flex-column align-items-center">
          <img src="./images/i3.png" alt="Icon" class="card-icon mb-3">
          <div class="card-text">
            <strong>INTERNATIONAL<br>STANDARDS</strong>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="glass-card text-center p-3 h-100 d-flex flex-column align-items-center">
          <img src="./images/i4.png" alt="Icon" class="card-icon mb-3">
          <div class="card-text">
            <strong>Campus<br>Life</strong>
          </div>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="glass-card text-center p-3 h-100 d-flex flex-column align-items-center">
          <img src="./images/i5.png" alt="Icon" class="card-icon mb-3">
          <div class="card-text">
            <strong>CAREERS</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>


  <div class="container-fluid my-5">
  <div class="row g-4 my-5">
    <!-- Stat 1 -->
    <div class="col-12 col-sm-6 col-md-2 text-black text-center">
      <h1 class="display-5 fw-bold gradient-text counter" data-target="25">0+</h1>
      <p class="fw-semibold fs-5">Years of Legacy</p>
    </div>

    <!-- Stat 2 -->
    <div class="col-12 col-sm-6 col-md-2 text-black text-center">
      <h1 class="display-5 fw-bold gradient-text counter" data-target="300">0</h1>
      <p class="fw-semibold fs-5">Bedded Hospital</p>
    </div>

    <!-- Stat 3 -->
    <div class="col-12 col-sm-6 col-md-2 text-black text-center">
      <h1 class="display-5 fw-bold gradient-text counter" data-target="2000">0+</h1>
      <p class="fw-semibold fs-5">Successful Alumni</p>
    </div>

    <!-- Stat 4 -->
    <div class="col-12 col-sm-6 col-md-2 text-black text-center">
      <h1 class="display-5 fw-bold gradient-text counter" data-target="800">0+</h1>
      <p class="fw-semibold fs-5">Research Papers</p>
    </div>

    <!-- Stat 5 -->
    <div class="col-12 col-sm-6 col-md-2 text-black text-center">
      <h1 class="display-5 fw-bold gradient-text counter" data-target="75">0+</h1>
      <p class="fw-semibold fs-5">Acer Campus</p>
    </div>

    <!-- Stat 6 -->
    <div class="col-12 col-sm-6 col-md-2 text-black text-center">
      <h1 class="display-5 fw-bold gradient-text counter" data-target="110">0+</h1>
      <p class="fw-semibold fs-5">Patents</p>
    </div>
  </div>
</div>

<script>
  const counters = document.querySelectorAll('.counter');
  const speed = 80; // lower = faster
  let started = false;

  function countUp(counter) {
    const target = +counter.getAttribute('data-target');
    const updateCount = () => {
      const current = +counter.innerText.replace(/\D/g, '');
      const increment = Math.ceil(target / 50);
      if (current < target) {
        counter.innerText = current + increment + (counter.innerText.includes('+') ? '+' : '');
        setTimeout(updateCount, speed);
      } else {
        counter.innerText = target + (counter.innerText.includes('+') ? '+' : '');
      }
    };
    updateCount();
  };

  // Trigger animation when visible
  const observer = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting && !started) {
      started = true;
      counters.forEach(counter => countUp(counter));
    }
  });

  observer.observe(document.querySelector('.counter'));
</script>


<!-- Facilities -->
<style>
  .container-facilities {
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

.title {
  padding: 32px 40px 20px;
  color: black;
  z-index: 10;
  position: relative;
}

.title h1 {
  font-size: 2.2rem;
  font-weight: 700;
  margin-bottom: 8px;
  background: linear-gradient(to right, #ffffff, #a5d8ff);
  -webkit-background-clip: text;
  background-clip: text;
  color: black;
  letter-spacing: -0.5px;

}

.title p {
  font-size: 0.95rem;
  font-weight: 300;
  color: rgba(1, 1, 1, 0.8);
  max-width: 600px;
  line-height: 1.5;
}

.accordion {
  display: flex;
  height: 100%;
  width: 100%;
  position: relative;
  padding: 20px 0;
}

.accordion-item {
  height: 550px;
  transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
  position: relative;
  overflow: hidden;
  border-radius: 12px;
  margin: 0 5px;
  cursor: pointer;
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.accordion-item:first-child { margin-left: 20px; }
.accordion-item:last-child { margin-right: 20px; }

.accordion-item.active { flex: 3; }
.accordion-item:not(.active) { flex: 0.5; }

.bg-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  transition: transform 1s ease;
}

.accordion-item:not(.active) .bg-image { filter: brightness(0.6) saturate(0.8); }
.accordion-item.active .bg-image { transform: scale(1.05); }

.content {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 25px;
  color: white;
  opacity: 0;
  transition: opacity 0.5s ease, transform 0.5s ease;
  transform: translateY(20px);
  z-index: 2;
  pointer-events: none;
  background: linear-gradient(0deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 70%, transparent 100%);
  border-radius: 0 0 12px 12px;
  height: 220px;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
}

.accordion-item.active .content {
  opacity: 1;
  transform: translateY(0);
  pointer-events: all;
}

/* ALL OTHER STYLES (h2, p, tag, btn, etc.) REMAIN THE SAME... */

/* ========== RESPONSIVE FIX (NEW & PERFECT) ========== */
@media (max-width: 991.98px) {  /* Bootstrap lg breakpoint */
  .container-facilities { height: auto !important; }  /* CRITICAL: No fixed height */
  
  .accordion {
    flex-direction: column !important;
    height: auto !important;
    padding: 15px 0 !important;
  }
  
  .accordion-item {
    width: 100% !important;
    height: 85px !important;      /* Perfect closed height */
    margin: 5px 0 !important;
    flex: none !important;
  }
  
  .accordion-item:first-child,
  .accordion-item:last-child {
    margin: 5px 0 !important;     /* Uniform margins */
  }
  
  .accordion-item.active {
    height: 460px !important;     /* Fits EXACTLY on all devices */
  }
  
  .location-label {
    transform: translate(-50%, -50%) !important;
    top: 50% !important;
    left: 50% !important;
    rotate: 0deg !important;      /* No rotation */
    font-size: 1.1rem !important;
    opacity: 1 !important;
  }
  
  .content {
    padding: 25px !important;
    height: auto !important;
    min-height: 200px !important;
  }
  
  .indicators {
    bottom: 12px !important;
  }
}

/* Tiny mobile tweak */
@media (max-width: 575.98px) {
  .accordion-item { height: 75px !important; }
  .accordion-item.active { height: 440px !important; }
  .title { padding: 24px 20px 16px !important; }
  .title h1 { font-size: 1.9rem !important; }
}
</style>

<div class="container mt-5 rounded-4 container-facilities">
    <div class="title">
      <h1>Facilities</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat iste quisquam asperiores cupiditate commodi, autem tempore voluptatibus quia molestiae maiores qui explicabo architecto amet? Enim quisquam velit vitae consequuntur dolore?</p>
    </div>
    
    <div class="accordion pb-5">
      <div class="accordion-item active" data-index="0">
        <img src="./images/fac1.jpg" alt="FAC-1" class="bg-image">
        <div class="location-label">FAC-1</div>
        <div class="content">
          <h2>Amalfi Coast, Italy</h2>
          <p>Discover the dramatic cliffs and colorful villages along Italy's most scenic shoreline. From Positano's pastel houses to Ravello's enchanting gardens, the Amalfi Coast blends Mediterranean beauty with Italian charm.</p>
          <div class="tags">
            <span class="tag">Coastal Beauty</span>
            <span class="tag">Historic Villages</span>
            <span class="tag">Mediterranean Cuisine</span>
          </div>
        </div>
      </div>
      
      <div class="accordion-item" data-index="1">
        <img src="./images/fac2.jpg" alt="FAC-2" class="bg-image">
        <div class="location-label">FAC-2</div>
        <div class="content">
          <h2>Kyoto, Japan</h2>
          <p>Step into timeless Japan where ancient temples meet serene gardens. Kyoto's 1,600 Buddhist temples, 400 Shinto shrines, and 17 UNESCO World Heritage sites create a perfect blend of spiritual tranquility and cultural richness.</p>
          <div class="tags">
            <span class="tag">Ancient Temples</span>
            <span class="tag">Cherry Blossoms</span>
            <span class="tag">Traditional Tea Houses</span>
          </div>
        </div>
      </div>
      
      <div class="accordion-item" data-index="2">
        <img src="./images/fac.jpg" alt="Santorini" class="bg-image">
        <div class="location-label">SANTORINI</div>
        <div class="content">
          <h2>Santorini, Greece</h2>
          <p>Perched on the edge of a volcanic caldera, Santorini's whitewashed villages cascade down dramatic cliffs. Experience breathtaking sunsets over the Aegean Sea and lose yourself in the island's unique architecture and vibrant blue domes.</p>
          <div class="tags">
            <span class="tag">Stunning Sunsets</span>
            <span class="tag">Volcanic Beaches</span>
            <span class="tag">Aegean Viewpoints</span>
          </div>
        </div>
      </div>
      
      <div class="accordion-item" data-index="3">
        <img src="./images/fac4.jpg" alt="Bora Bora" class="bg-image">
        <div class="location-label">BORA BORA</div>
        <div class="content">
          <h2>Bora Bora, French Polynesia</h2>
          <p>Immerse yourself in the pristine turquoise lagoons and luxurious overwater bungalows of this South Pacific paradise. Bora Bora's protected coral reef creates a natural aquarium, perfect for snorkeling among colorful marine life.</p>
          <div class="tags">
            <span class="tag">Overwater Bungalows</span>
            <span class="tag">Turquoise Lagoons</span>
            <span class="tag">Tropical Paradise</span>
          </div>
        </div>
      </div>
      
      <div class="accordion-item" data-index="4">
        <img src="./images/fac5.jpg" alt="Machu Picchu" class="bg-image">
        <div class="location-label">MACHU PICCHU</div>
        <div class="content">
          <h2>Machu Picchu, Peru</h2>
          <p>Trek through the clouds to this ancient Incan citadel nestled high in the Andes mountains. The mysterious 15th-century stone structures offer a glimpse into a sophisticated civilization and provide panoramic views of sacred valleys.</p>
          <div class="tags">
            <span class="tag">Incan Heritage</span>
            <span class="tag">Mountain Trekking</span>
            <span class="tag">Archaeological Wonder</span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="indicators">
      <span class="indicator active" data-index="0"></span>
      <span class="indicator" data-index="1"></span>
      <span class="indicator" data-index="2"></span>
      <span class="indicator" data-index="3"></span>
      <span class="indicator" data-index="4"></span>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const accordionItems = document.querySelectorAll('.accordion-item');
      const indicators = document.querySelectorAll('.indicator');
      
      // Track mouse position for the radial effect
      accordionItems.forEach(item => {
        item.addEventListener('mousemove', (e) => {
          if (!item.classList.contains('active')) {
            const rect = item.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            item.style.setProperty('--mouse-x', `${x}px`);
            item.style.setProperty('--mouse-y', `${y}px`);
            
            // Position the radial gradient
            const afterElement = window.getComputedStyle(item, '::after');
            if (afterElement) {
              item.style.setProperty('--after-left', `${x}px`);
              item.style.setProperty('--after-top', `${y}px`);
            }
          }
        });
      });
      
      // Handle click on accordion items
      accordionItems.forEach(item => {
        item.addEventListener('click', () => {
          const index = item.getAttribute('data-index');
          
          // Only proceed if this isn't already the active item
          if (!item.classList.contains('active')) {
            // Remove active class from all items
            accordionItems.forEach(i => i.classList.remove('active'));
            
            // Add active class to clicked item
            item.classList.add('active');
            
            // Update indicators
            indicators.forEach(ind => ind.classList.remove('active'));
            indicators[index].classList.add('active');
          }
        });
      });
      
      // Handle click on indicators
      indicators.forEach(indicator => {
        indicator.addEventListener('click', () => {
          const index = indicator.getAttribute('data-index');
          
          // Update active indicator
          indicators.forEach(ind => ind.classList.remove('active'));
          indicator.classList.add('active');
          
          // Update active accordion item
          accordionItems.forEach(item => item.classList.remove('active'));
          accordionItems[index].classList.add('active');
        });
      });
      
      // Autoplay functionality
      let currentIndex = 0;
      const autoplayInterval = 5000; // 5 seconds
      
      const startAutoplay = () => {
        setInterval(() => {
          currentIndex = (currentIndex + 1) % accordionItems.length;
          
          // Update active accordion item
          accordionItems.forEach(item => item.classList.remove('active'));
          accordionItems[currentIndex].classList.add('active');
          
          // Update indicators
          indicators.forEach(ind => ind.classList.remove('active'));
          indicators[currentIndex].classList.add('active');
        }, autoplayInterval);
      };
      
      // Stop autoplay when user interacts with accordion
      accordionItems.forEach(item => {
        item.addEventListener('click', () => {
          clearInterval(autoplayInterval);
          
          // Get new current index
          currentIndex = parseInt(item.getAttribute('data-index'));
        });
      });
      
      indicators.forEach(indicator => {
        indicator.addEventListener('click', () => {
          clearInterval(autoplayInterval);
          
          // Get new current index
          currentIndex = parseInt(indicator.getAttribute('data-index'));
        });
      });
      
      // Start autoplay
      // startAutoplay();
    });
  </script>


  <div class="container mt-5">
  <div class="row py-5">
    <h4 class="display-5 mb-4 fw-bold">Top <span class="gradient-text">Courses</span></h4>
    <!-- 1 -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <div class="gradient-hover-card">
        <div class="card p-3 bg-light rounded-4">
          <div class="d-flex justify-content-around rounded-4 p-2" style="background-image: url('./images/course1.webp'); background-size: cover; background-position: center; min-height: 250px;">
            <p class="rounded-pill bg-warning px-2 fw-semibold position-absolute" style=" left: 20px; width: fit-content; height: fit-content; font-size: small; z-index: 1;">Trending</p>
            <p class="rounded-pill bg-black px-2 fw-semibold text-white position-absolute" style=" right: 20px; width: fit-content; height: fit-content; font-size: small; z-index: 1;">In demand Specialization</p>
          </div>
          <div style="margin-top: -16px;">
            <p class="bg-danger rounded-end-5 text-center px-4" style="margin-left: -16px; width: fit-content;">Dj Dental for Higher Education</p>
          </div>
          <div class="card-body" style="margin-top: -20px;">
            <p class="card-text fw-bold">Bachelor of Computer Application (BCA)</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 2 -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <div class="gradient-hover-card">
        <div class="card p-3 bg-light rounded-4">
          <div class="d-flex justify-content-around rounded-4 p-2" style="background-image: url('./images/course1.webp'); background-size: cover; background-position: center; min-height: 250px;">
            <p class="rounded-pill bg-warning px-2 fw-semibold position-absolute" style=" left: 20px; width: fit-content; height: fit-content; font-size: small; z-index: 1;">Trending</p>
            <p class="rounded-pill bg-black px-2 fw-semibold text-white position-absolute" style=" right: 20px; width: fit-content; height: fit-content; font-size: small; z-index: 1;">In demand Specialization</p>
          </div>
          <div style="margin-top: -16px;">
            <p class="bg-danger rounded-end-5 text-center px-4" style="margin-left: -16px; width: fit-content;">Dj Dental for Higher Education</p>
          </div>
          <div class="card-body" style="margin-top: -20px;">
            <p class="card-text fw-bold">Bachelor of Computer Application (BCA)</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 3 -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <div class="gradient-hover-card">
        <div class="card p-3 bg-light rounded-4">
          <div class="d-flex justify-content-around rounded-4 p-2" style="background-image: url('./images/course1.webp'); background-size: cover; background-position: center; min-height: 250px;">
            <p class="rounded-pill bg-warning px-2 fw-semibold position-absolute" style=" left: 20px; width: fit-content; height: fit-content; font-size: small; z-index: 1;">Trending</p>
            <p class="rounded-pill bg-black px-2 fw-semibold text-white position-absolute" style=" right: 20px; width: fit-content; height: fit-content; font-size: small; z-index: 1;">In demand Specialization</p>
          </div>
          <div style="margin-top: -16px;">
            <p class="bg-danger rounded-end-5 text-center px-4" style="margin-left: -16px; width: fit-content;">Dj Dental for Higher Education</p>
          </div>
          <div class="card-body" style="margin-top: -20px;">
            <p class="card-text fw-bold">Bachelor of Computer Application (BCA)</p>
          </div>
        </div>
      </div>
    </div>

    <!-- 4 -->
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
      <div class="gradient-hover-card">
        <div class="card p-3 bg-light rounded-4">
          <div class="d-flex justify-content-around rounded-4 p-2" style="background-image: url('./images/course1.webp'); background-size: cover; background-position: center; min-height: 250px;">
            <p class="rounded-pill bg-warning px-2 fw-semibold position-absolute" style="left: 20px; width: fit-content; height: fit-content; font-size: small; z-index: 1;">Trending</p>
            <p class="rounded-pill bg-black px-2 fw-semibold text-white position-absolute" style="right: 20px; width: fit-content; height: fit-content; font-size: small; z-index: 1;">In demand Specialization</p>
          </div>
          <div style="margin-top: -16px;">
            <p class="bg-danger rounded-end-5 text-center px-4" style="margin-left: -16px; width: fit-content;">Dj Dental for Higher Education</p>
          </div>
          <div class="card-body" style="margin-top: -20px;">
            <p class="card-text fw-bold">Bachelor of Computer Application (BCA)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  /* Additional responsive adjustments */
  @media (max-width: 768px) {
    .card .position-relative {
      min-height: 200px !important; /* Reduce height on smaller screens */
    }
    .display-5 {
      font-size: 2rem; /* Adjust heading size on mobile */
    }
    .card-body {
      margin-top: -15px !important; /* Slight adjustment for overlap on mobile */
    }
  }

  @media (max-width: 576px) {
    .card .position-relative {
      min-height: 180px !important; /* Further reduce on very small screens */
    }
    /* Stack badges vertically if needed, but positioning should handle it */
    .rounded-pill {
      font-size: 0.75rem !important; /* Smaller badges on mobile */
    }
  }
</style>

  <style>
    .gradient-hover-card {
      position: relative;
      z-index: 1;
      border-radius: 1rem;
      cursor: pointer;
    }

    .gradient-hover-card::before {
      content: "";
      position: absolute;
      top: -2px;
      left: -2px;
      right: -1px;
      bottom: -2px;
      background: linear-gradient(45deg, rgb(225 45 35), #ff8419);
      z-index: -1;
      border-radius: 1.1rem;
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
    }

    .gradient-hover-card:hover::before {
      opacity: 1;
    }

    .gradient-hover-card .card {
      border: 0.1px solid rgb(203, 201, 201);
      border-radius: 1rem;
      background-clip: padding-box;
    }
  </style>

  





<!-- ===== Image Scroller Section ===== --> 
<section class="">
    <div class="container">
        
        <!-- Heading with Fade-in -->
       <div class="text-center mb-5">
      <h2 class="fw-bold display-5 text-start">
       Departments of <span class="gradient-text">DJ Dental</span>
      </h2>
    </div>

        <!-- Cards Container with Auto-scroll -->
        <div class="position-relative">
            
            <div id="cardsContainer" class="d-flex gap-4 pb-3" 
                 style="overflow-x: auto; scroll-behavior: smooth;">
                
                <!-- Card 1 -->
                <div class="card service-card flex-shrink-0 border-0">
                    <img src="https://djdentalcollege.com/img/Block-4/Asset%2033@2x.webp" class="card-img-top" alt="Web Development">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-dark">ORAL MEDICINE & RADIOLOGY</h5>
                                    <button class="btn btn-sm btn-dark rounded-pill">
                            Read More <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card service-card flex-shrink-0 border-0">
                    <img src="https://djdentalcollege.com/img/Block-4/Asset%2034@2x.webp" class="card-img-top" alt="ORAL MAXILLOFACIAL & SURGERY">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-dark">ORAL MAXILLOFACIAL & SURGERY</h5>
                            <button class="btn btn-sm btn-dark rounded-pill">
                            Read More <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card service-card flex-shrink-0 border-0">
                    <img src="https://djdentalcollege.com/img/Block-4/Asset%2031@2x.webp" class="card-img-top" alt="COMMUNITY & DENTISTRY">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-dark">COMMUNITY & DENTISTRY</h5><br>
                           <button class="btn btn-sm btn-dark rounded-pill">
                            Read More <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card service-card flex-shrink-0 border-0">
                    <img src="https://djdentalcollege.com/img/Block-4/Asset%2032@2x.webp" class="card-img-top" alt="CONSERVATIVE & DENTISTRY">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-dark">CONSERVATIVE & DENTISTRY</h5>
                            <button class="btn btn-sm btn-dark rounded-pill">
                            Read More <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card service-card flex-shrink-0 border-0">
                    <img src="https://djdentalcollege.com/img/Block-4/Asset%2046@2x.webp" class="card-img-top" alt="PROSTHODONTICS">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-dark">PROSTHODONTICS</h5><br>
                            <button class="btn btn-sm btn-dark rounded-pill">
                            Read More <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 6 -->
                  <div class="card service-card flex-shrink-0 border-0">
                    <img src="https://djdentalcollege.com/img/Block-4/Asset%2034@2x.webp" class="card-img-top" alt="ORAL MAXILLOFACIAL & SURGERY">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-dark">ORAL MAXILLOFACIAL & SURGERY</h5>
                            <button class="btn btn-sm btn-dark rounded-pill">
                            Read More <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 7 -->
                 <div class="card service-card flex-shrink-0 border-0">
                    <img src="https://djdentalcollege.com/img/Block-4/Asset%2034@2x.webp" class="card-img-top" alt="ORAL MAXILLOFACIAL & SURGERY">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-dark">ORAL MAXILLOFACIAL & SURGERY</h5>
                            <button class="btn btn-sm btn-dark rounded-pill">
                            Read More <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Controls -->
        <div class="d-flex justify-content-center align-items-center gap-3 mt-4">
            
            <!-- Previous Button -->
            <button class="nav-arrow" onclick="navigate('prev')">
                <i class="bi bi-chevron-left fs-5"></i>
            </button>

            <!-- Desktop Dots (2 dots for groups) -->
            <div class="dots-desktop align-items-center" style="display: none;">
                <span class="dot active" onclick="goToSlide(0)"></span>
                <span class="dot" onclick="goToSlide(3)"></span>
            </div>

            <!-- Mobile Dots (7 dots for each card) -->
            <div class="dots-mobile align-items-center" style="display: none;">
                <span class="dot active" onclick="goToSlide(0)"></span>
                <span class="dot" onclick="goToSlide(1)"></span>
                <span class="dot" onclick="goToSlide(2)"></span>
                <span class="dot" onclick="goToSlide(3)"></span>
                <span class="dot" onclick="goToSlide(4)"></span>
                <span class="dot" onclick="goToSlide(5)"></span>
                <span class="dot" onclick="goToSlide(6)"></span>
            </div>

            <!-- Next Button -->
            <button class="nav-arrow" onclick="navigate('next')">
                <i class="bi bi-chevron-right fs-5"></i>
            </button>
        </div>

    </div>
</section>


<?php include "./components/gallery.php" ?>
<!-- <section class="course-guide-section">
  <div class="container banner-section text-dark">
    <h2 class="gradient-text">Ready to Begin Your Journey?</h2>
    <p>Join us today and take the first step toward a brighter future!</p>
    <a href="#" class="btn btn-outline-dark rounded-pill px-4 py-2">Join Now</a>
  </div>
</section> -->

<!-- Insights Section  -->
<section class="insight-section fade-in">
  <div class="container">
    <div class="insight-header">
      <h2 class="mb-5">
        Advancing Dental Science through Cutting-Edge <span class="gradient-text">Research & Innovation</span>
      </h2>
    </div>
    
    <div class="insight-container">
      <!-- Floating Tags -->
      <div class="insight-tags">
        <span class="tag-float">Clinical Research</span>
        <span class="tag-float">Oral & Maxillofacial</span>
        <span class="tag-float">Tissue Engineering</span>
        <span class="tag-float">Early Detection</span>
        <span class="tag-float">Faculty Publications</span>
      </div>
      
      <!-- White Insight Card Overlay -->
      <div class="insight-card">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex align-items-center">
            <span class="icon-badge me-2">
              <i class="fas fa-flask"></i>
            </span>
            <span class="fw-semibold">Research Focus</span>
          </div>
          <a href="#" class="btn btn-outline-secondary rounded-pill btn-sm px-3">Learn More</a>
        </div>
        
        <h4 class="mb-2 fw-bold">Research Impact at DJ Dental</h4>
        <p class="text-muted mb-3" style="font-size: 0.9rem;">
          From tissue engineering to early oral cancer detection, our faculty and students publish extensively, presenting over 500 papers and 140 posters internationally. :contentReference[oaicite:1]{index=1}
        </p>
        
        <div class="d-flex justify-content-between align-items-center">
          <span class="percentage">500+ Papers</span>
          <i class="fas fa-ellipsis-h fa-2x text-muted"></i>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- End Insights Section -->


<!-- Testimonials -->
<section class="video-carousel-section">
  <div class="video-carousel-container">

  <div class="insight-header">
      <h2 class="mb-5 text-center">
       Students <span class="gradient-text">Point of Views</span></span>
      </h2>
    </div>
    <button class="carousel-arrow left"><i class="fas fa-chevron-left"></i></button>

    <div class="video-carousel-track">
      <!-- 1 -->
      <div class="video-card" data-index="0">
        <div class="video-box">
          <video
            class="carousel-video"
            poster="https://images.pexels.com/photos/3777568/pexels-photo-3777568.jpeg"
            preload="none"
            muted
            playsinline
            controls
          >
            <source
              src="https://videos.pexels.com/video-files/856193/856193-hd_1920_1080_30fps.mp4"
              type="video/mp4"
            />
          </video>
          <div class="video-play-icon"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <h3 class="video-name">Seraphina Vance</h3>
          <p class="video-role">Chief Architect</p>
        </div>
      </div>

      <!-- 2 -->
      <div class="video-card" data-index="1">
        <div class="video-box">
          <video
            class="carousel-video"
            poster="https://images.pexels.com/photos/1559486/pexels-photo-1559486.jpeg"
            preload="none"
            muted
            playsinline
            controls
          >
            <source
              src="https://videos.pexels.com/video-files/3115331/3115331-hd_1920_1080_30fps.mp4"
              type="video/mp4"
            />
          </video>
          <div class="video-play-icon"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <h3 class="video-name">Kaelen Thorne</h3>
          <p class="video-role">Data Scientist</p>
        </div>
      </div>

      <!-- 3 -->
      <div class="video-card" data-index="2">
        <div class="video-box">
          <video
            class="carousel-video"
            poster="https://images.pexels.com/photos/7633604/pexels-photo-7633604.jpeg"
            preload="none"
            muted
            playsinline
            controls
          >
            <source
              src="https://videos.pexels.com/video-files/2956979/2956979-hd_1920_1080_30fps.mp4"
              type="video/mp4"
            />
          </video>
          <div class="video-play-icon"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <h3 class="video-name">Alia Sharma</h3>
          <p class="video-role">Head of Product</p>
        </div>
      </div>

      <!-- 4 -->
      <div class="video-card" data-index="3">
        <div class="video-box">
          <video
            class="carousel-video"
            poster="https://images.pexels.com/photos/1181690/pexels-photo-1181690.jpeg"
            preload="none"
            muted
            playsinline
            controls
          >
            <source
              src="https://videos.pexels.com/video-files/3195395/3195395-hd_1920_1080_25fps.mp4"
              type="video/mp4"
            />
          </video>
          <div class="video-play-icon"><i class="fas fa-play"></i></div>
        </div>
        <div class="video-info">
          <h3 class="video-name">Rafael Cruz</h3>
          <p class="video-role">UX Strategist</p>
        </div>
      </div>
    </div>

    <button class="carousel-arrow right"><i class="fas fa-chevron-right"></i></button>
  </div>
</section>

<style>
  .video-carousel-section {
    padding: 80px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
  }

  .video-carousel-container {
    position: relative;
    padding: 10px;
  }

  .video-carousel-track {
    display: flex;
    transition: transform 0.8s ease-in-out;
    gap: 30px;
  }

  .video-card {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    flex: 0 0 300px;
    text-align: center;
    transition: all 0.6s ease;
  }

  .video-card:hover {
    transform: translateY(-10px) scale(1.05);
    box-shadow: 0 15px 40px rgba(255, 0, 0, 0.14);
  }

  .video-box {
    position: relative;
    width: 100%;
    height: 250px;
    overflow: hidden;
    border-radius: 24px 24px 0 0;
  }

  .carousel-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.8);
    border-radius: inherit;
  }

  .video-play-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(255, 64, 0, 0.7);
    color: white;
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2rem;
    cursor: pointer;
    z-index: 3;
    transition: all 0.3s ease;
    box-shadow: 0 0 20px rgba(255, 0, 0, 0.6);
  }

  .video-play-icon:hover {
    transform: translate(-50%, -50%) scale(1.1);
    background: rgba(255, 0, 0, 0.9);
  }

  .video-box.playing .video-play-icon {
    opacity: 0;
    pointer-events: none;
  }

  .video-box.playing video {
    filter: brightness(1);
  }

  .video-info {
    padding: 20px;
  }

  .video-name {
    font-size: 1.2rem;
    font-weight: 600;
    color: #000000ff;
  }

  .video-role {
    font-size: 1rem;
    color: #ccc;
    margin-top: 5px;
  }

  .carousel-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 0, 0, 0.2);
    border: none;
    color: white;
    font-size: 2rem;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 10;
  }

  .carousel-arrow:hover {
    background: rgba(255, 0, 0, 0.6);
    transform: translateY(-50%) scale(1.1);
  }

  .carousel-arrow.left {
    left: -60px;
  }

  .carousel-arrow.right {
    right: -60px;
  }

  /* 🔹 Buttons visible only on mobile & tablet */
  @media (max-width: 991px) {
    .video-carousel-container {
      width: 95%;
    }
    .carousel-arrow.left {
      left: 10px;
    }
    .carousel-arrow.right {
      right: 10px;
    }
    .video-card {
      flex: 0 0 80%;
    }
  }

  /* 🔹 Hide nav buttons on desktop */
  @media (min-width: 992px) {
    .carousel-arrow {
      display: none !important;
    }
  }
</style>

<script>
  // 🎥 PLAY BUTTON FUNCTIONALITY
  const videoBoxes = document.querySelectorAll(".video-box");

  videoBoxes.forEach((box) => {
    const video = box.querySelector(".carousel-video");
    const playIcon = box.querySelector(".video-play-icon");

    playIcon.addEventListener("click", () => {
      document.querySelectorAll(".carousel-video").forEach((v) => {
        v.pause();
        v.closest(".video-box").classList.remove("playing");
      });

      box.classList.add("playing");
      video.play();
    });

    video.addEventListener("ended", () => {
      box.classList.remove("playing");
    });
  });

  // 🎠 Carousel Navigation (only works in mobile/tablet view)
  const videoTrack = document.querySelector(".video-carousel-track");
  const videoCards = Array.from(videoTrack.children);
  const nextBtn = document.querySelector(".carousel-arrow.right");
  const prevBtn = document.querySelector(".carousel-arrow.left");
  let vidIndex = 0;

  function updateVideoCarousel() {
    const cardWidth = videoCards[0].getBoundingClientRect().width + 30;
    videoTrack.style.transform = translateX(-${vidIndex * cardWidth}px);
  }

  function isSmallDevice() {
    return window.innerWidth <= 991;
  }

  nextBtn.addEventListener("click", () => {
    if (!isSmallDevice()) return;
    vidIndex = (vidIndex + 1) % videoCards.length;
    updateVideoCarousel();
  });

  prevBtn.addEventListener("click", () => {
    if (!isSmallDevice()) return;
    vidIndex = (vidIndex - 1 + videoCards.length) % videoCards.length;
    updateVideoCarousel();
  });

  window.addEventListener("resize", () => {
    if (!isSmallDevice()) {
      videoTrack.style.transform = "translateX(0)";
    }
  });
</script>


  <!-- Video Carousel -->
 <style>
:root {
  --center-offset: 100px;
  --gap1: 15vw;
  --gap2: 27vw;
  --offscreen: 70vw;
}

/* Container */
.vid-container {max-width: 100%; overflow: hidden; margin-left: -100px; }
#carousel { width: 100%; width: 1200px; height: 420px; margin: auto; position: relative; padding: 20px;}
.carousel-items { position: relative; width: 100%; height: 100%; overflow: hidden; }

/* Items */
.item {
  position: absolute;
  top: 0px;
  border-radius: 12px;
  transition: all 0.8s ease;
  overflow: hidden;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
}
.item video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  /* allow clicks so native controls work */
  pointer-events: auto !important;
  border-radius: 12px;
  display: block;
}


/* Levels */
.level0 { left: 50%; transform: translateX(-50%) scale(1); width: 240px; height: 350px; z-index: 5; }
.level1 { left: calc(50% - var(--gap1)); transform: translateX(-50%) scale(0.9); opacity: 0.9; width: 200px; height: 320px; z-index: 4; }
.level-1 { left: calc(50% + var(--gap1)); transform: translateX(-50%) scale(0.9); opacity: 0.9; width: 200px; height: 320px; z-index: 4; }
.level2 { left: calc(50% - var(--gap2)); transform: translateX(-50%) scale(0.8); opacity: 0.7; width: 200px; height: 280px; z-index: 3; }
.level-2 { left: calc(50% + var(--gap2)); transform: translateX(-50%) scale(0.8); opacity: 0.7; width: 200px; height: 280px; z-index: 3; }

/* Animation classes */
.left-enter, .right-enter {
  opacity: 0;
  width: 200px;
  height: 280px;
  transform: scale(0.7);
  z-index: 2;
}

.left-enter { left: calc(50% - var(--offscreen)); }
.right-enter { left: calc(50% + var(--offscreen)); }

.left-enter-active {
  opacity: 1;
  left: calc(50% - var(--gap2));
  transform: translateX(-50%) scale(0.8);
}
.right-enter-active {
  opacity: 1;
  left: calc(50% + var(--gap2));
  transform: translateX(-50%) scale(0.8);
}
.left-leave-active {
  opacity: 0;
  left: calc(50% + var(--offscreen));
  transform: translateX(-50%) scale(0.7);
}
.right-leave-active {
  opacity: 0;
  left: calc(50% - var(--offscreen));
  transform: translateX(-50%) scale(0.7);
}

/* Arrows */
.arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 40px;
  height: 40px;
  background: white !important;
  border-radius: 50%;
  display: flex !important;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 10;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
  transition: all 0.3s ease;
}
.arrow:hover { transform: translateY(-50%) scale(1.1); background: #f8f9fa !important; }
.arrow-left { left: -20px; }
.arrow-right { right: -20px; }
.arrow i { color: #228291; font-size: 1.2rem; }

/* --- FIX: make carousel visible & responsive on small screens --- */
@media (max-width: 992px) {
  .vid-container {
    margin-left: 0 !important;
    overflow-x: hidden;
  }

  #carousel {
    width: 100% !important;
    max-width: 100%;
    height: 420px !important; /* increased height */
    overflow: visible;
  }

  .item {
    left: 50% !important;
    transform: translateX(-50%) scale(1) !important;
    width: 85vw !important;   /* make it wider */
    height: 380px !important; /* make it taller */
  }

  .level0, .level1, .level-1, .level2, .level-2 {
    position: absolute;
    left: 50% !important;
    transform: translateX(-50%) scale(1) !important;
    opacity: 1 !important;
    width: 85vw !important;
    height: 380px !important;
  }

  video {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;

  }

  .arrow-left { left: 10px !important; }
  .arrow-right { right: 10px !important; }
}


/* ===== Show only one item on mobile ===== */
@media (max-width: 768px) {
  :root {
    --gap1: 0vw;
    --gap2: 0vw;
    --offscreen: 50vw;
  }

  #carousel {
    width: 100% !important;
    height: 340px !important;
    overflow: hidden !important;
    position: relative;
  }

  .item {
    position: absolute;
    left: 50% !important;
    transform: translateX(-50%) scale(1) !important;
    opacity: 1 !important;
    z-index: 5 !important;
    width: 80vw !important;
    height: 300px !important;
  }

  /* Hide all side levels */
  .level1, .level-1, .level2, .level-2 {
    display: none !important;
  }

  .arrow-left { left: 10px !important; }
  .arrow-right { right: 10px !important; }
}

</style>
</head>

<body>
<div class="vid-container">
  <div class="row justify-content-center">
    <div class="col-lg-10 col-xl-8">
      <div id="carousel">
        <button class="arrow arrow-left"><i class="bi bi-chevron-left"></i></button>
        <div class="carousel-items"></div>
        <button class="arrow arrow-right"><i class="bi bi-chevron-right"></i></button>
      </div>
    </div>
  </div>
</div>

<script>
const videos = [
  "https://www.w3schools.com/html/mov_bbb.mp4",
  "https://www.w3schools.com/html/movie.mp4",
  "https://cdn.pixabay.com/video/2021/09/13/89414-611095063_large.mp4",
  "https://cdn.pixabay.com/video/2023/04/26/159868-821064408_large.mp4",
  "https://cdn.pixabay.com/video/2020/09/10/50768-456276944_large.mp4",
  "https://cdn.pixabay.com/video/2021/01/29/65320-509524112_large.mp4"
];

let currentIndex1 = 0;
const container1 = document.querySelector('.carousel-items');

function createItem(src, className) {
  const item = document.createElement('div');
  item.className = `item ${className}`;

  const video = document.createElement('video');
  video.src = src;
  video.controls = true;        // show native controls
  video.autoplay = false;       // no autoplay
  video.loop = false;
  video.muted = false;
  video.playsInline = true;     // important for iOS
  video.preload = "metadata";

  // Optional: tap anywhere on the video to toggle play/pause
  video.addEventListener('click', (e) => {
    // if controls are visible and user clicked the control area, let native behavior occur
    // otherwise toggle playback
    if (video.paused) {
      video.play().catch(()=>{}); // ignore play failures
    } else {
      video.pause();
    }
    // prevent parent click handlers interfering
    e.stopPropagation();
  });

  // Ensure controls are usable when another element might overlay
  // (if you have overlay elements, ensure they do not cover the video)
  item.appendChild(video);
  return item;
}



function init() {
  container1.innerHTML = '';
  for (let k = 0; k < 5; k++) {
    const level = [2, 1, 0, -1, -2][k];
    const idx = (currentIndex1 + k - 2 + videos.length) % videos.length;
    container1.appendChild(createItem(videos[idx], `level${level}`));
  }
}

function next() {
  const children = [...container1.children];
  const leaving = children[0];
  const enteringIdx = (currentIndex1 + 3) % videos.length;
  const entering = createItem(videos[enteringIdx], 'right-enter');
  container1.appendChild(entering);
  entering.offsetHeight;
  entering.classList.add('right-enter-active');

  children[1].className = 'item level2';
  children[2].className = 'item level1';
  children[3].className = 'item level0';
  children[4].className = 'item level-1';

  leaving.classList.add('right-leave-active');
  currentIndex1 = (currentIndex1 + 1) % videos.length;

  setTimeout(() => {
    leaving?.remove();
    entering.className = 'item level-2';
  }, 800);
}

function prev() {
  const children = [...container1.children];
  const leaving = children[4];
  const enteringIdx = (currentIndex1 - 2 + videos.length) % videos.length;
  const entering = createItem(videos[enteringIdx], 'left-enter');
  container1.insertBefore(entering, children[0]);
  entering.offsetHeight;
  entering.classList.add('left-enter-active');

  children[0].className = 'item level1';
  children[1].className = 'item level0';
  children[2].className = 'item level-1';
  children[3].className = 'item level-2';

  leaving.classList.add('left-leave-active');
  currentIndex1 = (currentIndex1 - 1 + videos.length) % videos.length;

  setTimeout(() => {
    leaving?.remove();
    entering.className = 'item level2';
  }, 800);
}

document.querySelector('.arrow-left').addEventListener('click', prev);
document.querySelector('.arrow-right').addEventListener('click', next);

// // Optional auto-scroll
// setInterval(next, 5000);

init();
</script>
















  <div class="container mb-4">
    <!-- Main Heading -->
    <h2 class="display-5 text-center mb-5 fw-bold">Shape Your Future With <span class="gradient-text">DJ
    GROUP OF INSTITUTIONS</span></h2>

    <!-- Main Responsive Grid -->
   <div class="row g-4">
      
      <!-- Left Column: MUJ (Large Card) -->
      <div class="col-lg-6">
        <div class="university-card position-relative overflow-hidden rounded-4 h-100 d-flex flex-column" style="background-color: #e3d9ff; min-height: 424px;">
          <!-- Doodle -->
          
          <svg class="university-doodle" width="848" height="536" viewBox="0 0 848 536" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M822.201 520.279C711.012 192.439 666.077 124.728 604.802 140.778C543.527 156.827 572.606 268.859 595.091 356.212C612.751 424.825 550.189 464.048 462.389 386.613C330.088 269.931 257.255 85.3633 313.651 57.1028C439.578 -6.00013 492.508 376.403 392.719 404.14C239.037 446.857 67.8902 150.421 -41.6245 -183" stroke="#C2B5FF" stroke-width="96"></path>
        </svg>

          <!-- Text Content -->
          <div class="card-text-content position-relative z-2">
            <h4 class="fw-bold mb-3 gradient-text">MEDICITY</h4>
            <a href="#" class="text-dark text-decoration-none">
              View all Courses <i class="bi bi-arrow-right-short"></i>
            </a>
          </div>

          <!-- Image at bottom right -->
          <div class="card-image-content mt-auto text-end">
            <img src="images/muj-university.webp" 
                 alt="MUJ" class="img-fluid position-relative z-2">
          </div>
        </div>
      </div>

      <!-- Right Column: 2 Stacked Cards -->
      <div class="col-lg-6">
        <div class="row g-4">
          <!-- Top Right Card (MAHE) -->
          <div class="col-12">
            <div class="university-card position-relative overflow-hidden rounded-4 d-flex" style="background-color: #cfe2ff; min-height: 250px;">
              <svg class="university-doodle" viewBox="0 0 744 298" fill="none">
                <path d="M696 304C676.5 182.667 473 -7 317.5 60.5C216.988 104.131 238.5 206 153 206C44.3434 206 13 38.5 -21 -61" stroke="#94CFFF" stroke-width="96"></path>
              </svg>
              
              <div class="card-text-content position-relative z-2 ">
                <h5 class="fw-bold mb-3 gradient-text">DJ DENTAL</h5>
                <a href="#" class="text-dark text-decoration-none">
                  View all Courses <i class="bi bi-arrow-right-short"></i>
                </a>
              </div>
              
              <div class="card-image-content ms-auto align-self-end">
                <img src="images/mahe-university.webp" 
                     alt="MAHE" class="img-fluid position-relative z-2">
              </div>
            </div>
          </div>
          
          <!-- Bottom Right Card (SMU) -->
          <div class="col-12">
            <div class="university-card position-relative overflow-hidden rounded-4 d-flex" style="background-color: #eefdff; min-height: 250px;">
              <svg class="university-doodle" viewBox="0 0 848 299" fill="none">
                <path d="M853 173.471C748.02 222.453 514.5 418.5 416 128.5C296.427 -223.543 463.822 -270 540 -61.9997C597.5 95.0003 391.183 207.889 260 203C155.053 199.089 36.2194 73.7559 -1.5 -19.4997" stroke="#A3F9F8" stroke-width="96"></path>
              </svg>
              
              <div class="card-text-content position-relative z-2 my-auto">
                <h5 class="fw-bold mb-3 gradient-text">DJ PHARMACY</h5>
                <a href="#" class="text-dark text-decoration-none">
                  View all Courses <i class="bi bi-arrow-right-short"></i>
                </a>
              </div>
              
              <div class="card-image-content ms-auto align-self-end">
                <img src="images/mahe-university.webp" 
                     alt="SMU" class="img-fluid position-relative z-2">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Bottom Row: 2 Side-by-Side Cards -->
      <div class="col-12">
        <div class="row g-4">
          <!-- Left Card -->
          <div class="col-md-6">
            <div class="university-card position-relative overflow-hidden rounded-4 d-flex" style="background-color: #ffe8e8; min-height: 200px;">
              <svg class="university-doodle" viewBox="0 0 848 299" fill="none">
                <path d="M853 173.471C748.02 222.453 514.5 418.5 416 128.5C296.427 -223.543 463.822 -270 540 -61.9997C597.5 95.0003 391.183 207.889 260 203C155.053 199.089 36.2194 73.7559 -1.5 -19.4997" stroke="#FFB74D" stroke-width="96"></path>
              </svg>

              <div class="card-text-content position-relative z-2 my-auto">
                <h5 class="fw-bold mb-3 gradient-text">DJ NURSING</h5>
                <a href="#" class="text-dark text-decoration-none">
                  View all Courses <i class="bi bi-arrow-right-short"></i>
                </a>
              </div>
              
              <div class="card-image-content ms-auto align-self-end">
                <img src="images/smu-university.webp" 
                     alt="SMU" class="img-fluid position-relative z-2">
              </div>
            </div>
          </div>

          <!-- Right Card -->
          <div class="col-md-6">
            <div class="university-card position-relative overflow-hidden rounded-4 d-flex" style="background-color: #e8f5e9; min-height: 200px;">
              <svg class="university-doodle" viewBox="0 0 744 298" fill="none">
                <path d="M696 304C676.5 182.667 473 -7 317.5 60.5C216.988 104.131 238.5 206 153 206C44.3434 206 13 38.5 -21 -61" stroke="#81C784" stroke-width="96"></path>
              </svg>
              
              <div class="card-text-content position-relative z-2 my-auto">
                <h5 class="fw-bold mb-3 gradient-text">DJ AYURVEDA</h5>
                <a href="#" class="text-dark text-decoration-none">
                  View all Courses <i class="bi bi-arrow-right-short"></i>
                </a>
              </div>
              
              <div class="card-image-content ms-auto align-self-end">
                <img src="images/smu-university.webp" 
                     alt="SMU" class="img-fluid position-relative z-2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

<?php include "./components/footer.php"?>


<!-- CSS for Layout and Animation -->
<style>
  /* Base card styling */
  .university-card {
    transition: transform 0.3s ease;
    overflow: hidden; /* Doodles card ke bahar nahi jayenge */
  }
  .university-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }

  /* Padding sirf text wale hisse pe */
  .card-text-content {
    padding: 24px 0 24px 32px;
  }
  
  /* Image area ko control karne ke liye */
  .card-image-content {
    width: 60%; /* Image area ka width */
  }

  /* Badi wali card (MUJ) ke liye alag se styling */
  .col-lg-6:first-child .card-image-content {
    width: 100%;
    text-align: right;
  }
  .col-lg-6:first-child .card-image-content img {
    max-width: 90%; /* Thoda sa right se gap rakha hai */
  }
  /* Doodle Animation */
  .university-doodle {
   position: absolute;
  left: 50%;
  top: 50%;
  height: 100%;
  transform: translate3d(-50%, -50%, 0);
  width: 110%;
  stroke-dasharray: 5000;
  stroke-dashoffset: 5000;
  opacity: 0.5;
  z-index: 0;/* Hamesha content ke piche */
  }
  .university-doodle path {
  stroke-width: 96px;
  }
  .university-doodle.animate {
      animation: draw 2s ease-out forwards;
  }
  .university-doodle.animate path {
    animation: drawDoodle 1.5s ease-out 0.3s forwards;
  }
  @keyframes fadeInDoodle { to { opacity: 0.7; } }
  @keyframes drawDoodle { to { stroke-dashoffset: 0; } }

  /* z-index ko content upar rakhne ke liye */
  .z-2 { z-index: 2; }
  
  /* Responsive for mobile */
  @media (max-width: 768px) {
    .card-text-content {
      padding: 24px 24px 0 24px;
      text-align: center;
    }
    .university-card {
      flex-direction: column !important;
      min-height: auto !important;
    }
    .card-image-content {
      width: 100%;
      text-align: center;
      margin-left: 0 !important; /* ms-auto ko override kare */
      align-self: center !important; /* align-self-end ko override kare */
      margin-top: 16px;
    }
    .card-image-content img {
      max-width: 100%;
    }
  }
</style>

<!-- JavaScript for Animation -->
<script>
  const observer1 = new IntersectionObserver((entries) => {
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
    observer1.observe(card);
  });
</script>
<style>
  .banner-section {
  background: url('./media/banner.webp') no-repeat center center/cover;
  border-radius: 15px;
  padding: 80px 40px;
  color: dark;
  text-align: left;
  position: relative;
  overflow: hidden;
}

/* Optional overlay for better text contrast */
.banner-section::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0);
  border-radius: 15px;
}

.banner-section h2,
.banner-section p,
.banner-section a {
  position: relative;
  z-index: 2;
}

.banner-section .btn:hover {
  background: linear-gradient(90deg, #ff4b2b, #ffb400);
  color: #fff;
}

</style>


  <!-- ===== JavaScript Dependencies ===== -->
  
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Updated Doodle SVG Animation Script for All Devices -->
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
document.addEventListener('DOMContentLoaded', function() {
  const wrapper = document.querySelector('.image-carousel-wrapper-new');
  const prevBtn = document.querySelector('#imagePrev');
  const nextBtn = document.querySelector('#imageNext');

  if (!wrapper || !prevBtn || !nextBtn) return;

  // Function to update the state of the buttons (enabled/disabled)
  function updateButtonStates() {
    const scrollLeft = wrapper.scrollLeft;
    const scrollWidth = wrapper.scrollWidth;
    const clientWidth = wrapper.clientWidth;

    // Disable prev button if at the beginning
    prevBtn.disabled = scrollLeft <= 5;

    // Disable next button if at the end
    // The '5' is a small buffer to account for sub-pixel rendering
    nextBtn.disabled = scrollLeft >= scrollWidth - clientWidth - 5;
  }

  // Event listener for the "Next" button
  nextBtn.addEventListener('click', () => {
    // Scroll by 80% of the visible width for a smooth page-by-page scroll
    const scrollAmount = wrapper.clientWidth * 0.8;
    wrapper.scrollBy({ left: scrollAmount, behavior: 'smooth' });
  });

  // Event listener for the "Previous" button
  prevBtn.addEventListener('click', () => {
    // Scroll back by 80% of the visible width
    const scrollAmount = wrapper.clientWidth * 0.8;
    wrapper.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
  });

  // Update button states whenever the user scrolls
  wrapper.addEventListener('scroll', updateButtonStates);

  // Also check on window resize
  window.addEventListener('resize', updateButtonStates);

  // Initial check when the page loads
  updateButtonStates();
});

// Simple Auto-Scrolling Logic
const container = document.getElementById('cardsContainer');
const cards = document.querySelectorAll('.service-card');
let currentIndex = 0;
let autoScroll;

// Auto-scroll function
function startAutoScroll() {
    autoScroll = setInterval(() => {
        currentIndex = (currentIndex + 1) % cards.length;
        scrollToCard(currentIndex);
    }, 3000); // Scroll every 3 seconds
}

// Scroll to specific card
function scrollToCard(index) {
    const cardWidth = cards[0].offsetWidth + 16; // card width + gap
    container.scrollLeft = index * cardWidth;
    updateDots(index);
}

// Update dots
function updateDots(index) {
    const isMobile = window.innerWidth < 769;
    const dots = document.querySelectorAll(isMobile ? '.dots-mobile .dot' : '.dots-desktop .dot');
    
    dots.forEach((dot, i) => {
        if(isMobile) {
            dot.classList.toggle('active', i === index);
        } else {
            // Desktop: 2 dots for groups
            const groupIndex = Math.floor(index / 3);
            dot.classList.toggle('active', i === groupIndex);
        }
    });
}

// Navigation functions
function navigate(direction) {
    clearInterval(autoScroll);
    
    if(direction === 'next') {
        currentIndex = (currentIndex + 1) % cards.length;
    } else {
        currentIndex = (currentIndex - 1 + cards.length) % cards.length;
    }
    
    scrollToCard(currentIndex);
    startAutoScroll();
}

function goToSlide(index) {
    clearInterval(autoScroll);
    currentIndex = index;
    scrollToCard(index);
    startAutoScroll();
}

// Pause on hover
container.addEventListener('mouseenter', () => clearInterval(autoScroll));
container.addEventListener('mouseleave', () => startAutoScroll());

// Start auto-scrolling
startAutoScroll();

// Update dots on resize
window.addEventListener('resize', () => updateDots(currentIndex));
  </script>
</body>
</html>