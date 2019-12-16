<?php
// Version
define('VERSION', '3.0.3.1');

error_reporting(0);
//phpinfo();die;
// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}
//text123
//text666
// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');
