<?php
	include("../db-api/txt-db-api.php");
	$data = json_decode(file_get_contents('php://input'), true);
	
	$db = new Database("cage");
	$rs = $db->executeQuery("SELECT * FROM players; ");
	$stored;
	$found = false;
	while($rs->next()) {
		$stored = $rs->getCurrentValuesAsHash();
		if(deslash($stored['name']) == $data['name'])
			$found = true;
	}
	if($found == true) {
		echo "found";
		$db->executeQuery("UPDATE players SET m2m0='".$data['m2m0']."',m2m1='".$data['m2m1']."' WHERE name='".$data['name']."'; ");
		exit;
	}
	
	$db->executeQuery("INSERT INTO players(pic, name, birth, height, team, joined, number, foot, att, def, strength, stamina, sp, head, drib, agility, shot, keeper, teamwork, tech, menta, freekick, pos, special, m2m0, m2m1, todo0, todo1, todo2, todo3) VALUES ('".$data['pic']."', '".$data['name']."', '".$data['birth']."', '".$data['height']."', '".$data['team']."', '".$data['joined']."', '".$data['number']."', '".$data['foot']."', '".$data['att']."', '".$data['def']."', '".$data['strength']."', '".$data['stamina']."', '".$data['sp']."', '".$data['head']."', '".$data['drib']."', '".$data['agility']."', '".$data['shot']."', '".$data['keeper']."', '".$data['teamwork']."', '".$data['tech']."', '".$data['menta']."', '".$data['freekick']."', '".$data['pos']."', '".$data['special']."', '".$data['m2m0']."', '".$data['m2m1']."', '".$data['todo0']."', '".$data['todo1']."', '".$data['todo2']."', '".$data['todo3']."')");
	
	echo "ok";
	
	// This helper function takes out slashes if if the magic quotes are on.
	function deslash($string) {
		if (get_magic_quotes_gpc())
			$string = stripslashes($string);
		return $string;
	}
?>