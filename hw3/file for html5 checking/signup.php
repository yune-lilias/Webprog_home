<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang = "en">
	<head><meta charset="UTF-8">
		<title>Sign up</title>
		<link href="https://codd.cs.gsu.edu/~lhenry23/Web/HW/Asg03/nerdieluv.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<!-- Need to modify before upload to github -->
		<img src='icons/label.png' alt = 'la'/>
		<br>
        <br>

		<form action="signup-submit.php" method="post" enctype="multipart/form-data">
			<fieldset>
			<legend>New User Signup:</legend>
			<strong> <label for="name">Name: </label></strong>
			 <input type="text" id="name" name="name" size="16"><br>
			<strong> <label>Gender: </label></strong>
			 <input type="radio" id = "male" name="gender" value="M">
			 <label for="male">Male</label>
			 <input type="radio" id = "female" name="gender" value="F" checked>
			 <label for="female">Female</label><br>
             <strong>
             <label for="age">Age:</label></strong>
			 <input type="text" id="age" name="age" maxlength="2" size="6"><br>
			 <strong>
			 <label for="type">Personality type:</label></strong>
			 <input type="text" id="type" name="type" maxlength="4" size="6">
			 (<a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp">Don't know your type?</a>)<br>
    
             <strong>
			 <label for="os" >Favorite OS:</label></strong>
             <select name="os" id="os" >
             	<option value="Windows">Windows</option>
                <option value="Linux">Linux</option>
                <option value="Mac">Mac OS X</option>
             </select><br>
             <strong><label>Seeking age:</label></strong>
			 <input type="text" id="min" name="min" maxlength="2" size="6" placeholder="min">
			 to 
			 <input type="text" id="max" name="max" maxlength="2" size="6" placeholder="max"><br>
			  <strong><label for="image">Seeking age:</label></strong>
			 <input type="file" name="image" id="image">
		 
	    <input type="submit" value="Sign Up"/>

	    </fieldset>
		</form>
         <div id = "bannerarea">
		

		<pre>
This page is for single nerds to meet and date each other! Type in
your personal information and wait for the nerdly luv to begin!
Thank you for using our site.

Results and page (C) Copyright NerdLuv Inc.

<img src='icons/back.png' alt = 'ba'/> <a href="index.php">Back to front page</a>
        </pre>
		
		

		 <a href="https://validator.w3.org/">
		<img src='icons/html.png' alt = 'h5'/></a>
        <a href = "https://jigsaw.w3.org/css-validator/">
		<img src='icons/css.png' alt = 'css'/></a>
	</div>
	</body>
</html>