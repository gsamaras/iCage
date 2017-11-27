$(window).load(function() {
	$("#suggest_btn").click(function(){
		get_matches();
	});
	$("#search_btn").click(function(){
		var slot = 0;
		if($("#radio-mini-1").is( ":checked" ))
			slot = 1;
		else if($("#radio-mini-2").is( ":checked" ))
			slot = 2;
		var match = $("#match" + slot + " li:first i").text();
		if(slot == 0 || match == "Match 1" || match == "Match 2") {
			swal("Oops...", "You didn't select a match!", "error");
			return;
		}
		//swal("End of the road (for now)", "The button had a no-entry sign!", "warning");

		var data = {};
		//17.30 Friday 25/12
		var match_tokens = match.split(' ');
		data["hour"] = match_tokens[0].split('.')[0];
		data["day"] = match_tokens[1];
		data["month"] = match_tokens[2].split('/')[1];
		$.ajax({
			url: 'php/suggest.php',
			type: 'POST',
			contentType:'application/json',
			data: JSON.stringify(data),
			dataType:'html',
			success: function(return_json) {
				//alert(return_json);
				return_json = JSON.parse(return_json);
				//console.log(return_json);
				normalize(return_json);
				show_players(return_json, slot);
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
	});
});

function normalize(player_chance) {
	// player_chance[0]['chance'] = max value (data are sorted)
    var ratio = player_chance[0]['chance'] / 100,
		l = player_chance.length,
		i;
	for ( i = 0; i < l; i++ ) {
		player_chance[i]['chance'] = Math.round( player_chance[i]['chance'] / ratio );
	}
}

function show_players(player_chance, slot) {
	/*$('#suggest_input').append("<ul id='suggested_players'></ul>");
	for (i = 0; i < player_chance.length; i++) {
		$("#suggested_players").append("<li>"+player_chance[i]['player'] + ":" + player_chance[i]['chance']+"</li>");
	}*/
	var players_in_match = $('#match' + slot + ' li:not(:first-child)');
	var content = "<table style=\"width: 100%;border: 1px solid black;border-collapse: collapse;\"><tr><th style=\"width: 100%;border: 1px solid black;border-collapse: collapse;padding: 5px;\">Player</th><th style=\"width: 100%;border: 1px solid black;border-collapse: collapse;padding: 5px;\">Chance to play</th><th style=\"width: 100%;border: 1px solid black;border-collapse: collapse;padding: 5px;\">Contact</th></tr>";
	for(i = 0; i < player_chance.length; i++) {
		if(!already_in_match(players_in_match, player_chance[i]['player']))
			content += '<tr><td style=\"width: 100%;border: 1px solid black;border-collapse: collapse;padding: 5px;\">' + player_chance[i]['player'] + '</td><td style=\"width: 100%;border: 1px solid black;border-collapse: collapse;padding: 5px;\">' + player_chance[i]['chance'] + '%</td><td style=\"width: 100%;border: 1px solid black;border-collapse: collapse;padding: 5px;\">' + player_chance[i]['contact'] + '</td></tr>';
	}
	content += "</table>";
	$('#suggest_input').append(content);
	$('#search_btn').css("display", "none");
}

function already_in_match(players_in_match, player) {
	var found = false;
	players_in_match.each(function () {
		//alert($(this).text());
		if($(this).text() == player)
			found = true;
	});
	return found;
}

function get_matches() {
	get_match(1);
	get_match(2);
}

function get_match(slot) {
	var match = $("#match" + slot + " li:first i").text();
	if(match == "Match " + slot) {
		$("#radio-mini-" + slot + "").css("display", "none");
		$("label[for='radio-mini-" + slot + "']").css("display", "none");
	} else {
		$("label[for='radio-mini-" + slot + "']").text(match);
	}
}
