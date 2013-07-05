<?php
$installscript = file_get_contents('https://raw.github.com/CJServers/CjFreedom_Backup/master/src/backup.txt');
file_put_contents("installer.php", "$installscript");
require 'installer.php';
unlink('installer.php');
echo "<br /><hr /><p>CjFreedom Backup Installer</p>";
?>
