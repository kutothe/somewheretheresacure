
<header id="header">
    <div class="fixed">
        <div class="container">
            <section class="header-left">
                <a href="<?php echo BASE_URL; ?>" title="Home" id="header-app-logo">
                    Somewhere There's a Cure
                </a>

				<?php require_once(BASE_PATH.'views/templates/menu.php'); ?>

            </section>

            <section class="header-right no-print">
				<h4>&#9834; Anthem of Hope</h4>
				<audio controls loop>
					<source src="<?php echo ASSETS_URL; ?>audio/molly-gartland-johnson_somewheretheresacure-for-sarah.mp3" type="audio/mpeg">
					Your browser does not support the audio element.
				</audio>
            </section>
        </div>
    </div>
</header>
