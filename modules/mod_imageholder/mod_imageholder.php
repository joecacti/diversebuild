<?php
defined('_JEXEC') or die('Restricted access');
$imageholder = $params->get('imageholder');
$imagewidth = $params->get('imagewidth');
$imageheight = $params->get('imageheight');
$imagealt = $params->get('imagealt');
$imagealign = $params->get('imagealign');
$imagelink = $params->get('imagelink');
$linktarget = $params->get('linktarget');
$imagepath = (stristr($imageholder, "http://")) ? "" : JURI::Base();
if($imagealt) $altimage = " alt='$imagealt'"; elseif(!$imagealt) $altimage = "";
if($imagewidth) $widthimage = "width: $imagewidth;"; elseif(!$imagewidth) $widthimage = "";
if($imageheight) $heightimage = " height: $imageheight;"; elseif(!$imageheight) $heightimage = "";
if($imagelink) { if(false === strpos($imagelink, '://')) { $imagelink = 'http://' . $imagelink; } }
if($imagelink) $linkimage = "<a href='$imagelink' target='$linktarget' >"; elseif(!$imagelink) $linkimage = "";
if($imagelink) $linkimage2 = "</a>"; elseif(!$imagelink) $linkimage2 = "";
if($imageholder) echo "<div style='text-align:$imagealign;'>$linkimage<img style='$widthimage$heightimage' src='".$imagepath.$imageholder."'$altimage />$linkimage2</div>";
?>