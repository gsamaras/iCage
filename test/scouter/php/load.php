<?php
	include("../db-api/txt-db-api.php");
	$data = json_decode(file_get_contents('php://input'), true);
	$arrayOfCalls = array(); // collect the scripts we want to run
	
	// check if user asks for a team
	$db = new Database("cage");
	$found = false;
	$rs; 
	$player_prev = "null";
	$player;
	$player_next;
	$idx_prev = $data['idx'] - 1;
	$idx_next = $data['idx'] + 1;
	// $data['idx'] is the index of the player we want

	if($data['name'] == "null") {
		// the user asked for all players
		if($idx_prev != 0) {
			$rs = $db->executeQuery("SELECT * FROM players WHERE Nr = '".$idx_prev."'");
			while($rs->next()) {
				$stored = $rs->getCurrentValuesAsHash();
				$player_prev = deslash($stored['name']);
				$found = true;
			}
		}
		$rs = $db->executeQuery("SELECT * FROM players WHERE Nr = '".$data['idx']."'");
		while($rs->next()) {
			$stored = $rs->getCurrentValuesAsHash();
			$player = deslash($stored['name']);
			$found = true;
		}
		$rs = $db->executeQuery("SELECT * FROM players WHERE Nr = '".$idx_next."'");
		while($rs->next()) {
			$stored = $rs->getCurrentValuesAsHash();
			$player_next = deslash($stored['name']);
			$found = true;
		}
		//echo $player_prev, $player, $player_next;
	} else {
		// if the user loaded a team
		if($idx_prev != 0) {
			$rs = $db->executeQuery("SELECT player".$idx_prev.", player".$data['idx'].", player".$idx_next." FROM teams WHERE team ='".$data['name']."'");
			while($rs->next()) {
				list($player_prev, $player, $player_next) = $rs->getCurrentValues();
				$found = true;
			}
		} else {
			$rs = $db->executeQuery("SELECT player".$data['idx'].", player".$idx_next." FROM teams WHERE team ='".$data['name']."'");
			while($rs->next()) {
				list($player, $player_next) = $rs->getCurrentValues();
				$player_prev = "null";
				$found = true;
			}
		}
	}
	
	// load player
	$stored;
	if($found == true) {
		if($player_next == "")
			$player_next = "null";
		$arrayOfCalls[] = "update_arrows('".$player_prev."', '".$player_next."');";
		// search for player of that team
		$rs = $db->executeQuery("SELECT * FROM players WHERE name ='".$player."'");
		$rs->next();
		$stored = $rs->getCurrentValuesAsHash();
		$arrayOfCalls[] = "update_page('".deslash($stored['pic'])."', '".deslash($stored['name'])."', '".deslash($stored['birth'])."',
			'".deslash($stored['height'])."', '".deslash($stored['team'])."', '".deslash($stored['joined'])."', '".deslash($stored['number'])."',
			'".deslash($stored['foot'])."', '".deslash($stored['att'])."', '".deslash($stored['def'])."', '".deslash($stored['strength'])."',
			'".deslash($stored['stamina'])."', '".deslash($stored['sp'])."', '".deslash($stored['head'])."', '".deslash($stored['drib'])."',
			'".deslash($stored['agility'])."', '".deslash($stored['shot'])."', '".deslash($stored['keeper'])."',
			'".deslash($stored['teamwork'])."', '".deslash($stored['tech'])."', '".deslash($stored['menta'])."', '".deslash($stored['freekick'])."',
			'".deslash($stored['pos'])."', '".deslash($stored['special'])."', '".deslash($stored['m2m0'])."', '".deslash($stored['m2m1'])."',
			'".deslash($stored['todo0'])."', '".deslash($stored['todo1'])."', '".deslash($stored['todo2'])."', '".deslash($stored['todo3'])."'
			);";
	} else {
		// user asked for a player only
	}
	
	if($found == false) {
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