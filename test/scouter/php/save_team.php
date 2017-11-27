<?php
	include("../db-api/txt-db-api.php");
	$data = json_decode(file_get_contents('php://input'), true);
	
	$db = new Database("cage");
	$rs = $db->executeQuery("SELECT * FROM teams; ");
	$stored;
	$found = false;
	while($rs->next()) {
		$stored = $rs->getCurrentValuesAsHash();
		if(deslash($stored['team']) == $data['team'])
			$found = true;
	}
	if($found == true) {
		echo "found";
		exit;
	}
	
	$db->executeQuery("INSERT INTO teams(team,password,size,player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,player11,player12,player13,player14,player15,player16,player17,player18,player19,player20) VALUES ('".$data['team']."', '".$data['pass']."', '".$data['count']."', '".$data['name1']."', '".$data['name2']."', '".$data['name3']."', '".$data['name4']."', '".$data['name5']."', '".$data['name6']."', '".$data['name7']."', '".$data['name8']."', '".$data['name9']."', '".$data['name10']."', '".$data['name11']."', '".$data['name12']."', '".$data['name13']."', '".$data['name14']."', '".$data['name15']."', '".$data['name16']."', '".$data['name17']."', '".$data['name18']."', '".$data['name19']."', '".$data['name20']."')");
	
	echo "ok";
	
	// This helper function takes out slashes if if the magic quotes are on.
	function deslash($string) {
		if (get_magic_quotes_gpc())
			$string = stripslashes($string);
		return $string;
	}
?>