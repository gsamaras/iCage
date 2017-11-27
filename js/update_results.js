$(document).ready(function() {
	// When 'Update' will be clicked, this,
	// will fill with the player's name the
	// labels and hide those who are empty (because a match can be empty).
	 $("#updateRes").click(function() {
		var match1_empty = true;
		var i1 = 0;
		var listItems = $("#match1 li a span");
		listItems.each(function(idx, li) {
			if(idx < 10) {
				$('#label' + idx).text($(li).text());
				match1_empty = false;
				++i1;
			}
		});
		if(i1 < 9)
			match1_empty = true;
		
		var match2_empty = true;
		var i2 = 0;
		listItems = $("#match2 li a span");
		listItems.each(function(idx, li) {
			if(idx < 10) {
				$('#label1' + idx).text($(li).text());
				match2_empty = false;
				++i2;
			}
		});
		if(i2 < 9)
			match2_empty = true;
		
		if(match1_empty == true) {
			for(var i = 0; i < 10; ++i) {
				$('#label' + i).css("display", "none");
				$('#pl' + i).css("display", "none");
			}
		} else if(match2_empty == true) {
			for(var i = 10; i < 20; ++i) {
				$('#label' + i).css("display", "none");
				$('#pl' + i).css("display", "none");
			}
			$('#label19').removeClass();
			$('#label9').addClass('ui-last-child');
		}
    }); 

    $("#submitRes").click(function() {
        //alert($("#form_slot").val());
		//console.log($("input[name='pl0']:checked").val());
		var data = {};
		data["pass"] = $("#form_pass").val();
		data["score"] = $("#form_score").val();
		var start = 0, end = 10;
		if($("#form_slot").val() == 2) {
			start = 10;
			end = 20
		}
		var j = 0, z = 0;
		for(var i = start; i < end; ++i) {
			if($("input[name='pl" + i + "']:checked").val() == "on") {
				data["win" + j++] = $('#label' + i).text();
			} else {
				data["lost" + z++] = $('#label' + i).text();
			}
		}
		//console.log(data);
		$.ajax({
			url: 'php/update_results.php',
			type: 'POST',
			contentType:'application/json',
			data: JSON.stringify(data),
			dataType:'html',
			success: function(return_msg) {
				//On ajax success do this
				//console.log(return_msg);
				if(return_msg == "ok") {
					alertify.success("Saved!");
				} else {
					swal({
						title: "Wrong password!",
						text: return_msg,
						type: "error",
						showConfirmButton: true
					});
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