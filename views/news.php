
<?php require_once(BASE_PATH.'views/templates/header.php'); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="page-with-sidebar-right">

	<h2 class="page-title">
		News
	</h2>

	<div class="left-content">
		<div class="loading-spinner centered facebook spacer-bottom"><div class="outer"><div class="inner"></div></div></div>
		<?php
			$settings	= 'data-width="500px" data-height="800px"';
		?>
		<div class="fb-page" data-href="https://www.facebook.com/somewheretheresacure" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" <?php echo $settings; ?>></div>
	</div>

	<div class="sidebar-right no-bg-color no-padding">
		<div class="loading-spinner centered twitter spacer-bottom"><div class="outer"><div class="inner"></div></div></div>
		<a class="twitter-timeline" href="https://twitter.com/smwhrthersacure">Tweets by smwhrthersacure</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div>

</div>

<script type="text/javascript">
	$(function() {
		var fbCon = $('.fb-page'),
			fbLoaded = false,
			twitterLoaded = false,
			tries = 0,
			socialTimer;

		socialTimer = setInterval(function() {
			var twitterCon = $('a.twitter-timeline')

			if (twitterCon.length > 0) {
				$('.loading-spinner.twitter').hide();
				twitterLoaded = true;
			}

			if (fbCon.attr('fb-xfbml-state') == 'rendered') {
				$('.loading-spinner.facebook').hide();
				fbLoaded = true;
			}

			if ((twitterLoaded && fbLoaded) || tries++ > 80) {
				clearInterval(socialTimer);
			}
			console.log('hi');
		}, 125);
	});
</script>

<?php require_once(BASE_PATH.'views/templates/footer.php'); ?>
