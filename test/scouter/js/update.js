function update_global(size) {
	GLOBAL_obj.players_no = size;
}

function update_current_global(i) {
	GLOBAL_obj.current_player_no = i;
}

function update_page(pic, name, birth, height, team, joined, number, foot,
	att, def, str, stam, sp, head, drib,
	agility, shot, keeper, teamwork, tech, menta, freekick,
	pos, special, m2m0, m2m1, todo0, todo1, todo2, todo3
) {

	// profile picture
	$(".profile_pic").attr("src", "img/players/" + pic);

	// personal info
	var info_list = $("#info li");
	update_info(name, info_list, 0);
	update_info(birth, info_list, 1);
	update_info(height, info_list, 2);
	update_info(team, info_list, 3);
	update_info(joined, info_list, 4);
	update_info(number, info_list, 5);
	update_info(foot, info_list, 6);
	
	// first stats
	var stats_0_list = $("#stats_0 li div");
	update_stat(att, stats_0_list, 0);
	update_stat(def, stats_0_list, 1);
	update_stat(str, stats_0_list, 2);
	update_stat(stam, stats_0_list, 3);
	update_stat(sp, stats_0_list, 4);
	update_stat(head, stats_0_list, 5);
	update_stat(drib, stats_0_list, 6);
	
	// second stats
	var stats_1_list = $("#stats_1 li div");
	update_stat(agility, stats_1_list, 0);
	update_stat(shot, stats_1_list, 1);
	update_stat(keeper, stats_1_list, 2);
	update_stat(teamwork, stats_1_list, 3);
	update_stat(tech, stats_1_list, 4);
	update_stat(menta, stats_1_list, 5);
	update_stat(freekick, stats_1_list, 6);	
	
	// position, special ability and man-to-man suggestions
	update_pos(pos);
	$("#spec").text(special);
	update_m2m(m2m0, m2m1);
	
	// todo list
	update_todo_task(0, todo0);
	update_todo_task(1, todo1);
	update_todo_task(2, todo2);
	update_todo_task(3, todo3);
	
	center_pos();   // from center.js
	load_hexagon(); // from hexagon.js
}

function update_todo_task(i, task) {
	if(task != "void") {
		$('label[for=check-' + (i + 1) + ']').parent().css("display", "block");
		$('label[for=check-' + (i + 1) + ']').text(task);
	} else {
		$('label[for=check-' + (i + 1) + ']').parent().css("display", "none");
	}
}

function update_m2m(m2m0, m2m1) {
	var m2m_list = $(".rounded-list li a");
	if($(window).width() >= 650) {
		if(m2m0.length >= 20 || m2m1.length >= 20) {
			$(".rounded-list a").css("width", "200px");
		} else {
			$(".rounded-list a").css("width", "150px");
		}
	}
	
	m2m_list.eq(0).text(m2m0);
	m2m_list.eq(1).text(m2m1);
}

function update_pos(pos) {
	if(pos == "GK") {
		$('*[class^="inset-text-effect-"]').attr("class", "inset-text-effect-gk").text("GK");
	} else if(pos.indexOf("B") > -1) {
		// defender
		$('*[class^="inset-text-effect-"]').attr("class", "inset-text-effect-def").text(pos);
	} else if(pos.indexOf("MF") > -1) {
		// midflieder
		$('*[class^="inset-text-effect-"]').attr("class", "inset-text-effect-mid").text(pos);
	} else {
		// striker
		$('*[class^="inset-text-effect-"]').attr("class", "inset-text-effect-cf").text(pos);
	}
}

function update_info(info, list, i) {
	//list.eq(i).html(list.eq(i).html().replace(/[^>]+$/, "") + info);
	var li = list.eq(i).get(0); //get raw DOM element;
	li.childNodes[2].textContent ? li.childNodes[2].textContent = info : li.childNodes[2].innerText = info;

}

function update_stat(stat, list, i) {
	var div = list.eq(i);
	if(stat < 80) {
		div.removeClass("less_95 ge_95");
	} else if(stat < 95) {
		div.removeClass("ge_95");
		div.addClass("less_95");
	} else {
		div.removeClass("less_95");
		div.addClass("ge_95");
	}
	div.text(stat);
}