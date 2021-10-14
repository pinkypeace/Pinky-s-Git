<!DOCTYPE html>
<html>
<head>
	<title>Pinky</title>
</head>
<body>
<header>
	this is the head
	i dont want again
	i dont like gmail
</header>
	<form method="post">
		<input type="date" placeholder="choose date" name="who"></input>
		<button name="why"> DO NOT</button>
	</form>
	<?php if (isset($_POST['why'])): 
	 $var = $_POST['who'] . "     ".time();
		 echo $var;
		 ?>

		<?php endif ?>
</body>
</html>
