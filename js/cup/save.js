function save_teams_and_players() {
	var data = {};

	data["win"] = $(".destination-list").val();
	data["loss"] = $(".destination-list:not(:first)").val();
	data["wscore"] = $("#wscore").val();
	data["lscore"] = $("#lscore").val();
	
	if(data["win"] == "" || data["loss"] == "" || data["wscore"] == "" || data["lscore"] == "") {
		alert("No team/scores selected!");
		return;
	}
	
	if(parseInt(data["wscore"]) < parseInt(data["lscore"])) {
		alert("Win score < Loss score");
		return;
	}
	
	data['password'] = $("#password").val();
	
	// save goals of players of winning team
	var id = get_id_of_team(data["win"]);
	var players = {};
	var players_count = 0;
	var goals_count = 0;
	 $("#" + id + " > div > label").each(function () {
		players["player" + players_count] = $(this).text();
		players["goals" + players_count] = $("#" + id + " > div  input[name='"+ $(this).attr('for') + "']").val();
		goals_count += parseInt(players["goals" + players_count++]);
	});
	if(goals_count != parseInt(data['wscore'])) {
		alert("Goals of team and players do NOT match, @win!");
		return;
	}
	goals_count = 0;
	id = get_id_of_team(data["loss"]);
	$("#" + id + " > div > label").each(function () {
		players["player" + players_count] = $(this).text();
		players["goals" + players_count] = $("#" + id + " > div  input[name='"+ $(this).attr('for') + "']").val();
		goals_count += parseInt(players["goals" + players_count++]);
	});
	if(goals_count != parseInt(data['lscore'])) {
		alert("Goals of team and players do NOT match, @loss!");
		return;
	}
	players['players_count'] = players_count;
	//console.log(players);
	
	players['password'] = data['password'];
	
	$.ajax({
		url: 'php/cup_save_team.php',
		type: 'POST',
		contentType:'application/json',
		data: JSON.stringify(data),
		dataType:'html',
		success: function(return_msg) {
			//On ajax success do this
			//alert(return_msg);
			if(return_msg == "ok") {
				alert("Saved!");
			} else {
				alert("Wrong password!");
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			//On error do this
			$.mobile.loading('hide');
			if (xhr.status == 200) {
				alert("status = " + 200);
				alert(ajaxOptions);
			} else {
				alert("status = " + xhr.status);
				alert(thrownError);
			}
		}
	});	
	
	$.ajax({
		url: 'php/cup_save_player.php',
		type: 'POST',
		contentType:'application/json',
		data: JSON.stringify(players),
		dataType:'html',
		success: function(return_msg) {
			//On ajax success do this
			//alert(return_msg);
			if(return_msg == "ok") {
				alert("Top scorers: Saved!");
			} else {
				alert("Top scorers: Wrong password!");
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			//On error do this
			$.mobile.loading('hide');
			if (xhr.status == 200) {
				alert("status = " + 200);
				alert(ajaxOptions);
			} else {
				alert("status = " + xhr.status);
				alert(thrownError);
			}
		}
	});
}