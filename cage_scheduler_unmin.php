<!DOCTYPE html>
<html>

<head>
    <title>Cage Scheduler&trade;</title>
    <meta name="description" content="Cage Scheduler, Cage football, cage apps, football apps, cage scheduler, play football" />
    <meta name="keywords" content="cage, football, app, scheduler, scouter, league, cup, scouter, official" />
    <meta name="George Samaras" content="Cage apps" />
    <link rel="shortcut icon" href="img/logo_icon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/background.css" type="text/css">
    <link rel="stylesheet" href="css/list.css" type="text/css">
    <link rel="stylesheet" href="css/icon.css" type="text/css">
    <link media="(max-width: 500px)" rel="stylesheet" href="css/icon_mobile.css" type="text/css" />
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link media="(max-width: 500px)" rel="stylesheet" href="css/footer_mobile.css" type="text/css" />
    <link rel="stylesheet" href="css/status.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="css/ability.css" type="text/css">
    <link rel="stylesheet" href="css/loading.css" type="text/css">
    <link rel="stylesheet" href="css/field.css" type="text/css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="js/views.js"></script>
    <script src="js/button.js"></script>
    <script src="js/main.js"></script>
    <script src="js/textbox.js"></script>
    <script src="js/read_match.js"></script>
    <script src="js/field.js"></script>
    <script src="js/update_results.js"></script>
	<script src="js/suggest.js"></script>
    <script src="alertify.js-0.3.11/lib/alertify.min.js"></script>
    <link rel="stylesheet" href="alertify.js-0.3.11/themes/alertify.core.css" />
    <link rel="stylesheet" href="alertify.js-0.3.11/themes/alertify.default.css" />
    <link rel="stylesheet" href="alertify.js-0.3.11/themes/alertify.bootstrap.css" />
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script src="intro.js-1.1.1/minified/intro.min.js"></script>
    <link rel="stylesheet" type="text/css" href="intro.js-1.1.1/minified/introjs.min.css">
</head>

