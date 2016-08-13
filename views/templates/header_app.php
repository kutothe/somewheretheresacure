
<div id="mobile-menu-bar">
	<button class="c-hamburger c-hamburger--htla">
		<span>toggle menu</span>
	</button>
	<h1>Somewhere There's a Cure</h1>
</div>
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
				<div class="audio-con">
					<audio controls loop>
						<source src="<?php echo ASSETS_URL; ?>audio/molly-gartland-johnson_somewheretheresacure-for-sarah.mp3" type="audio/mpeg">
						Your browser does not support the audio element.
					</audio>
				</div>
            </section>
        </div>
    </div>
</header>
