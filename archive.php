<style>
.img-box {
  overflow: hidden;
  margin-bottom: 20px;
  opacity: 0;               /* start hidden */
  transform: translateY(50px);
}

.img-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}



</style>


<?php include 'include/header.php'; ?>
<title>BigwayStudio - Archive</title>

<div class="vm-filter-links container-fluid side-gap mt-5">
<h1 class="head">Archive©11-24</h1>
</div>
<!-- <div class="container-fluid image-grid side-gap mt-5">
    <h1 class="">Archive©11-24</h1>
</div> -->
<div class="container-fluid image-grid side-gap">
  <div class="row">
    
    <!-- Column 1 -->
    <div class="col-md-4 d-flex flex-column">
      <div class="img-box h-large">
        <img src="assets/images/9-7-scaled.jpg" alt="">
      </div>
      <div class="img-box h-medium">
        <img src="assets/images/9-7-scaled.jpg" alt="">
      </div>
      <div class="img-box h-large">
        <img src="assets/images/9-7-scaled.jpg" alt="">
      </div>
       <div class="img-box h-medium">
        <img src="assets/images/9-7-scaled.jpg" alt="">
      </div>
    </div>

    <!-- Column 2 -->
    <div class="col-md-4 d-flex flex-column">
      <div class="img-box h-medium">
        <img src="assets/images/9-7-scaled.jpg" alt="">
      </div>
      <div class="img-box h-large">
        <img src="assets/images/9-7-scaled.jpg" alt="">
      </div>
      <div class="img-box h-medium">
        <img src="assets/images/9-7-scaled.jpg" alt="">
      </div>
       <div class="img-box h-large">
        <img src="assets/images/9-7-scaled.jpg" alt="">
      </div>
    </div>

    <!-- Column 3 -->
     <div class="col-md-4 d-flex flex-column">
      <div class="img-box h-large">
        <img src="assets/images/9-7-scaled.jpg" alt="">
      </div>
      <div class="img-box h-medium">
        <img src="assets/images/9-7-scaled.jpg" alt="">
      </div>
      <div class="img-box h-large">
        <img src="assets/images/9-7-scaled.jpg" alt="">
      </div>
       <div class="img-box h-medium">
        <img src="assets/images/9-7-scaled.jpg" alt="">
      </div>
    </div>

  </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollTrigger);

  // find the 3 columns (assumes exactly 3 columns with class .col-md-4)
  const cols = document.querySelectorAll(".col-md-4");
  const leftCol = cols[0];
  const midCol  = cols[1];
  const rightCol= cols[2];

  // guard: if any column missing, exit
  if (!leftCol || !midCol || !rightCol) {
    console.warn("Expected three .col-md-4 columns. Animation skipped.");
    return;
  }

  // get all .img-box nodes in each column (NodeList -> Array)
  const leftBoxes  = Array.from(leftCol.querySelectorAll(".img-box"));
  const midBoxes   = Array.from(midCol.querySelectorAll(".img-box"));
  const rightBoxes = Array.from(rightCol.querySelectorAll(".img-box"));

  // set initial state using GSAP (ensures every .img-box ready)
  gsap.set(".img-box", { opacity: 0, y: 50 });

  // compute maximum number of rows (index count)
  const maxRows = Math.max(leftBoxes.length, midBoxes.length, rightBoxes.length);

  for (let i = 0; i < maxRows; i++) {
    const left  = leftBoxes[i]  || null;
    const mid   = midBoxes[i]   || null;
    const right = rightBoxes[i] || null;

    // skip if nothing exists in the whole row
    if (!left && !mid && !right) continue;

    // choose a trigger element: prefer middle, then left, then right
    const triggerEl = mid || left || right;

    // create timeline for the row
    const tl = gsap.timeline({
  scrollTrigger: {
    trigger: triggerEl,
    start: "top 85%",
    onEnter: () => tl.restart(),        // full animation when scrolling down
    onEnterBack: () => tl.restart(),    // full animation when scrolling up
    // markers: true
  }
});

    // 1) Middle box animates first (if exists)
    if (mid) {
      tl.to(mid, {
        opacity: 1,
        y: 0,
        duration: 0.9,
        ease: "power3.out"
      });
    }

    // 2) Then left & right animate together (if they exist)
    // Use a small relative delay so they start after the middle animation finishes.
    // If there is no middle, they will start immediately because timeline is empty so far.
    const joinDelay = mid ? "+=0.06" : "+=0"; // tiny pause if middle existed

    const targets = [];
    if (left)  targets.push(left);
    if (right) targets.push(right);

    if (targets.length) {
      tl.to(targets, {
        opacity: 1,
        y: 0,
        duration: 0.9,
        ease: "power3.out",
        stagger: 0 // no stagger so left & right animate simultaneously
      }, joinDelay);
    }
  }

  // OPTIONAL: refresh ScrollTrigger on load/resize to be safe
  ScrollTrigger.refresh();
});
</script>




<?php include 'include/footer.php'; ?>