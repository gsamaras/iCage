function placeDiv(id, x_pos, y_pos) {
  var d = document.getElementById(id);
  d.style.position = "absolute";
  d.style.left = x_pos+'px';
  d.style.top = y_pos+'px';
}

function get_number(txt) {
	if(typeof txt != 'undefined') 
		return txt.match(/\d/g).join("");
	return 0;
}

function get_offset(list, stat) {
	return (100 - get_number(list.find('li:contains(' + stat + ')').text()));
}

$(window).load(function() {
	var txt_spd_x, txt_pow_x, txt_att_x, txt_tec_x, txt_str_x, txt_def_x;
	var txt_spd_y, txt_pow_y, txt_att_y, txt_tec_y, txt_str_y, txt_def_y;
	if($(window).width() < 500) {
  		// if on small screen, position the text
  		// of stats differently
  		txt_spd_x = -30;
		txt_spd_y = -15;
		
		txt_pow_x = -34;
		txt_pow_y = 110;
		
		txt_att_x = 85;
		txt_att_y = -77;
		
		txt_tec_x = 199;
		txt_tec_y = -15;
		
		txt_str_x = 201;
		txt_str_y = 110;
		
		txt_def_x = 85;
		txt_def_y = 175;
	} else {
		txt_spd_x = -35;
		txt_spd_y = -15;
		
		txt_pow_x = -40;
		txt_pow_y = 100;
		
		txt_att_x = 81;
		txt_att_y = -83;
		
		txt_tec_x = 201;
		txt_tec_y = -15;
		
		txt_str_x = 202;
		txt_str_y = 100;
		
		txt_def_x = 82;
		txt_def_y = 173;
	}
	
	// position the text at cornerns
 	placeDiv("txt_spd", txt_spd_x, txt_spd_y);
	placeDiv("txt_pow", txt_pow_x, txt_pow_y);	
	placeDiv("txt_att", txt_att_x, txt_att_y);
	placeDiv("txt_tec", txt_tec_x, txt_tec_y);	
	placeDiv("txt_str", txt_str_x, txt_str_y);	
	placeDiv("txt_def", txt_def_x, txt_def_y);
		
});

function load_hexagon() {
	var list_0 = $('#stats_0');
	var list_1 = $('#stats_1');

	// position the dots(cornerns)
 	var spd_x = 0 + get_offset(list_0, "Speed");
 	var spd_y = 0;
 	placeDiv("dot_spd", spd_x, spd_y);

	var pow_x = 0 + get_offset(list_1, "Shot");
 	var pow_y = 107;
	placeDiv("dot_pow", pow_x, pow_y);

 	var att_x = 93;
 	var att_y = -53 + get_offset(list_0, "Attack");	
	placeDiv("dot_att", att_x, att_y);

	var tec_x = 186 - get_offset(list_1, "Technique");
 	var tec_y = 0;
	placeDiv("dot_tec", tec_x, tec_y);

	var str_x = 186 - get_offset(list_0, "Strength");
 	var str_y = 107;
	placeDiv("dot_str", str_x, str_y);

	var def_x = 93;
 	var def_y = 160 - get_offset(list_0, "Defence");
	placeDiv("dot_def", def_x, def_y);

	// add 1 to connect the lines perfectly
	++att_x;
	++att_y;
	++spd_x;
	++spd_y;
	++tec_x;
	++tec_y;
	++str_x;
	++str_y;
	++def_x;
	++def_y;
	++pow_x;
	++pow_y;

	// draw lines to connect the cornerns
	$("#spd_att").attr("points", spd_x + "," + spd_y + " " + att_x + "," + att_y);
	$("#att_tec").attr("points", att_x + "," + att_y + " " + tec_x + "," + tec_y);
	$("#tec_str").attr("points", tec_x + "," + tec_y + " " + str_x + "," + str_y);
	$("#def_str").attr("points", def_x + "," + def_y + " " + str_x + "," + str_y);
	$("#def_pow").attr("points", def_x + "," + def_y + " " + pow_x + "," + pow_y);
	$("#spd_pow").attr("points", spd_x + "," + spd_y + " " + pow_x + "," + pow_y);
}

// call on load of first player
function show_hexagon_stat() {
	$('*[id^="dot_"]').css("display", "block");
}

function find_any_element(className) {
	var found = false;
	$('*').each(function() {
    	if ($(this).hasClass(className)) {
        	var class_name = $(this).attr('class');
        	alert("There is an element with this class: " + class_name);
        	found = true;
    	}
	});
	if(!found) {
		alert("No element with className '" + className + "' found.");
	}
}
