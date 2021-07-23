<?php

require "common.php";
$con = mysqli_connect('localhost', 'root', '', 'store');
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="b.css">

    <!-- jQuery library -->
    <script src="jq.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="b.js"></script>

    <!--css style link-->
    <link rel="stylesheet" href="style.css">
</head>

<body>

     <?php include "header.php"; ?>
     <br><br>

    <div class="container">
        <div class="row" id="success-size">
            <div class="col-xs-8 col-md-offset-2">
                <h3>Your order is confirmed!!</h3>  <h4> Thank you! for shopping
                    with us. <a href="products.php">Click here </a> to purchase any other item.</h4>
                    

            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>