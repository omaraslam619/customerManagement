<?php
$cname = filter_input(INPUT_POST,'cname');
$phone = filter_input(INPUT_POST,'phone');
$product = filter_input(INPUT_POST,'product');
$power = filter_input(INPUT_POST,'power');
$lensType = filter_input(INPUT_POST,'ltype');
$fCost = filter_input(INPUT_POST,'fcost');
$lCost = filter_input(INPUT_POST,'lcost');
$discount = filter_input(INPUT_POST,'discount');
$amount = filter_input(INPUT_POST,'amount');
$resp = filter_input(INPUT_POST,'resp');
$recyl = filter_input(INPUT_POST,'recyl');
$raxis = filter_input(INPUT_POST,'raxis');
$lesp = filter_input(INPUT_POST,'lesp');
$lecyl = filter_input(INPUT_POST,'lecyl');
$laxis = filter_input(INPUT_POST,'laxis');
$addition = filter_input(INPUT_POST,'addi');



if(!empty($cname)){
 	$host = 'localhost';
	$db = 'helloglasses';
	$dbUname='root';
	$dbPass = '';
// Creating connection.
$con = mysqli_connect($host,$dbUname,$dbPass,$db);
if(mysqli_connect_errno()){
	die('Connect Error ('.mysqli_connect_error().')');
}
else{
	$query = "INSERT INTO bills (billID, cname, phone, resp, recyl, raxis, lesp, lecyl, laxis, addition, product, lenstype, fcost, lcost, discount, netAmt) VALUES (' ', '$cname', '$phone', '$resp', '$recyl', '$raxis', '$lesp', '$lecyl', '$laxis', '$addition', '$product', '$lensType', '$fCost', '$lCost', '$discount', '$amount')";
	if($con->query($query)){
		mysqli_query($con,"UPDATE products SET qty=qty-1  WHERE name = '".$product."';");
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
