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
     <?php require 'common.php'; session_start();?>
     <?php include "header.php"; ?>
    <div class="container">
        <div class="jumbotron">
            <h1>“Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                have all in one place</p>
        </div>
    </div>


    <div class="container">
        <!---first row-->
        <div class="row text-center">
            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                    <img src="images/5.jpg" alt="">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price:Rs 36000.00</p>
                        <?php 
                           if (!isset($_SESSION['email']))
                            { 
                                echo' <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> '; 
                            } 
                            else 
                            {  
                                echo ' <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>'; 
                            } 
                        ?>
                    </div>
                </div>
            </div>



            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                    <img src="images/2.jpg" alt="">
                    <div class="caption">
                        <h3>Nikon DSLR</h3>
                        <p>Price:Rs 40000.00</p>
                        <?php 
                           if (!isset($_SESSION['email']))
                            { 
                                echo' <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> '; 
                            } 
                            else 
                            {  
                                echo ' <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>'; 
                            } 
                        ?>
                    </div>
                </div>
            </div>



            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                    <img src="images/3.jpg" alt="">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs 50000.00</p>
                        <?php 
                           if (!isset($_SESSION['email']))
                            { 
                                echo' <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> '; 
                            } 
                            else 
                            {  
                                echo ' <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>'; 
                            } 
                        ?>
                    </div>
                </div>
            </div>



            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                    <img src="images/4.jpg" alt="">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price:Rs80000.00</p>
                        <?php 
                           if (!isset($_SESSION['email']))
                            { 
                                echo' <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> '; 
                            } 
                            else 
                            {  
                                echo ' <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>'; 
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!---second row-->
        <div class="row text-center">
            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                    <img src="images/9.jpg" alt="">
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>Price:Rs 13000.00</p>
                        <?php 
                           if (!isset($_SESSION['email']))
                            { 
                                echo' <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> '; 
                            } 
                            else 
                            {  
                                echo ' <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>'; 
                            } 
                        ?>
                    </div>
                </div>
            </div>


            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                    <img src="images/10.jpg" alt="">
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price:Rs 3000.00</p>
                        <?php 
                           if (!isset($_SESSION['email']))
                            { 
                                echo' <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> '; 
                            } 
                            else 
                            {  
                                echo ' <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>'; 
                            } 
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                    <img src="images/11.jpg" alt="">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price:Rs 8000.00</p>
                        <?php 
                           if (!isset($_SESSION['email']))
                            { 
                                echo' <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> '; 
                            } 
                            else 
                            {  
                                echo ' <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>'; 
                            } 
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                    <img src="images/12.jpg" alt="">
                    <div class="caption">
                        <h3>Fabur Luba #111</h3>
                        <p>Price:Rs 18000.00</p>
                        <?php 
                           if (!isset($_SESSION['email']))
                            { 
                                echo' <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> '; 
                            } 
                            else 
                            {  
                                echo ' <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>'; 
                            } 
                        ?>
                    </div>
                </div>
            </div>


        </div>


        <!--third row-->
        <div class="row text-center">

            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                    <img src="images/14.jpg" height="100%" alt="">
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Price:Rs 800.00</p>
                        <?php 
                           if (!isset($_SESSION['email']))
                            { 
                                echo' <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> '; 
                            } 
                            else 
                            {  
                                echo ' <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>'; 
                            } 
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                    <img src="images/6.jpg" alt="">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price:Rs 1000.00</p>
                        <?php 
                           if (!isset($_SESSION['email']))
                            { 
                                echo' <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> '; 
                            } 
                            else 
                            {  
                                echo ' <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>'; 
                            } 
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                    <img src="images/13.jpg" alt="">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price:Rs 1500.00</p>
                        <?php 
                           if (!isset($_SESSION['email']))
                            { 
                                echo' <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> '; 
                            } 
                            else 
                            {  
                                echo ' <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>'; 
                            } 
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-3  col-sm-6">
                <div class="thumbnail">
                    <img src="images/14.jpg" alt="">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price:Rs 1300.00</p>
                        <?php 
                           if (!isset($_SESSION['email']))
                            { 
                                echo' <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> '; 
                            } 
                            else 
                            {  
                                echo ' <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>'; 
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include 'footer.php'; ?>

</body>

</html>