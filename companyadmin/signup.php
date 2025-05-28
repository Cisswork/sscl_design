<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login || Admin Panel</title>
    <!-- CSS Files -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    <style>
      .login-container {
        min-height: 100vh;
        background: linear-gradient(135deg, #ffffff 0%, #ffffff 100%);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .login-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 1000px;
      }
      .login-header {
        text-align: center;
        margin-bottom: 30px;
      }
      .login-header img {
        width: 30%;
        margin-bottom: 20px;
        border-radius: 15px;
      }
      .login-header h3 {
        color: #333;
        font-weight: 600;
      }
      .form-control {
        border-radius: 10px;
        padding: 12px 15px;
        border: 1px solid #ddd;
        margin-bottom: 20px;
      }
      .btn-login {
        background: #000dff;
        border: none;
        border-radius: 10px;
        padding: 12px;
        font-weight: 600;
        width: 100%;
        margin-top: 10px;
      }
      .btn-login:hover {
        background: #0007b3;
      }
      .forgot-password {
        text-align: center;
        margin-top: 20px;
        color: #666;
      }
      .forgot-password a {
        color: #000dff;
        text-decoration: none;
      }
      span.input-group-text {
    height: 47px;
}
    </style>
  </head>
  <body>
    <div class="login-container">
      <div class="login-card">
        <div class="login-header">
          <img src="assets/img/logo.png" alt="Logo" />
          <!--<p>Please login to your account</p>-->
        </div>
  
                  
                  
                      <div class="card-body p-4">
                    <form>
                      <div class="row g-4">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="firstName" class="form-label fw-bold">Client Name</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="firstName" placeholder="Client Name">
                              <span class="input-group-text"><i class="fas fa-building"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="lastName" class="form-label fw-bold">Contact Person</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="lastName" placeholder="Contact Person">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="trn" class="form-label fw-bold">TRN Number</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="trn" name="trn" placeholder="Enter TRN Number">
                              <span class="input-group-text"><i class="fas fa-id-card"></i></span>
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
                            <label for="mobile" class="form-label fw-bold">Mobile Number</label>
                            <div class="input-group">
                              <input type="tel" class="form-control" id="mobile" placeholder="Enter mobile number">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
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
                                style="position: absolute;top: 34%;right: 2px; transform: translateY(-50%); cursor: pointer;"
                              ></span></span>
                            </div>

                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="profileImage" class="form-label fw-bold">Profile/Logo image</label>
                            <div class="input-group">
                              <input type="file" class="form-control" id="profileImage" accept="image/*">
                              <span class="input-group-text"><i class="fas fa-image"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="website" class="form-label fw-bold">Website</label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="website" name="website" placeholder="Enter Website URL">
                              <span class="input-group-text"><i class="fas fa-globe"></i></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="company-address" class="form-label fw-bold">Company Address</label>
                            <div class="input-group">
                              <textarea class="form-control" id="company-address" name="company_address" placeholder="Enter Company Address" rows="4"></textarea>
                              <span class="input-group-text"><i class="fas fa-building"></i></span>
                            </div>
                          </div>
                        </div>

                        
                        
                      </div>
                      <div class="mt-5 text-center">
                        <button type="submit" class="btn btn-primary btn-login" style="width: 18%;">Signup</button>
                      </div>
                    </form>
                  </div>
                
                    <p>
                      Already have an account? 
                      <a href="login.php">Log in here</a>
                    </p>
                  </div>
                  
                
      </div>
    </div>
    <br><br><br><br>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  </body>
</html>

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

