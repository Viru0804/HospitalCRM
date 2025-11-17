<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Welcome • Hospital CRM</title>
  <meta name="description" content="Choose your clinic to continue to the Hospital CRM login." />
  <meta name="keywords" content="hospital crm, clinic login, patient management, healthcare" />

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Main stylesheet -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

  <!-- Favicon (optional) -->
  <link rel="icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">

  <!-- Structured Data -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Clinic Selection - Hospital CRM",
      "description": "Select your clinic to continue to login.",
      "publisher": {
        "@type": "Organization",
        "name": "Hospital CRM"
      }
    }
  </script>
</head>

<body class="page welcome-page">
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
              <!-- simple inline svg icon -->
              <svg width="24" height="24" viewBox="0 0 24 24" role="img" aria-label="Colleagues">
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
              <li><a href="#" rel="nofollow">Terms</a></li>
              <li><a href="#" rel="nofollow">Privacy</a></li>
              <li><a href="#" rel="nofollow">Help</a></li>
            </ul>
          </nav>

          <div class="lang">
            <span class="lang-icon" aria-hidden="true">🌐</span>
            <label for="lang-select" class="sr-only">Language</label>
            <select id="lang-select" name="lang">
              <option>English</option>
            </select>
          </div>
        </footer>
      </div>
    </aside>

    <!-- Right Panel (Welcome) -->
    <main id="main" class="right-panel" role="main" aria-labelledby="welcome-title">

      <section class="welcome-card">
        <h1 id="welcome-title" class="welcome-title">Welcome!</h1>
        <p class="welcome-sub">Choose your login category to begin your journey</p>

        <h2 class="section-head">Select Clinic</h2>

        <form action="<?= site_url('auth/login'); ?>" method="get" class="clinic-form" aria-describedby="clinic-help">
          <fieldset class="clinic-list">

            <!-- Card 1 -->
            <label class="clinic-card">
              <input type="radio" name="clinic" value="manoday" />
              <span class="card-visual">
                <img src="<?= base_url('assets/img/manoday.png'); ?>" alt="Manoday logo">
                <span class="card-text">
                  <span class="card-title">Manoday</span>
                  <span class="card-sub">Mind Care Clinic</span>
                </span>
                <span class="card-radio" aria-hidden="true"></span>
              </span>
            </label>

            <!-- Card 2 -->
            <label class="clinic-card">
              <input type="radio" name="clinic" value="sunshine" />
              <span class="card-visual">
                <img src="<?= base_url('assets/img/sunshine.png'); ?>" alt="Sunshine logo">
                <span class="card-text">
                  <span class="card-title">Sunshine</span>
                  <span class="card-sub">Counselling and Therapy centre</span>
                </span>
                <span class="card-radio" aria-hidden="true"></span>
              </span>
            </label>
          </fieldset>

          <div class="actions">
            <!-- Button stays as a normal submit; JS will enable/disable later -->
            <button type="submit" class="btn btn-primary" disabled>Continue</button>
          </div>
        </form>
      </section>
    </main>
  </div>

  <!-- Page script (will handle enabling the button; full JS added later) -->
  <script>
    const BASE_URL = "<?= base_url(); ?>";
  </script>
  <script src="<?= base_url('assets/js/script.js'); ?>" defer></script>
  <noscript>
    <style>
      .btn[disabled] {
        opacity: 1
      }
    </style>
  </noscript>
</body>

</html>