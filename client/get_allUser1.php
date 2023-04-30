<!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="bg-primary">
 <div class="container-fluid">
	<div>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">CRUD API</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li><a href="#">Create</a></li>
				<li><a href="#">Read</a></li>
				<li><a href="#">Update</a></li>
				<li><a href="#">Delete</a></li>
			</ul>
		</div>
	</nav>
	</div>
 <div class="container  mx-auto">
        <?php include '../backend/get_allUsers_req.php' ?>
    </div>
 </div>
</body>
</html>
