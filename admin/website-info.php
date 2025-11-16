<style>
  body {
    background: #f4f6f9;
    font-family: "Poppins", sans-serif;
  }

  .admin-card {
    max-width: 90%;
    background: #fff;
    border-radius: 10px;
    padding: 35px;
    border: 1px solid #e5e7eb;
  }

  .admin-card h3 {
    font-weight: 600;
    font-size: 1.7rem;
    margin-bottom: 30px;
    border-bottom: 1px solid #e5e7eb;
    padding-bottom: 15px;
    color: #343a40;
  }

  .form-label {
    font-weight: 500;
    color: #495057;
    margin-bottom: 6px;
  }

  .form-control {
    padding: 12px;
    font-size: 1rem;
    border-radius: 8px;
    border: 1px solid #ced4da;
    box-shadow: none;
    background-color: #fff;
  }

  .form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.15rem rgba(13, 110, 253, 0.15);
  }

  .preview-box {
    display: inline-block;
    border: 1px solid #dee2e6;
    background: #f8f9fa;
    padding: 12px;
    border-radius: 8px;
    margin-bottom: 10px;
  }

  .preview-box img {
    max-width: 150px;
    height: auto;
    display: block;
  }

  .input-group {
    margin-bottom: 20px;
  }

  .input-group-text {
    background: #f1f3f5;
    border: 1px solid #ced4da;
    font-size: 1.2rem;
    color: #0d6efd;
    width: 55px;
    justify-content: center;
  }

  .btn-submit {
    background: #0d6efd;
    color: #fff;
    font-weight: 600;
    padding: 12px 25px;
    border-radius: 8px;
    border: none;
    transition: all 0.2s ease;
  }

  .btn-submit:hover {
    background: #0b5ed7;
  }

  .btn-cancel {
    background: #6c757d;
    color: #fff;
    font-weight: 600;
    padding: 12px 25px;
    border-radius: 8px;
    border: none;
    margin-left: 10px;
  }

  .btn-cancel:hover {
    background: #5a6268;
  }

  .section-title {
    font-weight: 600;
    font-size: 1.1rem;
    color: #495057;
    margin-top: 25px;
    margin-bottom: 15px;
  }
</style>

<?php
include 'include/header.php';
include 'db.php';

// Fetch the latest social media record
$result = $conn->query("SELECT * FROM social_media ORDER BY id DESC LIMIT 1");
$social = $result->fetch_assoc();

// Handle form submission
if (isset($_POST['submit'])) {

  // Logo image upload
  if (!empty($_FILES['logo_image']['name'])) {
    $logo_image = $_FILES['logo_image']['name'];
    $logo_tmp = $_FILES['logo_image']['tmp_name'];
    $logo_path = "uploads/" . $logo_image;
    move_uploaded_file($logo_tmp, $logo_path);
  } else {
    $logo_path = $social['logo_image'] ?? ''; // Keep old if not uploaded
  }

  // SVG upload
  if (!empty($_FILES['svg_img']['name'])) {
    $svg_img = $_FILES['svg_img']['name'];
    $svg_tmp = $_FILES['svg_img']['tmp_name'];
    $svg_path = "uploads/" . $svg_img;
    move_uploaded_file($svg_tmp, $svg_path);
  } else {
    $svg_path = $social['svg_img'] ?? ''; // Keep old if not uploaded
  }

  // Social links
  $instagram_link = $_POST['instagram_link'];
  $youtube_link = $_POST['youtube_link'];
  $linkedin_link = $_POST['linkedin_link'];

  // ✅ Always keep only 1 row
  // If no record exists, insert new. If exists, update ID=1 (or the latest)
  if ($social) {
    $stmt = $conn->prepare("UPDATE social_media SET logo_image=?, svg_img=?, instagram_link=?, youtube_link=?, linkedin_link=? WHERE id=?");
    $stmt->bind_param("sssssi", $logo_path, $svg_path, $instagram_link, $youtube_link, $linkedin_link, $social['id']);
  } else {
    // First, delete any accidental duplicates
    $conn->query("DELETE FROM social_media");
    // Then insert a single row
    $stmt = $conn->prepare("INSERT INTO social_media (logo_image, svg_img, instagram_link, youtube_link, linkedin_link) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $logo_path, $svg_path, $instagram_link, $youtube_link, $linkedin_link);
  }

  if ($stmt->execute()) {
    echo "<p style='color:green;'>✅ Data saved successfully!</p>";
  } else {
    echo "<p style='color:red;'>❌ Error: " . $stmt->error . "</p>";
  }

  // Refresh the $social variable after save
  $result = $conn->query("SELECT * FROM social_media ORDER BY id DESC LIMIT 1");
  $social = $result->fetch_assoc();
}

?>

<div class="admin-card">
  <h3>Upload Logo & Social Links</h3>
  <form method="POST" enctype="multipart/form-data">

    <!-- Logo Upload -->
    <div class="section-title"><i class="fa-solid fa-image me-2"></i> Logo Upload</div>
    <div class="mb-3">
      <label class="form-label">Current Logo Image</label><br>
      <div class="preview-box">
        <?php if (!empty($social['logo_image'])): ?>
          <img src="<?php echo $social['logo_image']; ?>" alt="Logo Preview">
        <?php else: ?>
          <span class="text-muted">No logo uploaded yet.</span>
        <?php endif; ?>
      </div>
      <input type="file" name="logo_image" class="form-control mt-2">
    </div>

    <div class="mb-3">
      <label class="form-label">Current SVG Image</label><br>
      <div class="preview-box">
        <?php if (!empty($social['svg_img'])): ?>
          <img src="<?php echo $social['svg_img']; ?>" alt="SVG Preview">
        <?php else: ?>
          <span class="text-muted">No SVG uploaded yet.</span>
        <?php endif; ?>
      </div>
      <input type="file" name="svg_img" class="form-control mt-2">
    </div>

    <!-- Social Media Links -->
    <div class="section-title"><i class="fa-solid fa-share-nodes me-2"></i> Social Media Links</div>

    <div class="input-group">
      <span class="input-group-text"><i class="fa-brands fa-instagram"></i></span>
      <input type="url" name="instagram_link" class="form-control"
        value="<?php echo isset($social['instagram_link']) ? $social['instagram_link'] : ''; ?>"
        placeholder="https://instagram.com/yourpage">
    </div>

    <div class="input-group">
      <span class="input-group-text"><i class="fa-brands fa-youtube"></i></span>
      <input type="url" name="youtube_link" class="form-control"
        value="<?php echo isset($social['youtube_link']) ? $social['youtube_link'] : ''; ?>"
        placeholder="https://youtube.com/yourchannel">
    </div>

    <div class="input-group">
      <span class="input-group-text"><i class="fa-brands fa-linkedin"></i></span>
      <input type="url" name="linkedin_link" class="form-control"
        value="<?php echo isset($social['linkedin_link']) ? $social['linkedin_link'] : ''; ?>"
        placeholder="https://linkedin.com/in/yourprofile">
    </div>

    <div class="mt-4">
      <button type="submit" name="submit" class="btn-submit"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Save</button>
    </div>
  </form>
</div>
<?php include 'include/footer.php'; ?>