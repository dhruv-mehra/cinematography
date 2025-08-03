<?php
define("TITLE","Selected Work");
include('includes/header.php');

function stripBadChars($input){
	$output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
	return $output;
}

if (isset($_GET['title'])) {
	$workTitle = stripBadChars($_GET['title']);

	$work = $works[$workTitle];
}

function calculate_ratio($aspect_ratio){
	$values = preg_split("/[s:]/", $aspect_ratio);
	$ratio = $values[1]/$values[0]*100;
	return $ratio;
}
?>

<!-- atl -->
<section class="atl">
	<h3><?php echo $work["name"]; ?></h3>
	<div class="atlcreds">
		<?php foreach ($work["atl"] as $role => $name){ ?>
			<p><span class="role"><?php echo $role; ?></span>: <?php echo $name; ?></p>
		<?php } ?>
	</div><!-- atlcreds -->
	<ol class="specs">
		<?php
			if(!empty($work["mediaType"])){?>
				<li><?php echo $work["mediaType"]; ?></li>
				<div class="spacer"> | </div>
		<?php }
			if(!empty($work["genre"])){?>
				<li><?php echo $work["genre"]; ?></li>
				<div class="spacer"> | </div>
		<?php }
			if(!empty($work["language"])){?>
				<li><?php echo $work["language"]; ?></li>
				<div class="spacer"> | </div>
		<?php }
			if(!empty($work["duration"])){?>
				<li><?php echo $work["duration"]; ?></li>
				<div class="spacer"> | </div>
		<?php }
			if(!empty($work["aspectRatio"])){?>
				<li><?php echo $work["aspectRatio"]; ?></li>
				<div class="spacer"> | </div>
		<?php }
			if(!empty($work["color"])){?>
				<li><?php echo $work["color"]; ?></li>
				<div class="spacer"> | </div>
		<?php }
			if(!empty($work["year"])){?>
				<li><?php echo $work["year"]; ?></li>
		<?php } ?>
	</ol><!-- specs -->
</section><!-- atl -->

<!-- iframe -->
<?php if($work["embed"] != ""){ ?>
	<div style="padding:<?php echo calculate_ratio($work["aspectRatio"]); ?>% 0 0 0;position:relative;"><iframe src=<?php echo $work["embed"];?> frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title=<?php echo $work["name"]; ?>></iframe></div>
	<?php
		include('includes/credits.php');
		include('includes/gallery.php');
	} else {
		include('includes/gallery.php');
		include('includes/credits.php');
	}?>

<!-- accolades -->
<section class="accolades">
	<!-- poster -->
	<?php if(file_exists($work["poster"])){ ?>
		<div class="poster">
					<img src =<?php echo $work["poster"]; ?> alt=<?php echo $work["name"]; ?> "Poster" onclick="openModal();currentSlide(17)" class="hover-shadow">
					<p><span class="role">poster design by: </span><?php echo $work["posterDesign"]; ?></p>
		</div><!-- poster -->
	<?php } ?>

	<!-- festivals -->
	<?php if(!$work["festivals"]){
				}else{ ?>
					<div class="festivals">
						<span class="officialselections">Official Selections</span>
						<ul>
							<?php foreach ($work["festivals"] as $name => $awards){ ?>
								<li><?php echo $name; ?></li>
									<?php foreach ($awards as $award){
										if($award != ""){?>
											<li class ="award"><?php echo $award; ?></li>
										<?php }}}} ?>
						</ul>
					</div><!-- festivals -->
</section><!-- accolades -->

<!-- buttons -->
<?php
$keys = array_keys($works); //array of keys

$length = count($keys)-1; //# of keys

$current = array_search($workTitle, $keys, true); //index of current page

$next = $current<$length ? $keys[$current+1] : $keys[0];//next index key name

$prev = $current>0 ? $keys[$current-1] : $keys[$length];//previous index key name
?>

<section class="buttons">
	<div class="back"><a href="work.php?title=<?php echo $prev ?>">PREV</a></div>
	<div class="projects"><a href="index.php">BACK TO WORK</a></div>
	<div class="forward"><a href="work.php?title=<?php echo $next ?>">NEXT</a></div>
</section><!-- buttons -->

<!-- Footer -->
<?php include('includes/footer.php'); ?>
