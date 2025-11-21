<?php
include 'db.php';
$result = $conn->query("SELECT * FROM social_media ORDER BY id DESC LIMIT 1");
$social = $result->fetch_assoc();
?>

<!-- footer start -->
<footer>
  <div class="custom-footer container-fluid side-gap">
    <div class="container" style="display:flex;justify-content:center;">
    <button class="talk-btn" >
      <span class="label text-a">Let's Talk</span>
      <span class="label text-b">Let's Talk</span>
    </button>
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
          <img src="./admin/<?php echo $social['svg_img']; ?>" class="scroll-image" width="100%" style="display: block;">
           <div class="shine-overlay"></div>
      <?php else: ?>
          <!-- <img src="./assets/images/varish_text.svg" width="100%"> -->
      <?php endif; ?>
    </div>
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

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script> -->


</body>
<!-- footer end -->
  <!-- Bootstrap Bundle with Popper (Latest JS CDN) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

   <script src="assets/js/style.js"></script>
  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
   <!-- <script src="assets/js/new.js" > -->
<script>

  

</script>
    <script>
    // Keep preloader for 3.5 seconds, then hide
    window.addEventListener("load", function() {
      setTimeout(function() {
        document.getElementById("preloader").classList.add("hide");
      }, 2500); // 3.5 seconds
    });
  </script>

  

<!-- GSAP -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script> -->

<script>
window.onload = function() {

    // Test GSAP loading
    console.log("GSAP Loaded:", typeof gsap);

    gsap.from(".unique-navbar", {
        y: -100,
        opacity: 0,
        duration: 1.1,
        ease: "power4.out"
        
    });

    gsap.from(".unique-nav-links li", {
        y: -20,
        opacity: 0,
        duration: 0.8,
        stagger: 0.15,
        ease: "power2.out",
        delay: 3
    });

    gsap.from(".unique-logo img", {
        y: -20,
        opacity: 0,
        duration: 0.7,
        ease: "power2.out",
        delay: 3
    });

};
</script>
</html>