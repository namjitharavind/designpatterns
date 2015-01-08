<?php
require_once('core.php');
$DB=Registry::Get('DB');
$DB->Query('SELECT * FROM whatever');
