<?php
session_start();
require 'includes/header.php';
require 'includes/products.php';
require 'includes/card_cover.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$p  = get_product($id);
if (!$p) { echo "<p style='padding:3rem;color:var(--red)'>Product not found.</p>"; require 'includes/footer.php'; exit; }

$related = array_slice(array_values(array_filter($products, fn($r) => $r['genre']===$p['genre'] && $r['id']!==$p['id'])), 0, 3);
?>

<div class="page-header">
  <div class="breadcrumb">
    <a href="index.php">Home</a> / <a href="catalog.php">Catalog</a> / <span><?=htmlspecialchars($p['title'])?></span>
  </div>
</div>

<div class="detail-wrap">
  <?php detail_cover($p); ?>

  <div class="detail-info">
    <div class="detail-genre"><?=$p['genre']?> · <?=$p['sub']?></div>
    <h1 class="detail-title"><?=htmlspecialchars($p['title'])?></h1>
    <p class="detail-author">by <?=htmlspecialchars($p['author'])?></p>
    <div class="detail-price">$<?=number_format($p['price'],2)?></div>
    <p class="detail-desc"><?=htmlspecialchars($p['desc'])?></p>

    <form method="get" action="cart_action.php" style="margin-bottom:1.5rem">
      <input type="hidden" name="action"   value="add"/>
      <input type="hidden" name="id"       value="<?=$p['id']?>"/>
      <input type="hidden" name="redirect" value="cart.php"/>
      <div class="qty-row">
        <span class="qty-label">Qty</span>
        <input type="number" name="qty" class="qty-input" value="1" min="1" max="<?=$p['stock']?>"/>
        <span style="font-size:0.75rem;color:var(--muted)"><?=$p['stock']?> in stock</span>
      </div>
      <div class="detail-actions">
        <button type="submit" class="btn btn-primary">Add to cart</button>
        <a href="cart.php" class="btn btn-ghost">View cart</a>
      </div>
    </form>

    <p style="font-size:0.75rem;color:var(--muted);margin-bottom:2rem">
      Ships in 2–3 business days · Free over $35
    </p>

    <div class="detail-meta">
      <div class="meta-row"><span class="meta-label">Publisher</span><span class="meta-value"><?=$p['pub']?></span></div>
      <div class="meta-row"><span class="meta-label">Year</span><span class="meta-value"><?=$p['year']?></span></div>
      <div class="meta-row"><span class="meta-label">Pages</span><span class="meta-value"><?=$p['pages']?></span></div>
      <div class="meta-row"><span class="meta-label">Genre</span><span class="meta-value"><?=$p['sub']?></span></div>
      <div class="meta-row"><span class="meta-label">Format</span><span class="meta-value">Trade Paperback</span></div>
    </div>
  </div>
</div>

<?php if (!empty($related)): ?>
<section class="section" style="border-top:1px solid var(--border)">
  <div class="section-label">More like this</div>
  <div class="section-head">
    <h2 class="section-title">You might <em>also like</em></h2>
  </div>
  <div class="product-grid">
    <?php foreach ($related as $r): ?>
    <div class="product-card">
      <span class="card-arrow">↗</span>
      <a href="product.php?id=<?=$r['id']?>" style="text-decoration:none;display:block">
        <?php card_cover($r); ?>
        <div class="card-genre"><?=$r['sub']?></div>
        <div class="card-title"><?=htmlspecialchars($r['title'])?></div>
        <div class="card-author"><?=htmlspecialchars($r['author'])?></div>
      </a>
      <div class="card-footer">
        <span class="card-price">$<?=number_format($r['price'],2)?></span>
        <a href="cart_action.php?action=add&id=<?=$r['id']?>&redirect=product.php%3Fid%3D<?=$p['id']?>" class="card-add">+ Add</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>

<?php require 'includes/footer.php'; ?>
