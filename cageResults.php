<!DOCTYPE html>
<html style="height: 100%;" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title>Cage results(Klouvi/Κλουβί)</title>

	<meta name="description" content="Cage (Klouvi/Κλουβί)">
	<meta name="author" content="G. Samaras">
	<link rel="stylesheet" href="css/results/main.css" type="text/css">
	<link rel="stylesheet" href="css/results/tablePics.css" type="text/css">
	<script src="js/results/main.js"></script>
	<script src="js/results/updateTable.js"></script>
	<script src="js/results/quicksort.js"></script>
	<style>
		body{
			background: url("img/silverBall.jpg") no-repeat center center fixed; 
  			-webkit-background-size: cover;
  			-moz-background-size: cover;
  			-o-background-size: cover;
  			background-size: cover;
		}
	</style>
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAABIy7MA7l8EAK+JRwDGei4A0HIjAM10JgAA+/8AF+zmAOZlDQAA/v8A4mcQAONnEABzr4UA3GsWAKmLSwDdaxYA2m0ZAMB+NQCOnmoAr4dGACDm3wCMoG0A32kUANxrFwDZbRoA1m8dAKKPUgAT7usAQtC5ANRxIACMoG4AhqJxALqCPACkkVUA22sYAAD8/wAB/P8AGO3mANhtGwCclVsAAP//AEPOtwDVbx4A1m8eAGa3kwBluZYA6GQLAORmDgB2roMA4WgRAOJoEQDeahQAlZliAB3p4gC2gj4AP9K+AOZkDADLdSgACPT2AONmDwAg5d0A5GYPAMB/NgBusIcAOtbEAAb2+QBDzrkA4WgSADXYxwDFeS4AxnkuAN5qFQCsikoArYpKANtsGADcbBgAAP3/AMF9NACPnWkAI+bbAN5qFgC4gz0AMdrLACni1gDabBkAnpRZAGm2kQBewJ8Afql7AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGBgYQxYzERkYGBgYGBgYGBgYFydRVjUdShhKVBgYGBgYUEYoPD5AA0dDKisQGBgYGBAQMDQyFCFFRFMVPRgYGBgYGC9DCzceAkxXEgoYGBgYGBgYGAgtBz8oEwgmGBgYGBgYGBhDSCgJKAw4GBgYGBgYGBgYSwtSKChCMRgYGBgYGBgYSgU2HygoAAgYGBgYGBgYGFQrWBwjIyUgFhgYGBgYGBgYVC5OJAYJSUMYGBgYGBgYGBgzTUEoOkUPGBgYGBgYGBgYDTkbTxpDGBgYGBgYGBgYGEMOKCwBJhgYGBgYGBgYGBgiBClVQxgYGBgYGBgYGBgYGFQ7RyYYGBgYGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=" rel="icon" type="image/x-icon" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
</head>
<body>
<table id="resultsTable" border="1">
	<tr>
		<th>Picture</th>
		<th>Results</th>
		<th><a href="#" style="text-decoration: none;color: black;cursor:help;" title="Team points"><b>PTS</b></a></th>
  		<th><a href="#" style="text-decoration: none;color: #4D4D4D;cursor:help;" title="Wins(+2pts)">W</a></th>
  		<th><a href="#" style="text-decoration: none;color: #4D4D4D;cursor:help;" title="Losses(-1pts)">L</a></th>
  		<th><a href="#" style="text-decoration: none;color: #4D4D4D;cursor:help;" title="Goals for">GF</a></th>
  		<th><a href="#" style="text-decoration: none;color: #4D4D4D;cursor:help;" title="Goals against">GA</a></th>
		<th><a href="#" style="text-decoration: none;color: #4D4D4D;cursor:help;" title="Goals difference">GD</a></th>
  		<th><a href="#" style="text-decoration: none;color: #4D4D4D;cursor:help;" title="Games played">GP</a></th>
	</tr>
	<tr id = "Samaras">
		<th><img id="picTable" src="players/players_prof/sam_henry.jpeg" alt="Samaras"></th>
		<th>Samaras</th>
		<td id="pSamaras">0</td>
		<td id="wSamaras">0</td>
		<td id="dSamaras">0</td>
		<td id="gscSamaras">0</td>
		<td id="gsuSamaras">0</td>
		<td id="gdSamaras">0</td>
		<td id="mSamaras">0</td>
	</tr>
	<tr id = "Manthos">
		<th><img id="picTable" src="players/manthos.jpg" alt="Manthos"></th>
		<th>Manthos</th>
		<td id="pManthos">0</td>
		<td id="wManthos">0</td>
		<td id="dManthos">0</td>
		<td id="gscManthos">0</td>
		<td id="gsuManthos">0</td>
		<td id="gdManthos">0</td>
		<td id="mManthos">0</td>
	</tr>
	<tr id = "Johny">
		<th><img id="picTable" src="players/johny.jpg" alt="johny"></th>
		<th>Johny</th>
		<td id="pJohny">0</td>
		<td id="wJohny">0</td>
		<td id="dJohny">0</td>
		<td id="gscJohny">0</td>
		<td id="gsuJohny">0</td>
		<td id="gdJohny">0</td>
		<td id="mJohny">0</td>
	</tr>
	<tr id = "Alex">
		<th><img id="picTable" src="players/alex.jpg" alt="Alex"></th>
		<th>Alex</th>
		<td id="pAlex">0</td>
		<td id="wAlex">0</td>
		<td id="dAlex">0</td>
		<td id="gscAlex">0</td>
		<td id="gsuAlex">0</td>
		<td id="gdAlex">0</td>
		<td id="mAlex">0</td>
	</tr>
	<tr id = "Tsaki">
		<th><img id="picTable" src="players/tsaki.JPG" alt="tsaki"></th>
		<th>Tsaki</th>
		<td id="pTsaki">0</td>
		<td id="wTsaki">0</td>
		<td id="dTsaki">0</td>
		<td id="gscTsaki">0</td>
		<td id="gsuTsaki">0</td>
		<td id="gdTsaki">0</td>
		<td id="mTsaki">0</td>
	</tr>
	<tr id = "Dimitriadis">
		<th><img id="picTable" src="data:image/jpeg;base64,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" alt="dimitriadis"></th>
		<th>Dimitriadis</th>
		<td id="pDimitriadis">0</td>
		<td id="wDimitriadis">0</td>
		<td id="dDimitriadis">0</td>
		<td id="gscDimitriadis">0</td>
		<td id="gsuDimitriadis">0</td>
		<td id="gdDimitriadis">0</td>
		<td id="mDimitriadis">0</td>
	</tr>
	<tr id = "Karavousanos">
		<th><img id="picTable" src="players/players_prof/kar_mit.jpg" alt="karavousanos"></th>
		<th>Karavousanos</th>
		<td id="pKaravousanos">0</td>
		<td id="wKaravousanos">0</td>
		<td id="dKaravousanos">0</td>
		<td id="gscKaravousanos">0</td>
		<td id="gsuKaravousanos">0</td>
		<td id="gdKaravousanos">0</td>
		<td id="mKaravousanos">0</td>
	</tr>
	<tr id = "Mavrelis">
	  <th><img id="picTable" src="players/players_prof/mivi.jpg" alt="mavrelis"></th>
		<th>Mavrelis</th>
		<td id="pMavrelis">0</td>
		<td id="wMavrelis">0</td>
		<td id="dMavrelis">0</td>
		<td id="gscMavrelis">0</td>
		<td id="gsuMavrelis">0</td>
		<td id="gdMavrelis">0</td>
		<td id="mMavrelis">0</td>
	</tr>
	<tr id = "Vergis">
		<th><img id="picTable" src="players/vergis.jpg" alt="vergis"></th>
		<th>Vergis</th>
		<td id="pVergis">0</td>
		<td id="wVergis">0</td>
		<td id="dVergis">0</td>
		<td id="gscVergis">0</td>
		<td id="gsuVergis">0</td>
		<td id="gdVergis">0</td>
		<td id="mVergis">0</td>
	</tr>
	<tr id = "Borboudakis">
		<th><img id="picTable" src="players/borbudakis.jpg" alt="borbou"></th>
		<th>Borboudakis</th>
		<td id="pBorboudakis">0</td>
		<td id="wBorboudakis">0</td>
		<td id="dBorboudakis">0</td>
		<td id="gscBorboudakis">0</td>
		<td id="gsuBorboudakis">0</td>
		<td id="gdBorboudakis">0</td>
		<td id="mBorboudakis">0</td>
	</tr>
	<tr id = "Theodosis">
		<th><img id="picTable" src="players/players_prof/teo_maldini.jpg" alt="teo"></th>
		<th>Theodosis</th>
		<td id="pTheodosis">0</td>
		<td id="wTheodosis">0</td>
		<td id="dTheodosis">0</td>
		<td id="gscTheodosis">0</td>
		<td id="gsuTheodosis">0</td>
		<td id="gdTheodosis">0</td>
		<td id="mTheodosis">0</td>
	</tr>
	<tr id = "Philiopoulos">
		<th><img id="picTable" src="players/players_prof/fil.jpg" alt="fil"></th>
		<th>Philiopoulos</th>
		<td id="pPhiliopoulos">0</td>
		<td id="wPhiliopoulos">0</td>
		<td id="dPhiliopoulos">0</td>
		<td id="gscPhiliopoulos">0</td>
		<td id="gsuPhiliopoulos">0</td>
		<td id="gdPhiliopoulos">0</td>
		<td id="mPhiliopoulos">0</td>
	</tr>
	<tr id = "Stathogiannakis">
		<th><img id="picTable" src="players/swthrhs.jpg" alt="swthrhs"></th>
		<th>Stathogiannakis</th>
		<td id="pStathogiannakis">0</td>
		<td id="wStathogiannakis">0</td>
		<td id="dStathogiannakis">0</td>
		<td id="gscStathogiannakis">0</td>
		<td id="gsuStathogiannakis">0</td>
		<td id="gdStathogiannakis">0</td>
		<td id="mStathogiannakis">0</td>
	</tr>
	<tr id = "Chandakas">
		<th><img id="picTable" src="players/chandakas.jpg" alt="chandakas"></th>
		<th>Chandakas</th>
		<td id="pChandakas">0</td>
		<td id="wChandakas">0</td>
		<td id="dChandakas">0</td>
		<td id="gscChandakas">0</td>
		<td id="gsuChandakas">0</td>
		<td id="gdChandakas">0</td>
		<td id="mChandakas">0</td>
	</tr>
	<tr id = "Tsafos">
		<th><img id="picTable" src="players/tsafos.jpg" alt="tsafos"></th>
		<th>Tsafos</th>
		<td id="pTsafos">0</td>
		<td id="wTsafos">0</td>
		<td id="dTsafos">0</td>
		<td id="gscTsafos">0</td>
		<td id="gsuTsafos">0</td>
		<td id="gdTsafos">0</td>
		<td id="mTsafos">0</td>
	</tr>
       <tr id = "Kokkoris">
		<th><img id="picTable" src="players/kokkoris.jpg" alt="kokkoris"></th>
		<th>Kokkoris</th>
		<td id="pKokkoris">0</td>
		<td id="wKokkoris">0</td>
		<td id="dKokkoris">0</td>
		<td id="gscKokkoris">0</td>
		<td id="gsuKokkoris">0</td>
		<td id="gdKokkoris">0</td>
		<td id="mKokkoris">0</td>
	</tr>
	<tr id = "Pavlos">
		<th><img id="picTable" src="players/pavlos.jpg" alt="pavlos"></th>
		<th>Pavlos</th>
		<td id="pPavlos">0</td>
		<td id="wPavlos">0</td>
		<td id="dPavlos">0</td>
		<td id="gscPavlos">0</td>
		<td id="gsuPavlos">0</td>
		<td id="gdPavlos">0</td>
		<td id="mPavlos">0</td>
	</tr>
	<tr id = "Daniel">
		<th><img id="picTable" src="players/daniel.jpg" alt="daniel"></th>
		<th>Daniel</th>
		<td id="pDaniel">0</td>
		<td id="wDaniel">0</td>
		<td id="dDaniel">0</td>
		<td id="gscDaniel">0</td>
		<td id="gsuDaniel">0</td>
		<td id="gdDaniel">0</td>
		<td id="mDaniel">0</td>
	</tr>
	<tr id = "Kiousis">
		<th><img id="picTable" src="players/kiousis.jpg" alt="kiousis"></th>
		<th>Kiousis</th>
		<td id="pKiousis">0</td>
		<td id="wKiousis">0</td>
		<td id="dKiousis">0</td>
		<td id="gscKiousis">0</td>
		<td id="gsuKiousis">0</td>
		<td id="gdKiousis">0</td>
		<td id="mKiousis">0</td>
	</tr>
	<tr id = "Fiorel">
		<th><img id="picTable" src="players/players_prof/fiorel.jpg" alt="fiorel"></th>
		<th>Fiorel</th>
		<td id="pFiorel">0</td>
		<td id="wFiorel">0</td>
		<td id="dFiorel">0</td>
		<td id="gscFiorel">0</td>
		<td id="gsuFiorel">0</td>
		<td id="gdFiorel">0</td>
		<td id="mFiorel">0</td>
	</tr>
	<tr id = "Kwstas">
		<th><img id="picTable" src="players/players_prof/kwstas_gat.jpg" alt="lazidis"></th>
		<th>Kwstas</th>
		<td id="pKwstas">0</td>
		<td id="wKwstas">0</td>
		<td id="dKwstas">0</td>
		<td id="gscKwstas">0</td>
		<td id="gsuKwstas">0</td>
		<td id="gdKwstas">0</td>
		<td id="mKwstas">0</td>
	</tr>
	<tr id = "Kalaremas">
		<th><img id="picTable" src="players/kalaremas.jpg" alt="kalaremas"></th>
		<th>Kalaremas</th>
		<td id="pKalaremas">0</td>
		<td id="wKalaremas">0</td>
		<td id="dKalaremas">0</td>
		<td id="gscKalaremas">0</td>
		<td id="gsuKalaremas">0</td>
		<td id="gdKalaremas">0</td>
		<td id="mKalaremas">0</td>
	</tr>
	<tr id = "Argiropoulos">
		<th><img id="picTable" src="players/silver.jpg" alt="silver"></th>
		<th>Argiropoulos</th>
		<td id="pArgiropoulos">0</td>
		<td id="wArgiropoulos">0</td>
		<td id="dArgiropoulos">0</td>
		<td id="gscArgiropoulos">0</td>
		<td id="gsuArgiropoulos">0</td>
		<td id="gdArgiropoulos">0</td>
		<td id="mArgiropoulos">0</td>
	</tr>
	<tr id = "Stathopoulos">
		<th><img id="picTable" src="players/players_prof/st_tsiartas.jpg" alt="st"></th>
		<th>Stathopoulos</th>
		<td id="pStathopoulos">0</td>
		<td id="wStathopoulos">0</td>
		<td id="dStathopoulos">0</td>
		<td id="gscStathopoulos">0</td>
		<td id="gsuStathopoulos">0</td>
		<td id="gdStathopoulos">0</td>
		<td id="mStathopoulos">0</td>
	</tr>
	<tr id = "Kostarikis">
		<th><img id="picTable" src="players/costarikis.jpg" alt="stamatopoulos"></th>
		<th>Kostarikis</th>
		<td id="pKostarikis">0</td>
		<td id="wKostarikis">0</td>
		<td id="dKostarikis">0</td>
		<td id="gscKostarikis">0</td>
		<td id="gsuKostarikis">0</td>
		<td id="gdKostarikis">0</td>
		<td id="mKostarikis">0</td>
	</tr>
	<tr id = "Flegkas">
		<th><img id="picTable" src="players/flegkas.jpg" alt="flegkas"></th>
		<th>Flegkas</th>
		<td id="pFlegkas">0</td>
		<td id="wFlegkas">0</td>
		<td id="dFlegkas">0</td>
		<td id="gscFlegkas">0</td>
		<td id="gsuFlegkas">0</td>
		<td id="gdFlegkas">0</td>
		<td id="mFlegkas">0</td>
	</tr>
	<tr id = "Vasiliadis">
		<th><img id="picTable" src="players/vasiliadis.jpg" alt="vasiliadis"></th>
		<th>Vasiliadis</th>
		<td id="pVasiliadis">0</td>
		<td id="wVasiliadis">0</td>
		<td id="dVasiliadis">0</td>
		<td id="gscVasiliadis">0</td>
		<td id="gsuVasiliadis">0</td>
		<td id="gdVasiliadis">0</td>
		<td id="mVasiliadis">0</td>
	</tr>
	<tr id = "Skouteris">
		<th><img id="picTable" src="players/skout.jpg" alt="skout"></th>
		<th>Skouteris</th>
		<td id="pSkouteris">0</td>
		<td id="wSkouteris">0</td>
		<td id="dSkouteris">0</td>
		<td id="gscSkouteris">0</td>
		<td id="gsuSkouteris">0</td>
		<td id="gdSkouteris">0</td>
		<td id="mSkouteris">0</td>
	</tr>
	<tr id = "T_Tsafos">
		<th><img id="picTable" src="players/tsafos_jr.jpg" alt="tsafos_jr"></th>
		<th>T_Tsafos</th>
		<td id="pT_Tsafos">0</td>
		<td id="wT_Tsafos">0</td>
		<td id="dT_Tsafos">0</td>
		<td id="gscT_Tsafos">0</td>
		<td id="gsuT_Tsafos">0</td>
		<td id="gdT_Tsafos">0</td>
		<td id="mT_Tsafos">0</td>
	</tr>
	<tr id = "T_Samaras">
		<th><img id="picTable" src="players/teo_sam.jpg" alt="teo_sam"></th>
		<th>T_Samaras</th>
		<td id="pT_Samaras">0</td>
		<td id="wT_Samaras">0</td>
		<td id="dT_Samaras">0</td>
		<td id="gscT_Samaras">0</td>
		<td id="gsuT_Samaras">0</td>
		<td id="gdT_Samaras">0</td>
		<td id="mT_Samaras">0</td>
	</tr>
	<tr id = "Tsilikas">
		<th><img id="picTable" src="players/tsilikas.jpg" alt="tsilikas"></th>
		<th>Tsilikas</th>
		<td id="pTsilikas">0</td>
		<td id="wTsilikas">0</td>
		<td id="dTsilikas">0</td>
		<td id="gscTsilikas">0</td>
		<td id="gsuTsilikas">0</td>
		<td id="gdTsilikas">0</td>
		<td id="mTsilikas">0</td>
	</tr>
	<tr id = "Avranas">
		<th><img id="picTable" src="players/avranas.jpg" alt="avranas"></th>
		<th>Avranas</th>
		<td id="pAvranas">0</td>
		<td id="wAvranas">0</td>
		<td id="dAvranas">0</td>
		<td id="gscAvranas">0</td>
		<td id="gsuAvranas">0</td>
		<td id="gdAvranas">0</td>
		<td id="mAvranas">0</td>
	</tr>
	<tr id = "Serkedakis">
		<th><img id="picTable" src="players/serke.jpg" alt="serke"></th>
		<th>Serkedakis</th>
		<td id="pSerkedakis">0</td>
		<td id="wSerkedakis">0</td>
		<td id="dSerkedakis">0</td>
		<td id="gscSerkedakis">0</td>
		<td id="gsuSerkedakis">0</td>
		<td id="gdSerkedakis">0</td>
		<td id="mSerkedakis">0</td>
	</tr>
	<tr id = "Sotiropoulos">
		<th><img id="picTable" src="players/sot.jpg" alt="sot"></th>
		<th>Sotiropoulos</th>
		<td id="pSotiropoulos">0</td>
		<td id="wSotiropoulos">0</td>
		<td id="dSotiropoulos">0</td>
		<td id="gscSotiropoulos">0</td>
		<td id="gsuSotiropoulos">0</td>
		<td id="gdSotiropoulos">0</td>
		<td id="mSotiropoulos">0</td>
	</tr>
	<tr id = "Sp_Sotiropoulos">
                <th><img id="picTable" src="players/sp_sotiropoulos.jpg" alt="sp_sot"></th>
                <th>Sp_Sotiropoulos</th>
                <td id="pSp_Sotiropoulos">0</td>
                <td id="wSp_Sotiropoulos">0</td>
                <td id="dSp_Sotiropoulos">0</td>
                <td id="gscSp_Sotiropoulos">0</td>
                <td id="gsuSp_Sotiropoulos">0</td>
                <td id="gdSp_Sotiropoulos">0</td>
                <td id="mSp_Sotiropoulos">0</td>
        </tr>
	<tr id = "Gouletas">
		<th><img id="picTable" src="players/gouletas.jpg" alt="gouletas"></th>
		<th>Gouletas</th>
		<td id="pGouletas">0</td>
		<td id="wGouletas">0</td>
		<td id="dGouletas">0</td>
		<td id="gscGouletas">0</td>
		<td id="gsuGouletas">0</td>
		<td id="gdGouletas">0</td>
		<td id="mGouletas">0</td>
	</tr>
	<tr id = "Chrisikos">
		<th><img id="picTable" src="players/crhisikos.jpg" alt="chrisikos"></th>
		<th>Chrisikos</th>
		<td id="pChrisikos">0</td>
		<td id="wChrisikos">0</td>
		<td id="dChrisikos">0</td>
		<td id="gscChrisikos">0</td>
		<td id="gsuChrisikos">0</td>
		<td id="gdChrisikos">0</td>
		<td id="mChrisikos">0</td>
	</tr>
	<tr id = "Daoutis">
		<th><img id="picTable" src="players/daouthsBill.jpg" alt="daoutis"></th>
		<th>Daoutis</th>
		<td id="pDaoutis">0</td>
		<td id="wDaoutis">0</td>
		<td id="dDaoutis">0</td>
		<td id="gscDaoutis">0</td>
		<td id="gsuDaoutis">0</td>
		<td id="gdDaoutis">0</td>
		<td id="mDaoutis">0</td>
	</tr>
	<tr id = "Gkotsis">
		<th><img id="picTable" src="players/gotsis.jpg" alt="gotsis"></th>
		<th>Gkotsis</th>
		<td id="pGkotsis">0</td>
		<td id="wGkotsis">0</td>
		<td id="dGkotsis">0</td>
		<td id="gscGkotsis">0</td>
		<td id="gsuGkotsis">0</td>
		<td id="gdGkotsis">0</td>
		<td id="mGkotsis">0</td>
	</tr>
	<tr id = "Kalnte">
		<th><img id="picTable" src="players/no_pic.gif" alt="Kalnte"></th>
		<th>Kalnte</th>
		<td id="pKalnte">0</td>
		<td id="wKalnte">0</td>
		<td id="dKalnte">0</td>
		<td id="gscKalnte">0</td>
		<td id="gsuKalnte">0</td>
		<td id="gdKalnte">0</td>
		<td id="mKalnte">0</td>
	</tr>
	<tr id = "Moustakis">
		<th><img id="picTable" src="players/players_prof/mous_delpiero.jpeg" alt="mustakhs"></th>
		<th>Moustakis</th>
		<td id="pMoustakis">0</td>
		<td id="wMoustakis">0</td>
		<td id="dMoustakis">0</td>
		<td id="gscMoustakis">0</td>
		<td id="gsuMoustakis">0</td>
		<td id="gdMoustakis">0</td>
		<td id="mMoustakis">0</td>
	</tr>
	<tr id = "Dinas">
		<th><img id="picTable" src="players/dinas.jpg" alt="Dinas"></th>
		<th>Dinas</th>
		<td id="pDinas">0</td>
		<td id="wDinas">0</td>
		<td id="dDinas">0</td>
		<td id="gscDinas">0</td>
		<td id="gsuDinas">0</td>
		<td id="gdDinas">0</td>
		<td id="mDinas">0</td>
	</tr>
	<tr id = "Filippou">
		<th><img id="picTable" src="http://gsamaras.files.wordpress.com/2013/07/juventus.jpg?w=824" alt="Filippou"></th>
		<th>Filippou</th>
		<td id="pFilippou">0</td>
		<td id="wFilippou">0</td>
		<td id="dFilippou">0</td>
		<td id="gscFilippou">0</td>
		<td id="gsuFilippou">0</td>
		<td id="gdFilippou">0</td>
		<td id="mFilippou">0</td>
	</tr>
	<tr id = "Spiropoulos">
		<th><img id="picTable" src="players/spiropoulos.jpg" alt="Spiropoulos"></th>
		<th>Spiropoulos</th>
		<td id="pSpiropoulos">0</td>
		<td id="wSpiropoulos">0</td>
		<td id="dSpiropoulos">0</td>
		<td id="gscSpiropoulos">0</td>
		<td id="gsuSpiropoulos">0</td>
		<td id="gdSpiropoulos">0</td>
		<td id="mSpiropoulos">0</td>
	</tr>
	<tr id = "Panagiotidis">
		<th><img id="picTable" src="players/panagiotidis.jpg" alt="Panagiotidis"></th>
		<th>Panagiotidis</th>
		<td id="pPanagiotidis">0</td>
		<td id="wPanagiotidis">0</td>
		<td id="dPanagiotidis">0</td>
		<td id="gscPanagiotidis">0</td>
		<td id="gsuPanagiotidis">0</td>
		<td id="gdPanagiotidis">0</td>
		<td id="mPanagiotidis">0</td>
	</tr>
	<tr id = "Yiannis">
		<th><img id="picTable" src="players/yiannis.jpg" alt="Yiannis"></th>
		<th>Yiannis</th>
		<td id="pYiannis">0</td>
		<td id="wYiannis">0</td>
		<td id="dYiannis">0</td>
		<td id="gscYiannis">0</td>
		<td id="gsuYiannis">0</td>
		<td id="gdYiannis">0</td>
		<td id="mYiannis">0</td>
	</tr>
	<tr id = "Bill">
		<th><img id="picTable" src="players/daouthsBill.jpg" alt="Papadimitropoulos"></th>
		<th>Bill</th>
		<td id="pBill">0</td>
		<td id="wBill">0</td>
		<td id="dBill">0</td>
		<td id="gscBill">0</td>
		<td id="gsuBill">0</td>
		<td id="gdBill">0</td>
		<td id="mBill">0</td>
	</tr>
	        <tr id = "Mariglis">
                <th><img id="picTable" src="players/players_prof/mar_doc.jpg" alt="Mariglis"></th>
                <th>Mariglis</th>
                <td id="pMariglis">0</td>
                <td id="wMariglis">0</td>
                <td id="dMariglis">0</td>
                <td id="gscMariglis">0</td>
                <td id="gsuMariglis">0</td>
                <td id="gdMariglis">0</td>
                <td id="mMariglis">0</td>
        </tr>
	<tr id = "Kastanias">
                <th><img id="picTable" src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Ryan_Giggs_vs_MLS_All_Stars_2010.jpg/450px-Ryan_Giggs_vs_MLS_All_Stars_2010.jpg" alt="Kastanias"></th>
                <th>Kastanias</th>
                <td id="pKastanias">0</td>
                <td id="wKastanias">0</td>
                <td id="dKastanias">0</td>
                <td id="gscKastanias">0</td>
                <td id="gsuKastanias">0</td>
                <td id="gdKastanias">0</td>
                <td id="mKastanias">0</td>
        </tr>
	<tr id = "Yiannaras">
		<th><img id="picTable" src="players/no_pic.gif" alt="Mv"></th>
                <th>Yiannaras</th>
                <td id="pYiannaras">0</td>
                <td id="wYiannaras">0</td>
                <td id="dYiannaras">0</td>
                <td id="gscYiannaras">0</td>
                <td id="gsuYiannaras">0</td>
                <td id="gdYiannaras">0</td>
                <td id="mYiannaras">0</td>
        </tr>
    	<tr id = "Chalkias">
                <th><img id="picTable" src="players/xlk.jpg" alt="Chalkias"</th>
                <th>Chalkias</th>
                <td id="pChalkias">0</td>
                <td id="wChalkias">0</td>
                <td id="dChalkias">0</td>
                <td id="gscChalkias">0</td>
                <td id="gsuChalkias">0</td>
                <td id="gdChalkias">0</td>
                <td id="mChalkias">0</td>
        </tr>
	<tr id = "N_Skouteris">
                <th><img id="picTable" src="players/no_pic.gif" alt ="N_Skouteris"</th>
                <th>N_Skouteris</th>
                <td id="pN_Skouteris">0</td>
                <td id="wN_Skouteris">0</td>
                <td id="dN_Skouteris">0</td>
                <td id="gscN_Skouteris">0</td>
                <td id="gsuN_Skouteris">0</td>
                <td id="gdN_Skouteris">0</td>
                <td id="mN_Skouteris">0</td>
        </tr>
	<tr id = "Protogiros">
                <th><img id="picTable" src="players/protogiros.jpg" alt="Protogiros"</th>
                <th>Protogiros</th>
                <td id="pProtogiros">0</td>
                <td id="wProtogiros">0</td>
                <td id="dProtogiros">0</td>
                <td id="gscProtogiros">0</td>
                <td id="gsuProtogiros">0</td>
                <td id="gdProtogiros">0</td>
                <td id="mProtogiros">0</td>
        </tr>
	<tr id = "Apostolopoulos">
		<th><img id="picTable" src="players/players_prof/apostolo_terry.jpg" alt="Apostolopoulos"></th>
                <th>Apostolopoulos</th>
                <td id="pApostolopoulos">0</td>
                <td id="wApostolopoulos">0</td>
                <td id="dApostolopoulos">0</td>
                <td id="gscApostolopoulos">0</td>
                <td id="gsuApostolopoulos">0</td>
                <td id="gdApostolopoulos">0</td>
                <td id="mApostolopoulos">0</td>
        </tr>
	<tr id = "Apostolakis">
                <th><img id="picTable" src="players/no_pic.gif" alt="Apostolakis"></th>
                <th>Apostolakis</th>
                <td id="pApostolakis">0</td>
                <td id="wApostolakis">0</td>
                <td id="dApostolakis">0</td>
                <td id="gscApostolakis">0</td>
                <td id="gsuApostolakis">0</td>
                <td id="gdApostolakis">0</td>
                <td id="mApostolakis">0</td>
        </tr>
	<tr id = "Skopelitis">
                <th><img id="picTable" src="players/no_pic.gif" alt="skopelitis"></th>
                <th>Skopelitis</th>
                <td id="pSkopelitis">0</td>
                <td id="wSkopelitis">0</td>
                <td id="dSkopelitis">0</td>
                <td id="gscSkopelitis">0</td>
                <td id="gsuSkopelitis">0</td>
                <td id="gdSkopelitis">0</td>
                <td id="mSkopelitis">0</td>
        </tr>
	<tr id = "Pappas">
                <th><img id="picTable" src="https://scontent-a-ams.xx.fbcdn.net/hphotos-prn2/t31.0-8/q83/s960x960/1398614_703365026360230_368674787_o.jpg" alt="pappas"></th>
                <th>Pappas</th>
                <td id="pPappas">0</td>
                <td id="wPappas">0</td>
                <td id="dPappas">0</td>
                <td id="gscPappas">0</td>
                <td id="gsuPappas">0</td>
                <td id="gdPappas">0</td>
                <td id="mPappas">0</td>
        </tr>
