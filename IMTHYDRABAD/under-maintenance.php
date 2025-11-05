<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="robots" content="noindex, nofollow">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IMT Hyderabad: Site Under Maintenance</title>
  <?php include "./components/header.php"; ?>
  <style>
    /* Maintenance Page Styles */
    

    .maintenance-section {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      min-height: 80vh;
      text-align: center;
      padding: 2rem;
    }

    .maintenance-section img {
      width: 300px;
      max-width: 90%;
      margin-bottom: 2rem;
      animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    h1 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      color: #040f49ff;
    }

    p {
      font-size: 1.1rem;
      max-width: 600px;
      margin: 0 auto 2rem;
      color: #f8f9fa;
    }

    .countdown {
      font-size: 1.2rem;
      color: #ffeb3b;
      font-weight: 500;
      margin-bottom: 2rem;
    }

    .btn-home {
      background-color: #FFC107;
      color: #000;
      padding: 10px 24px;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-home:hover {
      background-color: #fff;
      color: #022D7C;
      transform: translateY(-3px);
    }

    footer {
      margin-top: auto;
    }

    @media (max-width: 576px) {
      h1 {
        font-size: 2rem;
      }
      p {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>
  <?php include "./components/navbar.php"; ?>

  <section class="maintenance-section" data-aos="zoom-in">
    <!-- <img src="./media/imtpilllogo.png" alt="Under Maintenance Icon"> -->
    <h1>We’ll Be Back Soon!</h1>
    <p>We’re performing some scheduled maintenance to improve your experience.  
      Thank you for your patience and understanding. Our site will be back online shortly.
    </p>
    <div class="countdown" id="countdown">Estimated time remaining: <span id="timer">00:30:00</span></div>
    <a href="/" class="btn-home">Go to Home</a>
  </section>

  <?php include "./components/footer.php"; ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });

    // Countdown Timer (optional)
    let totalSeconds = 30 * 60; // 30 minutes
    const timer = document.getElementById("timer");
    setInterval(() => {
      const minutes = Math.floor(totalSeconds / 60);
      const seconds = totalSeconds % 60;
      timer.textContent = `${minutes.toString().padStart(2,'0')}:${seconds.toString().padStart(2,'0')}`;
      if (totalSeconds > 0) totalSeconds--;
    }, 1000);
  </script>
</body>
</html>
