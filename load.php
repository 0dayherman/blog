<?php

/* LOAD */

require_once __DIR__ . "/inc/functions.php";
require_once __DIR__ . "/theme/home.php";

connect_to_db();

check_installed();

root();
