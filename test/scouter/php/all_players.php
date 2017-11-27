<?php
	include("../db-api/txt-db-api.php");
	$arrayOfCalls = array(); // collect the scripts we want to run
	
	// check if user asks for a team
	$db = new Database("cage");
	$count = 0;
	$rs = $db->executeQuery("SELECT * FROM players");
	while($rs->next()) {
		$stored = $rs->getCurrentValuesAsHash();
		$count = $count + 1;
		$arrayOfCalls[] = "update_player_list('".deslash($stored['name'])."', '".$count."');";
	}
	
	if($count == 0) {
		echo "not_found";
		exit;
	}
	
	$dummy = array();
	$dummy['calls'] = $arrayOfCalls;
	echo json_encode($dummy);
	
	
	// This helper function takes out slashes if if the magic quotes are on.
	function deslash($string) {
		if (get_magic_quotes_gpc())
			$string = stripslashes($string);
		return $string;
	}
?>