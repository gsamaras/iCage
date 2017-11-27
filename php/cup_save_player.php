<?php
	include("../db-api/txt-db-api.php");
	$data = json_decode(file_get_contents('php://input'), true);
	
	// pass
	if( $data['password'] != "nn") {
		echo "wrong password! You gave: |" . $data['pass'] . "|";
		exit;
	}
	
	$db = new Database("cage");
	$count = $data['players_count'];
	$rs=$db->executeQuery("SELECT * FROM cup_players;");
	while($rs->next()) {
		list($inc, $player, $goals, $team) = $rs->getCurrentValues();
		for($i = 0; $i < $count; $i++) {
			if($player == $data['player' . $i]) {
				$goals = $goals + $data['goals' . $i];
				$db->executeQuery("UPDATE cup_players SET goals='".$goals."' WHERE Nr = ".$inc);
			}
		}
	}
	
	echo "ok";
?>