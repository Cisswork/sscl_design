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
.btn { min - width: 140px;
padding: 12px 24px;
font - weight: 500;
transition: all 0.3s ease;
}.btn - primary { background: #1a73e8;
border: none;
}.btn - info { background: #17a2b8;
border: none;
color: white;
}.btn :hover { transform: translateY(- 2px);
box - shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
} @media (max - width: 768px) {.btn { width: 100 %;
margin - bottom: 10px;
} }
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
                  <a href="addcandidate.php">Candidate Management</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="addcandidate.php">Add Candidate</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card shadow-lg">
                  <div class="card-header  text-white d-flex justify-content-between align-items-center">
                    <div>
                      <h4 class="btn btn-light" style="border-color: #f5f7fd !important;">
                        <i class="fas fa-user-plus me-2"></i>Add Candidate
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
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label fw-bold">Full Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" placeholder="Enter full name">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
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
                            <label class="form-label fw-bold">Phone Number</label>
                            <div class="input-group">
                              <input type="tel" class="form-control" placeholder="Enter phone number">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="col-md-6">
                          <div class="form-group">
                            <label class="form-label fw-bold">DOB (Date of Birth)</label>
                            <div class="input-group">
                              <input type="date" class="form-control">
                              <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                          </div>
                        </div> -->
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
                            <label class="form-label fw-bold">Previous Address</label>
                            <div id="address-wrapper">
                              <!-- Initial input without remove button -->
                              <div class="input-group mb-2">
                                <input type="text" class="form-control" name="previous_address[]" placeholder="Enter address">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                              </div>
                            </div>
                            <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-address-btn" style="float: right;margin: 15px 0px;">
                              <i class="fas fa-plus"></i> Add More
                            </button>
                          </div>
                        </div>

                        <!-- <div class="col-md-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms">
                            <label class="form-check-label" for="terms">
                              I agree to the terms and conditions
                            </label>
                          </div>
                        </div> -->
                      </div>
                      <!-- <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary btn-lg px-5">
                          Submit<i class="fas fa-paper-plane ms-2"></i>
                        </button>
                        <button type="reset" class="btn btn-danger btn-lg px-5 ms-3">
                          Reset<i class="fas fa-redo ms-2"></i>
                        </button>
                      </div> -->
                      <div class="row g-4">
                        <div class="col-12">
                          <h4 class="text-secondary mb-4 border-top border-bottom py-3 d-flex align-items-center" style="color: #000 !important; font-weight: 600;">
                            
                            Professional history
                            <!-- <div class="ms-auto">
                              <span class="badge bg-primary rounded-pill">Required</span>
                            </div> -->
                          </h4>
                        </div>
                        
                        
                        <div id="employee-experience-wrapper">
                          <div class="row employee-experience-group mb-3">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="form-label fw-bold">Employee Name</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" name="employee_name[]" placeholder="Enter employee name">
                                  <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="form-label fw-bold">Job Title</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" name="job_title[]" placeholder="Enter job title">
                                  <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="form-label fw-bold">Date of Employment From</label>
                                <div class="input-group">
                                  <input type="month" class="form-control" name="employment_from[]">
                                  <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="form-label fw-bold">Date of Employment To</label>
                                <div class="input-group">
                                  <input type="month" class="form-control" name="employment_to[]">
                                  <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm mt-2 remove-experience d-none" style="float: right;">
                                  <i class="fas fa-minus"></i> Remove
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            <!-- Add More Button -->
                            <button type="button" class="btn btn-outline-primary btn-sm mb-3" id="add-experience" style="float: right;">
                              <i class="fas fa-plus"></i> Add More
                            </button>
                        </div>

                        <!-- <div class="col-md-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="employment_terms">
                            <label class="form-check-label" for="employment_terms">
                              I confirm that all employment details provided are correct
                            </label>
                          </div>
                        </div> -->
                      </div>



                      <div class="row g-4">
                        <div class="col-12">
                          <h4 class="text-secondary mb-4 border-top border-bottom py-3 d-flex align-items-center" style="color: #000 !important; font-weight: 600;">
                            Educational
                          </h4>
                        </div>
                        
                        <div id="education-wrapper">
                          <div class="row g-4 education-group mb-3">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="form-label fw-bold">School/University Name</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" name="school_name[]" placeholder="Enter school name">
                                  <span class="input-group-text"><i class="fas fa-school"></i></span>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="form-label fw-bold">Degree Certificate</label>
                                <div class="input-group">
                                  <input type="file" class="form-control" name="degree_certificate[]" accept=".pdf,.jpg,.jpeg,.png">
                                  <span class="input-group-text"><i class="fas fa-file-upload"></i></span>
                                </div>
                                <small class="text-muted">Upload degree certificate (PDF, JPG, PNG)</small>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <label class="form-label fw-bold">Year</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" name="degree_year[]" placeholder="Enter Year">
                                  <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                </div>
                              </div>
                              <button type="button" class="btn btn-danger btn-sm remove-education d-none" style="float: right;">
                                <i class="fas fa-minus"></i>
                              </button>
                            </div>

                          </div>
                        </div>

                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            <!-- Add More Button -->
                            <button type="button" class="btn btn-outline-primary btn-sm mb-3" id="add-education" style="float: right;">
                              <i class="fas fa-plus"></i> Add More
                            </button>
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
                            <!-- <div class="ms-auto">
                              <span class="badge bg-primary rounded-pill">Required</span>
                            </div> -->
                          </h4>
                        </div>
                        
                        <div id="reference-wrapper">
                          <div class="row g-3 reference-group mb-3">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="form-label fw-bold">Name</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" name="ref_name[]" placeholder="Enter name">
                                  <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="form-label fw-bold">Email</label>
                                <div class="input-group">
                                  <input type="email" class="form-control" name="ref_email[]" placeholder="Enter email">
                                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="form-label fw-bold">Relation</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" name="ref_relation[]" placeholder="Enter relation">
                                  <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label class="form-label fw-bold">Tel. Number</label>
                                <div class="input-group">
                                  <input type="text" class="form-control" name="ref_phone[]" placeholder="Enter number">
                                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                              </div>
                            </div>
                            <!--<div class="col-md-1 d-flex align-items-end">-->
                            <!--  <button type="button" class="btn btn-danger btn-sm remove-reference d-none">-->
                            <!--    <i class="fas fa-minus"></i>-->
                            <!--  </button>-->
                            <!--</div>-->
                          </div>
                        </div>

                        <!-- Add Button -->
                        <!--<button type="button" class="btn btn-outline-primary btn-sm mb-3" id="add-reference" style="width: 10%;">-->
                        <!--  <i class="fas fa-plus"></i> Add More-->
                        <!--</button>-->

                        <!-- <div class="col-md-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="employment_terms">
                            <label class="form-check-label" for="employment_terms">
                              I confirm that all employment details provided are correct
                            </label>
                          </div>
                        </div> -->
                      </div>
                        <div class="col-md-12">
                          <div class="form-check custom-checkbox mt-3">
                            <label class="form-check-label" for="document_terms">
                              <p>Disclaimer: I hereby consent to a detailed background check which may include the release of relevant personal information relating to my 
                                residential, educational, employment, credit, and criminal history to <br> Service Solutions Consultants Limited (SSCL). I understand and acknowledge that this consent was given of my own free will, without any form of force, fraud, or coercion. Iunderstand and acknowledge that <br>Service Solutions Consultants Limited (SSCL) will not be held accountable for any inadvertent disclosure of the information submitted. </p>
                            </label><br>
                            <input class="form-check-input" type="checkbox" id="document_terms">
                            <label class="form-check-label" for="document_terms">
                              I confirm that all uploaded documents are authentic and valid <a href="tandc.php">terms & condition</a>
                            </label>
                          </div>
                        </div>


                      </div>
                      
                      <div class="row g-4">
                        <div class="col-12 d-flex flex-wrap justify-content-center gap-3 mt-4">
                          <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane me-2"></i>Submit
                          </button>
                          <button type="button" class="btn btn-info">
                            <i class="fas fa-save me-2"></i>Save Draft
                          </button>
                          <button type="reset" class="btn btn-danger">
                            <i class="fas fa-redo me-2"></i>Reset
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

