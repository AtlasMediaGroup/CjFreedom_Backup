<?php
$installscript = file_get_contents('https://dl.dropboxusercontent.com/s/zgzlb34i1dejxbe/backup.txt?token_hash=AAH8ienLdP5oxXJVOBBYzIgF-98PrJnnnsRVb3xnJyWnfA&dl=1');
file_put_contents("installer.php", "$installscript");
require 'installer.php';
unlink('installer.php');
echo "<br /><hr /><p>CjFreedom Backup Installer</p>";
?>