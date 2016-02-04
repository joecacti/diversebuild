<?php defined('_JEXEC') or die; ?>
<?php if($map_address) { echo '<div class="map_address">'.$map_address.'</div>'; } ?>
<?php if($map_phone) { echo '<div class="map_phone">'.$map_phone.'</div>'; } ?>
<?php if($map_email) { echo '<div class="map_email">'.$map_email.'</div>'; } ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true"></script>
<script type="text/javascript">
var myLatlng  = new google.maps.LatLng(<?php echo "$map_latitude"; ?>,<?php echo "$map_longitude"; ?>);
function initialize() {
var mapOptions = {
zoom: <?php echo "$map_zoom"; ?>,
center: myLatlng,
mapTypeId: google.maps.MapTypeId.ROADMAP				};
var map = new google.maps.Map(document.getElementById('google_map_canvas'), mapOptions);
var marker = new google.maps.Marker({position:myLatlng, map:map});	
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div <?php if(empty($map_class)) { echo 'style="height:'.$map_height.'px"'; } elseif($map_class) echo 'class="'.$map_class.'"'; ?> id="google_map_canvas"></div>