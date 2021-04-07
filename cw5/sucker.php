<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang = "en">
	<head>
		<meta charset="UTF-8">
		<title>Submit successful</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php
		$error = false;
		$req = array('name','section','cc','payment');
		foreach($req as $field){
		if(!$error && !isset($_POST[$field])){
			echo $field;
			$error = true;
		} else {
		if (!$error && empty($_POST[$field])) {
			echo $field;
         $error = true;
        }else { if($_POST[$field] == 'nots')
        	{$error = true;}}
        }}
       
        if($error)
        {
        header("Location: error.html");
        exit();
        }
		?>
		<div class = "buying">
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php echo $_POST["name"]?></dd>

			<dt>Section</dt>
			<dd><?php echo $_POST["section"]?></dd>

			<dt>Credit Card</dt>
			<dd><?php 
                print $_POST["cc"];
                print "(";
                print $_POST["payment"];
                print ")";
                ?></dd>
		</dl>
      <p>Here are all the suckers who have submitted here:</p>

     
	 <div class = "suclist">
	 	<?php
	 	$str = $_POST["name"].";".$_POST["section"].";".$_POST["cc"].";".$_POST["payment"]."<br>";
	 	$data = file_get_contents('suckers.html');
	 	$data = $data.$str;
        file_put_contents('suckers.html', $data);
        echo "<pre>";
        echo $data;
        echo "</pre>";
	 	?> 
    
    </div>
	</div>

	
	</body>
</html> 