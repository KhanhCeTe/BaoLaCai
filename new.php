<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Báo ná cải</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" href="img/icon1.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>
	<link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="css/style3.css">
	<link rel="new.php">
</head>
<body>
	<form method="post" action="">
	  <div class="login">
		<h2>Login</h2>
		<label class="user">Username</label>
		<input type="text"></br>
		<label>Pass</label>
		<input type="password" >
		<button type="submit" name="login">Login</button>

		
	  </div>
	</form>
	  <?php 
	  	if(isset($POST['login'])){
			header('location:index.html');
		  }
	  ?>


</body>
</html>