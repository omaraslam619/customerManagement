<?php
$pid = filter_input(INPUT_POST,'pid');
$name = filter_input(INPUT_POST,'name');
$color = filter_input(INPUT_POST,'color');
$tpye = filter_input(INPUT_POST,'type');
$quantity = filter_input(INPUT_POST,'quantity');
$cp = filter_input(INPUT_POST,'costP');
$sp = filter_input(INPUT_POST,'sellP');

if(!empty($name)){
 	$host = 'localhost';
	$db = 'helloGlasses';
	$dbUname='root';
	$dbPass = '';
// Creating connection.
$con = new mysqli($host,$dbUname,$dbPass,$db);
if(mysqli_connect_error()){
	die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
}
else{
	$query = "INSERT INTO Stock (PID,Name,color,type,quantity,costPrice,SellPrice) VALUES ($pid,$name,$color,$tpye,$quantity,$cp,$sp)";
	if($con->query($query)){
	echo "New Record Inserted!!!";
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
