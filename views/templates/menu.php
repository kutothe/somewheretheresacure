<?php
	$selected	= (defined('SELECTED_VIEW')) ? -1 : 0;

	if (defined('SELECTED_VIEW'))
	{
		switch (SELECTED_VIEW)
		{
			case '':
			case 'about.php':
			case 'home.php':
				$selected = 8;
				break;

			case 'our_story.php':
				$selected = 1;
				break;

			case 'anthem_of_hope.php':
				$selected = 2;
				break;

			case 'events_and_links.php':
				$selected = 4;
				break;

			case 'thank_you.php':
				$selected = 5;
				break;

			case 'contact.php':
				$selected = 6;
				break;

			case 'news.php':
				$selected = 7;
				break;
		}
	}
?>

<ul id="app-menu">
	<li class="<?php if ($selected == 0) echo 'selected' ?> home">
		<a href="<?php echo BASE_URL; ?>" alt="Home"><span>Home</span></a>
	</li>
	<li class="<?php if ($selected == 1) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>our_story" alt="Our Story"><span>Our Story</span></a>
	</li>
	<li class="<?php if ($selected == 2) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>anthem_of_hope" alt="Anthem of Hope"><span>Anthem of Hope</span></a>
	</li>
	<li class="<?php if ($selected == 7) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>news" alt="News"><span>News</span></a>
	</li>
	<li class="<?php if ($selected == 4) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>events_and_links" alt="Events and Links"><span>Events &amp; Links</span></a>
	</li>
	<li class="<?php if ($selected == 5) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>thank_you" alt="Thank You"><span>Thank You</span></a>
	</li>
	<li class="<?php if ($selected == 6) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>contact" alt="Contact Us"><span>Contact Us</span></a>
	</li>
	<li class="<?php if ($selected == 8) echo 'selected' ?>">
		<a href="<?php echo BASE_URL; ?>about" alt="About"><span>About</span></a>
	</li>
</ul>
