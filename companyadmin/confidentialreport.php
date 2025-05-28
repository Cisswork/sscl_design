<!-- Header Start -->
    <?php include('header.php'); ?>
<!-- Header End -->
  
<!-- Sidebar Start -->
    <?php include('sidebar.php'); ?>
<!-- Sidebar End -->

<style>

  h2 {
    font-weight: 700;
    margin-bottom: 1.5rem;
    color: #344767;
  }
  .card {
    background: #fff;
    border-radius: 15px;
    padding: 2rem;
    max-width:70%;
    margin: 0 auto 3rem;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s;
  }
  .card:hover {
    transform: translateY(-5px);
  }
  .section {
    margin-bottom: 2rem;
  }
  .section h3 {
    color: #000000;
    margin-bottom: 1rem;
    font-weight: 600;
  }
  label {
    display: block;
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: #344767;
  }
  input[type="text"],
  input[type="date"],
  textarea,
  select {
    width: 100%;
    padding: 0.8rem 1rem;
    border: 1px solid #ced4da;
    border-radius: 10px;
    font-size: 1rem;
    transition: border-color 0.3s, box-shadow 0.3s;
    resize: vertical;
  }
  input[type="text"]:focus,
  input[type="date"]:focus,
  textarea:focus,
  select:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
    outline: none;
  }
  textarea {
    min-height: 80px;
  }
  select {
    cursor: pointer;
  }
  button[type="submit"] {
    background-color: #0d6efd;
    border: none;
    color: white;
    font-weight: 700;
    padding: 12px 40px;
    border-radius: 10px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
    display: block;
    margin: 0 auto;
  }
  button[type="submit"]:hover {
    background-color: #0047b3;
    transform: translateY(-2px);
  }

  @media (min-width: 768px) {
    .grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
    }
  }
.row {
    padding-bottom: 15px;
}
.form-check {
    display: block;
    min-height: 0rem;
    padding-left: 2.5em;
    margin-bottom: 0rem;
}
</style>

