<?php
 // extract the filename
 $title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
//remove anything after _ 
$pieces = explode('.', $title);
$title = $pieces[0];
 // replace dashes with whitespace
 $title = str_replace('.', ' ', $title);
 // check if the file is index, if so assign 'home' to the title instead of index
 if (strtolower($title) == 'index') {
 $title = 'home';
 }
?>