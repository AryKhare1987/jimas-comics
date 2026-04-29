<?php require 'includes/header.php'; ?>

<div class="auth-wrap">
  <div class="auth-card">
    <div class="auth-header">
      <div class="auth-tag">Get started</div>
      <h1 class="auth-title">Join the <em style="font-style:italic;color:var(--red)">Emporium.</em></h1>
    </div>

    <form action="register.php" method="POST">
      <div class="form-field">
        <label class="form-label">Full name</label>
        <input type="text" name="name" class="form-input" placeholder="Jima Smith" required/>
      </div>
      <div class="form-field">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-input" placeholder="you@email.com" required/>
      </div>
      <div class="form-row">
        <div class="form-field">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-input" placeholder="Min. 8 chars" required/>
        </div>
        <div class="form-field">
          <label class="form-label">Confirm</label>
          <input type="password" name="confirm" class="form-input" placeholder="Repeat" required/>
        </div>
      </div>

      <div style="margin-bottom:1.5rem">
        <label style="display:flex;align-items:flex-start;gap:8px;font-size:0.78rem;color:var(--muted);cursor:pointer;line-height:1.5">
          <input type="checkbox" style="accent-color:var(--red);margin-top:2px;flex-shrink:0" required/>
          I agree to the Terms of Service and Privacy Policy
        </label>
      </div>

      <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;border-radius:100px">
        Create account →
      </button>
    </form>

    <div class="auth-footer">
      Already have an account? <a href="login.php">Sign in →</a>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
