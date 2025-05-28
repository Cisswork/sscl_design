<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Admin Dashboard</title>
    
    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #ffffff, #ffffff);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .reset-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 2.5rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 90%;
            animation: fadeIn 0.5s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .logo-section {
            text-align: center;
            margin-bottom: 2rem;
        }
        .logo {
            width: 100%;
      height: 120px;
      border-radius: 15px;
        }
        .password-field {
            position: relative;
            margin-bottom: 1.5rem;
        }
        .form-control {
            padding: 0.8rem 1rem;
            border-radius: 10px;
            border: 2px solid #eee;
            padding-right: 45px;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #1572E8;
            box-shadow: 0 0 0 0.25rem rgba(21, 114, 232, 0.1);
        }
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #1572E8;
            background: none;
            border: none;
        }
        .password-strength {
            height: 4px;
            background: #eee;
            margin: 10px 0;
            border-radius: 2px;
            overflow: hidden;
        }
        .strength-bar {
            height: 100%;
            width: 0;
            transition: all 0.3s ease;
        }
        .btn-reset {
               background: linear-gradient(45deg, #2e6899, #3773a5);
            border: none;
            padding: 12px;
            border-radius: 10px;
            color: white;
            font-weight: 600;
            width: 100%;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }
        .btn-reset:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(21, 114, 232, 0.3);
        }
        .requirements {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            margin: 20px 0;
        }
        .requirement-item {
            margin: 8px 0;
            color: #666;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .requirement-item i {
            font-size: 12px;
        }
        .valid { color: #31CE36; }
    </style>
</head>
<body>
    <div class="reset-container">
        <div class="logo-section">
            <img src="assets/img/logo.png" alt="Logo" class="logo">
            <h3>Reset Your Password</h3>
            <p class="text-muted">Please create a strong password for your account</p>
        </div>

        <form id="resetForm">
            <div class="password-field">
                <label class="form-label">New Password</label>
                <input type="password" class="form-control" id="newPassword" required>
                <button type="button" class="password-toggle" onclick="togglePassword('newPassword')" style="top: 51px !important ; ">
                    <i class="fas fa-eye"></i>
                </button>
                <div class="password-strength">
                    <div class="strength-bar" id="strengthBar"></div>
                </div>
                <small class="text-muted" id="strengthText">Password strength indicator</small>
            </div>

            <div class="password-field">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" required>
                <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword')" style="top: 51px !important ; ">
                    <i class="fas fa-eye"></i>
                </button>
            </div>

            <div class="requirements">
                <div class="requirement-item" id="length">
                    <i class="fas fa-circle"></i>
                    At least 8 characters
                </div>
                <div class="requirement-item" id="uppercase">
                    <i class="fas fa-circle"></i>
                    One uppercase letter
                </div>
                <div class="requirement-item" id="lowercase">
                    <i class="fas fa-circle"></i>
                    One lowercase letter
                </div>
                <div class="requirement-item" id="number">
                    <i class="fas fa-circle"></i>
                    One number
                </div>
                <div class="requirement-item" id="special">
                    <i class="fas fa-circle"></i>
                    One special character
                </div>
            </div>

            <button type="submit" class="btn btn-reset">
                Reset Password
                <i class="fas fa-arrow-right ms-2"></i>
            </button>

            <div class="text-center mt-4">
                <a href="login.php" class="text-primary" style="color: #3671a0 !important;">
                    <i class="fas fa-arrow-left me-2"></i>Back to Login
                </a>
            </div>
        </form>
    </div>

    <!-- Core JS Files -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = input.nextElementSibling.querySelector('i');
            input.type = input.type === 'password' ? 'text' : 'password';
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        }

        function updatePasswordStrength(password) {
            const requirements = {
                length: password.length >= 8,
                uppercase: /[A-Z]/.test(password),
                lowercase: /[a-z]/.test(password),
                number: /[0-9]/.test(password),
                special: /[!@#$%^&*]/.test(password)
            };

            Object.keys(requirements).forEach(req => {
                const element = document.getElementById(req);
                if (requirements[req]) {
                    element.classList.add('valid');
                    element.querySelector('i').classList.replace('fa-circle', 'fa-check-circle');
                } else {
                    element.classList.remove('valid');
                    element.querySelector('i').classList.replace('fa-check-circle', 'fa-circle');
                }
            });

            const strengthBar = document.getElementById('strengthBar');
            const strengthText = document.getElementById('strengthText');
            const validCount = Object.values(requirements).filter(Boolean).length;

            switch(validCount) {
                case 0:
                case 1:
                    strengthBar.style.width = '20%';
                    strengthBar.style.backgroundColor = '#F25961';
                    strengthText.textContent = 'Very Weak';
                    break;
                case 2:
                    strengthBar.style.width = '40%';
                    strengthBar.style.backgroundColor = '#F25961';
                    strengthText.textContent = 'Weak';
                    break;
                case 3:
                    strengthBar.style.width = '60%';
                    strengthBar.style.backgroundColor = '#FFC107';
                    strengthText.textContent = 'Medium';
                    break;
                case 4:
                    strengthBar.style.width = '80%';
                    strengthBar.style.backgroundColor = '#31CE36';
                    strengthText.textContent = 'Strong';
                    break;
                case 5:
                    strengthBar.style.width = '100%';
                    strengthBar.style.backgroundColor = '#31CE36';
                    strengthText.textContent = 'Very Strong';
                    break;
            }
        }

        document.getElementById('newPassword').addEventListener('input', function() {
            updatePasswordStrength(this.value);
        });

        document.getElementById('resetForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (newPassword !== confirmPassword) {
                Swal.fire({
                    icon: 'error',
                    title: 'Passwords do not match',
                    text: 'Please make sure both passwords are identical'
                });
                return;
            }

            Swal.fire({
                icon: 'success',
                title: 'Password Reset Successful',
                text: 'Your password has been updated successfully',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = 'login.php';
            });
        });
    </script>
</body>
</html>