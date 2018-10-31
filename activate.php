<?php
    //the user is redirected to this file after clicking the activation link
    //SIGNUP link contains two GET parameters: email and activation key
    session_start();
    include('connect.php');
    
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Account Activation </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{
                background: url(images/coffee.jpg) no-repeat ;
                background-attachment: fixed;
                background-size: 100% 100%;
            }  
        
        .container{
            margin-top: 100px;
            color: #fff;
        }
    </style>
  </head>
  <body>
    
    <div class="container">
       <h1>Activate Account</h1>
        <?php
            //if email or activation key is missing, show an error
        if(!isset($_GET['email']) || !isset($_GET['key'])){
            echo "<div class='alert alert-danger'>There was an error. Please click on the activation you received by email.</div>";
            exit;
        }

        //else
        $email = $_GET['email'];
        $key = $_GET['key'];

        //prepare variables for the query
        $email = mysqli_real_escape_string($link, $email);
        $key = mysqli_real_escape_string($link, $key);

        //run query: set activation field to "activated" for the provided email   
        $sql = "UPDATE users SET activation = 'activated' WHERE (email = '$email' AND activation = '$key') LIMIT 1"; //limit to 1 operation
           
        $result = mysqli_query($link, $sql);

        //check if query is successful
        if(mysqli_affected_rows($link) == 1){
            echo "<div class='alert alert-success'>Your account has been activated.</div>";
            echo "<a href='index.php' type='button' class='btn btn-lg btn-success'>Sign in</a>";
        }else{
            echo "<div class='alert alert-danger'>Your account could not be activated. Please try again later.</div>";
        }      
        ?>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>