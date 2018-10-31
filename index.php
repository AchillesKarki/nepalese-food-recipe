<?php 
    include("connect.php");
//    include("remember.php");
    // include("logout.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A general guide on the recipe of Nepalese Cuisines. Different Nepalese foods can be made at home with available contents">
        <meta name="keywords" content="Food, Nepalese Food, Momo, Chowmin, Chicken, Mutton, Newari, Thakali" >  
        <title>Nepalese Food Recipe</title>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="mainStyling.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allura|Arvo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Courgette|Lobster+Two" rel="stylesheet">
        <style>
            #section1, #section2, #section3, #section4{
                margin: 0;
                padding-top: 60px;
                min-height: 900px;
            }
        </style>
        <script>
            //full height iframe
            function resizeIframe(obj) {
                obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
            }
        </script>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        
        <?php include("header.php");?>       
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"><a style="cursor:default">Recipes</a></li>
                    <?php
                        $sql = "SELECT DISTINCT `recipe_type` FROM `recipe` WHERE recipe_type != '' ORDER BY recipe_type ";
                        $result = mysqli_query($link, $sql);
                        if(!$result){
                            echo "<div class='alert alert-danger'>There was an error</div>";
                            echo mysqli_error($link);
                        }
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        $name = $row['recipe_type'];
                        $sql = "SELECT `recipe_name` FROM `recipe` WHERE recipe_type = '$name' ";
                        $result1 = mysqli_query($link, $sql);
                        if(!$result1){
                            echo "<div class='alert alert-danger'>There was an error</div>";
                            echo mysqli_error($link);
                        }
                        echo '<li><div class="dropdown"><a class="dropdown-toggle" type="button" data-toggle="dropdown" style="cursor:pointer">'.$name.'<span class="caret"></span></a><ul class="dropdown-menu">';
                        
                        while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)){
                            $name1 = $row1['recipe_name'];    
                            echo '<li><a href="recipe/'. $name1 .'.php" target="myIframe" onclick="goto()">'.$name1.'</a></li>';
                        }
                        echo '</ul></div></li>';
                        }
                        
                    ?>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <!-- /#page-content-wrapper -->
            <div id="page-content-wrapper">
                <div id="section1" class="container-fluid">
<!--
                    <video autoplay loop muted id="bgVideo">
                        <source src="video/video.mp4" type="video/mp4">
                    </video>   
