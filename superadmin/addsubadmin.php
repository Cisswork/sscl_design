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
                  <a href="addsubadmin.php">Subadmin Management</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="addsubadmin.php">Add Client</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card shadow-lg">
                  <div class="card-header text-white d-flex justify-content-between align-items-center">
                    <div>
                      <h4 class="btn btn-light" style="background-color: #f5f7fd !important;">
                        <i class="fas fa-user-plus me-2"></i>Add Subadmin
                      </h4>
                    </div>
                    <div>
                      <a href="viewsubadmin.php" class="btn btn-light" style="background-color: #f5f7fd !important;">
                        <i class="fas fa-users me-2"></i>View Subadmin
                      </a>
                    </div>
                  </div>
                  <div class="card-body p-4">
                    <form>
                      <div class="row g-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="roleSelect" class="form-label fw-bold">Select Role</label>
                                <div class="input-group">
                                <select class="form-control" id="roleSelect">
                                    <option value="" disabled selected>Select Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="subadmin">Subadmin</option>
                                    <option value="editor">Editor</option>
                                    <option value="viewer">Viewer</option>
                                </select>
                                <span class="input-group-text"><i class="fas fa-user-shield"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="lastName" class="form-label fw-bold">Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="lastName" placeholder="Contact Person">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
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
                            <label for="profileImage" class="form-label fw-bold">Profile Image</label>
                            <div class="input-group">
                              <input type="file" class="form-control" id="profileImage" accept="image/*">
                              <span class="input-group-text"><i class="fas fa-image"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address" class="form-label fw-bold">Address</label>
                                <div class="input-group">
                                <textarea class="form-control" id="address" rows="3" placeholder="Enter address"></textarea>
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="card card-row card-bookkaro">
                        <div class="card-header">
                            <h3 class="card-title">Permission</h3><br>
                            <input type="checkbox" id="checkall"> <label for="checkall">Select All</label>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="card card-outline">
                                        <div class="card-header">
                                            <h5 class="card-title">Dashboard</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input permission-checkbox" type="checkbox" id="customCheckbox1" name="dashboard[]" value="dashboard">
                                                <label for="customCheckbox1" class="custom-control-label">Dashboard</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card card-outline">
                                        <div class="card-header">
                                            <h5 class="card-title">Client Management</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input permission-checkbox" type="checkbox" id="customCheckbox2" name="adduser[]" value="adduser">
                                                <label for="customCheckbox2" class="custom-control-label">Add Client</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input permission-checkbox" type="checkbox" id="customCheckbox3" name="viewuser[]" value="viewuser">
                                                <label for="customCheckbox3" class="custom-control-label">View Client</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card card-outline">
                                        <div class="card-header">
                                            <h5 class="card-title">Candidate Management</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input permission-checkbox" type="checkbox" id="customCheckbox4" name="addprovider[]" value="addprovider">
                                                <label for="customCheckbox4" class="custom-control-label">Add Candidate</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input permission-checkbox" type="checkbox" id="customCheckbox5" name="viewprovider[]" value="viewprovider">
                                                <label for="customCheckbox5" class="custom-control-label">View Candidate</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card card-outline">
                                        <div class="card-header">
                                            <h5 class="card-title">Role Management</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input permission-checkbox" type="checkbox" id="customCheckbox1" name="dashboard[]" value="dashboard">
                                                <label for="customCheckbox1" class="custom-control-label">Role Management</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card card-outline">
                                        <div class="card-header">
                                            <h5 class="card-title">Report</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input permission-checkbox" type="checkbox" id="customCheckbox1" name="dashboard[]" value="dashboard">
                                                <label for="customCheckbox1" class="custom-control-label">Report</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card card-outline">
                                        <div class="card-header">
                                            <h5 class="card-title">Screenings</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input permission-checkbox" type="checkbox" id="customCheckbox1" name="dashboard[]" value="dashboard">
                                                <label for="customCheckbox1" class="custom-control-label">Screenings</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card card-outline">
                                        <div class="card-header">
                                            <h5 class="card-title">Terms & Conditions</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input permission-checkbox" type="checkbox" id="customCheckbox1" name="dashboard[]" value="dashboard">
                                                <label for="customCheckbox1" class="custom-control-label">Terms & Conditions</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card card-outline">
                                        <div class="card-header">
                                            <h5 class="card-title">Privacy Policy</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input permission-checkbox" type="checkbox" id="customCheckbox1" name="dashboard[]" value="dashboard">
                                                <label for="customCheckbox1" class="custom-control-label">Privacy Policy</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                      <div class="mt-5 text-center">
                        <button type="submit" class="btn btn-lg px-5 custom-signin-btn">
                          Submit
                        </button>
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
    // JavaScript to handle "Select All" checkbox functionality
    document.getElementById('checkall').addEventListener('change', function () {
        const checkboxes = document.querySelectorAll('.permission-checkbox');
        checkboxes.forEach(checkbox => checkbox.checked = this.checked);
    });
</script>