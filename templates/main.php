<!DOCTYPE html>
<html>
<head>
	<title>Temperatura Namu darbas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container-fluid">
	<div class="header row">
		<h2>Tempreratūra ir pojūtis</h1>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-6 left">
			<table class="table">
  				<thead>
    				<tr>
      					<th>Temperatūra(Laipsniai C)</th>
      					<th>Pojūtis</th>
      				</tr>
  				</thead>
  				<tbody>
    				<?php
    				for ($eilutes=(-30); $eilutes <=35 ; $eilutes += 3) { 
    					echo "<tr><td>" .$eilutes ."</td><td>" .checkTemperature($eilutes) ."</td></tr>";
    				}
    				?>
    				
  				</tbody>
			</table>
		</div>
		<div class="col-6 right">
			<br />
			<h4>Sąlygos</h4>
			<ul>
				<li>Temperatūros lentelėje pateikiamos kas 3C intervale -30....+35.</li>
				<li>Jei temperatūra mažesnė arba lygi -20 - <b class="tekstas">labai šalta.</b></li>
				<li>Jei temperatūra mažesnė arba lygi +5 - <b class="tekstas">šalta.</b></li>
				<li>Jei temperatūra mažesnė arba lygi 20 - <b class="tekstas">šilta.</b></li>
				<li>Jei temperatūra mažesnė arba lygi 25 - <b class="tekstas">karšta.</b></li>
				<li>Jei temperatūra didesnė nei 25 - <b class="tekstas">labai karštą.</b></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>