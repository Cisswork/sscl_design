<!-- Header Start -->
<?php include('header.php'); ?>
<!-- Header End -->

<!-- Sidebar Start -->
<?php include('sidebar.php'); ?>
<!-- Sidebar End -->

<style>
  /* Your existing styles for card, form-control, input-group-text, btn etc. */
  .card {
    border: none;
    border-radius: 15px;
    transition: transform 0.3s;
  }
  .card:hover {
    transform: translateY(-5px);
  }
  .card-header {
    border-radius: 15px 15px 0 0 !important;
    padding: 1.5rem;
  }
  .form-control {
    padding: 0.8rem 1.2rem;
    border-radius: 0 10px 10px 0;
    transition: all 0.3s;
  }
  .input-group-text {
    background-color: #f8f9fa;
    border-radius: 10px 0 0 10px;
    width: 45px;
    justify-content: center;
  }
  .form-control:focus {
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
    border-color: #0d6efd;
  }
  .btn {
    border-radius: 10px;
    padding: 12px 30px;
    font-weight: 600;
    transition: all 0.3s;
  }
  .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  .form-label {
    margin-bottom: 0.7rem;
    color: #344767;
  }
  .input-group:focus-within .input-group-text {
    border-color: #0d6efd;
  }
  @media (max-width: 768px) {
    .card-body {
      padding: 1.5rem;
    }
    .btn {
      width: 100%;
      margin: 0.5rem 0;
    }
  }
  .section-title {
    margin-top: 1.5rem;
    margin-bottom: 1rem;
    font-weight: 600;
    color: #344767;
  }
  .grid-2 {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
  }
</style>

<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h3 class="fw-bold mb-3">Credit Report Form</h3>
      <ul class="breadcrumbs mb-3">
        <li class="nav-home">
          <a href="index.php"><i class="icon-home"></i></a>
        </li>
        <li class="separator"><i class="icon-arrow-right"></i></li>
        <li class="nav-item">
          <a href="#">Credit Report</a>
        </li>
        <li class="separator"><i class="icon-arrow-right"></i></li>
        <li class="nav-item">
          <a href="#">Record Form</a>
        </li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="card shadow-lg">
          <div class="card-header text-white d-flex justify-content-between align-items-center">
            <h4 class="card-title mb-0" style="color: #000000;"><i class="fas fa-file-medical-alt me-2"></i>Credit Report Form</h4>
          </div>
          <div class="card-body p-4">
            <form>
                <!-- Specimen Info -->
                <div class="form-group">
                    <label for="drugs" class="form-label">Upload Credit Report</label>
                    <div class="input-group">
                        <input type="file" id="drugs" name="drugs" class="form-control" placeholder="Upload the image, pdf, excelfile">
                        <span class="input-group-text"><i class="fas fa-barcode"></i></span>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <button type="submit" class="btn btn-lg btn-primary px-5"> Submit </button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer Start -->
<?php include('footer.php'); ?>
<!-- Footer End -->
