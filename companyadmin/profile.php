<!-- Header Start -->
    <?php include('header.php'); ?>
<!-- Header End -->
  
<!-- Sidebar Start -->
    <?php include('sidebar.php'); ?>
<!-- Sidebar End -->

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Profile</h3>
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
                  <a href="profile.php">Admin Profile</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="card card-profile">
                  <div class="card-header" style="background-image: url('assets/img/blogpost.jpg')">
                    <div class="profile-picture">
                      <div class="avatar avatar-xl">
                        <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle border-white">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="user-profile text-center">
                      <div class="name h3">Admin</div>
                      <div class="job text-muted mb-2">Administrator</div>
                      <div class="desc mb-4">A passionate admin with management experience.</div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" href="#edit-profile" data-bs-toggle="tab">Profile Details</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#change-password" data-bs-toggle="tab">Change Password</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#multifact" data-bs-toggle="tab">MFA (Multi Factor Authentication)</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <!-- Edit Profile Tab -->
                      <div class="tab-pane active" id="edit-profile">
                        <form>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" value="John">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" value="Doe">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" value="john@example.com">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Phone</label>
                                <input type="tel" class="form-control" placeholder="Phone" value="+1234567890">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" placeholder="Your Address">123 Street, City, Country</textarea>
                              </div>
                            </div>
                          </div>
                          <div class="text-end mt-3">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                          </div>
                        </form>
                      </div>

                      <!-- Change Password Tab -->
                      <div class="tab-pane" id="change-password">
                        <form>
                          <div class="form-group position-relative">
                            <label>Current Password</label>
                            <input type="password" class="form-control" id="currentPassword" placeholder="Enter current password">
                            <span toggle="#currentPassword" class="fa fa-fw fa-eye toggle-password"
                              style="position: absolute; top: 50px;right: 30px; cursor: pointer;"></span>
                          </div>

                          <div class="form-group mt-3 position-relative">
                            <label>New Password</label>
                            <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
                            <span toggle="#newPassword" class="fa fa-fw fa-eye toggle-password"
                              style="position: absolute; top: 50px;right: 30px; cursor: pointer;"></span>
                          </div>

                          <div class="form-group mt-3 position-relative">
                            <label>Confirm New Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
                            <span toggle="#confirmPassword" class="fa fa-fw fa-eye toggle-password"
                              style="position: absolute; top: 50px;right: 30px; cursor: pointer;"></span>
                          </div>

                          <div class="text-end mt-3">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                          </div>
                        </form>

                      </div>

                       <!-- MFA Tab -->
                      <div class="tab-pane" id="multifact">
                        <div class="row">
                          <div class="col-md-6">
                            Pending
                          </div>  
                          <div class="col-md-6">
                            Complete
                          </div>  
                        </div>
                      </div>
                    </div>
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
  document.querySelectorAll(".toggle-password").forEach(function (icon) {
    icon.addEventListener("click", function () {
      const input = document.querySelector(this.getAttribute("toggle"));
      const type = input.getAttribute("type") === "password" ? "text" : "password";
      input.setAttribute("type", type);
      this.classList.toggle("fa-eye");
      this.classList.toggle("fa-eye-slash");
    });
  });
</script>
