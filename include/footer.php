<?php
include 'db.php';
$result = $conn->query("SELECT * FROM social_media ORDER BY id DESC LIMIT 1");
$social = $result->fetch_assoc();
?>

<!-- footer start -->
<footer>
  <div class="custom-footer container-fluid side-gap">
    <div class="container" style="display:flex;justify-content:center;">
      <button class="talk">Let's Talk</button>
      <!-- <h2>Let's Talk</h2> -->
    </div>
    
    <div class="newsletter-box container-fluid">
      <!-- <div class="row"> -->
        <!-- Newsletter -->
        
        
        <!-- Footer Links -->
        <!-- <div class="col-md-8 col-sm-12 footer-links" style="padding: 0;"> -->
          <div class="row footer-links">
            <div class="col-lg-6 col-12 footer-col spam" style="padding:0">
              <ul class="spam_row">
                <li><h6 style="padding-top:5px">SIGN UP FOR OUR NEWSLETTER</h6>
                 <p>(No Spam)</p></li>
                <li> 
                  <div class="d-flex align-items-center" style="border-bottom: 1px solid black;">
                    <input type="email" class="form-control newsletter-input" placeholder="Email" style="padding: 4px 0px;border:none !important;">
                    <button class="newsletter-btn">→</button>
                  </div>
              </li>
              </ul> 
            </div>
            <div class="col-lg-2 col-4 footer-col">
              <ul>
                <li><a href="#">WORK</a></li>
                <li><a href="#">ARCHIVE</a></li>
                <li><a href="#">ABOUT</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-4 footer-col">
              <ul>
                <li><a href="#">STORE</a></li>
                <li><a href="#">ARTICLES</a></li>
                <li><a href="#">CONTACT</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-4 footer-col">
              <ul>
                <li><a href="<?php echo $social['instagram_link']; ?>" target="_blank">INSTAGRAM</a></li>
                <li><a href="<?php echo $social['youtube_link']; ?>" target="_blank">YOUTUBE</a></li>
                <li><a href="<?php echo $social['linkedin_link']; ?>" target="_blank">LINKEDIN</a></li>
              </ul>
            </div>
          </div>
        </div>

      <!-- </div> -->
    </div>
    </div>
  <div class="text-box container-fluid side-gap">
      <?php if(!empty($social['svg_img'])): ?>
          <img src="./admin/<?php echo $social['svg_img']; ?>" width="100%">
      <?php else: ?>
          <!-- <img src="./assets/images/varish_text.svg" width="100%"> -->
      <?php endif; ?>
  </div>
  <div class="custom-footer-section container-fluid side-gap">
      <div class="custom-footer-container">
        <div class="custom-footer-left">
          VARRIS MANSURI ©2025
        </div>
        <div class="custom-footer-right">
          <a href="#">PUNE‑INDIA</a>
        </div>
      </div>
    </div>
</footer>

</body>
<!-- footer end -->
  <!-- Bootstrap Bundle with Popper (Latest JS CDN) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

   <script src="assets/js/style.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
   <!-- <script src="assets/js/new.js" > -->
<script>
gsap.registerPlugin(ScrollTrigger);

// Wait until everything (including images) is loaded
window.addEventListener('load', () => {
  const el = document.querySelector('.animated-video');
  if (!el) {
    console.warn('No .animated-video element found');
    return;
  }

  // Ensure it's visible and has no leftover transform/opacity inline styles
  gsap.set(el, { clearProps: 'transform,opacity' });

  // Create scroll-triggered animation.
  // immediateRender: false prevents GSAP from applying the "from" state on creation.
  gsap.from(el, {
    scaleX: 0.8,
    scaleY: 0.8,
    y: 300,
    opacity: 0.2,
    duration: 1.5,
    ease: 'power3.out',
    immediateRender: false, // <- important
    scrollTrigger: {
      trigger: el,
      start: 'top 80%',
      toggleActions: 'play none none none',
      // toggleActions: 'play reverse play reverse',

      // markers: true // enable for debugging
    }
  });
});
</script>
    <script>
    // Keep preloader for 3.5 seconds, then hide
    window.addEventListener("load", function() {
      setTimeout(function() {
        document.getElementById("preloader").classList.add("hide");
      }, 2500); // 3.5 seconds
    });
  </script>
</html>