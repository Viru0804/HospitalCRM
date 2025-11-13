<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Login • Hospital CRM</title>
  <meta name="description" content="Secure login for Hospital CRM users with OTP verification." />
  <meta name="keywords" content="hospital crm, clinic login, otp verification, healthcare system" />

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
  <link rel="icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">
</head>

<body class="page login-page">
  <a class="skip-link" href="#main">Skip to content</a>

  <div class="split">
    <!-- Reusable Left Panel -->
    <aside class="left-panel">
      <div class="left-inner">
        <header class="trial-head">
          <h1 class="trial-title">Start your 30-day free trial</h1>
          <p class="trial-sub"><span class="icon-check" aria-hidden="true">✔</span> No credit card required</p>
        </header>

        <ul class="benefits">
          <li class="benefit">
            <div class="benefit-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Zm-7 8a7 7 0 0 1 14 0v1H5Z" fill="currentColor" />
              </svg>
            </div>
            <div class="benefit-text">
              <h2>Invite unlimited colleagues</h2>
              <p>Integrate with developer-friendly APIs or choose a low-code solution.</p>
            </div>
          </li>
          <li class="benefit">
            <div class="benefit-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 2 2 7l10 5 10-5-10-5Zm0 7L2 4v13l10 5 10-5V4l-10 5Z" fill="currentColor" />
              </svg>
            </div>
            <div class="benefit-text">
              <h2>Ensure compliance</h2>
              <p>Get real-time insights and see where visitors are coming from.</p>
            </div>
          </li>
          <li class="benefit">
            <div class="benefit-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 2a7 7 0 0 0-7 7v3L3 14v8h18v-8l-2-2V9a7 7 0 0 0-7-7Zm0 6a3 3 0 1 1-3 3 3 3 0 0 1 3-3Z" fill="currentColor" />
              </svg>
            </div>
            <div class="benefit-text">
              <h2>Built-in security</h2>
              <p>Keep your team and customers in the loop by sharing your dashboard.</p>
            </div>
          </li>
        </ul>

        <footer class="left-footer">
          <nav aria-label="Footer">
            <ul class="footer-links">
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Help</a></li>
            </ul>
          </nav>

          <div class="lang">
            <span class="lang-icon">🌐</span>
            <select>
              <option>English</option>
            </select>
          </div>
        </footer>
      </div>
    </aside>

    <!-- Right Panel -->
    <main id="main" class="right-panel login-section" role="main">
      <div class="brand">
        <?php if ($clinic == 'manoday'): ?>
          <img src="<?= base_url('assets/img/manoday.png'); ?>" alt="Manoday Logo">
        <?php elseif ($clinic == 'sunshine'): ?>
          <img src="<?= base_url('assets/img/sunshine.png'); ?>" alt="Sunshine Logo">
        <?php else: ?>
          <img src="<?= base_url('assets/img/brand-mark.png'); ?>" alt="Clinic Logo">
        <?php endif; ?>
      </div>

      <section class="login-card" data-step="mobile">
        <h1 class="login-title">Login to your account</h1>
        <p class="login-sub">Enter your mobile number to login.</p>

        <form id="loginForm" autocomplete="off" novalidate>
          <div class="input-group phone-input">
            <label for="mobile" class="phone-label">
              <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png" alt="Call Icon">
            </label>
            <input type="tel" id="mobile" name="mobile" maxlength="10" placeholder="Enter mobile number" required>
          </div>


          <button type="button" id="sendOtpBtn" class="btn btn-primary">Send OTP</button>

          <div class="divider">
            <span>or continue with</span>
          </div>

          <div class="social-buttons">
            <button type="button" class="btn btn-google"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="Google_Account"> Google Account</button>
            <button type="button" class="btn btn-gmail"><img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Gmail_Icon.png" alt="Google_Email"> Gmail</button>
          </div>
        </form>
      </section>

      <!-- OTP Section (hidden initially) -->
      <section class="otp-card" data-step="otp" hidden>
        <h1 class="login-title">Login to your account</h1>
        <p class="login-sub">Enter 4 digit OTP that has been sent to <span id="showMobile"></span></p>

        <form id="otpForm" autocomplete="off" novalidate>
          <div class="otp-inputs">
            <input type="text" maxlength="1" class="otp-box" inputmode="numeric">
            <input type="text" maxlength="1" class="otp-box" inputmode="numeric">
            <input type="text" maxlength="1" class="otp-box" inputmode="numeric">
            <input type="text" maxlength="1" class="otp-box" inputmode="numeric">
          </div>

          <p class="resend-timer">
            Resend OTP in <span id="timer">00:30</span>
          </p>

          <button type="button" id="verifyBtn" class="btn btn-primary">Verify</button>

          <div class="divider">
            <span>or continue with</span>
          </div>

          <div class="social-buttons">
            <button type="button" class="btn btn-google"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt=""> Google Account</button>
            <button type="button" class="btn btn-gmail"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt=""> Gmail</button>
          </div>
        </form>
      </section>
    </main>
  </div>

  <script src="<?= base_url('assets/js/script.js'); ?>" defer></script>
</body>

</html>