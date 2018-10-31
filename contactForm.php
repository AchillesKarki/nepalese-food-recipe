<?php
    
    //connect to the database
    include ('connect.php');
    
    //
    $sql = "CREATE TABLE IF NOT EXISTS `nepalese_food_recipe`.`contact` ( `contact_id` INT NOT NULL AUTO_INCREMENT UNIQUE, `contact_name` VARCHAR(30) NOT NULL , `contact_email` VARCHAR(50) NOT NULL , `contact_phone` VARCHAR(30) NOT NULL , `contact_Message` VARCHAR(8000) NOT NULL ) ENGINE = InnoDB;";
        $result = mysqli_query($link, $sql);
        if(!$result){
            echo "<div class='alert alert-danger'>There was an error inserting the users details in the database</div>" . mysqli_error($link);
            exit;
        }

    //check user inputs
    //define error messages
    $errors = "";
    $resultMessage = "";
    $contactName = $contactEmail = $contactPhone = $contactMessage = "";
    $missingcontactName = "<h5>Please enter your name!</h5>";
    $missingcontactEmail = "<h5>Please enter your email address!</h5>";
    $invalidcontactEmail = "<h5>Please enter a valid email address!</h5>";
    $missingcontactPhone = "<h5>Please enter your phone number!</strong></h5>";
    $missingcontactMessage = "<h5>Please enter your message!</h5>";
    
    //get name
    if(empty($_POST["contactName"])){
        $errors .= $missingcontactName;
    }else{
        $contactName = filter_var($_POST["contactName"], FILTER_SANITIZE_STRING);
    }
    
    //get email
    if(empty($_POST["contactEmail"])){
        $errors .= $missingcontactEmail;
    }else{
        $contactEmail = filter_var($_POST["contactEmail"], FILTER_SANITIZE_EMAIL);
        if(!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)){
            $errors .= $invalidcontactEmail;
        }
    }

    //get phone
    if(empty($_POST["contactPhone"])){
        $errors .= $missingcontactPhone;
//    elseif(!(strlen($_POST["signupPassword"]) >= 6 and preg_match('/[A-Z]/', $_POST["signupPassword"]) and preg_match('/[0-9]/', $_POST["signupPassword"]))){
//        $errors .= $invalidPassword;
    }else{
        $contactPhone = filter_var($_POST["contactPhone"], FILTER_SANITIZE_STRING);
    }

    if(empty($_POST["contactMessage"])){
        $errors .= $missingcontactMessage;
    }else{
        $contactMessage = filter_var($_POST["contactMessage"], FILTER_SANITIZE_STRING);
    }


    //if there are any errors, print errors
    if($errors){
        $resultMessage = "<div class='alert alert-danger text-center' style='width:40%; margin:0px auto 20px auto;'>" .$errors. "</div>";
        echo $resultMessage;
    }else{
        
        //prepare variables for the queries
        $contactName = mysqli_real_escape_string($link, $contactName);
        $contactEmail = mysqli_real_escape_string($link, $contactEmail);
        $contactPhone = mysqli_real_escape_string($link, $contactPhone);
        $contactMessage = mysqli_real_escape_string($link, $contactMessage);
        
    
        //store user details in the users table
        
        
        $sql = "INSERT INTO contact (contact_name, contact_email, contact_phone, contact_Message) VALUES ('$contactName', '$contactEmail', '$contactPhone', '$contactMessage')";
        $result = mysqli_query($link, $sql);
        if(!$result){
            echo "<div class='alert alert-danger'>There was an error inserting the users details in the database</div>" . mysqli_error($link);
            exit;
        }

        
            echo "<div class='alert alert-success'>Thank You for your message! We will contact you as soon as possible!</div>";
    }
?>