<?php
	include("../db-api/txt-db-api.php");
	$data = json_decode(file_get_contents('php://input'), true);
	/*foreach($data as $item) {
		// to know what's in $item
		echo '<pre>'; var_dump($item);
	}
	exit;*/
	$arrayOfCalls = array(); // collect the scripts we want to run
	
	// check if user asks for a team
	$db = new Database("cage");
	$found = false;
	$stored;
	if($data['name'] == "*") {
		// user asked for all players
		$arrayOfCalls[] = "update_global('2350');";
		// search player
		$rs = $db->executeQuery("SELECT * FROM players WHERE Nr ='1'");
		while($rs->next()) {
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
			$found = true;
		}
		$rs = $db->executeQuery("SELECT * FROM players WHERE Nr ='2'");
		$next_name = " ";
		while($rs->next()) {
			$stored = $rs->getCurrentValuesAsHash();
			$next_name = deslash($stored['name']);
		}
		if($next_name == " ") {
			$arrayOfCalls[] = "update_arrows('null', 'null');";
		} else {
			$arrayOfCalls[] = "update_arrows('null', '".$next_name."');";
		}
	} else {
		// search for team
		$rs = $db->executeQuery("SELECT * FROM teams WHERE team ='".$data['name']."'");
		while($rs->next()) {
			$stored = $rs->getCurrentValuesAsHash();
			if(deslash($stored['password']) != "void" && deslash($stored['password']) != $data['pass']) {
				echo "wrong_pass";
				exit;
			}
			$found = true;
		}
		// load player
		if($found == true) {
			$arrayOfCalls[] = "update_arrows('null', '".deslash($stored['player2'])."');";
			$arrayOfCalls[] = "update_global('".deslash($stored['size'])."');";
			// search player
			$rs = $db->executeQuery("SELECT * FROM players WHERE name ='".deslash($stored['player1'])."'");
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
			// user asked for a player
			$arrayOfCalls[] = "update_arrows('null', 'null');";
			$arrayOfCalls[] = "update_global('1');";
			// search player
			$rs = $db->executeQuery("SELECT * FROM players WHERE name ='".$data['name']."'");
			while($rs->next()) {
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
				$found = true;
			}			
		}
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