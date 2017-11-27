<?php
    include("../db-api/txt-db-api.php");
	
	function debug_to_console( $data ) {
		if ( is_array( $data ) )
			$output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
		else
			$output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
		echo $output;
	}
	
	function sortByOrder($a, $b) {
		if($a[8] == $b[8]) {
			return $b[7] - $a[7];
		}
		return $b[8] - $a[8];
	}
	
	function sortPlayers($a, $b) {
		return $b[1] - $a[1];
	}
	
	$updateArr = array();
	$db = new Database("cage");
	// read the teams
	$rs=$db->executeQuery("SELECT * FROM cup_standings;");
	while($rs->next()) {
		list($inc, $team, $gp, $w, $d, $l, $gf, $ga, $gd, $pts) = $rs->getCurrentValues();
		//$arrayOfCalls[] = "update_table('".($inc-1)."', '".$team."', '".$gp."', '".$w."', '".$d."', '".$l."', '".$gf."', '".$ga."', '".$gd."', '".$pts."');";
		array_push($updateArr , array($team, $gp, $w, $d, $l, $gf, $ga, $gd, $pts));
	}
	/*$updateArr = array('0' => array('Real Klarin', '1', '2', '3', '4', '5', '6', '12', '8'),
'1' => array('RAKoun', '1', '2', '3', '4', '5', '6', '11', '9'),
'2' => array('Panklouviakos', '1', '2', '3', '4', '5', '6', '10', '10'),
'3' => array('Ouza&Zabon', '1', '2', '3', '4', '5', '6', '9', '111'),
'4' => array('ui48975', '1', '2', '3', '4', '5', '6', '8', '12'),
'5' => array('Genia tou 98', '1', '2', '3', '4', '5', '6', '7', '13'));*/
	
	usort($updateArr, 'sortByOrder');
	$arrayOfCalls = array(); // collect the scripts we want to run
	foreach($updateArr as $id => $values) {
		array_push($arrayOfCalls,"update_table('".$id."', '".$values[0]."', '".$values[1]."', '".$values[2]."', '".$values[3]."', '".$values[4]."', '".$values[5]."', '".$values[6]."', '".$values[7]."', '".$values[8]."');");
	}
	
	// read the players
	$playerArr = array();
	$rs=$db->executeQuery("SELECT * FROM cup_players;");
	while($rs->next()) {
		list($inc, $player, $goals, $team) = $rs->getCurrentValues();
		array_push($playerArr , array($player, $goals, $team));
	}
	usort($playerArr, 'sortPlayers');
	$i = 0;
	foreach($playerArr as $id => $values) {
		array_push($arrayOfCalls,"update_player('".$id."', '".$values[0]."', '".$values[1]."', '".$values[2]."');");
		$i = $i + 1;
		if($i == 5)
			break;
	}
	/*$id = "Nikos Skouteris";
	$idd = "8";
	$db->executeQuery("UPDATE cup_players SET goals='55', goals='55' WHERE Nr = ".$idd);*/

	
	$dummy = array();
	$dummy['calls'] = $arrayOfCalls;
	echo json_encode($dummy);
?>