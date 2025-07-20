

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'addToCart') {
            addToCart($_POST['productId'], $_POST['productName'], $_POST['productPrice']);
        } elseif ($_POST['action'] === 'removeFromCart') {
            removeFromCart($_POST['productId']);
        } elseif ($_POST['action'] === 'clearCart') {
            clearCart();
        }
    }
}

function addToCart($productId, $productName, $productPrice) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $_SESSION['cart'][] = [
        'id' => $productId,
        'name' => $productName,
        'price' => $productPrice,
    ];

    // Additional logic to store cart in a database or any other storage mechanism
}

function removeFromCart($productId) {
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $productId) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }

    // Additional logic to update cart in a database or any other storage mechanism
}

function clearCart() {
    $_SESSION['cart'] = [];

    // Additional logic to clear cart in a database or any other storage mechanism
}
?>
