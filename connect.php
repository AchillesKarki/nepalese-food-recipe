<?php
    //connect to the database
    $link = mysqli_connect("localhost", "food", "Revolution5", "nepalese_food_recipe");
    if(mysqli_connect_error()){
        die("ERROR: Unable to connect: " . mysqli_connect_error());
    }
?>