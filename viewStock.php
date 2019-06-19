<html>
<head>
<title>Products List</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<style>

.main{
	background-color:white;
	width:100%;
	color:black;
	height:450px;
	float:left;
	overflow-y: scroll;
	


}

td{
	color:black;
	font-family:Lucida;
	text-align:center;


}

th{
	font-family:arial;
	font-size:12px;
	color:black;
	background-color:lightblue;
	padding:5px;
}

table{
	border-collapse:collapse;
	width:95%;
}
table,td ,th {	
	border:1px solid blue;

}
td{
	font-family:arial;
	font-size:12px;
	color:black;
	padding:5px;
	text-align:left;
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
   <li><a href="">View Products</a></li> |
   <li><a href="viewBill.php">View Bills</a></li> |
   <li><a href="makeBill.php">Billing</a></li>
</ul>
	<div class="main">
	<h2 align="center">List of All Products</h2>
<center>
	<table border="1px"  >
	<tr>
		<th width="10%">P_id</th>
		<th width="20%">Product Name</th>
		<th width="15%">Color</th>
		<th width="15%">Type</th>
		<th width="10%">Quantity</th>
		<th width="30%">Price</th>
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

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <tr align="left"> 
        	<td><?php echo $row["pid"] ?></td>
        	<td><?php echo $row["name"] ?></td>
        	<td><?php echo $row["color"] ?></td>
        	<td><?php echo $row["type"] ?></td>
        	<td><?php echo $row["qty"] ?></td>
        	<td><?php echo "Cost Price :".$row["cp"]."&nbsp&nbsp&nbsp&nbsp&nbspSelling Price :".$row["sp"]  ?></td>
        </tr>

<?php    }
} else {
    echo "0 results";
}
$conn->close();
?> 

	
	

	</table>
	
</center>
<br><br>
	</div>



</body>

</html>
