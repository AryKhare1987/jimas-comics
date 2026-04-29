<?php
session_start();
require 'includes/header.php';
require 'includes/products.php';
require 'includes/card_cover.php';

$genre    = isset($_GET['genre']) ? $_GET['genre'] : 'All';
$tag      = isset($_GET['tag'])   ? $_GET['tag']   : 'all';

$filtered = $genre === 'All'
  ? $products
  : array_values(array_filter($products, fn($p) => $p['genre']===$genre));

$display = ($tag === 'all')
  ? $filtered
  : array_values(array_filter($filtered, fn($p) => ($p['tag']??'')===$tag));

// Pills per genre
$manga_tags    = ['all'=>'All','shonen'=>'Shonen','seinen'=>'Seinen','shojo'=>'Shojo','isekai'=>'Isekai','horror'=>'Horror'];
$american_tags = ['all'=>'All','marvel'=>'Marvel','dc'=>'DC','indie'=>'Indie','scifi'=>'Sci-Fi'];
$pills = ($genre === 'Manga') ? $manga_tags : (($genre === 'American') ? $american_tags : []);
?>

<div class="page-header">
  <div class="breadcrumb"><a href="index.php">Home</a> / <span>Catalog</span></div>
  <h1 class="page-title">Full <em>Catalog</em></h1>
</div>

<section class="section">
  <!-- Genre tabs -->
  <div class="genre-row" style="margin-bottom:1rem">
    <?php foreach (['All','Manga','American'] as $g): ?>
    <a href="catalog.php?genre=<?=$g?>" class="pill <?=$genre===$g?'active':''?>" style="text-decoration:none">
      <?=$g==='All'?'All Comics':$g?>
    </a>
    <?php endforeach; ?>
  </div>

  <!-- Sub-category pills -->
  <?php if (!empty($pills)): ?>
  <div class="genre-row" style="margin-bottom:2rem" id="sub-filters">
    <?php foreach ($pills as $t => $label): ?>
    <a href="catalog.php?genre=<?=urlencode($genre)?>&tag=<?=$t?>"
       class="pill <?=$tag===$t?'active':''?>" style="text-decoration:none;font-size:0.72rem">
      <?=$label?>
    </a>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

  <div class="section-head">
    <div>
      <h2 class="section-title">
        <?php
          if ($genre === 'All') echo '<em>All</em> Comics';
          elseif ($tag !== 'all') echo '<em>' . htmlspecialchars($pills[$tag] ?? $tag) . '</em>';
          else echo '<em>' . htmlspecialchars($genre) . '</em>';
        ?>
      </h2>
      <div class="section-count"><?=count($display)?> titles</div>
    </div>
  </div>

  <div class="product-grid">
    <?php foreach ($display as $p): ?>
    <div class="product-card" data-tag="<?=htmlspecialchars($p['tag']??'')?>">
      <span class="card-arrow">↗</span>
      <a href="product.php?id=<?=$p['id']?>" style="text-decoration:none;display:block">
        <?php card_cover($p); ?>
        <div class="card-genre"><?=htmlspecialchars($p['sub'])?></div>
        <div class="card-title"><?=htmlspecialchars($p['title'])?></div>
        <div class="card-author"><?=htmlspecialchars($p['author'])?></div>
      </a>
      <div class="card-footer">
        <span class="card-price">$<?=number_format($p['price'],2)?></span>
        <a href="cart_action.php?action=add&id=<?=$p['id']?>&redirect=catalog.php%3Fgenre%3D<?=urlencode($genre)?>%26tag%3D<?=$tag?>" class="card-add">+ Add</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
