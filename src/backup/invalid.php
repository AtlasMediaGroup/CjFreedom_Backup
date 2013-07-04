<?php
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
echo "Woops. It appears that you screwed up...... Sowwy"
}
?>
