<!-- Header Start -->
    <?php include('header.php'); ?>
<!-- Header End -->
  
<!-- Sidebar Start -->
    <?php include('sidebar.php'); ?>
<!-- Sidebar End -->

<style>
  .nav-tabs-custom {
    border-bottom: 2px solid #ebedf2;
  }
  .nav-tabs-custom .nav-link {
    border: none;
    color: #495057;
    padding: 1rem 1.5rem;
    font-weight: 500;
    transition: all 0.3s;
  }
  .nav-tabs-custom .nav-link.active {
    color: #3498db;
    border-bottom: 2px solid #3498db;
    background: transparent;
  }
  .nav-tabs-custom .nav-link:hover {
    color: #3498db;
  }
  .table-responsive {
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }
  .table thead th {
    background-color: #f8f9fa;
    border-bottom: none;
  }
  .btn-sm {
    margin: 0 2px;
  }
  .badge {
    padding: 0.5em 0.8em;
  }


/*  model */


.container {
  text-align: center;
}

#addNoteBtn {
  padding: 5px 11px;
    font-size: 14px;
  background-color: #4caf50;
  color: white;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

/* Modal Styles */
.modal {
  display: none;
  position: fixed;
  z-index: 999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.5);
}

/*.modal-content {
  background-color: #fff;
  margin: 10% auto;
  padding: 20px;
  width: 90%;
  max-width: 400px;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  text-align: center;
}*/

.modal-content input {
  width: 100%;
  padding: 10px;
  margin: 15px 0;
  font-size: 16px;
}

