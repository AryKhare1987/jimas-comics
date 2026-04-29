@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,300&family=Playfair+Display:wght@700;900&family=DM+Mono:wght@400;500&display=swap');

:root {
  --bg:       #0c0c0c;
  --surface:  #141414;
  --surface2: #1c1c1c;
  --border:   rgba(255,255,255,0.08);
  --border2:  rgba(255,255,255,0.14);
  --red:      #e5352b;
  --red-soft: rgba(229,53,43,0.12);
  --white:    #f2f0eb;
  --muted:    rgba(242,240,235,0.45);
  --muted2:   rgba(242,240,235,0.22);
  --font-sans: 'DM Sans', sans-serif;
  --font-serif:'Playfair Display', serif;
  --font-mono: 'DM Mono', monospace;
  --radius-sm: 6px;
  --radius:    12px;
  --radius-lg: 20px;
  --transition: 0.2s cubic-bezier(0.4,0,0.2,1);
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
html { scroll-behavior: smooth; }

body {
  background: var(--bg);
  color: var(--white);
  font-family: var(--font-sans);
  font-size: 15px;
  line-height: 1.6;
  font-weight: 300;
  -webkit-font-smoothing: antialiased;
  overflow-x: hidden;
}

a { color: inherit; text-decoration: none; }

/* ── NAV ── */
nav {
  position: sticky;
  top: 0;
  z-index: 200;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 2rem;
  background: rgba(12,12,12,0.85);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border-bottom: 1px solid var(--border);
}

.nav-logo {
  font-family: var(--font-serif);
  font-size: 1.15rem;
  font-weight: 700;
  letter-spacing: -0.02em;
  color: var(--white);
  display: flex;
  align-items: center;
  gap: 8px;
}

.nav-logo-dot {
  width: 7px; height: 7px;
  background: var(--red);
  border-radius: 50%;
  display: inline-block;
}

.nav-links {
  display: flex;
  gap: 2rem;
  list-style: none;
}

.nav-links a {
  font-size: 0.82rem;
  font-weight: 400;
  letter-spacing: 0.04em;
  color: var(--muted);
  transition: color var(--transition);
  text-transform: uppercase;
}

.nav-links a:hover, .nav-links a.active { color: var(--white); }

.nav-right {
  display: flex;
  align-items: center;
  gap: 1rem;
}

.nav-link-sm {
  font-size: 0.82rem;
  color: var(--muted);
  text-transform: uppercase;
  letter-spacing: 0.04em;
  transition: color var(--transition);
}

.nav-link-sm:hover { color: var(--white); }

.btn-nav {
  background: var(--white);
  color: var(--bg);
  font-family: var(--font-sans);
  font-size: 0.78rem;
  font-weight: 500;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  padding: 8px 18px;
  border-radius: 100px;
  border: none;
  cursor: pointer;
  transition: opacity var(--transition);
  display: inline-block;
}

.btn-nav:hover { opacity: 0.85; }

.cart-btn {
  position: relative;
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 0.82rem;
  color: var(--muted);
  text-transform: uppercase;
  letter-spacing: 0.04em;
  cursor: pointer;
  transition: color var(--transition);
}

.cart-btn:hover { color: var(--white); }

.cart-count {
  background: var(--red);
  color: white;
  font-size: 0.6rem;
  font-weight: 600;
  width: 16px; height: 16px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* ── HERO ── */
.hero {
  min-height: 88vh;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  padding: 0 2.5rem 4rem;
  position: relative;
  overflow: hidden;
  border-bottom: 1px solid var(--border);
}

.hero-bg {
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse 60% 50% at 70% 40%, rgba(229,53,43,0.07) 0%, transparent 70%),
    radial-gradient(ellipse 40% 60% at 20% 60%, rgba(229,53,43,0.04) 0%, transparent 60%);
}

.hero-grid-lines {
  position: absolute;
  inset: 0;
  background-image:
    linear-gradient(to right, var(--border) 1px, transparent 1px),
    linear-gradient(to bottom, var(--border) 1px, transparent 1px);
  background-size: 80px 80px;
  mask-image: radial-gradient(ellipse at center, black 30%, transparent 80%);
}

.hero-eyebrow {
  font-family: var(--font-mono);
  font-size: 0.72rem;
  color: var(--red);
  letter-spacing: 0.1em;
  text-transform: uppercase;
  margin-bottom: 1.5rem;
  display: flex;
  align-items: center;
  gap: 10px;
}

.hero-eyebrow::before {
  content: '';
  display: inline-block;
  width: 28px; height: 1px;
  background: var(--red);
}

.hero-title {
  font-family: var(--font-serif);
  font-size: clamp(3rem, 7vw, 6rem);
  font-weight: 900;
  line-height: 1.0;
  letter-spacing: -0.03em;
  color: var(--white);
  max-width: 700px;
  margin-bottom: 2rem;
  position: relative;
  z-index: 1;
}

.hero-title em {
  font-style: italic;
  color: var(--red);
}

.hero-bottom {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 2rem;
  position: relative;
  z-index: 1;
}

.hero-sub {
  font-size: 0.9rem;
  color: var(--muted);
  max-width: 340px;
  line-height: 1.7;
  font-weight: 300;
}

.hero-ctas {
  display: flex;
  gap: 0.8rem;
  align-items: center;
  flex-shrink: 0;
}

/* ── BUTTONS ── */
.btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--font-sans);
  font-size: 0.82rem;
  font-weight: 500;
  letter-spacing: 0.04em;
  text-transform: uppercase;
  padding: 12px 24px;
  border-radius: 100px;
  border: none;
  cursor: pointer;
  transition: all var(--transition);
  white-space: nowrap;
}

