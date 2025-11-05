<section class="panorama-section">
  <div class="panorama-container">
    <div class="panorama-wrapper"></div>
  </div>
</section>

<div class="panorama-cursor">
  <img src="./media/rotate.png" alt="rotate" width="80" />
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=TikTok+Sans:opsz@12..36&display=swap');

html, body {
  margin: 0;
  padding: 0;
  font-family: "TikTok Sans", sans-serif;
  background: #fff;
  overflow-x: hidden;
}

.panorama-section {
  height: 100vh;
  position: relative;
  overflow: hidden;
}

.panorama-container {
  position: absolute;
  width: 100%;
  height: auto;
  overflow: ;
}

.panorama-wrapper {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.panorama-card {
  position: absolute;
  width: 20vw;
  max-width: 300px;
  min-width: 190px;
  aspect-ratio: 0.65;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #ddd;
  border-radius: 10px;
  box-shadow: -4px 4px 5px rgba(0,0,0,0.15);
  overflow: hidden;
  transform-origin: 50% 275%;
}

.panorama-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.panorama-card:hover img {
  transform: scale(1.05);
}

.panorama-cursor {
  position: fixed;
  left: -45px;
  top: -60px;
  pointer-events: none;
  user-select: none;
  opacity: 0;
  z-index: 999;
  transition: opacity 0.3s ease;
}

.panorama-cursor img {
  width: 70px;
  opacity: 0.9 !important;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script>
console.clear();

const nCards = 10;
const panoramaWrapper = document.querySelector(".panorama-wrapper");

// 🖼️ Add your image paths here
const images = [
  "https://djdentalcollege.com/img/gallery/IMG_2463.webp",
  "https://djdentalcollege.com/img/gallery/IMG_2463.webp",
  "https://djdentalcollege.com/img/gallery/IMG_2658.webp",
  "https://djdentalcollege.com/img/gallery/IMG_2658.webp",
  "https://djdentalcollege.com/img/gallery/IMG_2370.webp",
  "https://djdentalcollege.com/img/auditorium/1-3.webp",
 "https://djdentalcollege.com/img/gallery/IMG_2463.webp",
  "https://djdentalcollege.com/img/gallery/IMG_2463.webp",
  "https://djdentalcollege.com/img/gallery/IMG_2658.webp",
  "https://djdentalcollege.com/img/gallery/IMG_2658.webp",
  "https://djdentalcollege.com/img/gallery/IMG_2370.webp",
  "https://djdentalcollege.com/img/auditorium/1-3.webp"
];

const rotations = [];
let direction;

// Create the cards with images
for (let i = 0; i < nCards; i++) {
  const card = document.createElement("div");
  card.className = "panorama-card";

  const img = document.createElement("img");
  img.src = images[i % images.length];
  card.appendChild(img);

  panoramaWrapper.append(card);

  rotations.push(gsap.utils.clamp(-90, 90, i * 18 - 90));
  gsap.set(card, {
    xPercent: -50,
    rotate: rotations[i]
  });
}

// Cursor animation
let cursorX = gsap.quickTo(".panorama-cursor", "x", { ease: "power4" }),
  cursorY = gsap.quickTo(".panorama-cursor", "y", { ease: "power4" }),
  cursorDir = gsap.quickSetter(".panorama-cursor", "scaleX");

const panoramaContainer = document.querySelector(".panorama-container");
panoramaContainer.onpointerenter = () => gsap.to('.panorama-cursor', { opacity: 1 });
panoramaContainer.onpointerleave = () => gsap.to('.panorama-cursor', { opacity: 0 });
panoramaContainer.onpointermove = (e) => {
  direction = e.x < innerWidth / 2 ? -1 : 1;
  cursorDir(direction);
  cursorX(e.x);
  cursorY(e.y);
};

// Rotation logic
const delayedMove = gsap.to(window, {
  paused: true,
  repeat: -1,
  onRepeat: movePanorama,
  onStart: movePanorama,
  duration: 0.15
});

panoramaContainer.onpointerdown = () => delayedMove.play(0);
panoramaContainer.onpointerup = () => delayedMove.pause();

function movePanorama() {
  if (direction > 0) {
    const first = panoramaWrapper.firstElementChild;
    panoramaWrapper.append(first);
    gsap.set(first, { rotate: rotations[rotations.length - 1], zIndex: 1 });
  } else {
    const last = panoramaWrapper.lastElementChild;
    panoramaWrapper.prepend(last);
    gsap.set(last, { rotate: rotations[0], zIndex: 0 });
  }

  for (let i = 0; i < nCards; i++) {
    const card = panoramaWrapper.children[i];
    let dur = 0, delay = 0;

    if (i > 0 && i < 11) {
      dur = 1.35;
      delay = gsap.utils.interpolate(0, 0.4, direction < 0 ? 1 - i / 10 : i / 10);
    }

    gsap.to(card, {
      duration: dur,
      delay: delay,
      rotate: rotations[i],
      ease: "elastic.out(0.5)"
    });
  }
}

</script>
