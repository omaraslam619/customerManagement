<html>
<head>
<title>Add Customer</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<script>
function f1(){	
	var input=Number(document.getElementById("phone").value);
	if(isNaN(input))
	{
		alert("Enter only Integer Values");
		
	}
}



</script>


</head>
<body>
<div class="header">

<img src="images/logo.jpg" class="logo" width="175px" height="90px" > 

	
</div>
<ul class="navbar">
   <li><a href="index.html">Home</a></li> |
   <li><a href="">Add Customer</a></li> |
   <li><a href="addStock.php">Add Product</a></li> |
   <li><a href="viewCust.php">View Customers</a></li> |
   <li><a href="viewStock.php">View Products</a></li> |
   <li><a href="viewBill.php">View Bills</a></li> |
   <li><a href="makeBill.php">Billing</a></li>
</ul>
	<div class="main">
	<h2>Add New Customer</h2><br>
<center>
	<form name="from1" method="POST" action="connectCust.php" >
	<table cellspacing="10px" >
	
	<tr><td>Name:</td><td><input type="text" name="cname" placeholder="Customer Name"></td></tr>
	<tr><td>Contact No:</td><td><input type="text" placeholder="8384868015" name="phone" id="phone" onkeyup="f1()" minlength="10" maxlength="10" /></td></tr>
	<tr><td>Email:</td>
		<td><input type="text" placeholder="abc@xyz.com" name="email" id="email" /></td>
	</tr>
	<tr><td>Address:</td>
		<td><input type="text" name="address" id="address" placeholder="Address" ></td>
	</tr>
	<tr><td>Power:</td><td style="text-align:left;"><table> 
		<tr><td></td><td>Sp.</td><td>Cyl.</td><td>Axis</td></tr>
		<tr>
			<td>RE :</td>
			<td><input type="text" name="resp" class="input1"  ></td>
			<td><input type="text" class="input1" name="recyl"></td>
			<td><input type="text" class="input1" name="raxis"></td>
		</tr>
		<tr><td>LE :</td>
			<td><input type="text" class="input1" name="lesp"></td>
			<td><input type="text" class="input1" name="lecyl"></td>
			<td><input type="text" class="input1" name="laxis"></td>
		</tr>
	         </table>
	     </td>
	 </tr> 
 

	<tr><td></td><td style="text-align:left;">ADD:<input type="text" class="input2" name="addi"  placeholder="+2.00sp" ></td></tr>
	<tr><td colspan="2"><input type="submit" class="button1" > </td></tr>
	</table>
	
</center>

	</div>



</body>

</html>
