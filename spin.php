<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="spin.css">
	<title>Kura Çarkı</title>
</head>
<body>
	

	
	
	<div class="container">
	<?php
	if($_POST){
		$opt1=$_POST['option1'];
		$opt2=$_POST['option2'];
		$opt3=$_POST['option3'];
		$opt4=$_POST['option4'];
	
	?>
	
		<div class="one"><?php echo $opt1 ?></div>
		<div class="two"><?php echo $opt2 ?></div>
		<div class="three"><?php echo $opt3 ?></div>
		<div class="four"><?php echo $opt4 ?></div>
		<?php } ?>
		
    <div class="dot1">---------------</div>
    <div class="dot2">---------------</div>
    <div class="dot3">---------------</div>
    <div class="dot4">---------------</div>
	</div>

		<span class="mid"></span>
		<button id="spin">ÇARKI ÇEVİR</button>
		<div class="stoper"></div>
		
	<script src="spin.js"></script>


</body>
</html>
