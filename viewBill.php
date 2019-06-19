<html>
<head>
<title>List of Bills</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<style>

td{
	font-family:Arial;
	color:black;
	font-size:13px;
	padding:5px;
	text-align:left;
}

th{
	font-family:Arial;
	color:black;
	background-color:lightblue;
	font-size:13px;
	padding:5px;
}
table{
	border-collapse:collapse;
}
table,td ,th {	
	border:1px solid blue;

}



</style>
<script>




</script>


</head>
<body>
<div class="header">

<img src="images/logo.jpg" class="logo" width="175px" height="90px" > 

	
</div>
<ul class="navbar">
   <li><a href="index.html">Home</a></li> |
   <li><a href="addCust.php">Add Customer</a></li> |
   <li><a href="addStock.php">Add Product</a></li> |
   <li><a href="viewCust.php">View Customers</a></li> |
   <li><a href="viewStock.php">View Products</a></li> |
   <li><a href="">View Bills</a></li> |
   <li><a href="makeBill.php">Billing</a></li>
</ul>
	<div class="main">
	<h2>List of All Bills</h2><br>
	
<center>
	<table width="98%" >
	<tr>
		<th width="45px">Bill ID.</th>
		<th>Customer Name</th>
		<th>Phone</th>
		<th>Product</th>
		<th>Power</th>
		<th>Lens</th>
		<th>Amount Paid</th>
	</tr>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helloglasses";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM bills";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <tr align="left"> <td><?php echo $row["billID"] ?></td><td><?php echo $row["cname"] ?></td><td><?php echo $row["phone"] ?></td><td><?php echo $row["product"] ?></td><td><?php echo 'RE :'.$row["resp"].' || '.$row["recyl"].' || '.$row["raxis"].'<br>LE :'.$row["lesp"].' || '.$row["lecyl"].' || '.$row["laxis"].'<br>Addition :'.$row["addition"]; ?></td><td><?php echo $row["lenstype"] ?></td><td><?php echo 'Frame Cost:'.$row["fcost"].' || Lens Cost:'.$row["lcost"].'<br>Discount:'.$row["discount"].' ||  Net Amount:'.$row["netAmt"] ?></td></tr></tr>
<?php    }
} else {
    echo "0 results";
}
$conn->close();
?> 
	

	</table>
	
</center>

	</div>
 


</body>

</html>
