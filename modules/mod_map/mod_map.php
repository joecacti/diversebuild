<?php
defined('_JEXEC') or die('Restricted access');
$map_latitude = $params->get('map_latitude');
$map_longitude = $params->get('map_longitude');
$map_zoom = $params->get('map_zoom');
$map_height = $params->get('map_height');
$map_address = $params->get('map_address');
$map_phone = $params->get('map_phone');
$map_email = $params->get('map_email');
$map_class = $params->get('map_class');
$map_height = str_replace( "px", "", $map_height);
$map_height = str_replace( "%", "", $map_height);
if($map_latitude AND $map_longitude) { include dirname(__FILE__).DIRECTORY_SEPARATOR.'tmpl/default.php'; }
?>