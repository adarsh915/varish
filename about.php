<style>



/* newwww */
.accordion-wrapper {
  position: sticky;
  top: 0;
  background: #fff;
  z-index: 10;
  padding-bottom: 40px;
}

.accordion-item {
  border-bottom: 1px solid #ddd;
  padding: 20px 0;
  transition: all 0.4s ease;
}

.accordion-header {
  display: flex;
  justify-content: space-between;
  font-size: 22px;
  font-weight: 600;
  cursor: pointer;
}

.accordion-icon {
  transition: transform 0.3s ease;
}

.accordion-item.active .accordion-icon {
  transform: rotate(45deg);
}

.accordion-content {
  max-height: 400px; /* OPEN BY DEFAULT */
  opacity: 1;
  overflow: hidden;
  transform: translateY(0);
  transition:
    max-height 0.5s ease,
    opacity 0.4s ease,
    transform 0.4s ease;
}

/* CLOSED */
.accordion-item.closed .accordion-content {
  max-height: 0;
  opacity: 0;
  transform: translateY(-15px);
}


  /* Accordion Base */
  .accordion-item {
    border-bottom: 1px solid #ddd;
    padding: 20px 0;
    cursor: pointer;
  }

  .accordion-header {
    display: flex;
    justify-content: space-between;
    font-size: 22px;
    font-weight: 600;
    align-items: center;
  }

  /* "+" icon animation */
  .accordion-icon {
    transition: transform 0.3s ease-in-out;
    display: inline-block;
  }

  .accordion-item.active .accordion-icon {
    transform: rotate(45deg);
  }

  /* Hidden content */
  .accordion-content {
    max-height: 0;
    overflow: hidden;
    opacity: 0;
    transform: translateY(-10px);
    transition:
      max-height 0.5s ease,
      opacity 0.4s ease,
      transform 0.4s ease;
    padding-right: 10px;
  }

  .accordion-item.active .accordion-content {
    opacity: 1;
    transform: translateY(0);
    max-height: 400px;
    margin-top: 12px;
  }
</style>


<?php include 'include/header.php'; ?>
<section class="aboutme-section container-fluid side-gap ">
  <!-- Left Text -->
  <div class="aboutme-text">
    <h2>Hello,</h2>
    <h1>
      I am an independent graphic designer specializing <br>
      in brand identity, logo & packaging design.
    </h1>
    <p>
      With a passion for creating unique & memorable visuals, I help businesses build strong
      brand identities that stand out. Residing and working in Pune, India. Clean, minimalist,
      bold, thoughtful – these are the key essentials for my designs. With nearly a decade of
      work experience.
    </p>
  </div>

  <!-- Right Image -->
  <div class="aboutme-image">
    <img src="assets/images/VARIS2.avif" alt="About Me">
  </div>
</section>


<!-- accordion -->
<div class="container-fluid side-gap">
  <hr>
  <div class="accordion-wrapper">
  <div class="row">
    <div class="col-lg-6">
      <div class="whatido-title">What I Do</div>
    </div>
    <div class="col-lg-6">
      <div class="accordion-item">
        <div class="accordion-header">
          <span>Strategy</span>
          <span class="accordion-icon">+</span>
        </div>
        <div class="accordion-content">
          <p>We immerse ourselves into an organisation to identify insights across brand, product and technology.</p>
          <ul>
            <li>Positioning</li>
            <li>Brand Architecture</li>
            <li>Naming</li>
            <li>Voice & Tone</li>
            <li>Content Strategy</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <span>Design</span>
          <span class="accordion-icon">+</span>
        </div>
        <div class="accordion-content">
          <p>Our design process blends creativity and strategy to build impactful identities.</p>
          <ul>
            <li>UI/UX</li>
            <li>Brand Identity</li>
            <li>Visual Language</li>
          </ul>
        </div>
      </div>

      <div class="accordion-item">
        <div class="accordion-header">
          <span>Communication</span>
          <span class="accordion-icon">+</span>
        </div>
        <div class="accordion-content">
          <p>We craft communication that connects brands with their audiences effectively.</p>
          <ul>
            <li>Marketing Campaigns</li>
            <li>Advertising</li>
            <li>Social Media</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

   </div>
</div>


<!-- end  -->

