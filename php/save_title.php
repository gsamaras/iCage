<?php
include("../db-api/txt-db-api.php");

	function debug_to_console( $data ) {
		if ( is_array( $data ) )
			$output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
		else
			$output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
		echo $output;
	}

//debug_to_console($_POST);
//echo "|".$_POST['saves']."|";

if(isset($_POST['elements'])) {
	$db = new Database("cage");
	$rs=$db->executeQuery("SELECT saves FROM title WHERE Nr ='".$_POST['slot']."'");
	$rs->next();
	list($saves)=$rs->getCurrentValues();
	//echo "|".$saves."|";

	if($saves == $_POST['saves']) {
		if($_POST['elements'] != "Match " . $_POST['slot'])
			$saves = $_POST['saves'] + 1;
		else
			$saves = 1;
		$db->executeQuery("UPDATE title SET match='".$_POST['elements']."',saves='".$saves."',creator='".$_POST['creator']."' WHERE Nr ='".$_POST['slot']."'");
		echo $saves;
	} else {
		echo 'not_ok';
		exit;
	}
} else {
	echo 'error';
	exit;
}
?>