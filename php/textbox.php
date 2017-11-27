<?php
include("../db-api/txt-db-api.php");

if(isset($_POST['elements'])) {
	$db = new Database("cage");
	$str = filter_var($_POST['elements'], FILTER_SANITIZE_STRING);
	$db->executeQuery("UPDATE textbox SET value='".$str."'");
	echo "ok";
} else {
	echo "error";
	exit;
}
?>
