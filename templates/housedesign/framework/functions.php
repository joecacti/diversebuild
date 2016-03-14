<?php
defined('_JEXEC') or die('Restricted access');
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$responsive = $this->params->get('responsive');
$templatestyle = $this->params->get('templatestyle');
$fontfamily = $this->params->get('fontfamily');
$centerposition = $this->params->get('centerposition');
$expand = $this->params->get('expand');
$bannerwidth = $this->params->get('bannerwidth');
$autowide = $this->params->get('autowide');
$copyright = $this->params->get('copyright');
$showdesigner = $this->params->get('showdesigner');
$webdesigner = $this->params->get('webdesigner');
$designlink = $this->params->get('designlink');
$sitetitle = $app->getCfg('sitename');
$url = "$designlink";
if(false === strpos($url, '://')) { $url = 'http://' . $url; }
global $multicolBlocks;
$multicolBlocks = array(
'block1' => array('advert1', 'advert2', 'advert3', 'advert4', 'advert5'),
'block2' => array('upper1', 'upper2', 'upper3', 'upper4', 'upper5'),
'block3' => array('upper6', 'upper7', 'upper8', 'upper9', 'upper10'),
'block4' => array('upper11', 'upper12', 'upper13', 'upper14', 'upper15'),
'block5' => array('upper16', 'upper17', 'upper18', 'upper19', 'upper20'),
'block6' => array('user1', 'user2', 'user3'),
'block7' => array('user4', 'user5', 'user6'),
'block8' => array('user7', 'user8', 'user9'),
'block9' => array('inside1', 'inside2'),
'block10' => array('inside3', 'inside4'),
'block11' => array('inside5', 'inside6'),
'block12' => array('bottom1', 'bottom2', 'bottom3', 'bottom4', 'bottom5'),
'block13' => array('bottom6', 'bottom7', 'bottom8', 'bottom9', 'bottom10'),
'block14' => array('bottom11', 'bottom12', 'bottom13', 'bottom14', 'bottom15'),
'block15' => array('bottom16', 'bottom17', 'bottom18', 'bottom19', 'bottom20'),
'block16' => array('footer1', 'footer2', 'footer3', 'footer4', 'footer5'));
$advert_count = ($this->countModules('advert1')>0) + ($this->countModules('advert2')>0) + ($this->countModules('advert3')>0) + ($this->countModules('advert4')>0) + ($this->countModules('advert5')>0);
$advert_width = $advert_count > 0 ? 'advert' . floor(99 / $advert_count) : '';
$upper_count = ($this->countModules('upper1')>0) + ($this->countModules('upper2')>0) + ($this->countModules('upper3')>0) + ($this->countModules('upper4')>0) + ($this->countModules('upper5')>0);
$upper_width = $upper_count > 0 ? 'upper' . floor(99 / $upper_count) : '';
$upper2_count = ($this->countModules('upper6')>0) + ($this->countModules('upper7')>0) + ($this->countModules('upper8')>0) + ($this->countModules('upper9')>0) + ($this->countModules('upper10')>0);
$upper2_width = $upper2_count > 0 ? 'upper' . floor(99 / $upper2_count) : '';
$upper3_count = ($this->countModules('upper11')>0) + ($this->countModules('upper12')>0) + ($this->countModules('upper13')>0) + ($this->countModules('upper14')>0) + ($this->countModules('upper15')>0);
$upper3_width = $upper3_count > 0 ? 'upper' . floor(99 / $upper3_count) : '';
$upper4_count = ($this->countModules('upper16')>0) + ($this->countModules('upper17')>0) + ($this->countModules('upper18')>0) + ($this->countModules('upper19')>0) + ($this->countModules('upper20')>0);
$upper4_width = $upper4_count > 0 ? 'upper' . floor(99 / $upper4_count) : '';
$user_count = ($this->countModules('user1')>0) + ($this->countModules('user2')>0) + ($this->countModules('user3')>0);
$user_width = $user_count > 0 ? 'user' . floor(99 / $user_count) : '';
$user2_count = ($this->countModules('user4')>0) + ($this->countModules('user5')>0) + ($this->countModules('user6')>0);
$user2_width = $user2_count > 0 ? 'user' . floor(99 / $user2_count) : '';
$user3_count = ($this->countModules('user7')>0) + ($this->countModules('user8')>0) + ($this->countModules('user9')>0);
$user3_width = $user3_count > 0 ? 'user' . floor(99 / $user3_count) : '';
$inside_count = ($this->countModules('inside1')>0) + ($this->countModules('inside2')>0);
$inside_width = $inside_count > 0 ? 'inside' . floor(99 / $inside_count) : '';
$inside2_count = ($this->countModules('inside3')>0) + ($this->countModules('inside4')>0);
$inside2_width = $inside2_count > 0 ? 'inside' . floor(99 / $inside2_count) : '';
$inside3_count = ($this->countModules('inside5')>0) + ($this->countModules('inside6')>0);
$inside3_width = $inside3_count > 0 ? 'inside' . floor(99 / $inside3_count) : '';
$bottom_count = ($this->countModules('bottom1')>0) + ($this->countModules('bottom2')>0) + ($this->countModules('bottom3')>0) + ($this->countModules('bottom4')>0) + ($this->countModules('bottom5')>0);
$bottom_width = $bottom_count > 0 ? 'bottom' . floor(99 / $bottom_count) : '';
$bottom2_count = ($this->countModules('bottom6')>0) + ($this->countModules('bottom7')>0) + ($this->countModules('bottom8')>0) + ($this->countModules('bottom9')>0) + ($this->countModules('bottom10')>0);
$bottom2_width = $bottom2_count > 0 ? 'bottom' . floor(99 / $bottom2_count) : '';
$bottom3_count = ($this->countModules('bottom11')>0) + ($this->countModules('bottom12')>0) + ($this->countModules('bottom13')>0) + ($this->countModules('bottom14')>0) + ($this->countModules('bottom15')>0);
$bottom3_width = $bottom3_count > 0 ? 'bottom' . floor(99 / $bottom3_count) : '';
$bottom4_count = ($this->countModules('bottom16')>0) + ($this->countModules('bottom17')>0) + ($this->countModules('bottom18')>0) + ($this->countModules('bottom19')>0) + ($this->countModules('bottom20')>0);
$bottom4_width = $bottom4_count > 0 ? 'bottom' . floor(99 / $bottom4_count) : '';
$footer_count = ($this->countModules('footer1')>0) + ($this->countModules('footer2')>0) + ($this->countModules('footer3')>0) + ($this->countModules('footer4')>0) + ($this->countModules('footer5')>0);
$footer_width = $footer_count > 0 ? 'footer' . floor(99 / $footer_count) : '';
function modulesClasses($case, $loaded_only = false) {
global $multicolBlocks;
$document = JFactory::getDocument();
$modules = '$mainmodulesBlocks[$case]';
$loaded = 0;
$loadedModule = array();
$classes = array();
foreach($multicolBlocks[$case] as $block) if ($document->countModules($block)>0) { $loaded++; array_push($loadedModule, $block); }
if ($loaded_only) return $loaded;
switch ($loaded) {
case 1:
$classes[$loadedModule[0]][0] = 'full';
$classes[$loadedModule[0]][1] = '$width[0]';
break;
case 2: 
for ($i = 0; $i < count($loadedModule); $i++){
if (!$i) {
$classes[$loadedModule[$i]][0] = 'first';
$classes[$loadedModule[$i]][1] = '$width[0]';
} else {
$classes[$loadedModule[$i]][0] = 'second';
$classes[$loadedModule[$i]][1] = '$width[1]';
}
}
break;
case 3:
for ($i = 0; $i < count($loadedModule); $i++){
if (!$i) {
$classes[$loadedModule[$i]][0] = 'first';
$classes[$loadedModule[$i]][1] = '$width[0]';
} elseif ($i == 1) {
$classes[$loadedModule[$i]][0] = 'second';
$classes[$loadedModule[$i]][1] = '$width[1]';
} else {
$classes[$loadedModule[$i]][0] = 'third';
$classes[$loadedModule[$i]][1] = '$width[2]';
}
}
break;
case 4:
for ($i = 0; $i < count($loadedModule); $i++){
if (!$i) {
$classes[$loadedModule[$i]][0] = 'first';
$classes[$loadedModule[$i]][1] = '$width[0]';
} elseif ($i == 1) {
$classes[$loadedModule[$i]][0] = 'second';
$classes[$loadedModule[$i]][1] = '$width[1]';
} elseif ($i == 2) {
$classes[$loadedModule[$i]][0] = 'third';
$classes[$loadedModule[$i]][1] = '$width[2]';
} else {
$classes[$loadedModule[$i]][0] = 'forth';
$classes[$loadedModule[$i]][1] = '$width[3]';
}
}
break;
case 5:
for ($i = 0; $i < count($loadedModule); $i++){
if (!$i) {
$classes[$loadedModule[$i]][0] = 'first';
$classes[$loadedModule[$i]][1] = '$width[0]';
} elseif ($i == 1) {
$classes[$loadedModule[$i]][0] = 'second';
$classes[$loadedModule[$i]][1] = '$width[1]';
} elseif ($i == 2) {
$classes[$loadedModule[$i]][0] = 'third';
$classes[$loadedModule[$i]][1] = '$width[2]';
} elseif ($i == 3) {
$classes[$loadedModule[$i]][0] = 'forth';
$classes[$loadedModule[$i]][1] = '$width[3]';
} else {
$classes[$loadedModule[$i]][0] = 'fifth';
$classes[$loadedModule[$i]][1] = '$width[4]';
}
}
break;
}
return $classes;
}
function getColumns ($left, $right, $center){
if($left && !$right && !$center) { $columns = "-left-only"; }
if($right && !$left && !$center) { $columns = "-right-only"; }
if($left && $right && !$center) { $columns = "-left-right"; }
if(!$left && !$right && !$center) { $columns = "-wide"; }
if($right && !$left && $center) { $columns = "-right-center"; }
if(!$right && $left && $center) { $columns = "-left-center"; }
if($right && $left && $center) { $columns = "-left-right-center"; }
if(!$right && !$left && $center) { $columns = "-center-only"; }
return $columns;
}
$columns = getColumns($this->countModules( 'left' ),$this->countModules( 'right' ),$this->countModules( 'center' ));
unset($doc->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);
if($responsive=="yes") { include dirname(__FILE__).DIRECTORY_SEPARATOR.'responsive.php'; }
elseif($responsive=="no") { include dirname(__FILE__).DIRECTORY_SEPARATOR.'fixwidth.php'; }
?>