.btn-primary {
  background: var(--white);
  color: var(--bg);
}

.btn-primary:hover { background: var(--red); color: var(--white); }

.btn-ghost {
  background: transparent;
  color: var(--muted);
  border: 1px solid var(--border2);
}

.btn-ghost:hover { color: var(--white); border-color: rgba(255,255,255,0.3); }

.btn-red {
  background: var(--red);
  color: var(--white);
}

.btn-red:hover { background: #c2271e; }

/* ── TICKER ── */
.ticker {
  background: var(--red);
  height: 38px;
  overflow: hidden;
  display: flex;
  align-items: center;
}

.ticker-track {
  display: flex;
  animation: ticker 25s linear infinite;
  white-space: nowrap;
}

.ticker-track span {
  font-family: var(--font-mono);
  font-size: 0.72rem;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: white;
  padding: 0 2rem;
  opacity: 0.9;
}

.ticker-track span::after { content: '·'; margin-left: 2rem; }

@keyframes ticker {
  from { transform: translateX(0); }
  to   { transform: translateX(-50%); }
}

/* ── SECTION ── */
.section { padding: 5rem 2.5rem; }

.section-label {
  font-family: var(--font-mono);
  font-size: 0.7rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--muted);
  margin-bottom: 0.6rem;
  display: flex;
  align-items: center;
  gap: 10px;
}

.section-label::before {
  content: '';
  width: 20px; height: 1px;
  background: var(--muted2);
}

.section-title {
  font-family: var(--font-serif);
  font-size: clamp(1.8rem, 3vw, 2.6rem);
  font-weight: 700;
  letter-spacing: -0.02em;
  color: var(--white);
  margin-bottom: 0.3rem;
}

.section-title em { font-style: italic; color: var(--red); }

.section-head {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  margin-bottom: 2.5rem;
  padding-bottom: 1.5rem;
  border-bottom: 1px solid var(--border);
}

.section-count {
  font-family: var(--font-mono);
  font-size: 0.72rem;
  color: var(--muted);
  letter-spacing: 0.06em;
}

.view-all-link {
  font-size: 0.78rem;
  color: var(--muted);
  text-transform: uppercase;
  letter-spacing: 0.06em;
  transition: color var(--transition);
  display: flex;
  align-items: center;
  gap: 6px;
}

.view-all-link:hover { color: var(--white); }

/* ── GENRE PILLS ── */
.genre-row {
  display: flex;
  gap: 0.5rem;
  flex-wrap: wrap;
  margin-bottom: 2.5rem;
}

.pill {
  font-size: 0.75rem;
  font-weight: 400;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  padding: 6px 14px;
  border-radius: 100px;
  border: 1px solid var(--border2);
  color: var(--muted);
  cursor: pointer;
  transition: all var(--transition);
  white-space: nowrap;
}

.pill:hover, .pill.active {
  background: var(--red-soft);
  border-color: rgba(229,53,43,0.35);
  color: var(--white);
}

/* ── PRODUCT GRID ── */
.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(210px, 1fr));
  gap: 1px;
  background: var(--border);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  overflow: hidden;
}

