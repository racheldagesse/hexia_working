<?php

include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Hexia Registration</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
	    
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
	<body>
    <?php
        include('includes/head.inc.php');
    ?>    
        

        <!-- Registration form to be output if the POST variables are not 
                set or if the registration script caused an error. -->
        
    <div class="container">
        
        <h1>Register today and get your stuff!</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul id="reg">
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain:
                <ul>
                    <li>At least one upper case letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
        
    <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" class="form-signin">
        
        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus/>
        <br>
        <input type="text" name="email" id="email" class="form-control" placeholder="Email" required/>
            
       <!-- <button type="reset" name="reset_form" class="btn btn-lg btn-block btn-danger">Reset</button>
            <br>--><!--<p>If you are done, please <a href="includes/logout.php">log out</a>.</p>--><!--<label                   class="checkbox">
        <input type="checkbox" value="remember-me"> Remember me
        	</label>-->
        <br>
        <input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
        <br>
        <input type="password" name="confirmpwd" id="confirmpwd" class="form-control" placeholder="Confirm Password"/>
        <br>
            <input type="button" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);"
                    class="btn btn-block btn-lg btn-success" value="Register">
        </form>
        <!--<p>Return to the <a href="login.php">login page</a>.</p>-->
    
           
        </div><!-- Closes container -->
    <br>
	<?php
        include('includes/footer.inc.php');
    ?>
	</body>
</html>