<tr id = "Drogitis">
	<th><img id="picTable" src="players/drogitis.jpg" alt="drogitis"></th>
                <th>Drogitis</th>
                <td id="pDrogitis">0</td>
                <td id="wDrogitis">0</td>
                <td id="dDrogitis">0</td>
                <td id="gscDrogitis">0</td>
                <td id="gsuDrogitis">0</td>
                <td id="gdDrogitis">0</td>
                <td id="mDrogitis">0</td>
</tr>
<tr id = "Fanis">
	<th><img id="picTable" src="players/fanis.jpg" alt="fanis"></th>
                <th>Fanis</th>
                <td id="pFanis">0</td>
                <td id="wFanis">0</td>
                <td id="dFanis">0</td>
                <td id="gscFanis">0</td>
                <td id="gsuFanis">0</td>
                <td id="gdFanis">0</td>
                <td id="mFanis">0</td>
</tr>
<tr id = "L_Oikonomo">
	<th><img id="picTable" src="players/L.jpg" alt="L"></th>
                <th>L_Oikonomo</th>
                <td id="pL_Oikonomo">0</td>
                <td id="wL_Oikonomo">0</td>
                <td id="dL_Oikonomo">0</td>
                <td id="gscL_Oikonomo">0</td>
                <td id="gsuL_Oikonomo">0</td>
                <td id="gdL_Oikonomo">0</td>
                <td id="mL_Oikonomo">0</td>
