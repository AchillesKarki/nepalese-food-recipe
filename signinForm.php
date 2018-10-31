<!--login/sign in modal-->
<form method="post" id="signinform">
    <div class="modal" id="signInModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 id="myModalLabel"><strong>Sign In:</strong></h4>
                </div>
                <div class="modal-body">
                    <div id="signinMessage"></div>
                        <div class="form-group">
                            <label for="signinEmail" class="sr-only">Email:</label>
                            <input id="signinEmail" name="signinEmail" type="text" placeholder="Email" class="form-control" maxlength="50">
                        </div>
                    <div class="form-group">
                        <label for="signinPassword" class="sr-only">Password:</label>
                        <input id="signinPassword" name="signinPassword" type="password" placeholder="Password" class="form-control" maxlength="30">
                    </div>

                    <div class="form-group">
                        <label for="rememberme" class="sr-only">Remember me</label>
                        Remember Me <input type="checkbox" name="rememberme" id="rememberme">

                    <a href="#forgotPasswordModal" data-toggle="modal" data-dismiss="modal" class="pull-right">Forgot Password?</a>
                    </div>
                </div>
                <div class="modal-footer">
                   <a href="#signupModal" data-toggle="modal" data-dismiss="modal" class="pull-left">Do not have an account? SIGN UP here..</a>
                    <input class="btn btn-primary" type="submit" name="signin" value="Sign In">
                    <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
    
<!--   signup form-->
 <form method="post" id="signupform">
     <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 id="myModalLabel"><strong>Sign Up Using Following Details:</strong></h4>
                </div>
                <div class="modal-body">
                    <div id="signupMessage"></div>
                    <div class="form-group">
                        <label for="signupUsername" class="sr-only">Username:</label>
                    <input id="signupUsername" name="signupUsername" type="text" placeholder="Username" maxlength="30" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="signupEmail" class="sr-only">Email:</label>
                    <input id="signupEmail" name="signupEmail" type="text" placeholder="Email" maxlength="50" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="signupPassword" class="sr-only">Password:</label>
                    <input id="signupPassword" name="signupPassword" type="password" maxlength="30" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="signupPassword2" class="sr-only">Confirm Password:</label>
                    <input id="signupPassword2" name="signupPassword2" type="password" maxlength="30" placeholder="Confirm Password" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary" name="signup" type="submit" value="Sign up">
                    <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
 </form>
  
 
<!--Forgot Password Form-->
<form method="post" id="forgotPasswordform">
     <div class="modal" id="forgotPasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 id="myModalLabel"><strong>Forgot Your Password? Enter Your Email Address:</strong></h4>
                </div>
                <div class="modal-body">
                    <div id="forgotPasswordMessage"></div>
                    <div class="form-group">
                        <label for="forgotPasswordEmail" class="sr-only">Email:</label>
                    <input id="forgotPasswordEmail" name="forgotPasswordEmail" type="text" placeholder="Email" maxlength="30" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#signupModal" data-toggle="modal" data-dismiss="modal" class="pull-left">Do not have an account? SIGN UP here..</a>
                    <input class="btn btn-info" name="forgotPassword" type="submit" value="Submit">
                    <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
 </form>