<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>iCage-Cup</title>
		<meta name="description" content="Cage football, cage apps, football apps, cage scheduler, play football" />
		<meta name="keywords" content="cage, football, app, scheduler, scouter, league, cup, scouter, official" />
		<meta name="George Samaras" content="Cage apps" />
		<link rel="shortcut icon" href="css/cage/images/i.ico">
		<link rel="stylesheet" href="css/cup/min/table.css">
		<link rel="stylesheet" href="css/cup/min/background.css">
		<link rel="stylesheet" href="css/cup/min/loading.css">
		<link rel="stylesheet" href="css/cup/min/icon.css">
		<link rel="stylesheet" media="(min-width: 650px)" href="css/cup/min/hover.css">
		<link rel="stylesheet" href="css/cup/min/button.css">
		<link rel="stylesheet" media="(max-width: 650px)" href="css/cup/min/button_mobile.css">
		<link rel="stylesheet" href="css/cup/min/cool_table.css">
		<link rel="stylesheet" href="css/cup/min/form.css">
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/cup/min/main.js" type="text/javascript"></script>
		<script src="js/cup/min/update.js" media="(min-width: 650px)"></script>
		<script src="js/cup/min/save.js" media="(min-width: 650px)"></script>	
	</head>
	<body>
		<!-- for loading -->
		<div class="modal"></div>
		<!-- form -->
		<div class="demo-wrapper">
			<div class="destination-form">
				<h3 class="destination-title">Select Your Destination</h3>
				<div class="destination-city">

					<input class="destination-list" type="text" placeholder="Win:" list="form-teams">
					<input class="destination-list" type="text" placeholder="Loss:" list="form-teams">
					<datalist id="form-teams">
						<option value="Team1">
						<option value="Team2">
						<option value="Team3">
						<option value="Team4">
						<option value="Team5">
						<option value="Team6">						
					</datalist>
					<input id="wscore" type="number" placeholder="Win Score">
					<input id="lscore" type="number" placeholder="Loss Score">

					<fieldset id="team1fieldset">
						<legend>Team1</legend>
						<div class="input-container">
							<label for="player1">Player1</label>
							<input type="number" name="player1" value="0">
						</div>
						<div class="input-container">
							<label for="player2">Player2</label>
							<input type="number" name="player2" value="0">
						</div>
						<div class="input-container">
							<label for="player3">Player3</label>
							<input type="number" name="player3" value="0">
						</div>
						<div class="input-container">
							<label for="player4">Player4</label>
							<input type="number" name="player4" value="0">
						</div>
						<div class="input-container">
							<label for="player5">Player5</label>
							<input type="number" name="player5" value="0">
						</div>
						<div class="input-container">
							<label for="player6">Player6</label>
							<input type="number" name="player6" value="0">
						</div>
						<div class="input-container">
							<label for="player7">Player7</label>
							<input type="number" name="player7" value="0">
						</div>
						<div class="input-container">
							<label for="player8">Player8</label>
							<input type="number" name="player8" value="0">
						</div>
						<div class="input-container">
							<label for="player9">Player9</label>
							<input type="number" name="player9" value="0">
						</div>
					</fieldset>
					<fieldset id="team2fieldset">
						<legend>Team2</legend>
						<div class="input-container">
							<label for="player1">Player1</label>
							<input type="number" name="player1" value="0">
						</div>
						<div class="input-container">
							<label for="player2">Player2</label>
							<input type="number" name="player2" value="0">
						</div>
						<div class="input-container">
							<label for="player3">Player3</label>
							<input type="number" name="player3" value="0">
						</div>
						<div class="input-container">
							<label for="player4">Player4</label>
							<input type="number" name="player4" value="0">
						</div>
						<div class="input-container">
							<label for="player5">Player5</label>
							<input type="number" name="player5" value="0">
						</div>
						<div class="input-container">
							<label for="player6">Player6</label>
							<input type="number" name="player6" value="0">
						</div>
						<div class="input-container">
							<label for="player7">Player7</label>
							<input type="number" name="player7" value="0">
						</div>
						<div class="input-container">
							<label for="player8">Player8</label>
							<input type="number" name="player8" value="0">
						</div>
						<div class="input-container">
							<label for="player9">Player9</label>
							<input type="number" name="player9" value="0">
						</div>
					</fieldset>
					<fieldset id="team3fieldset">
						<legend>Team3</legend>
						<div class="input-container">
							<label for="player1">Player1</label>
							<input type="number" name="player1" value="0">
						</div>
						<div class="input-container">
							<label for="player2">Player2</label>
							<input type="number" name="player2" value="0">
						</div>
						<div class="input-container">
							<label for="player3">Player3</label>
							<input type="number" name="player3" value="0">
						</div>
						<div class="input-container">
							<label for="player4">Player4</label>
							<input type="number" name="player4" value="0">
						</div>
						<div class="input-container">
							<label for="player5">Player5</label>
							<input type="number" name="player5" value="0">
						</div>
						<div class="input-container">
							<label for="player6">Player6</label>
							<input type="number" name="player6" value="0">
						</div>
						<div class="input-container">
							<label for="player7">Player7</label>
							<input type="number" name="player7" value="0">
						</div>
						<div class="input-container">
							<label for="player8">Player8</label>
							<input type="number" name="player8" value="0">
						</div>
						<div class="input-container">
							<label for="player9">Player9</label>
							<input type="number" name="player9" value="0">
						</div>
					</fieldset>
					<fieldset id="team4fieldset">
						<legend>Team4</legend>
						<div class="input-container">
							<label for="player1">Player1</label>
							<input type="number" name="player1" value="0">
						</div>
						<div class="input-container">
							<label for="player2">Player2</label>
							<input type="number" name="player2" value="0">
						</div>
						<div class="input-container">
							<label for="player3">Player3</label>
							<input type="number" name="player3" value="0">
						</div>
						<div class="input-container">
							<label for="player4">Player4</label>
							<input type="number" name="player4" value="0">
						</div>
						<div class="input-container">
							<label for="player5">Player5</label>
							<input type="number" name="player5" value="0">
						</div>
						<div class="input-container">
							<label for="player6">Player6</label>
							<input type="number" name="player6" value="0">
						</div>
						<div class="input-container">
							<label for="player7">Player7</label>
							<input type="number" name="player7" value="0">
						</div>
						<div class="input-container">
							<label for="player8">Player8</label>
							<input type="number" name="player8" value="0">
						</div>
						<div class="input-container">
							<label for="player9">Player9</label>
							<input type="number" name="player9" value="0">
						</div>
					</fieldset>
					<fieldset id="team5fieldset">
						<legend>Team5</legend>
						<div class="input-container">
							<label for="player1">Player1</label>
							<input type="number" name="player1" value="0">
						</div>
						<div class="input-container">
							<label for="player2">Player2</label>
							<input type="number" name="player2" value="0">
						</div>
						<div class="input-container">
							<label for="player3">Player3</label>
							<input type="number" name="player3" value="0">
						</div>
						<div class="input-container">
							<label for="player4">Player4</label>
							<input type="number" name="player4" value="0">
						</div>
						<div class="input-container">
							<label for="player5">Player5</label>
							<input type="number" name="player5" value="0">
						</div>
						<div class="input-container">
							<label for="player6">Player6</label>
							<input type="number" name="player6" value="0">
						</div>
						<div class="input-container">
							<label for="player7">Player7</label>
							<input type="number" name="player7" value="0">
						</div>
						<div class="input-container">
							<label for="player8">Player8</label>
							<input type="number" name="player8" value="0">
						</div>
						<div class="input-container">
							<label for="player9">Player9</label>
							<input type="number" name="player9" value="0">
						</div>
					</fieldset>
					<fieldset id="team6fieldset">
						<legend>Team6</legend>
						<div class="input-container">
							<label for="player1">Player1</label>
							<input type="number" name="player1" value="0">
						</div>
						<div class="input-container">
							<label for="player2">Player2</label>
							<input type="number" name="player2" value="0">
						</div>
						<div class="input-container">
							<label for="player3">Player3</label>
							<input type="number" name="player3" value="0">
						</div>
						<div class="input-container">
							<label for="player4">Player4</label>
							<input type="number" name="player4" value="0">
						</div>
						<div class="input-container">
							<label for="player5">Player5</label>
							<input type="number" name="player5" value="0">
						</div>
						<div class="input-container">
							<label for="player6">Player6</label>
							<input type="number" name="player6" value="0">
						</div>
						<div class="input-container">
							<label for="player7">Player7</label>
							<input type="number" name="player7" value="0">
						</div>
						<div class="input-container">
							<label for="player8">Player8</label>
							<input type="number" name="player8" value="0">
						</div>
						<div class="input-container">
							<label for="player9">Player9</label>
							<input type="number" name="player9" value="0">
						</div>
					</fieldset>
					<input id="password" type="password" placeholder="Password">
					<button id="submit_button" type="submit">Submit</button>
				</div>
			</div>
		</div>
		
		<!-- teams -->
		<div class="wrap">
			<div class="header">
				<span id="caption1" class="dashed_header">Cage Cup Standings</span>
			</div>
			<div id="table1" class="table wrap-list">
				<div class="row header-row">
					<span class="cell primary icon">Team</span>
					<span class="cell header-cell" title="Games Played">GP</span>
					<span class="cell header-cell" title="Wins">W</span>
					<span class="cell header-cell" title="Draws">D</span>
					<span class="cell header-cell" title="Losses">L</span>
					<span class="cell header-cell" title="Goals For">GF</span>
					<span class="cell header-cell" title="Goals Against">GA</span>
					<span class="cell header-cell" title="Goals Difference">GD</span>
					<span class="cell header-cell points" title="Points">PTS</span>
				</div>
				<div class="row hover-row">
					<input type="radio" name="expand">
					<span class="cell primary icon" data-label="Team">Team1</span>
					<span class="cell" data-label="GP">0</span>
					<span class="cell" data-label="W">0</span>
					<span class="cell" data-label="D">0</span>
					<span class="cell" data-label="L">0</span>
					<span class="cell" data-label="GF">0</span>
					<span class="cell" data-label="GA">0</span>
					<span class="cell" data-label="GD">0</span>
					<span class="cell points" data-label="PTS">0</span>
				</div>
				<div class="row hover-row">
					<input type="radio" name="expand">
					<span class="cell primary icon" data-label="Team">Team2</span>
					<span class="cell" data-label="GP">0</span>
					<span class="cell" data-label="W">0</span>
					<span class="cell" data-label="D">0</span>
					<span class="cell" data-label="L">0</span>
					<span class="cell" data-label="GF">0</span>
					<span class="cell" data-label="GA">0</span>
					<span class="cell" data-label="GD">0</span>
					<span class="cell points" data-label="PTS">0</span>
				</div>
				<div class="row hover-row">
					<input type="radio" name="expand">
					<span class="cell primary icon" data-label="Team">Team3</span>
					<span class="cell" data-label="GP">0</span>
					<span class="cell" data-label="W">0</span>
					<span class="cell" data-label="D">0</span>
					<span class="cell" data-label="L">0</span>
					<span class="cell" data-label="GF">0</span>
					<span class="cell" data-label="GA">0</span>
					<span class="cell" data-label="GD">0</span>
					<span class="cell points" data-label="PTS">0</span>
				</div>
				<div class="row hover-row">
					<input type="radio" name="expand">
					<span class="cell primary icon" data-label="Team">Team4</span>
					<span class="cell" data-label="GP">0</span>
					<span class="cell" data-label="W">0</span>
					<span class="cell" data-label="D">0</span>
					<span class="cell" data-label="L">0</span>
					<span class="cell" data-label="GF">0</span>
					<span class="cell" data-label="GA">0</span>
					<span class="cell" data-label="GD">0</span>
					<span class="cell points" data-label="PTS">0</span>
				</div>
				<div class="row hover-row">
					<input type="radio" name="expand">
					<span class="cell primary icon" data-label="Team">Team5</span>
					<span class="cell" data-label="GP">0</span>
					<span class="cell" data-label="W">0</span>
					<span class="cell" data-label="D">0</span>
					<span class="cell" data-label="L">0</span>
					<span class="cell" data-label="GF">0</span>
					<span class="cell" data-label="GA">0</span>
					<span class="cell" data-label="GD">0</span>
					<span class="cell points" data-label="PTS">0</span>
				</div>
				<div class="row row-last hover-row">
					<input type="radio" name="expand">
					<span class="cell cell-last primary icon icon-last" data-label="Team">Team6</span>
					<span class="cell cell-last" data-label="GP">0</span>
					<span class="cell cell-last" data-label="W">0</span>
					<span class="cell cell-last" data-label="D">0</span>
					<span class="cell cell-last" data-label="L">0</span>
					<span class="cell cell-last" data-label="GF">0</span>
					<span class="cell cell-last" data-label="GA">0</span>
					<span class="cell cell-last" data-label="GD">0</span>
					<span class="cell cell-last points" data-label="PTS">0</span>
				</div>
			</div>
		</div>
		<!-- players -->
		<div id="wrap2" class="wrap">
			<div id="header2" class="header">
				<span id="caption2" class="dashed_header">Top Scorers</span>
			</div>
			<div id="table2" class="table wrap-list">
				<div class="header-row row">
					<span class="cell primary icon">Player</span>
					<span class="cell header-cell" title="Goals scored">Goals</span>
				</div>
				<div class="row hover-row">
					<input type="radio" name="expand">
					<span class="cell primary icon" data-label="Player">Player1</span>
					<span class="cell" data-label="Goals">0</span>
				</div>
				<div class="row hover-row">
					<input type="radio" name="expand">
					<span class="cell primary icon" data-label="Player">Player2</span>
					<span class="cell" data-label="Goals">0</span>
				</div>
				<div class="row hover-row">
					<input type="radio" name="expand">
					<span class="cell primary icon" data-label="Player">Player3</span>
					<span class="cell" data-label="Goals">0</span>
				</div>
				<div class="row hover-row">
					<input type="radio" name="expand">
					<span class="cell primary icon" data-label="Player">Player4</span>
					<span class="cell" data-label="Goals">0</span>
				</div>
				<div class="row row-last hover-row">
					<input type="radio" name="expand">
					<span class="cell cell-last primary icon icon-last" data-label="Player">Player5</span>
					<span class="cell cell-last" data-label="Goals">0</span>
				</div>
			</div>
		</div>
		
		<!-- update button -->
		<a class="btn">Update</a>
	</body>
	<script>
        $(document).ready(function() {
            $.post("php/cup_main.php", {
                //elements: 1
            }, function(return_json) {
				//alert(return_json);
                return_json = JSON.parse(return_json), return_json.calls.forEach(function(code) {
                    eval(code)
                })
            })
        }), $body = $("body"), $(document).on({
            ajaxStart: function() {
                $body.addClass("loading")
            },
            ajaxStop: function() {
                $body.removeClass("loading")
            }
        });
		var isMobile = window.matchMedia("only screen and (max-width: 760px)");
		if (!isMobile.matches) {
			$("#caption1").width($("#table1 .header-row").width());
			$(".header").width($("#table1 .header-row").width());
			$(".wrap").width($("#table1 .header-row").width());
			$("#caption2").width($("#table2 .header-row").width());
			$("#table2 .cell").width($("#header2").width());
		}
		$(".btn").on('click', function () { update_teams_and_players(); });
		$("#submit_button").on('click', function () { save_teams_and_players(); });
		$(".destination-form").keyup(function(event){
			if(event.keyCode == 13){
				$("#submit_button").click();
			}
		});
	</script>
</html>
