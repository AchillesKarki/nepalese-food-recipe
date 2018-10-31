<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A general guide on the recipe of Nepalese Cuisines. Different Nepalese foods can be made at home with available contents">
        <meta name="keywords" content="Food, Nepalese Food, Momo, Chowmin, Chicken, Mutton, Newari, Thakali" >  
        <title>About Us</title>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="mainStyling.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allura|Arvo" rel="stylesheet">
        <style>
            body{
                background: url(images/coffee.jpg) no-repeat ;
                background-attachment: fixed;
                background-size: 100% 100%;
            }
            
            .container{
                margin-top: 100px;
            }
        </style>
    </head>
    <body>
        <nav role="presentation" class="navbar navbar-inverse navbar-fixed-top navbar-custom">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img class="mainLogo" src="images/mainlogo.png" ></a>

                    <button type="button" class="navbar-toggle btn-sm" data-target="#myNavbar" data-toggle="collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="myNavbar">
                    <ul class="nav navbar-nav  navbar-fixednavbar-left" >
                        <li><a href="index.php">Home</a></li>
                        <li><a href="recipe.php">Recipe</a></li>
                        <li class="active"><a href="about.php">About</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <button id="signinButton" type="button" class="btn btn-success" data-toggle="modal" data-target="#signInModal" ><span><i class="fa fa-user"> </i> Sign In</span></button><button id="signoutButton" type="button" class="btn btn-success  sr-only"><span><i class="fa fa-user"> </i> Sign Out</span></button>
                    </form>
                 </div>
            </div>
        </nav> 
        
        <div class="container">
            <div>
                <p>Some content about the page</p>
                <p>Some content about the page</p>
                <p>Some content about the page</p>
                <p>Some content about the page</p>
                <p>Some content about the page</p>
                <p>Some content about the page</p>
                <p>Some content about the page</p>
                <p>Some content about the page</p>
                
            </div>
        </div>
          
        <?php include 'signinForm.php';?>  
        <!--            Footer            -->
        <?php
            include 'footer.php';
        ?>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="index.js"></script>
    </body>
</html>