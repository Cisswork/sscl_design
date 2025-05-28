<!-- Header Start -->
    <?php include('header.php'); ?>
<!-- Header End -->
  
<!-- Sidebar Start -->
    <?php include('sidebar.php'); ?>
<!-- Sidebar End -->

<style>
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
  .custom-signin-btn {
        background-color: #eaecf2 !important;
    color: #000 !important;
    border: none;
  }

  .custom-signin-btn:hover {
    background-color: #0056b3; /* Darker blue on hover */
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
</style>

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3"></h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="index.php">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="addclient.php">Client Management</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="addclient.php">Edit Client</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card shadow-lg">
                  <div class="card-header text-white d-flex justify-content-between align-items-center">
                    <div>
                      <h4 class="card-title mb-0" style="color: #000;">
                        <i class="fas fa-user-plus me-2"></i>Edit Client
                      </h4>
                    </div>
                    <div>
                      <a href="viewclient.php" class="btn btn-light" style="background-color: #f5f7fd !important;">
                        <i class="fas fa-users me-2"></i>View Client
                      </a>
                    </div>
                  </div>
                  <div class="card-body p-4">
                    <form>
                       <div class="row g-4">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="firstName" class="form-label fw-bold">Client Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="firstName" placeholder="Client Name">
                              <span class="input-group-text"><i class="fas fa-building"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="lastName" class="form-label fw-bold">Contact Person</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="lastName" placeholder="Contact Person">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="trn" class="form-label fw-bold">TRN Number</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="trn" name="trn" placeholder="Enter TRN Number">
                              <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <div class="input-group">
                              <input type="email" class="form-control" id="email" placeholder="Enter email">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label fw-bold">Password</label>
                            <div class="input-group">
                              <input type="password" id="password" class="form-control" placeholder="Enter password">
                              <span class="input-group-text"><span
                                toggle="#password"
                                class="fa fa-fw fa-eye field-icon toggle-password"
                                style="position: absolute;top: 50%;right: 15px; transform: translateY(-50%); cursor: pointer;"
                              ></span></span>
                            </div>

                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="mobile" class="form-label fw-bold">Mobile Number</label>
                            <div class="input-group">
                              <input type="tel" class="form-control" id="mobile" placeholder="Enter mobile number">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="profileImage" class="form-label fw-bold">Profile/Logo image</label>
                            <div class="input-group">
                              <input type="file" class="form-control" id="profileImage" accept="image/*">
                              <span class="input-group-text"><i class="fas fa-image"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="website" class="form-label fw-bold">Website</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="website" name="website" placeholder="Enter Website URL">
                              <span class="input-group-text"><i class="fas fa-globe"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="company-address" class="form-label fw-bold">Company Address</label>
                            <div class="input-group">
                              <textarea class="form-control" id="company-address" name="company_address" placeholder="Enter Company Address" rows="4"></textarea>
                              <span class="input-group-text"><i class="fas fa-building"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="">
                        <button type="submit" class="btn btn-primary btn-login" style="width: 18%;">Update</button>
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
        
<script>
  document.querySelector(".toggle-password").addEventListener("click", function () {
    const passwordInput = document.getElementById("password");
    const icon = this;
    const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
    icon.classList.toggle("fa-eye");
    icon.classList.toggle("fa-eye-slash");
  });
</script>