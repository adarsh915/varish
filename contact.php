<?php include 'include/header.php'; ?>
<title>BigwayStudio - Contact</title>

<div class="container-fluid my-5 side-gap">
  <div class="row ">
    <div class="col">
      <h1 class=" font-size fw-bold">Contact Us</h1>
      <p class="text-black pt-2 pb-2">(Say hi to us)</p>
      <form>
        <!-- Name -->
        <div class="mb-4">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" placeholder="Name">
        </div>

        <!-- Last Name -->
        <div class="mb-4">
          <label class="form-label">Last Name</label>
          <input type="text" class="form-control" placeholder="Name">
        </div>

        <!-- Email -->
        <div class="mb-4">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Email">
        </div>

        <!-- Phone Number -->
        <div class="mb-4">
          <label class="form-label">Phone Number</label>
          <input type="tel" class="form-control" placeholder="+91">
        </div>

        <!-- Message -->
        <div class="mb-4">
          <label class="form-label">Message</label>
          <textarea class="form-control" rows="3" placeholder="Message"></textarea>
        </div>

        <!-- Submit Button -->


      </form>
    </div>
  </div>
  <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-dark form_btn">Send</button>
  </div>
</div>

<!-- Bootstrap JS -->
<?php include 'include/footer.php'; ?>