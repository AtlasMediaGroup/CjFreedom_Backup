<br />
<b><h2>WorldEdit</h2></b>
<?php
$file = ''.$address.'/plugins/WorldEdit.jar?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/WorldEdit/WorldEdit.jar", $current);
echo "Downloaded WorldEdit.jar To: <a href='backup/WorldEdit/WorldEdit.jar'>backup/WorldEdit/WorldEdit.jar</a>" 
?>
<br />
<?php
$file = ''.$address.'/plugins/WorldEdit/config.yml?password='.$password.'';
$date = date('d.m.Y H:i:s');
$current = file_get_contents($file);
file_put_contents("backup/WorldEdit/config.yml", $current);
echo "Downloaded WorldEdit.jar To: <a href='backup/WorldEdit/config.yml'>backup/WorldEdit/config.yml</a>" 
?>
