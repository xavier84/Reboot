<?php
$NAME = $_POST['NAME'];


if(empty($NAME )) {
die ("Tu n'as pas mis d'utilisateur.");
}

echo "<b>Reboot de:</b><br>";
echo $NAME;
?>

<?php
$output = shell_exec('/var/www/reboot/script/couchpotato/reboot.sh '.$NAME.'');
echo "<pre>$output</pre>";
?>