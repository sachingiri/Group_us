<?php 
	session_start();
	error_reporting('0');
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" type="text/css" href="../Styles/home.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src="../Js/home.js"></script>	
<script type="text/javascript" src="../Js/jquery.js"></script>
<title>Chat</title>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("#ChatText").keyup(function(e){
			//when we press enter
			if(e.keyCode ==13){
			var ChatText = $('#ChatText').val();
			$.ajax({
			type:'POST',
			url:'InsertMessage.php',
			data:{ChatText:ChatText},
			success:function(){
				$("#ChatMessages").load("DisplayMessages.php");
				$('#ChatText').val("");
			}
			});
			}
			});


			setInterval(function(){//REFRESH CHAT
			$("#ChatMessages").load("DisplayMessages.php");
			},150);
			$("#ChatMessages").load("DisplayMessages.php");
		});
	</script>

		<script type="text/javascript">
		$(document).ready(function(){
		setInterval(callMe,20);
		});
		function callMe()
		{
			$('#cont1').animate({
			scrollTop: $('#cont1').get(0).scrollHeight}, 20); 
		}
				
	</script>
</head>


<body> 
	<div id="header">
		<ul class="tab-header">
		    <li class="tab"><a href="../About/about.php">About</a></li>
			<li class="tab"><a href="../Contact/contact.php">Contact</a></li>
		    </ul>
		<h2>Group us</h2>
	</div>

	<div class="chat-box">
	<div class="chat-header">
		<div class="user"></div>
		<div class="user-profilename">Welcome <?php echo $_SESSION['UserName'];?><a href="logout.php">LOGOUT</a></div>
	</div>

	<div class="chat-container active" id='cont1'>
		<div id="ChatMessages"></div>
	</div>
	<div class="chat-control">
	<form action="file.php" method="post" enctype="multipart/form-data">
    			<input type="file" name="fileToUpload" id="fileToUpload"  style="display: none;" onchange="this.form.submit()">
    			<input type="button" value="Send File" class="file" onclick="document.getElementById('fileToUpload').click();" />

	</form>
	
					<input id="ChatText" type="text" placeholder="Say something!!" />


	</div>

	</div>		

</body>
</html>