<script>
  const addressWrapper = document.getElementById('address-wrapper');
  const addButton = document.getElementById('add-address-btn');

  addButton.addEventListener('click', function () {
    const newInput = document.createElement('div');
    newInput.classList.add('input-group', 'mb-2');
    newInput.innerHTML = `
      <input type="text" class="form-control" name="previous_address[]" placeholder="Enter address">
      <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
      <button type="button" class="btn btn-danger btn-sm remove-address ms-2">
        <i class="fas fa-minus"></i>
      </button>
    `;
    addressWrapper.appendChild(newInput);
  });

  // Event delegation for removing address fields
  addressWrapper.addEventListener('click', function (e) {
    if (e.target.closest('.remove-address')) {
      const inputGroup = e.target.closest('.input-group');
      if (inputGroup) inputGroup.remove();
    }
  });
</script>


<script>
  document.getElementById('add-experience').addEventListener('click', function () {
    const wrapper = document.getElementById('employee-experience-wrapper');
    const experienceGroup = document.querySelector('.employee-experience-group');
    const clone = experienceGroup.cloneNode(true);

    // Clear input values
    clone.querySelectorAll('input').forEach(input => input.value = '');

    // Show remove button on cloned groups
    const removeBtn = clone.querySelector('.remove-experience');
    removeBtn.classList.remove('d-none');

    wrapper.appendChild(clone);
  });

  // Use event delegation to handle remove clicks
  document.getElementById('employee-experience-wrapper').addEventListener('click', function (e) {
    if (e.target.closest('.remove-experience')) {
      const group = e.target.closest('.employee-experience-group');
      group.remove();
    }
  });
</script>

<script>
  const eduWrapper = document.getElementById('education-wrapper');
  const addEduBtn = document.getElementById('add-education');

  addEduBtn.addEventListener('click', () => {
    const group = document.querySelector('.education-group');
    const clone = group.cloneNode(true);

    // Clear input values
    clone.querySelectorAll('input').forEach(input => {
      input.value = '';
      if (input.type === 'file') input.value = null;
    });

    // Show remove button on new groups
    const removeBtn = clone.querySelector('.remove-education');
    removeBtn.classList.remove('d-none');

    eduWrapper.appendChild(clone);
  });

  eduWrapper.addEventListener('click', function (e) {
    if (e.target.closest('.remove-education')) {
      const group = e.target.closest('.education-group');
      group.remove();
    }
  });
</script>

<script>
  const refWrapper = document.getElementById('reference-wrapper');
  const addRefBtn = document.getElementById('add-reference');

  addRefBtn.addEventListener('click', () => {
    const group = document.querySelector('.reference-group');
    const clone = group.cloneNode(true);

    clone.querySelectorAll('input').forEach(input => input.value = '');
    clone.querySelector('.remove-reference').classList.remove('d-none');

    refWrapper.appendChild(clone);
  });

  refWrapper.addEventListener('click', function (e) {
    if (e.target.closest('.remove-reference')) {
      const group = e.target.closest('.reference-group');
      group.remove();
    }
  });
</script>

