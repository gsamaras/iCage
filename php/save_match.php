<?php
include("../db-api/txt-db-api.php");

$data = json_decode(file_get_contents('php://input'), true);
$i = 0;
$slot = -1;
$saves;
$title;
$db;
foreach($data as $item) {
	if($i == 0) {
		// get slot
		$slot = $item;
		$db = new Database("cage");
	} else if($i == 1) {
		// get saves
		$rs = $db->executeQuery("SELECT saves FROM title WHERE Nr ='".$slot."'");
		$rs->next();
		list($saves) = $rs->getCurrentValues();
		if($saves != $item) {
			//echo "saves_in_file: " . $saves . ", saves user has: " . $item;
			echo "not_ok";
			exit;
		}
		$saves = $saves + 1;
		$db->executeQuery("DELETE FROM match" . $slot . ""); // delete match, will overwrite it
	} else if($i == 2) {
		$title = $item;
		if($title == "Match " . $slot)
			$saves = 1;
	} else if($i == 3) {
		$db->executeQuery("UPDATE title SET match='".$title."',saves='".$saves."',creator='".$item."' WHERE Nr ='".$slot."'");
		echo $saves;
	} else {
		$db->executeQuery("INSERT INTO match" . $slot . "(name, position, ability, unsure, waiting) VALUES ('".$item['name']."','".$item['pos']."','".$item['ability']."','".$item['unsure']."','".$item['waiting']."') ");
	}
	$i = $i + 1;
	// to know what's in $item
    //echo '<pre>'; var_dump($item);
}
?>