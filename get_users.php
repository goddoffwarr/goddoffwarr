<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *);

$Users=[
 	[
		"id" => "1",
		"uuid"=>""
	]
];

echo json_encode($users, JSON_PRETTY_PRINT);

?>
