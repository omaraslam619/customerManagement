<html>
<head>
<title>Create Bills</title>
<link rel="javascript" type="text/javascript" href="js/main.js">
<link rel="stylesheet" type="text/css" href="css/main.css">
<style>

.main{
	background-color:white;
	width:100%;
	color:black;
	height:650px;
	float:left;
	text-align:center;

}
</style>
<script>
function calculate(){
	
	var fc=Number(document.getElementById("frame").value);    
	var lc=Number(document.getElementById("lens").value);
	var dis=Number(document.getElementById("discount").value);
	var netAmt=(fc+lc)-dis;
	
	document.getElementById("amt").value=netAmt;
	
}



</script>


</head>
<body>
<div class="header">

<img src="images/logo.jpg" class="logo" onclick="logo()" width="175px" height="90px" > 

	
</div>
<ul class="navbar">
   <li><a href="index.html">Home</a></li> |
   <li><a href="addCust.php">Add Customer</a></li> |
   <li><a href="addStock.php">Add Product</a></li> |
   <li><a href="viewCust.php">View Customers</a></li> |
   <li><a href="viewStock.php">View Products</a></li> |
   <li><a href="viewBill.php">View Bills</a></li> |
   <li><a href="">Billing</a></li>
</ul>
	<div class="main">
	<h2>Create New Bill</h2><br>
<center>
	<table cellspacing="10px" >
	<form method="POST" action="connectBills.php" >  
	<tr><td>Customer Name:</td>
		<td>
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

$sql = "SELECT * FROM customers ORDER BY custid DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
        echo '<input type="text" placeholder"Ryan Cooper" name="cname" value="'.$row['name'].'" />'  ;
         echo " </td>
	</tr>
	<tr><td>Contact No:</td>
		<td> ";

			 echo '<input type="text" placeholder"9876543210" name="phone" value="'.$row['phone'].'" />'  ;
    	

	echo"	</td>
	</tr>
	
	<tr><td>"; print("Power:"); echo '</td><td style="text-align:left;"><table> 
		<tr><td></td><td>'.'Sp.'.'</td><td>'.'Cyl.'.'</td><td>'.'Axis</td></tr>
		<tr>
			<td>'.'RE :'.'</td>
			<td><input type="text" class="input1" name="resp" value="'.$row['resp'].'"   /></td>
			<td><input type="text" class="input1" name="recyl" value="'.$row['recyl'].'"  /></td>
			<td><input type="text" class="input1" name="raxis" value="'.$row['raxis'].'"  /></td>
		</tr>
		<tr><td>'.'LE :'.'</td>
			<td><input type="text" class="input1" name="lesp"  value="'.$row['lesp'].'"  ></td>
			<td><input type="text" class="input1" name="lecyl" value="'.$row['lecyl'].'"  ></td>
			<td><input type="text" class="input1" name="laxis" value="'.$row['laxis'].'"  ></td>
		</tr>
	         </table>
	     </td>
	 </tr>';

	 echo '<tr><td></td><td style="text-align:left;">ADD:<input type="text" class="input2" name="addi"  placeholder="+2.00sp" value="'.$row['addition'].'"  /></td></tr>';

    }
}
$conn->close(); ?>
	 <tr><td>Product:</td>
		<td><input type="text" name="product" placeholder="RayBen 100" ></td>
	</tr>
	<tr><td>Lens Type:</td>
		<td><input type="text" name="ltype" placeholder="Blue-ray cut" ></td>
	</tr>
	<tr><td colspan="2"><hr></td>
	</tr>
	<tr><td colspan="2" style="text-align:left;"><h3>Price:</h3></td>
	</tr>
	<tr><td>Frame Cost:</td>
		<td><input type="number" id="frame" name="fcost" placeholder="1200" onblur="calculate()" ></td>
	</tr>
	<tr><td>Lens Cost:</td>
		<td><input type="number" id="lens" name="lcost" placeholder="600" onblur="calculate()" ></td>
	</tr>
	<tr><td>Discount:</td>
		<td><input type="number" id="discount" name="discount" placeholder="200" onblur="calculate()" ></td>
	</tr>
	<tr><td>Amount Payable:</td>
		<td><input type="text" id="amt" name="amount" placeholder="1600" readonly ></td>
	</tr>
	<tr><td colspan="2"><input type="submit" class="button1" > </td>
	</tr>
	</form>
	</table>
	
</center>

	</div>



</body>

</html>
