function run(){
	var month = checkMonth();
	var results;
	var goals = 0;
	var goals95 = 0;
	var goals94 = 0;
	var goals93 = 0;
	var goals92 = 0;
	var goalsNonCage = 0;
	var wins95 = 0;
	var wins94 = 0;
	var wins93 = 0;
	var wins92 = 0;
	var winsNonCage = 0;
	var matches95 = 0;
	var matches94 = 0;
	var matches93 = 0;
	var matches92 = 0;
	var matchesNonCage = 0;
	var matches = 0;
	var result = "";
	var occurence = 0;
	var home, away, team;
	var i, j, k, z;
	var select;
	$( "#wrongMonth" ).css("opacity", "0.0");
	if(!month)
	{
		$( "#wrongMonth" ).css("opacity", "1.0");
		return;
	}
	
	
	
	
	var url = 'http://gsamaras.wordpress.com/%CE%BA%CE%BB%CE%BF%CF%85%CE%B2%CE%B9/%CE%BA%CE%BB%CE%BF%CF%85%CE%B2%CE%AF-results/'; // website you want to scrape
	var yql = 'http://query.yahooapis.com/v1/public/yql?q=' + encodeURIComponent('select * from html where url="' + url + '"') + '&format=json&callback=?';  
	$.getJSON(yql,function(data){
		if(data.query.results == null || data == null || data.query == null)
			alert("Server did not respond. Please reload the page and try again.");
		var data = data.query.results.body.div[0].div.div[1].div[0].div.div[0];
    	var months = data.h4;
    	var resultsList = data.ol;
    	if(resultsList.length == undefined || resultsList.length == 0)
    	{		
    		if(month != -1 && month != months.content)
    		{
	    		$( "#wrongMonth" ).css("opacity", "1.0");
	    		return;
	    	}
    		results = resultsList.li;
    	}
    	else
    		if(month == -1)
    		{
    			results = resultsList[0];
    		}
    		else
    			for(i = 0 ; i < months.length ; ++i)
    				if(months[i].content == month)
    					results = resultsList[i];
    	if(results == undefined)
    	{
    		$( "#wrongMonth" ).css("opacity", "1.0");
	    	return;
    	}
    	if(results.li.length == undefined)
    	{
    		if(results.length == undefined)
    		{
    			matches++;
    			for( i = 0 ; i < results.li.p.length ; ++i)
    			{
    				if(results.li.p[i] != "|")
    						result += results.li.p[i];
	   					else
    					{
    						if(occurence == 1)
    						{
    							occurence = 0;
    							home = "";
    							away = "";
    							select = 1;
    							for( k = 0 ; k < result.length ; ++k )
    							{
    								if(result[k] != " ")
    									(select) ? home += result[k] : away += result[k];
    								else
    								{
    									if(!select)
    										break;
    									select = 0;
    									k += 2;
    								}
    							} 	
    							/**** Increase the counters ******************************/
    							k++;
    							
    							// Winner
    							if(parseInt(home) >= parseInt(away)) //scores
    							{
    								goals = goals + parseInt(home) + parseInt(away);
    								do{
    									team = "";
    									while(result[k] != "+" && result[k] != "v" && result[k] != " ")
    										team += result[k++];
    									if(team == "95")
    									{
    										matches95++;
    										goals95 += parseInt(home);
    										wins95++;
    									}
    									if(team == "94")
    									{
    										matches94++;
    										goals94 += parseInt(home);
    										wins94++;
    									}
    									if(team == "93")
    									{
    										matches93++;
    										goals93 += parseInt(home);
    										wins93++;
    									}
    									if(team == "92")
    									{
    										matches92++;
    										goals92 += parseInt(home);
    										wins92++;
    									}
    									if(team == "nonCage")
    									{
    										matchesNonCage++;
    										goalsNonCage += parseInt(home);
    										winsNonCage++;
    									}
    								}while(result[k] != "v" && result[k++] != " ");
    								
    								// Loser
    								for( z = k ; z < result.length ; ++z)
    									if(result[z] == "9" || result[z] == "n")
    										do{
    											team = "";
    											while(result[z] != "+" && result[z] != "v" && result[z] != " " && z < result.length)
    												team += result[z++];
    											if(team == "95")
    											{
    												matches95++;
    												goals95 += parseInt(away);
    											}
    											if(team == "94")
    											{
    												matches94++;
    												goals94 += parseInt(away);
    											}
    											if(team == "93")
    											{
    												matches93++;
    												goals93 += parseInt(away);
    											}
    											if(team == "92")
    											{
    												matches92++;
    												goals92 += parseInt(away);
    											}
    											if(team == "nonCage")
    											{
    												matchesNonCage++;
    												goalsNonCage += parseInt(away);
    											}
    										}while(z < result.length && result[z] != "v" && result[z++] != " ");
    							}
    							else
    							{
    								console.log("Score of home: " + home);
    								console.log("Score of away: " + away);
    								console.log("The home team is the looser!!!");
    							}
    							
    							/********************************************************/
    							result = "";
    							}
    						else
    							occurence++;
    					
    				}
    			}
    		}			
    		for( i = 0 ; i < results.length ; ++i)
    		if(results[i].p[0] != undefined)
    			if(results[i].p[0].length != undefined)
    			{
    				matches++;
    				for( j = 0 ; j < results[i].p.length ; ++j)
    				{
    					if(results[i].p[j] != "|")
    						result += results[i].p[j];
	   					else
    					{
    						if(occurence == 1)
    						{
    							occurence = 0;
    							home = "";
    							away = "";
    							select = 1;
    							for( k = 0 ; k < result.length ; ++k )
    							{
    								if(result[k] != " ")
    									(select) ? home += result[k] : away += result[k];
    								else
    								{
    									if(!select)
    										break;
    									select = 0;
    									k += 2;
    								}
    							} 	
    							/**** Increase the counters ******************************/
    							k++;
    							
    							// Winner
    							if(parseInt(home) >= parseInt(away)) //scores
    							{
    								goals = goals + parseInt(home) + parseInt(away);
    								do{
    									team = "";
    									while(result[k] != "+" && result[k] != "v" && result[k] != " ")
    										team += result[k++];
    									if(team == "95")
    									{
    										matches95++;
    										goals95 += parseInt(home);
    										wins95++;
    									}
    									if(team == "94")
    									{
    										matches94++;
    										goals94 += parseInt(home);
    										wins94++;
    									}
    									if(team == "93")
    									{
    										matches93++;
    										goals93 += parseInt(home);
    										wins93++;
    									}
    									if(team == "92")
    									{
    										matches92++;
    										goals92 += parseInt(home);
    										wins92++;
    									}
    									if(team == "nonCage")
    									{
    										matchesNonCage++;
    										goalsNonCage += parseInt(home);
    										winsNonCage++;
    									}
    								}while(result[k] != "v" && result[k++] != " ");
    								
    								// Loser 
    								for( z = k ; z < result.length ; ++z)
    									if(result[z] == "9" || result[z] == "n")
    										do{
    											team = "";
    											while(result[z] != "+" && result[z] != "v" && result[z] != " " && z < result.length)
    												team += result[z++];
    											if(team == "95")
    											{
    												matches95++;
    												goals95 += parseInt(away);
    											}
    											if(team == "94")
    											{
    												matches94++;
    												goals94 += parseInt(away);
    											}
    											if(team == "93")
    											{
    												matches93++;
    												goals93 += parseInt(away);
    											}
    											if(team == "92")
    											{
    												matches92++;
    												goals92 += parseInt(away);
    											}
    											if(team == "nonCage")
    											{
    												matchesNonCage++;
    												goalsNonCage += parseInt(away);
    											}
    										}while(z < result.length && result[z] != "v" && result[z++] != " ");
    							}
    							else
    							{
    								console.log("Score of home: " + home);
    								console.log("Score of away: " + away);
    								console.log("The home team is the looser!!!");
    							}
    							
    							/********************************************************/
    							result = "";
    						}
    						else
    							occurence++;
    					}
    				}
    			}
    	}
    	else
    		for( i = 0 ; i < results.li.length ; ++i)
    			if(isScore(results.li[i].p))
    			{
    				matches++;
    				for( j = 0 ; j < results.li[i].p.length ; ++j)
    				{
    					if(results.li[i].p[j] != "|")
    						result += results.li[i].p[j];
	   					else
    					{
    						if(occurence == 1)
    						{
    							occurence = 0;
    							home = "";
    							away = "";
    							select = 1;
    							for( k = 0 ; k < result.length ; ++k )
    							{
    								if(result[k] != " ")
    									(select) ? home += result[k] : away += result[k];
    								else
    								{
    									if(!select)
    										break;
    									select = 0;
    									k += 2;
    								}
    							}
    							/**** Increase the counters ******************************/
    							k++;
    							
    							// Winner
    							if(parseInt(home) >= parseInt(away)) //scores
    							{
    								goals = goals + parseInt(home) + parseInt(away);
    								do{
    									team = "";
    									while(result[k] != "+" && result[k] != "v" && result[k] != " ")
    										team += result[k++];
    									if(team == "95")
    									{
    										matches95++;
    										goals95 += parseInt(home);
    										wins95++;
    									}
    									if(team == "94")
    									{
    										matches94++;
    										goals94 += parseInt(home);
    										wins94++;
    									}
    									if(team == "93")
    									{
    										matches93++;
    										goals93 += parseInt(home);
    										wins93++;
    									}
    									if(team == "92")
    									{
    										matches92++;
    										goals92 += parseInt(home);
    										wins92++;
    									}
    									if(team == "nonCage")
    									{
    										matchesNonCage++;
    										goalsNonCage += parseInt(home);
    										winsNonCage++;
    									}
    								}while(result[k] != "v" && result[k++] != " ");
    								for( z = k ; z < result.length ; ++z)
    									if(result[z] == "9" || result[z] == "μ")
    										do{
    											team = "";
    											while(result[z] != "+" && result[z] != "v" && result[z] != " " && z < result.length)
    												team += result[z++];
    											if(team == "95")
    											{
    												matches95++;
    												goals95 += parseInt(away);
    											}
    											if(team == "94")
    											{
    												matches94++;
    												goals94 += parseInt(away);
    											}
    											if(team == "93")
    											{
    												matches93++;
    												goals93 += parseInt(away);
    											}
    											if(team == "92")
    											{
    												matches92++;
    												goals92 += parseInt(away);
    											}
    											if(team == "nonCage")
    											{
    												matchesNonCage++;
    												goalsNonCage += parseInt(away);
    											}
    										}while(z < result.length && result[z] != "v" && result[z++] != " ");
    							}
    							else
    							{
    								console.log("Score of home: " + home);
    								console.log("Score of away: " + away);
    								console.log("The home team is the looser!!!");
    							}
    							
    							/********************************************************/
    							result = "";
    						}
    						else
    							occurence++;
    					}
    				}
    			}
    			$( "table" ).css("opacity", "1.0");
    			
    			// 95
    			if(month != -1)
    				$( "#monthCell").text(month);
    			if(!matches95)
    				$( "#w95" ).text(wins95 + " (" + (0).toFixed(1) + "%) ");
    			else
    				$( "#w95" ).text(wins95 + " (" + (wins95/matches95*100).toFixed(1) + "%) ");
    			$( "#g95" ).text(goals95 + " (" + (goals95/goals*100).toFixed(1) + "%) ");
    			$( "#m95" ).text(matches95 + " (" + (matches95/matches*100).toFixed(1) + "%) ");
    			
    			// 94
    			if(!matches94)
    				$( "#w94" ).text(wins94 + " (" + (0).toFixed(1) + "%) ");
    			else
    				$( "#w94" ).text(wins94 + " (" + (wins94/matches94*100).toFixed(1) + "%) ");
    			$( "#g94" ).text(goals94 + " (" + (goals94/goals*100).toFixed(1) + "%) ");
    			$( "#m94" ).text(matches94 + " (" + (matches94/matches*100).toFixed(1) + "%) ");
    			
    			// 93
    			if(!matches93)
    				$( "#w93" ).text(wins93 + " (" + (0).toFixed(1) + "%) ");
    			else
    				$( "#w93" ).text(wins93 + " (" + (wins93/matches93*100).toFixed(1) + "%) ");
    			$( "#g93" ).text(goals93 + " (" + (goals93/goals*100).toFixed(1) + "%) ");
    			$( "#m93" ).text(matches93 + " (" + (matches93/matches*100).toFixed(1) + "%) ");
    			
    			// 92
    			if(!matches92)
    				$( "#w92" ).text(wins92 + " (" + (0).toFixed(1) + "%) ");
    			else	
    				$( "#w92" ).text(wins92 + " (" + (wins92/matches92*100).toFixed(1) + "%) ");
    			$( "#g92" ).text(goals92 + " (" + (goals92/goals*100).toFixed(1) + "%) ");
    			$( "#m92" ).text(matches92 + " (" + (matches92/matches*100).toFixed(1) + "%) ");
    			
    			// nonCage
    			if(!matchesNonCage)
    				$( "#wNonC" ).text(winsNonCage + " (" + (w0).toFixed(1) + "%) ");
    			else
    				$( "#wNonC" ).text(winsNonCage + " (" + (winsNonCage/matchesNonCage*100).toFixed(1) + "%) ");
    			$( "#gNonC" ).text(goalsNonCage + " (" + (goalsNonCage/goals*100).toFixed(1) + "%) ");
    			$( "#mNonC" ).text(matchesNonCage + " (" + (matchesNonCage/matches*100).toFixed(1) + "%) ");
    			
    			// total
    			$( "#wTot" ).text(wins95 + wins94 + wins93 + wins92 + winsNonCage);
    			$( "#gTot" ).text(goals);
    			$( "#mTot" ).text(matches);
    			
    			$( "#tnxPic" ).css("opacity", "1.0");//.css("right", "0px").css("top", "700px;").css("position", "absolute");
    			
    			/*********** QUIZ ****************************/
    			
    			var maxGoalsTeam = max(goals95, goals94, goals93, goals92);
    			var minMatchesTeam = min(matches95, matches94, matches93, matches92);
    			var correctAnswers = 0;

    			(maxGoalsTeam == $( "#q1").val()) ? ($( "#a1").text(maxGoalsTeam).css("color", "#339933"), correctAnswers++) :  $( "#a1").text(maxGoalsTeam).css("color", "#FFCC00 ");
    			(minMatchesTeam == $( "#q2").val()) ? ($( "#a2").text(minMatchesTeam).css("color", "#339933"), correctAnswers++) :  $( "#a2").text(minMatchesTeam).css("color", "#FFCC00");
    			(2 == $( "#q3").val()) ? ($( "#a3").css("color", "#339933").css("opacity", "1.0"), correctAnswers++) :  $( "#a3").css("color", "#FFCC00").css("opacity", "1.0");
    			(5 == $( "#q4").val()) ? ($( "#a4").css("color", "#339933").css("opacity", "1.0"), correctAnswers++) :  $( "#a4").css("color", "#FFCC00").css("opacity", "1.0");
    			(5 == $( "#q5").val()) ? ($( "#a5").css("color", "#339933").css("opacity", "1.0"), correctAnswers++) :  $( "#a5").css("color", "#FFCC00").css("opacity", "1.0");
    			(4 == $( "#q6").val()) ? ($( "#a6").css("color", "#339933").css("opacity", "1.0"), correctAnswers++) :  $( "#a6").css("color", "#FFCC00").css("opacity", "1.0");
    			(1 == $( "#q7").val()) ? ($( "#a7").css("color", "#339933").css("opacity", "1.0"), correctAnswers++) :  $( "#a7").css("color", "#FFCC00").css("opacity", "1.0");
    			if(!correctAnswers)
    				$( "#scoreOfQuiz").text("  Score: " + correctAnswers + "/ 7...That's bad!!  ").focus();
    			else if(correctAnswers == 7 || correctAnswers == 6)
    				$( "#scoreOfQuiz").text("  Score: " + correctAnswers + "/ 7...BRAVO!! You are a κλουβίσιος person!  ").focus();
    			else
    				$( "#scoreOfQuiz").text("  Score: " + correctAnswers + "/ 7...Nothing to say.  ").focus();
	});
}


