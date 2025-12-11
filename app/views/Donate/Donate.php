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
                background-image: url('https://images.unsplash.com/photo-1553913861-c0fddf2619ee?w=800');
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
                background-image: url('https://images.unsplash.com/photo-1569025690938-a00729c9e1f9?w=800');
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
                background-image: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=800');
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
                background-image: url('https://images.unsplash.com/photo-1591696205602-2f950c417cb9?w=800');
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
                background-image: url('https://images.unsplash.com/photo-1565191999001-551c187427bb?w=800');
              "></div>
          </div>
          <div class="comparison-item">
            <h3>After Restoration</h3>
            <div class="comparison-image" style="
                background-image: url('https://images.unsplash.com/photo-1553913861-c0fddf2619ee?w=800');
              "></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Donation Form -->
    <section class="donation-form-section" id="donate">
      <div class="container">
        <h2 class="section-title">Make Your Contribution</h2>
        <div class="form-container">
          <div class="form-steps">
            <div class="step active">
              <div class="step-number">1</div>
              <div class="step-label">Information</div>
            </div>
            <div class="step">
              <div class="step-number">2</div>
              <div class="step-label">Amount</div>
            </div>
            <div class="step">
              <div class="step-number">3</div>
              <div class="step-label">Type</div>
            </div>
            <div class="step">
              <div class="step-number">4</div>
              <div class="step-label">Payment</div>
            </div>
          </div>

          <form id="donationForm">
            <div class="form-section">
              <h3>Your Information</h3>
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" id="fullName" placeholder="Enter your full name" required />
              </div>
              <div class="form-group">
                <label>Email Address</label>
                <input type="email" id="email" placeholder="your@email.com" required />
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" id="phone" placeholder="+20 xxx xxx xxxx" />
              </div>
            </div>

            <div class="form-section">
              <h3>Enter Donation Amount</h3>
              <div class="form-group">
                <label>Amount (EGP)</label>
                <input type="number" id="customAmount" placeholder="Enter your donation amount" min="1" required />
              </div>
            </div>

            <div class="form-section">
              <h3>Donation Type</h3>
              <div class="donation-type">
                <button type="button" class="type-btn active" data-type="onetime">
                  One-Time
                </button>
                <button type="button" class="type-btn" data-type="monthly">
                  Monthly
                </button>
              </div>
            </div>

            <div class="form-section">
              <h3>Payment Method</h3>
              <div class="payment-methods">
                <div class="payment-icon active" data-payment="card">
                  <span>Card</span>
                </div>

                <div class="payment-icon" data-payment="vodafone">
                  <span>Vodafone</span>
                </div>

                <div class="payment-icon" data-payment="instapay">
                  <span>InstaPay</span>
                </div>
              </div>

              <!-- Payment Details Section -->
              <div id="paymentDetails" style="margin-top: 30px">
                <!-- Card Payment -->
                <div id="cardPayment" class="payment-form">
                  <div class="form-group">
                    <label>Card Number</label>
                    <input type="text" placeholder="1234 5678 9012 3456" maxlength="19" />
                  </div>
                  <div style="
                      display: grid;
                      grid-template-columns: 1fr 1fr;
                      gap: 15px;
                    ">
                    <div class="form-group">
                      <label>Expiry Date</label>
                      <input type="text" placeholder="MM/YY" maxlength="5" />
                    </div>
                    <div class="form-group">
                      <label>CVV</label>
                      <input type="text" placeholder="123" maxlength="3" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Cardholder Name</label>
                    <input type="text" placeholder="Name on card" />
                  </div>
                </div>

                <!-- Vodafone Cash Payment -->
                <div id="vodafonePayment" class="payment-form" style="display: none">
                  <div style="
                      background: linear-gradient(135deg, #fff9f0, #ffffff);
                      border: 2px solid #d4af37;
                      border-radius: 15px;
                      padding: 25px;
                      text-align: center;
                    ">
                    <h4 style="
                        color: #d4af37;
                        margin-bottom: 15px;
                        font-size: 1.3rem;
                      ">
                      Transfer via Vodafone Cash
                    </h4>
                    <p style="
                        color: #666;
                        margin-bottom: 20px;
                        font-family: Arial, sans-serif;
                      ">
                      Please send your donation to:
                    </p>
                    <div style="
                        background: white;
                        padding: 20px;
                        border-radius: 10px;
                        margin-bottom: 20px;
                        border: 2px solid #f0f0f0;
                      ">
                      <p style="
                          color: #999;
                          font-size: 0.9rem;
                          margin-bottom: 5px;
                          font-family: Arial, sans-serif;
                        ">
                        Vodafone Cash Number
                      </p>
                      <p style="
                          color: #000;
                          font-size: 1.8rem;
                          font-weight: bold;
                          letter-spacing: 2px;
                          font-family: Arial, sans-serif;
                        ">
                        01012345678
                      </p>
                    </div>
                    <p style="
                        color: #d4af37;
                        font-size: 1.05rem;
                        line-height: 1.7;
                        font-family: 'Poppins', sans-serif;
                        font-weight: 500;
                        max-width: 600px;
                        margin-top: 10px;
                      ">
                      Your contribution plays a vital role in preserving Egypt’s
                      extraordinary heritage. Once your transfer is completed,
                      you will receive an official confirmation receipt. Thank
                      you for supporting our mission to safeguard the legacy of
                      the Grand Egyptian Museum.
                    </p>
                    payment-icon active
                  </div>
                </div>

                <!-- InstaPay Payment -->
                <div id="instapayPayment" class="payment-form" style="display: none">
                  <div style="
                      background: linear-gradient(135deg, #fff9f0, #ffffff);
                      border: 2px solid #d4af37;
                      border-radius: 15px;
                      padding: 25px;
                      text-align: center;
                    ">
                    <h4 style="
                        color: #d4af37;
                        margin-bottom: 15px;
                        font-size: 1.3rem;
                      ">
                      Transfer via InstaPay
                    </h4>
                    <p style="
                        color: #666;
                        margin-bottom: 20px;
                        font-family: Arial, sans-serif;
                      ">
                      Please send your donation to:
                    </p>
                    <div style="
                        background: white;
                        padding: 20px;
                        border-radius: 10px;
                        margin-bottom: 20px;
                        border: 2px solid #f0f0f0;
                      ">
                      <p style="
                          color: #999;
                          font-size: 0.9rem;
                          margin-bottom: 5px;
                          font-family: Arial, sans-serif;
                        ">
                        InstaPay Username
                      </p>
                      <p style="
                          color: #000;
                          font-size: 1.8rem;
                          font-weight: bold;
                          font-family: Arial, sans-serif;
                        ">
                        GrandEgyptianMuseum
                      </p>
                    </div>
                    <p style="
                        color: #d4af37;
                        font-size: 1rem;
                        line-height: 1.6;
                        font-family: Arial, sans-serif;
                      ">
                      Your generous support protects 7,000 years of Egyptian
                      history. Once you complete the transfer, we'll email you a
                      donation certificate. Together, we preserve our legacy!
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <button type="submit" class="btn-primary" style="width: 100%; margin-top: 30px">
              Complete Donation
            </button>
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

  <script>
    // Create sparkles in hero
    const hero = document.getElementById("hero");
    for (let i = 0; i < 30; i++) {
      const sparkle = document.createElement("div");
      sparkle.className = "sparkle";
      sparkle.style.left = Math.random() * 100 + "%";
      sparkle.style.top = Math.random() * 100 + "%";
      sparkle.style.animationDelay = Math.random() * 3 + "s";
      hero.appendChild(sparkle);
    }

    // Scroll animations
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = "1";
          entry.target.style.transform = "translateY(0)";
        }
      });
    });

    document
      .querySelectorAll(".card, .stat-item, .comparison-item")
      .forEach((el) => {
        el.style.opacity = "0";
        el.style.transform = "translateY(30px)";
        el.style.transition = "all 0.6s ease-out";
        observer.observe(el);
      });

    // Multi-step form navigation
    function goToStep(stepNumber) {
      // Hide all steps
      for (let i = 1; i <= 4; i++) {
        const step = document.getElementById("step" + i);
        if (step) step.style.display = "none";
      }

      // Show current step
      const currentStep = document.getElementById("step" + stepNumber);
      if (currentStep) currentStep.style.display = "block";

      // Update step indicators
      document.querySelectorAll(".step").forEach((step, index) => {
        if (index < stepNumber) {
          step.classList.add("active");
        } else {
          step.classList.remove("active");
        }
      });
    }

    // Multi-step form navigation
    function goToStep(stepNumber) {
      // Hide all steps
      for (let i = 1; i <= 4; i++) {
        const step = document.getElementById("step" + i);
        if (step) step.style.display = "none";
      }

      // Show current step
      const currentStep = document.getElementById("step" + stepNumber);
      if (currentStep) currentStep.style.display = "block";

      // Update step indicators
      document.querySelectorAll(".step").forEach((step, index) => {
        if (index < stepNumber) {
          step.classList.add("active");
        } else {
          step.classList.remove("active");
        }
      });
    }

    // Amount input validation
    const amountInput = document.getElementById("customAmount");
    if (amountInput) {
      amountInput.addEventListener("input", function () {
        if (this.value < 0) {
          this.value = 0;
        }
      });
    }

    // Donation type buttons
    document.querySelectorAll(".type-btn").forEach((btn) => {
      btn.addEventListener("click", function () {
        document
          .querySelectorAll(".type-btn")
          .forEach((b) => b.classList.remove("active"));
        this.classList.add("active");
      });
    });

    // Payment method selection with form switching
    document.querySelectorAll(".payment-icon").forEach((icon) => {
      icon.addEventListener("click", function () {
        // Remove active from all icons
        document
          .querySelectorAll(".payment-icon")
          .forEach((i) => i.classList.remove("active"));
        this.classList.add("active");

        // Hide all payment forms
        const cardForm = document.getElementById("cardPayment");
        const vodafoneForm = document.getElementById("vodafonePayment");
        const instapayForm = document.getElementById("instapayPayment");

        if (cardForm) cardForm.style.display = "none";
        if (vodafoneForm) vodafoneForm.style.display = "none";
        if (instapayForm) instapayForm.style.display = "none";

        // Show selected payment form
        const paymentType = this.getAttribute("data-payment");
        if (paymentType === "card" && cardForm) {
          cardForm.style.display = "block";
        } else if (paymentType === "vodafone" && vodafoneForm) {
          vodafoneForm.style.display = "block";
        } else if (paymentType === "instapay" && instapayForm) {
          instapayForm.style.display = "block";
        }
      });
    });

    // Form submission
    document
      .getElementById("donationForm")
      .addEventListener("submit", function (e) {
        e.preventDefault();
        alert(
          "Thank you for your generous donation! Together, we preserve Egypt's magnificent heritage for future generations. 🏛️✨"
        );
      });

    // Smooth scrolling
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
          target.scrollIntoView({ behavior: "smooth", block: "start" });
        }
      });
    });
  </script>

  <?php include VIEW_PATH . 'components/ai.php'; ?>
  <script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>js/navbar.component.js"></script>
  <script src="<?= ASSETS ?>js/ai.js"></script>
</body>

</html>