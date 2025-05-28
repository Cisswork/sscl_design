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
    border-radius: 10px 0 0 10px !important;
    transition: all 0.3s;
  }
  .input-group-text {
    background-color: #f8f9fa;
    border-radius: 0 10px 10px 0 !important;
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
  .form-check-input:checked {
    background-color: #0d6efd;
    border-color: #0d6efd;
  }
  @media (max-width: 768px) {
    .card-body {
      padding: 1rem;
    }
    
    .btn {
      width: 100%;
      margin: 0.5rem 0;
    }
  }
  .btn {
      min-width: 140px;
      padding: 12px 24px;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    .btn-primary {
      background: #1a73e8;
      border: none;
    }
    .btn-info {
      background: #17a2b8;
      border: none;
      color: white;
    }
    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    @media (max-width: 768px) {
      .btn {
        width: 100%;
        margin-bottom: 10px;
      }
    }
</style>

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
                <div class="card shadow-lg">
                  <div class="card-header  text-white d-flex justify-content-between align-items-center">
                    <div>
                      <h4 class="card-title mb-0">
                        <i class="fas fa-user-plus me-2"></i>Edit Candidate
                      </h4>
                    </div>
                    <div>
                      <a href="viewcandidate.php" class="btn btn-light" style="border-color: #f5f7fd !important;">
                        <i class="fas fa-users me-2"></i>View Candidates
                      </a>
                    </div>
                  </div>
                  <div class="card-body p-4">
                    <div class="col-12">
                          <h4 class="text-secondary mb-4 border-top border-bottom py-3 d-flex align-items-center" style="color: #000 !important; font-weight: 600;">
                            Personal Details
                          </h4>
                        </div>
                    <form>
                      <div class="row g-4">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Select Client</label>
                            <div class="input-group">
                              <select class="form-control">
                                <option value="" selected disabled>Choose a Client</option>
                                <option value="client1">ABC Corporation</option>
                                <option value="client2">XYZ Industries</option>
                                <option value="client3">Tech Solutions Ltd</option>
                                <option value="client4">Global Enterprises</option>
                                <option value="client5">Innovation Systems</option>
                              </select>
                              <span class="input-group-text"><i class="fas fa-building"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Full Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter full name">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Email</label>
                            <div class="input-group">
                              <input type="email" class="form-control" placeholder="Enter email">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">TRN Number</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter trn number">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Age</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter age">
                              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Password</label>
                            <div class="input-group">
                              <input type="password" class="form-control" placeholder="Enter password">
                              <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label fw-bold">Phone Number</label>
                            <div class="input-group">
                              <input type="tel" class="form-control" placeholder="Enter phone number">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label fw-bold">DOB (Date of Birth)</label>
                            <div class="input-group">
                              <input type="date" class="form-control">
                              <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label fw-bold">Current Address</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter address">
                              <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                          </div>
                        </div>
                         <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label fw-bold">Parmanent Address</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter address">
                              <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="row g-4">
                        <div class="col-12">
                          <h4 class="text-secondary mb-4 border-top border-bottom py-3 d-flex align-items-center" style="color: #000 !important; font-weight: 600;">
                            
                            Professional history
                          </h4>
                        </div>
                        
                        
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Employee Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter employee name">
                              <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Job Title</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter job title">
                              <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Date of Employment</label>
                            <div class="input-group">
                              <input type="date" class="form-control">
                              <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>



                      <div class="row g-4">
                        <div class="col-12">
                          <h4 class="text-secondary mb-4 border-top border-bottom py-3 d-flex align-items-center" style="color: #000 !important; font-weight: 600;">
                            Educational
                          </h4>
                        </div>
                        
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">School/University Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter school name">
                              <span class="input-group-text"><i class="fas fa-school"></i></span>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Degree Certificate</label>
                            <div class="input-group">
                              <input type="file" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
                              <span class="input-group-text"><i class="fas fa-file-upload"></i></span>
                            </div>
                            <small class="text-muted">Upload degree certificate (PDF, JPG, PNG)</small>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Year</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter Year">
                              <span class="input-group-text"><i class="fas fa-school"></i></span>
                            </div>
                          </div>
                        </div>
                      <div class="row g-4">
                        <div class="col-12">
                          <h4 class="text-secondary mb-4 border-top border-bottom py-3 d-flex align-items-center" style="color: #000 !important; font-weight: 600;">
                            Documents Upload
                          </h4>
                        </div>
                        
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Resume</label>
                            <div class="input-group">
                              <input type="file" class="form-control" accept=".pdf,.doc,.docx">
                              <span class="input-group-text"><i class="fas fa-file-pdf"></i></span>
                            </div>
                            <small class="text-muted">Accepted formats: PDF, DOC, DOCX</small>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Government-issued ID</label>
                            <div class="input-group">
                              <input type="file" class="form-control" accept=".jpg,.jpeg,.png,.pdf">
                              <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                            </div>
                            <small class="text-muted">Accepted formats: JPG, PNG, PDF</small>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Academic/Professional Certifications</label>
                            <div class="input-group">
                              <input type="file" class="form-control" accept=".pdf,.jpg,.jpeg,.png" multiple>
                              <span class="input-group-text"><i class="fas fa-certificate"></i></span>
                            </div>
                            <small class="text-muted">Multiple files allowed (PDF, JPG, PNG)</small>
                          </div>
                        </div>
                       
                        <div class="row g-4">
                        <div class="col-12">
                          <h4 class="text-secondary mb-4 border-top border-bottom py-3 d-flex align-items-center" style="color: #000 !important; font-weight: 600;">
                            
                            Next of Kin / Emergency Contact Person
                          </h4>
                        </div>
                        
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter name">
                              <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Relation</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter name">
                              <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="form-label fw-bold">Tel. Number</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter the number">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                        <div class="col-md-12">
                          <div class="form-check custom-checkbox mt-3">
                            <label class="form-check-label" for="document_terms">
                              <p>Disclaimer: I hereby consent to a detailed background check which may include the release of relevant personal information relating to my 
                                residential, educational, employment, credit, and criminal history to <br> Service Solutions Consultants Limited (SSCL). I understand and acknowledge that this consent was given of my own free will, without any form of force, fraud, or coercion. Iunderstand and acknowledge that <br>Service Solutions Consultants Limited (SSCL) will not be held accountable for any inadvertent disclosure of the information submitted. </p>
                            </label><br>
                            <input class="form-check-input" type="checkbox" id="document_terms">
                            <label class="form-check-label" for="document_terms">
                              I confirm that all uploaded documents are authentic and valid <a href="terms&condition.php">terms & condition</a>
                            </label>
                          </div>
                        </div>


                      </div>
                      
                      <div class="row g-4">
                        <div class="col-12 d-flex flex-wrap justify-content-center gap-3 mt-4">
                          <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane me-2"></i>Update
                          </button>
                          
                        </div>
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