<?php
$file = ''.$address.'/backups-BukkitTelnet.zip?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backupss/BukkitTelnet/backups.zip", $current);
echo "Downloaded /BukkitTelnet To: <a href='backupss/BukkitTelnet/backups.zip'>backupss/BukkitTelnet/backups.zip</a>" 
?>
<br />
<?php
$file = ''.$address.'/backups-Essentials.zip?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backupss/Essentials/backups.zip", $current);
echo "Downloaded /Essentials To: <a href='backupss/Essentials/backups.zip'>backupss/Essentials/backups.zip</a>" 
?>
<br />
<?php
$file = ''.$address.'/backups-plugins.zip?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backupss/backups.zip", $current);
echo "Downloaded /plugins To: <a href='backupss/backups.zip'>backupss/backups.zip</a>" 
?>
<br />
<?php
$file = ''.$address.'/backups-TotalFreedomMod.zip?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backupss/TotalFreedomMod/backups.zip", $current);
echo "Downloaded /TotalFreedomMod To: <a href='backupss/TotalFreedomMod/backups.zip'>backupss/TotalFreedomMod/backups.zip</a>" 
?>
<br />
<?php
$file = ''.$address.'/backups-WorldEdit.zip?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backupss/WorldEdit/backups.zip", $current);
echo "Downloaded /Worldedit To: <a href='backupss/WorldEdit/backups.zip'>backupss/WorldEdit/backups.zip</a>" 
?>
<br />