</tr>
<tr id = "Skrekis">
	<th><img id="picTable" src="players/skrekis.jpg" alt="L"></th>
                <th>Skrekis</th>
                <td id="pSkrekis">0</td>
                <td id="wSkrekis">0</td>
                <td id="dSkrekis">0</td>
                <td id="gscSkrekis">0</td>
                <td id="gsuSkrekis">0</td>
                <td id="gdSkrekis">0</td>
                <td id="mSkrekis">0</td>
</tr>
<tr id = "kots7">
	<th><img id="picTable" src="players/kots7.jpg" alt="kots7"></th>
                <th>kots7</th>
                <td id="pkots7">0</td>
                <td id="wkots7">0</td>
                <td id="dkots7">0</td>
                <td id="gsckots7">0</td>
                <td id="gsukots7">0</td>
                <td id="gdkots7">0</td>
                <td id="mkots7">0</td>
</tr>
	<tr id = "Tom92">
        <th><img id="picTable" src="http://cgi.di.uoa.gr/~grad1459/test/scouter/img/players/tom.jpg" alt="tom92"></th>
                <th>Tom92</th>
                <td id="pTom92">0</td>
                <td id="wTom92">0</td>
                <td id="dTom92">0</td>
                <td id="gscTom92">0</td>
                <td id="gsuTom92">0</td>
                <td id="gdTom92">0</td>
                <td id="mTom92">0</td>
	</tr>

