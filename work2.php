<?php include 'include/header.php'; ?>
<title>BigwayStudio - Work</title>
<div class="container-fluid side-gap image-grid-2">
    <div class="video-div">
        <video class="animated-video" autoplay muted loop playsinline>
            <source src="assets/video/reel-short.mp4" type="video/mp4">
        </video>
    </div>
</div>
 <style>
    /* Unique CSS */
    .platypus-section {
      padding: 50px 20px;
    }
    .image-grid-2{
        margin-top: 55px;
    }
    .platypus-left h2 {
      font-size: 2.5rem;
      font-weight: 600;
      margin-bottom: 20px;
      font-family: "Inter", Sans-serif;
    }

    .platypus-services {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .platypus-services li {
      font-size: 0.8rem;
      font-weight: 500;
      color: black;
      letter-spacing: 1px;
      margin-bottom: 2px;
      text-transform: uppercase;
      cursor: pointer;
      transition: color 0.3s ease;
      font-family: "DM Mono", monospace;
    }

    .platypus-services li:hover {
      color: #ff5d15;
    }

    .platypus-right p {
      font-size: 1.2rem;
      line-height: 1.8;
      color: black;
      margin-bottom: 20px;
      font-family: "Inter", Sans-serif;
      font-weight: 400;
    }

    /* Responsive tweaks */
    @media (max-width: 768px) {
      .platypus-left {
        margin-bottom: 30px;
        text-align: center;
      }
      .platypus-left h2 {
        font-size: 20px;
      }
    }
  </style>
 <section class="image-grid container-fluid side-gap pb-3">
    <div class="row">
      <!-- Left Column -->
      <div class="col-md-4 platypus-left">
        <h2>Platypus</h2>
        <ul class="platypus-services">
          <li>Graphic Design</li>
          <li>Illustration</li>
          <li>Art Direction</li>
          <li>Creative Direction</li>
          <li>Marketing</li>
        </ul>
      </div>

      <!-- Right Column -->
      <div class="col-md-8 platypus-right">
        <p>
          Nunc varius dolor a lacus ultrices placerat. Vivamus ac aliquet mauris, non tristique eros. 
          Ut molestie odio eu ante fringilla condimentum. Sed eleifend bibendum sem quis sollicitudin. 
          Quisque tellus mi, maximus at eleifend ut, accumsan et sapien lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
        <p>
          Pretium quis massa eget dui odio sed et ut scelerisque nec vel ultric es est scelerisque pulvinar 
          non ante ac pellentesque in phasellusitae nunc tellus, enim placerat urna.
        </p>
      </div>
    </div>
  </section>
<div class="container-fluid side-gap image-grid">
    <div class="row g-4">

        <!-- Project Card 1 -->
        <div class="col-md-4 col-lg-6">
            <div class="project-card selected-project">
                <img src="assets/images/1-scaled.jpg" class="project-image" alt="Project 1">
                <div class="project-info">
                    <h3 class="project-title">Ranx</h3>
                    <p class="project-category">BRAND IDENTITY</p>
                </div>
            </div>
        </div>

        <!-- Project Card 3 -->
        <div class="col-md-4 col-lg-6">
            <div class="project-card">
                <img src="assets/images/1-2-1536x864.jpg" class="project-image" alt="Project 3">
                <div class="project-info">
                    <h3 class="project-title">Platypus</h3>
                    <p class="project-category">BRAND IDENTITY</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid side-gap">
    <div class="video-div">
        <video class="animated-video" autoplay muted loop playsinline>
            <source src="assets/video/reel-short.mp4" type="video/mp4">
        </video>
    </div>
</div>
<div class="container-fluid side-gap image-grid">
    <div class="row g-4">

        <!-- Project Card 1 -->
        <div class="col-md-4 col-lg-6">
            <div class="project-card selected-project">
                <img src="assets/images/1-scaled.jpg" class="project-image_2" alt="Project 1">
                <div class="project-info">
                    <h3 class="project-title">Ranx</h3>
                    <p class="project-category">BRAND IDENTITY</p>
                </div>
            </div>
        </div>

        <!-- Project Card 3 -->
        <div class="col-md-4 col-lg-6">
            <div class="project-card">
                <img src="assets/images/1-2-1536x864.jpg" class="project-image_2" alt="Project 3">
                <div class="project-info">
                    <h3 class="project-title">Platypus</h3>
                    <p class="project-category">BRAND IDENTITY</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid side-gap my-5">
   <div class="d-flex  justify-content-between  ">
        <div class="box-h2"><h2>ARTICAL</h2></div>
         <div class="box-h3"><h2>VIEW ALL WORK</h2></div>
        <div class="box-h2"><h2>ALL</h2></div>
      </div>
    <hr class="border border-secondary opacity-75 mt-4">
</div>
<?php include 'include/footer.php'; ?>