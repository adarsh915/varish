<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<?php
include 'include/header.php';

?>

    <div class="row g-3 mb-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
       
    <a href="logout.php" 
       style="background:#02457A; padding:10px 18px; color:white; text-decoration:none; border-radius:5px; font-weight:bold;">
       Logout
    </a>
</div>


<?php 
include 'include/footer.php'
?>
