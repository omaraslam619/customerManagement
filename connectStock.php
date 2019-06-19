<?php
$name = filter_input(INPUT_POST,'pname');
$pid = filter_input(INPUT_POST,'pid');
$color = filter_input(INPUT_POST,'color');
$type = filter_input(INPUT_POST,'type');
$qty = filter_input(INPUT_POST,'quantity');
$cp = filter_input(INPUT_POST,'costP');
$sp = filter_input(INPUT_POST,'sellP');

if(!empty($name)){
 	$host = 'localhost';
	$db = 'helloglasses';
	$dbUname='root';
	$dbPass = '';
// Creating connection.
$con = new mysqli($host,$dbUname,$dbPass,$db);
if(mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
	$query = "INSERT INTO products (pid, name, color, type, qty, cp, sp) VALUES ('$pid', '$name', '$color', '$type', '$qty', '$cp', '$sp')";
	if($con->query($query)){
	header("Location: index.html");
				}
	else{
		echo "Error:".$query."<br>".$con->error;
	}
} 


}
else{
	echo "Name field should not be expty!!!";
	die();
}
?>