<div class="container">
  <div class="page-inner">
    <div class="page-header">
      <h2 class="fw-bold mb-4">Confidential Screening Report</h2><br>
    </div>
    <div class="card shadow-lg">
        <div class="row">
            <div class="col-md-6">
              <center><img src="assets/img/image1.png"></center>
            </div>
            <div class="col-md-6">
              <center><img src="assets/img/image2.png"></center>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
              <p>Suite F12 Ward Plaza, 35 Ward Avenue, Mandeville Manchester</p>
            </div>
            <div class="col-md-6">
              <p style="float: right;">Tel: 876-213-4516</p>
            </div>
        </div>
      
      <form>
        <div class="row">
            <div class="col-md-6">
              <h3>Confidential Screening Report for:</h3>
              <p>
                Service Solutions Consultants Ltd.			
                Suite F12 Ward Plaza, 35 Ward Avenue		
                Mandeville, Manchester
              </p>
            </div>
            <div class="col-md-6">
              <h3>Ordered by: </h3>
              <p>(876)</p>
              <h3>Client Name:</h3>
              <p>
                Date Received:	28/03/2025<br>	
                Date Completed: 03/04/2025
              </p>
            </div>
        </div>
        <div class="section">
          <h3>FINDINGS </h3>
          <hr>
          <span><b>Result:</b> <span style="color:green;">CLEARED</span></span><br>
          <span><b>Red Flags:</b> Nothing Adverse</span>
        </div>
        <div class="section">
          <h3>IDENTIFICATION - CONFIRMED – </h3>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <label for="last-name">Applicant’s Last Name:</label>
            </div>
            <div class="col-md-4">
              <label for="first-name">Full Name:</label>
            </div>
            <div class="col-md-2">
              <label for="trn">TRN:</label>
            </div>
            <div class="col-md-2">
              <label for="dob">Date of Birth:</label>
            </div>
            <div class="col-md-4">
              <label for="last-name">Telephone: (876)</label>
            </div>
          </div>
        </div>
        <div class="section">
          <h3>RESIDENCY- CONFIRMED-</h3>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <label for="last-name">Address:  Current </label>
            </div>
            <!--<div class="col-md-4">-->
            <!--  <label for="first-name">City/Town:</label>-->
            <!--</div>-->
            <!--<div class="col-md-4">-->
            <!--  <label for="middle-name">Parish:</label>-->
            <!--</div>-->
            <div class="col-md-6">
              <label for="trn">Address: Previous </label>
            </div>
            <div class="col-md-6">
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
            <div class="col-md-6">
              <label for="dob">COUNTRY OF BIRTH:</label>
            </div>
            <div class="col-md-6">
              <label for="last-name">JAMAICA</label>
            </div>
            <div class="col-md-12">
              <label for="last-name">Relative’s Name: </label>
            </div>
            <div class="col-md-12">
              <label for="last-name">Relative’s Telephone #: (876)</label>
            </div>
          </div>
        </div>
        <div class="section">
          <h3>SUMMARY</h3>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <b>Report Type</b>
            </div>
            <div class="col-md-6">
              <b>Description</b>
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-6">
              <b>Criminal Records Office (CRO) – </b>
            </div>
            <div class="col-md-6">
              <input type="text" id="last-name" name="last_name" placeholder="Enter the value">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <b>Criminal Activities on Record:</b>
            </div>
            <div class="col-md-6">
              <input type="text" id="last-name" name="last_name" placeholder="Enter the value">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <b>Inter/Intra Jurisdictional Criminal Offences: </b>
            </div>
            <div class="col-md-6">
              <input type="text" id="last-name" name="last_name" placeholder="Negative where criminal activities are concerned, Subject has not featured on the Police radar neither as complainant or accused.">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <b>Local Intelligence Search:</b>
            </div>
            <div class="col-md-6">
              <input type="text" id="last-name" name="last_name" placeholder="Enter the value">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <b>Social Media Search:</b>
            </div>
            <div class="col-md-6">
              <input type="text" id="last-name" name="last_name" placeholder="Enter the value">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <b>Court Search (es) - Completed :</b>
            </div>
            <div class="col-md-6">
              <input type="text" id="last-name" name="last_name" placeholder="Enter the value">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <b>Credit Score:</b>
            </div>
            <div class="col-md-6">
              <input type="text" id="last-name" name="last_name" placeholder="Enter the value">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <b>Driving Record :</b>
            </div>
            <div class="col-md-6">
              <input type="text" id="last-name" name="last_name" placeholder="Enter the value">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <b>Employment Verification: Confirmed:</b>
            </div>
            <div class="col-md-6">
              <div id="employment-wrapper">
                <!-- Initial input without remove button -->
                <div class="input-group mb-2">
                  <input type="text" class="form-control" name="employment_verification[]" placeholder="Enter employment detail">
                  <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                </div>
              </div>
              <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-employment-btn" style="float: right; margin: 15px 0px;">
                <i class="fas fa-plus"></i> Add More
              </button>
            </div>
          </div>
           <div class="row">
            <div class="col-md-6">
              <b>Education Verification: Confirmed:</b>
            </div>
            <div class="col-md-6">
              <div id="education-wrapper">
                <!-- Initial input without remove button -->
                <div class="input-group mb-2">
                  <input type="text" class="form-control" name="education_verification[]" placeholder="Enter education detail">
                  <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                </div>
              </div>
              <button type="button" class="btn btn-sm btn-outline-primary mt-2" id="add-education-btn" style="float: right; margin: 15px 0px;">
                <i class="fas fa-plus"></i> Add More
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h3>Character Reference:</h3>
            </div>
            <div class="col-md-6">
              <select class="form-select" id="character-reference-select" name="education_verification_status">
                <option value="">-- Select --</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
            
            <!-- This section will show only when "Yes" is selected -->
            <div id="character-reference-details" style="display: none; width: 100%;" class="row mt-3">
            
              <div class="col-md-4">
                <b>Verified by:</b>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="relationship[]" value="Neighbor" id="checkNeighbor"><label class="form-check-label" for="checkNeighbor">Neighbor</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="relationship[]" value="Friend" id="checkFriend"><label class="form-check-label" for="checkFriend">Friend</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="relationship[]" value="Distant Relative" id="checkRelative"><label class="form-check-label" for="checkRelative">Distant Relative</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="relationship[]" value="Mentor" id="checkMentor"><label class="form-check-label" for="checkMentor">Mentor</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="relationship[]" value="Teacher" id="checkTeacher"><label class="form-check-label" for="checkTeacher">Teacher</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="relationship[]" value="Employer" id="checkEmployer"><label class="form-check-label" for="checkEmployer">Employer</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="relationship[]" value="Former Employer" id="checkFormerEmployer"><label class="form-check-label" for="checkFormerEmployer">Former Employer</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="relationship[]" value="Other" id="checkOther"><label class="form-check-label" for="checkOther">Other</label></div>
              </div>
            
              <div class="col-md-4">
                <label class="form-label fw-bold">General Attitude:</label><br>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="general_attitude[]" value="Excellent"><label class="form-check-label">Excellent</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="general_attitude[]" value="Satisfactory"><label class="form-check-label">Satisfactory</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="general_attitude[]" value="Needs Improvement"><label class="form-check-label">Needs Improvement</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="general_attitude[]" value="Poor"><label class="form-check-label">Poor</label></div>
              </div>
            
              <div class="col-md-4">
                <label class="form-label fw-bold">Dependability:</label><br>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="dependability[]" value="Excellent"><label class="form-check-label">Excellent</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="dependability[]" value="Satisfactory"><label class="form-check-label">Satisfactory</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="dependability[]" value="Needs Improvement"><label class="form-check-label">Needs Improvement</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="dependability[]" value="Poor"><label class="form-check-label">Poor</label></div>
              </div>
            
              <div class="col-md-4 mt-3">
                <label class="form-label fw-bold">Ethics:</label><br>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="ethics[]" value="Excellent"><label class="form-check-label">Excellent</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="ethics[]" value="Satisfactory"><label class="form-check-label">Satisfactory</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="ethics[]" value="Needs Improvement"><label class="form-check-label">Needs Improvement</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="ethics[]" value="Poor"><label class="form-check-label">Poor</label></div>
              </div>
            
              <div class="col-md-4 mt-3">
                <label class="form-label fw-bold">Trustworthiness:</label><br>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="trustworthiness[]" value="Excellent"><label class="form-check-label">Excellent</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="trustworthiness[]" value="Satisfactory"><label class="form-check-label">Satisfactory</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="trustworthiness[]" value="Needs Improvement"><label class="form-check-label">Needs Improvement</label></div>
                <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" name="trustworthiness[]" value="Poor"><label class="form-check-label">Poor</label></div>
              </div>
            </div>
            <img src="assets/img/seal.png" style="width:50%;">
          </div>
        </div>
        <div>
            <b>Notes:</b>This report was prepared and approved by A&A Service Solutions Consultants Limited and is strictly confidential and intended for authorized use only. The information provided is based on records available at the time of reporting. SSCL ensures the accuracy and completeness of this information to the extent that it is publicly accessible and legally obtained. This background check was conducted in compliance with all applicable laws, regulations and in keeping with international standards.
        </div>
        <button type="submit">Submit</button>
        <hr>
        <footer class="text-center py-3">
          <small>
            Address: Suite F12 Ward Plaza, 35 Ward Avenue, Mandeville Manchester <br>
            Telephone: 876-677-3890 <br>
            Email: <a href="mailto:ceo@consultantsscl.com">ceo@consultantsscl.com</a> or <a href="mailto:Andrewspencer525@yahoo.com">Andrewspencer525@yahoo.com</a>
          </small>
        </footer>

      </form>
    </div>
  </div>
