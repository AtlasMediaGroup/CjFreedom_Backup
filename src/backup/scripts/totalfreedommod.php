<br />
<b><h2>TotalFreedomMod</h2></b>
<?php
$file = ''.$address.'/plugins/TotalFreedomMod/userlist.yml?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/TotalFreedomMod/userlist.yml", $current);
echo "Downloaded Userlist To: <a href='backup/TotalFreedomMod/userlist.yml'>backups/userlist.yml</a>" 
?>
<br />
<?php
$file = ''.$address.'/plugins/TotalFreedomMod/superadmin.yml?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/TotalFreedomMod/superadmin.yml", $current);
echo "Downloaded SuperAdmin List To: <a href='backup/TotalFreedomMod/superadmin.yml'>backups/superadmin.yml</a>" 
?>
<br />
<?php
$file = ''.$address.'/plugins/TotalFreedomMod/permban.yml?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/TotalFreedomMod/permban.yml", $current);
echo "Downloaded Permban List To: <a href='backup/TotalFreedomMod/permban.yml'>backups/permban.yml</a>" 
?>
<br />
<?php
$file = ''.$address.'/plugins/TotalFreedomMod.jar?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/TotalFreedomMod/TotalFreedomMod.jar", $current);
echo "Downloaded TotalFreedomMod.jar To: <a href='backup/TotalFreedomMod/TotalFreedomMod.jar'>backups/TotalFreedomMod.jar</a>" 
?>