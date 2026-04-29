<?php require 'includes/header.php'; ?>

<div class="page-header">
  <div class="breadcrumb"><a href="index.php">Home</a> / <a href="cart.php">Cart</a> / <span>Checkout</span></div>
  <h1 class="page-title"><em>Checkout</em></h1>
</div>

<div class="checkout-wrap">
  <div>
    <!-- Contact -->
    <div class="checkout-block">
      <div class="checkout-block-title">Contact information</div>
      <div class="form-row">
        <div class="form-field">
          <label class="form-label">First name</label>
          <input type="text" class="form-input" placeholder="Jima"/>
        </div>
        <div class="form-field">
          <label class="form-label">Last name</label>
          <input type="text" class="form-input" placeholder="Smith"/>
        </div>
      </div>
      <div class="form-field">
        <label class="form-label">Email</label>
        <input type="email" class="form-input" placeholder="jima@email.com"/>
      </div>
      <div class="form-field">
        <label class="form-label">Phone (optional)</label>
        <input type="tel" class="form-input" placeholder="(555) 000-0000"/>
      </div>
    </div>

    <!-- Shipping -->
    <div class="checkout-block">
      <div class="checkout-block-title">Shipping address</div>
      <div class="form-field">
        <label class="form-label">Address</label>
        <input type="text" class="form-input" placeholder="123 Main Street"/>
      </div>
      <div class="form-row">
        <div class="form-field">
          <label class="form-label">City</label>
          <input type="text" class="form-input" placeholder="New York"/>
        </div>
        <div class="form-field">
          <label class="form-label">State</label>
          <input type="text" class="form-input" placeholder="NY"/>
        </div>
      </div>
      <div class="form-field">
        <label class="form-label">ZIP Code</label>
        <input type="text" class="form-input" placeholder="10001"/>
      </div>
    </div>

    <!-- Payment -->
    <div class="checkout-block">
      <div class="checkout-block-title">Payment</div>
      <div class="form-field">
        <label class="form-label">Card number</label>
        <input type="text" class="form-input" placeholder="•••• •••• •••• ••••" maxlength="19"/>
      </div>
      <div class="form-row">
        <div class="form-field">
          <label class="form-label">Expiry</label>
          <input type="text" class="form-input" placeholder="MM / YY" maxlength="7"/>
        </div>
        <div class="form-field">
          <label class="form-label">CVV</label>
          <input type="text" class="form-input" placeholder="•••" maxlength="4"/>
        </div>
      </div>
      <div class="form-field">
        <label class="form-label">Name on card</label>
        <input type="text" class="form-input" placeholder="Jima Smith"/>
      </div>
    </div>
  </div>

  <!-- Summary sidebar -->
  <div>
    <div class="summary-box">
      <div class="summary-title">Your order</div>

      <div style="display:flex;flex-direction:column;gap:0.8rem;margin-bottom:1.2rem;padding-bottom:1.2rem;border-bottom:1px solid var(--border)">
        <div style="display:flex;justify-content:space-between;font-size:0.82rem">
          <span style="color:var(--muted)">Attack on Titan ×2</span>
          <span>$25.98</span>
        </div>
        <div style="display:flex;justify-content:space-between;font-size:0.82rem">
          <span style="color:var(--muted)">Batman: Year One ×1</span>
          <span>$16.99</span>
        </div>
        <div style="display:flex;justify-content:space-between;font-size:0.82rem">
          <span style="color:var(--muted)">Saga Vol. 1 ×1</span>
          <span>$14.99</span>
        </div>
      </div>

      <div class="summary-row"><span>Subtotal</span><span>$57.96</span></div>
      <div class="summary-row"><span>Shipping</span><span style="color:var(--red)">Free</span></div>

      <div class="summary-total">
        <span>Total</span>
        <span>$57.96</span>
      </div>

      <button class="btn btn-red" style="width:100%;justify-content:center;margin-top:1.5rem;border-radius:100px" onclick="alert('Order placed! Thank you for shopping at Jima\'s Comic Book Emporium!')">
        Place order
      </button>

      <p style="text-align:center;margin-top:1rem;font-size:0.72rem;color:var(--muted)">
        🔒 256-bit SSL encrypted · Secure payment
      </p>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
