<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification | Admin Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
    <style>
        body {
            background: linear-gradient(135deg, #ffffff, #ffffff);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .otp-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 90%;
            text-align: center;
            animation: slideUp 0.5s ease;
        }
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .logo {
           width: 100%;
      height: 120px;
      border-radius: 15px;
        }
        .otp-inputs {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin: 2rem 0;
        }
        .otp-input {
            width: 55px;
            height: 60px;
            font-size: 24px;
            text-align: center;
            border: 2px solid #eee;
            border-radius: 12px;
            background: #fff;
            transition: all 0.3s ease;
        }
        .otp-input:focus {
            border-color: #1572E8;
            box-shadow: 0 0 0 0.25rem rgba(21, 114, 232, 0.1);
            outline: none;
        }
        .btn-verify {
            background: linear-gradient(45deg, #2e6899, #3773a5);
            border: none;
            padding: 12px 30px;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            width: 100%;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }
        .btn-verify:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(21, 114, 232, 0.3);
        }
        .timer {
            color: #666;
            margin-top: 1.5rem;
            font-size: 0.9rem;
        }
        .resend-btn {
            color: #1572E8;
            text-decoration: none;
            margin-top: 1rem;
            display: inline-block;
            cursor: pointer;
        }
        .resend-btn:hover {
            text-decoration: underline;
        }
        /* .icon-shield {
            font-size: 48px;
            color: #1572E8;
            margin-bottom: 1rem;
        } */
    </style>
</head>
<body>
    <div class="otp-container">
        <img src="assets/img/kaiadmin/sidebar-logo.png" alt="Logo" class="logo">
        <!-- <i class="fas fa-shield-alt icon-shield"></i> -->
        <h3>OTP Verification</h3>
        <p class="text-muted">Enter the OTP sent to your email/phone</p>
        
        <div class="otp-inputs">
            <input type="text" maxlength="1" class="otp-input" autofocus>
            <input type="text" maxlength="1" class="otp-input">
            <input type="text" maxlength="1" class="otp-input">
            <input type="text" maxlength="1" class="otp-input">
        </div>

        <button type="button" class="btn btn-verify">
            Verify OTP
            <i class="fas fa-arrow-right ms-2"></i>
        </button>

        <div class="timer" id="timer">
            Resend OTP in <span>01:59</span>
        </div>

        <a class="resend-btn" id="resendBtn" style="display: none;">
            <i class="fas fa-redo-alt me-2"></i>Resend OTP
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Auto focus next input
        document.querySelectorAll('.otp-input').forEach((input, index) => {
            input.addEventListener('input', function() {
                if (this.value.length === 1) {
                    if (index < 3) {
                        document.querySelectorAll('.otp-input')[index + 1].focus();
                    }
                }
            });

            input.addEventListener('keydown', function(e) {
                if (e.key === 'Backspace' && !this.value && index > 0) {
                    document.querySelectorAll('.otp-input')[index - 1].focus();
                }
            });
        });

        // Timer functionality
        function startTimer(duration) {
            let timer = duration;
            const countdown = setInterval(() => {
                const minutes = parseInt(timer / 60, 10);
                const seconds = parseInt(timer % 60, 10);

                document.querySelector('#timer span').textContent = 
                    `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

                if (--timer < 0) {
                    clearInterval(countdown);
                    document.getElementById('timer').style.display = 'none';
                    document.getElementById('resendBtn').style.display = 'inline-block';
                }
            }, 1000);
        }

        // Start timer
        startTimer(119);

        // Verify button click handler
        document.querySelector('.btn-verify').addEventListener('click', function() {
            const otp = Array.from(document.querySelectorAll('.otp-input'))
                           .map(input => input.value)
                           .join('');

            if (otp.length === 4) {
                Swal.fire({
                    icon: 'success',
                    title: 'OTP Verified!',
                    text: 'Verification completed successfully.',
                    showConfirmButton: false,
                    timer: 1500
                }).then(() => {
                    window.location.href = 'index.html';
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid OTP',
                    text: 'Please enter the complete OTP code.'
                });
            }
        });

        // Resend button click handler
        document.getElementById('resendBtn').addEventListener('click', function() {
            this.style.display = 'none';
            document.getElementById('timer').style.display = 'block';
            startTimer(119);
            
            Swal.fire({
                icon: 'success',
                title: 'OTP Resent!',
                text: 'New OTP has been sent successfully.',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        });
    </script>
</body>
</html>