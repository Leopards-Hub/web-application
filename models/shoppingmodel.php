<?php

class CartModel {
    // You can implement methods to add, remove, and retrieve items from the cart
    // For simplicity, let's store the cart as an array in session

    public static function addToCart($item) {
        session_start();
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $_SESSION['cart'][] = $item;
        session_write_close();
    }

    public static function getCart() {
        session_start();
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
        session_write_close();
        return $cart;
    }
}