</div>

<!-- Footer Start -->
    <?php include('footer.php'); ?>
<!-- Footer End -->

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
  const employmentWrapper = document.getElementById('employment-wrapper');
  const addEmploymentBtn = document.getElementById('add-employment-btn');

  addEmploymentBtn.addEventListener('click', function () {
    const newInput = document.createElement('div');
    newInput.classList.add('input-group', 'mb-2');
    newInput.innerHTML = `
      <input type="text" class="form-control" name="employment_verification[]" placeholder="Enter employment detail">
      <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
      <button type="button" class="btn btn-danger btn-sm remove-employment ms-2">
        <i class="fas fa-minus"></i>
      </button>
    `;
    employmentWrapper.appendChild(newInput);
  });

  // Remove input field
  employmentWrapper.addEventListener('click', function (e) {
    if (e.target.closest('.remove-employment')) {
      const inputGroup = e.target.closest('.input-group');
      if (inputGroup) inputGroup.remove();
    }
  });
</script>

<script>
  const educationWrapper = document.getElementById('education-wrapper');
  const addEducationBtn = document.getElementById('add-education-btn');

  addEducationBtn.addEventListener('click', function () {
    const newInput = document.createElement('div');
    newInput.classList.add('input-group', 'mb-2');
    newInput.innerHTML = `
      <input type="text" class="form-control" name="education_verification[]" placeholder="Enter education detail">
      <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
      <button type="button" class="btn btn-danger btn-sm remove-education ms-2">
        <i class="fas fa-minus"></i>
      </button>
    `;
    educationWrapper.appendChild(newInput);
  });

  educationWrapper.addEventListener('click', function (e) {
    if (e.target.closest('.remove-education')) {
      const inputGroup = e.target.closest('.input-group');
      if (inputGroup) inputGroup.remove();
    }
  });
</script>

<script>
  const characterSelect = document.getElementById('character-reference-select');
  const referenceDetails = document.getElementById('character-reference-details');

  characterSelect.addEventListener('change', function () {
    if (this.value === 'yes') {
      referenceDetails.style.display = 'flex'; // Use flex to keep Bootstrap row layout
    } else {
      referenceDetails.style.display = 'none';
      // Optional: Uncheck all checkboxes when hiding
      const checkboxes = referenceDetails.querySelectorAll('input[type="checkbox"]');
      checkboxes.forEach(cb => cb.checked = false);
    }
  });
</script>