.product-card {
  background: var(--surface);
  padding: 1.5rem;
  display: flex;
  flex-direction: column;
  cursor: pointer;
  transition: background var(--transition);
  position: relative;
}

.product-card:hover { background: var(--surface2); }

.product-card:hover .card-arrow { opacity: 1; transform: translate(0,0); }

.card-arrow {
  position: absolute;
  top: 1.2rem;
  right: 1.2rem;
  font-size: 0.9rem;
  color: var(--muted);
  opacity: 0;
  transform: translate(-4px, 4px);
  transition: all var(--transition);
}

.card-cover {
  width: 100%;
  aspect-ratio: 2/3;
  border-radius: var(--radius-sm);
  margin-bottom: 1.1rem;
  flex-shrink: 0;
  position: relative;
  overflow: hidden;
  background: var(--surface2);
}

.card-cover img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center top;
  display: block;
  transition: transform var(--transition);
}

.product-card:hover .card-cover img {
  transform: scale(1.04);
}

.card-cover-inner {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 3.5rem;
}

.card-badge {
  position: absolute;
  top: 8px;
  left: 8px;
  font-family: var(--font-mono);
  font-size: 0.6rem;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  background: var(--red);
  color: white;
  padding: 3px 8px;
  border-radius: 4px;
}

.card-genre {
  font-family: var(--font-mono);
  font-size: 0.65rem;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--red);
  margin-bottom: 4px;
}

.card-title {
  font-family: var(--font-serif);
  font-size: 1rem;
  font-weight: 700;
  letter-spacing: -0.01em;
  color: var(--white);
  line-height: 1.2;
  margin-bottom: 3px;
}

.card-author {
  font-size: 0.75rem;
  color: var(--muted);
  margin-bottom: 1rem;
  font-style: italic;
}

.card-footer {
  margin-top: auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.card-price {
  font-family: var(--font-mono);
  font-size: 0.95rem;
  font-weight: 500;
  color: var(--white);
}

.card-add {
  font-size: 0.7rem;
  text-transform: uppercase;
  letter-spacing: 0.07em;
  color: var(--muted);
  background: var(--surface2);
  border: 1px solid var(--border2);
  padding: 5px 12px;
  border-radius: 100px;
  cursor: pointer;
  font-family: var(--font-sans);
  transition: all var(--transition);
}

.card-add:hover { background: var(--red); border-color: var(--red); color: white; }

/* ── FEATURED STRIP ── */
.feature-strip {
  margin: 0 2.5rem;
  border: 1px solid var(--border2);
  border-radius: var(--radius-lg);
  overflow: hidden;
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.feature-text {
  padding: 3.5rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  border-right: 1px solid var(--border);
}

.feature-label {
  font-family: var(--font-mono);
  font-size: 0.68rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--red);
  margin-bottom: 1rem;
}

.feature-title {
  font-family: var(--font-serif);
  font-size: 2.2rem;
  font-weight: 700;
  letter-spacing: -0.02em;
  line-height: 1.1;
  margin-bottom: 1rem;
}

.feature-desc {
  font-size: 0.88rem;
  color: var(--muted);
  line-height: 1.7;
  margin-bottom: 1.8rem;
  max-width: 320px;
}

.feature-visual {
  background: var(--surface);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 6rem;
  min-height: 300px;
}

/* ── PRODUCT DETAIL ── */
.detail-wrap {
  display: grid;
  grid-template-columns: 360px 1fr;
  gap: 4rem;
  padding: 4rem 2.5rem;
  max-width: 1200px;
  margin: 0 auto;
}

.detail-cover {
  border-radius: var(--radius);
  overflow: hidden;
  border: 1px solid var(--border2);
  aspect-ratio: 2/3;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 8rem;
  position: sticky;
  top: 80px;
  align-self: start;
  background: var(--surface2);
}

.detail-cover img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center top;
  display: block;
}

.detail-info { padding-top: 0.5rem; }

.detail-genre {
  font-family: var(--font-mono);
  font-size: 0.7rem;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--red);
  margin-bottom: 0.6rem;
}

.detail-title {
  font-family: var(--font-serif);
  font-size: 2.8rem;
  font-weight: 900;
  letter-spacing: -0.03em;
  line-height: 1.05;
  margin-bottom: 0.4rem;
}

.detail-author {
  font-size: 0.85rem;
  color: var(--muted);
  font-style: italic;
  margin-bottom: 2rem;
  padding-bottom: 2rem;
  border-bottom: 1px solid var(--border);
}

