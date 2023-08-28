<?php
session_start();
require_once 'vendor/autoload.php';
require_once 'config.php';

$core = new core\Core;
$core->run();