<?php 
    include("connect.php");
//    include("remember.php");
    include("logout.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A general guide on the recipe of Nepalese Cuisines. Different Nepalese foods can be made at home with available contents">
        <meta name="keywords" content="Food, Nepalese Food, Momo, Chowmin, Chicken, Mutton, Newari, Thakali" >  
        <title>Nepalese Food Recipe</title>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="mainStyling.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allura|Arvo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Courgette|Lobster+Two" rel="stylesheet">
        <style>
            #profile{
                background: url(images/tarkari.jpg) no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
                padding: 130px;
                color: #fff;
                text-shadow: 3px 3px 2px black;
                padding-bottom: 200px;
            }
        </style>
        <script>
            
        </script>
    </head>
    <body>
        
        <?php include("header.php");?>       
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"><a style="cursor:default">Category</a></li>
                    <?php
                        $sql = "SELECT DISTINCT `recipe_sub_type` FROM `recipe` WHERE recipe_sub_type != '' ORDER BY recipe_sub_type ";
                        $result = mysqli_query($link, $sql);
                        if(!$result){
                            echo "<div class='alert alert-danger'>There was an error</div>";
                            echo mysqli_error($link);
                        }
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        $name = $row['recipe_sub_type'];
                        $sql = "SELECT `recipe_name` FROM `recipe` WHERE recipe_sub_type = '$name' ";
                        $result1 = mysqli_query($link, $sql);
                        if(!$result1){
                            echo "<div class='alert alert-danger'>There was an error</div>";
                            echo mysqli_error($link);
                        }
                        echo '<li><div class="dropdown"><a class="dropdown-toggle" type="button" data-toggle="dropdown" style="cursor:pointer">'.$name.'<span class="caret"></span></a><ul class="dropdown-menu">';
                        
                        while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)){
                            $name1 = $row1['recipe_name'];    
                            echo '<li><a href="recipe/'. $name1 .'.php" target="myIframe" onclick="goto()">'.$name1.'</a></li>';
                        }
                        echo '</ul></div></li>';
                        }
                        
                    ?>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <!-- /#page-content-wrapper -->
            <div id="page-content-wrapper">
                <div class="container-fluid" id="profile">
                   <h1>Your Profile Information:</h1>
                    <h2>Username: <?php echo $_SESSION['username'] ;?></h2>
                    <h2>Email: <?php echo $_SESSION['email'] ;?></h2>
                    <h2>Recipes Liked: 5</h2>
                </div>
            </div>
        </div>
        <?php include'signinForm.php';?>
        <?php include 'footer.php';?>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="index.js"></script>
        <script>
            function goto() {              
             window.location='index.php#foundRecipe'
            }
        </script>
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
    </body>
</html>