.detail-price {
  font-family: var(--font-mono);
  font-size: 2rem;
  font-weight: 500;
  color: var(--white);
  margin-bottom: 1.5rem;
}

.detail-desc {
  font-size: 0.9rem;
  color: var(--muted);
  line-height: 1.8;
  margin-bottom: 2rem;
}

.qty-row {
  display: flex;
  align-items: center;
  gap: 1rem;
  margin-bottom: 1.5rem;
}

.qty-label {
  font-family: var(--font-mono);
  font-size: 0.72rem;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--muted);
  width: 40px;
}

.qty-input {
  width: 64px;
  background: var(--surface);
  border: 1px solid var(--border2);
  color: var(--white);
  font-size: 0.95rem;
  text-align: center;
  padding: 10px;
  border-radius: var(--radius-sm);
  font-family: var(--font-mono);
}

.detail-actions { display: flex; gap: 0.8rem; flex-wrap: wrap; margin-bottom: 2rem; }

.detail-meta {
  border-top: 1px solid var(--border);
  padding-top: 1.5rem;
}

.meta-row {
  display: flex;
  justify-content: space-between;
  padding: 0.6rem 0;
  border-bottom: 1px solid var(--border);
  font-size: 0.83rem;
}

.meta-label { color: var(--muted); font-family: var(--font-mono); font-size: 0.7rem; letter-spacing: 0.07em; text-transform: uppercase; }
.meta-value { color: var(--white); font-weight: 400; }

/* ── CART ── */
.cart-wrap {
  display: grid;
  grid-template-columns: 1fr 360px;
  gap: 2rem;
  padding: 3rem 2.5rem;
  max-width: 1200px;
  margin: 0 auto;
}

.cart-table-head {
  display: grid;
  grid-template-columns: 60px 1fr 80px 100px 40px;
  gap: 1rem;
  padding: 0 0 0.8rem;
  border-bottom: 1px solid var(--border2);
  font-family: var(--font-mono);
  font-size: 0.65rem;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--muted);
}

.cart-row {
  display: grid;
  grid-template-columns: 60px 1fr 80px 100px 40px;
  gap: 1rem;
  align-items: center;
  padding: 1.2rem 0;
  border-bottom: 1px solid var(--border);
}

.cart-thumb {
  aspect-ratio: 2/3;
  background: var(--surface);
  border: 1px solid var(--border2);
  border-radius: var(--radius-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.4rem;
}

.cart-item-name {
  font-family: var(--font-serif);
  font-size: 0.95rem;
  font-weight: 700;
  color: var(--white);
  margin-bottom: 2px;
}

.cart-item-sub {
  font-size: 0.73rem;
  color: var(--muted);
  font-style: italic;
}

.qty-sm {
  width: 52px;
  background: var(--surface);
  border: 1px solid var(--border2);
  color: var(--white);
  font-size: 0.85rem;
  text-align: center;
  padding: 6px;
  border-radius: var(--radius-sm);
  font-family: var(--font-mono);
}

.cart-price {
  font-family: var(--font-mono);
  font-size: 0.9rem;
  color: var(--white);
}

.cart-remove {
  font-size: 0.7rem;
  color: var(--muted);
  cursor: pointer;
  text-align: center;
  transition: color var(--transition);
}

.cart-remove:hover { color: var(--red); }

.summary-box {
  background: var(--surface);
  border: 1px solid var(--border2);
  border-radius: var(--radius-lg);
  padding: 1.8rem;
  height: fit-content;
  position: sticky;
  top: 80px;
}

.summary-title {
  font-family: var(--font-mono);
  font-size: 0.7rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--muted);
  margin-bottom: 1.5rem;
}

.summary-row {
  display: flex;
  justify-content: space-between;
  font-size: 0.85rem;
  padding: 0.5rem 0;
  color: var(--muted);
  border-bottom: 1px solid var(--border);
}

.summary-total {
  display: flex;
  justify-content: space-between;
  padding: 1rem 0 0;
  font-size: 1.1rem;
  font-family: var(--font-mono);
  font-weight: 500;
  color: var(--white);
}

/* ── AUTH ── */
.auth-wrap {
  min-height: calc(100vh - 60px);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 2rem;
}

.auth-card {
  width: 100%;
  max-width: 400px;
  background: var(--surface);
  border: 1px solid var(--border2);
  border-radius: var(--radius-lg);
  padding: 2.5rem;
}

