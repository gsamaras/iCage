function match_exists(e) {
    var t = "#match" + e + " li i",
        a = "Match " + e;
    return $(t).text() != a ? 1 : (alertify.error("No scheduled match!"), 0)
}

function player_exists(e) {
    return "undefined" == typeof e ? (alertify.error("You are not logged in!"), $("#login input:first").focus(), 0) : 1
}

function add_me(e, t, a, i, r) {
    if (match_exists(e) && player_exists(t)) {
        var n = "#match" + e,
            s = $(n + " li"),
            o = 0,
            l = 0;
        if (s.each(function(e, a) {
                return 0 == $(a).hasClass("unsure") && 0 == $(a).hasClass("waiting") && 0 != o++ && $(a).text() == t ? void(l = 1) : void 0
            }), 13 == o) return void alertify.error("Match is full!");
        if (1 == l) return void alertify.error("Already in the match!");
        var c;
        c = 1 != o ? "#match" + e + " li:last-child" : "#match" + e + " li:first-child";
        var u = $(c)[0].outerHTML;
        $(c).remove(), u = u.replace("ui-last-child", ""), $(n).append(u), $(n).append('<li class="ui-btn-icon-left ui-last-child" data-icon="' + a + '"><a href="#" class="ui-btn ui-icon-' + a + '"><span class="tooltip" data-tooltip="' + i + '">' + t + "</span></a></li>"), alertify.success("You were added in Match " + e + "!"), r.item = !0
	/*	var match = $("#match" + e + " li:first i").text();
		var data = {};
		//17.30 Friday 25/12
		var match_tokens = match.split(' ');
		data["hour"] = match_tokens[0].split('.')[0];
		data["day"] = match_tokens[1];
		data["month"] = match_tokens[2].split('/')[1];
		data["player"] = t;
		$.ajax({
			url: 'php/update_suggest.php',
			type: 'POST',
			contentType:'application/json',
			data: JSON.stringify(data),
			dataType:'html',
			success: function(return_msg) {
				//On ajax success do this
				if(return_msg != "ok")
					alert(return_msg);
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
	*/
	}
}

function save_match(e, t) {
    if (player_exists(window.player)) {
        var a = $("#match" + e + " li"),
            i = -1,
            r = {},
            n = 0,
            s = {},
            o = 0,
            l = {};
        l.slot = e;
        var c = 0;
        if (a.each(function(t, a) {
                var u = $(a);
                if (i >= 0) {
                    var d = $(u).find("data-icon").context;
                    1 == $(d).hasClass("unsure") ? (r["unsure" + n] = {
                        name: $($(d.innerHTML)[0].innerHTML).text(),
                        pos: $(d).attr("data-icon"),
                        ability: $($(d.innerHTML)[0].innerHTML).attr("data-tooltip"),
                        unsure: 1,
                        waiting: 0
                    }, ++n) : 1 == $(d).hasClass("waiting") ? (s["waiting" + o] = {
                        name: $($(d.innerHTML)[0].innerHTML).text(),
                        pos: $(d).attr("data-icon"),
                        ability: $($(d.innerHTML)[0].innerHTML).attr("data-tooltip"),
                        unsure: 0,
                        waiting: 1
                    }, o++) : (l["player" + i] = {
                        name: $($(d.innerHTML)[0].innerHTML).text(),
                        pos: $(d).attr("data-icon"),
                        ability: $($(d.innerHTML)[0].innerHTML).attr("data-tooltip"),
                        unsure: 0,
                        waiting: 0
                    }, ++c), ++i
                } else i = 0, l.saves = 1 == e ? window.saves1.item : window.saves2.item, l.title = $(u).find("i").text(), l.creator = 1 == e ? window.creator1 : window.creator2
            }), c > 10) return void alertify.error("There are more than 10 sure players!");
        for (var u = i + 1, d = 0; o > d; ++d) l["player" + u++] = {
            name: s["waiting" + d].name,
            pos: s["waiting" + d].pos,
            ability: s["waiting" + d].ability,
            unsure: 0,
            waiting: 1
        };
        for (var d = 0; n > d; ++d) l["player" + u++] = {
            name: r["unsure" + d].name,
            pos: r["unsure" + d].pos,
            ability: r["unsure" + d].ability,
            unsure: 1,
            waiting: 0
        };
        $.ajax({
            url: "php/save_match.php",
            type: "POST",
            contentType: "application/json",
            data: JSON.stringify(l),
            dataType: "html",
            success: function(a) {
                window.obj_need_save.item = !1, parseInt(a) == a ? 1 == e ? window.saves1.item = a : window.saves2.item = a : "not_ok" == a ? swal({
                    title: "Damn!",
                    text: "Someone else saved before you, try again! Page will refresh.",
                    type: "error",
                    showConfirmButton: !0
                }, function() {
                    location.reload()
                }) : (alert("Error!"), location.reload()), alertify.success("Match " + e + " saved!"), t.item = !1
            },
            error: function(e, t, a) {
                $.mobile.loading("hide"), 200 == e.status ? (alert("status = 200"), alert(t)) : (alert("status = " + e.status), alert(a))
            }
        })
    }
}

