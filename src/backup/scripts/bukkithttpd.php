<b><h2>BukkitHttpd</h2></b>
<?php
$file = ''.$address.'/plugins/BukkitHttpd.jar?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/BukkitHttpd/BukkitHttpd.jar", $current);
echo "Downloaded BukkitHttpd.jar To: <a href='backup/BukkitHttpd/BukkitHttpd.jar'>backup/BukkitHttpd/BukkitHttpd.jar</a>" 
?>
<br />
<?php
$file = ''.$address.'/plugins/BukkitHttpd/config.yml?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/BukkitHttpd/config.yml", $current);
echo "Downloaded config.yml To: <a href='backup/BukkitHttpd/config.yml'>backup/BukkitHttpd/config.yml</a>" 
?>
<br />
