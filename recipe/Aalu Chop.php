<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aalu Chop</title>

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
    <div class="container-fluid" style="width:80%">
    <h1>Aalu Chop</h1>
    <div class="container-fluid">
        <div class="thumbnail">
            <img src="images/Aaluchop.jpg" alt="Aalu Chop" style="width:100%">
            <div class="caption">
              <p>Aalu chop is a bengali telebhaja ( snack) recipe. Bengalis have a culture of having telebhaja ( fried snacks) and moori ( puffed rice) in the evening along with their family and friends. Aloo chop is a most common telebhaja.</p>
            </div>
        </div>
    <h3>Utensils:</h3>
    <ul>
	<li>**  Pan - 2   **</li>
	<li>**  Plate to serve  **</li>
    <li>**  Spatula  **</li></ul>
 
    <h3>Ingredients:</h3>
	<ul>
        <li>** 	Boiled and peeled Potatoes (aloo) - 5   **</li>
        <li>**  Coriander powder- 1 table spoon  **</li>
        <li>**  Cumin powder- 1 tablespoon  **</li>
        <li>**  Aspherendo ( hing)- a pinch  **</li>
        <li>**  Salt to taste **</li>
        <li>**  Red chili powder to taste  **</li>
        <li>**  Green Chilies finely chopped- 1 or 2  **</li>
        <li>**  Fresh Coriander leaves (finely chopped) -1 tablespoon  **</li>
        <li>**  Besan (Gram flour) -1cup  **</li>
        <li>**  Thyme (jwano) seeds- 1/2tsp  **</li>
        <li>**  Oil for deep frying  **</li>

    </ul>
	

<h3>Method:</h3>
    <ol>
        <li>**  Take besan in a bowl add ½ teaspoon salt, chili powder, hing  & thyme seed  to it **</li>
        <li>**  Add water slowly stirring the mixer by hand making a batter (batter should not be too thick or too thin)  **</li>
        <li>**  Keep the batter aside for a while **</li>
        <li>**  Take the boiled potatoes in another bowl and mash it   **</li>
        <li>**  Add salt, chili powder, Coriander and cumin powder, coriander leaves, and green chilies    **</li>
        <li>**  Mix it well  **</li>
        <li>**  Take small part of the potato mixture and make a ball shape then flat it by fingers    **</li>
        <li>**  Heat oil in a pan; see the oil gets really hot **</li>
        <li>**  Dip each ball in the batter and drop into the oil and deep fry them in the oil till they become golden brown   **</li>
        <li>**  Serve hot with any type of paste achar or tomato sauce  **</li>
       
    </ol>

    <h2>Your Aalu Chop is ready to serve.</h2>
    </div>
       <h3 style="margin-top:50px;margin-bottom:50px;">A well explained video description is given below</h3>
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/watch?v=eTy9HamdE5k" frameborder="0" allowfullscreen></iframe>
        <?php
        if(!empty($_SESSION['username'])){
            echo '<br><br>
            <button class="btn btn-danger btn-block" onclick=""><i class="fa fa-user"> </i> LIKE </button>';
        }
        ?>
    <h3 style="margin-bottom:80px;">There is no sincerer love than the love of food.</h3>
    <h3 style="margin-bottom:80px;">This is it</h3>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>