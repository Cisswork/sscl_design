<!-- Header Start -->
    <?php include('header.php'); ?>
<!-- Header End -->
  
<!-- Sidebar Start -->
    <?php include('sidebar.php'); ?>
<!-- Sidebar End -->

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Role</h3>
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
                  <a href="role.php">View Role</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Add Role</h4>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="row align-items-end g-3">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="form-group mb-0">
                            <label class="form-label">Add Role</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12"></div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <center><div class="form-group mb-0">
                            <button type="button" class="btn btn-secondary">Save</button>
                            <button type="reset" class="btn btn-danger">
                            <i class="fas fa-redo me-2"></i>Reset
                          </button></center>
                          </div>
                          
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12"></div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title"> View Role</h4>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table
                        id="add-row"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>Sr.No.</th>
                            <th>Role Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td>Software Developer</td>
                            <td>9854762210</td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td>Software Developer</td>
                            <td>9854762210</td>
                          </tr>
                        </tbody>
                      </table>
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
