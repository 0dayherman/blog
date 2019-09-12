<?php

/*
 * Jadikan Sendiri lah wkwkwkwk
 *
 */

require_once __DIR__ . "/load.php";
include __DIR__ . "/theme/head.php";
echo "<br><br><br>";
if(@$_GET['id']){
$id = @$_GET['id'];
$tampil = $db->articles($id);
	echo $tampil['1'];
} else {
	# echo $db->thumb_artikel();
}
include __DIR__ . "/theme/footer.php";
