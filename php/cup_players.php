<?php
    include("../db-api/txt-db-api.php");
	
	$arrayOfCalls = array();
	$db = new Database("cage");
	// read the players
	$playerArr = array();
	$prev_team = "";
	$i = 0;
	$rs=$db->executeQuery("SELECT * FROM cup_players;");
	while($rs->next()) {
		list($inc, $player, $goals, $team) = $rs->getCurrentValues();
		if($prev_team != $team)
			$i = 0;
		else
			$i = $i + 1;
		$prev_team = $team;
		$arrayOfCalls[] = "update_players_form('".$i."', '".$player."', '".$team."');";
	}
		
	$dummy = array();
	$dummy['calls'] = $arrayOfCalls;
	echo json_encode($dummy);
?>