<?php
    include("../db-api/txt-db-api.php");
	
	function debug_to_console( $data ) {
		if ( is_array( $data ) )
			$output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
		else
			$output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
		echo $output;
	}
	
	$size = 0;
	$arrayOfCalls = array(); // collect the scripts we want to run
	$db = new Database("cage");
	// read and update views
	$rs=$db->executeQuery("SELECT value FROM views;");
	while($rs->next()) {
		list($value)=$rs->getCurrentValues();
		$value = $value + 1;
		$db->executeQuery("UPDATE views SET value='".$value."'");
		$arrayOfCalls[] = "update_views(".$value.");";
		$size++;
	}
	
	// read data of textbox
	$rs=$db->executeQuery("SELECT value FROM textbox;");
	while($rs->next()) {
		list($value)=$rs->getCurrentValues();
		$arrayOfCalls[] = "updateTextbox('".$value."');";
		$size++;
	}
	
	// read match1's title
	$slotdummy = 1;
	$rs=$db->executeQuery("SELECT match,saves,creator FROM title WHERE Nr ='".$slotdummy."'");
	while($rs->next()) {
		list($match, $saves, $creator)=$rs->getCurrentValues();
		$arrayOfCalls[] = "update_match('"."1"."', '".$match."', '".$saves."', '".$creator."');";
		$size++;
	}
	// read match1's players
	$rs=$db->executeQuery("SELECT * FROM match1;");
	$inc = -1;
	while($rs->next()) {
		list($inc, $name, $pos, $ab, $unsure, $waiting)=$rs->getCurrentValues();
		$arrayOfCalls[] = "update_player('"."1"."', '".$inc."', '".$name."', '".$pos."', '".$ab."', '".$unsure."', '".$waiting."');";
		$size++;
	}
	if($inc != -1) {
		$inc = 13;
		end($arrayOfCalls);
		$key = key($arrayOfCalls);
		$arrayOfCalls[$key] = "update_player('"."1"."', '".$inc."', '".$name."', '".$pos."', '".$ab."', '".$unsure."', '".$waiting."');";
		reset($arrayOfCalls);
	}
	
	// read match2's title
	$slotdummy = 2;
	$rs=$db->executeQuery("SELECT match,saves,creator FROM title WHERE Nr ='".$slotdummy."'");
	while($rs->next()) {
		list($match, $saves, $creator)=$rs->getCurrentValues();
		$arrayOfCalls[] = "update_match('"."2"."', '".$match."', '".$saves."', '".$creator."');";
		$size++;
	}
	// read match2's players
	$rs=$db->executeQuery("SELECT * FROM match2;");
	$inc = -1;
	while($rs->next()) {
		list($inc, $name, $pos, $ab, $unsure, $waiting)=$rs->getCurrentValues();
		$arrayOfCalls[] = "update_player('"."2"."', '".$inc."', '".$name."', '".$pos."', '".$ab."', '".$unsure."', '".$waiting."');";
		$size++;
	}
	if($inc != -1) {
		$inc = 13;
		end($arrayOfCalls);
		$key = key($arrayOfCalls);
		$arrayOfCalls[$key] = "update_player('"."2"."', '".$inc."', '".$name."', '".$pos."', '".$ab."', '".$unsure."', '".$waiting."');";
		reset($arrayOfCalls);
	}

	$dummy = array();
	$dummy['calls'] = $arrayOfCalls;
	echo json_encode($dummy);
?>