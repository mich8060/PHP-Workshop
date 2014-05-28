<?php

$person = array(
		array(
			"name" 		=>	"Michael Stevens", 
			"age"		=>	31, 
			"awesome"	=>	true
		),array(
			"name" 		=>	"John Doe", 
			"age"		=>	45, 
			"awesome"	=>	false
		)
	);

header('Content-type: application/json');
echo json_encode($person);

?>