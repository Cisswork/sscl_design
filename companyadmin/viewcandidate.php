<!-- Header Start -->
    <?php include('header.php'); ?>
<!-- Header End -->
  
<!-- Sidebar Start -->
    <?php include('sidebar.php'); ?>
<!-- Sidebar End -->

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Candidate</h3>
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
                  <a href="viewcandidate.php"> Candidate Management</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="viewcandidate.php">View Candidate</a>
                </li>
              </ul>
            </div>
            <div class="row">
            
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title"> View Candidate</h4>
                      <a href="addcandidate.php" class="btn btn-primary btn-round ms-auto" style="border-color: #f5f7fd !important; color: #fff; font-weight: bold;">
                        <i class="fa fa-plus"></i>
                        Add Candidate
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
                            <th>Sr. No.</th>
                            <th>Full&nbsp;name</th>
                            <th>Email</th>
                            <th>TRN Number</th>
                            <th>Age</th>
                            <th>Phone Number</th>
                            <th>Current Address</th>
                            <th>Parmanent Address</th>
                            <th>Employee Name</th>
                            <th>Job Title</th>
                            <th>Date of Employment</th>
                            <th>School/University Name</th>
                            <th>Degree Certificate</th>
                            <th>Year</th>
                            <th>Resume</th>
                            <th>Government-issued ID</th>
                            <th>Academic/ Professional Certifications</th>
                            <th>Kin Name</th>
                            <th>Kin Relation</th>
                            <th>Kin Tel. Number</th>
                            <th style="width: 10%">Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Sr. No.</th>
            
                            <th>Full&nbsp;name</th>
                            <th>Email</th>
                            <th>TRN Number</th>
                            <th>Age</th>
                            <th>Phone Number</th>
                            <th>Current Address</th>
                            <th>Parmanent Address</th>
                            <th>Employee Name</th>
                            <th>Job Title</th>
                            <th>Date of Employment</th>
                            <th>School/University Name</th>
                            <th>Degree Certificate</th>
                            <th>Year</th>
                            <th>Resume</th>
                            <th>Government-issued ID</th>
                            <th>Academic/ Professional Certifications</th>
                            <th>Kin Name</th>
                            <th>Kin Relation</th>
                            <th>Kin Tel. Number</th>
                            <th style="width: 10%">Action</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>1.</td>
                        
                            <td><span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span></td>
                            <td>john.doe@example.com</td>
                            <td>TRN132435</td>
                            <td>25</td>
                            <td>752381149</td>
                            <td>Bhopal</td>
                            <td>Jabalpur</td>
                            <td>Rajesh</td>
                            <td>Marketing</td>
                            <td>2025-05-01</td>
                            <td>DAVV University Bopal</td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td>3 Years</td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td>Abc</td>
                            <td>Brother</td>
                            <td>9854762210</td>
                            <td>
                              <div class="form-button-action">
                                <a
                                  href="editcandidate.php"
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
                        
                            <td><span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span></td>
                            <td>john.doe@example.com</td>
                            <td>TRN132435</td>
                            <td>25</td>
                            <td>752381149</td>
                            <td>Bhopal</td>
                            <td>Jabalpur</td>
                            <td>Rajesh</td>
                            <td>Marketing</td>
                            <td>2025-05-01</td>
                            <td>DAVV University Bopal</td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td>3 Years</td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td>Abc</td>
                            <td>Brother</td>
                            <td>9854762210</td>
                            <td>
                              <div class="form-button-action">
                                <a
                                  href="editcandidate.php"
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
                        
                            <td><span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span></td>
                            <td>john.doe@example.com</td>
                            <td>TRN132435</td>
                            <td>25</td>
                            <td>752381149</td>
                            <td>Bhopal</td>
                            <td>Jabalpur</td>
                            <td>Rajesh</td>
                            <td>Marketing</td>
                            <td>2025-05-01</td>
                            <td>DAVV University Bopal</td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td>3 Years</td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td>Abc</td>
                            <td>Brother</td>
                            <td>9854762210</td>
                            <td>
                              <div class="form-button-action">
                                <a
                                  href="editcandidate.php"
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
                      
                            <td><span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span></td>
                            <td>john.doe@example.com</td>
                            <td>TRN132435</td>
                            <td>25</td>
                            <td>752381149</td>
                            <td>Bhopal</td>
                            <td>Jabalpur</td>
                            <td>Rajesh</td>
                            <td>Marketing</td>
                            <td>2025-05-01</td>
                            <td>DAVV University Bopal</td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td>3 Years</td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td>Abc</td>
                            <td>Brother</td>
                            <td>9854762210</td>
                            <td>
                              <div class="form-button-action">
                                <a
                                  href="editcandidate.php"
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
                    
                            <td><span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span></td>
                            <td>john.doe@example.com</td>
                            <td>TRN132435</td>
                            <td>25</td>
                            <td>752381149</td>
                            <td>Bhopal</td>
                            <td>Jabalpur</td>
                            <td>Rajesh</td>
                            <td>Marketing</td>
                            <td>2025-05-01</td>
                            <td>DAVV University Bopal</td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td>3 Years</td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td>Abc</td>
                            <td>Brother</td>
                            <td>9854762210</td>
                            <td>
                              <div class="form-button-action">
                                <a
                                  href="editcandidate.php"
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
                      
                            <td><span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span></td>
                            <td>john.doe@example.com</td>
                            <td>TRN132435</td>
                            <td>25</td>
                            <td>752381149</td>
                            <td>Bhopal</td>
                            <td>Jabalpur</td>
                            <td>Rajesh</td>
                            <td>Marketing</td>
                            <td>2025-05-01</td>
                            <td>DAVV University Bopal</td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td>3 Years</td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td><img src="assets/img/pdf.png" style="width: 100%;"></td>
                            <td>Abc</td>
                            <td>Brother</td>
                            <td>9854762210</td>
                            <td>
                              <div class="form-button-action">
                                <a
                                  href="editcandidate.php"
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



