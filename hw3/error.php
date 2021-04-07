<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang = "en">
	<head><meta charset="UTF-8">
		<title>Error!</title>
		<link href="https://codd.cs.gsu.edu/~lhenry23/Web/HW/Asg03/nerdieluv.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<!-- Need to modify before upload to github -->
		<img src='icons/label.png' alt = 'ic'/>
		<br>
        <br>

        <?php
        errors();
	     ?> 
<div id = "bannerarea"><br>
This page is for single nerds to meet and date each other! Type in<br>
your personal information and wait for the nerdly luv to begin!<br>
Thank you for using our site.<br><br>

Results and page (C) Copyright NerdLuv Inc.<br><br>

<img src='icons/back.png' alt="ba"/> <a href="index.php">Back to front page</a>
       
		
		
</div>
		 <a href="https://validator.w3.org/">
		<img src='icons/html.png' alt = 'h5'/></a>
        <a href = "https://jigsaw.w3.org/css-validator/">
		<img src='icons/css.png' alt = 'css'/></a>
	
	</body>


<?php
function errors() {
  switch($_COOKIE['prev']){
    case "empty":
        print("<h1>Error! Empty name. </h1>" ) ;    
		print("<p>Please go back and type your name.</p>");
	    break;
	case "notfound":
	    print("<h1>Error! User not found. </h1>" ) ;    
		print("<p>We cannot find your name in our database, please go back and sign up.</p>");
	    break;
	case "exist":
	    print("<h1>Error! User already exists. </h1>" ) ;    
		print("<p>This name is already in our database, please go back and login.</p>");
	    break;
    default:
		print("<h1>Error! Invalid data. </h1>" ) ;    
		print("<p>We're sorry. You submitted invalid user information. Please go back and try again.</p>");
       }
		setcookie("prev", "", time() - 3600,'/');
}

?>
</html>