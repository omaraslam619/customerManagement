<html>
<head>
<title>Customer's List</title>
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
button{
	width:170px;
	height:50px;
	color:green;
	background-color:white;
	border:2px solid green;
	border-radius:10px;

	
}
button:hover{
	background-color:green;
	color:white;
	border:2px solid white;
	box-shadow:0px 0px 10px gray;
	transition:0.5s;
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
   <li><a href="">View Customers</a></li> |
   <li><a href="viewStock.php">View Products</a></li> |
   <li><a href="viewBill.php">View Bills</a></li> |
   <li><a href="makeBill.php">Billing</a></li>
</ul>
	<div class="main">
	<h2 align="center">List of All Customers</h2>
	<form action="srchCust.php">&nbsp&nbsp&nbsp<button>Search Customer</button> </form>
<center>
	<table border="1px"  >
	<tr><th width="200px">Name</th><th width="150px">Contact No</th><th width="200px">Email</th><th>Address</th><th width="150px">Power</th></tr>

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

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
        <tr align="left"> <td><?php echo $row["name"] ?></td><td><?php echo $row["phone"] ?></td><td><?php echo $row["email"] ?></td><td><?php echo $row["address"] ?></td><td><?php echo "RE :".$row["resp"]." | ".$row["recyl"]." | ".$row["raxis"]."<br>"."LE :".$row["lesp"]." | ".$row["lecyl"]." | ".$row["laxis"]."<br>"."Add :".$row["addition"] ?></td></tr></tr>
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
