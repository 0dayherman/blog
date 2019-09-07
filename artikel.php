<?php

/*
 * Jadikan Sendiri lah wkwkwkwk
 *
 */


include "inc/config.php";
include "head.php";

echo "<br><br><br>";

$id = @$_GET['id'];
$tampil = $db->artikel($id);
echo $tampil['1'];
echo "<br>";
echo $tampil['2'];
echo "<br><br><br>";
include "footer.php";