<?php
	$data = json_decode(file_get_contents('php://input'), true);
	
	// pass
	if( $data['pass'] != "nn") {
		echo "wrong password! You gave: |" . $data['pass'] . "|";
		exit;
	}
	
	// create the string to be saved
	$str = $data['score'] . " " . $data['win0'] . " " . $data['win1'] . " " . $data['win2'] . " " . $data['win3'] . " " . $data['win4'] . " ";
	$str = $str . $data['lost0'] . " " . $data['lost1'] . " " . $data['lost2'] . " " . $data['lost3'] . " " . $data['lost4'] . "\n";
  
	// append to file
	file_put_contents("../results.txt", $str, FILE_APPEND | LOCK_EX);
	echo "ok";
?>