<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include_once('simple_html_dom.php');

$search_keyword=str_replace(' ','+','Pop Rainbow Dash');
$newhtml =file_get_html("https://www.google.com/search?q=".$search_keyword."&tbm=isch");
$result_image_source = $newhtml->find('img',1)->src;
echo '<img src="'.$result_image_source.'">';
