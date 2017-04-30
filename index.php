<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <title>RatXaBox Reboot</title>
    </head>

    <body>
        <header>
            <h1>RatXaBox Reboot</h1>
        </header>

    <nav>
  		  <ul>
      		    <FORM Method="POST" Action="./script/reboot.php">
				Nom de l'utilisateur : <input type=text size=20 name=NAME>
				<SELECT name="SERVICE" size="1">
					<option selected disabled>Choisir un service</option>
					<option value="couchpotato">Couchpotato</option>
					<option value="sickrage">Sickrage</option>
				</SELECT>
				<INPUT type=submit value=Reboot>
				</FORM>
            </ul>
        </nav>

        <footer>
            <p>Copyright RatXaBox Reboot - Tous droits réservés, lol la blague<br />
        </footer>

    </body>
</html>