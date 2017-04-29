<?php
$NAME = $_POST['NAME'];
$SERVICE = $_POST['SERVICE'];


if(empty($NAME )) {
die ("Tu n'as pas mis d'utilisateur.");
}

echo "<b>Reboot de:</b><br>";
echo $NAME;
echo $service;
?>

<?php
$output = shell_exec('/var/www/reboot/script/reboot.sh '.$NAME.' '.$SERVICE.'');
echo "<pre>$output</pre>";
?>