function isLetter(e) {
    return 1 === e.length && e.match(/[a-z]/i)
}

function create_match(e, t, a) {
    var i = "#match" + e + " li i",
        r = "Match " + e;
    return $(i).text() != r ? void alertify.alert("There is a scheduled match already!") : void(player_exists(t) && (alertify.set({
        buttonReverse: !0
    }), alertify.set({
        buttonFocus: "ok"
    }), alertify.prompt("MUST use the following format", function(r, n) {
        if (r) {
            var s = /^[0-9]{1,2}[.:][0-9]{1,2} [A-Z][a-z]{5,8} [0-9]{1,2}\/[0-9]{1,2}$/;
            if (!n.match(s)) return void alertify.error("Bad format, match creation failed!");
            $(i).text(n), 1 == e ? window.creator1 = t : window.creator2 = t, alertify.success("Created: " + n), a.item = !0
        } else alertify.error("Cancel pressed")
    }, "19.30 Friday 15/5")))
}

function delete_me(e, t, a) {
    if (match_exists(e) && player_exists(t)) {
        var i = "#match" + e + " li",
            r = $("#match" + e + " li"),
            n = 0,
            s = 0;
        if (r.each(function(e, a) {
                return 0 != e && -1 != $(a).text().indexOf(t) ? void(s = 1) : void(0 == s && ++n)
            }), 0 == s) return void alertify.error("You are not in the match!");
        $(i).eq(n).remove(), alertify.success("You were deleted from Match " + e + "!"), a.item = !0
    }
}

function waiting(e, t, a) {
    if (match_exists(e) && player_exists(t)) {
        var i = "#match" + e + " li",
            r = $("#match" + e + " li"),
            n = 0,
            s = 0;
        if (r.each(function(e, a) {
                return $(a).text() == t ? void(s = 1) : void(0 == s && ++n)
            }), 0 == s) return void alertify.error("You are not in the match!");
        var o = $(i).eq(n);
        o.hasClass("unsure") ? alertify.error("You can not be waiting and unsure at the same time!") : o.hasClass("waiting") ? (o.removeClass("waiting"), alertify.success("You were set as sure in Match " + e + "!"), a.item = !0) : (o.addClass("waiting"), alertify.success("You were set as waiting in Match " + e + "!"), a.item = !0)
    }
}

function unsure(e, t, a) {
    if (match_exists(e) && player_exists(t)) {
        var i = "#match" + e + " li",
            r = $("#match" + e + " li"),
            n = 0,
            s = 0;
        if (r.each(function(e, a) {
                return $(a).text() == t ? void(s = 1) : void(0 == s && ++n)
            }), 0 == s) return void alertify.error("You are not in the match!");
        var o = $(i).eq(n);
        o.hasClass("waiting") ? alertify.error("You can not be unsure and waiting at the same time!") : o.hasClass("unsure") ? (o.removeClass("unsure"), alertify.success("You were set as sure in Match " + e + "!"), a.item = !0) : (o.addClass("unsure"), alertify.success("You were set as unsure in Match " + e + "!"), a.item = !0)
    }
}

function refresh() {
    swal({
        title: "Are you sure?",
        text: "All changes will be LOST!",
        type: "warning",
        showCancelButton: !0,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, refresh!",
        cancelButtonText: "No, cancel!",
        closeOnConfirm: !1,
        closeOnCancel: !1
    }, function(e) {
        e ? (window.obj_need_save.item = !1, location.reload()) : swal("Cancelled", "Your data are safe :)", "error")
    })
}

function add_noncage(e, t, a) {
    if (match_exists(e) && player_exists(t)) {
        var i = "#match" + e,
            r = $(i + " li"),
            n = 0;
        if (r.each(function() {
                ++n
            }), 13 == n) return void alertify.error("Match is full!");
        var s;
        s = 1 != n ? "#match" + e + " li:last-child" : "#match" + e + " li:first-child";
        var o = $(s)[0].outerHTML;
        $(s).remove(), o = o.replace("ui-last-child", ""), $(i).append(o), $(i).append('<li class="ui-btn-icon-left ui-last-child" data-icon="rb"><a href="#" class="ui-btn ui-icon-rb"><span class="tooltip" data-tooltip="whoKnows">noncage' + t + "</span></a></li>"), alertify.success("A noncage player was added in Match " + e + "!"), a.item = !0
    }
}

function delete_match(e, t, a) {
    if (match_exists(e) && player_exists(t)) {
        if (1 == e) {
            if (t != window.creator1 && "Samaras" != t) return void swal({
                title: "Forbidden",
                text: "You are not the match creator!",
                timer: 4e3,
                type: "error",
                showConfirmButton: !0
            })
        } else if (t != window.creator2 && "Samaras" != t) return void swal({
            title: "Forbidden",
            text: "You are not the match creator!",
            timer: 4e3,
            type: "error",
            showConfirmButton: !0
        });
        1 == e ? window.creator1 = "void" : window.creator2 = "void";
        var i = "#match" + e + " li:not(:first)",
            r = $(i);
        r.remove(), $("#match" + e + " li i").text("Match " + e), alertify.success("Match" + e + " deleted!"), a.item = !0
    }
}
