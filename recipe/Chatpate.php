<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Chatpate</title>

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
    <h1>Chatpate</h1>
    <div class="container-fluid">
        <div class="thumbnail">
            <img src="images/chatpate.jpg" alt="Chatpate" style="width:100%">
            <div class="caption">
              <p>Chatpate is a popular Nepali snack that is quick and easy to make. You can find vendors in the streets mixing up the delicious snack and selling it on the spot.</p>
            </div>
        </div>
    <h3>Utensils:</h3>
    <ul>
	<li>** Bowl  **</li>
	<li>** Spatula  **</li>
        <li>** Plate or paper to cover the bowl  **</li></ul>
 
    <h3>Ingredients:</h3>
	<ul>
        <li>**  Puffed rice (Muri)-1 cup  **</li>
        <li>**  Chickpea (bhuteko kalo chana) -1/4 cup  **</li>
        <li>**  Peanuts with skin-1 /4 cup **</li>
        <li>**  Coriander leaves chopped-1/4 cup  **</li>
        <li>**  Tomato chopped-1  **</li>
        <li>**  Cucumber cut into dice -1/2  **</li>
        <li>**  Daikon Radish- cut into dice- 1/2  **</li>
        <li>**  Carrot cut into dice- 1  **</li>
        <li>**  Onion chopped-1  **</li>
        <li>**  Lime juice- 2 teaspoons  **</li>
        <li>**  Cooking oil-1 teaspoon  **</li>
        <li>**  Chaat masala –Pinch (optional)  **</li>
        <li>**  Green chili- 2   **</li>
        <li>**  Red chili powder- just for color or as your taste   **</li>
        <li>**  Salt 1 tea spoon (or on your taste)   **</li>

    </ul>
	

<h3>Method:</h3>
    <ol>
        <li>**  In a big bowl put muri, salt, red chili powder and stir it well  **</li>
        <li>**  Close the bowl with a plate or a paper and shake the bowl badly  **</li>
        <li>**  Add cucumber, radish, peanuts, onion and tomato one at time, shake it well  **</li>
        <li>**  Also add chickpea coriander leaves and mix it well    **</li>
        <li>**  Add oil and lime juice   **</li>
        <li>**  Again close the bowl and shake it well   **</li>
        <li>**  Add chaat masala to add extra flavor, if desired   **</li>
        

    </ol>

    <h2>Serve in a bowl or a cone made from newspaper</h2>
    </div>
       <h3 style="margin-top:50px;margin-bottom:50px;">A well explained video description is given below</h3>
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/iiFPY0BTohY" frameborder="0" allowfullscreen></iframe>
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