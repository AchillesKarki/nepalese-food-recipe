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
                        <li><a href="index.php#section1">Home</a></li>
                        <li><a href="index.php#section2">Recipes</a></li>
                        <li><a href="index.php#section3">About</a></li>
                        <li><a href="index.php#section4">Contact Us</a></li>
                    </ul>
                    
                    <div class="navbar-right navbar-form">
                       <form method="get" id="recipeSearchFormNav" >
                        <div class="input-group">
                           <span class="input-group-btn"><button class="btn btn-success" type="submit" onclick="window.location='index.php#section2'">Go</button></span>
                            <label class="sr-only" for="navBarSearch"></label><input type="text" class="form-control" id="recipeSearch" name="recipeSearch"  placeholder="Search" id="navBarSearch"><span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                        <span><?php
                            if(!empty($_SESSION['username'])){
                                echo '<span class="dropdown" style="float:right">
                                    <a type="button" class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"><span><i class="fa fa-user"> </i> ' .$_SESSION['username']. '</span>
                                    <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="index.php?logout=1">Log Out</a></li>
                                    </ul>
                                </span>';
                            }else{
                                echo '<a type="button" class="btn btn-success" data-toggle="modal" data-target="#signInModal" ><span><i class="fa fa-user"> </i> Sign In</span></a>';
                                
                            }
                        ?></span>
                        </form>
                        
                        
                           
                              
                    </div>
                    
                 </div>
                 
            </div>
        </nav>