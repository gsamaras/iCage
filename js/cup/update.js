function update_teams_and_players() {
	// display the form
	$(".demo-wrapper").css("display", "block");
	// update teams
	$.post("php/cup_teams.php", function(return_json) {
		//alert(return_json);
        return_json = JSON.parse(return_json), return_json.calls.forEach(function(code) {
			eval(code);
        });
    });
	// update players
	$.post("php/cup_players.php", function(return_json) {
		//alert(return_json);
        return_json = JSON.parse(return_json), return_json.calls.forEach(function(code) {
			eval(code);
        });
		for(var i = 1; i <= 6; i++)
			clear_unused_players("team" + i + "fieldset");
    });
}

function update_teams_form(inc, team) {
	$("#form-teams option").each(function (i) {
		if(i == inc)
			this.value = team;
	});
	$("legend").each(function (i) {
		if(i == inc)
			$(this).text(team);
	});
}

function update_players_form(inc, player, team) {
	var id = get_id_of_team(team);
	 $("#" + id + " > div > label").each(function (i) {
		if(i == inc)
			$(this).text(player);
	});
}

function get_id_of_team(team) {
	if(team == "ui48975")
		return "team1fieldset";
	if(team == "Genia tou 98")
		return "team2fieldset";
	if(team == "Ouza&Zabon")
		return "team3fieldset";
	if(team == "Panklouviakos")
		return "team4fieldset";
	if(team == "RAKoun")
		return "team5fieldset";
	if(team == "Real Klarin")
		return "team6fieldset";
}

function clear_unused_players(id) {
	 $("#" + id + " > div > label").each(function () {
		$this = $(this);
		if(/^(Player[1-9]*)$/.test($this.text())) {
			$("#" + id + " > div  input[name='"+ $this.attr('for') + "']").remove();
			$this.remove();
		}
	});
}