function checkMonth(){
	var input = $( "#month" ).val();
	if(input =="")
		return -1;
	if( (input == 'January') || (input == 'Ιανουάριος') || (input == 'Ιανουαριος') 
		|| (input == '1') || (input == "january") || (input == 'ιανουάριος') || (input == 'ιανουαριος') )
	{
		return 'January';
	}
	if( (input == 'February') || (input == 'Φεβρουάριος') || (input == 'Φεβρουαριος') 
		|| (input == '2') || (input == "february") || (input == 'φεβρουάριος') || (input == 'φεβρουαριος') )
	{
		return 'February';
	}
	if( (input == 'March') || (input == 'Μάρτιος') || (input == 'Μαρτιος') 
		|| (input == '3') || (input == "march") || (input == 'μάρτιος') || (input == 'μαρτιος') )
	{
		return 'March';
	}
	if( (input == 'April') || (input == 'Απρίλιος') || (input == 'Απριλιος') 
		|| (input == '4') || (input == "april") || (input == 'απρίλιος') || (input == 'απριλιος') )
	{
		return 'April';
	}
	if( (input == 'May') || (input == 'Μάιος') || (input == 'Μαιος') 
		|| (input == '5') || (input == "may") || (input == 'μάιος') || (input == 'μαιος') )
	{
		return 'May';
	}
	if( (input == 'June') || (input == 'Ιούνιος') || (input == 'Ιουνιος') 
		|| (input == '6') || (input == "june") || (input == 'ιούνιος') || (input == 'ιουνιος') )
	{
		return 'June';
	}
	if( (input == 'July') || (input == 'Ιούλιος') || (input == 'Ιουλιος') 
		|| (input == '7') || (input == "july") || (input == 'ιούλιος') || (input == 'ιουλιος') )
	{
		return 'July';
	}
	if( (input == 'August') || (input == 'Αύγουστος') || (input == 'Αυγουστος') 
		|| (input == '8') || (input == 'august') || (input == 'αύγουστος') || (input == 'αυγουστος') )
	{
		return 'August';
	}
	if( (input == 'September') || (input == 'Σεπτέμβριος') || (input == 'Σεπτεμβριος') 
		|| (input == '9') || (input == 'september') || (input == 'σεπτέμβριος') || (input == 'σεπτεμβριος') )
	{
		return 'September';
	}
	if( (input == 'October') || (input == 'Οκτώβριος') || (input == 'Οκτωβριος') 
		|| (input == '10') || (input == 'october') || (input == 'οκτώβριος') || (input == 'οκτωβριος') )
	{
		return 'October';
	}
	if( (input == 'November') || (input == 'Νοέμβριος') || (input == 'Νοεμβριος') 
		|| (input == '11') || (input == 'november') || (input == 'νοέμβριος') || (input == 'νοεμβριος') )
	{
		return 'November';
	}
	if( (input == 'December') || (input == 'Δεκέμβριος') || (input == 'Δεκεμβριος') 
		|| (input == '12') || (input == 'december') || (input == 'δεκέμβριος') || (input == 'δεκεμβριος') )
	{
		return 'December';
	}
	return 0;
}

function isScore(str){
	var i;
	for( i = 0 ; i < str.length ; ++i )
		if(str[i] == "|")
			return 1;
	return 0;		
}

function min(a, b, c, d){
	if(a <= b && a <= c && a <= d)
		return 95;
	if(b <= a && b <= c && b <= d)
		return 94;
	if(c <= b && c <= a && c <= d)
		return 93;
	if(d <= b && d <= c && d <= a)
		return 92;		
}

function max(a, b, c, d){
	if(a >= b && a >= c && a >= d)
		return 95;
	if(b >= a && b >= c && b >= d)
		return 94;
	if(c >= b && c >= a && c >= d)
		return 93;
	if(d >= b && d >= c && d >= a)
		return 92;		
}
