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

     <?php 
       require 'common.php'; 
       if (isset($_SESSION['email'])) 
        { 
            header('location: products.php'); 
        }
    ?>
     <?php include "header.php"; ?>
     <br><br>

    <div class="container" >
        <div class="row" id="sign-size">
            <div class="col-xs-8 col-md-offset-2">
                <h1>SIGN UP</h1>
                <form action="signup_script.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" id="" required="true">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control " placeholder="Password" name="password" id="" required="true" pattern=".{6,}">
                    </div>

                    <div class="form-group">

                        <input type="text" class="form-control " placeholder="Contact" name="contact" id="" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="City" name="city" id="" required="true">
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control " placeholder="Address" name="address" id="" required="true">
                    </div>

                    <input type="submit" name="button" value="submit" class="btn btn-primary ">
            </div>

            </form>
        </div>
    </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>