<?php
	if(isset($_REQUEST['name']) || isset($_REQUEST['age'])){
		echo "Hello ".$_REQUEST['name']."<br>";
		echo "Your age is ".$_REQUEST['age']."<br>";
		
		exit();	
	}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REQUEST Method</title>
</head>
<body>
	<form action="<?php $_PHP_SELF ?>" method="GET">
		Name : <input type="text" name="name">
		<br><br>
		Age : <input type="text" name="age">
		<br><br>
		<input type="submit" value="Submit">	
	</form>


</body>
</html>