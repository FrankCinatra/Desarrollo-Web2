<?php
	$con = new PDO('mysql:host=127.0.0.1;dbname=sql_injection', 'root', '');
	if(isset($_POST['submit'])){
    	$name = trim($_POST['name']);
    	$password = trim($_POST['password']);

    	/*$userQuery = $con->prepare("SELECT * FROM users WHERE name = :name");
    	$userQuery->execute([
        	'name'=> $name
    	]);*/

		/*$insertQuery = $con->prepare("INSERT INTO users(name, email, password) VALUES(:name, :email, :password) ");
		
		$insertQuery->execute([
			'name'=> $name,
			'email'=> 'mario@mario.com',
			'password'=> password_hash($password, PASSWORD_BCRYPT, [12])
		]);*/

		$userQuery = $con->prepare("SELECT * FROM users WHERE name = :name ");
		
		$userQuery->execute([
			'name'=> $name
		]);
		
		$user = $userQuery->fetch(PDO::FETCH_OBJ);
		
		$db_password = $user->password;

		if(password_verify($password, $db_password)){
        	echo "<p class='bg-success'>User verified</p>";
    	}else{
        	echo "<p class='bg-danger'> User not verified</p>";
    	}
		/*if($userQuery->rowCount()){
			echo "WE FOUND A USER";
		}*/
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Password</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="col-sm-6 col-sm-offset-4">
		<form action="" method="post" autocomplete="off">
			<h2>Login</h2>
			<div class="form-group">
				<label for="name">
					Name
		        	<input type="text" name="name">
		    	</label>
			</div>
			<div class="form-group">
		    	<label for="name">
		    		Password
		        	<input type="text" name="password">
		    	</label>
		    </div>
		    
		    <input type="submit" name="submit" class="btn btn-primary">
		</form>
	</div>
</body>
</html>