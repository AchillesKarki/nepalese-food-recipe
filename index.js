//Ajax call for the sign up form
//once the form is submitted
$("#signupform").submit(function(event){
   //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to signup.php using AJAX
    $.ajax({
        url: "signup.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#signupMessage").html(data);
                $("#signupform #signupUsername, #signupEmail, #signupPassword, #signupPassword2").val("");
            }
        },
        error: function(){
            $("#signupMessage").html("<div class='alert alert-danger'>There was an error with the AJAX call. Please try again later.</div>");
        }
    });
});


//AJAX call for the sign in form
$("#signinform").submit(function(event){
   //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to signup.php using AJAX
    $.ajax({
        url: "login.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "index.php";
            }else{
                $("#signinMessage").html(data);
            }
        },
        error: function(){
            $("#signinMessage").html("<div class='alert alert-danger'>There was an error with the AJAX call. Please try again later.</div>");
        }
    });
});


//AJAX call for forgot password form
$("#forgotPasswordform").submit(function(event){
   //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
    //send them to signup.php using AJAX
    $.ajax({
        url: "forgotpassword.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            $("#forgotPasswordMessage").html(data);
            $("#forgotPasswordform #forgotPasswordEmail").val("");
        },
        error: function(){
            $("#forgotPasswordMessage").html("<div class='alert alert-danger'>There was an error with the AJAX call. Please try again later.</div>");
        }
    });
});

//AJAX call for Recipe Search
$("#recipeSearchForm, #recipeSearchFormNav").submit(function(event){
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    console.log(datatopost);
    $.ajax({
        url: "searchRecipe.php",
        type: "GET",
        data: datatopost,
        success: function(data){
            if(data){
                $("#foundRecipe").html(data);
            }
        },
        error: function(){
            $("#foundRecipe").html("<div class='alert alert-danger'>There was an error with the AJAX call. Please try again later.</div>");
        }
    });
});


//AJAX call for contact form
$("#contactForm").submit(function(event){
    event.preventDefault();
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    $.ajax({
        url: "contactForm.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#contactformMessage").html(data);
                $("#contactForm input, textarea").val("");
            }
        },
        error: function(){
            $("#foundRecipe").html("<div class='alert alert-danger'>There was an error with the AJAX call. Please try again later.</div>");
        }
    });
});
