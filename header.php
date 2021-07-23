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
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <li class="active"> <a href="index.php" class="navbar-brand">Lifestyle Store</a></li> 
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                        if (isset($_SESSION['email'])) 
                        {  
                            echo '<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li> <li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li> <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>';
                            
                        } 
                        
                        else 
                        { 
                            echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';  
                        } 
                        ?>
                    </ul>
                </div>
            </div>
        </div>
</nav>
</body>
</html>