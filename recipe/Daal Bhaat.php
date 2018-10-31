<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Daal Bhaat</title>

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
        <h1>Daal Bhaat</h1>
        <div class="container-fluid">
            <div class="thumbnail">
            <img src="images/daalbhaat.jpg" alt="Daal Bhaat" style="width:100%">
            <div class="caption">
              <p>Dal-bhat-tarkari is the standard meal eaten twice daily. However, with land suitable for irrigated rice paddies in short supply, other grains supplement or even dominate. Wheat becomes unleavened flat bread (roti or chapati). Maize (makai), buckwheat (fapar), barley (jau), or millet (kodo) become porridge-like (dhido or ato). Tarkari can be spinach and fresh greens (sag), fermented and dried greens (gundruk or sinki), white radish (mula), potatoes (alu), green beans (simi), tomatoes (golbeda), cauliflower (kauli), cabbage (bandakopi), pumpkin (farsi), etc.
    </p>
            </div>
            </div>
        <h3>Utensils:</h3>
        <ul>
        <li>**  Pan - 2   **</li>
        <li>**  Rice Cooker   **</li>
        <li>**  Spatula   **</li>
        <li>**  Bowl and Plates for serving  **</li></ul>

        <h3>Ingredients For the dal (lentils):</h3>
        <ul>
            <li>**  1 cup lentils  **</li>
            <li>**  3 1/2 cup water  **</li>
            <li>**  2 onions  **</li>
            <li>**  2 garlic cloves  **</li>
            <li>**  Salt and pepper, as needed  **</li>
            <li>**  1 teaspoon garam masala  **</li>
            <li>**  5 cardamom seeds and 4 tablespoons neutral oil  **</li>

        <h3>Ingredients For the bhat (rice):</h3>
            <li>**  1 cup basmati rice  **</li>
            <li>**  3 cups water  **</li>
            <li>**  Kosher salt  **</li>
         <h3>Ingredrients For the tarkari (vegetable curry)</h3>   
            <li>**  1 lb cauliflower florets  **</li>
            <li>**  3 potatoes, peeled and diced, 3 carrots, cut into thick slices, 1 cup peas  **</li>
            <li>**  1 onion, minced, 3 garlic cloves, crushed, 1 1/2 tablespoon ground ginger, 1/2 teaspoon ground coriander, 3 cardamom seeds  **</li>
            <li>1 small chili, A few saffron threads, Salt, 1 1/2 teaspoon garam masala, 1 teaspoon cumin, 4 tablespoons neutral oil and Water  **</li></ul>


    <h3>Method:</h3>
        <ol>
           <h3>Dal (Lentils)</h3>
            <li>**  Dal (lentils)
    Rinse the lentils with water, drain for 10 minutes and pat dry.

    Heat oil over medium heat. Fry the onions and garlic for 1 minute and add the pepper, cardamom, salt and garam masala.

    Add the lentils and sauté a little.

    Cover with cold water and cook covered over medium heat until the lentils get a little mushy (about 1 hour).  **</li>
           <h3>Bhaat (Rice)</h3>
            <li>**  Bhat (rice)
    Place the rice in water with salt, bring to boil and then keep on low heat until water is completely absorbed.  **</li>
           <h3>Tarkari (vegetable curry)</h3>
            <li>**  Tarkari (vegetable curry)
    Sauté onions for a few minutes. Add garlic, salt and garam masala.

    Add the potatoes and fry well.

    Add water to cover three quarters and add the peas, pepper and remaining spices.

    Cook over medium heat for 45 minutes.  **</li>
           <h3>Aachar(Pickle)</h3>
            <li>**  Pickles
    Wash and cut the length cabbage, carrots and beans, fry in oil for 5 minutes.

    Add 1/2 cup of water and blanch over low heat for 15 minutes.

    Add curry powder, vinegar and lime.

    Add salt and pepper.

    Cook for 5 to 10 additional minutes.

    Serve warm or cold.

    Serve dal bhat with papadums.  **</li>
        </ol>

        <h2>Your Daal Bhaat is ready to serve.</h2>
        </div>
        <h3 style="margin-top:50px;margin-bottom:50px;">A well explained video description is given below</h3>
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/rxYuZ4SmQKU" frameborder="0" allowfullscreen></iframe>
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