.auth-header { margin-bottom: 2rem; }

.auth-tag {
  font-family: var(--font-mono);
  font-size: 0.68rem;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--red);
  margin-bottom: 0.5rem;
}

.auth-title {
  font-family: var(--font-serif);
  font-size: 2rem;
  font-weight: 700;
  letter-spacing: -0.02em;
}

.form-field { margin-bottom: 1.1rem; }

.form-label {
  display: block;
  font-family: var(--font-mono);
  font-size: 0.68rem;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--muted);
  margin-bottom: 6px;
}

.form-input {
  width: 100%;
  background: var(--bg);
  border: 1px solid var(--border2);
  color: var(--white);
  font-size: 0.9rem;
  font-family: var(--font-sans);
  font-weight: 300;
  padding: 11px 14px;
  border-radius: var(--radius-sm);
  transition: border-color var(--transition);
}

.form-input::placeholder { color: var(--muted2); }
.form-input:focus { outline: none; border-color: rgba(229,53,43,0.5); }

.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 0.8rem; }

.auth-footer {
  text-align: center;
  margin-top: 1.5rem;
  font-size: 0.8rem;
  color: var(--muted);
}

.auth-footer a { color: var(--red); }

/* ── PAGE HEADER ── */
.page-header {
  padding: 3rem 2.5rem 2rem;
  border-bottom: 1px solid var(--border);
}

.breadcrumb {
  font-family: var(--font-mono);
  font-size: 0.68rem;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--muted);
  margin-bottom: 1rem;
}

.breadcrumb a { color: var(--muted); transition: color var(--transition); }
.breadcrumb a:hover { color: var(--white); }
.breadcrumb span { color: var(--red); }

.page-title {
  font-family: var(--font-serif);
  font-size: clamp(2rem, 4vw, 3.2rem);
  font-weight: 900;
  letter-spacing: -0.03em;
}

.page-title em { font-style: italic; color: var(--red); }

/* ── FOOTER ── */
footer {
  background: var(--surface);
  border-top: 1px solid var(--border);
  padding: 4rem 2.5rem 2rem;
}

.footer-grid {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr;
  gap: 4rem;
  margin-bottom: 3rem;
}

.footer-logo {
  font-family: var(--font-serif);
  font-size: 1.2rem;
  font-weight: 700;
  letter-spacing: -0.02em;
  margin-bottom: 0.8rem;
  display: flex;
  align-items: center;
  gap: 8px;
}

.footer-about {
  font-size: 0.82rem;
  color: var(--muted);
  line-height: 1.7;
  max-width: 260px;
  font-style: italic;
}

.footer-col-title {
  font-family: var(--font-mono);
  font-size: 0.65rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--muted);
  margin-bottom: 1rem;
}

.footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 0.5rem; }
.footer-col li a { font-size: 0.82rem; color: var(--muted); transition: color var(--transition); }
.footer-col li a:hover { color: var(--white); }

.footer-bottom {
  border-top: 1px solid var(--border);
  padding-top: 1.5rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-family: var(--font-mono);
  font-size: 0.68rem;
  letter-spacing: 0.06em;
  color: var(--muted2);
  text-transform: uppercase;
}

/* ── CHECKOUT ── */
.checkout-wrap {
  display: grid;
  grid-template-columns: 1fr 380px;
  gap: 2rem;
  padding: 3rem 2.5rem;
  max-width: 1200px;
  margin: 0 auto;
}

.checkout-block {
  background: var(--surface);
  border: 1px solid var(--border2);
  border-radius: var(--radius-lg);
  padding: 1.8rem;
  margin-bottom: 1.2rem;
}

.checkout-block-title {
  font-family: var(--font-mono);
  font-size: 0.68rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--muted);
  margin-bottom: 1.5rem;
}

/* ── RESPONSIVE ── */
@media (max-width: 768px) {
  .nav-links { display: none; }
  .hero { min-height: 70vh; padding: 0 1.5rem 3rem; }
  .hero-bottom { flex-direction: column; align-items: flex-start; }
  .feature-strip { grid-template-columns: 1fr; }
  .detail-wrap, .cart-wrap, .checkout-wrap { grid-template-columns: 1fr; }
  .footer-grid { grid-template-columns: 1fr; gap: 2rem; }
  .section { padding: 3rem 1.5rem; }
}
