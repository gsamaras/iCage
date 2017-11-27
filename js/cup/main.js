function update_table(i, team, gp, w, d, l, gf, ga, gd, pts) {
	$('#table1 div:not(:first)').eq(i).find('span').each(function (index) {
		$this = $(this);
		if(index == 0) {
			$this.text(team);
			update_team_icon($this, team);
		} else if(index == 1) {
			$this.text(gp);
		} else if(index == 2) {
			$this.text(w);
		} else if(index == 3) {
			$this.text(d);
		} else if(index == 4) {
			$this.text(l);
		} else if(index == 5) {
			$this.text(gf);
		} else if(index == 6) {
			$this.text(ga);
		} else if(index == 7) {
			$this.text(gd);
		} else {
			$this.text(pts);
		}
	});
	var isMobile = window.matchMedia("only screen and (max-width: 760px)");
	if (!isMobile.matches) {
		$("#caption1").width($("#table1 .header-row").width());
		$(".header").width($("#table1 .header-row").width());
		$(".wrap").width($("#table1 .header-row").width());
	}
}

function update_player(i, player, goals, team) {
	$('#table2 div:not(:first)').eq(i).find('span').each(function (index) {
		$this = $(this);
		if(index == 0) {
			$this.text(player);
			update_team_icon($this, team);
		} else {
			$this.text(goals);
		}
	});
	var isMobile = window.matchMedia("only screen and (max-width: 760px)");
	if (!isMobile.matches) {
		$("#caption2").width($("#table2 .header-row").width());
		$("#table2 .cell").width($("#header2").width());
	}
}

function update_team_icon($this, team) {
	if(team == "Panklouviakos")
		$this.attr('id', 'addidas');
	else if(team == "Genia tou 98")
		$this.attr('id', 'book');
	else if(team == "ui48975")
		$this.attr('id', 'hippie');
	else if(team == "Ouza&Zabon")
		$this.attr('id', 'ouzo');
	else if(team == "Real Klarin")
		$this.attr('id', 'klarin');
	else
		$this.attr('id', 'rakoun');
}
