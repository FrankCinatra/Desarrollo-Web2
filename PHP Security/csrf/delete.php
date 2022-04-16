<?php
	require_once 'app/config.php';

	if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    	die('Sorry, cannot perform this operation');
	}

	$delete_user = $con->prepare("DELETE FROM users WHERE name = :name");
	$delete_user->execute([
		'name'=>$_SESSION['name']
	]);
?>