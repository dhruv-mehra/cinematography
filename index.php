<?php
define("TITLE", "Home");
include('includes/header.php');
?>

	<section class="works">

		<?php foreach ($works as $work => $title) {?>
			<div class="work">
				<a href="work.php?title=<?php echo $work; ?>"  >

					<div class="stills">
						<?php foreach ($title["thumbnails"] as $alt => $thumbnail) {?>
							<img src="<?php echo $thumbnail; ?>" alt="<?php echo $alt; ?>">
						<?php } ?>
					</div><!--stills-->

					<h3 class="worktitle"><?php echo $title["name"]; ?></h3>

					<p class="mediaType"><?php echo $title["mediaType"]; ?></p>
				</a>
			</div><!--work-->
		<?php } ?>

	</section><!--works-->

<?php include('includes/footer.php');?>
