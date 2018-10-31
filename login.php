<?php
    //start session
    session_start();
    //connect to the database
    include('connect.php');
    //check user inputs
    //define error messages
    $errors = "";
    $resultMessage = "";
    $missingEmail = "<h5><strong>Please enter your email address!</strong></h5>";
    $missingPassword = "<h5><strong>Please enter your password!</strong></h5>";
    
    //get email
    if(empty($_POST["signinEmail"])){
        $errors .= $missingEmail;
    }else{
        $email = filter_var($_POST["signinEmail"], FILTER_SANITIZE_EMAIL);
    }

    //get password
    if(empty($_POST["signinPassword"])){
        $errors .= $missingPassword;
    }else{
        $password = filter_var($_POST["signinPassword"], FILTER_SANITIZE_STRING);
    }

    //if there are any errors
    if($errors){
        $resultMessage = "<div class='alert alert-danger'>" .$errors. "</div>";
        echo $resultMessage;
    }else{
        //no errors, prepare variables for query
        $email = mysqli_real_escape_string($link, $email);
        $password = mysqli_real_escape_string($link, $password);
        $password = hash('sha256', $password);
        
        //check if email & password exists
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND activation = 'activated'";
        $result = mysqli_query($link, $sql);
        if(!$result){
            echo "<div class='alert alert-danger'>Error running the query!</div>";
            exit;
        }
        $count = mysqli_num_rows($result);
        //if email and password doesnt match, print error
        if($count !== 1){
            echo "<div class='alert alert-warning'>Wrong username or password!</div>";
        }else{
            //log the user in and set session variables
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            
            if(empty($_POST['rememberme'])){
                //if remember is not checked
                echo "success";
            }else{
                //create two variables $authenticator1 and $authenticator2
                $authenticator1 = bin2hex(openssl_random_pseudo_bytes(10));
                $authenticator2 = (openssl_random_pseudo_bytes(20));
                
                //store them in a cookie
                function f1($a, $b){
                    $c = $a . "," . bin2hex($b);
                    return $c;
                }
                
                $cookieValue = f1($authenticator1, $authenticator2);
                
                setcookie(
                    "rememberme", 
                    $cookieValue,
                    time() + 15*24*60*60
                );
                
                //run query to store them in rememberme table
                function f2($a){
                    $b = hash('sha256', $a);
                    return $b;
                }
                
                $f2authenticator2 = f2($authenticator2);
                
                $user_id = $_SESSION['user_id'];
                
                $expiration = date('Y-m-d H:i:s', time() + 15*24*60*60);
                
                $sql = "INSERT INTO rememberme (authenticator1, f2authenticator2, user_id, expires) VALUES ('$authenticator1', '$f2authenticator2', '$user_id', '$expiration')";
                
                $result = mysqli_query($link, $sql);
                if(!$result){
                    echo "<div class='alert alert-danger'>There was an error storing data to remember you next time!</div>";
                }else{
                    echo "success";
                }
            }
        }
    }
?>