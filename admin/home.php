<?php
require_once __DIR__ . "/session.php";

$sys = new session();
$sys->go = "login.php";
if(!$sys->check_admin()){
include_once __DIR__ . "/../theme/admin/demo.php";
}
?>
