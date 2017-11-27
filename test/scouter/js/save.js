$(document).ready(function(){
	$('#save_btn').click(function(e) {
		var data = {};
		
		// store name of uploaded image
		var file_data = $('#input_pic').prop('files')[0];
		if(typeof file_data === 'undefined') {
			if($("#save_btn").text() == "Save") {// if the user Updates m2m suggestions,
			// there is no need for a pic upload
				alertify.error("No image uploaded, save aborted!");
				return false;
			}
		} else {
			data['pic'] = (file_data).name
		}
	
		// validate first row
		var info_list_ok = validate_info_list(data);
		var stats0_list_ok = validate_stats_0(data);
		var stats1_list_ok = validate_stats_1(data);
		
		// validate second row
		var pos_ok = validate_pos(data);
		var special_ok = validate_special(data);
		var m2m_ok = validate_m2m(data);
		var todo_list_ok = validate_todo_list(data);
		
		//alert(info_list_ok +" " + stats0_list_ok + " " + stats1_list_ok);
		//alert(pos_ok +" " + special_ok + " " + m2m_ok + " " + todo_list_ok);
		//console.log(data);
		
		if(info_list_ok == false) {
			alertify.error("Invalid personal info, cancelled!");
			return false;
		}
		if(stats0_list_ok == false) {
			alertify.error("Invalid stats at 1st column, cancelled!");
			return false;
		}
		if(stats1_list_ok == false) {
			alertify.error("Invalid stats at 2nd column, cancelled!");
			return false;
		}
		if(pos_ok == false) {
			alertify.error("Invalid pos, cancelled! Options: GK, LB, CB, RB, DMF, CMF, AMF, WF and CF");
			return false;
		}
		if(special_ok == false) {
			alertify.error("Invalid special ability, cancelled!");
			return false;
		}
		if(m2m_ok == false) {
			alertify.error("Invalid m2m list, cancelled!");
			return false;
		}
		if(todo_list_ok == false) {
			alertify.error("Invalid todo list, cancelled!");
			return false;
		}
		
		$.ajax({
			url: 'php/save.php',
			type: 'POST',
			contentType:'application/json',
			data: JSON.stringify(data),
			dataType:'html',
			success: function(return_msg) {
				//On ajax success do this
				//alert(return_msg);
				if(return_msg == "found") {
					alertify.warning('Player already exists! Only m2m list updated.');
					return;
				} else {
					save_img();
					alertify.success('Saved!');
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

function validate_todo_list(data) {
	var txt, ok = true;
	for(var i = 1; i <= 4; ++i) {
		txt = $('label[for=check-' + i + ']').text();
		if (!(typeof txt === 'string' || txt instanceof String))
			ok = false;
		data['todo' + (i - 1)] = ((txt != ("Task" + i)) ? txt : "void");
	}
	return ok;
}

function validate_m2m(data) {
	var ok = true;
	$('.rounded-list li a').each(function(i) {
		var txt = $(this).text();
		if (!(typeof txt === 'string' || txt instanceof String))
			ok = false;
		data['m2m' + i] = txt;
	});
	return ok;
}

function validate_special(data) {
	var ok = true;
	var txt = $("#spec").text();
	if (!(typeof txt === 'string' || txt instanceof String))
		ok = false;
	data['special'] = txt;
	return ok;
}

function validate_pos(data) {
	var ok = true;
	var pos= $('*[class^="inset-text-effect-"]').text();
	if(pos != "GK" && pos != "LB" && pos != "CB" && pos != "RB"
		&& pos != "DMF" && pos != "CMF" && pos != "AMF"
		&& pos != "WF" && pos != "CF") {
				ok = false;
	}
	data['pos'] = pos;
	return ok;
}

function validate_stats_0(data) {
	var ok = true;
	$('#stats_0 li div').each(function(i) {
		var txt = $(this).text();
		if(txt < 20 || txt > 100) {
			ok = false;
			return false;
		}
		if(i == 0)
			data['att'] = txt;
		else if(i == 1)
			data['def'] = txt;
		else if(i == 2)
			data['strength'] = txt;
		else if(i == 3)
			data['stamina'] = txt;
		else if(i == 4)
			data['sp'] = txt;
		else if(i == 5)
			data['head'] = txt;
		else
			data['drib'] = txt;
	});
	return ok;
}

function validate_stats_1(data) {
	var ok = true;
	$('#stats_1 li div').each(function(i) {
		var txt = $(this).text();
		if(txt < 20 || txt > 100) {
			ok = false;
			return false;
		}
		if(i == 0)
			data['agility'] = txt;
		else if(i == 1)
			data['shot'] = txt;
		else if(i == 2)
			data['keeper'] = txt;
		else if(i == 3)
			data['teamwork'] = txt;
		else if(i == 4)
			data['tech'] = txt;
		else if(i == 5)
			data['menta'] = txt;
		else
			data['freekick'] = txt;
	});
	return ok;
}

function validate_info_list(data) {
	var ok = true;
	$('#info li div').each(function(i) { 
		var txt = $(this).text();
		if(i == 0) {
			if (!(typeof txt === 'string' || txt instanceof String))
				ok = false;
			data['name'] = txt;
		} else if(i == 1) {
			if(testDate(txt) == false)
				ok = false;
			data['birth'] = txt;
		} else if(i == 2) {
			if (!(typeof txt === 'string' || txt instanceof String))
				ok = false;
			data['height'] = txt;
		} else if(i == 3) {
			if (!(typeof txt === 'string' || txt instanceof String))
				ok = false;
			data['team'] = txt;
		} else if(i == 4) {
			if(testDate(txt) == false)
				ok = false;
			data['joined'] = txt;
		} else if(i == 5) {
			if(txt < 0)
				ok = false;
			data['number'] = txt;
		} else {
			if(txt != "R" && txt != "L")
				ok = false;
			else
				data['foot'] = txt;
		}
	});
	return ok;
}

function save_img() {
	var file_data = $('#input_pic').prop('files')[0];
	var form_data = new FormData();                  
	form_data.append('file', file_data);
	//alert(form_data);                             
	$.ajax({
		url: 'php/upload.php', // point to server-side PHP script 
		dataType: 'text',  // what to expect back from the PHP script, if anything
		cache: false,
		contentType: false,
		processData: false,
		data: form_data,                         
		type: 'post',
		success: function(php_script_response){
			if(php_script_response != "ok") {
				alertify.error("Image could not be uploaded!");
			}
		}
	});
}

function testDate(str){
    var t = str.match(/^(\d{2})\/(\d{2})\/(\d{4})$/);
    if(t===null) return false;
    var d=parseInt(t[1]), m=parseInt(t[2],10), y=parseInt(t[3],10);
    //below should be more acurate algorithm
    if(m>=1 && m<=12 && d>=1 && d<=31){
            return true;   
    }
    return false;
}

function isInt(value) {
  return !isNaN(value) && (function(x) { return (x | 0) === x; })(parseFloat(value))
}