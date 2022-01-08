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
				<h2 id="welcome-header" class="font-3xl">
					Welcome To
				</h2>
				<h1 id="hero-logo" class="hero-logo font-header glitch color-soft-peach position-relative">
					<span aria-hidden="true">Pragaming</span>Pragaming<span aria-hidden="true">Pragaming</span>
				</h1>
				<p class="description">
					Hi my name is Prag (Pronounce as "preg" from pregnant XD). I'm a part-time streamer/video editor. Voluptate consectetur dolor excepteur incididunt.
				</p>
			</div>
			<div class="scroll-indicator absolute-bottom">
				<?= file_get_contents('img/mouse.svg'); ?>
				<p>Scroll for more</p>
			</div>
		</section>
	</main>
</body>

<?php
include 'script.php';
?>

</html>
