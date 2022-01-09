<!DOCTYPE html>
<html lang="en">

<?php
	include 'head.php';
?>

<body class="bg-jacarta">
	<?php
		include 'include/navigation.php'
	?>
	<main>
		<section class="home">
			<div class="d-flex flex-column align-items-center justify-content-center color-smoke absolute-center">
				<h2 id="welcome-header" class="color-smoke font-3xl">
					Welcome To
				</h2>
				<h1 id="hero-logo" class="hero-logo font-header glitch color-soft-peach position-relative">
					<span aria-hidden="true">Pragaming</span>Pragaming<span aria-hidden="true">Pragaming</span>
				</h1>
				<p class="description text-center">
					Hi my name is Prag (Pronounce as "preg" from pregnant XD). I'm a part-time streamer/video editor. Voluptate consectetur dolor excepteur incididunt.Esse nisi ex eiusmod adipisicing amet adipisicing nulla aute. Ut eiusmod in proident laborum pariatur fugiat deserunt. Lorem ullamco consequat sunt velit dolore nulla ex. Proident est incididunt deserunt exercitation veniam est dolor nisi occaecat. Duis esse incididunt reprehenderit laborum deserunt ut ullamco eu velit commodo esse officia do dolore.
				</p>
			</div>
			<div class="scroll-indicator absolute-bottom">
				<?= file_get_contents('img/mouse.svg'); ?>
				<p>Scroll for more</p>
			</div>
		</section>
		<section class="about-us container-padding">
			<h2 class="text-center">About Pragaming</h2>
			<p class="color-salmon text-center description mx-auto my-5">
				In Pragaming, we're all considered as "PragFam"! Join our Discord to be part of the family today!. I also stream on Twitch occationaly. Follow my socials to be updated on my Twitch schedule. Subscribe to my YouTube for more short clip/contents.
			</p>
			<div class="logos-wrapper">
				<div class="logo-holder">
					<?= file_get_contents('img/logos/discord.svg'); ?>
				</div>
				<div class="logo-holder">
					<?= file_get_contents('img/logos/twitch.svg'); ?>
				</div>
				<div class="logo-holder">
					<?= file_get_contents('img/logos/facebook.svg'); ?>
				</div>
				<div class="logo-holder">
					<?= file_get_contents('img/logos/youtube.svg'); ?>
				</div>
				<div class="logo-holder">
					<?= file_get_contents('img/logos/instagram.svg'); ?>
				</div>
			</div>
		</section>
	</main>
</body>

<?php
	include 'script.php';
?>

</html>