</table>
<br>
</br>
<?php
	# Read input

  	if( $_GET["name"] )
  	{
		# If password is correct
		$pass_user = substr($_GET["name"], 0, 2);
		if(strcmp($pass_user, "nn") == 0)
		{

			# Write in file

			$filename = "results.txt";
			$file = fopen( $filename, "a" );
			if( $file == false )
			{
   				echo ( "Error in opening new file" );
   				exit();
			}

			# parse the string, to discard the password. $data will contain the info of the match

			$inputLength = strlen($_GET['name']);
			$data = "";
			for ($i = 3; $i <= $inputLength; $i++)
				// this if is for not writting nonCage players in the results.txt
				/*if($_GET['name'][$i] == "n" && $_GET['name'][$i + 1] == "o" && $_GET['name'][$i + 2] == "n" && ($_GET['name'][$i + 3] == "C" ||
					$_GET['name'][$i + 3] == "c" ) && $_GET['name'][$i + 4] == "a" && $_GET['name'][$i + 5] == "g" && $_GET['name'][$i + 6] == "e")
					// nonCage player, skip him
					$i += 6;
				else*/
    				$data = $data . $_GET['name'][$i];
			fwrite( $file,  $data . "\n");
			fclose( $file );
		}
		else
		{
			echo ( "Invalid password, exiting..." );
   			exit();
		}
   	}
