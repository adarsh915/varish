<?php
include 'db.php';
$result = $conn->query("SELECT * FROM social_media ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS (Latest CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- animation link AD -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollSmoother.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

  <!--  -->
  <!-- Custom CSS -->
 
</head>
<body>
 <!-- nav start -->
  <nav class="unique-navbar container-fluid side-gap pt-4">
  <?php while ($row = $result->fetch_assoc()) { ?>
    <a href="index.php" class="unique-logo">
<img src="./admin/<?php echo $row['logo_image']; ?>" width="50" alt="Logo">



    </a>
  <?php } ?>

  <ul class="unique-nav-links">
    <!-- <li><a href="index.php">Home</a></li> -->
    <li><a href="work.php">Work</a></li>
    <li><a href="about.php">Info</a></li>
    <li><a href="archive.php">Archive</a></li>
    <li><a href="store.php">Shop</a></li>
    <li><a href="artical.php">Articles</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>

  <button class="unique-menu-btn" id="menuBtn" style="padding: 0;">&#9776;</button>
</nav>

<div class="unique-sidebar" id="sidebar">
<button class="unique-close-btn" id="closeBtn">&times;</button>
<ul class="unique-nav-side">
<!-- <li><a href="index.php" class="active">Home</a></li> -->
<li><a href="work.php" class="">Work</a></li>
<li><a href="about.php" class="active">Info</a></li>
<li><a href="archive.php" class="">Archive</a></li>
<li><a href="store.php" class="">Shop</a></li>
<li><a href="artical.php" class="">Articles</a></li>
<li><a href="contact.php" class="">Contact</a></li>
</ul>
</div>
  <!-- nav end -->

   <!-- Preloader -->
  <div class="preloader" id="preloader">
    <img src="varish-preloader.svg" alt="Loading...">
  </div>