<!-- <section class="for-color container-fluid side-gap">
  <div class=" new-info">
   
    <div class="row row-cols-lg-5 row-cols-md-2 row-cols-2 mb-3 g-3">
      <div class="col">
        <img src="https://via.placeholder.com/150x100" class="grid-img" alt="">
      </div>
      <div class="col">
        <img src="https://via.placeholder.com/150x100" class="grid-img" alt="">
      </div>
      <div class="col">
        <img src="https://via.placeholder.com/150x100" class="grid-img" alt="">
      </div>
      <div class="col">
        <img src="https://via.placeholder.com/150x100" class="grid-img" alt="">
      </div>
      <div class="col">
        <img src="https://via.placeholder.com/150x100" class="grid-img" alt="">
      </div>
      <div class="col">
        <img src="https://via.placeholder.com/150x100" class="grid-img" alt="">
      </div>
      <div class="col">
        <img src="https://via.placeholder.com/150x100" class="grid-img" alt="">
      </div>
      <div class="col">
        <img src="https://via.placeholder.com/150x100" class="grid-img" alt="">
      </div>
      <div class="col">
        <img src="https://via.placeholder.com/150x100" class="grid-img" alt="">
      </div>
      <div class="col">
        <img src="https://via.placeholder.com/150x100" class="grid-img" alt="">
      </div>
    </div>
  </div>
</section> -->




<div class="section-value container-fluid side-gap">
  <div class="row">
    <!-- Left Column -->
    <div class="col-6 col-md-6">
      <h6>VALUE</h6>
    </div>

    <!-- Right Column -->
    <div class="col-6 col-md-6">
      <p>
        <strong>Zero Bullshit</strong>, Being Human,<br>
        Taking Work Seriously,<br>
        Trust The Process, Honesty Result,<br>
        Endless Passion<br>
        High Standards, Emotions,<br>
        Taking Risks
      </p>
    </div>
  </div>
</div>

<div class="container-fluid side-gap">
  <div class="big-image">
    <img src="assets/images/9-4-1536x864.jpg" alt="">
  </div>
  <hr class="border border-secondary opacity-75 mt-5">
</div>


<div class="container-fluid side-gap image-grid">
  <div class="d-flex  justify-content-between ">
    <div class="box-h2">
      <h2>PRODUCTS</h2>
    </div>
    <div class="box-h2">
      <h2>ALL</h2>
    </div>
  </div>
</div>
<div class="container-fluid side-gap image-grid">
  <div class="row g-4">
    <div class="col-md-4 col-lg-6">
      <div class="project-card selected-project">
        <img src="assets/image2/shop-img-1-1482x1536.jpg" class="project-image" alt="Project 1">
        <div class="overlay">Add to Cart</div>
        <div class="project-info">
          <h3 class="project-title">Sticker Set 25pcs</h3>
          <p class="project-category">$24.00</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-6">
      <div class="project-card">
        <img src="assets/image2/shop-img-2.jpg" class="project-image" alt="Project 3">
        <div class="overlay">Add to Cart</div>
        <div class="project-info">
          <h3 class="project-title">Shipping Pack</h3>
          <p class="project-category">$32.00</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid side-gap image-grid">
  <hr class="border border-secondary opacity-75 mt-4">
</div>


<div class="container-fluid side-gap image-grid">
  <div class="d-flex  justify-content-between  ">
    <div class="box-h2">
      <h2>ARTICAL</h2>
    </div>
    <div class="box-h2">
      <h2>ALL</h2>
    </div>
  </div>
</div>

<div class="container-fluid side-gap image-grid">
  <div class="row g-4">
    <div class="col-md-4 col-lg-6">
      <div class="project-card selected-project">
        <img src="assets/image2/a-1.jpg" class="project-image" alt="Project 1">
        <div class="project-info">
          <h3 class="project-title">I was born a very grumpy baby</h3>
          <a href="#">
            <p class="project-category">READ MORE</p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-6">
      <div class="project-card selected-project">
        <img src="assets/image2/a-2.jpg" class="project-image" alt="Project 1">
        <div class="project-info">
          <h3 class="project-title">I was born a very grumpy baby</h3>
          <a href="#">
            <p class="project-category">READ MORE</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>



<script>
  document.addEventListener("DOMContentLoaded", () => {

    gsap.from(".aboutme-text h2", {
      y: -50,
      opacity: 0,
      duration: 0.8,
      ease: "power3.out"
    });

    gsap.from(".aboutme-text h1", {
      y: -60,
      opacity: 0,
      duration: 1,
      delay: 0.2,
      ease: "power3.out"
    });

    gsap.from(".aboutme-text p", {
      y: -70,
      opacity: 0,
      duration: 3,
      delay: 0.9,
      ease: "power3.out"
    });

  });


//


