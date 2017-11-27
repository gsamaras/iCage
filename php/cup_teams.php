<?php
    include("../db-api/txt-db-api.php");
	
	$arrayOfCalls = array();
	$db = new Database("cage");
	// read the teams
	$rs=$db->executeQuery("SELECT * FROM cup_standings;");
	while($rs->next()) {
		list($inc, $team, $gp, $w, $d, $l, $gf, $ga, $gd, $pts) = $rs->getCurrentValues();
		$arrayOfCalls[] = "update_teams_form('".($inc-1)."', '".$team."');";
	}
	$dummy = array();
	$dummy['calls'] = $arrayOfCalls;
	echo json_encode($dummy);
?>