$(window).load(function() {
	document.getElementById('load_btn').addEventListener('click', hideshow, false);
});

function hideshow() {
    document.getElementById('form-main').style.display = 'block'; 
    this.style.display = 'none'
	$("#name").focus();
}

function hide_form() {
	document.getElementById('form-main').style.display = 'none'; 
}

function first_load(){
	var data = {};
	data["name"] = document.getElementById("name").value;
	if(data["name"] == "*")
		GLOBAL_obj.team = "null";
	else
		GLOBAL_obj.team = data["name"];
	data["pass"] = document.getElementById("password").value;
	$.ajax({
		url: 'php/first_load.php',
		type: 'POST',
		contentType:'application/json',
		data: JSON.stringify(data),
		dataType:'html',
		success: function(return_json) {
			//On ajax success do this
			//alert(return_json);
			hide_form();
			if(return_json == "not_found") {
				alertify.error('Not found! Type * for all players.');
				document.getElementById('load_btn').style.display = 'block';
				return;
			} else if(return_json == "wrong_pass") {
				alertify.error('Wrong password!');
				document.getElementById('load_btn').style.display = 'block';
				return;
			}
			return_json = JSON.parse(return_json);
			return_json.calls.forEach(function(code){
				eval(code);
			});
			show_hexagon_stat();
			update_current_global(1);
			$(".profile_pic").css("cursor", "context-menu");
			$("#save_btn").text("Update");
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