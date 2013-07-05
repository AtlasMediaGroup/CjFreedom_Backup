<?php
//By TheCJGCJG
if ($server and $port and $timeout) {
	$cjserverup = @fsockopen("$server", $port, $errno, $errstr, $timeout);
}
if($cjserverup) {
	if ($enabled == "1") {
		if ($totalfreedommod == "1") {
			echo '<details><summary>TotalFreedomMod</summary>';
			include 'backup/scripts/totalfreedommod.php';
			echo '</details><br />';
		}
		if ($essentials == "1") {
			echo '<details><summary>Essentials</summary>';
			include 'backup/scripts/essentials.php';
			echo '</details><br />';
		}
		if ($worldedit == "1") {
			echo '<details><summary>Worldedit</summary>';
			include 'backup/scripts/worldedit.php';
			echo '</details><br />';
		}
		if ($bukkittelnet == "1") {
			echo '<details><summary>BukkitTelnet</summary>';
			include 'backup/scripts/bukkittelnet.php';
			echo '</details><br />';
		}
		if ($bukkithttpd == "1") {
			echo '<details><summary>BukkitHttpd</summary>';
			include 'backup/scripts/bukkithttpd.php';
			echo '</details><br />';
		}
		if ($craftbukkit == "1") {
			echo '<details><summary>Craftbukkit</summary>';
			include 'backup/scripts/bukkit.php';
			echo '</details><br />';
		}
		if ($zip == "1") {
			echo '<details><summary>PluginBackups</summary>';
			include 'backup/scripts/backupzips.php';
			echo '</details><br />';
		}
		//Last Run Script
		echo 'Backup Last Run: ';
		$lastrun = file_get_contents('backup/backuplastrun.txt');
		echo $lastrun;
		echo '<br />';
		echo 'This backup Completed At: ';
		echo $date;
		$date = date('d.m.Y H:i:s');
		file_put_contents("backup/backuplastrun.txt", $date);
	}
}
else {
	echo "<center><b><font color='red'><h1>Server Offline! Backup Failed</h1></font></b></center>";
}
?>
