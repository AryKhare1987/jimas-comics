<?php
session_start();
require 'includes/header.php';
require 'includes/products.php';
require 'includes/card_cover.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid-lines"></div>
  <p class="hero-eyebrow">New arrivals every week</p>
  <h1 class="hero-title">Your universe<br>starts <em>here.</em></h1>
  <div class="hero-bottom">
    <p class="hero-sub">Manga, graphic novels, and American comics — curated for collectors and casual readers alike.</p>
    <div class="hero-ctas">
      <a href="catalog.php" class="btn btn-primary">Browse catalog →</a>
      <a href="#manga" class="btn btn-ghost">Explore manga</a>
    </div>
  </div>
</section>

<!-- TICKER -->
<div class="ticker">
  <div class="ticker-track">
    <span>Free shipping over $35</span><span>New manga every Tuesday</span>
    <span>Collector editions in stock</span><span>Rare finds available</span>
    <span>Free shipping over $35</span><span>New manga every Tuesday</span>
    <span>Collector editions in stock</span><span>Rare finds available</span>
  </div>
</div>

<!-- MANGA SECTION -->
<section class="section" id="manga">
  <div class="section-label">Japanese comics</div>
  <div class="section-head">
    <div>
      <h2 class="section-title"><em>Manga</em></h2>
      <div class="section-count" id="manga-count"><?=count(get_by_genre('Manga'))?> titles</div>
    </div>
    <a href="catalog.php?genre=Manga" class="view-all-link">View all →</a>
  </div>

  <div class="genre-row" id="manga-filters">
    <div class="pill active" onclick="filterCards('manga','all',this)">All</div>
    <div class="pill" onclick="filterCards('manga','shonen',this)">Shonen</div>
    <div class="pill" onclick="filterCards('manga','seinen',this)">Seinen</div>
    <div class="pill" onclick="filterCards('manga','shojo',this)">Shojo</div>
    <div class="pill" onclick="filterCards('manga','isekai',this)">Isekai</div>
    <div class="pill" onclick="filterCards('manga','horror',this)">Horror</div>
  </div>

  <div class="product-grid" id="manga-grid">
    <?php foreach (get_by_genre('Manga') as $p): ?>
    <div class="product-card" data-tag="<?=htmlspecialchars($p['tag']??'shonen')?>">
      <span class="card-arrow">↗</span>
      <a href="product.php?id=<?=$p['id']?>" style="text-decoration:none;display:block">
        <?php card_cover($p); ?>
        <div class="card-genre"><?=htmlspecialchars($p['sub'])?></div>
        <div class="card-title"><?=htmlspecialchars($p['title'])?></div>
        <div class="card-author"><?=htmlspecialchars($p['author'])?></div>
      </a>
      <div class="card-footer">
        <span class="card-price">$<?=number_format($p['price'],2)?></span>
        <a href="cart_action.php?action=add&id=<?=$p['id']?>&redirect=index.php%23manga" class="card-add">+ Add</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- FEATURE STRIP -->
<div class="feature-strip">
  <div class="feature-text">
    <div class="feature-label">· Featured</div>
    <h2 class="feature-title">Complete collections, one place.</h2>
    <p class="feature-desc">Grab the full run of your favorite series at a bundle discount. Limited stock on collector editions and first prints.</p>
    <a href="catalog.php" class="btn btn-primary" style="align-self:flex-start">Shop collections →</a>
  </div>
  <div class="feature-visual">📚</div>
</div>

<!-- AMERICAN COMICS SECTION -->
<section class="section" id="american">
  <div class="section-label">Marvel · DC · Indie · Sci-Fi</div>
  <div class="section-head">
    <div>
      <h2 class="section-title"><em>American</em> Comics</h2>
      <div class="section-count" id="american-count"><?=count(get_by_genre('American'))?> titles</div>
    </div>
    <a href="catalog.php?genre=American" class="view-all-link">View all →</a>
  </div>

  <div class="genre-row" id="american-filters">
    <div class="pill active" onclick="filterCards('american','all',this)">All</div>
    <div class="pill" onclick="filterCards('american','marvel',this)">Marvel</div>
    <div class="pill" onclick="filterCards('american','dc',this)">DC</div>
    <div class="pill" onclick="filterCards('american','indie',this)">Indie</div>
    <div class="pill" onclick="filterCards('american','scifi',this)">Sci-Fi</div>
  </div>

  <div class="product-grid" id="american-grid">
    <?php foreach (get_by_genre('American') as $p): ?>
    <div class="product-card" data-tag="<?=htmlspecialchars($p['tag']??'marvel')?>">
      <span class="card-arrow">↗</span>
      <a href="product.php?id=<?=$p['id']?>" style="text-decoration:none;display:block">
        <?php card_cover($p); ?>
        <div class="card-genre"><?=htmlspecialchars($p['sub'])?></div>
        <div class="card-title"><?=htmlspecialchars($p['title'])?></div>
        <div class="card-author"><?=htmlspecialchars($p['author'])?></div>
      </a>
      <div class="card-footer">
        <span class="card-price">$<?=number_format($p['price'],2)?></span>
        <a href="cart_action.php?action=add&id=<?=$p['id']?>&redirect=index.php%23american" class="card-add">+ Add</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<script>
function filterCards(section, tag, clickedPill) {
  document.getElementById(section + '-filters')
    .querySelectorAll('.pill')
    .forEach(p => p.classList.remove('active'));
  clickedPill.classList.add('active');

  const cards   = document.getElementById(section + '-grid').querySelectorAll('.product-card');
  let   visible = 0;
  cards.forEach(card => {
    const show = tag === 'all' || card.dataset.tag === tag;
    card.style.display = show ? '' : 'none';
    if (show) visible++;
  });

  const countEl = document.getElementById(section + '-count');
  if (countEl) countEl.textContent = visible + ' title' + (visible !== 1 ? 's' : '');
}
</script>

<?php require 'includes/footer.php'; ?>
