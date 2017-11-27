$(window).load(function() {
	$(".ok-button").click(function() {
		$("#players_list").css("display", "none");
		$(".hide_background").css("display", "none");
		
		var data = {};
		var $this, count = 0;
		$('#players_list .wrap-list .list li').each(function(){
			$this = $(this);
			if($this.children(":first")[0].checked == true) {
				count = count + 1;
				data["name" + count] = $this.children(":last").text();
			}
		});
		
		if(count <= 0) {
			alertify.error("No players selected, save failed!");
			return false;
		}
		if(count > 20) { //max players a team can hold
			alertify.error("A team can hold up to 20 players, save failed!!");
			return false;
		}
		for(var i = count + 1; i <= 20; i++) {
			data["name" + i] = "null";
		}
		
		data['count'] = count;
		data['pass'] = "void";
		var pass = $('#player_list_pass').val();
		if(pass != "")
			data['pass'] = pass;
			
		var team = $('#player_list_name').val();
		if(team == "") {
			alertify.error("You must give a name for your team, cancelled!");
			return false;
		}
		data['team'] = team;

		$.ajax({
			url: 'php/save_team.php',
			type: 'POST',
			contentType:'application/json',
			data: JSON.stringify(data),
			dataType:'html',
			success: function(return_json) {
				//On ajax success do this
				//alert(return_json);
				if(return_json == "found") {
					alertify.error('Team already exists! Save failed.');
					return;
				} else if(return_json == "ok") {
					alertify.success('Saved!');
				} else {
					alertify.warning('I am not sure if the save was successful!');
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
	});
});

function update_player_list(name, i) {
	//alert(name);
	$("#players_list .wrap-list .list").append('<li><input type="checkbox" id="check-' + i + '"><label for="check-' + i + '">' + name + '</label></li>');
}