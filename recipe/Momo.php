<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Momo</title>

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
    <h1>Nepalese Dumplings – Momos</h1>
    <div class="container-fluid">
        <div class="thumbnail">
            <img src="images/momo.jpg" alt="Momo" style="width:100%">
            <div class="caption">
             <p>Momo is a type of steamed bun with some form of filling. Momo has become a traditional delicacy in Nepal, Tibet and among Nepalese/Tibetan communities in Bhutan, as well as Sikkim state and Darjeeling district of India. It is one of the most popular fast foods in Nepal. Momos have also spread to other countries like United States (some parts), UK and India.</p>
            </div>
        </div>
    <h3>Utensils:</h3>
    <ul>
	<li>**  Momo making Utensil   **</li>
	<li>**  Plates to serve  **</li>
    <li>**  Bowls  **</li></ul>
 
    <h3>Ingredients (Dough for wrappers):</h3>
	<ul>
        <li>**  4 cups all-purpose flour  **</li>
        <li>**  1 tablespoon oil  **</li>
        <li>**  Water, as required  **</li>
        <li>**  1 pinch salt  **</li>
    </ul>
    
    <h3>Ingredients (Fillings):</h3>
	<ul>
        <li>**  2 lbs lean ground meat (50% lamb or chicken and 50% pork works best)  **</li>
        <li>**  1 cup red onion, finely chopped  **</li>
        <li>**  1⁄2 cup green onion, finely chopped  **</li>
        <li>**  1 cup ripe tomatoes, finely chpped and 3 tablespoons fresh cilantro, chopped  **</li>
        <li>**  1 tablespoon fresh garlic, minced and 1 tablespoon fresh ginger, minced  **</li>
        <li>**  1⁄4 teaspoon nutmeg, freshly grated, 1⁄2 teaspoon turmeric  **</li>
        <li>**  1 tablespoon curry powder, or momo masala if available  **</li>
        <li>**  3 fresh red chilies, minced (or to taste)  **</li>
        <li>**  3 tablespoons cooking oil salt and pepper  **</li>
    </ul>
	

<h3>Method:</h3>
    <ol>
        <li>**  Dough: In a large bowl combine flour, oil, salt and water.
Mix well, knead until the dough becomes homogeneous in texture, about 8-10 minute.
Cover and let stand for at least 30 minute.
Knead well again before making wrappers.
Filling: In a large bowl combine all filling ingredients.
Mix well, adjust for seasoning with salt and pepper.
Cover and refrigerate for at least an hour to allow all ingredients to impart their unique flavors.
This also improves the consistency of the filling.
Assembly:.
Give the dough a final knead.
Prepare 1-in. dough balls.
Take a ball, roll between your palms to spherical shape.
Dust working board with dry flour.
On the board gently flatten the ball with your palm to about 2-in circle.
Make a few semi-flattened circles, cover with a bowl.
Use a rolling pin to roll out each flattened circle into a wrapper.
For well executed MOMO's, it is essential that the middle portion of the wrapper be slightly thicker than the edges to ensure the structural integrity of dumplings during packing and steaming.
Hold the edges of the semi-flattened dough with one hand and with the other hand begin rolling the edges of the dough out, swirling a bit at a time.
Continue until the wrapper attains 3-in diameter circular shape.
Repeat with the remaining semi-flattened dough circles.
Cover with bowl to prevent from drying.
For packing hold wrapper on one palm, put one tablespoon of filling mixture and with the other hand bring all edges together to the center, making the pleats.
Pinch and twist the pleats to ensure the absolute closure of the stuffed dumpling.
This holds the key to good tasting, juicy dumplings.
Heat up a steamer, oil the steamer rack well.
This is critical because it will prevent dumplings from sticking.
Arrange uncooked dumplings in the steamer.
Close the lid, and allow steaming until the dumplings are cooked through, about 10 minutes.
Take dumplings off the steamer and serve immediately.
Alternatively, you can place uncooked dumplings directly in slightly salted boiling water and cook until done, approximately 10 minutes. Be careful not to over boil the dumplings.
You may also slightly sauté cooked dumplings in butter before serving.  **</li>
    </ol>

    <h2>To serve, arrange the cooked dumplings (MOMO's) on serving plate with hot tomato achar or any other chutneys as condiment.</h2>
    </div>
    <h3 style="margin-top:50px;margin-bottom:50px;">A well explained video description is given below</h3>
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/RUJ888EK0Jc" frameborder="0" allowfullscreen></iframe>
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