<?php
require_once APP_PATH . '/config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Grand Egyptian Museum - Preserve Egypt's Heritage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />
  <!-- css components -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/footer-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/ai-component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/Donate.css">
</head>

<body>
  <?php include VIEW_PATH . 'components/navbar.php'; ?>
  <div class="documentNotNavbar mt-3">
    <!-- Hero Section -->
    <section class="hero" id="hero">
      <div class="hero-content">
        <h1>Preserve Egypt's Heritage</h1>
        <p>Your donation protects 7,000 years of history</p>
        <a href="#donate" class="btn-primary">Make a Donation</a>
      </div>
    </section>

    <!-- Why Donate Section -->
    <section class="why-donate">
      <div class="container">
        <h2 class="section-title">Why Your Donation Matters</h2>
        <div class="cards-grid">
          <div class="card">
            <div class="card-image" style="
                background-image: url('<?= ASSETS ?>image/RestoreAncientArtifacts.png');
              "></div>
            <div class="card-content">
              <h3>Restore Ancient Artifacts</h3>
              <p>
                Your support funds the delicate restoration of priceless
                treasures, bringing ancient wonders back to their original
                glory.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card-image" style="
                background-image: url('<?= ASSETS ?>image/PreserveRoyalMummies.png');
              "></div>
            <div class="card-content">
              <h3>Preserve Royal Mummies</h3>
              <p>
                Advanced preservation techniques keep Egypt's royal ancestors
                protected for future generations to study and admire.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card-image" style="
                background-image: url('<?= ASSETS ?>image/SupportKidsEducation.png');
              "></div>
            <div class="card-content">
              <h3>Support Kids Education</h3>
              <p>
                Inspire young minds through educational programs that connect
                children with their rich cultural heritage.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card-image" style="
                background-image: url('<?= ASSETS ?>image/ExpandMuseumExhibitions.png');
              "></div>
            <div class="card-content">
              <h3>Expand Museum Exhibitions</h3>
              <p>
                Help us create new galleries and exhibitions that showcase
                Egypt's magnificent history to the world.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Impact Statistics -->
    <section class="impact-stats">
      <div class="container">
        <h2 class="section-title">Your Impact in Action</h2>
        <div class="stats-grid">
          <div class="stat-item">
            <div class="stat-circle" style="--percent: 144deg">
              <span class="stat-value">40%</span>
            </div>
            <div class="stat-label">Artifact Restoration</div>
          </div>
          <div class="stat-item">
            <div class="stat-circle" style="--percent: 108deg">
              <span class="stat-value">30%</span>
            </div>
            <div class="stat-label">Education Programs</div>
          </div>
          <div class="stat-item">
            <div class="stat-circle" style="--percent: 72deg">
              <span class="stat-value">20%</span>
            </div>
            <div class="stat-label">Museum Expansion</div>
          </div>
          <div class="stat-item">
            <div class="stat-circle" style="--percent: 36deg">
              <span class="stat-value">10%</span>
            </div>
            <div class="stat-label">Preservation Labs</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Before/After Restoration -->
    <section class="restoration">
      <div class="container">
        <h2 class="section-title">Restoration in Action</h2>
        <div class="comparison">
          <div class="comparison-item">
            <h3>Before Restoration</h3>
            <div class="comparison-image" style="
                background-image: url('<?= ASSETS ?>image/BeforeRestoration.png');
              "></div>
          </div>
          <div class="comparison-item">
            <h3>After Restoration</h3>
            <div class="comparison-image" style="
                background-image: url('<?= ASSETS ?>image/AfterRestoration.png');
              "></div>
          </div>
        </div>
      </div>
    </section>

    <!-- DONATION FORM -->
    <section class="donation-form-section" id="donate">
      <div class="container">
        <h2 class="section-title">Make Your Contribution</h2>

        <div class="form-container">

          <div class="form-steps">
            <div class="step active">
              <div class="step-number">1</div>
              <div class="step-label">Info</div>
            </div>
            <div class="step">
              <div class="step-number">2</div>
              <div class="step-label">Amount</div>
            </div>
            <div class="step">
              <div class="step-number">3</div>
              <div class="step-label">Payment</div>
            </div>
            <div class="step">
              <div class="step-number">4</div>
              <div class="step-label">Confirm</div>
            </div>
          </div>

          <form id="donationForm">

            <!-- STEP 1 -->
            <div class="step-content active" data-step="1">
              <h3>Your Information</h3>

              <div class="form-group">
                <label>Full Name</label>
                <input type="text" id="fullName" required>
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="email" id="email" required>
              </div>

              <div class="form-group">
                <label>Message</label>
                <input type="text" id="message">
              </div>

              <button type="button" class="btn-primary next-btn">Next</button>
            </div>

            <!-- STEP 2 -->
            <div class="step-content" data-step="2">
              <h3>Donation Amount</h3>

              <div class="form-group">
                <label>Amount (EGP)</label>
                <input type="number" id="amount" min="1" required>
              </div>

              <div class="form-nav">
                <button type="button" class="btn-secondary back-btn">Back</button>
                <button type="button" class="btn-primary next-btn">Next</button>
              </div>
            </div>

            <!-- STEP 3 -->
            <div class="step-content" data-step="3">
              <h3>Select Payment Method</h3>

              <div class="payment-methods">
                <button type="button" class="payment-btn" data-method="mobile">📱 Mobile Cash</button>
                <button type="button" class="payment-btn" data-method="instapay">⚡ InstaPay</button>
              </div>

              <input type="hidden" id="payment_method">

              <div class="form-nav">
                <button type="button" class="btn-secondary back-btn">Back</button>
                <button type="button" class="btn-primary next-btn">Next</button>
              </div>
            </div>

            <!-- STEP 4 -->
            <div class="step-content" data-step="4">
              <h3>Confirm Donation</h3>

              <div id="payment-info">
                <div id="mobile-info" class="payment-box" style="display:none;">
                  <h4>Mobile Cash</h4>
                  <strong>010 1234 5678</strong>
                </div>

                <div id="instapay-info" class="payment-box" style="display:none;">
                  <h4>InstaPay</h4>
                  <strong>GrandEgyptianMuseum</strong>
                </div>
              </div>

              <div class="form-nav">
                <button type="button" class="btn-secondary back-btn">Back</button>
                <button type="submit" class="btn-primary">Complete Donation</button>
              </div>
            </div>

          </form>

        </div>
      </div>
    </section>

    <!-- Trust Section -->
    <section class="trust">
      <div class="container">
        <h2 class="section-title">Trusted & Transparent</h2>
        <div class="trust-content">
          <p style="
              color: #c4b5a0;
              font-size: 1.1rem;
              margin-bottom: 30px;
              font-family: Arial, sans-serif;
            ">
            Your contribution is securely processed and directly supports museum
            preservation efforts. We are certified and accredited by
            international heritage organizations.
          </p>
        </div>
      </div>
    </section>

    <!-- Final CTA -->
    <section class="final-cta">
      <div class="container">
        <h2>Become a Guardian of Egyptian History</h2>
        <a href="#donate" class="btn-dark">Help Preserve Egypt's Legacy</a>
      </div>
    </section>

    <?php include VIEW_PATH . 'components/footer.php'; ?>

  </div>
  <!-- THANK YOU OVERLAY -->
  <div id="thankYouScreen" class="thank-you-screen">

    <div class="thank-you-card">
      <div class="thank-you-seal">GEM</div>

      <h1>Thank You</h1>
      <p class="thank-you-subtitle">
        Your generosity helps preserve<br>
        <span>7,000 years of Egyptian history</span>
      </p>

      <p class="thank-you-message">
        Because of supporters like you, our heritage will continue
        to inspire generations to come.
      </p>

      <a href="<?= BASE_URL ?>" class="thank-you-btn">
        Back to Home
      </a>

      <div class="thank-you-note">
        Feel free to share this moment 
      </div>
    </div>

  </div>




  <script>
    let currentStep = 1;

    const steps = document.querySelectorAll(".step-content");
    const indicators = document.querySelectorAll(".step");

    const paymentButtons = document.querySelectorAll(".payment-btn");
    const paymentInput = document.getElementById("payment_method");

    const mobileInfo = document.getElementById("mobile-info");
    const instapayInfo = document.getElementById("instapay-info");

    const form = document.getElementById("donationForm");

    /* =========================
       STEP HANDLING
    ========================== */

    function showStep(step) {
      steps.forEach(s => s.classList.remove("active"));
      indicators.forEach(i => i.classList.remove("active"));

      document.querySelector(`.step-content[data-step="${step}"]`)
        .classList.add("active");

      for (let i = 0; i < step; i++) {
        indicators[i].classList.add("active");
      }

      currentStep = step;
    }

    /* =========================
       VALIDATION PER STEP
    ========================== */

    function validateCurrentStep() {
      // STEP 1: Name & Email
      if (currentStep === 1) {
        const name = document.getElementById("fullName").value.trim();
        const email = document.getElementById("email").value.trim();

        if (!name || !email) {
          alert("Please enter your name and email.");
          return false;
        }
      }

      // STEP 2: Amount
      if (currentStep === 2) {
        const amount = document.getElementById("amount").value;

        if (!amount || amount <= 0) {
          alert("Please enter a valid donation amount.");
          return false;
        }
      }

      // STEP 3: Payment Method
      if (currentStep === 3) {
        if (!paymentInput.value) {
          alert("Please select a payment method.");
          return false;
        }
      }

      return true;
    }

    /* =========================
       NEXT / BACK BUTTONS
    ========================== */

    document.querySelectorAll(".next-btn").forEach(btn => {
      btn.onclick = () => {
        if (validateCurrentStep()) {
          showStep(currentStep + 1);
        }
      };
    });

    document.querySelectorAll(".back-btn").forEach(btn => {
      btn.onclick = () => showStep(currentStep - 1);
    });

    /* =========================
       PAYMENT METHOD
    ========================== */

    paymentButtons.forEach(btn => {
      btn.onclick = () => {
        paymentButtons.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

        paymentInput.value = btn.dataset.method;

        mobileInfo.style.display = "none";
        instapayInfo.style.display = "none";

        btn.dataset.method === "mobile"
          ? mobileInfo.style.display = "block"
          : instapayInfo.style.display = "block";
      };
    });

    /* =========================
       SUBMIT FORM
    ========================== */

    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      // Final validation (أمان زيادة)
      if (!validateCurrentStep()) return;

      const formData = new FormData();
      formData.append("name", document.getElementById("fullName").value.trim());
      formData.append("email", document.getElementById("email").value.trim());
      formData.append("amount", document.getElementById("amount").value);
      formData.append("message", document.getElementById("message").value);
      formData.append("payment_method", paymentInput.value);

      try {
        const res = await fetch("<?= BASE_URL ?>donations/store", {
          method: "POST",
          body: formData
        });

        const data = await res.json();

        if (data.success) {
          showThankYouAndRedirect();
        } else {
          alert(data.msg || "Something went wrong");
        }

      } catch (err) {
        console.error(err);
        alert("Server error");
      }
    });

    /* =========================
       THANK YOU + REDIRECT
    ========================== */

    function showThankYouAndRedirect() {
      document.querySelector(".documentNotNavbar").style.display = "none";
      document.getElementById("thankYouScreen").classList.add("active");



      // window.location.href = "<?= BASE_URL ?>";

    }

    showStep(1);
  </script>





  <?php include VIEW_PATH . 'components/ai.php'; ?>
  <script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>js/navbar.component.js"></script>
  <script src="<?= ASSETS ?>js/ai.js"></script>
</body>

</html>