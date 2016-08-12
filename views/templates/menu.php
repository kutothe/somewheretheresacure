<?php
	$selected	= 0;

	if (defined('SELECTED_VIEW'))
	{
		switch (SELECTED_VIEW)
		{
			case 'photo_album.php':
				$selected = 1;
				break;

			case 'our_favorite_charities.php':
				$selected = 2;
				break;

			case 'events_and_links.php':
				$selected = 3;
				break;

			case 'thank_you.php':
				$selected = 4;
				break;

			case 'contact.php':
				$selected = 5;
				break;
		}
	}
?>

<ul id="app-menu">
	<li class="<?php if ($selected == 0) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>" alt="Our Story"><span>Our Story</span></a>
	</li>
	<li class="<?php if ($selected == 1) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>photo_album" alt="Photos"><span>Photos</span></a>
	</li>
	<li class="<?php if ($selected == 2) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>our_favorite_charities" alt="Charities"><span>Charities</span></a>
	</li>
	<li class="<?php if ($selected == 3) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>events_and_links" alt="Events and Links"><span>Events &amp; Links</span></a>
	</li>
	<li class="<?php if ($selected == 4) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>thank_you" alt="Thank You"><span>Thank You</span></a>
	</li>
	<li class="<?php if ($selected == 5) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>contact" alt="Contact Us"><span>Contact Us</span></a>
	</li>
</ul>