<body> 
    <div data-role="page" id="pageone">
        <div data-role="header" id="header">
            <div class="ui-block-solo"><img src="img/logo.png" id="logo" alt="logo" data-step="1" data-intro="Welcome to the Scheduler&#169;! This guide appears only to new users. If you want to run it again, simply delete your cookies. Press Esc/Skip at any time to exit. Move with arrows/Enter.">
                <textarea id="cagetextbox" placeholder='Talk to the Cage world!' data-step="2" data-intro="Broadcast something, by writing into this textbox. To save, press Enter."></textarea>				
				<a id="suggest_btn" class="button-link ui-link cursor-pointer" href="#input_page"><i data-step="3" data-intro="Find players that may want to play in a specific match.">Suggest players</i></a>               
				<form id="login" name="login">
                    <input type="text" name="userid" / value="" placeholder="Player">
                    <input type="password" name="pswrd" / value="" placeholder="Password">
                    <input type="button" onclick="check(this.form)" data-step="4" data-intro="Every player has an account, which he creates by contacting Samaras. After your first login, your machine will remember you. To login with another account (one of a friend for example), simply type his details in the login form and login again. If the Scheduler remembers your friend instead of your, delete your cookies." value="Login" />
                    <input type="reset" value="Cancel" />
				</form>
            </div>
        </div>
        <div data-role="main" class="ui-content">
            <div class="modal"></div>
            <div class="ui-grid-solo" id="slots">
                <div class="ui-block-a">
                    <ol id="match1" data-role="listview" data-inset="true">
                        <li class="center" data-role="list-divider"> <i>Match1</i>
                            <div data-role="controlgroup" data-type="horizontal" class="ui-controlgroup ui-controlgroup-horizontal ui-corner-all">
                                <div class="ui-controlgroup-controls ">
                                    <a href="#" onclick="add_me(1, window.player, window.position, window.ability, window.obj_need_save)" title="Add me" data-role="button" data-icon="plus" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-plus ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all ui-first-child" role="button" data-step="5" data-intro="Add yourself. 10 first sure players are the lucky ones!">
                                        <p>Add me</p>
                                    </a>
                                    <a href="#" onclick="save_match(1, window.obj_need_save)" title="Save" data-role="button" data-icon="check" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-check ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all ui-last-child" role="button" data-step="6" data-intro="Save any changes you have made, otherwise they will be lost.">
                                        <p>Save</p>
                                    </a>
                                    <a href="#" onclick="create_match(1, window.player, window.obj_need_save)" title="Create match" data-role="button" data-icon="calendar" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-calendar ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all ui-last-child" role="button" data-step="7" data-intro="Create a match. Only you and Samaras can delete it.">
                                        <p>Ceate match</p>
                                    </a>
                                    <a href="#" onclick="delete_me(1, window.player, window.obj_need_save)" title="Delete me" data-role="button" data-icon="minus" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-minus ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" role="button" data-step="8" data-intro="Delete yourself.">
                                        <p>Delete me</p>
                                    </a>
                                    <a href="#" onclick="waiting(1, window.player, window.obj_need_save)" title="Waiting" data-role="button" data-icon="eye" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-eye ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" role="button" data-step="9" data-intro="Set yourself as a waiting player, click again to unset. Useful to state intention when the match is full. Another player that may wants to take a rest, will give his position to you, but he may stay to the match, if he didn't know you were available, so that the match remains scheduled! In case of more than one waiting players, the one with the less index has priority.">
                                        <p>Waiting</p>
                                    </a>
                                    <a href="#" onclick="unsure(1, window.player, window.obj_need_save)" title="Unsure" data-role="button" data-icon="alert" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-alert ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" role="button" data-step="10" data-intro="Same as waiting. Use it to say that you want to play, but you may be unable to make it. Any player can take your position at any time, but be honest, as much as we are with the penalties in the Cage! :)">
                                        <p>Unsure</p>
                                    </a>
                                    <a href="#firstPopup" id="firstGridBtn" onclick="fill_players(1)" data-rel="popup" data-role="button" data-icon="edit" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-edit ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" data-transition="pop" role="button" data-step="11" data-intro="Teambuilder. Designed for desktop use!">
                                        <p>Basic Popup</p>
                                    </a>
                                    <div data-role="popup" id="firstPopup">
                                        <button onclick="update_teams(1)">Update teams</button>
                                        <div id="footballField1"></div>
                                        <div id="firstGrid"></div>
                                    </div>
                                    <a href="#" onclick="add_noncage(1, window.player, window.obj_need_save)" title="Add noncage" data-role="button" data-icon="user" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-user ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" role="button" data-step="12" data-intro="Add noncage player!">
                                        <p>noncage</p>
                                    </a>
                                    <a href="#" onclick="delete_match(1, window.player, window.obj_need_save)" title="Delete match" data-role="button" data-icon="delete" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-delete ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" role="button" data-step="13" data-intro="Delete the match, only if you are the creator of the match!">
                                        <p>Delete match</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ol> <a href="#popupNested" data-rel="popup" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-info ui-btn-icon-left ui-btn-b" data-transition="slidedown" data-step="14" data-intro="Reminder of Scheduler's features.">Info</a>
                    <div data-role="popup" id="popupNested" data-theme="none">
                        <div data-role="collapsibleset" data-theme="b" data-content-theme="a" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d" style="margin:0;">
                            <div data-role="collapsible" data-inset="false">
                                <h2>Log in</h2>
                                <ul data-role="listview" data-icon="false">
                                    <li><a href="#" data-rel="dialog">To sign up,<br>contact Samaras!</a></li>
                                </ul>
                            </div>
                            <div data-role="collapsible" data-inset="false">
                                <h2>Must save</h2>
                                <ul data-role="listview" data-icon="false">
                                    <li><a href="#" data-rel="dialog">If you don't save,<br>changes won't apply!</a></li>
                                </ul>
                            </div>
                            <div data-role="collapsible" data-inset="false">
                                <h2>I did a mistake</h2>
                                <ul data-role="listview" data-icon="false">
                                    <li><a href="#" data-rel="dialog">Refresh/exit the Scheduler.<br>Changes will be lost.</a></li>
                                </ul>
                            </div>
                            <div data-role="collapsible" data-inset="false">
                                <h2>Unsure</h2>
                                <ul data-role="listview" data-icon="false">
                                    <li><a href="#" data-rel="dialog">State that you want to play,<br>but you are not sure.<br>Any player can<br>take your position.</a></li>
                                </ul>
                            </div>
                            <div data-role="collapsible" data-inset="false">
                                <h2>Waiting</h2>
                                <ul data-role="listview" data-icon="false">
                                    <li><a href="#" data-rel="dialog">Waiting player will take the<br>position of any<br>cancelled player.</a></li>
                                </ul>
                            </div>
                            <div data-role="collapsible" data-inset="false">
                                <h2>Rules</h2>
                                <ul data-role="listview" data-icon="false">
                                    <li><a href="#" data-rel="dialog">Be on time!<br>10 first sure players play.</a></li>
                                </ul>
                            </div>
                            <div data-role="collapsible" data-inset="false">
                                <h2>nonCage</h2>
                                <ul data-role="listview" data-icon="false">
                                    <li><a href="#" data-rel="dialog">Delete with minus sign.</a></li>
                                </ul>
                            </div>
                            <div data-role="collapsible" data-inset="false">
                                <h2>How-to?</h2>
                                <ul data-role="listview" data-icon="false">
                                    <li><a href="#" data-rel="dialog">Hover over the buttons<br>of a match to see description.</a></li>
                                </ul>
                            </div>
                            <div data-role="collapsible" data-inset="false">
                                <h2>Textbox</h2>
                                <ul data-role="listview" data-icon="false">
                                    <li><a href="#" data-rel="dialog">Write your thing<br>& press ENTER.</a></li>
                                </ul>
                            </div>
                            <div data-role="collapsible" data-inset="false">
                                <h2 id="updateRes">Update</h2>
                                <ul data-role="listview" data-icon="false">
                                    <li>
                                        <a href="#" data-rel="dialog">
                                            <fieldset data-role="controlgroup">
                                                <input type="text" name="slot" id="form_slot" placeholder="slot" value="1">
                                                <input type="password" name="pass" id="form_pass" placeholder="password" value="">
                                                <input type="text" name="score" id="form_score" placeholder="score" value="">
                                                <input type="checkbox" name="pl0" id="pl0">
                                                <label for="pl0" id="label0"></label>
                                                <input type="checkbox" name="pl1" id="pl1">
                                                <label for="pl1" id="label1"></label>
                                                <input type="checkbox" name="pl2" id="pl2">
                                                <label for="pl2" id="label2"></label>
                                                <input type="checkbox" name="pl3" id="pl3">
                                                <label for="pl3" id="label3"></label>
                                                <input type="checkbox" name="pl4" id="pl4">
                                                <label for="pl4" id="label4"></label>
                                                <input type="checkbox" name="pl5" id="pl5">
                                                <label for="pl5" id="label5"></label>
                                                <input type="checkbox" name="pl6" id="pl6">
                                                <label for="pl6" id="label6"></label>
                                                <input type="checkbox" name="pl7" id="pl7">
                                                <label for="pl7" id="label7"></label>
                                                <input type="checkbox" name="pl8" id="pl8">
                                                <label for="pl8" id="label8"></label>
                                                <input type="checkbox" name="pl9" id="pl9">
                                                <label for="pl9" id="label9"></label>
                                                <input type="checkbox" name="pl10" id="pl10">
                                                <label for="pl10" id="label10"></label>
                                                <input type="checkbox" name="pl11" id="pl11">
                                                <label for="pl11" id="label11"></label>
                                                <input type="checkbox" name="pl12" id="pl12">
                                                <label for="pl12" id="label12"></label>
                                                <input type="checkbox" name="pl13" id="pl13">
                                                <label for="pl13" id="label13"></label>
                                                <input type="checkbox" name="pl14" id="pl14">
                                                <label for="pl14" id="label14"></label>
                                                <input type="checkbox" name="pl15" id="pl15">
                                                <label for="pl15" id="label15"></label>
                                                <input type="checkbox" name="pl16" id="pl16">
                                                <label for="pl16" id="label16"></label>
                                                <input type="checkbox" name="pl17" id="pl17">
                                                <label for="pl17" id="label17"></label>
                                                <input type="checkbox" name="pl18" id="pl18">
                                                <label for="pl18" id="label18"></label>
                                                <input type="checkbox" name="pl19" id="pl19">
                                                <label for="pl19" id="label19"></label>
                                            </fieldset>
                                            <button class="ui-shadow ui-btn ui-corner-all" type="submit" id="submitRes">Submit</button>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ol id="match2" data-role="listview" data-inset="true">
                        <li class="center" data-role="list-divider"> <i>Match2</i>
                            <div data-role="controlgroup" data-type="horizontal" class="ui-controlgroup ui-controlgroup-horizontal ui-corner-all">
                                <div class="ui-controlgroup-controls ">
                                    <a href="#" onclick="add_me(2, window.player, window.position, window.ability, window.obj_need_save)" title="Add me" data-role="button" data-icon="plus" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-plus ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all ui-first-child" role="button">
                                        <p>Add me</p>
                                    </a>
                                    <a href="#" onclick="save_match(2, window.obj_need_save)" title="Save" data-role="button" data-icon="check" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-check ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all ui-last-child" role="button">
                                        <p>Save</p>
                                    </a>
                                    <a href="#" onclick="create_match(2, window.player, window.obj_need_save)" title="Create match" data-role="button" data-icon="calendar" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-calendar ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all ui-last-child" role="button">
                                        <p>Ceate match</p>
                                    </a>
                                    <a href="#" onclick="delete_me(2, window.player, window.obj_need_save)" title="Delete me" data-role="button" data-icon="minus" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-minus ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" role="button">
                                        <p>Delete me</p>
                                    </a>
                                    <a href="#" onclick="waiting(2, window.player, window.obj_need_save)" title="Waiting" data-role="button" data-icon="eye" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-eye ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" role="button">
                                        <p>Waiting</p>
                                    </a>
                                    <a href="#" onclick="unsure(2, window.player, window.obj_need_save)" title="Unsure" data-role="button" data-icon="alert" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-alert ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" role="button">
                                        <p>Unsure</p>
                                    </a>
                                    <a href="#secondPopup" id="secondGridBtn" onclick="fill_players(2)" data-rel="popup" data-role="button" data-icon="edit" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-edit ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" data-transition="pop" role="button">
                                        <p>Basic Popup</p>
                                    </a>
                                    <div data-role="popup" id="secondPopup">
                                        <button onclick="update_teams(2)">Update teams</button>
                                        <div id="footballField2"></div>
                                        <div id="secondGrid"></div>
                                    </div>
                                    <a href="#" onclick="add_noncage(2, window.player, window.obj_need_save)" title="Add noncage" data-role="button" data-icon="user" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-user ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" role="button">
                                        <p>noncage</p>
                                    </a>
                                    <a href="#" onclick="delete_match(2, window.player, window.obj_need_save)" title="Delete match" data-role="button" data-icon="delete" data-iconpos="notext" data-theme="b" data-inline="true" class="ui-link ui-btn ui-btn-b ui-icon-delete ui-btn-icon-notext ui-btn-inline ui-shadow ui-corner-all" role="button">
                                        <p>Delete match</p>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div data-role="footer" id="footer">
                <h1><p id="copyright" property="dc:rights">&copy; <span property="dc:dateCopyrighted">2015</span> <span property="dc:publisher">George Samaras</span></p><div class="stat"> <span class="stat-count">0</span> <p class="stat-detail">Views</p></div></h1> </div>
        </div>
    </div>
	<!-- Popup dialog for selecting match to suggest players -->
	<div data-role="page" data-dialog="true" data-close-btn="right" id="input_page">
		<div data-role="header">
			<h1>Select match</h1>
		</div>
		<div class=modal></div>
		<fieldset id="suggest_input" data-role="controlgroup" data-mini="true">
			<input type="radio" name="radio-mini" id="radio-mini-1" value="choice-1" checked="checked" />
			<label for="radio-mini-1">Match 1</label>

			<input type="radio" name="radio-mini" id="radio-mini-2" value="choice-2"  />
			<label for="radio-mini-2">Match 2</label>
		</fieldset>
		<a id="search_btn" data-role="button" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-search ui-btn-icon-left">Show me the players</a>
	</div>
	<!-- End of Popup dialog -->
    <script>
        $(document).ready(function() {
            $("#cagetextbox").keypress(function(e) {
                var o = e.keyCode ? e.keyCode : e.which;
                if (13 == o) {
                    var t = $("#cagetextbox").val();
		    t = t.replace(/\\/g,'');
                    return $.post("php/textbox.php", {
                        elements: t
                    }, function(e) {
                        "ok" == e ? swal({
                            title: "Done",
                            text: "The cage world will hear what you have to say!",
                            timer: 1e3,
                            type: "success",
                            showConfirmButton: !1
                        }) : (alert("The cage world is busy right now, try again later!"), location.reload())
                    }), !1
                }
            }), $.post("php/main.php", {
                elements: 1
            }, function(return_json) {
                return_json = JSON.parse(return_json), return_json.calls.forEach(function(code) {
                    eval(code)
                })
            })
        }), $body = $("body"), $(document).on({
            ajaxStart: function() {
                $body.addClass("loading")
            },
            ajaxStop: function() {
                $body.removeClass("loading")
            }
        });
    </script>
</body>

</html>
