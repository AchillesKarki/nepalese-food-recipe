<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="A general guide on the recipe of Nepalese Cuisines. Different Nepalese foods can be made at home with available contents">
        <meta name="keywords" content="Food, Nepalese Food, Momo, Chowmin, Chicken, Mutton, Newari, Thakali" >  
        <title>Recipe</title>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="mainStyling.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allura|Arvo" rel="stylesheet">
        <style>
            body{
                background: url(images/recipe.jpg) no-repeat center center;
                background-attachment: fixed;
                background-size: 100% 100%;
            }
            
            #wrapper {
            margin: 50px 0px;
            padding-left: 0;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
            }

            #wrapper.toggled {
                padding-left: 250px;
            }

            #sidebar-wrapper {
                top: 74px;
                z-index: 1000;
                position: fixed;
                left: 250px;
                width: 0;
                height: 100%;
                margin-left: -250px;
                overflow-y: auto;
                background: rgba(0, 0, 0, 0.9);
                -webkit-transition: all 0.5s ease;
                -moz-transition: all 0.5s ease;
                -o-transition: all 0.5s ease;
                transition: all 0.5s ease;
            }

            #wrapper.toggled #sidebar-wrapper {
                width: 200px;
            }

            #page-content-wrapper {
                margin-top: 100px;
                width: 100%;
                padding: 15px;
            }

            #wrapper.toggled #page-content-wrapper {
                margin-right: -250px;
            }

            /* Sidebar Styles */

            .sidebar-nav {
                
                top: 0;
                width: 200px;
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .sidebar-nav li {
                text-indent: 20px;
                line-height: 40px;
            }

            .sidebar-nav li a {
                color: #999999;
                display: block;
                text-decoration: none;
            }

            .sidebar-nav li a:hover {
                text-decoration: none;
                color: #fff;
                background: rgba(255,255,255,0.2);
            }

            .sidebar-nav li a:active,
            .sidebar-nav li a:focus {
                text-decoration: none;
            }

            .sidebar-nav > .sidebar-brand {
                height: 65px;
                font-size: 18px;
                line-height: 60px;
            }

            .sidebar-nav > .sidebar-brand a {
                color: #fff;
            }

            .sidebar-nav > .sidebar-brand a:hover {
                color: #fff;
                background: none;
            }
            

            @media(max-width:768px) {
                #wrapper {
                    padding-left: 0;
                }

                #wrapper.toggled {
                    padding-left: 200px;
                }

                #sidebar-wrapper {
                    top: 64px;
                    width: 0;
                }

                #wrapper.toggled #sidebar-wrapper {
                    width: 200px;
                }

                #page-content-wrapper {
                    padding: 20px;
                    position: relative;
                }

                #wrapper.toggled #page-content-wrapper {
                    position: relative;
                    margin-right: 0;
                }                
            }
            
            
            #searchRecipe{
                    padding: 25px 0px;
                    border: none;
                    width: 100%;
                    text-shadow: 2px 2px 2px black;
                }
            
            #searchRecipe input{
                text-align: center;
                background: none;
                height: 50px;
                border: none;
                border-bottom: 1px solid rgba(255, 255, 255, 0.3);
                font-size: 32px;
                color: #fff;
            }
            
            #searchRecipe .btn{
                background: none;
                font-size: 32px;
                color: #fff;
                text-shadow: 2px 2px 2px black;
            }
            
            #searchRecipe .btn:hover{
                color: #5CB85C;
                text-shadow: 2px 2px 2px black;
            }
            
            #searchRecipe input:focus{
                all: initial;
                  * {
                    all: unset;
                  }
                padding-left: 25px;
                text-align: center;
                border: none;
                width: 100%;
                background: none;
                height: 50px;
                border: none;
                border-bottom: 1px solid rgba(255, 255, 255, 0.3);
                font-size: 32px;
                color: #fff;
                font-family: arvo;
            }
            
            #searchRecipe input::-webkit-input-placeholder {
                font-size: 22px;
                color: rgba(255, 255, 255, 0.8);
                text-shadow: 2px 2px 2px black;
                
            }
            
            @media(max-width:767px){
                #searchRecipe input{
                    font-size: 22px;
                    color: #fff;
                }
            
                #searchRecipe .btn{
                    font-size: 22px;
                }


                #searchRecipe input:focus{
                    font-size: 22px;
                }
            }
            
            @media(max-width:400px){
                #searchRecipe input{
                    font-size: 18px;
                    color: #fff;
                }
            
                #searchRecipe .btn{
                    font-size: 18px;
                }


                #searchRecipe input:focus{
                    font-size: 18px;
                }
            }
            
            iframe {
                
            }
            
        </style>
        
    </head>
    <body>
        <!--       Navigation Bar        -->
        <nav role="presentation" class="navbar navbar-inverse navbar-custom navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                   <a href="#menu-toggle" id="menu-toggle" type="button" class=" btn btn-sm pull-left">
                        <span class="glyphicon glyphicon-th-list"></span>
                    </a>
                    <a class="navbar-brand" href="index.php"><img class="mainLogo" src="images/mainlogo.png" ></a>

                    <button type="button" class="navbar-toggle btn-sm" data-target="#myNavbar" data-toggle="collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                
                
                <div class="navbar-collapse collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-left" >
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="recipe.php">Recipe</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                    
                    <form class="navbar-form navbar-right" method="get" id="recipeSearchFormNav">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#signInModal" ><span><i class="fa fa-user"> </i> Sign In</span></button>
                        <div class="input-group">
                           <span class="input-group-btn"><button class="btn btn-success">Go</button></span>
                            <label class="sr-only" for="navBarSearch"></label><input type="text" class="form-control" placeholder="Search" id="navBarSearch"><span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                           
                              
                    </form>
                    
                 </div>
                 
            </div>
        </nav> 
        
        <div id="wrapper">

        <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Category
                        </a>
                    </li>
                    <li>
                        <a href="#">Newari</a>
                    </li>
                    <li>
                        <a href="#">Thakali</a>
                    </li>
                    <li>
                        <a href="#">Thaaru</a>
                    </li>
                    <li>
                        <a href="#">Thakali</a>
                    </li>
                </ul>
            </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid" style="margin-top:75px;">
                      <form method="get" id="recipeSearchForm">
                       <div id="searchRecipe">
                           <div class="input-group">
                           
                            <label class="sr-only" for="recipeSearch"></label><input type="text" class="form-control" placeholder="What are we looking for?" id="recipeSearch" name="recipeSearch"><span class="input-group-btn"><button class="btn" type="submit"><i class="glyphicon glyphicon-search"></i></button></span>

                            </div>
                        </div>
                    </form>
                <div id="foundRecipe">
                    
                </div>
                    <iframe name="myIframe" width="100%"  frameborder="0" style="margin:30px 0px; display:none;" scrolling="no" onload="resizeIframe(this);"></iframe>
                
                <h1 class="text-center" style="color:#fff;font-size:42px;margin-top:100px;" id="famousDishes">"Famous Dishes"</h1>
            <div id="mainFood">
            <div id="daalBhat">
                <div class="row">
                    <div class="col-sm-8">
                        <div>
                            <h1>Nepali Daal Bhaat</h1><br>
                            <p>Dal bhat is a traditional meal from the Indian subcontinent, popular in many areas of Nepal, Bangladesh and India. It consists of steamed rice and a cooked lentil soup called dal. It is a staple food in these countries. Bhat or Chawal means "boiled rice" in a number of Indo-Aryan languages.</p>
                            <p>At higher elevations in Nepal, above 6,500 feet (2,000 m), where rice does not grow well, other grain such as maize, buckwheat, barley or millet may be substituted in a cooked preparation called Dhindo or atho in Nepal. Bhat may be supplemented with roti in Nepal (rounds of unleavened bread).

                            Dal may be cooked with onion, garlic, ginger, chili, tomatoes, or tamarind, in addition to lentils or beans. It always contains herbs and spices such as coriander, garam masala, cumin, and turmeric. Recipes vary by season, locality, ethnic group and family.

                            Dal bhat is often served with vegetable tarkari or torkari (तरकारी in Nepali) – a mix of available seasonal vegetables. It is also called Dal Bhat Tarkari (दाल भात तरकारी) in Nepali. There may also be yogurt or curry made of chicken, goat meat or fish. A small portion of pickle (called achar) is sometimes included.</p>
                            <p class="text-center"><a class="btn btn-success" href="#">Recipe</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div id="parent"><img class="img img-responsive img-rounded" src="images/daalBhat.jpg" id="daalBhatImg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mainFood">
           <div id="kwaati">
                <div class="row">
                    <div class="col-sm-8">
                        <h1>Nepali Beans Stew – Kwati</h1><br>
                        <p>Kwāti (Nepal Bhasa: क्वाँती; Nepali: क्वाँटी) is a mixed soup of nine types of sprouted beans. It is a traditional Nepalese dish consumed on the festival of Gun Punhi, the full moon day of Gunlā which is the tenth month in the Nepal Era lunar calendar. Kwāti is eaten as a delicacy and for its health benefits and ritual significance.

                        The feast day coincides with Shravan Poornima of the month of Shravan in the Hindu lunisolar calendar which is celebrated as Janāi Purnimā (Raksha Bandhan), the festival of the sacred thread. The festival occurs in August</p>
                        <p>Nine varieties of beans are used to make kwāti. The most commonly used ingredients are black gram, green gram, chickpea, field bean, soybean, field pea, garden pea, cowpea and rice bean.

                        The beans are soaked in water for three to four days until they have sprouted. They are boiled with various spices to make a thick soup. Lovage seeds are bloomed in oil and added to it as the special seasoning. Flatbread cut into one-and-a-half-inch squares can be boiled with the kwāti for variety.</p>
                        <p class="text-center"><a class="btn btn-success" href="#">Recipe</a></p>
                    </div>
                    <div class="col-sm-4"><img class="img img-responsive img-rounded" id="kwaatiImg" src="images/kwaati.jpg"></div>
                </div>
            </div>
        </div>
        <div id="mainFood">
           <div id="momo">
                <div class="row">
                    <div class="col-sm-8">
                        <h1>Nepalese Dumplings – Momos</h1><br>
                        <p>Momo is a type of steamed bun with some form of filling. Momo has become a traditional delicacy in Nepal, Tibet and among Nepalese/Tibetan communities in Bhutan, as well as Sikkim state and Darjeeling district of India. It is one of the most popular fast foods in Nepal. Momos have also spread to other countries like United States (some parts), UK and India.</p>
                        <p>The dish is believed to be of Tibetan origin and since then has spread to other neighboring countries with the influx of Tibetan diaspora. Since this dish was initially popular among the Newar community of the Kathmandu Valley, one prevalent belief is that traveling Newar merchants brought the recipe and the name momo from Tibet where the Newar Merchants use go to trade. They modified the seasonings of the dish with available ingredients, such as water buffalo, and kept the same name.</p>
                        <p>There are typically two types of momo, steamed and fried. Momo is usually served with a dipping sauce (locally called chutney/achhar), normally made with tomato as the base ingredient. Soup momo is a dish with steamed momo immersed in a meat broth. Pan-fried momo is also known as kothey momo. Steamed momo served in hot sauce is called C-momo. There are also a variety of Tibetan momos, including tingmo and thaipo.</p>
                        <p class="text-center"><a class="btn btn-success" href="#">Recipe</a></p>
                    </div>
                    <div class="col-sm-4"><img class="img img-responsive img-rounded" id="momoImg" src="images/momo.jpg"></div>
                </div>
            </div>
        </div>
        
        <div id="mainFood">
           <div id="momo">
                <div class="row">
                    <div class="col-sm-8">
                        <h1>Nepalese Noodle Soup – Thukpa</h1><br>
                        <p>Thukpa is a popular soup in the northern Himalayan region of Nepal. Fragrant, hearty and simple to prepare, this satisfying soup recipe is an easy midweek winter warmer.</p>
                        <p>The Nepalese version of thukpa contains chili powder, masala (usually garam masala), which gives it a hot and spicy flavor. It is considered as one of the Indo-Tibetan food, having great influence both from Tibet (noodles/soup) and from South Asia(spices/garam masala).</p>
                        <p class="text-center"><a class="btn btn-success" href="#">Recipe</a></p>
                    </div>
                    <div class="col-sm-4"><img class="img img-responsive img-rounded" id="thukpaImg" src="images/thukpa.jpg"></div>
                </div>
            </div>
        </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
        
           

        
        
        
        
                
                
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
         <?php include 'signinForm.php';?>                                               
                                                        
        <!--        Footer          -->
        <?php include 'footer.php';?>
        
        

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
        <script>
              function resizeIframe(obj) {
                obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
                $("iframe").css("display", "block");
              }
        </script>
        <script src="index.js"></script>
    </body>
</html>