<!-- gallery -->
<section class="gallery">
<?php
	$imagePath = $work["imagePath"];

	if(file_exists($imagePath)){
		$images = array();
		foreach (scandir($imagePath) as $image){
			if ($image !== '.' && $image !== '..' && $image !== '.DS_Store') {
            $images[] = $image;}
			}
		$imgcount = count($images);
		if($imgcount > 16){$imgcount = 16;}
	?>
		<!-- Images used to open the lightbox -->
		<div class="row">
			<?php
				for($col=0; $col < 4; $col+=1){ ?>
				<div class="column">
					<?php for($img = $col; $img < $imgcount; $img+=4){ ?>
						<img src="<?php echo $imagePath; ?>/<?php echo $images[$img]; ?>" alt="<?php echo $work["name"]; ?>-<?php echo $images[$img];?>"  onclick="openModal();currentSlide(<?php echo $img+1 ?>)" class="hover-shadow">
					<?php } ?>
				</div><!-- column -->
			<?php } ?>
		</div><!-- row -->
	<?php } ?>
</section><!-- gallery -->

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
	<div  class="lightbox">
		<div class="modal-content">
			<?php foreach($images as $img){ ?>
				<div class="mySlides">
					<img src="<?php echo $imagePath; ?>/<?php echo $img; ?>" alt="<?php echo $work["name"]; ?>-<?php echo $img;?>">
				</div><!-- mySlides -->
			<?php } ?>

			<!-- Next/previous controls -->
			<div class="prevnext">
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="close" onclick="closeModal()">BACK</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div><!-- Next/previous controls -->

		</div><!-- modal-content -->
	</div><!-- lightbox -->
</div><!-- modal -->
