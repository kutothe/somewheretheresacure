
<?php
	$img_base_url	= ASSETS_URL.'img/slideshow/';
	$img_base_path	= ASSETS_PATH.'img/slideshow/';

	$images			= glob($img_base_path.'*.jpg');
?>
<div id="slick-carousel-container">
	<?php foreach ($images as $key=>$image): ?>
		<div <?php if ($key > 0) echo 'style="display:none;"'; ?> class="centered">
			<img src="<?php echo $img_base_url.str_replace($img_base_path, '', $image); ?>"/>
		</div>
	<?php endforeach; ?>
</div>

<script type="text/javascript">
	$(function() {
		var slickCon = $('#slick-carousel-container'),
			firstImg = slickCon.children().first().find('img');

		slickCon.children().show();

		slickCon.slick({
			infinite: true,
			dots: false,
			autoplay: true,
			autoplaySpeed: 5000
		});

		firstImg.on('load', function() {
			slickCon.slick('refresh');
		});
	});
</script>
