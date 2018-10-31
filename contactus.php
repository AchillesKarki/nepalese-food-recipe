<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A general guide on the recipe of Nepalese Cuisines. Different Nepalese foods can be made at home with available contents">
        <meta name="keywords" content="Food, Nepalese Food, Momo, Chowmin, Chicken, Mutton, Newari, Thakali" >  
        <title>Contact Us</title>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="mainStyling.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allura|Arvo" rel="stylesheet">
        <style>
            body{
                background: url(images/teaparty.jpg) no-repeat ;
                background-attachment: fixed;
                background-size: 100% 100%;
            }
            
            .navbar-form {
                margin-right: 0px;
            }
            
            .header {
                color: #fff;
                font-size: 32px;
                text-shadow: 2px 2px 2px black;
                padding: 10px;
            }

            .bigicon {
                font-size: 35px;
                text-shadow: 3px 3px 2px black;
                color: #36A0FF;
            }
            
            .container{
                margin-top: 20px;
                background: none;
            }
            
            .well{
                background: none;
                border: none;
            }
            
            .row{
                background: none;
            }
            
            #mainContainer input{
                background: none;
                border: none;
                border-bottom: 1px solid rgba(128, 128, 128, 0.6);
                color: #fff;
            }
            
            #mainContainer textarea{
                background: none;
                border: none;
                max-height: 150px;
                color: #fff;
            }
            
            @media screen and (max-width: 767px) {
                .bigicon {
                    font-size: 30px;
                    color: #36A0FF;
                }
            }
            
            @media screen and (max-width: 400px) {
                .bigicon {
                    font-size: 25px;
                    color: #36A0FF;
                }
                
                #mainContainer .btn{
                    width: 40%;
                    font-size: 14px;
                    padding: 10px;
                }
                
                .header {
                    font-size: 24px;
                    padding: 10px;
                    margin-bottom: 40px;
                }
                
                #mainContainer input{
                    height: 30px;
                    font-size: 12px;
                }
            }
        </style> 
    </head>
    <body>
        <nav role="presentation" class="navbar navbar-inverse navbar-custom">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img class="mainLogo" src="images/mainlogo.png" ></a>

                    <button type="button" class="navbar-toggle btn-xs" data-target="#myNavbar" data-toggle="collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-left" >
                        <li><a href="index.php">Home</a></li>
                        <li><a href="recipe.php">Recipe</a></li>
                        <li><a href="about.php">About</a></li>
                        <li class="active"><a href="contactus.php">Contact Us</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <button id="signinButton" type="button" class="btn btn-success" data-toggle="modal" data-target="#signInModal" ><span><i class="fa fa-user"> </i> Sign In</span></button><button id="signoutButton" type="button" class="btn btn-success  sr-only"><span><i class="fa fa-user"> </i> Sign Out</span></button>
                    </form>
                 </div>
            </div>
        </nav>  
        
              
        <div class="container" id="mainContainer">
            <div class="row">
                <div class="col-md-12">
                    <div class="well well-xs">
                        <form class="form-horizontal" method="post">
                            <fieldset>
                                <h2 class="text-center header">Contact Us</h2>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 col-xs-2 col-xs-offset-1  text-center"><i class="fa fa-user bigicon"></i></span>
                                    <div class="col-xs-8">
                                        <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 col-xs-2 col-xs-offset-1  text-center"><i class="fa fa-user bigicon"></i></span>
                                    <div class="col-xs-8">
                                        <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 col-xs-2 col-xs-offset-1  text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                    <div class="col-xs-8">
                                        <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 col-xs-2 col-xs-offset-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                    <div class="col-xs-8">
                                        <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="col-md-1 col-md-offset-2 col-xs-2 col-xs-offset-1  text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                    <div class="col-xs-8" >
                                        <textarea class="form-control" id="message" name="message" placeholder="Your message" rows="7"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
        
           

        
        
        
        
                
                
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
        <?php include'signinForm.php';?>                                            
                                                        
                                                        <!--        Footer          -->
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