<html>
<head>
<title>Search Customer</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<style>
body{
	background-color:blue;
	color:white;
	margin:0px;

}



.navbar{
	background-color:blue;
	color:white;
	height:23px;
	width:100%;
	padding: 0px;
	list-style:none;
	text-align:center;
	

}
.navbar > li{
	display:inline-block;
	padding-bottom:11px
	color:white;
}
.navbar > li > a{
	color:white;
	text-decoration:none;
	padding:0px 30px 0px 30px;
	font-family:Arial;
	font-size:20px;
}

.navbar > li > a:hover{
	background-color:yellow;
	color:blue;
	padding:40px 30px 40px 30px;
	transition:0.5s;
}
.main{
	background-color:white;
	width:100%;
	color:black;
	height:450px;
	float:left;
	padding-top:20px;
	


}

td{
	color:black;
	font-family:Lucida;
	text-align:center;


}
input{
	width:350px;

}
.input1{
	width:70px;

}
.input2{
	width:100px;
}
.button1{
	width:150px;
	height:45px;
	background-color:yellow;
	border:0px;
	border-radius:10px;
}
.button1:hover{
	width:150px;
	height:45px;
	background-color:white;
	color:gray;
	border:2px solid yellow;
	box-shadow:10px 10px 5px yellow;  /* x-axis y-axis shadow-blur */
	transition:0.5s;
}
th{
	font-family:Arial;
	font-size:13px;
	color:black;
	padding:5px;
}

table{
	border-collapse:collapse;
	width:98%;
}
table,td ,th {	
	border:1px solid blue;

}
td{
	font-family:Arial;
	font-size:13px;
	color:black;
	text-align:left;
}
th{
	background-color:lightblue;
}
button{
	width:50px;
	height:40px;
	color:green;
	background-color:white;
	border:1px solid gray;
	
}
input{
	height:40px;
	border:1px solid gray;
	
}
input:hover{
	border:3px solid lightblue;
	box-shadow:0px 0px 5px gray;
	transition:0.5s;
}
.search1{
	
	width:50%;
	height:40px;
	float:left;
	text-align:right;

}
.search2{

	width:50%;
	height:35px;
	float:left;
	text-align:left;
}
button:hover{
	border:3px solid lightblue;
	box-shadow:0px 0px 5px gray;
	transition:0.5s;
}

img{
	

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
   <li><a href="viewBill.php">View Bills</a></li> |
   <li><a href="makeBill.php">Billing</a></li>
</ul>
	<div class="main">

	<div class="search1">
	<input type="text" maxlength=10 placeholder="Enter Phone No." >
	</div>
	<div class="search2">
	<button><img src="images/search.png" width="30px" height="30px" ></button> 
	</div>
<br>
<hr>
<br>

<center>
	<table border="1px"  >
	
	<tr><th width="200px">Name</th><th width="150px">Contact No</th><th>Address</th><th width="150px">Power</th></tr>
	<tr align="left"><td>Name</td><td>Contact No</td><td>Address</td><td>Power</td></tr>
	

	</table>
	
</center>

	</div>



</body>

</html>
