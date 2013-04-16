<?php
//Get Server Up Status
$server = "109.70.149.214";
$port = "Httpd_Port";
$timeout = "1";
 
if ($server and $port and $timeout) {
$serverup = @fsockopen("$server", $port, $errno, $errstr, $timeout);
}
if($serverup) {
include 'backup/scripts/totalfreedommod.php';
echo '<br />';
include 'backup/scripts/essentials.php';
echo '<br />';
include 'backup/scripts/worldedit.php';
echo '<br />';
include 'backup/scripts/bukkittelnet.php';
echo '<br />';
include 'backup/scripts/bukkithttpd.php';
echo '<br />';
include 'backup/scripts/disdfreedom.php';
echo '<br />';
include 'backup/scripts/bukkit.php';
echo '<br />';
//LAST RUN SCRIPT
echo 'Backup Last Run: ';
$lastrun = file_get_contents('backup/backuplastrun.txt');
echo $lastrun;
echo '<br />';
echo 'This backup Completed At: ';
echo $date;
$date = date('d.m.Y H:i:s');
file_put_contents("backup/backuplastrun.txt", $date);
}
else {
echo "<center><b><font color='red'><h1>Server Offline! Backup Failed</h1></font></b></center>";
}
?>