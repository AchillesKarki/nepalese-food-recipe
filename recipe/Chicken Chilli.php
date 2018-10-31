<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Chicken Chilli</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Lobster+Two" rel="stylesheet">
    <style>
        body{
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            font-family: 'Courgette'; 
            line-height: 2em;
            letter-spacing: 1.5px;
            text-align: center;
            margin: 0px 5%;
            }  
        h1{
            margin-top: 70px;
            margin-bottom: 30px;
        }
        
        .container-fluid{
            color: #fff;
            font-size: 18px;
            margin-bottom: 25px;
        }
        
        ul li,ol{
            list-style-type: none;
        }
        
    </style>
  </head>

<body>
    <div class="container-fluid" style="width:80%" id="mainRecipe">
       <h1>Chicken Chilli</h1>
    <div class="container-fluid">
        <div class="thumbnail">
            <img src="images/chickenchilli.jpg" alt="Chicken Chilli" style="width:100%">
            <div class="caption">
              <p>Chilli chicken is a popular Indo-Chinese dish of chicken. In Nepal, this may include a variety of dry chicken preparations. Though mainly boneless chicken is used in this dish, some people also recommend to use boned chicken too.</p>
            </div>
        </div>
    <h3>Utensils:</h3>
    <ul>
	<li>**  Pan - 2   **</li>
	<li>**  Plate to serve  **</li>
    <li>**  Wooden spatula  **</li></ul>
 
    <h3>Ingredients:</h3>
	<ul>
        <li>**  Chicken Breast- 2 lbs (boneless)  **</li>
        <li>**  Onion- 1  **</li>
        <li>**  Bell pepper- 1 large  **</li>
        <li>**  Green chili- 8  **</li>
        <li>**  Tomatoes- 3 big  **</li>
        <li>**  Chili powder- 1 table spoon  **</li>
        <li>**  Cumin Powder- 1 teaspoon  **</li>
        <li>**  Tomato ketchup-3 table spoon  **</li>
        <li>**  Chopped cilantro- 1 table spoon  **</li>
        <li>**  Fenugreek and thyme seed – a pinch  **</li>
    </ul>
	

<h3>Method:</h3>
    <ol>
        <li>**  Cut the green leaf onion, tomatoes and bell peppers into medium size (for onion best way is to cut the onion into Quarters (1/4th and take off each skin one by one)  **</li>
        <li>**  Cut the chicken breast in small size (cubical)  **</li>
        <li>**  Cut the green chili into 2 pieces  **</li>
        <li>**  Heat oil in a pan.  **</li>
        <li>**  Add onion, green leaf onion and green peppers for about 2 to 3 minutes ( do not cook it fully)  **</li>
        <li>**  Add turmeric and salt and take it off the heat  **</li>
        <li>**  Take another pan add a cup of water and add pieces of chicken (you can do it simultaneously while frying onion, green peppers, etc)  **</li>
        <li>**  When chicken turns white take it off the heat and soak off the water (need not boil to the fullest)  **</li>
        <li>**  Add the chicken into the mixture cook and stir it properly.  **</li>
        <li>**  Add cilantro, cumin and red chili powder and stir it gently  **</li>
        <li>**  When chicken seems to be fried /cooked, take it off the heat.  **</li>
        <li>**  Add tomato ketchup and mix it properly  **</li>
        <li>**  Now take another pan and heat one table spoon of oil  **</li>
        <li>**  Add Fenugreek and thyme seed  **</li>
        <li>**  When they turn golden brown add the pieces of green chilies.  **</li>
        <li>**  Take it off the heat  **</li>
        <li>**  Add it on top of the chicken and cover it for few minutes.  **</li>
    </ol>

    <h2>Your Chicken Chilli is ready to serve.</h2>
    </div>
       <h3 style="margin-top:50px;margin-bottom:50px;">A well explained video description is given below</h3>
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/icU04NVOh3w" frameborder="0" allowfullscreen></iframe>
        <?php
        if(!empty($_SESSION['username'])){
            echo '<br><br>
            <button class="btn btn-danger btn-block" onclick=""><i class="fa fa-user"> </i> LIKE </button>';
        }
        ?>
        <h3 style="margin-bottom:80px;">There is no sincerer love than the love of food.</h3>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>