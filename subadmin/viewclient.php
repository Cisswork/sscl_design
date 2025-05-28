<!-- Header Start -->
    <?php include('header.php'); ?>
<!-- Header End -->
  
<!-- Sidebar Start -->
    <?php include('sidebar.php'); ?>
<!-- Sidebar End -->

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
                  <a href="addclient.php">Add Client</a>
                </li>
              </ul>
            </div>
            <div class="row">
             

              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title"> View Client</h4>
                      <a href="addclient.php" class="btn btn-primary btn-round ms-auto" style="border-color: #f5f7fd !important; color: #fff; font-weight: bold;">
                        <i class="fa fa-plus"></i>
                        Add Client
                      </a>
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
                            <th>Client Name</th>
                            <th>Contact Person</th>
                            <th>Email</th>
                            <th>DOB</th> 
                            <th>Mobile Number</th>
                            <th>Profile Image</th>
                            <th style="width: 10%">Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Sr.No.</th>
                            <th>Client Name</th>
                            <th>Contact Person</th>
                            <th>Email</th>
                            <th>DOB</th> 
                            <th>Mobile Number</th>
                            <th>Profile Image</th>
                            <th style="width: 10%">Action</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>john.doe@example.com</td>
                            <td>2025-05-06</td>
                            <td>7523802493</td>
                            <td><img src="assets/img/profile.jpg"></td>
                            <td>
                              <div class="form-button-action">
                                <a
                                  href="editclient.php"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-primary btn-lg"
                                  data-original-title="Edit Task"
                                >
                                  <i class="fa fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-link btn-danger delete-btn" title="Remove">
                                  <i class="fa fa-times"></i>
                                </button>

                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>john.doe@example.com</td>
                            <td>2025-05-06</td>
                            <td>7523802493</td>
                            <td><img src="assets/img/profile.jpg"></td>
                            <td>
                              <div class="form-button-action">
                                <a
                                  href="editclient.php"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-primary btn-lg"
                                  data-original-title="Edit Task"
                                >
                                  <i class="fa fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-link btn-danger delete-btn" title="Remove">
                                  <i class="fa fa-times"></i>
                                </button>

                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>john.doe@example.com</td>
                            <td>2025-05-06</td>
                            <td>7523802493</td>
                            <td><img src="assets/img/profile.jpg"></td>
                            <td>
                              <div class="form-button-action">
                                <a
                                  href="editclient.php"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-primary btn-lg"
                                  data-original-title="Edit Task"
                                >
                                  <i class="fa fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-link btn-danger delete-btn" title="Remove">
                                  <i class="fa fa-times"></i>
                                </button>

                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>4.</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>john.doe@example.com</td>
                            <td>2025-05-06</td>
                            <td>7523802493</td>
                            <td><img src="assets/img/profile.jpg"></td>
                            <td>
                              <div class="form-button-action">
                                <a
                                  href="editclient.php"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-primary btn-lg"
                                  data-original-title="Edit Task"
                                >
                                  <i class="fa fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-link btn-danger delete-btn" title="Remove">
                                  <i class="fa fa-times"></i>
                                </button>

                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>5.</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>john.doe@example.com</td>
                            <td>2025-05-06</td>
                            <td>7523802493</td>
                            <td><img src="assets/img/profile.jpg"></td>
                            <td>
                              <div class="form-button-action">
                                <a
                                  href="editclient.php"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-primary btn-lg"
                                  data-original-title="Edit Task"
                                >
                                  <i class="fa fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-link btn-danger delete-btn" title="Remove">
                                  <i class="fa fa-times"></i>
                                </button>

                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>6.</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>john.doe@example.com</td>
                            <td>2025-05-06</td>
                            <td>7523802493</td>
                            <td><img src="assets/img/profile.jpg"></td>
                            <td>
                              <div class="form-button-action">
                                <a
                                  href="editclient.php"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-primary btn-lg"
                                  data-original-title="Edit Task"
                                >
                                  <i class="fa fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-link btn-danger delete-btn" title="Remove">
                                  <i class="fa fa-times"></i>
                                </button>

                              </div>
                            </td>
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

    <script>
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-btn").forEach(function (btn) {
      btn.addEventListener("click", function () {
        Swal.fire({
          title: "Are you sure?",
          text: "Do you really want to delete this record?",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#d33",
          cancelButtonColor: "#3085d6",
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel"
        }).then((result) => {
          if (result.isConfirmed) {
            // ✅ Do the deletion logic here (e.g., AJAX, remove row, etc.)
            Swal.fire("Deleted!", "The record has been deleted.", "success");
          } else if (result.dismiss === Swal.DismissReason.cancel) {
            // ❌ Cancelled
            Swal.fire("Cancelled", "The record is safe.", "info");
          }
        });
      });
    });
  });
</script>

  </body>
</html>
