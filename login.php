<?php require 'includes/header.php'; ?>

<div class="auth-wrap">
  <div class="auth-card">
    <div class="auth-header">
      <div class="auth-tag">Welcome back</div>
      <h1 class="auth-title">Sign <em style="font-style:italic;color:var(--red)">in.</em></h1>
    </div>

    <?php if (isset($_GET['registered'])): ?>
    <p style="color:var(--red);font-size:0.8rem;margin-bottom:1rem;font-style:italic">
      Account created — please sign in.
    </p>
    <?php endif; ?>

    <form action="login.php" method="POST">
      <div class="form-field">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-input" placeholder="you@email.com" required/>
      </div>
      <div class="form-field">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-input" placeholder="••••••••" required/>
      </div>

      <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:1.5rem">
        <label style="display:flex;align-items:center;gap:6px;font-size:0.78rem;color:var(--muted);cursor:pointer">
          <input type="checkbox" style="accent-color:var(--red)"/> Remember me
        </label>
        <a href="#" style="font-size:0.78rem;color:var(--red)">Forgot password?</a>
      </div>

      <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;border-radius:100px">
        Sign in →
      </button>
    </form>

    <div class="auth-footer">
      No account? <a href="register.php">Create one →</a>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
