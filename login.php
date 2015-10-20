<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script> 
</head>

<body>
<!-- Header -->
<?php
    include ('includes/head.inc.php');
    
    $page_title = 'Sign in';
?>
  <!-- Sign In Template-->
 <div class="container">
<?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <form action="includes/process_login.php" method="post" name="login_form" class="form-signin"> 			
            
    <input type="text" name="email" placeholder="Email" class="form-control" required autofocus/>
    <br>
    <input type="password" name="password" id="password" placeholder="Password" class="form-control" required/>
    
        <button class="btn btn-lg btn-primary btn-block" onclick="formhash(this.form, this.form.password);">Login</button>
            <br>
       <!-- <button type="reset" name="reset_form" class="btn btn-lg btn-block btn-danger">Reset</button>
            <br>-->
                   
        

        <!--<p>If you are done, please <a href="includes/logout.php">log out</a>.</p>-->
     <!--<label class="checkbox">
          		<input type="checkbox" value="remember-me"> Remember me
        	</label>-->

			<p id="or"><strong>&mdash; Or &mdash;</strong></p>
			
			<a href="register.php" class="btn btn-lg btn-success btn-block" id="reg">Register</a>
			
		</form>
</div> <!--Closes container--> 

    </body>
</html>

<?php

/* Footer */
include ('includes/footer.inc.php');
?>
   