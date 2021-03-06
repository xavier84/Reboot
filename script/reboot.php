
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Accueil RatXabox</title>
        <link rel="icon" type="image/png" href="../favicon.png">
		<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../style/style.css">
		<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        <script type="application/javascript">
			var surface;
			var monkey;
			var angle = 0;

			function drawCanvas() {
			surface = document.getElementById("movemonkey");
			if (surface.getContext) {
				monkey = new Image();
				monkey.onload = loadingComplete;
				monkey.src = "../img/monkey.png";
				}
			}

			function loadingComplete(e) {
			setInterval(loop, 5);
			}

			function loop() {
			var surfaceContext = surface.getContext('2d');
			surfaceContext.clearRect(0, 0, surface.width, surface.height);
			surfaceContext.save();
			surfaceContext.translate(monkey.width * 0.5, monkey.height * 0.5);
			surfaceContext.rotate(DegToRad(angle));
			surfaceContext.translate(-monkey.width * 0.5, -monkey.height * 0.5);
			surfaceContext.drawImage(monkey, 0, 0);
			surfaceContext.restore();
			angle++;
			}

			function DegToRad(d) {
			return d * 0.0174532925199432957;
			}
		</script>
	</head>

	<body onload="drawCanvas();">
        <div id="monkey"> <canvas id="movemonkey" width="312" height="312"></canvas> </div>
		<div id="welcome"><span>Reboot to</span> RatXa<span>box</span></div>
		<div id="retour">
			<?php
			$NAME = $_POST['NAME'];
			$SERVICE = $_POST['SERVICE'];
			$SERVICE1 = $_POST['SERVICE1'];
			echo "<b>Reboot de:</b><br>";
			echo "$NAME<br>";
			echo "$SERVICE";
			echo "$SERVICE1";
			?>
			<?php
			$output = shell_exec('/var/www/reboot/script/reboot.sh '.$NAME.' '.$SERVICE.' '.$SERVICE1.'');
			echo "<pre>$output</pre>";
			?>
		</div>
		<div id="description"><span>Page d'Accueil de votre</span> RatXa<span>box</span> <br><br><a>Xavier</a></div>
	</body>
</html>
