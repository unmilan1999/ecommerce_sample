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

    <div class="container border" >
        <div class="row " id="marginlogin">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading ">
                        <h2>LOGIN</h2>
                    </div>
                    <div class="panel-body ">
                        <p class="text-warning ">Login to make a purchase</p>
                        <form action="login_submit.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" name="firstname" id="">
                            </div>
                            <div class="form-group">

                                <input type="password" class="form-control " placeholder="Password" name="pass"
                                    id="">
                            </div>
                       
                        <button type="submit" name="lbtn" class="btn btn-primary">Login</button>
                    </form>
                    </div>
                    <div class="panel-footer">
                        Don't have an account ?<a href="signup.php"> Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php include 'footer.php'; ?>
</body>

</html>