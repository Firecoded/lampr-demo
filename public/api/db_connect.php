<?php

require_once('../../config/db.php');

$conn = mysqli_connect($host, $user, $password, $db_name);

if(!$conn){
	$output['error'] = 'error connecting to Database';

	print(json_encode($output));

	exit;
}
