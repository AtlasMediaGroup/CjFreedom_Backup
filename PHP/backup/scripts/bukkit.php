<b><h2>Craftbukkit</h2></b>
<?php
$file = ''.$address.'/Craftbukkit.jar?password='.$password.'';
$current = file_get_contents($file);
file_put_contents("backup/Craftbukkit/Craftbukkit.jar", $current);
echo "Downloaded Craftbukkit.jar To: <a href='backup/Craftbukkit/Craftbukkit.jar'>backups/Craftbukkit/Craftbukkit.jar</a>" 
?>
<br />
<?php
$file = ''.$address.'/ops.txt?password='.$password.'';
$current = file_get_contents($file);
file_put_contents("backup/Craftbukkit/Ops.txt", $current);
echo "Downloaded Ops.txt To: <a href='backup/Craftbukkit/Ops.txt'>backups/Craftbukkit/Ops.txt</a>" 
?>
<br />
<?php
$file = ''.$address.'/server.log?password='.$password.'';
$current = file_get_contents($file);
file_put_contents("backup/Craftbukkit/server.log", $current);
echo "Downloaded Server.log To: <a href='backup/Craftbukkit/server.log'>backups/Craftbukkit/server.properties</a>" 
?>
<br />
<?php
$file = ''.$address.'/server.properties?password='.$password.'';
$current = file_get_contents($file);
file_put_contents("backup/Craftbukkit/server.properties", $current);
echo "Downloaded server.properties To: <a href='backup/Craftbukkit/server.properties'>backups/Craftbukkit/server.properties</a>" 
?>
<br />
<?php
$file = ''.$address.'/white-list.txt?password='.$password.'';
$current = file_get_contents($file);
file_put_contents("backup/Craftbukkit/white-list.txt", $current);
echo "Downloaded white-list.txt To: <a href='backup/Craftbukkit/white-list.txt'>backups/Craftbukkit/white-list.txt</a>" 
?>
<br />
<?php
$file = ''.$address.'/banned-players.txt?password='.$password.'';
$current = file_get_contents($file);
file_put_contents("backup/Craftbukkit/white-list.txt", $current);
echo "Downloaded banned-players.txt To: <a href='backup/Craftbukkit/banned-players.txt'>backups/Craftbukkit/banned-players.txt</a>" 
?>
<br />
<?php
$file = ''.$address.'/banned-ips.txt?password='.$password.'';
$current = file_get_contents($file);
file_put_contents("backup/Craftbukkit/white-list.txt", $current);
echo "Downloaded banned-ips.txt To: <a href='backup/Craftbukkit/banned-ips.txt'>backups/Craftbukkit/banned-ips.txt</a>" 
?>
<br />
