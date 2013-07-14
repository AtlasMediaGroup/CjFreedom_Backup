<br />
<b><h2>BukkitTelnet</h2></b>
<?php
$file = ''.$address.'/plugins/BukkitTelnet.jar?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/BukkitTelnet/BukkitTelnet.jar", $current);
echo "Downloaded BukkitTelnet.jar To: <a href='backup/BukkitTelnet/BukkitTelnet.jar'>backup/BukkitTelnet/BukkitTelnet.jar</a>" 
?>
<br />
<?php
$file = ''.$address.'/plugins/BukkitTelnet/config.yml?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/BukkitTelnet/config.yml", $current);
echo "Downloaded config.yml To: <a href='backup/BukkitTelnet/config.yml'>backup/BukkitTelnet/config.yml</a>" 
?>
<br />
