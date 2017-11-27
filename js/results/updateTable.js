var counter = 0;
var gw, // win goals
	gl; // lose goals

/* @param info - the name of the player */
function updateTable(info)
{
	if(counter == 11)
		counter = 0;
	if(!counter)
	{
		// score. For example, we have 2018, then the winning score was 20 and the lose score 18
		gw = info[0] + info[1];
		gl = info[2];
		if(typeof info[3] !== 'undefined') // we may have score of one digit (example 208, 8 for the losers)
			gl += info[3];
	}
	else
	{
		if(info == "nonCage" || info == "noncage" || info == "non")
		{
			counter++;
			return;
		}
		var wplayer = "#w" + info;
		var dplayer = "#d" + info;
		var gscplayer = "#gsc" + info;
		var gsuplayer = "#gsu" + info;
		var mplayer = "#m" + info;
		if(counter < 6)
		{
			// Winner
			$( wplayer ).text(parseInt($( wplayer ).text()) + 1);			// increase wins
			// let defeats unmodified
			$( gscplayer ).text(parseInt($( gscplayer ).text()) + parseInt(gw));	// increase goals scored
			$( gsuplayer ).text(parseInt($( gsuplayer ).text()) + parseInt(gl));	// increase goals suffered
			$( mplayer ).text(parseInt($( mplayer ).text()) + 1);			// increase matched played
		}
		else
		{
			// Defeated
			// let wins unmodified
			$( dplayer ).text(parseInt($( dplayer ).text()) + 1);			// increase defeats
			$( gscplayer ).text(parseInt($( gscplayer ).text()) + parseInt(gl));	// increase goals scored
			$( gsuplayer ).text(parseInt($( gsuplayer ).text()) + parseInt(gw));	// increase goals suffered
			$( mplayer ).text(parseInt($( mplayer ).text()) + 1);			// increase matched played
		}
	}
	counter++;
}
