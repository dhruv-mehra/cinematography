<!-- credits -->
<section class="credits">
		<div class="logline">
			<p><?php echo $work["logline"]; ?></p>
		</div><!-- logline -->
		<div class="btl">
			<?php foreach ($work["btl"] as $role => $name){ ?>
				<p><span class="role"><?php echo $role; ?></span>: <?php echo $name; ?></p>
			<?php } ?>
		</div><!-- btl -->
</section><!-- credits -->
