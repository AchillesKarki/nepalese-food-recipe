<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aalu Sadeko</title>

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
    <h1>Aalu Sadeko</h1>
    <div class="container-fluid">
        <div class="thumbnail">
            <img src="images/Alusadeko.jpg" alt="Aalu Sadeko" style="width:100%">
            <div class="caption">
              <p>Aalu Sadeko is a boiled potato dish mostly popular in the Newar community in Kathmandu valley. Aloo (or alu) is potatoes and sadeko roughly translates into marinated.</p>
            </div>
        </div>
    <h3>Utensils:</h3>
    <ul>
	<li>** Small Pan  **</li>
	<li>** Pressure cooker **</li>
        <li>** Spoon **</li></ul>
        <li>** Bowl **</li></ul>
 
    <h3>Ingredients:</h3>
	<ul>
        <li>**  Red potatoes-1 lb    **</li>
        <li>**  Onion-1small sized  **</li>
        <li>**  Tomato-1 **</li>
        <li>**  Garlic cloves- 2(finely chopped)  **</li>
        <li>**  Green chili peppers- 2 **</li>
        <li>**  Mustard oil- 2 table spoon (or bhuteko tori ko tel)  **</li>
        <li>**  Ginger paste-1 tea spoon of  **</li>
        <li>**  Salt- as your taste  **</li>
        <li>**  Fenugreek-1/2 tea spoon **</li>
        <li>**  Red chili powder-1/2 tea spoon  **</li>
        <li>**  Cumin powder-1 tea spoon of  **</li>
        <li>**  Turmeric powder-1/4 table spoon of  **</li>
        <li>**  Cilantro- 1 table spoon (finely chopped) **</li>
        <li>**  Lemon juice-1 table spoon **</li>
    </ul>
	

<h3>Method:</h3>
    <ol>
        <li>**   Clean all the potatoes and put it in the presser cooker  **</li>
        <li>**   Add 1 tea spoon of salt to it  **</li>
        <li>**   Now add about a glass of water **</li>
        <li>**   Let the potato boil in the cooker **</li>
        <li>**   In the meantime finely chop onion and tomato **</li>
        <li>**   When the potato gets boiled let it cools enough to touch, cut them (1 potato into 4 parts)  **</li>
        <li>**   Put the cut potatoes in a big bowl   **</li>
        <li>**   Now add onion, tomato and green chili **</li>

    </ol>

    <h2>Your Aalu Ko Achar is ready to serve.</h2>
    </div>
       <h3 style="margin-top:50px;margin-bottom:50px;">A well explained video description is given below</h3>
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/GpiDFO_vuNs" frameborder="0" allowfullscreen></iframe>
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