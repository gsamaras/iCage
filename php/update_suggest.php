<?php
	include("../db-api/txt-db-api.php");
	$data = json_decode(file_get_contents('php://input'), true);
	$hour = $data['hour'];
	$day = $data['day'];
	$month = $data['month'];
	
	$db = new Database("cage");
	$rs=$db->executeQuery("SELECT * FROM suggest WHERE player = '".$data['player']."'");
	while($rs->next()) {
		list($inc, $player, $contact, $twelve_h, $thirteen_h, $fourteen_h, $fifteen_h, $sixteen_h, $seventeen_h, $eighteen_h, $nineteen_h, $twenty_h, $twentyone_h, $twentytwo_h, $mon, $tue, $wed, $thu, $fri, $sat, $sun, $one_m, $two_m, $three_m, $four_m, $five_m, $six_m, $seven_m, $eight_m, $nine_m, $ten_m, $eleven_m, $twelve_m) = $rs->getCurrentValues();
		# check hour
		if($hour == 12)
			$twelve_h = $twelve_h + 1;
		else if($hour == 13)
			$thirteen_h = $thirteen_h + 1;
		else if($hour == 14)
			$fourteen_h = $fourteen_h + 1;
		else if($hour == 15)
			$fifteen_h = $fifteen_h + 1;
		else if($hour == 16)
			$sixteen_h = $sixteen_h + 1;
		else if($hour == 17)
			$seventeen_h = $seventeen_h + 1;
		else if($hour == 18)
			$eighteen_h = $eighteen_h + 1;
		else if($hour == 19)
			$nineteen_h = $nineteen_h + 1;
		else if($hour == 20)
			$twenty_h = $twenty_h + 1;
		else if($hour == 21)
			$twentyone_h = $twentyone_h + 1;
		else if($hour == 22)
			$twentytwo_h = $twentytwo_h + 1;
		# check day
		if($day == "Monday")
			$mon = $mon + 1;
		else if($day == "Tuesday")
			$tue = $tue + 1;
		else if($day == "Wednesday")
			$wed = $wed + 1;
		else if($day == "Thursday")
			$thu = $thu + 1;
		else if($day == "Friday")
			$fri = $fri + 1;
		else if($day == "Saturday")
			$sat = $sat + 1;
		else if($day == "Sunday")
			$sun = $sun + 1;
		# check month
		if($month == 1)
			$one_m = $one_m + 1;
		else if($month == 2)
			$two_m = $two_m + 1;
		else if($month == 3)
			$three_m = $three_m + 1;
		else if($month == 4)
			$four_m = $four_m + 1;
		else if($month == 5)
			$five_m = $five_m + 1;
		else if($month == 6)
			$six_m = $six_m + 1;
		else if($month == 7)
			$seven_m = $seven_m + 1;
		else if($month == 8)
			$eight_m = $eight_m + 1;
		else if($month == 9)
			$nine_m = $nine_m + 1;
		else if($month == 10)
			$ten_m = $ten_m + 1;
		else if($month == 11)
			$eleven_m = $eleven_m + 1;
		else if($month == 12)
			$twelve_m = $twelve_m + 1;
		$db->executeQuery("UPDATE suggest SET twelve_h='$twelve_h', thirteen_h='$thirteen_h', fourteen_h='$fourteen_h', fifteen_h='$fifteen_h', sixteen_h='$sixteen_h', seventeen_h='$seventeen_h', eighteen_h='$eighteen_h', nineteen_h='$nineteen_h', twenty_h='$twenty_h', twentyone_h='$twentyone_h', twentytwo_h='$twentytwo_h', mon='$mon', tue='$tue', wed='$wed', thu='$thu', fri='$fri', sat='$sat', sun='$sun', one_m='$one_m', two_m='$two_m', three_m='$three_m', four_m='$four_m', five_m='$five_m', six_m='$six_m', seven_m='$seven_m', eight_m='$eight_m', nine_m='$nine_m', ten_m='$ten_m', eleven_m='$eleven_m', twelve_m='$twelve_m' WHERE Nr = ".$inc);
	}
	echo 'ok';
?>