<?php
$file = ''.$address.'/backups-BukkitTelnet.zip?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/BukkitTelnet/BukkitTelnet.zip", $current);
echo "Downloaded /BukkitTelnet To: <a href='backup/BukkitTelnet/BukkitTelnet.zip'>backup/BukkitTelnet/BukkitTelnet.zip</a>" 
?>
<br />
<?php
$file = ''.$address.'/backups-Essentials.zip?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/Essentials/Essentials.zip", $current);
echo "Downloaded /Essentials To: <a href='backup/Essentials/Essentials.zip'>backup/Essentials/Essentials.zip</a>" 
?>
<br />
<?php
$file = ''.$address.'/backups-plugins.zip?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/plugins.zip", $current);
echo "Downloaded /plugins To: <a href='backup/plugins.zip'>backup/plugins.zip</a>" 
?>
<br />
<?php
$file = ''.$address.'/backups-TotalFreedomMod.zip?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/TotalFreedomMod/TotalFreedomMod.zip", $current);
echo "Downloaded /TotalFreedomMod To: <a href='backup/TotalFreedomMod/TotalFreedomMod.zip'>backup/TotalFreedomMod/TotalFreedomMod.zip</a>" 
?>
<br />
<?php
$file = ''.$address.'/backups-WorldEdit.zip?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/WorldEdit/WorldEdit.zip", $current);
echo "Downloaded /Worldedit To: <a href='backup/WorldEdit/WorldEdit.zip'>backup/WorldEdit/WorldEdit.zip</a>" 
?>
<br />
