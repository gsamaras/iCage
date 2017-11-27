function load(who) {
	var player_idx;
	if(who == "prev") {
		player_idx = GLOBAL_obj.current_player_no - 1;
	} else {
		player_idx = GLOBAL_obj.current_player_no + 1;
	}
	
	if(player_idx <= 0 || player_idx > GLOBAL_obj.players_no) {
		return;
	}
	
	var data = {};
	data["name"] = GLOBAL_obj.team;
	data["idx"] = player_idx;
	$.ajax({
		url: 'php/load.php',
		type: 'POST',
		contentType:'application/json',
		data: JSON.stringify(data),
		dataType:'html',
		success: function(return_json) {
			//On ajax success do this
			//alert(return_json);
			if(return_json == "not_found") {
				alert("not found, line 26 on js");
			}
			return_json = JSON.parse(return_json);
			return_json.calls.forEach(function(code){
				eval(code);
			});
			update_current_global(player_idx);		
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

function update_arrows(prev, next) {
	if(prev != "null") {
		$(".prev").css("display", "block").find('h3').text(prev);
	} else {
		$(".prev").css("display", "none");
	}
	
	if(next != "null") {
		$(".next").css("display", "block").find('h3').text(next);
	} else {
		$(".next").css("display", "none");
	}
}