.modal-content button {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #2196f3;
  color: white;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.close {
  float: right;
  font-size: 24px;
  font-weight: bold;
  cursor: pointer;
}

.modal-backdrop {
    position: relative !important;
}
</style>

      <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Screening</h3>
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
                  <a href="screening.html">Screening</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title" style="float: left;">Screening Overview</div>
                    <div class="card-tools" style="float: right;">
                      <select id="roleSelect" class="form-select form-select-sm" style="width: 150px; display: inline-block;">
                        <option selected disabled>Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="hr">HR</option>
                        <option value="interviewer">Interviewer</option>
                      </select>
                      <button class="btn btn-primary btn-sm" onclick="assignRole()" style="margin-left: 10px;">Assign</button>
                    </div>
                    <div style="clear: both;"></div>


                  </div>
                  <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#pending" role="tab">
                          <span class="d-block d-sm-none"><i class="fas fa-clock"></i></span>
                          <span class="d-none d-sm-block">Pending <span class="badge bg-warning">5</span></span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#inProgress" role="tab">
                          <span class="d-block d-sm-none"><i class="fas fa-spinner"></i></span>
                          <span class="d-none d-sm-block">In Progress <span class="badge bg-info">3</span></span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#flagged" role="tab">
                          <span class="d-block d-sm-none"><i class="fas fa-flag"></i></span>
                          <span class="d-none d-sm-block">Flagged <span class="badge bg-danger">2</span></span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#completed" role="tab">
                          <span class="d-block d-sm-none"><i class="fas fa-check-circle"></i></span>
                          <span class="d-none d-sm-block">Clear <span class="badge bg-success">4</span></span>
                        </a>
                      </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3">
                      <!-- Pending Tab -->
                      <div class="tab-pane active" id="pending" role="tabpanel">
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th><input type="checkbox" id="selectAll"></th>
                                <th>Candidate Name</th>
                                <th>Email</th>
                                <th>TRN Number</th>
                                <th>Age</th>
                                <th>Phone Number</th>
                                <th>DOB</th>
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
                                <th>Date Applied</th>
                                 <th>add notes</th>
                                <th>Status</th>
                               <th>completed button</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><input type="checkbox" class="row-checkbox" value="candidate_id_1"></td>
                                <td>
                                    <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>2024-01-15</td>
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td><input type="checkbox" class="row-checkbox" value="candidate_id_1"></td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>2024-01-15</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td><input type="checkbox" class="row-checkbox" value="candidate_id_1"></td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>2024-01-15</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td><input type="checkbox" class="row-checkbox" value="candidate_id_1"></td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>2024-01-15</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td><input type="checkbox" class="row-checkbox" value="candidate_id_1"></td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>2024-01-15</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                               <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <!-- Add more rows as needed -->
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <!-- In Progress Tab -->
                      <div class="tab-pane" id="inProgress" role="tabpanel">
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Role</th>
                                <th>Approved By</th>
                                <th>Candidate Name</th>
                                <th>Email</th>
                                <th>TRN Number</th>
                                <th>Age</th>
                                <th>Phone Number</th>
                                <th>DOB</th>
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
                                <th>Current Stage</th>
                                
                                <th>add notes</th>
                                <th>Status</th>
                                <th>Complete button</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>Interview Round 2</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-info">In Progress</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>Interview Round 2</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-info">In Progress</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>Interview Round 2</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-info">In Progress</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>Interview Round 2</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-info">In Progress</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>Interview Round 2</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-info">In Progress</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <!-- Add more rows as needed -->
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <!-- Flagged Tab -->
                      <div class="tab-pane" id="flagged" role="tabpanel">
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Role</th>
                                <th>Approved By</th>
                                <th>Candidate Name</th>
                                <th>Email</th>
                                <th>TRN Number</th>
                                <th>Age</th>
                                <th>Phone Number</th>
                                <th>DOB</th>
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
                                <th>Flag Reason</th>
                                <th>add notes</th>
                                <th>Status</th>
                                <th>Complete button</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>Background Check</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-danger">Flagged</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>Background Check</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-danger">Flagged</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>Background Check</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-danger">Flagged</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>Background Check</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-danger">Flagged</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>Background Check</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-danger">Flagged</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <!-- Add more rows as needed -->
                            </tbody>
                          </table>
                        </div>
                      </div>

                      <!-- Completed Tab -->
                      <div class="tab-pane" id="completed" role="tabpanel">
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <td>Role</td>
                                <td>Approved By</td>
                                <th>Candidate Name</th>
                                <th>Email</th>
                                <th>TRN Number</th>
                                <th>Age</th>
                                <th>Phone Number</th>
                                <th>DOB</th>
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
                                <th>Completion Date</th>
                                <th>add notes</th>
                                <th>Status</th>
                                <th>complete button</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>2024-01-10</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>2024-01-10</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                 <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>2024-01-10</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>2024-01-10</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <tr>
                                <td>HR</td>
                                <td> --- </td>
                                <td>
                                  <a href="confidentialreport.php" class="btn btn-info btn-sm">John Doe</a><br><br>
                                    <!--<span class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">John Doe</span>>-->
                                    <a href="drugreport.php" class="btn btn-warning btn-sm">Upload Drug&nbsp;Report</a><br><br>
                                    <a href="creditreport.php" class="btn btn-success btn-sm">Upload Credit&nbsp;Report</a>
                                </td>
                                <td>john.doe@example.com</td>
                                <td>TRN132435</td>
                                <td>25</td>
                                <td>752381149</td>
                                <td>2025-05-06</td>
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
                                <td>2024-01-10</td>
                                
                                <td><button id="addNoteBtn">Add Note</button></td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>
                                  <button class="btn btn-success btn-sm">
                                    <i class="fas fa-check-circle me-1"></i>Complete
                                  </button>
                                </td>
                                <!--<td>
                                  <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </td>-->
                              </tr>
                              <!-- Add more rows as needed -->
                            </tbody>
                          </table>
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

<div id="noteModal" class="modal">
    <div class="modal-content" style="background-color: #fff;
  margin: 10% auto;
  padding: 20px;
  width: 90%;
  max-width: 400px;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  text-align: center;">
      <span class="close">&times;</span>
      <h2>Add a New Note</h2>
      <input type="text" id="noteInput" placeholder="Enter your note..." />
      <button id="submitNote">Submit</button>
    </div>
</div>
  
<!--  model -->
<script>
  const modal = document.getElementById("noteModal");
const addNoteBtn = document.getElementById("addNoteBtn");
const closeBtn = document.querySelector(".close");
const submitNote = document.getElementById("submitNote");

addNoteBtn.onclick = () => {
  modal.style.display = "block";
};

closeBtn.onclick = () => {
  modal.style.display = "none";
};

window.onclick = (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
};

submitNote.onclick = () => {
  const note = document.getElementById("noteInput").value;
  if (note.trim() === "") {
    alert("Please enter a note.");
  } else {
    alert("Note Submitted: " + note);
    document.getElementById("noteInput").value = "";
    modal.style.display = "none";
  }
};

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

<script>
  // Select/deselect all checkboxes
  document.getElementById('selectAll').addEventListener('change', function () {
    const checkboxes = document.querySelectorAll('.row-checkbox');
    checkboxes.forEach(cb => cb.checked = this.checked);
  });

  // Handle assign button
  function assignRole() {
    const selectedRole = document.getElementById('roleSelect').value;
    const selectedCandidates = Array.from(document.querySelectorAll('.row-checkbox:checked'))
      .map(cb => cb.value);

    if (!selectedRole) {
      alert('Please select a role.');
      return;
    }

    if (selectedCandidates.length === 0) {
      alert('Please select at least one candidate.');
      return;
    }

    // Replace this with your actual logic (AJAX or form post)
    console.log('Assigning role:', selectedRole, 'to candidates:', selectedCandidates);

    // Example: send to backend with fetch or jQuery
    // fetch('/assign-role', { method: 'POST', body: JSON.stringify({ role: selectedRole, ids: selectedCandidates }) });
  }
</script>


