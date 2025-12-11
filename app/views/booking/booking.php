<?php
require_once APP_PATH . '/config/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Your Tickets - Grand Egyptian Museum</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/bootstrap.min.css" />
  <!-- css components -->
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/navbar.component.css">
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/footer-section.component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/components/ai-component.css" />
  <link rel="stylesheet" href="<?= ASSETS ?>css/booking.css">
</head>

<body>
  <?php include VIEW_PATH . 'components/navbar.php'; ?>
  <div class="documentNotNavbar">
      <div style="width:100%;height:60px"></div>
    <div class="hero">
      <div class="hero-content">
        <h1>Book Your Tickets</h1>
        <p>Choose your tickets and complete your reservation easily</p>
      </div>
    </div>

    <div class="container">
      <div class="experience-card">
        <div class="experience-header">
          <div class="experience-icon">
            <img class="w-100" src="<?= ASSETS ?>image/logo.png" alt="" />
          </div>
          <div class="experience-details">
            <h2>Grand Egyptian Museum Tour</h2>
            <div class="experience-meta">
              <span><i class="fa-solid fa-building-columns"></i> Museum Visit</span>
              <span><i class="fa-solid fa-clock"></i> 2 Hours</span>
              <span><i class="fa-regular fa-money-bill-1"></i> From 75 EGP</span>
            </div>
            <p class="experience-desc">
              Explore the magnificent Grand Egyptian Museum, home to over
              100,000 artifacts including the complete Tutankhamun collection.
              Experience ancient Egyptian civilization through state-of-the-art
              displays and interactive exhibits.
            </p>
          </div>
        </div>
      </div>

      <div class="main-grid">
        <div class="left-column">
          <div class="section">
            <h2 class="section-title"><i class="fa-solid fa-ticket"></i> Select Your Tickets</h2>

            <div class="ticket-row">
              <div class="ticket-info">
                <div class="ticket-icon">
                  <i class="fa-solid fa-user"></i>
                </div>
                <div class="ticket-details">
                  <h3>Adult Ticket</h3>
                  <div class="ticket-price">150 EGP</div>
                </div>
              </div>
              <div class="ticket-counter">
                <button class="counter-btn" onclick="updateTicket('adult', -1)">
                  −
                </button>
                <span class="counter-value" id="adult-count">0</span>
                <button class="counter-btn" onclick="updateTicket('adult', 1)">
                  +
                </button>
              </div>
            </div>

            <div class="ticket-row">
              <div class="ticket-info">
                <div class="ticket-icon">
                  <i class="fa-solid fa-children"></i>
                </div>
                <div class="ticket-details">
                  <h3>Child Ticket</h3>
                  <div class="ticket-price">75 EGP</div>
                </div>
              </div>
              <div class="ticket-counter">
                <button class="counter-btn" onclick="updateTicket('child', -1)">
                  −
                </button>
                <span class="counter-value" id="child-count">0</span>
                <button class="counter-btn" onclick="updateTicket('child', 1)">
                  +
                </button>
              </div>
            </div>

            <div class="ticket-row">
              <div class="ticket-info">
                <div class="ticket-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                <div class="ticket-details">
                  <h3>Student Ticket</h3>
                  <div class="ticket-price">100 EGP</div>
                </div>
              </div>
              <div class="ticket-counter">
                <button class="counter-btn" onclick="updateTicket('student', -1)">
                  −
                </button>
                <span class="counter-value" id="student-count">0</span>
                <button class="counter-btn" onclick="updateTicket('student', 1)">
                  +
                </button>
              </div>
            </div>
          </div>

          <div class="section">
            <h2 class="section-title"><i class="fa-solid fa-circle-dollar-to-slot"></i> Promo Code</h2>
            <div class="promo-section">
              <input type="text" class="promo-input" id="promo-code" placeholder="Enter promo code" />
              <button class="promo-btn" onclick="applyPromo()">Apply</button>
            </div>
            <div class="promo-message" id="promo-message"></div>
          </div>

          <div class="section">
            <h2 class="section-title"><i class="fa-solid fa-circle-info"></i> Your Information</h2>
            <form class="form-grid">
              <div class="form-group">
                <label>Full Name *</label>
                <input type="text" required placeholder="Enter your full name" />
              </div>
              <div class="form-group">
                <label>Email *</label>
                <input type="email" required placeholder="your.email@example.com" />
              </div>
              <div class="form-group">
                <label>Phone Number *</label>
                <input type="tel" required placeholder="+20 XXX XXX XXXX" />
              </div>
              <div class="form-group">
                <label>Visit Date *</label>
                <input type="date" required />
              </div>
              <div class="form-group full">
                <label>Visit Time *</label>
                <input type="time" required />
              </div>
              <div class="form-group full">
                <label>Additional Notes (Optional)</label>
                <textarea placeholder="Any special requests or information..."></textarea>
              </div>
            </form>
          </div>
        </div>

        <div style="" class="summary-sidebar">
          <div class="summary-card">
            <h3 class="summary-title">Booking Summary</h3>

            <div id="ticket-summary"></div>

            <div class="summary-divider"></div>

            <div class="summary-item">
              <span>Subtotal:</span>
              <span id="subtotal">0 EGP</span>
            </div>

            <div class="summary-item discount" id="discount-row" style="display: none">
              <span>Discount:</span>
              <span id="discount-amount">0 EGP</span>
            </div>

            <div class="summary-item total">
              <span>Total:</span>
              <span id="total">0 EGP</span>
            </div>

            <button class="book-btn" onclick="proceedToPayment()">
              Proceed to Payment
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php include VIEW_PATH . 'components/footer.php'; ?>
  </div>

  <script>
    const tickets = {
      adult: { price: 150, count: 0, name: "Adult Ticket" },
      child: { price: 75, count: 0, name: "Child Ticket" },
      student: { price: 100, count: 0, name: "Student Ticket" },
    };

    let discountPercent = 0;
    let promoApplied = false;

    function updateTicket(type, change) {
      tickets[type].count = Math.max(0, tickets[type].count + change);
      document.getElementById(`${type}-count`).textContent =
        tickets[type].count;
      updateSummary();
    }

    function updateSummary() {
      let summaryHTML = "";
      let subtotal = 0;

      for (let type in tickets) {
        if (tickets[type].count > 0) {
          const lineTotal = tickets[type].count * tickets[type].price;
          subtotal += lineTotal;
          summaryHTML += `
                        <div class="summary-item ticket-line">
                            <span>${tickets[type].name} × ${tickets[type].count}</span>
                            <span>${lineTotal} EGP</span>
                        </div>
                    `;
        }
      }

      if (summaryHTML === "") {
        summaryHTML =
          '<div class="summary-item ticket-line" style="text-align: center; color: #999;">No tickets selected</div>';
      }

      document.getElementById("ticket-summary").innerHTML = summaryHTML;
      document.getElementById("subtotal").textContent = `${subtotal} EGP`;

      const discount = Math.round(subtotal * (discountPercent / 100));
      const total = subtotal - discount;

      if (discount > 0) {
        document.getElementById("discount-row").style.display = "flex";
        document.getElementById(
          "discount-amount"
        ).textContent = `-${discount} EGP`;
      } else {
        document.getElementById("discount-row").style.display = "none";
      }

      document.getElementById("total").textContent = `${total} EGP`;
    }

    function applyPromo() {
      const promoCode = document
        .getElementById("promo-code")
        .value.toUpperCase();
      const messageEl = document.getElementById("promo-message");

      if (promoCode === "GEM10") {
        discountPercent = 10;
        promoApplied = true;
        messageEl.className = "promo-message success";
        messageEl.textContent = "✓ Promo code applied! You saved 10%";
      } else if (promoCode === "") {
        messageEl.className = "promo-message error";
        messageEl.textContent = "✗ Please enter a promo code";
      } else {
        discountPercent = 0;
        promoApplied = false;
        messageEl.className = "promo-message error";
        messageEl.textContent = "✗ Invalid promo code";
      }

      updateSummary();
    }

    function proceedToPayment() {
      const totalTickets =
        tickets.adult.count + tickets.child.count + tickets.student.count;

      if (totalTickets === 0) {
        alert("Please select at least one ticket");
        return;
      }

      const total = document.getElementById("total").textContent;
      alert(
        `Processing payment for ${total}...\n\nThis would redirect to payment gateway.`
      );
    }

    updateSummary();
  </script>
  <?php include VIEW_PATH . 'components/ai.php'; ?>
  <script src="<?= ASSETS ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= ASSETS ?>js/navbar.component.js"></script>
  <script src="<?= ASSETS ?>js/ai.js"></script>
</body>

</html>