// ============================
// Hospital CRM Frontend Script
// ============================

document.addEventListener("DOMContentLoaded", function () {
  /* ------------------------------
     Welcome Page (Clinic Selection)
  ------------------------------ */
  const clinicCards = document.querySelectorAll(".clinic-card input");
  const continueBtn = document.querySelector(".clinic-form .btn");

  if (clinicCards.length && continueBtn) {
    clinicCards.forEach((radio) => {
      radio.addEventListener("change", () => {
        continueBtn.disabled = false;
      });
    });
  }

  /* ------------------------------
     Login Page Logic (OTP Flow)
  ------------------------------ */
  const sendOtpBtn = document.getElementById("sendOtpBtn");
  const verifyBtn = document.getElementById("verifyBtn");
  const loginSection = document.querySelector(".login-card");
  const otpSection = document.querySelector(".otp-card");
  const showMobile = document.getElementById("showMobile");
  const mobileInput = document.getElementById("mobile");
  const otpBoxes = document.querySelectorAll(".otp-box");
  const timerEl = document.getElementById("timer");
  const resendTextContainer = document.querySelector(".resend-timer");

  let countdownInterval;

  // --- Handle "Send OTP" ---
  if (sendOtpBtn) {
    sendOtpBtn.addEventListener("click", function () {
      const mobile = mobileInput.value.trim();

      if (!/^[6-9]\d{9}$/.test(mobile)) {
        alert("Please enter a valid 10-digit mobile number");
        mobileInput.focus();
        return;
      }

      // Simulate OTP send
      showMobile.textContent = mobile;

      // Toggle sections
      loginSection.hidden = true;
      otpSection.hidden = false;

      // Start timer
      startCountdown(30);
    });
  }

  // --- OTP Inputs ---
  if (otpBoxes.length) {
    otpBoxes.forEach((box, idx) => {
      box.addEventListener("input", (e) => {
        e.target.value = e.target.value.replace(/\D/, ""); // only digits
        if (e.target.value && idx < otpBoxes.length - 1) {
          otpBoxes[idx + 1].focus();
        }
      });

      box.addEventListener("keydown", (e) => {
        if (e.key === "Backspace" && !e.target.value && idx > 0) {
          otpBoxes[idx - 1].focus();
        }
      });
    });
  }

  // --- Verify Button (placeholder) ---
  if (verifyBtn) {
    verifyBtn.addEventListener("click", function () {

      const otp = Array.from(otpBoxes).map(b => b.value).join("");

      if (otp.length < 4) {
        alert("Please enter the 4-digit OTP");
        return;
      }

      // FINAL ABSOLUTE REDIRECT
      window.location.href = "http://localhost/hospital/dashboard";
    });
  }

  // --- Countdown Timer ---
  function startCountdown(seconds) {
    clearInterval(countdownInterval);
    let remaining = seconds;
    updateTimerText(remaining);

    countdownInterval = setInterval(() => {
      remaining--;
      updateTimerText(remaining);

      if (remaining <= 0) {
        clearInterval(countdownInterval);
        showResendText();
      }
    }, 1000);
  }

  function updateTimerText(remaining) {
    const formatted = "00:" + (remaining < 10 ? "0" + remaining : remaining);
    if (timerEl) timerEl.textContent = formatted;
  }

  // --- Show "Resend" Text Link ---
  function showResendText() {
    resendTextContainer.innerHTML = `Didn't Receive Code? <button type="button" class="resend-link" id="resendBtn">Resend</button>`;
    addResendHandler();
  }

  function addResendHandler() {
    const resendBtn = document.getElementById("resendBtn");
    if (resendBtn) {
      resendBtn.addEventListener("click", () => {
        otpBoxes.forEach((b) => (b.value = ""));
        otpBoxes[0].focus();
        resendTextContainer.innerHTML = `Resend OTP in <span id="timer">00:30</span>`;
        startCountdown(30);
      });
    }
  }
});
