<?php 
$title = str_replace('-', '- ', str_replace('_', ' ', basename($_SERVER['SCRIPT_FILENAME'], '.php')));

if (strtolower($title) == 'index') { $title = 'home'; }

$title = str_replace('- ', '-', ucwords($title));
