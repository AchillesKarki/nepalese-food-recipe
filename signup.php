<?php
    //start session
    session_start();
    
    //connect to the database
    include ('connect.php');
    
    //create users tabel
    $sql = "CREATE TABLE IF NOT EXISTS `nepalese_food_recipe`.`users` ( `user_id` INT NOT NULL AUTO_INCREMENT UNIQUE, `username` VARCHAR(30) NOT NULL , `email` VARCHAR(50) NOT NULL , `password` VARCHAR(64) NOT NULL , `activation` CHAR(32) NOT NULL ) ENGINE = InnoDB;";
        $result = mysqli_query($link, $sql);
        if(!$result){
            echo "<div class='alert alert-danger'>There was an error inserting the users details in the database</div>" . mysqli_error($link);
            exit;
        }


    //check user inputs
    //define error messages
    $errors = "";
    $resultMessage = "";
    $username = $email = $password = null;
    $missingUsername = "<h5><strong>Please enter a username!</strong></h5>";
    $missingEmail = "<h5><strong>Please enter your email address!</strong></h5>";
    $invalidEmail = "<h5><strong>Please enter a valid email address!</strong></h5>";
    $missingPassword = "<h5><strong>Please enter a password!</strong></h5>";
    $invalidPassword = "<h5><strong>Your password should be at least 6 characters long and include one capital letter and one number!</strong></h5>";
    $differentPassword = "<h5><strong>Passwords do not match!</strong></h5>";
    $missingPassword2 = "<h5><strong>Please confirm your password!</strong></h5>";
    
    //get username
    if(empty($_POST["signupUsername"])){
        $errors .= $missingUsername;
    }else{
        $username = filter_var($_POST["signupUsername"], FILTER_SANITIZE_STRING);
    }
    
    //get email
    if(empty($_POST["signupEmail"])){
        $errors .= $missingEmail;
    }else{
        $email = filter_var($_POST["signupEmail"], FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors .= $invalidEmail;
        }
    }

    //get password
    if(empty($_POST["signupPassword"])){
        $errors .= $missingPassword;
    }elseif(!(strlen($_POST["signupPassword"]) >= 6 and preg_match('/[A-Z]/', $_POST["signupPassword"]) and preg_match('/[0-9]/', $_POST["signupPassword"]))){
        $errors .= $invalidPassword;
    }else{
        $password = filter_var($_POST["signupPassword"], FILTER_SANITIZE_STRING);
        
        //2nd password
        if(empty($_POST["signupPassword2"])){
            $errors .= $missingPassword2;
        }else{
            $password2 = filter_var($_POST["signupPassword2"], FILTER_SANITIZE_STRING);
            if($password !== $password2){
                $errors .= $differentPassword;
            }
        }
    }


    //if there are any errors, print errors
    if($errors){
        $resultMessage = "<div class='alert alert-danger'>" .$errors. "</div>";
        echo $resultMessage;
    }else{
        
        //prepare variables for the queries
        $username = mysqli_real_escape_string($link, $username);
        $email = mysqli_real_escape_string($link, $email);
        $password = mysqli_real_escape_string($link, $password);
        //$password = md5($password); 128bits long (Hexadecimal 32 char)
        $password = hash('sha256', $password);
        //256bits = 64 characters, more secure

        //check if username already exists
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($link, $sql); //run the query
        if(!$result){
            echo '<div class="alert alert-danger">Error running the query!</div>';
            //mysqli_error($link);
            exit;
        }

        $results = mysqli_num_rows($result);
        if($results){
            echo "<div class='alert alert-danger'>Username Already Exists!</div>";
            exit;
        }

        //if email already exixts
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($link, $sql); //run the query
        if(!$result){
            echo '<div class="alert alert-danger">Error running the query!</div>';
            exit;
        }
        $results = mysqli_num_rows($result);
        if($results){
            echo "<div class='alert alert-danger'>Email Already Registered!</div>";
            exit;
        }

        //create a unique activation code
        $activationKey = bin2hex(openssl_random_pseudo_bytes(16)); //16bytes hashing code (binary)


        //store user details in the users table
        $sql = "INSERT INTO users (username, email, password, activation) VALUES ('$username', '$email', '$password', '$activationKey')";
        $result = mysqli_query($link, $sql);
        if(!$result){
            echo "<div class='alert alert-danger'>There was an error inserting the users details in the database</div>" . mysqli_error($link);
            exit;
        }

        //send the user an email with a link to activate.php with their email and activation code
        $message = "Please click on this link to activate your account:\n\n";
        $message .= "http://localhost/nepalese%20food%20recipe/activate.php?email=" .urlencode($email) . "&key=$activationKey";
        if(mail($email, 'Confirm Your Registration', $message, 'From: nepalesefood@gmail.com')){
            echo "<div class='alert alert-success'>Thank You for registering! A confirmation email has been sent to $email. Please click on the link to activate your account!</div>";
        }
    }
?>