<?php
session_start();
require 'config.php';
require './vendor/autoload.php';

use \App\core\Core as Core;

$core = new Core;
$core->run();