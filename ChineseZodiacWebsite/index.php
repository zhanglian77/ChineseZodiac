<html>

<!--The function here is to let users query their zodiac. Because the Chinese zodiac has a 12-year round,
I used a reference year "1997" here, then divide the value by 12, different remainders show different zodiac results.-->
	
	<?php
	 	file_put_contents("date.txt",$_GET["myYear"]);
	?>

		<?php 
		$x =  $_GET["myYear"];
		$y = 1997;
		$z = ($y-$x)%12;
		$zodiac="ox";
	
		if (($z == 1) || ($z == -11)) { $zodiac="Rat" ;}
		if ($z == 0) { $zodiac="Ox" ;}
		if (($z == 11) || ($z == -1)) {$zodiac="Tiger" ;}
		if (($z == 10) || ($z == -2)) {$zodiac="Rabbit" ;}
		if (($z == 9) || ($z == -3)) {$zodiac="Dragon" ;}
		if (($z == 8) || ($z == -4)) {$zodiac="Snake" ;}
		if (($z == 7) || ($z == -5)) {$zodiac="Horse" ;}
 		if (($z == 6) || ($z == -6)) {$zodiac="Goat"; }
		if (($z == 5) || ($z == -7)) {$zodiac="Monkey" ;}
		if (($z == 4) || ($z == -8)) {$zodiac="Rooster" ;}
		if (($z == 3) || ($z == -9)) {$zodiac="Dog" ;}
		if (($z == 2) || ($z == -10)) {$zodiac="Pig" ;}
		
		?>		
		
	<!DOCTYPE html>
	<head>
		<script type="text/javascript" src="main.js"></script>
		<meta charset="utf-10">
		<title>ChineseZodiac</title>

<!--Create labels and links between pages.-->
					
		<ul>
 			<li><a href="first.html">Introduction to Chinese Zodiac</a></li>
  			<li><a class="active" href="index.php">Check Your Zodiac Sign</a></li>
  			<li><a href="story.html">Story of 12 Chinese Zodiac</a></li>
  			
		</ul>
	</head>
	
	<body background = "checkbackground.jpg">
	<link rel = "stylesheet" href = "style.css"/>

<!--Here let users input their birth year.-->
	
	<div id = "myQuery">
	
	<center>
	
		<h1>Input Your Birth Year:</h1>
		
		<form action="index.php" method="get">
		
			<input type="year" name="myYear" />
			<input type="submit" id="submitYear" value="submit" >
		</form>
		

<!--Here print the results.-->
		
		<h2 >Your Birth Year is : <?php echo $x ?></h2>
		<h3 id = "result">This Year's Chinese Zodiac Sign is : <?php echo $zodiac ?></h3>
	</center>
	</div>
	</body>
</html>