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
        max-width: 450px;
      }
      .login-header {
        text-align: center;
        margin-bottom: 30px;
      }
      .login-header img {
        width: 100%;
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
    </style>
  </head>
  <body>
    <div class="login-container">
      <div class="login-card">
        <div class="login-header">
          <img src="assets/img/logo.png" alt="Logo" />
          <p>Please login to your account</p>
        </div>
        <form action="index.php">
          <div class="form-group">
            <input
              type="email"
              class="form-control"
              placeholder="Email Address"
              required
            />
          </div>
          <div class="form-group mb-3 position-relative">
            <input
              type="password"
              class="form-control"
              placeholder="Password"
              id="password"
              required
            />
            <span
              toggle="#password"
              class="fa fa-fw fa-eye field-icon toggle-password"
              style="position: absolute; top: 40%;right: 25px; transform: translateY(-50%); cursor: pointer;"
            ></span>
          </div>
          <div class="form-check">
            <a href="forgotpassword.php">Forgot Password?</a><br><br>
            <input type="checkbox" class="form-check-input" id="remember">
            <label class="form-check-label" for="remember">I have read and agree to the <a href="#">Terms & Conditions</a></label>
          </div>
          <button type="submit" class="btn btn-primary btn-login">Login</button>
        </form>
        <p>Don't have an account?  <a href="signup.php">Sign up Here</a></p>
      </div>
    </div>

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

