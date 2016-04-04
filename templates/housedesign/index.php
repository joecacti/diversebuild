<?php defined('_JEXEC') or die('Restricted access'); ?>
<?php require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'framework/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
</head>

<body class="<?php echo $this->params->get('fontfamily'); ?>">
<div class="diverse-head">
	<img class="company-logo" src="http://diversebuild.com/images/templates/housedesign/images/diverse-logo.png">
</div>
<?php if($this->countModules('bannertop')) : ?>
<div id="banner-outer" class="clr">
<div id="<?php if($bannerwidth=="fix") { echo "banner2-float"; } elseif($bannerwidth=="wide") { echo "banner-float"; } ?>">
<div<?php if($bannerwidth=="fix") { echo ' id="banner-inner'; } ?>">
<jdoc:include type="modules" name="bannertop" style="none" />
</div>
</div>
</div>
<?php endif; ?>
<div id="header-outer" class="clr">
<div id="header-inner">
<div>
</div>
<?php include dirname(__FILE__).DIRECTORY_SEPARATOR.'framework/toolbar.php'; ?>
</div>
</div>
<?php if($this->countModules('banner')) : ?>
<div id="banner-outer" class="clr">
<div id="<?php if($bannerwidth=="fix") { echo "banner2-float"; } elseif($bannerwidth=="wide") { echo "banner-float"; } ?>">
<div<?php if($bannerwidth=="fix") { echo ' id="banner-inner'; } ?>">
<jdoc:include type="modules" name="banner" style="none" />
</div>
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block1'); if($this->countModules('advert1') or $this->countModules('advert2') or $this->countModules('advert3') or $this->countModules('advert4') or $this->countModules('advert5')) : ?>
<div id="advert-outer" class="clr">
<div id="advert-float">
<div id="advert-inner" class="<?php echo $advert_width; ?>">
<?php if($this->countModules('advert1')) : ?>
<div class="advert <?php echo $mClasses['advert1'][0]; ?>">
<jdoc:include type="modules" name="advert1" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert2')) : ?>
<div class="advert <?php echo $mClasses['advert2'][0]; ?>">
<jdoc:include type="modules" name="advert2" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert3')) : ?>
<div class="advert <?php echo $mClasses['advert3'][0]; ?>">
<jdoc:include type="modules" name="advert3" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert4')) : ?>
<div class="advert <?php echo $mClasses['advert4'][0]; ?>">
<jdoc:include type="modules" name="advert4" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('advert5')) : ?>
<div class="advert <?php echo $mClasses['advert5'][0]; ?>">
<jdoc:include type="modules" name="advert5" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
</div>
<?php endif; ?>
<div id="spacer" class="clr">&nbsp;</div>
<?php $mClasses = modulesClasses('block2'); if($this->countModules('upper1') or $this->countModules('upper2') or $this->countModules('upper3') or $this->countModules('upper4') or $this->countModules('upper5')) : ?>
<div id="upper-outer" class="clr">
<div id="upper-inner" class="<?php echo $upper_width; ?>">
<?php if($this->countModules('upper1')) : ?>
<div class="upper <?php echo $mClasses['upper1'][0]; ?>">
<jdoc:include type="modules" name="upper1" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper2')) : ?>
<div class="upper <?php echo $mClasses['upper2'][0]; ?>">
<jdoc:include type="modules" name="upper2" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper3')) : ?>
<div class="upper <?php echo $mClasses['upper3'][0]; ?>">
<jdoc:include type="modules" name="upper3" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper4')) : ?>
<div class="upper <?php echo $mClasses['upper4'][0]; ?>">
<jdoc:include type="modules" name="upper4" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper5')) : ?>
<div class="upper <?php echo $mClasses['upper5'][0]; ?>">
<jdoc:include type="modules" name="upper5" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block3'); if($this->countModules('upper6') or $this->countModules('upper7') or $this->countModules('upper8') or $this->countModules('upper9') or $this->countModules('upper10')) : ?>
<div id="upper-outer" class="clr">
<div id="upper-inner" class="<?php echo $upper2_width; ?>">
<?php if($this->countModules('upper6')) : ?>
<div class="upper <?php echo $mClasses['upper6'][0]; ?>">
<jdoc:include type="modules" name="upper6" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper7')) : ?>
<div class="upper <?php echo $mClasses['upper7'][0]; ?>">
<jdoc:include type="modules" name="upper7" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper8')) : ?>
<div class="upper <?php echo $mClasses['upper8'][0]; ?>">
<jdoc:include type="modules" name="upper8" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper9')) : ?>
<div class="upper <?php echo $mClasses['upper9'][0]; ?>">
<jdoc:include type="modules" name="upper9" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper10')) : ?>
<div class="upper <?php echo $mClasses['upper10'][0]; ?>">
<jdoc:include type="modules" name="upper10" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('wide1')) : ?>
<div id="wide-outer" class="clr<?php if($autowide=="yes") { echo " autohidewide"; } ?>">
<div id="wide-float">
<jdoc:include type="modules" name="wide1" style="none" />
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block4'); if($this->countModules('upper11') or $this->countModules('upper12') or $this->countModules('upper13') or $this->countModules('upper14') or $this->countModules('upper15')) : ?>
<div id="upper-outer" class="clr">
<div id="upper-inner" class="<?php echo $upper3_width; ?>">
<?php if($this->countModules('upper11')) : ?>
<div class="upper <?php echo $mClasses['upper11'][0]; ?>">
<jdoc:include type="modules" name="upper11" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper12')) : ?>
<div class="upper <?php echo $mClasses['upper12'][0]; ?>">
<jdoc:include type="modules" name="upper12" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper13')) : ?>
<div class="upper <?php echo $mClasses['upper13'][0]; ?>">
<jdoc:include type="modules" name="upper13" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper14')) : ?>
<div class="upper <?php echo $mClasses['upper14'][0]; ?>">
<jdoc:include type="modules" name="upper14" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper15')) : ?>
<div class="upper <?php echo $mClasses['upper15'][0]; ?>">
<jdoc:include type="modules" name="upper15" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block5'); if($this->countModules('upper16') or $this->countModules('upper17') or $this->countModules('upper18') or $this->countModules('upper19') or $this->countModules('upper20')) : ?>
<div id="upper-outer" class="clr">
<div id="upper-inner" class="<?php echo $upper4_width; ?>">
<?php if($this->countModules('upper16')) : ?>
<div class="upper <?php echo $mClasses['upper16'][0]; ?>">
<jdoc:include type="modules" name="upper16" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper17')) : ?>
<div class="upper <?php echo $mClasses['upper17'][0]; ?>">
<jdoc:include type="modules" name="upper17" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper18')) : ?>
<div class="upper <?php echo $mClasses['upper18'][0]; ?>">
<jdoc:include type="modules" name="upper18" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper19')) : ?>
<div class="upper <?php echo $mClasses['upper19'][0]; ?>">
<jdoc:include type="modules" name="upper19" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('upper20')) : ?>
<div class="upper <?php echo $mClasses['upper20'][0]; ?>">
<jdoc:include type="modules" name="upper20" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('wide2')) : ?>
<div id="wide-outer" class="clr<?php if($autowide=="yes") { echo " autohidewide"; } ?>">
<div id="wide-float">
<jdoc:include type="modules" name="wide2" style="none" />
</div>
</div>
<?php endif; ?>
<div id="body-outer" class="clr">
<div id="body-inner" class="<?php echo $centerposition; ?>">
<?php if($this->countModules('left')) : ?>
<div id="left<?php echo $columns; ?>">
<jdoc:include type="modules" name="left" style="mhtml" />
</div>
<?php endif; ?>
<div id="body<?php echo $columns; ?>">
<?php $mClasses = modulesClasses('block6'); if($this->countModules('user1') or $this->countModules('user2') or $this->countModules('user3')) : ?>
<div id="user<?php echo $columns; ?>" class="clr">
<div class="<?php echo $user_width; ?>">
<?php if($this->countModules('user1')) : ?>
<div class="user <?php echo $mClasses['user1'][0]; ?>">
<jdoc:include type="modules" name="user1" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user2')) : ?>
<div class="user <?php echo $mClasses['user2'][0]; ?>">
<jdoc:include type="modules" name="user2" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user3')) : ?>
<div class="user <?php echo $mClasses['user3'][0]; ?>">
<jdoc:include type="modules" name="user3" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block7'); if($this->countModules('user4') or $this->countModules('user5') or $this->countModules('user6')) : ?>
<div id="user<?php echo $columns; ?>" class="clr">
<div class="<?php echo $user2_width; ?>">
<?php if($this->countModules('user4')) : ?>
<div class="user <?php echo $mClasses['user4'][0]; ?>">
<jdoc:include type="modules" name="user4" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user5')) : ?>
<div class="user <?php echo $mClasses['user5'][0]; ?>">
<jdoc:include type="modules" name="user5" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user6')) : ?>
<div class="user <?php echo $mClasses['user6'][0]; ?>">
<jdoc:include type="modules" name="user6" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<div class="clr">
<div id="layer<?php echo $columns; ?>">
<?php $mClasses = modulesClasses('block9'); if($this->countModules('inside1') or $this->countModules('inside2')) : ?>
<div id="inside<?php echo $columns; ?>" class="clr">
<div class="<?php echo $inside_width; ?>">
<?php if($this->countModules('inside1')) : ?>
<div class="inside <?php echo $mClasses['inside1'][0]; ?>">
<jdoc:include type="modules" name="inside1" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('inside2')) : ?>
<div class="inside <?php echo $mClasses['inside2'][0]; ?>">
<jdoc:include type="modules" name="inside2" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<div id="mainbody" class="clr">
<jdoc:include type="message" />
<jdoc:include type="component" />
</div>
<?php $mClasses = modulesClasses('block10'); if($this->countModules('inside3') or $this->countModules('inside4')) : ?>
<div id="inside<?php echo $columns; ?>" class="clr">
<div class="<?php echo $inside2_width; ?>">
<?php if($this->countModules('inside3')) : ?>
<div class="inside <?php echo $mClasses['inside3'][0]; ?>">
<jdoc:include type="modules" name="inside3" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('inside4')) : ?>
<div class="inside <?php echo $mClasses['inside4'][0]; ?>">
<jdoc:include type="modules" name="inside4" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block11'); if($this->countModules('inside5') or $this->countModules('inside6')) : ?>
<div id="inside<?php echo $columns; ?>" class="clr">
<div class="<?php echo $inside3_width; ?>">
<?php if($this->countModules('inside5')) : ?>
<div class="inside <?php echo $mClasses['inside5'][0]; ?>">
<jdoc:include type="modules" name="inside5" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('inside6')) : ?>
<div class="inside <?php echo $mClasses['inside6'][0]; ?>">
<jdoc:include type="modules" name="inside6" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
</div>
<?php if($this->countModules('center')) : ?>
<div id="center<?php echo $columns; ?>">
<jdoc:include type="modules" name="center" style="mhtml" />
</div>
<?php endif; ?>
</div>
<?php $mClasses = modulesClasses('block8'); if($this->countModules('user7') or $this->countModules('user8') or $this->countModules('user9')) : ?>
<div id="user<?php echo $columns; ?>" class="clr">
<div class="<?php echo $user3_width; ?>">
<?php if($this->countModules('user7')) : ?>
<div class="user <?php echo $mClasses['user7'][0]; ?>">
<jdoc:include type="modules" name="user7" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user8')) : ?>
<div class="user <?php echo $mClasses['user8'][0]; ?>">
<jdoc:include type="modules" name="user8" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('user9')) : ?>
<div class="user <?php echo $mClasses['user9'][0]; ?>">
<jdoc:include type="modules" name="user9" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
</div>
<?php if($this->countModules('right')) : ?>
<div id="right<?php echo $columns; ?>">
<jdoc:include type="modules" name="right" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php if($this->countModules('wide3')) : ?>
<div id="wide-outer" class="clr<?php if($autowide=="yes") { echo " autohidewide"; } ?>">
<div id="wide-float">
<jdoc:include type="modules" name="wide3" style="none" />
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block12'); if($this->countModules('bottom1') or $this->countModules('bottom2') or $this->countModules('bottom3') or $this->countModules('bottom4') or $this->countModules('bottom5')) : ?>
<div id="bottom-outer" class="clr">
<div id="bottom-inner" class="<?php echo $bottom_width; ?>">
<?php if($this->countModules('bottom1')) : ?>
<div class="bottom <?php echo $mClasses['bottom1'][0]; ?>">
<jdoc:include type="modules" name="bottom1" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom2')) : ?>
<div class="bottom <?php echo $mClasses['bottom2'][0]; ?>">
<jdoc:include type="modules" name="bottom2" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom3')) : ?>
<div class="bottom <?php echo $mClasses['bottom3'][0]; ?>">
<jdoc:include type="modules" name="bottom3" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom4')) : ?>
<div class="bottom <?php echo $mClasses['bottom4'][0]; ?>">
<jdoc:include type="modules" name="bottom4" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom5')) : ?>
<div class="bottom <?php echo $mClasses['bottom5'][0]; ?>">
<jdoc:include type="modules" name="bottom5" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block13'); if($this->countModules('bottom6') or $this->countModules('bottom7') or $this->countModules('bottom8') or $this->countModules('bottom9') or $this->countModules('bottom10')) : ?>
<div id="bottom-outer" class="clr">
<div id="bottom-inner" class="<?php echo $bottom2_width; ?>">
<?php if($this->countModules('bottom6')) : ?>
<div class="bottom <?php echo $mClasses['bottom6'][0]; ?>">
<jdoc:include type="modules" name="bottom6" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom7')) : ?>
<div class="bottom <?php echo $mClasses['bottom7'][0]; ?>">
<jdoc:include type="modules" name="bottom7" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom8')) : ?>
<div class="bottom <?php echo $mClasses['bottom8'][0]; ?>">
<jdoc:include type="modules" name="bottom8" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom9')) : ?>
<div class="bottom <?php echo $mClasses['bottom9'][0]; ?>">
<jdoc:include type="modules" name="bottom9" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom10')) : ?>
<div class="bottom <?php echo $mClasses['bottom10'][0]; ?>">
<jdoc:include type="modules" name="bottom10" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('wide4')) : ?>
<div id="wide-outer" class="clr<?php if($autowide=="yes") { echo " autohidewide"; } ?>">
<div id="wide-float">
<jdoc:include type="modules" name="wide4" style="none" />
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block14'); if($this->countModules('bottom11') or $this->countModules('bottom12') or $this->countModules('bottom13') or $this->countModules('bottom14') or $this->countModules('bottom15')) : ?>
<div id="bottom-outer" class="clr">
<div id="bottom-inner" class="<?php echo $bottom3_width; ?>">
<?php if($this->countModules('bottom11')) : ?>
<div class="bottom <?php echo $mClasses['bottom11'][0]; ?>">
<jdoc:include type="modules" name="bottom11" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom12')) : ?>
<div class="bottom <?php echo $mClasses['bottom12'][0]; ?>">
<jdoc:include type="modules" name="bottom12" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom13')) : ?>
<div class="bottom <?php echo $mClasses['bottom13'][0]; ?>">
<jdoc:include type="modules" name="bottom13" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom14')) : ?>
<div class="bottom <?php echo $mClasses['bottom14'][0]; ?>">
<jdoc:include type="modules" name="bottom14" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom15')) : ?>
<div class="bottom <?php echo $mClasses['bottom15'][0]; ?>">
<jdoc:include type="modules" name="bottom15" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block15'); if($this->countModules('bottom16') or $this->countModules('bottom17') or $this->countModules('bottom18') or $this->countModules('bottom19') or $this->countModules('bottom20')) : ?>
<div id="bottom-outer" class="clr">
<div id="bottom-float">
<div id="bottom-inner" class="<?php echo $bottom4_width; ?>">
<?php if($this->countModules('bottom16')) : ?>
<div class="bottom <?php echo $mClasses['bottom16'][0]; ?>">
<jdoc:include type="modules" name="bottom16" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom17')) : ?>
<div class="bottom <?php echo $mClasses['bottom17'][0]; ?>">
<jdoc:include type="modules" name="bottom17" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom18')) : ?>
<div class="bottom <?php echo $mClasses['bottom18'][0]; ?>">
<jdoc:include type="modules" name="bottom18" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom19')) : ?>
<div class="bottom <?php echo $mClasses['bottom19'][0]; ?>">
<jdoc:include type="modules" name="bottom19" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('bottom20')) : ?>
<div class="bottom <?php echo $mClasses['bottom20'][0]; ?>">
<jdoc:include type="modules" name="bottom20" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('wide5')) : ?>
<div id="wide-outer" class="clr<?php if($autowide=="yes") { echo " autohidewide"; } ?>">
<div id="wide2-float">
<jdoc:include type="modules" name="wide5" style="none" />
</div>
</div>
<?php endif; ?>
<?php $mClasses = modulesClasses('block16'); if($this->countModules('footer1') or $this->countModules('footer2') or $this->countModules('footer3') or $this->countModules('footer4') or $this->countModules('footer5')) : ?>
<div id="footer-outer" class="clr">
<div id="footer-float">
<div id="footer-inner" class="<?php echo $footer_width; ?>">
<?php if($this->countModules('footer1')) : ?>
<div class="footer <?php echo $mClasses['footer1'][0]; ?>">
<jdoc:include type="modules" name="footer1" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer2')) : ?>
<div class="footer <?php echo $mClasses['footer2'][0]; ?>">
<jdoc:include type="modules" name="footer2" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer3')) : ?>
<div class="footer <?php echo $mClasses['footer3'][0]; ?>">
<jdoc:include type="modules" name="footer3" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer4')) : ?>
<div class="footer <?php echo $mClasses['footer4'][0]; ?>">
<jdoc:include type="modules" name="footer4" style="mhtml" />
</div>
<?php endif; ?>
<?php if($this->countModules('footer5')) : ?>
<div class="footer <?php echo $mClasses['footer5'][0]; ?>">
<jdoc:include type="modules" name="footer5" style="mhtml" />
</div>
<?php endif; ?>
</div>
</div>
</div>
<?php endif; ?>
<div id="copyright-outer" class="clr">
<div id="copyright-inner" class="<?php if($showdesigner=="yes") { echo "show"; } elseif($showdesigner=="no") { echo "auto"; } ?>">
<div id="copyright">Copyright &copy; <?php echo date("Y"); ?> <?php if(empty($copyright)) { echo "$sitetitle"; } elseif($copyright) { echo "$copyright"; } ?>. All Right Reserved.</div>
<?php if($showdesigner=="yes") { ?>
<div id="designer">Design by <a href="<?php echo "$url"; ?>" target="_blank"><?php echo "$webdesigner"; ?></a><br>
<p style="float: right;margin-top: 24px;font-size: 12px;font-weight: 300;"><a href="http://diversebuild.com/administrator/index.php">Admin Login</a> | <a href="https://login.bluehost.com/hosting/webmail">Check Email</a></p>
</div>
<?php } ?>
</div>
</div>
</body>
</html>