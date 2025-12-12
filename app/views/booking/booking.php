<?php
require_once APP_PATH . '/config/config.php';

// قراءة plan_id من URL
$planId = $_GET['plan'] ?? null;
$selectedPlan = null;

if ($planId) {
    require_once APP_PATH . "/models/Plan.php";
    $selectedPlan = Plan::find($planId);
}

// لو مفيش خطة → السعر الأساسي 150
$basePrice = $selectedPlan ? (float)$selectedPlan['price'] : 150.00;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>Book Your Tickets - Grand Egyptian Museum</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/footer-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/ai-component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/booking.css">
  <style>
    /* تعديل عرض الفورم داخليًا قليلًا بحيث يشتغل مع CSSك */
    .booking-container { padding-bottom: 3rem; }
    .bottom-summary { margin-top: 1.8rem; }
    .small-note { font-size: 0.9rem; color: #666; margin-top: 0.4rem; }
  </style>
</head>
<body>
  <?php include VIEW_PATH . 'components/navbar.php'; ?>

  <div class="documentNotNavbar">
    <div style="height:60px"></div>

    <!-- HERO -->
    <div class="hero">
      <div class="hero-content">
        <h1>Book Your Tickets</h1>
        <p>Choose your tickets and complete your reservation easily</p>
      </div>
    </div>

    <div class="container booking-container">

      <!-- Plan card (optional) -->
      <?php if ($selectedPlan): ?>
        <div class="experience-card">
          <div class="experience-header">
            <div class="experience-icon">
              <img class="w-100" src="<?= htmlspecialchars($selectedPlan['image']) ?>" alt="">
            </div>
            <div class="experience-details">
              <h2><?= htmlspecialchars($selectedPlan['name']) ?></h2>
              <div class="experience-meta">
                <span><i class="fa-solid fa-building-columns"></i> <?= htmlspecialchars($selectedPlan['halls_count']) ?> Halls</span>
                <span><i class="fa-solid fa-clock"></i> <?= htmlspecialchars($selectedPlan['duration']) ?></span>
                <span><i class="fa-regular fa-money-bill-1"></i> From <?= number_format($selectedPlan['price'],2) ?> EGP</span>
              </div>
              <p class="experience-desc"><?= nl2br(htmlspecialchars($selectedPlan['description'])) ?></p>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <!-- FORM: جميع الحقول داخل نفس الفورم -->
      <form id="bookingForm" class="booking-form" method="POST" action="<?= BASE_URL ?>booking/submit">
        <div class="main-grid">

          <!-- LEFT: Tickets + User info -->
          <div class="left-column">

            <!-- Tickets -->
            <div class="section">
              <h2 class="section-title"><i class="fa-solid fa-ticket"></i> Select Your Tickets</h2>

              <!-- Adult -->
              <div class="ticket-row">
                <div class="ticket-info">
                  <div class="ticket-icon"><i class="fa-solid fa-user"></i></div>
                  <div class="ticket-details">
                    <h3>Adult</h3>
                    <div class="ticket-price" id="adult-price"></div>
                    <div class="small-note">Full price (no discount)</div>
                  </div>
                </div>
                <div class="ticket-counter">
                  <button type="button" class="counter-btn" onclick="updateTicket('adult', -1)">−</button>
                  <span class="counter-value" id="adult-count">0</span>
                  <button type="button" class="counter-btn" onclick="updateTicket('adult', 1)">+</button>
                </div>
              </div>

              <!-- Child -->
              <div class="ticket-row">
                <div class="ticket-info">
                  <div class="ticket-icon"><i class="fa-solid fa-children"></i></div>
                  <div class="ticket-details">
                    <h3>Child</h3>
                    <div class="ticket-price" id="child-price"></div>
                    <div class="small-note">Childs pay 40% of base price (60% discount)</div>
                  </div>
                </div>
                <div class="ticket-counter">
                  <button type="button" class="counter-btn" onclick="updateTicket('child', -1)">−</button>
                  <span class="counter-value" id="child-count">0</span>
                  <button type="button" class="counter-btn" onclick="updateTicket('child', 1)">+</button>
                </div>
              </div>

              <!-- Student -->
              <div class="ticket-row">
                <div class="ticket-info">
                  <div class="ticket-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                  <div class="ticket-details">
                    <h3>Student</h3>
                    <div class="ticket-price" id="student-price"></div>
                    <div class="small-note">Students pay 70% of base price (30% discount)</div>
                  </div>
                </div>
                <div class="ticket-counter">
                  <button type="button" class="counter-btn" onclick="updateTicket('student', -1)">−</button>
                  <span class="counter-value" id="student-count">0</span>
                  <button type="button" class="counter-btn" onclick="updateTicket('student', 1)">+</button>
                </div>
              </div>
            </div>

            <!-- Promo -->
            <div class="section">
              <h2 class="section-title"><i class="fa-solid fa-tag"></i> Promo Code</h2>
              <div class="promo-section">
                <input type="text" class="promo-input" id="promo-code" placeholder="Enter promo code (e.g. GEM10)">
                <button type="button" class="promo-btn" onclick="applyPromo()">Apply</button>
              </div>
              <div id="promo-message" class="promo-message" style="display:none"></div>
            </div>

            <!-- User Info -->
            <div class="section">
              <h2 class="section-title"><i class="fa-solid fa-circle-info"></i> Your Information</h2>
              <div class="form-grid">
                <div class="form-group">
                  <label>Full Name *</label>
                  <input type="text" name="full_name" required>
                </div>

                <div class="form-group">
                  <label>Email *</label>
                  <input type="email" name="email" required>
                </div>

                <div class="form-group">
                  <label>Phone *</label>
                  <input type="tel" name="phone" required>
                </div>

                <div class="form-group">
                  <label>Visit Date *</label>
                  <input type="date" name="visit_date" required>
                </div>

                <div class="form-group full">
                  <label>Visit Time *</label>
                  <input type="time" name="visit_time" required>
                </div>

                <div class="form-group full">
                  <label>Notes (optional)</label>
                  <textarea name="notes"></textarea>
                </div>

                <!-- Hidden inputs (set by JS) -->
                <input type="hidden" name="plan_id" value="<?= htmlspecialchars($planId) ?>">
                <input type="hidden" name="base_price" id="base_price_field" value="<?= number_format($basePrice,2,'.','') ?>">
                <input type="hidden" name="tickets_adult" id="tickets_adult" value="0">
                <input type="hidden" name="tickets_child" id="tickets_child" value="0">
                <input type="hidden" name="tickets_student" id="tickets_student" value="0">
                <input type="hidden" name="total_tickets" id="total_tickets" value="0">
                <input type="hidden" name="total_price" id="final-price" value="0.00">

              </div>
            </div>

          </div> <!-- end left-column -->

          <!-- RIGHT column intentionally left empty (we put summary at bottom per request) -->
          <div></div>

        </div> <!-- end main-grid -->

        <!-- BOTTOM SUMMARY (under the form fields) -->
        <div class="bottom-summary">
          <div class="summary-card" style="max-width:900px;margin:0 auto;">
            <h3 class="summary-title">Booking Summary</h3>

            <div id="ticket-summary"></div>

            <div class="summary-divider"></div>

            <div class="summary-item">
              <span>Subtotal:</span>
              <span id="subtotal">0 EGP</span>
            </div>

            <div class="summary-item">
              <span>Discount:</span>
              <span id="discount-amount">0 EGP</span>
            </div>

            <?php if ($selectedPlan): ?>
            <div class="summary-item">
              <span>Plan Base Price:</span>
              <span><?= number_format($basePrice,2) ?> EGP</span>
            </div>
            <?php endif; ?>

            <div class="summary-item total">
              <span>Total:</span>
              <span id="total">0 EGP</span>
            </div>

            <div style="margin-top:12px; text-align:center;">
              <button class="book-btn" type="submit">Proceed to Payment</button>
            </div>

            <p class="small-note" style="text-align:center;margin-top:10px;">
            سيتم ارسال تذكرتك على الايميل الخاص بك يرجى الدفع من خلاله
            </p>
          </div>
        </div>

      </form> <!-- end form -->

    </div> <!-- end container -->

    <?php include VIEW_PATH . 'components/footer.php'; ?>
  </div>

  <!-- ============================
       JS (تأكد أنه لا توجد أخطاء)
  ============================ -->
  <script>
    // basePrice من الـ PHP
    const basePrice = parseFloat("<?= number_format($basePrice,2,'.','') ?>");

    // خصومات: child 40% of base, student 70%, adult 100%
    const tickets = {
      adult:   { price: basePrice, count: 0, name: "Adult" },
      child:   { price: Math.round(basePrice * 0.40), count: 0, name: "Child" },
      student: { price: Math.round(basePrice * 0.70), count: 0, name: "Student" },
    };

    let discountPercent = 0; // from promo
    let promoApplied = false;

    // init prices on DOM ready
    document.addEventListener("DOMContentLoaded", () => {
      document.getElementById("adult-price").textContent = tickets.adult.price + " EGP";
      document.getElementById("child-price").textContent = tickets.child.price + " EGP";
      document.getElementById("student-price").textContent = tickets.student.price + " EGP";

      updateSummary();
    });

    function updateTicket(type, change) {
      tickets[type].count = Math.max(0, tickets[type].count + change);
      document.getElementById(type + "-count").textContent = tickets[type].count;
      updateSummary();
    }

    function applyPromo() {
      const code = document.getElementById("promo-code").value.trim().toUpperCase();
      const msg = document.getElementById("promo-message");

      if (!code) {
        promoApplied = false;
        discountPercent = 0;
        msg.style.display = "block";
        msg.className = "promo-message error";
        msg.textContent = "✗ Please enter a code";
        updateSummary();
        return;
      }

      // مثال بسيط: GEM10 => 10%
      if (code === "GEM10") {
        promoApplied = true;
        discountPercent = 10;
        msg.style.display = "block";
        msg.className = "promo-message success";
        msg.textContent = "✓ Promo applied: 10% off";
      } else {
        promoApplied = false;
        discountPercent = 0;
        msg.style.display = "block";
        msg.className = "promo-message error";
        msg.textContent = "✗ Invalid code";
      }
      updateSummary();
    }

    function updateSummary() {
      let summaryHTML = "";
      let subtotal = 0;

      for (let key in tickets) {
        const t = tickets[key];
        if (t.count > 0) {
          const line = t.count * t.price;
          subtotal += line;
          summaryHTML += `<div class="summary-item ticket-line">
                            <span>${t.name} × ${t.count}</span>
                            <span>${line} EGP</span>
                          </div>`;
        }
      }

      if (!summaryHTML) {
        summaryHTML = `<p style="text-align:center;color:#777;">No tickets selected</p>`;
      }

      // احتساب الخصم (من الـ subtotal فقط)
      const discount = Math.round(subtotal * (discountPercent / 100));
      const total = subtotal - discount;

      // عرض القيم
      document.getElementById("ticket-summary").innerHTML = summaryHTML;
      document.getElementById("subtotal").textContent = subtotal + " EGP";
      document.getElementById("discount-amount").textContent = "-" + discount + " EGP";
      document.getElementById("total").textContent = total + " EGP";

      // تعبئة الحقول المخفية قبل الإرسال
      document.getElementById("tickets_adult").value = tickets.adult.count;
      document.getElementById("tickets_child").value = tickets.child.count;
      document.getElementById("tickets_student").value = tickets.student.count;
      document.getElementById("total_tickets").value = (tickets.adult.count + tickets.child.count + tickets.student.count);
      // final price = total (after discount)
      document.getElementById("final-price").value = total.toFixed(2);
    }

    // Optional: prevent double-submit (simple)
    document.getElementById('bookingForm').addEventListener('submit', function (e) {
      // ensure at least one ticket
      const totalTickets = parseInt(document.getElementById("total_tickets").value, 10) || 0;
      if (totalTickets === 0) {
        e.preventDefault();
        alert("Please select at least one ticket before proceeding.");
        return false;
      }

      // disable submit button to prevent duplicates
      const btn = this.querySelector('button[type="submit"]');
      if (btn) {
        btn.disabled = true;
        btn.textContent = "Processing...";
      }
    });
  </script>

  <?php include VIEW_PATH . 'components/ai.php'; ?>
  <script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>js/navbar.component.js"></script>
  <script src="<?= ASSETS ?>js/ai.js"></script>
</body>
</html>