document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".accordion-item");
  let activeIndex = 0;            // next item to close is items[activeIndex]
  let isAnimating = false;

  // tuning
  const THRESHOLD = 120;         // how much wheel/touch delta required to trigger one step
  const DURATION = 0.45;         // gsap duration in seconds (tweak for speed)
  const INACTIVITY_RESET = 200;  // ms to reset accumulator if no wheel events

  // keep all open on load
  items.forEach(i => i.classList.add("active"));

  function openItem(item, done) {
    item.classList.add("active");
    item.classList.remove("closed");
    gsap.to(item.querySelector(".accordion-content"), {
      maxHeight: 400,
      opacity: 1,
      y: 0,
      duration: DURATION,
      ease: "power2.out",
      onComplete: () => { if (done) done(); }
    });
  }

  function closeItem(item, done) {
    item.classList.remove("active");
    item.classList.add("closed");
    gsap.to(item.querySelector(".accordion-content"), {
      maxHeight: 0,
      opacity: 0,
      y: -10,
      duration: DURATION,
      ease: "power2.out",
      onComplete: () => { if (done) done(); }
    });
  }

  // --- Wheel handling with accumulation ---
  let wheelAccumulator = 0;
  let wheelTimer = null;

  function handleWheelDelta(deltaY) {
    // accumulate sign-aware
    wheelAccumulator += deltaY;

    // clear/reset timer that empties accumulator when user stops
    clearTimeout(wheelTimer);
    wheelTimer = setTimeout(() => {
      wheelAccumulator = 0;
    }, INACTIVITY_RESET);

    // If currently animating, ignore (won't queue)
    if (isAnimating) return;

    // Trigger when abs(accumulator) crosses threshold
    if (Math.abs(wheelAccumulator) >= THRESHOLD) {
      const directionDown = wheelAccumulator > 0; // true => user scrolled down
      wheelAccumulator = 0; // reset for next gesture

      if (directionDown) {
        // SCROLL DOWN => close one (if available)
        if (activeIndex < items.length) {
          isAnimating = true;
          closeItem(items[activeIndex], () => {
            activeIndex++;
            isAnimating = false;
          });
        }
      } else {
        // SCROLL UP => open one (if available)
        if (activeIndex > 0) {
          isAnimating = true;
          activeIndex--;
          openItem(items[activeIndex], () => {
            isAnimating = false;
          });
        }
      }
    }
  }

  // wheel event
  window.addEventListener("wheel", (e) => {
    // normalize some browsers: deltaMode 1 means lines, multiply to approximate pixels
    let delta = e.deltaY;
    if (e.deltaMode === 1) delta *= 16; // approx line -> px
    handleWheelDelta(delta);
  }, { passive: true });

  // --- Touch support for mobile (swipe up/down) ---
  let touchStartY = null;
  let touchAccumulator = 0;
  let touchTimer = null;

  window.addEventListener("touchstart", (e) => {
    if (e.touches && e.touches.length) {
      touchStartY = e.touches[0].clientY;
      touchAccumulator = 0;
      clearTimeout(touchTimer);
    }
  }, { passive: true });

  window.addEventListener("touchmove", (e) => {
    if (!touchStartY || isAnimating) return;
    const currentY = e.touches[0].clientY;
    const delta = touchStartY - currentY; // positive = swipe up (like wheel down)
    touchAccumulator += delta;
    touchStartY = currentY;

    clearTimeout(touchTimer);
    touchTimer = setTimeout(() => touchAccumulator = 0, INACTIVITY_RESET);

    if (Math.abs(touchAccumulator) >= THRESHOLD) {
      const directionDown = touchAccumulator > 0;
      touchAccumulator = 0;

      if (directionDown) {
        if (activeIndex < items.length) {
          isAnimating = true;
          closeItem(items[activeIndex], () => {
            activeIndex++;
            isAnimating = false;
          });
        }
      } else {
        if (activeIndex > 0) {
          isAnimating = true;
          activeIndex--;
          openItem(items[activeIndex], () => {
            isAnimating = false;
          });
        }
      }
    }
  }, { passive: true });

  window.addEventListener("touchend", () => {
    touchStartY = null;
    touchAccumulator = 0;
  });

  // Optional: keyboard support (arrow up/down / page up/down)
  window.addEventListener("keydown", (e) => {
    if (isAnimating) return;
    if (e.key === "ArrowDown" || e.key === "PageDown") {
      if (activeIndex < items.length) {
        isAnimating = true;
        closeItem(items[activeIndex], () => {
          activeIndex++;
          isAnimating = false;
        });
      }
    } else if (e.key === "ArrowUp" || e.key === "PageUp") {
      if (activeIndex > 0) {
        isAnimating = true;
        activeIndex--;
        openItem(items[activeIndex], () => {
          isAnimating = false;
        });
      }
    }
  });

});


</script>




<?php include 'include/footer.php'; ?>