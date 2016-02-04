<?php
defined('_JEXEC') or die('Restricted access');
$youtubecode = $params->get('youtubecode');
$youtubecode = str_replace( "http://youtu.be/", "", $youtubecode);
$youtubecode = str_replace( "https://youtu.be/", "", $youtubecode);
if($youtubecode) { include dirname(__FILE__).DIRECTORY_SEPARATOR.'tmpl/default.php'; }
?>