
<html>
<head>
<title>Add Product</title>
<link rel="stylesheet" type="text/css" href="css/main.css">

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
   <li><a href="">Add Product</a></li> |
   <li><a href="viewCust.php">View Customers</a></li> |
   <li><a href="viewStock.php">View Products</a></li> |
   <li><a href="viewBill.php">View Bills</a></li> |
   <li><a href="makeBill.php">Billing</a></li>
</ul>
	<div class="main"  >
	<h2>Add New Product</h2><br>
<center>
	<table cellspacing="10px" >
	<form method="POST" action="connectStock.php" >
	<tr><td>Product ID:</td><td><input type="text" placeholder="RB-100" name="pid" required ></td></tr>
	<tr><td>Name:</td><td><input type="text" name="pname" placeholder="RayBen 100" required  ></td></tr>
	<tr><td>Color:</td><td><input type="text" name="color" placeholder="Green"  required ></td></tr>
	<tr><td>Type:</td><td><input type="text" name="type" placeholder="Plastic"  required ></td></tr>
	<tr><td>Quantitiy:</td><td><input type="number" name="quantity" placeholder="3"  required ></td></tr>
	<tr><td>Price</td><td style="text-align:left;">Cost Price:<input type="number" class="input1" name="costP" placeholder="399" required  >Selling Price:<input type="number" class="input1" name="sellP" placeholder="1299"  required ></td></tr>
	<tr><td colspan="2"><input type="submit" class="button1" > </td></tr>
	</table>
	
</center>

	</div>



</body>

</html>
