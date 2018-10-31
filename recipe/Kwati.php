<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kwati</title>

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
    <h1>Nepali Beans Stew – Kwati</h1>
    <div class="container-fluid">
        <div class="thumbnail">
            <img src="images/kwati.jpg" alt="Kwati" style="width:100%">
            <div class="caption">
             <p>Kwāti (Nepal Bhasa: क्वाती (where क्वा = hot and ती = soup); Nepali: क्वाती) is a mixed soup of nine types of sprouted beans. It is a traditional Nepalese dish consumed on the festival of Gun Punhi, the full moon day of Gunlā which is the tenth month in the Nepal Era lunar calendar. Kwāti is eaten as a delicacy and for its health benefits and ritual significance.</p>
            </div>
        </div>
    <h3>Utensils:</h3>
    <ul>
	<li>**  Cooking Pot   **</li>
	<li>**  Plates to serve  **</li>
    <li>**  Bowls  **</li></ul>
 
    <h3>Ingredients:</h3>
	<ul>
        <li>**  3 cups mixed beans  **</li>
        <li>**  Jwanu – 1 Teaspoon, Fennel seeds – 1 Teaspoon, Mustard seeds – 1 Teaspoon, Cumin powder – 1 Tablespoon  **</li>
        <li>**  Coriander powder – 1 Tablespoon, Minced garlic – 1 Tablespoon, Minced ginger – 1 Tablespoon  **</li>
        <li>**  Fresh red minced chilies - 3, Turmeric - ½ teaspoon, Freshly ground pepper -1 teaspoon  **</li>
        <li>**  Fresh red minced chilies - 3, Turmeric - ½ teaspoon, Freshly ground pepper -1 teaspoon  **</li>
        <li>**  Chopped tomatoes - 1 cup, Plain yogurt - 2 cups, Vegetable broth - 4 cups  **</li>
        <li>**  Mustard oil - 3 tablespoons, Table salt, Finely chopped green onion - 2 tablespoons  **</li>
    </ul>	

<h3>Method:</h3>
    <ol>
        <li>**  Wash and soak the mixed beans overnight.  **</li>
        <li>**  Cover the beans in a warm place to allow sprouting for 3-4 days.  **</li>
        <li>**  Heat oil in a saucepan and fry thyme, fennel seeds, and mustard seeds until light brown.  **</li>
        <li>**  Add 3 cups of sprouted beans and fry for 2 min. under medium heat.  **</li>
        <li>**  Add chili, cumin, coriander, garlic, ginger, turmeric, salt, and pepper and stir for about 2 min.  **</li>
        <li>**  Add tomatoes, broth and yogurt to the beans’ mixture.  **</li>
        <li>**  Bring to a boil and let simmer in low heat until the sprouts are tender.  **</li>
    </ol>

    <h2>Garnish with chopped green onions and serve with rice.</h2>
    </div>
       <h3 style="margin-top:50px;margin-bottom:50px;">A well explained video description is given below</h3>
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/vz1IXtQwglk" frameborder="0" allowfullscreen></iframe>
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