-->
                    <div class="container-fluid" id="mainHeader"> 
                        <div id="mainDivInner">
                            <h1>Typical Nepalese Cuisines</h1>
                            <p>Nepal's cultural and geographic diversity provides ample space for a variety of cuisines based on ethnicity and on soil and climate.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#signupModal" data-toggle="modal" class="btn btn-lg" id="mainButton" style="color:#fff;">Sign up</a>
                                </div >
                                <div class="col-sm-6">
                                    <a href="#section2" id="mainButton" class="btn btn-lg" style="color:#fff;">Recipes</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container" id="homeCarouselContainer">
                       <h1>Famous Dishes</h1><br>
                        <div id="homeCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#homeCarousel" data-slide-to="1"></li>
                            <li data-target="#homeCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/daalBhat.jpg" alt="DaalBhat">
                                <div class="carousel-caption">
                                    <h4>Nepali Daal Bhaat</h4>
                                    <p><em>A typical Nepali Meal</em></p>
                                    <a href='recipe/Daal Bhaat.php' target='myIframe' onclick='goto()' class="btn btn-success">Recipe</a>
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/kwaati.jpg" alt="kwaati">
                                <div class="carousel-caption">
                                    <h4>Nepali Beans Stew – Kwati</h4>
                                    <p><em></em></p>
                                    <a href='recipe/Kwati.php' target='myIframe' onclick='goto()' class="btn btn-success">Recipe</a>
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/momo.jpg" alt="momo">
                                <div class="carousel-caption">
                                    <h4>Nepali Momo</h4>
                                    <p><em></em></p>
                                    <a href='recipe/Momo.php' target='myIframe' onclick='goto()' class="btn btn-success">Recipe</a>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#homeCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#homeCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                </div>
                <div id="section2" class="container-fluid">
                    <div class="container-fluid" style="margin-top:75px;">
                       <h1 id="header">RECIPES</h1>
                        <form method="get" id="recipeSearchForm">
                            <div id="searchRecipe">
                                <div class="input-group">
                                    <label class="sr-only" for="recipeSearch"></label><input type="text" class="form-control" placeholder="What are we looking for?" id="recipeSearch" name="recipeSearch"><span class="input-group-btn"><button class="btn" type="submit"><i class="glyphicon glyphicon-search"></i></button></span>
                                </div>
                            </div>
                        </form>
                        <div id="foundRecipe">

                        </div>
                        <iframe name="myIframe" id="myIframe" width="100%" height="100%" class="slideanim" frameborder="0" style="margin:30px 0px;" src="recipe/Chicken%20Chilli.php" scrolling="no" onload="resizeIframe(this);"></iframe>

                        <h1 class="text-center" style="color:#fff;font-size:42px;margin-top:100px;" id="famousDishes">"Famous Dishes"</h1>
                        <div id="mainFood" class="slideanim">
                            <div id="daalBhat">
                                <div class="row" >
                                    <div class="col-sm-8">
                                        <div>
                                            <h1>Nepali Daal Bhaat</h1><br>
                                            <p>Dal bhat is a traditional meal from the Indian subcontinent, popular in many areas of Nepal, Bangladesh and India. It consists of steamed rice and a cooked lentil soup called dal. It is a staple food in these countries. Bhat or Chawal means "boiled rice" in a number of Indo-Aryan languages.</p>
                                            <p>At higher elevations in Nepal, above 6,500 feet (2,000 m), where rice does not grow well, other grain such as maize, buckwheat, barley or millet may be substituted in a cooked preparation called Dhindo or atho in Nepal. Bhat may be supplemented with roti in Nepal (rounds of unleavened bread).

                                            Dal may be cooked with onion, garlic, ginger, chili, tomatoes, or tamarind, in addition to lentils or beans. It always contains herbs and spices such as coriander, garam masala, cumin, and turmeric. Recipes vary by season, locality, ethnic group and family.

                                            Dal bhat is often served with vegetable tarkari or torkari (तरकारी in Nepali) – a mix of available seasonal vegetables. It is also called Dal Bhat Tarkari (दाल भात तरकारी) in Nepali. There may also be yogurt or curry made of chicken, goat meat or fish. A small portion of pickle (called achar) is sometimes included.</p>
                                            <p class="text-center"><a href='recipe/Daal%20Bhaat.php' target='myIframe' onclick='goto()' class="btn btn-success">Recipe</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div id="parent"><img class="img img-responsive img-rounded" src="images/daalBhat.jpg" id="daalBhatImg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="mainFood" class="slideanim">
                            <div id="kwaati">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h1>Nepali Beans Stew – Kwati</h1><br>
                                        <p>Kwāti (Nepal Bhasa: क्वाँती; Nepali: क्वाँटी) is a mixed soup of nine types of sprouted beans. It is a traditional Nepalese dish consumed on the festival of Gun Punhi, the full moon day of Gunlā which is the tenth month in the Nepal Era lunar calendar. Kwāti is eaten as a delicacy and for its health benefits and ritual significance.

                                        The feast day coincides with Shravan Poornima of the month of Shravan in the Hindu lunisolar calendar which is celebrated as Janāi Purnimā (Raksha Bandhan), the festival of the sacred thread. The festival occurs in August</p>
                                        <p>Nine varieties of beans are used to make kwāti. The most commonly used ingredients are black gram, green gram, chickpea, field bean, soybean, field pea, garden pea, cowpea and rice bean.

                                        The beans are soaked in water for three to four days until they have sprouted. They are boiled with various spices to make a thick soup. Lovage seeds are bloomed in oil and added to it as the special seasoning. Flatbread cut into one-and-a-half-inch squares can be boiled with the kwāti for variety.</p>
                                        <p class="text-center"><a href='recipe/Kwati.php' target='myIframe' onclick='goto()' class="btn btn-success">Recipe</a>
                                    </div>
                                    <div class="col-sm-4"><img class="img img-responsive img-rounded" id="kwaatiImg" src="images/kwaati.jpg"></div>
                                </div>
                            </div>
                        </div>
                        <div id="mainFood" class="slideanim">
                            <div id="momo">
                                <div class="row">
                                    <div class="col-sm-8">
                                    <h1>Nepalese Dumplings – Momos</h1><br>
                                    <p>Momo is a type of steamed bun with some form of filling. Momo has become a traditional delicacy in Nepal, Tibet and among Nepalese/Tibetan communities in Bhutan, as well as Sikkim state and Darjeeling district of India. It is one of the most popular fast foods in Nepal. Momos have also spread to other countries like United States (some parts), UK and India.</p>
                                    <p>The dish is believed to be of Tibetan origin and since then has spread to other neighboring countries with the influx of Tibetan diaspora. Since this dish was initially popular among the Newar community of the Kathmandu Valley, one prevalent belief is that traveling Newar merchants brought the recipe and the name momo from Tibet where the Newar Merchants use go to trade. They modified the seasonings of the dish with available ingredients, such as water buffalo, and kept the same name.</p>
                                    <p>There are typically two types of momo, steamed and fried. Momo is usually served with a dipping sauce (locally called chutney/achhar), normally made with tomato as the base ingredient. Soup momo is a dish with steamed momo immersed in a meat broth. Pan-fried momo is also known as kothey momo. Steamed momo served in hot sauce is called C-momo. There are also a variety of Tibetan momos, including tingmo and thaipo.</p>
                                    <p class="text-center"><a href='recipe/Momo.php' target='myIframe' onclick='goto()' class="btn btn-success">Recipe</a>
                                    </div>
                                    <div class="col-sm-4"><img class="img img-responsive img-rounded" id="momoImg" src="images/momo.jpg"></div>
                                </div>
                            </div>
                        </div>

                        <div id="mainFood" class="slideanim">
                            <div id="momo">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h1>Nepalese Noodle Soup – Thukpa</h1><br>
                                        <p>Thukpa is a popular soup in the northern Himalayan region of Nepal. Fragrant, hearty and simple to prepare, this satisfying soup recipe is an easy midweek winter warmer.</p>
                                        <p>The Nepalese version of thukpa contains chili powder, masala (usually garam masala), which gives it a hot and spicy flavor. It is considered as one of the Indo-Tibetan food, having great influence both from Tibet (noodles/soup) and from South Asia(spices/garam masala).</p>
                                        <p class="text-center"><a href='recipe/Thukpa.php' target='myIframe' onclick='goto()' class="btn btn-success">Recipe</a>
                                    </div>
                                    <div class="col-sm-4"><img class="img img-responsive img-rounded" id="thukpaImg" src="images/thukpa.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
                <div id="section3" class="container-fluid">
                    <div class="container">
                        <div id="header"><h1>ABOUT</h1></div>
                        <div class="slideanim para" >
                            <p>Nepalese food recipe is a web application with two main goals, promoting nepali foods, and providing users with best and most simple recipes to cook foods. If you're looking for recipes to the foods you crave for, this is the right place.</p><p> With Nepalese food recipe, you can easily learn and know how easy and quick is to cook meals which you desire. This is a very good platform for cooking enthusiasts who want to cook the different varieties of foods by themselves looking at the cooking steps. The app is user friendly, and highly interactive, simple and simple ui has made it more efficient to use.</p>
                        </div>
                    </div>
                </div>
                <div id="section4" class="container-fluid">
                    <div class="container" id="mainContainer">
                        <h1 class="text-center header">CONTACT US</h1>
                        <div class="row slideanim">
                            <div class="col-md-12">
                                <div class="well well-xs">
                                    <form class="form-horizontal" method="post" id="contactForm">
                                        <fieldset>
                                            <div id="contactformMessage"></div>
                                            <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 col-xs-2 col-xs-offset-1  text-center"><i class="fa fa-user bigicon"></i></span>
                                                <div class="col-xs-8">
                                                    <input id="name" name="contactName" type="text" placeholder="Full Name" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 col-xs-2 col-xs-offset-1  text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                                <div class="col-xs-8">
                                                    <input id="email" name="contactEmail" type="text" placeholder="Email Address" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 col-xs-2 col-xs-offset-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                                <div class="col-xs-8">
                                                    <input id="phone" name="contactPhone" type="text" placeholder="Phone" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <span class="col-md-1 col-md-offset-2 col-xs-2 col-xs-offset-1  text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                                <div class="col-xs-8" >
                                                    <textarea class="form-control" id="message" name="contactMessage" placeholder="Your message" rows="6"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12 text-center">
                                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include'signinForm.php';?>
        <?php include 'footer.php';?>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="index.js"></script>
        <script>
            $(document).on('click','.navbar-collapse.in',function(e) {
                            if( $(e.target).is('a')&& $(e.target).attr('class') != 'dropdown-toggle' ) {
                            $(this).collapse('hide');
                            }
            });
        </script>
        <script>
            function goto() {              
             window.location='index.php#foundRecipe'
            }
        </script>
        <script>
            $(document).ready(function(){
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, footer a[href='#section1'], footer a[href='#section4'], #mainButton, #recipeSearchBtn ").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                scrollTop: $(hash).offset().top
                }, 1000, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
                });
                } // End if
                });
            })
        </script>
        <script>
            $(window).scroll(function() {
              $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                  $(this).addClass("slide");
                }
              });
            });
        </script>
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
    </body>
</html>