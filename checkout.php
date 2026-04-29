<?php
session_start();
if (!isset($_SESSION['cart'])) {
    // Seed with demo items on first visit so cart isn't empty
    $_SESSION['cart'] = [1 => 2, 5 => 1, 6 => 1];
}

require 'includes/header.php';
require 'includes/products.php';
require 'includes/card_cover.php';

$cart_items = [];
$subtotal   = 0;

foreach ($_SESSION['cart'] as $pid => $qty) {
    $p = get_product((int)$pid);
    if ($p) {
        $cart_items[] = ['product' => $p, 'qty' => (int)$qty];
        $subtotal += $p['price'] * $qty;
    }
}

$shipping = $subtotal >= 35 ? 0 : 4.99;
$total    = $subtotal + $shipping;
$count    = array_sum($_SESSION['cart']);
?>

<div class="page-header">
  <div class="breadcrumb"><a href="index.php">Home</a> / <span>Cart</span></div>
  <h1 class="page-title">My <em>Cart</em></h1>
</div>

<div class="cart-wrap">
  <div>

    <?php if (empty($cart_items)): ?>
      <p style="padding:3rem 0;color:var(--muted);font-style:italic">
        Your cart is empty. <a href="catalog.php" style="color:var(--red)">Browse the catalog →</a>
      </p>
    <?php else: ?>

    <div class="cart-table-head">
      <span></span><span>Item</span><span>Qty</span><span>Price</span><span></span>
    </div>

    <?php foreach ($cart_items as $item):
      $p   = $item['product'];
      $qty = $item['qty'];
    ?>
    <div class="cart-row">
      <!-- Thumb -->
      <a href="product.php?id=<?=$p['id']?>">
        <div class="cart-thumb" style="background:<?=htmlspecialchars($p['bg'])?>;overflow:hidden;padding:0">
          <?php
            $svg = make_cover_svg($p, 120, 180);
            $b64 = base64_encode($svg);
            echo '<img src="data:image/svg+xml;base64,'.$b64.'" style="width:100%;height:100%;object-fit:cover;display:block"/>';
          ?>
        </div>
      </a>

      <!-- Name -->
      <div>
        <div class="cart-item-name"><?=htmlspecialchars($p['title'])?></div>
        <div class="cart-item-sub"><?=$p['genre']?> · <?=$p['sub']?></div>
      </div>

      <!-- Qty (form auto-submits on change) -->
      <form method="get" action="cart_action.php">
        <input type="hidden" name="action"   value="update"/>
        <input type="hidden" name="id"       value="<?=$p['id']?>"/>
        <input type="hidden" name="redirect" value="cart.php"/>
        <input type="number" name="qty" class="qty-sm"
               value="<?=$qty?>" min="1" max="20"
               onchange="this.form.submit()"/>
      </form>

      <!-- Price -->
      <div class="cart-price">$<?=number_format($p['price'] * $qty, 2)?></div>

      <!-- Remove -->
      <a href="cart_action.php?action=remove&id=<?=$p['id']?>&redirect=cart.php"
         class="cart-remove" title="Remove item">✕</a>
    </div>
    <?php endforeach; ?>

    <div style="margin-top:2rem;display:flex;gap:1rem;flex-wrap:wrap">
      <a href="catalog.php" class="btn btn-ghost">← Continue shopping</a>
      <a href="cart_action.php?action=clear&redirect=cart.php"
         class="btn btn-ghost"
         onclick="return confirm('Clear your entire cart?')">Clear cart</a>
    </div>

    <?php endif; ?>
  </div>

  <!-- Summary -->
  <div class="summary-box">
    <div class="summary-title">Order Summary</div>
    <div class="summary-row">
      <span>Subtotal (<?=$count?> item<?=$count!=1?'s':''?>)</span>
      <span>$<?=number_format($subtotal,2)?></span>
    </div>
    <div class="summary-row">
      <span>Shipping</span>
      <span><?=$shipping==0?'<span style="color:var(--red)">Free</span>':'$'.number_format($shipping,2)?></span>
    </div>
    <?php if ($shipping > 0): ?>
    <p style="font-size:0.73rem;color:var(--muted);margin:0.3rem 0 0;font-style:italic">
      Add $<?=number_format(35-$subtotal,2)?> more for free shipping
    </p>
    <?php endif; ?>
    <div class="summary-total">
      <span>Total</span>
      <span>$<?=number_format($total,2)?></span>
    </div>
    <a href="checkout.php" class="btn btn-red"
       style="display:block;text-align:center;margin-top:1.5rem;border-radius:100px">
      Checkout →
    </a>
    <p style="text-align:center;margin-top:1rem;font-size:0.72rem;color:var(--muted)">
      🔒 Secure SSL checkout
    </p>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
