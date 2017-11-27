<?php
include("../db-api/txt-db-api.php");

$found = 0;
if(isset($_POST['name'])) {
	$db = new Database("cage");
	$rs=$db->executeQuery("SELECT * FROM players;");
	while(!$found && $rs->next()) {
		list($inc, $name, $pass, $pos, $ability)=$rs->getCurrentValues();
		if($name == $_POST['name'] && $pass == $_POST['password'])
			$found = 1;
	}
} 
if($found == 1) {
	echo "ok " . $pos . " " . $ability;
} else {
	echo "error";
	exit;
}
?>