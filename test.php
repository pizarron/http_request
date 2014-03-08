<?php
	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		header('Content-Type: application/json'); 
		print'{"name":"Foo", "lastName": "Baar"}';
	} else {
		$a = $_POST['name'];
		print'{"name":"' . $a . '", "lastName": "xxBaar"}';
	}
?>
