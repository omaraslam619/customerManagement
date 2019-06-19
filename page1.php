<?php
session_start();
$_SESSION['cname']='cname';
$_SESSION['phone']='phone';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Page 1</title>
</head>
<body>

<form action="fetch.php" method="POST">
	<input type="text" name="cname" value="" /><br>
	<input type="text" name="phone" value="" /><br>
	<input type="submit" name="">


</form>
</body>
</html>