?>


<?php
	/* Read file */
	$filename = "results.txt";
	$file = fopen( $filename, "r" );
	if( $file == false )
	{
   		echo ( "Error in opening file" );
   		exit();
	}
	$filesize = filesize( $filename );
	$filetext = fread( $file, $filesize );

	fclose( $file );
	/* Done reading file */

	/* Use tab and newline as tokenizing characters as well  */
	$tok = strtok($filetext, " \n\t");

	while ($tok !== false)
	{
    		/*echo "Word=$tok<br />";*/  /* print token, for testing*/
		/* calls javascript function named updateTable */
		echo '<script>updateTable("'.$tok.'") </script>';
    		$tok = strtok(" \n\t");
	}
?>
</body>

<footer>
<div id="ThanksDITmsg">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;George Samaras and the people of <i>Κλουβί</i>&nbsp;&nbsp;<br>
	&nbsp;&nbsp;&nbsp;would like to thank DIT, University of Athens (UOA),<br>
	&nbsp;&nbsp;&nbsp;for giving Κλουβί, a domain, for its apps to run.&nbsp;&nbsp;&nbsp;<br>
</div>

<!-- Read input -->
<form id="updateForm" action="<?php $_PHP_SELF ?>" method="GET">
  	Pass 2018 names<input type="text" name="name" />
   	<input type="submit" />
