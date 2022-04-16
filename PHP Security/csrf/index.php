<?php
	require_once 'app/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>CSRF</title>
	<meta charset="utf-8">


</head>
<body>
	<form action="delete.php" method="post">
		<input type="submit" value="Delete">

		<input type="hidden" name="_token" value="<?php echo $_SESSION['_token'] ?>">
	</form>
</body>
</html>