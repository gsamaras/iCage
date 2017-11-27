<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta name=description content="Scout the opponent team!">
<meta name=author content="G. Samaras">
<link rel=icon href=img/favicon.ico>
<title>Cage Scouter</title>
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin=anonymous>
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css integrity=sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX crossorigin=anonymous>
<script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js></script>
<script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin=anonymous></script>
<link href=css/min/alertify.min.css rel=stylesheet>
<script src=js/min/alertify.min.js></script>
<link href=css/min/load_sign.css rel=stylesheet>
<link href=css/min/sticky-footer.css rel=stylesheet>
<link href=css/min/grid.css rel=stylesheet>
<link href=css/min/profile_picture.css rel=stylesheet>
<link href=css/min/caption.css rel=stylesheet>
<link href=css/min/list.css rel=stylesheet>
<link href=css/min/text_effect.css rel=stylesheet>
<link href=css/min/hexagon.css rel=stylesheet>
<link href=css/min/main.css rel=stylesheet>
<link href=css/min/todo_list.css rel=stylesheet>
<link href=css/min/rounded_list.css rel=stylesheet>
<link href=css/min/header.css rel=stylesheet>
<link href=css/min/form.css rel=stylesheet>
<link href=css/min/component.css rel=stylesheet>
<link href=css/min/player_list.css rel=stylesheet>
<link media="(min-width: 650px)" href=css/min/hint.css rel=stylesheet>
<link media="(max-width: 650px)" href=css/min/mobile.css rel=stylesheet>
<script>var GLOBAL_obj={players_no:-1,current_player_no:-1,team:null,prev_player:null,next_player:null};</script>
<script src=js/min/center.js></script>
<script src=js/min/hexagon.js></script>
<script src=js/min/form.js></script>
<script src=js/min/update.js></script>
<script src=js/min/load.js></script>
<script src=js/min/upload.js></script>
<script src=js/min/save.js></script>
<script src=js/min/team.js></script>
<script src=js/min/save_team.js></script>
</head>
<body>
<div class=modal></div>
<div class=hide_background></div>
<div id=form-main class=hidden-form>
<div id=form-div>
<form class=form id=form1>
<p class=name>
<input name=name type=text class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Player(* for all) or Team" id=name />
</p>
<p class=password>
<input name=password type=password class="validate[optional] feedback-input" id=password placeholder="Password (optional)" />
</p>
<div class=submit>
<input onClick=first_load() value=Load id=button-blue readonly/>
<div class=ease></div>
</div>
</form>
</div>
</div>
<div class=wrap id=players_list>
<div class=header>
<input type=text placeholder=Name class=player_list_input id=player_list_name>
<input type=text placeholder=Password class=player_list_input id=player_list_pass>
<a href=# class=ok-button>OK</a>
</div>
<div class=wrap-list>
<ol class=list>
</ol>
</div>
</div>
<div class=header_div>
<div id=title>Scouter&trade;</div>
<div class=button-holder>
<div>
<span class="hint--bottom hint--info hint--rounded hint--bounce" data-hint="Load team or player(s)"><a href=# class=btn id=load_btn>Load</a></span>
</div>
<div>
<span class="hint--left hint--warning hint--rounded hint--bounce" data-hint="First edit, then click me to create a player. Or update m2m suggestions of existing player."><a href=# class=btn id=save_btn>Save</a></span>
</div>
<div>
<span class="hint--left hint--success hint--rounded hint--bounce" data-hint="Create a team from existing players"><a href=# class=btn id=team_btn>Team</a></span>
</div>
</div>
</div>
<div class=container>
<div class=row>
<div class=col-md-3>
<input id=input_pic type='file'/>
<div>
<img class=profile_pic src=img/upload.jpg alt=player_img />
</div>
</div>
<div class=col-md-3>
<ul id=info>
<li>
<span>Name:</span><div contenteditable=true>Alexis Tsipras</div>
</li>
<li>
<span>Birth:</span><div contenteditable=true>28/07/1974</div>
</li>
<li>
<span>Height:</span><div contenteditable=true>Short/Normal/Tall</div>
</li>
<li>
<span>Team:</span><div contenteditable=true>Cage</div>
</li>
<li>
<span>Joined:</span><div contenteditable=true>day/month/year</div>
</li>
<li>
<span>Number:</span><div contenteditable=true>0</div>
</li>
<li>
<span>Foot:</span><div contenteditable=true>R/L</div>
</li>
</ul>
</div>
<div class=col-md-3>
<ul id=stats_0>
<li>
<span>Attack:</span><div contenteditable=true>20-100</div>
</li>
<li>
<span>Defence:</span><div contenteditable=true>20-100</div>
</li>
<li>
<span>Strength:</span><div contenteditable=true>20-100</div>
</li>
<li>
<span>Stamina:</span><div contenteditable=true>20-100</div>
</li>
<li>
<span>Speed:</span><div contenteditable=true>20-100</div>
</li>
<li>
<span>Header:</span><div contenteditable=true>20-100</div>
</li>
<li>
<span>Dribble:</span><div contenteditable=true>20-100</div>
</li>
</ul>
</div>
<div class=col-md-3>
<ul id=stats_1>
<li>
<span>Agility:</span><div contenteditable=true>20-100</div>
</li>
<li>
<span>Shot:</span><div contenteditable=true>20-100</div>
</li>
<li>
<span>Keeper skills:</span><div contenteditable=true>20-100</div>
</li>
<li>
<span>Team work:</span><div contenteditable=true>20-100</div>
</li>
<li>
<span>Technique:</span><div contenteditable=true>20-100</div>
</li>
<li>
<span>Mentality:</span><div contenteditable=true>20-100</div>
</li>
<li>
<span>Free kick:</span><div contenteditable=true>20-100</div>
</li>
</ul>
</div>
</div>
<div class=row>
<div class=col-md-4>
<section>
<h3 class=center_ol>Position</h3>
<div class=inset-text-effect-cf contenteditable=true>CF</div>
</section>
<section class=space_between>
<h3 class=center_ol>Special ability</h3>
<div id=spec class=center_ol contenteditable=true>Good shot</div>
</section>
<section class=space_between>
<h3 class=center_rounded_ol>Man-to-man suggestions</h3>
<ol class="rounded-list center_rounded_ol">
<li>
<a contenteditable=true>Name Surname</a>
</li>
<li>
<a contenteditable=true>Name Surname</a>
</li>
</ol>
</section>
</div>
<div class=col-md-4>
<div class="wrap bgimg">
<div class=header>
<span class=dashed_header>How to tackle</span>
</div>
<div class=wrap-list>
<ol class=list>
<li>
<input type=checkbox id=check-1>
<label for=check-1 contenteditable=true>Task1</label>
</li>
<li>
<input type=checkbox id=check-2>
<label for=check-2 contenteditable=true>Task2</label>
</li>
<li>
<input type=checkbox id=check-3>
<label for=check-3 contenteditable=true>Task3</label>
</li>
<li>
<input type=checkbox id=check-4>
<label for=check-4 contenteditable=true>Task4</label>
</li>
</ol>
</div>
</div>
</div>
<div class=col-md-4>
<div class=hexagon>
<span>
<div id=txt_spd class=small_font>
SPD
</div> <div id=dot_spd></div>
<svg>
<polyline id=spd_att points></polyline>
<polyline id=att_tec points></polyline>
<polyline id=tec_str points></polyline>
<polyline id=def_str points></polyline>
<polyline id=def_pow points></polyline>
<polyline id=spd_pow points></polyline>
</svg>
<div id=txt_att class=small_font>
ATT
</div> <div id=dot_att></div>
<div id=txt_pow class=small_font>
POW
</div> <div id=dot_pow></div>
<div id=txt_tec class=small_font>
TEC
</div> <div id=dot_tec></div>
<div id=txt_str class=small_font>
STR
</div> <div id=dot_str></div>
<div id=txt_def class=small_font>
DEF
</div> <div id=dot_def></div> </span>
</div>
</div>
</div>
</div>
<nav class=nav-fillpath>
<a class=prev onClick="load('prev')">
<span class=icon-wrap></span>
<h3><strong>Alexis</strong> Tsipras</h3>
</a>
<a class=next onClick="load('next')">
<span class=icon-wrap></span>
<h3><strong>George</strong> Bush</h3>
</a>
</nav>
<footer class=footer>
<div class=footer_container>
<p class=text-muted>
&copy; 2015 G. Samaras
</p>
</div>
</footer>
<script>$(document).ready(function(){});$body=$("body");$(document).on({ajaxStart:function(){$body.addClass("loading")},ajaxStop:function(){$body.removeClass("loading")}});</script>
</body>
</html>