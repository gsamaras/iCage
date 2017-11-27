<?php
	include("../db-api/txt-db-api.php");
	$data = json_decode(file_get_contents('php://input'), true);
	
	// pass
	if( $data['password'] != "nn") {
		echo "wrong password! You gave: |" . $data['pass'] . "|";
		exit;
	}
	
	$draw = 0;
	if($data['wscore'] == $data['lscore'])
		$draw = 1;
	$db = new Database("cage");
	// read the teams
	$rs=$db->executeQuery("SELECT * FROM cup_standings;");
	while($rs->next()) {
		list($inc, $team, $gp, $w, $d, $l, $gf, $ga, $gd, $pts) = $rs->getCurrentValues();
		if($team == $data['win']) {
			$gp = $gp + 1;
			if($draw == 1)
				$d = $d + 1;
			else
				$w = $w + 1;
			$gf = $gf + $data['wscore'];
			$ga = $ga + $data['lscore'];
			$gd = $gf - $ga;
			if($draw == 1)
				$pts = $pts + 1;
			else
				$pts = $pts + 3;
			$db->executeQuery("UPDATE cup_standings SET gp='".$gp."',w='".$w."',d='".$d."',gf='".$gf."',ga='".$ga."',gd='".$gd."',pts='".$pts."' WHERE Nr = ".$inc);
		} else if($team == $data['loss']) {
			$gp = $gp + 1;
			if($draw == 1)
				$d = $d + 1;
			else
				$l = $l + 1;
			$gf = $gf + $data['lscore'];
			$ga = $ga + $data['wscore'];
			$gd = $gf - $ga;
			if($draw == 1)
				$pts = $pts + 1;
			$db->executeQuery("UPDATE cup_standings SET gp='".$gp."',d='".$d."',l='".$l."',gf='".$gf."',ga='".$ga."',gd='".$gd."',pts='".$pts."' WHERE Nr = ".$inc);
		}
	}
	
	echo "ok";
?>