</form>
<!-- Done reading input  -->


<a href="http://jigsaw.w3.org/css-validator/check/referer">
	<img id="cssOk1"
       	src="http://jigsaw.w3.org/css-validator/images/vcss"
            	alt="Valid CSS!" />
</a>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
	<img id="cssOk2"
        	src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        	alt="Valid CSS!" />
</a>

<i id="credits">Tnx  to C.Ioannou & G.Tsabounaris</i>
<i id="pageCreator">Page created by <strong>G. Samaras (DIT)</strong> (2013) ©2014 George Samaras All Rights Reserved</i>
</footer>

<script>
	var w,l, pts = new Array(), points;
	w = $("#wSamaras").text();	w = parseInt(w);	l = $("#dSamaras").text();     l = parseInt(l);
	points = w * 2 + l * -1;	if(points < 0) points = 0;
	$("#pSamaras").text( points );
	$("#gdSamaras").text( $("#gscSamaras").text() - $("#gsuSamaras").text() );
        pts[0] = points;
	w = $("#wManthos").text();      w = parseInt(w);        l = $("#dManthos").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pManthos").text( points );
        $("#gdManthos").text( $("#gscManthos").text() - $("#gsuManthos").text() );
        pts[1] = points;
	w = $("#wJohny").text();      w = parseInt(w);        l = $("#dJohny").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pJohny").text( points );
        $("#gdJohny").text( $("#gscJohny").text() - $("#gsuJohny").text() );
        pts[2] = points;
	w = $("#wAlex").text();      w = parseInt(w);        l = $("#dAlex").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pAlex").text( points );
        $("#gdAlex").text( $("#gscAlex").text() - $("#gsuAlex").text() );
        pts[3] = points;
	w = $("#wTsaki").text();      w = parseInt(w);        l = $("#dTsaki").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pTsaki").text( points );
        $("#gdTsaki").text( $("#gscTsaki").text() - $("#gsuTsaki").text() );
        pts[4] = points;
	w = $("#wDimitriadis").text();      w = parseInt(w);        l = $("#dDimitriadis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pDimitriadis").text( points );
        $("#gdDimitriadis").text( $("#gscDimitriadis").text() - $("#gsuDimitriadis").text() );
        pts[5] = points;
	w = $("#wKaravousanos").text();      w = parseInt(w);        l = $("#dKaravousanos").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pKaravousanos").text( points );
        $("#gdKaravousanos").text( $("#gscKaravousanos").text() - $("#gsuKaravousanos").text() );
        pts[6] = points;
	w = $("#wMavrelis").text();      w = parseInt(w);        l = $("#dMavrelis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pMavrelis").text( points );
        $("#gdMavrelis").text( $("#gscMavrelis").text() - $("#gsuMavrelis").text() );
        pts[7] = points;
	w = $("#wVergis").text();      w = parseInt(w);        l = $("#dVergis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pVergis").text( points );
        $("#gdVergis").text( $("#gscVergis").text() - $("#gsuVergis").text() );
        pts[8] = points;
	w = $("#wBorboudakis").text();      w = parseInt(w);        l = $("#dBorboudakis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pBorboudakis").text( points );
        $("#gdBorboudakis").text( $("#gscBorboudakis").text() - $("#gsuBorboudakis").text() );
        pts[9] = points;
	w = $("#wTheodosis").text();      w = parseInt(w);        l = $("#dTheodosis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pTheodosis").text( points );
        $("#gdTheodosis").text( $("#gscTheodosis").text() - $("#gsuTheodosis").text() );
        pts[10] = points;
	w = $("#wPhiliopoulos").text();      w = parseInt(w);        l = $("#dPhiliopoulos").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pPhiliopoulos").text( points );
        $("#gdPhiliopoulos").text( $("#gscPhiliopoulos").text() - $("#gsuPhiliopoulos").text() );
        pts[11] = points;
	w = $("#wStathogiannakis").text();      w = parseInt(w);        l = $("#dStathogiannakis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pStathogiannakis").text( points );
        $("#gdStathogiannakis").text( $("#gscStathogiannakis").text() - $("#gsuStathogiannakis").text() );
        pts[12] = points;
	w = $("#wChandakas").text();      w = parseInt(w);        l = $("#dChandakas").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pChandakas").text( points );
        $("#gdChandakas").text( $("#gscChandakas").text() - $("#gsuChandakas").text() );
        pts[13] = points;
	w = $("#wTsafos").text();      w = parseInt(w);        l = $("#dTsafos").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pTsafos").text( points );
        $("#gdTsafos").text( $("#gscTsafos").text() - $("#gsuTsafos").text() );
        pts[14] = points;
	w = $("#wKokkoris").text();      w = parseInt(w);        l = $("#dKokkoris").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pKokkoris").text( points );
        $("#gdKokkoris").text( $("#gscKokkoris").text() - $("#gsuKokkoris").text() );
        pts[15] = points;
	w = $("#wPavlos").text();      w = parseInt(w);        l = $("#dPavlos").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pPavlos").text( points );
        $("#gdPavlos").text( $("#gscPavlos").text() - $("#gsuPavlos").text() );
        pts[16] = points;
	w = $("#wDaniel").text();      w = parseInt(w);        l = $("#dDaniel").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pDaniel").text( points );
        $("#gdDaniel").text( $("#gscDaniel").text() - $("#gsuDaniel").text() );
        pts[17] = points;
	w = $("#wKiousis").text();      w = parseInt(w);        l = $("#dKiousis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pKiousis").text( points );
        $("#gdKiousis").text( $("#gscKiousis").text() - $("#gsuKiousis").text() );
        pts[18] = points;
	w = $("#wFiorel").text();      w = parseInt(w);        l = $("#dFiorel").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pFiorel").text( points );
        $("#gdFiorel").text( $("#gscFiorel").text() - $("#gsuFiorel").text() );
        pts[19] = points;
	w = $("#wKwstas").text();      w = parseInt(w);        l = $("#dKwstas").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pKwstas").text( points );
        $("#gdKwstas").text( $("#gscKwstas").text() - $("#gsuKwstas").text() );
        pts[20] = points;
	w = $("#wKalaremas").text();      w = parseInt(w);        l = $("#dKalaremas").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pKalaremas").text( points );
        $("#gdKalaremas").text( $("#gscKalaremas").text() - $("#gsuKalaremas").text() );
        pts[21] = points;
	w = $("#wArgiropoulos").text();      w = parseInt(w);        l = $("#dArgiropoulos").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pArgiropoulos").text( points );
        $("#gdArgiropoulos").text( $("#gscArgiropoulos").text() - $("#gsuArgiropoulos").text() );
        pts[22] = points;
	w = $("#wStathopoulos").text();      w = parseInt(w);        l = $("#dStathopoulos").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pStathopoulos").text( points );
        $("#gdStathopoulos").text( $("#gscStathopoulos").text() - $("#gsuStathopoulos").text() );
        pts[23] = points;
	w = $("#wKostarikis").text();      w = parseInt(w);        l = $("#dKostarikis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pKostarikis").text( points );
        $("#gdKostarikis").text( $("#gscKostarikis").text() - $("#gsuKostarikis").text() );
        pts[24] = points;
	w = $("#wFlegkas").text();      w = parseInt(w);        l = $("#dFlegkas").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pFlegkas").text( points );
        $("#gdFlegkas").text( $("#gscFlegkas").text() - $("#gsuFlegkas").text() );
        pts[25] = points;
	w = $("#wVasiliadis").text();      w = parseInt(w);        l = $("#dVasiliadis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pVasiliadis").text( points );
        $("#gdVasiliadis").text( $("#gscVasiliadis").text() - $("#gsuVasiliadis").text() );
        pts[26] = points;
	w = $("#wSkouteris").text();      w = parseInt(w);        l = $("#dSkouteris").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pSkouteris").text( points );
        $("#gdSkouteris").text( $("#gscSkouteris").text() - $("#gsuSkouteris").text() );
        pts[27] = points;
	w = $("#wT_Tsafos").text();      w = parseInt(w);        l = $("#dT_Tsafos").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pT_Tsafos").text( points );
        $("#gdT_Tsafos").text( $("#gscT_Tsafos").text() - $("#gsuT_Tsafos").text() );
        pts[28] = points;
	w = $("#wT_Samaras").text();      w = parseInt(w);        l = $("#dT_Samaras").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pT_Samaras").text( points );
        $("#gdT_Samaras").text( $("#gscT_Samaras").text() - $("#gsuT_Samaras").text() );
        pts[29] = points;
	w = $("#wTsilikas").text();      w = parseInt(w);        l = $("#dTsilikas").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pTsilikas").text( points );
        $("#gdTsilikas").text( $("#gscTsilikas").text() - $("#gsuTsilikas").text() );
        pts[30] = points;
	w = $("#wAvranas").text();      w = parseInt(w);        l = $("#dAvranas").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pAvranas").text( points );
        $("#gdAvranas").text( $("#gscAvranas").text() - $("#gsuAvranas").text() );
        pts[31] = points;
	w = $("#wSerkedakis").text();      w = parseInt(w);        l = $("#dSerkedakis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pSerkedakis").text( points );
        $("#gdSerkedakis").text( $("#gscSerkedakis").text() - $("#gsuSerkedakis").text() );
        pts[32] = points;
	w = $("#wSotiropoulos").text();      w = parseInt(w);        l = $("#dSotiropoulos").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pSotiropoulos").text( points );
        $("#gdSotiropoulos").text( $("#gscSotiropoulos").text() - $("#gsuSotiropoulos").text() );
        pts[33] = points;
	w = $("#wGouletas").text();      w = parseInt(w);        l = $("#dGouletas").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pGouletas").text( points );
        $("#gdGouletas").text( $("#gscGouletas").text() - $("#gsuGouletas").text() );
        pts[34] = points;
	w = $("#wChrisikos").text();      w = parseInt(w);        l = $("#dChrisikos").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pChrisikos").text( points );
        $("#gdChrisikos").text( $("#gscChrisikos").text() - $("#gsuChrisikos").text() );
        pts[35] = points;
	w = $("#wDaoutis").text();      w = parseInt(w);        l = $("#dDaoutis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pDaoutis").text( points );
        $("#gdDaoutis").text( $("#gscDaoutis").text() - $("#gsuDaoutis").text() );
        pts[36] = points;
	w = $("#wGkotsis").text();      w = parseInt(w);        l = $("#dGkotsis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pGkotsis").text( points );
        $("#gdGkotsis").text( $("#gscGkotsis").text() - $("#gsuGkotsis").text() );
        pts[37] = points;
	w = $("#wKalnte").text();      w = parseInt(w);        l = $("#dKalnte").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pKalnte").text( points );
        $("#gdKalnte").text( $("#gscKalnte").text() - $("#gsuKalnte").text() );
        pts[38] = points;
	w = $("#wMoustakis").text();      w = parseInt(w);        l = $("#dMoustakis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pMoustakis").text( points );
        $("#gdMoustakis").text( $("#gscMoustakis").text() - $("#gsuMoustakis").text() );
        pts[39] = points;
	w = $("#wYiannaras").text();      w = parseInt(w);        l = $("#dYiannaras").text();     l = parseInt(l);
        points = w * 2 + l * -1;        if(points < 0) points = 0;
        $("#pYiannaras").text( points );
        $("#gdYiannaras").text( $("#gscYiannaras").text() - $("#gsuYiannaras").text() );
        pts[40] = points;
	w = $("#wDinas").text();      w = parseInt(w);        l = $("#dDinas").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pDinas").text( points );
        $("#gdDinas").text( $("#gscDinas").text() - $("#gsuDinas").text() );
        pts[41] = points;
	w = $("#wFilippou").text();      w = parseInt(w);        l = $("#dFilippou").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pFilippou").text( points );
        $("#gdFilippou").text( $("#gscFilippou").text() - $("#gsuFilippou").text() );
        pts[42] = points;
	w = $("#wSpiropoulos").text();      w = parseInt(w);        l = $("#dSpiropoulos").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pSpiropoulos").text( points );
        $("#gdSpiropoulos").text( $("#gscSpiropoulos").text() - $("#gsuSpiropoulos").text() );
        pts[43] = points;
	w = $("#wPanagiotidis").text();      w = parseInt(w);        l = $("#dPanagiotidis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pPanagiotidis").text( points );
        $("#gdPanagiotidis").text( $("#gscPanagiotidis").text() - $("#gsuPanagiotidis").text() );
        pts[44] = points;
	w = $("#wYiannis").text();      w = parseInt(w);        l = $("#dYiannis").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pYiannis").text( points );
        $("#gdYiannis").text( $("#gscYiannis").text() - $("#gsuYiannis").text() );
        pts[45] = points;
	w = $("#wBill").text();      w = parseInt(w);        l = $("#dBill").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pBill").text( points );
        $("#gdBill").text( $("#gscBill").text() - $("#gsuBill").text() );
        pts[46] = points;
	w = $("#wKastanias").text();      w = parseInt(w);        l = $("#dKastanias").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pKastanias").text( points );
        $("#gdKastanias").text( $("#gscKastanias").text() - $("#gsuKastanias").text() );
        pts[47] = points;
	w = $("#wSavvas").text();      w = parseInt(w);        l = $("#dSavvas").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pSavvas").text( points );
        $("#gdSavvas").text( $("#gscSavvas").text() - $("#gsuSavvas").text() );
        pts[48] = points;
	w = $("#wSp_Sotiropoulos").text();      w = parseInt(w);        l = $("#dSp_Sotiropoulos").text();     l = parseInt(l);
        points = w * 2 + l * -1;	if(points < 0) points = 0;
        $("#pSp_Sotiropoulos").text( points );
        $("#gdSp_Sotiropoulos").text( $("#gscSp_Sotiropoulos").text() - $("#gsuSp_Sotiropoulos").text() );
        pts[49] = points;
	w = $("#wChalkias").text();      w = parseInt(w);        l = $("#dChalkias").text();     l = parseInt(l);
        points = w * 2 + l * -1;        if(points < 0) points = 0;
        $("#pChalkias").text( points );
        $("#gdChalkias").text( $("#gscChalkias").text() - $("#gsuChalkias").text() );
        pts[50] = points;
	w = $("#wN_Skouteris").text();      w = parseInt(w);        l = $("#dN_Skouteris").text();     l = parseInt(l);
        points = w * 2 + l * -1;        if(points < 0) points = 0;
        $("#pN_Skouteris").text( points );
        $("#gdN_Skouteris").text( $("#gscN_Skouteris").text() - $("#gsuN_Skouteris").text() );
        pts[51] = points;
	w = $("#wProtogiros").text();      w = parseInt(w);        l = $("#dProtogiros").text();     l = parseInt(l);
        points = w * 2 + l * -1;        if(points < 0) points = 0;
        $("#pProtogiros").text( points );
        $("#gdProtogiros").text( $("#gscProtogiros").text() - $("#gsuProtogiros").text() );
        pts[52] = points;
	w = $("#wApostolopoulos").text();      w = parseInt(w);        l = $("#dApostolopoulos").text();     l = parseInt(l);
        points = w * 2 + l * -1;        if(points < 0) points = 0;
        $("#pApostolopoulos").text( points );
        $("#gdApostolopoulos").text( $("#gscApostolopoulos").text() - $("#gsuApostolopoulos").text() );
        pts[53] = points;
        w = $("#wMariglis").text();      w = parseInt(w);        l = $("#dMariglis").text();     l = parseInt(l);
        points = w * 2 + l * -1;        if(points < 0) points = 0;
        $("#pMariglis").text( points );
        $("#gdMariglis").text( $("#gscMariglis").text() - $("#gsuMariglis").text() );
        pts[54] = points;
	w = $("#wApostolakis").text();      w = parseInt(w);        l = $("#dApostolakis").text();     l = parseInt(l);
        points = w * 2 + l * -1;        if(points < 0) points = 0;
        $("#pApostolakis").text( points );
        $("#gdApostolakis").text( $("#gscApostolakis").text() - $("#gsuApostolakis").text() );
        pts[55] = points;
	w = $("#wSkopelitis").text();      w = parseInt(w);        l = $("#dSkopelitis").text();     l = parseInt(l);
	points = w * 2 + l * -1;        if(points < 0) points = 0;
        $("#pSkopelitis").text( points );
        $("#gdSkopelitis").text( $("#gscSkopelitis").text() - $("#gsuSkopelitis").text() );
        pts[56] = points;
	w = $("#wPappas").text();      w = parseInt(w);        l = $("#dPappas").text();     l = parseInt(l);
	points = w * 2 + l * -1;        if(points < 0) points = 0;
        $("#pPappas").text( points );
        $("#gdPappas").text( $("#gscPappas").text() - $("#gsuPappas").text() );
        pts[57] = points;
	w = $("#wDrogitis").text();      w = parseInt(w);        l = $("#dDrogitis").text();     l = parseInt(l);
	points = w * 2 + l * -1;        if(points < 0) points = 0;
        $("#pDrogitis").text( points );
        $("#gdDrogitis").text( $("#gscDrogitis").text() - $("#gsuDrogitis").text() );
        pts[58] = points;
	var pl = "Fanis";
	w = $("#w" + pl).text();      w = parseInt(w);        l = $("#d" + pl).text();     l = parseInt(l);
	points = w * 2 + l * -1;        if(points < 0) points = 0;
    $("#p" + pl).text( points );
    $("#gd" + pl).text( $("#gsc" + pl).text() - $("#gsu" + pl).text() );
    pts[59] = points;
	
	pl = "L_Oikonomo";
	w = $("#w" + pl).text();      w = parseInt(w);        l = $("#d" + pl).text();     l = parseInt(l);
	points = w * 2 + l * -1;        if(points < 0) points = 0;
    $("#p" + pl).text( points );
    $("#gd" + pl).text( $("#gsc" + pl).text() - $("#gsu" + pl).text() );
    pts[60] = points;
	
	pl = "Skrekis";
	w = $("#w" + pl).text();      w = parseInt(w);        l = $("#d" + pl).text();     l = parseInt(l);
	points = w * 2 + l * -1;        if(points < 0) points = 0;
    $("#p" + pl).text( points );
    $("#gd" + pl).text( $("#gsc" + pl).text() - $("#gsu" + pl).text() );
    pts[61] = points;	
	
	pl = "kots7";
	w = $("#w" + pl).text();      w = parseInt(w);        l = $("#d" + pl).text();     l = parseInt(l);
	points = w * 2 + l * -1;        if(points < 0) points = 0;
    	$("#p" + pl).text( points );
    	$("#gd" + pl).text( $("#gsc" + pl).text() - $("#gsu" + pl).text() );
    	pts[62] = points;

	pl = "Tom92";
        w = $("#w" + pl).text();      w = parseInt(w);        l = $("#d" + pl).text();     l = parseInt(l);
        points = w * 2 + l * -1;        if(points < 0) points = 0;
        $("#p" + pl).text( points );
        $("#gd" + pl).text( $("#gsc" + pl).text() - $("#gsu" + pl).text() );
        pts[63] = points;

	var names = new Array();
	names[0]  = "Samaras";
	names[1]  = "Manthos";
	names[2]  = "Johny";
	names[3]  = "Alex";
	names[4]  = "Tsaki";
	names[5]  = "Dimitriadis";
	names[6]  = "Karavousanos";
	names[7]  = "Mavrelis";
	names[8]  = "Vergis";
	names[9]  = "Borboudakis";
	names[10] = "Theodosis";
	names[11] = "Philiopoulos";
	names[12] = "Stathogiannakis";
	names[13] = "Chandakas";
	names[14] = "Tsafos";
	names[15] = "Kokkoris";
	names[16] = "Pavlos";
	names[17] = "Daniel";
	names[18] = "Kiousis"
	names[19] = "Fiorel";
	names[20] = "Kwstas";
	names[21] = "Kalaremas";
	names[22] = "Argiropoulos";
	names[23] = "Stathopoulos";
	names[24] = "Kostarikis";
	names[25] = "Flegkas";
	names[26] = "Vasiliadis";
	names[27] = "Skouteris";
	names[28] = "T_Tsafos";
	names[29] = "T_Samaras";
	names[30] = "Tsilikas";
	names[31] = "Avranas";
	names[32] = "Serkedakis";
	names[33] = "Sotiropoulos";
	names[34] = "Gouletas";
	names[35] = "Chrisikos";
	names[36] = "Daoutis";
	names[37] = "Gkotsis";
	names[38] = "Kalnte";
	names[39] = "Moustakis";
	names[40] = "Yiannaras";
	names[41] = "Dinas";
	names[42] = "Filippou";
	names[43] = "Spiropoulos";
	names[44] = "Panagiotidis";
	names[45] = "Yiannis";
	names[46] = "Bill";
	names[47] = "Kastanias";
	names[48] = "Savvas";
	names[49] = "Sp_Sotiropoulos";
	names[50] = "Chalkias";
	names[51] = "N_Skouteris";
	names[52] = "Protogiros";
	names[53] = "Apostolopoulos";
	names[54] = "Mariglis";
	names[55] = "Apostolakis";
	names[56] = "Skopelitis";
	names[57] = "Pappas";
	names[58] = "Drogitis";
	names[59] = "Fanis";
	names[60] = "L_Oikonomo";
	names[61] = "Skrekis";
	names[62] = "kots7";
	names[63] = "Tom92";
	quickSort(pts, 0, 63, names);
	</script>
</html>
