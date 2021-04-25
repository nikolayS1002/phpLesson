<?php

function getOrders() {
    $orders = getAssocResult("SELECT * FROM `orders`");
    return $orders;
}