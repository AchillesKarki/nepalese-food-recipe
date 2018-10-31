<?php
   include ("connect.php");

    //create recipe table
    $sql = "CREATE TABLE IF NOT EXISTS `nepalese_food_recipe`.`recipe` ( `recipe_id` INT NOT NULL AUTO_INCREMENT UNIQUE, `recipe_name` VARCHAR(30) NOT NULL , `recipe_type` VARCHAR(30) NOT NULL) ENGINE = InnoDB;";
        $result = mysqli_query($link, $sql);
        if(!$result){
            echo "<div class='alert alert-danger'>There was an error inserting data in the database</div>" . mysqli_error($link);
            exit;
        }
    if(isset($_GET['recipeSearch'])){
        $recipe_name = $_GET['recipeSearch'];
        $sql = "SELECT * FROM recipe WHERE recipe_name LIKE '%$recipe_name%' OR 'position' LIKE '%$recipe_name%' OR 'category' LIKE '%$recipe_name%' OR 'location' LIKE '%$recipe_name%' OR 'description' LIKE '%$recipe_name%' OR 'refno' LIKE '%$recipe_name%' ORDER BY recipe_name LIMIT 10";
        $result = mysqli_query($link, $sql);
        if(!$result){
            echo "<div class='alert alert-danger'>There was an error</div>";
            echo "<div class='alert alert-danger'>". mysqli_error($link) ."</div>";
            exit;
        }
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $name = $row['recipe_name'];
            echo "<div class='listRecipe'><a href='recipe/$name.php' target='myIframe' onclick='goto()'>" . $name . "</a></div>";
        }
    }
?>