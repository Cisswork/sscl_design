<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(45deg, #ffffff, #ffffff);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .forgot-password-container {
      background: rgba(255, 255, 255, 0.95);
      border-radius: 15px;
      padding: 2.5rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      max-width: 450px;
      width: 90%;
      margin: 20px;
    }

    .logo-container {
      text-align: center;
      margin-bottom: 2rem;
    }

    .logo {
      width: 100%;
      height: 120px;
      border-radius: 15px;
    }

    .form-floating {
      margin-bottom: 1.5rem;
    }

    .form-control {
      border-radius: 8px;
      padding: 1rem 0.75rem;
      border: 2px solid #eee;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #1572E8;
      box-shadow: 0 0 0 0.25rem rgba(21, 114, 232, 0.1);
    }

    .btn-reset {
      background: linear-gradient(45deg, #21476d, #3975a7);
      border: none;
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      color: white;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
    }

    .btn-reset:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(21, 114, 232, 0.3);
    }

    .back-link {
      text-align: center;
      margin-top: 1.5rem;
    }

    .back-link a {
          color: #366d9b;
    text-decoration: none;
    font-weight: 500;
    }

    /* .back-link a:hover {
      text-decoration: underline;
    } */

    .icon-container {
      width: 80px;
      height: 80px;
      background: linear-gradient(45deg, #21476d, #3975a7);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
    }

    .icon-container i {
      font-size: 35px;
      color: white;
    }
  </style>
</head>

<body>
  <div class="forgot-password-container">
    <div class="logo-container">
      <img src="assets/img/logo.png" alt="Logo" class="logo">
    </div>

    <h3 class="text-center mb-4">Forgot Password</h3>
    <p class="text-muted text-center mb-4">Enter your email address below and we'll send you instructions to reset your
      password.</p>

    <form id="forgotPasswordForm">
      <div class="form-floating mb-4">
        <input type="email" class="form-control" id="emailInput" placeholder="name@example.com" required>
        <label for="emailInput">Email address</label>
      </div>

      <button type="submit" class="btn btn-reset">
        Send Reset Link
        <i class="fas fa-arrow-right ms-2"></i>
      </button>
    </form>

    <div class="back-link">
      <a href="login.php">
        <i class="fas fa-arrow-left me-2"></i>Back to Login
      </a>
    </div>
  </div>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.getElementById('forgotPasswordForm').addEventListener('submit', function (e) {
      e.preventDefault();
      const email = document.getElementById('emailInput').value;

      // Add your password reset logic here
      alert('Password reset link has been sent to: ' + email);

      // Optional: Redirect to login page after few seconds
      setTimeout(() => {
        window.location.href = 'resetpassword.php';
      }, 2000);
    });
  </script>
</body>

</html>