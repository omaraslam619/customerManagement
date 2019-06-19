<?php
$name = filter_input(INPUT_POST,'cname');
$phone = filter_input(INPUT_POST,'phone');
$email = filter_input(INPUT_POST,'email');
$address = filter_input(INPUT_POST,'address');
$resp = filter_input(INPUT_POST,'resp');
$recyl = filter_input(INPUT_POST,'recyl');
$raxis = filter_input(INPUT_POST,'raxis');
$lesp = filter_input(INPUT_POST,'lesp');
$lecyl = filter_input(INPUT_POST,'lecyl');
$laxis = filter_input(INPUT_POST,'laxis');
$addition = filter_input(INPUT_POST,'addi');

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
	$query = "INSERT INTO customers (custid, name, phone, email, address, resp, recyl, raxis, lesp, lecyl, laxis, addition) VALUES ('', '$name', '$phone', '$email', '$address', '$resp', '$recyl', '$raxis', '$lesp', '$lecyl', '$laxis', '$addition')";
	if($con->query($query)){
		
	   header("Location: makeBill.php");
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
