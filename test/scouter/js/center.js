$(window).load(function() {
	$("#load_btn").focus();
	
	$('#form-main').keypress(function (e) {
		var key = e.which;
		if(key == 13) { // the enter key code
			$('#button-blue').click();
			return false;  
		}
	});
	
	$(window).keyup(function (e) {
		var key = e.which;
		if(key == 13 || key == 39) { // the enter key code or right arrow
			var $next = $('.next');
			if($next.css('display') == 'block') {
				$next.click();
			}
			return false;  
		} else if(key == 37) { // left arrow
			var $prev = $('.prev');
			if($prev.css('display') == 'block') {
				$prev.click();
			}
			return false;  
		}
	});
	
	var img = $(".profile_pic");
	img.css({
		position : "relative",
		left : (img.parent().parent().width() - img.width()) / 2,
		bottom : (img.parent().height() - img.height()) / 2
	});

	center_pos();

	var hexagon = $(".hexagon");
	hexagon.parent().height(hexagon.height() + 150);
	hexagon.css({
		position : "relative",
		left : (hexagon.parent().width() - hexagon.width()) / 2
	});
	
	if($(window).width() >= 650) {
		//var pos_section = $("#pos_section");
		//pos_section.css("padding-top", (pos_section.parent().height() - pos_section.height()) / 6);
		hexagon.css("top", (hexagon.parent().height() - hexagon.height()) / 1.3);
	} else {
		hexagon.css("top", 10);
	}
	
});

function center_pos() {
	var position = $('*[class^="inset-text-effect-"]');
	position.css({
		position : "relative",
		left : (position.parent().width() - position.width()) / 2
	});
}