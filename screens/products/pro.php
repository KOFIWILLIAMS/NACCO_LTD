

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nacco Limited</title>
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../css/homePage.css">

	<!-- Bootstrap core CSS-->
	<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

	<!-- Custom styles for this template-->
	
	<link href="../../css/sb-admin.css" rel="stylesheet">

	<link href="../../css/cart_style.css" rel="stylesheet">

</head>
<nav class="navtop">
	<div>
		<h1>Nacco Limited </h1>
		<a class="nav-link" href="../../screens/adminhome.php">
			<i class="fas fa-fw fa-home"></i>
			<span> Home</span>
		</a>

		<a title="Order" class="nav-link" href="../../screens/products/pro.php">
			<i class="fas fa-fw fa-shopping-cart"></i>Add Product</a>
		<a href="../../auth/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
	</div>
</nav>


	<body class="loggedin">
		

		<div class="content">
			<h2>Whole sale and retail company  </h2>

			<?php 
			///display of product forms
			include 'productadd.php'; 
			?>
		</div>
	</body>
</html>

