<?php
$gallery = get_field('background_images', 'options');
$slideDurration = get_field('slide_durration', 'options');
$fadeDurration = get_field('fade_durration', 'options');
//print_r($gallery);
$imagesString;
foreach ($gallery as $img) {
	if ( isset($imagesString) ) {
		$imagesString .= ", \"" . $img['url'] . "\"";
	} else {
		$imagesString = "\"" . $img['url'] . "\"";
	}
}
if (!isset($slideDurration)) {
	$slideDurration = 3000;
}
if (!isset($fadeDurration)) {
	$fadeDurration = 750;
}
?>
<script type="text/javascript">
	jQuery.backstretch([
		<?php echo $imagesString; ?>
	], {duration: <?php echo $slideDurration; ?>, fade: <?php echo $fadeDurration; ?>});
</script>