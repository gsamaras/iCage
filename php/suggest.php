<?php
    include("../db-api/txt-db-api.php");
	function sortByOrder($a, $b) {
		return $b['chance'] - $a['chance'];
	}
	$data = json_decode(file_get_contents('php://input'), true);
	$hour = $data['hour'];
	$day = $data['day'];
	$month = $data['month'];
	
	$arrayOfCalls = array();
	$db = new Database("cage");
	// read the players
	$chance = 0; # that the player can play at the match
	$hour_chance = 0;
	$day_chance = 0;
	$month_chance = 0;
	$player_chance = array(); # collect players and their chance to play
	$i = 0; # counter for $player_chance[]

	$rs=$db->executeQuery("SELECT * FROM suggest;");
	while($rs->next()) {
		list($inc, $player, $contact, $twelve_h, $thirteen_h, $fourteen_h, $fifteen_h, $sixteen_h, $seventeen_h, $eighteen_h, $nineteen_h, $twenty_h, $twentyone_h, $twentytwo_h, $mon, $tue, $wed, $thu, $fri, $sat, $sun, $one_m, $two_m, $three_m, $four_m, $five_m, $six_m, $seven_m, $eight_m, $nine_m, $ten_m, $eleven_m, $twelve_m) = $rs->getCurrentValues();
		# check hour
		if($hour == 12)
			$hour_chance = $twelve_h;
		else if($hour == 13)
			$hour_chance = $thirteen_h;
		else if($hour == 14)
			$$hour_chance = $fourteen_h;
		else if($hour == 15)
			$hour_chance = $fifteen_h;
		else if($hour == 16)
			$hour_chance = $sixteen_h;
		else if($hour == 17)
			$hour_chance = $seventeen_h ;
		else if($hour == 18)
			$hour_chance = $eighteen_h;
		else if($hour == 19)
			$hour_chance = $nineteen_h;
		else if($hour == 20)
			$hour_chance = $twenty_h;
		else if($hour == 21)
			$hour_chance = $twentyone_h;
		else if($hour == 22)
			$hour_chance = $twentytwo_h;
		# check day
		if($day == "Monday")
			$day_chance = $mon;
		else if($day == "Tuesday")
			$day_chance = $tue;
		else if($day == "Wednesday")
			$day_chance = $wed;
		else if($day == "Thursday")
			$day_chance = $thu;
		else if($day == "Friday")
			$day_chance = $fri;
		else if($day == "Saturday")
			$day_chance = $sat;
		else if($day == "Sunday")
			$day_chance = $sun;
		# check month
		if($month == 1)
			$month_chance = $one_m;
		else if($month == 2)
			$month_chance = $two_m;
		else if($month == 3)
			$month_chance = $three_m;
		else if($month == 4)
			$month_chance = $four_m;
		else if($month == 5)
			$month_chance = $five_m;
		else if($month == 6)
			$month_chance = $six_m;
		else if($month == 7)
			$month_chance = $seven_m;
		else if($month == 8)
			$month_chance = $eight_m;
		else if($month == 9)
			$month_chance = $nine_m;
		else if($month == 10)
			$month_chance = $ten_m;
		else if($month == 11)
			$month_chance = $eleven_m;
		else if($month == 12)
			$month_chance = $twelve_m;
		$player_chance[$i] = array();
		$player_chance[$i]['player'] = $player;
		$player_chance[$i]['contact'] = $contact;
		$player_chance[$i]['chance'] = 10 * $hour_chance + 70 * $day_chance + 20 * $month_chance;
		$i = $i + 1;
	}
	usort($player_chance, 'sortByOrder');

	echo json_encode($player_chance);
?>