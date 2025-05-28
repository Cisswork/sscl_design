<!-- Header Start -->
    <?php include('header.php'); ?>
<!-- Header End -->
  
<!-- Sidebar Start -->
    <?php include('sidebar.php'); ?>
<!-- Sidebar End -->

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Report</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="index.html">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="report.html">View Report</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Generate Report</h4>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="row align-items-end g-3">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                          <div class="form-group mb-0">
                            <label class="form-label">Client Name</label>
                            <select class="form-control">
                              <option value="" selected disabled>Choose any one</option>
                              <option value="client1">Client 1</option>
                              <option value="client2">Client 2</option>
                              <option value="client3">Client 3</option>
                              <option value="client4">Client 4</option>
                              <option value="client5">Client 5</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                          <div class="form-group mb-0">
                            <label class="form-label">To Date</label>
                            <input type="date" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                          <div class="form-group mb-0">
                            <label class="form-label">From Date</label>
                            <input type="date" class="form-control">
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                          <div class="form-group mb-0">
                            <label class="form-label">Status</label>
                            <select class="form-control">
                              <option value="All" selected>All</option>
                              <option value="Pending">Pending</option>
                              <option value="Inprogress">Inprogress</option>
                              <option value="Flagged">Flagged</option>
                              <option value="Completed">Completed</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12"></div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                          <center><div class="form-group mb-0">
                            <button type="button" class="btn btn-secondary">Search</button>
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
                      <h4 class="card-title"> View Report</h4>
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
                            <th>Full&nbsp;name</th>
                            <th>TRN Number</th>
                            <th>Credit Report</th>
                            <th>Report</th>
                            <th>Drug Report</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1.</td>
                            <td><span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span></td>
                            <td>TRN132435</td>
                            <td>
                              <a href="assets/pdf/Confidential Screening Background Check 2025 - Cari-Med Group.docx" download>
                                <img src="assets/img/pdf.png" style="width: 10%;" alt="Degree PDF">
                              </a>
                            </td>
                            <td>
                              <a href="assets/pdf/Confidential Screening Background Check 2025 - Cari-Med Group.docx" download>
                                <img src="assets/img/pdf.png" style="width: 10%;" alt="Degree PDF">
                              </a>
                            </td>
                            <td>
                              <a href="assets/pdf/Drug Test Record Form.pdf" download>
                                <img src="assets/img/pdf.png" style="width: 10%;" alt="Resume PDF">
                              </a>
                            </td>
                            <td>Flagged</td>
                          </tr>
                          <tr>
                            <td>2.</td>
                            <td><span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span></td>
                            <td>TRN132435</td>
                            <td>
                              <a href="assets/pdf/Confidential Screening Background Check 2025 - Cari-Med Group.docx" download>
                                <img src="assets/img/pdf.png" style="width: 10%;" alt="Degree PDF">
                              </a>
                            </td>
                            <td>
                              <a href="assets/pdf/Confidential Screening Background Check 2025 - Cari-Med Group.docx" download>
                                <img src="assets/img/pdf.png" style="width: 10%;" alt="Degree PDF">
                              </a>
                            </td>
                            <td>
                              <a href="assets/pdf/Drug Test Record Form.pdf" download>
                                <img src="assets/img/pdf.png" style="width: 10%;" alt="Resume PDF">
                              </a>
                            </td>
                            <td>Flagged</td>
                          </tr>
                          <tr>
                            <td>3.</td>
                            <td><span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span></td>
                            <td>TRN132435</td>
                            <td>
                              <a href="assets/pdf/Confidential Screening Background Check 2025 - Cari-Med Group.docx" download>
                                <img src="assets/img/pdf.png" style="width: 10%;" alt="Degree PDF">
                              </a>
                            </td>
                            <td>
                              <a href="assets/pdf/Confidential Screening Background Check 2025 - Cari-Med Group.docx" download>
                                <img src="assets/img/pdf.png" style="width: 10%;" alt="Degree PDF">
                              </a>
                            </td>
                            <td>
                              <a href="assets/pdf/Drug Test Record Form.pdf" download>
                                <img src="assets/img/pdf.png" style="width: 10%;" alt="Resume PDF">
                              </a>
                            </td>
                            <td>Flagged</td>
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

