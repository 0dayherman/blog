<?php

include_once __DIR__ . "/theme/head.php";
require_once __DIR__ . "/load.php";
index();
$db->thumbs_articles();
include __DIR__ . "/theme/footer.php";
