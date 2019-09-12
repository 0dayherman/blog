<?php

/* START */

require_once "session.php";

$session = new session();

$session->go = "home.php|login.php";

$session->run();

/* END */
