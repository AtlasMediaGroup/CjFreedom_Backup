<br />
<b><h2>Essentials</h2></b>
<?php
$file = ''.$address.'/plugins/Essentials.jar?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/Essentials/Essentials/Essentials.jar", $current);
echo "Downloaded Essentials.jar To: <a href='backup/Essentials/Essentials.jar'>backup/Essentials/Essentials.jar</a>" 
?>
<br />
<?php
$file = ''.$address.'/plugins/EssentialsSpawn.jar?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/Essentials/Essentials/EssentialsSpawn.jar", $current);
echo "Downloaded EssentialsSpawn.jar To: <a href='backup/Essentials/EssentialsSpawn.jar'>backup/Essentials/EssentialsSpawn.jar</a>" 
?>
<br />
<?php
$file = ''.$address.'/plugins/Essentials/config.yml?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/Essentials/Essentials/config.yml", $current);
echo "Downloaded config.yml To: <a href='backup/Essentials/config.yml'>backup//Essentials/config.yml</a>" 
?>
<br />
<?php
$file = ''.$address.'/plugins/Essentials/motd.txt?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/Essentials/Essentials/motd.txt", $current);
echo "Downloaded motd.txt To: <a href='backup/Essentials/motd.txt'>backup/Essentials/motd.txt</a>" 
?>
<br />
<?php
$file = ''.$address.'/plugins/Essentials/config.yml?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/Essentials/Essentials/config.yml", $current);
echo "Downloaded config.yml To: <a href='backup/Essentials/config.yml'>backup/Essentials/config.yml</a>" 
?>
<br />
