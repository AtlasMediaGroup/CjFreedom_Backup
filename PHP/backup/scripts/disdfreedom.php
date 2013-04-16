<b><h2>DisdFreedom</h2></b>
<?php
$file = ''.$address.'/plugins/DisdFreedomMod.jar?password=1145';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/DisdFreedom/DisdFreedomMod.jar", $current);
echo "Downloaded DisdFreedomMod.jar To: <a href='backup/DisdFreedom/DisdFreedomMod.jar'>backups/DisdFreedom/DisdFreedomMod.jar</a>"  
?>
<br />