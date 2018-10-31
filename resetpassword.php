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
    <title>Password Reset</title>

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
       <h1>Reset Password:</h1>
       <div id="resultMessage"></div>
        <?php
            //if email or activation key is missing, show an error
        if(!isset($_GET['user_id']) || !isset($_GET['key'])){
            echo "<div class='alert alert-danger'>There was an error. Please click on the link you received by email.</div>";
            exit;
        }

        //else
        $user_id = $_GET['user_id'];
        $key = $_GET['key'];
        $time = time() - 86400;
        
        //prepare variables for the query
        $user_id = mysqli_real_escape_string($link, $user_id);
        $key = mysqli_real_escape_string($link, $key);

        //run query: set activation field to "activated" for the provided email   
        $sql = "SELECT user_id FROM forgotpassword WHERE rkey = '$key' AND user_id = '$user_id' AND time > '$time' AND status='pending'"; //limit to 1 operation
           
        $result = mysqli_query($link, $sql);

        //check if query is successful
        if(!$result){
            echo "<div class='alert alert-danger'>Error running the query!</div>";
            exit;
        }
        
        //if combination doesnt exist show error
        $count = mysqli_num_rows($result);
        if($count !== 1){
            echo '<div class="alert alert-danger">Please Try Again!</div>';
            exit;
        }
        
        //print reset password form
        echo "
        <form method='post' id='passwordreset'>
            <input type='hidden' name='key' value='$key'>
            <input type='hidden' name='user_id' value='$user_id'>
            <div class='form-group'>
                <label class='sr-only' for='password'>Enter Your New Password</label>
                <input type='password' name='password' id='password' placeholder='Enter Password' class='form-control'>
                </br>
                
                <label class='sr-only' for='password2'>Enter Your New Password2</label>
                <input type='password' name='password2' id='password2' placeholder='Re-enter Password' class='form-control'>
                </br>
                <input type='submit' name='resetpassword' class='btn btn-success' value='Reset Password'>
            </div>
        
        </form>
        ";
        ?>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
        //AJAX call for resetpassword
        $("#passwordreset").submit(function(event){
           //prevent default php processing
            event.preventDefault();
            //collect user inputs
            var datatopost = $(this).serializeArray();
            //send them to signup.php using AJAX
            $.ajax({
                url: "storeresetpassword.php",
                type: "POST",
                data: datatopost,
                success: function(data){
                    $("#resultMessage").html(data);
                },
                error: function(){
                    $("#resultMessage").html("<div class='alert alert-danger'>There was an error with the AJAX call. Please try again later.</div>");
                }
            });
        });

    </script>
  </body>
</html>