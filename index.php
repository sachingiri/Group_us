<?php
error_reporting('0');
?>

<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="Header/header.css">

<title>Group us</title>
</head>
    
<body>
<div id="header">
	<ul class="ta-header">
	    <li class="ta"><a href="About/about.php">About</a></li>
		<li class="ta"><a href="Contact/contact.php">Contact</a></li>
	    </ul>
	<h2>Group us</h2>
</div>
	<div class="form">
	    <ul class="tab-group">
	    <li class="tab active"><a href="#login">Log In</a></li>
		<li class="tab"><a href="#signup">Sign Up</a></li>
	    </ul>
	      
	<div class="tab-content">
	<div id="login">   
        <h1>Welcome Back!</h1> 
        <form action="Files/Userlogin.php" method="post">

        <div class="field-wrap">
	    	<label>Email Address<span class="req">*</span></label>
	        <input type="email" name="UserMailLogin" required autocomplete="off"/>
        </div>
 
        <div class="field-wrap">
	        <label>Password<span class="req">*</span></label>
	        <input type="password" name="UserPasswordLogin" required autocomplete="off"/>
        </div>
        <button type="submit" class="button button-block" value="Log IN" />Log In</button>
        <table>
			<?php 
			if(isset($_GET['error']))
			{
				?>
				<script type='text/javascript'>alert("Invalid username or password");</script>
			<?php
			} 
		 	?>
		</table>
        </form>
    </div>
        

    <div id="signup">   
    	<h1>Sign Up for Free</h1>
       	<form action="Files/InsertUser.php" method="post">
        	<div class="top-row">
            <div class="field-wrap">
            <label>First Name<span class="req">*</span></label>
            <input type="text" name="UserName" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
            <label>Last Name<span class="req">*</span></label>
			<input type="text" name="UserNamel" required autocomplete="off"/>
            </div>
          	</div>

          	<div class="field-wrap">
            <label>Email Address<span class="req">*</span></label>
            <input type="email" name="UserMail" required autocomplete="off"/>
        	</div>
          
        	<div class="field-wrap">
            <label>Set A Password<span class="req">*</span></label>
            <input type="password" name="UserPassword" required autocomplete="off"/>
          	</div>
          
        <button type="submit" class="button button-block" value="Sign Up" />Get Started</button> 
        <table>
        	<?php 
			if(isset($_GET['success']))
			{
			?>
			<script type='text/javascript'>alert("Thankyou for joining us");</script>
			<?php
			}	 
			?>		
        </table>
        </form>
	</div>
        
    </div><!-- tab-content -->
    </div> <!-- /form -->




<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="index.js"></script>
</body>
</html>