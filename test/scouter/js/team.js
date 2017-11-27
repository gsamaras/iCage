$(window).load(function() {
	$("#team_btn").click(function() {
		$("#players_list").css("display", "block");
		$(".hide_background").css("display", "block");
		
		$.ajax({
			url: 'php/all_players.php',
			type: 'POST',
			contentType:'application/json',
			dataType:'html',
			success: function(return_json) {
				//On ajax success do this
				//alert(return_json);
				hide_form();
				if(return_json == "not_found") {
					alertify.error('No players found!');
					return;
				}
				return_json = JSON.parse(return_json);
				return_json.calls.forEach(function(code){
					eval(code);
				});
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

function update_player_list(name, i) {
	//alert(name);
	$("#players_list .wrap-list .list").append('<li><input type="checkbox" id="check-' + i + '"><label for="check-' + i + '">' + name + '</label></li>');
}