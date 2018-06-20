<?php

// load core starter
$rootDir = realpath(__DIR__."/../../");
require_once("$rootDir/fusion-code/core/starter.php");
require_once("$rootDir/fusion-plugin/index.php");
require_once("$rootDir/fusion-theme/index.php");

new Core(__DIR__);
