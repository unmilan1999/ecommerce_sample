<?php
require 'common.php';
$can = mysqli_connect('localhost', 'root', '', 'store');
if (isset($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($can, $query);
    header('location: products.php');
}
?>