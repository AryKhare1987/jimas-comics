<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$action = $_GET['action'] ?? '';
$id     = (int)($_GET['id'] ?? 0);
$qty    = (int)($_GET['qty'] ?? 1);

if ($action === 'add' && $id > 0) {
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] += $qty;
    } else {
        $_SESSION['cart'][$id] = $qty;
    }
}

if ($action === 'remove' && $id > 0) {
    unset($_SESSION['cart'][$id]);
}

if ($action === 'update' && $id > 0 && $qty > 0) {
    $_SESSION['cart'][$id] = $qty;
}

if ($action === 'clear') {
    $_SESSION['cart'] = [];
}

// Redirect back to wherever they came from
$redirect = $_GET['redirect'] ?? 'cart.php';
header('Location: ' . $redirect);
exit;
?>
