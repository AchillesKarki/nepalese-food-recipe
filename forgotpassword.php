<?php
    session_start();
    include ("connect.php");
    
    //create forgotpassword table
    $sql = "CREATE TABLE IF NOT EXISTS `nepalese_food_recipe`.`forgotpassword` (`user_id` INT NOT NULL , `rkey` CHAR(32) NOT NULL , `time` INT NOT NULL , `status` VARCHAR(7) NOT NULL ) ENGINE = InnoDB;";
        $result = mysqli_query($link, $sql);
        if(!$result){
            echo "<div class='alert alert-danger'>There was an error inserting the users details in the database</div>" . mysqli_error($link);
            exit;
        }


    $errors = "";
    $resultMessage = "";
    $missingEmail = "<h5><strong>Please enter your email address!</strong></h5>";
    $invalidEmail = "<h5><strong>Please enter a valid email address!</strong></h5>";
 
    if(empty($_POST["forgotPasswordEmail"])){
            $errors .= $missingEmail;
        }else{
            $email = filter_var($_POST["forgotPasswordEmail"], FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors .= $invalidEmail;
            }
    }
    
        //if there are any errors, print errors
    if($errors){
        $resultMessage = "<div class='alert alert-danger'>" .$errors. "</div>";
        echo $resultMessage;
        exit;
    }

    $email = mysqli_real_escape_string($link, $email);

    //if email already exixts
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($link, $sql); //run the query
        if(!$result){
            echo '<div class="alert alert-danger">Error running the query!</div>';
            exit;
        }
        $count = mysqli_num_rows($result);
        if(!$count){
            echo "<div class='alert alert-danger'><strong>That email is not registered! Please enter your valid email address!</strong></div>";
            exit;
        }

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $user_id = $row['user_id'];
    
        $key = bin2hex(openssl_random_pseudo_bytes(16));

        $time = time();

        $status = "pending";
    
        $sql = "INSERT INTO forgotpassword (`user_id`, `rkey`, `time`, `status`) VALUES ('$user_id', '$key', '$time', '$status')";

        $result = mysqli_query($link, $sql);
        
        if(!$result){
            echo "<div class='alert alert-danger'>There was an error inserting the users details in the database</div>" . mysqli_error($link);
            exit;
        }
        
        //send email with the link to resetpassword.php with user id and activation code
        $message = "Please click on this link to reset your password:\n\n";
        $message .= "http://localhost/nepalese%20food%20recipe/resetpassword.php?user_id=$user_id&key=$key";
        if(mail($email, 'Reset Your Password', $message, 'From: nepalesefood@gmail.com')){
            echo "<div class='alert alert-success'>An email has been sent to $email. Please click on the link to reset your password!</div>";
        }

?>