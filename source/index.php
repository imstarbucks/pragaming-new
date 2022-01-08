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
		<section class="home position-relative">
			<div class="d-flex flex-column align-items-center justify-content-center color-smoke absolute-center">
				<h2 class="font-3xl">
					Welcome To
				</h2>
				<h1 class="hero-logo font-header glitch color-soft-peach position-relative">
					<span aria-hidden="true">Pragaming</span>Pragaming<span aria-hidden="true">Pragaming</span>
				</h1>
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
