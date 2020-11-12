<!DOCTYPE html>
<html>
<head>
	<title>FORM LOGIN</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form method="POST" action="aksilogin.php">
	<div class='login-container'>
		<h2>FORM LOGIN</h2>
			<div class="row">
				<div class="col-md-12 form-group">
					<input type="text" name="username" class="form-control" placeholder="Username">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 form-group">
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 form-group">
				<input type="submit" class="form-control" class="btn btn-block btn-login" placeholder="Login">
			</div>
		</div>
		</form>
</body>
</html>