<!-- Model Popup Candidate -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg"><br><br><br>
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Candidate Details</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
       <!-- Personal Details -->
        <h6>Personal Details</h6>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>Client</th>
              <td>Client Name Here</td>
              <th>Full Name</th>
              <td>John Doe</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>john@example.com</td>
              <th>TRN Number</th>
              <td>123456789</td>
            </tr>
            <tr>
              <th>Age</th>
              <td>28</td>
              <th>Password</th>
              <td>••••••••</td>
            </tr>
            <tr>
              <th>Phone Number</th>
              <td>+1234567890</td>
              <th>DOB</th>
              <td>01/15/1997</td>
            </tr>
            <tr>
              <th>Current Address</th>
              <td colspan="3">123 Main St, City, Country</td>
            </tr>
            <tr>
              <th>Permanent Address</th>
              <td colspan="3">456 Permanent Ave, City, Country</td>
            </tr>
          </tbody>
        </table>

        <!-- Professional History -->
        <h6 class="mt-4">Professional History</h6>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>Employee Name</th>
              <td>John Doe</td>
              <th>Job Title</th>
              <td>Software Developer</td>
            </tr>
            <tr>
              <th>Date of Employment</th>
              <td colspan="3">02/20/2020</td>
            </tr>
          </tbody>
        </table>

        <!-- Educational -->
        <h6 class="mt-4">Educational</h6>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>School/University</th>
              <td>Harvard University</td>
              <th>Year</th>
              <td>2018</td>
            </tr>
            <tr>
              <th>Degree Certificate</th>
              <td colspan="3"><a href="#">View File</a></td>
            </tr>
          </tbody>
        </table>

        <!-- Document Uploads -->
        <h6 class="mt-4">Document Uploads</h6>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>Resume</th>
              <td><a href="#">View Resume</a></td>
              <th>Government ID</th>
              <td><a href="#">View ID</a></td>
            </tr>
            <tr>
              <th>Certifications</th>
              <td colspan="3"><a href="#">View Files</a></td>
            </tr>
          </tbody>
        </table>

        <!-- Emergency Contact -->
        <h6 class="mt-4">Next of Kin / Emergency Contact</h6>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th>Name</th>
              <td>Jane Doe</td>
              <th>Relation</th>
              <td>Sister</td>
            </tr>
            <tr>
              <th>Tel. Number</th>
              <td colspan="3">+1987654321</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Modal footer --
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>-->

    </div>
  </div>
</div>

  <!-- Model Popup Candidate -->