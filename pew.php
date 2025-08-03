<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pew! The Musical | Dhruv Mehra</title>
	<link rel="stylesheet" href="CSS/index.css">
	<link rel="stylesheet" href="CSS/film.css">
	<link rel="stylesheet" href="https://use.typekit.net/lsv0hpc.css">
	<link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/56f76b372d.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A Northwestern University thesis film about the musical theater and sexual awakenings in the church. Created by Cory Griffin-Fiorella.">
	<link rel="canonical" href="https://www.dmehra.com/pew.html">
	<link rel="shortcut icon" href="assets/favicon.png">

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177242966-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177242966-1');
</script>
</head>

<body>
	<header id="navbar">
		<div class="title">
				<h1 id="title">
					<a href="index.html" class="active">
					<p>DHRUV MEHRA</p>
					<p id="cinematographer">CINEMATOGRAPHER</p>
					</a>
				</h1>
		</div>
		<div class="nav">
			<ol>
					<li><h2><a href="about.html">ABOUT</a></h2></li>
	  			<li><h2><a href="reel.html">REEL</a></h2></li>
			</ol>
		</div>
	</header>

	<section class="atl">
	  <h3>PEW! THE MUSICAL</h3>
		<div class="atlcreds">
			<p><span class="role">writer/director: </span>Cory Griffin-Fiorella</p>
			<p><span class="role">producers: </span>Renee Grotthus, Alexa Kim</p>
		</div>
		<ol class="specs">
			<li>NARRATIVE SHORT</li>
			<div class="spacer"> | </div>
			<li>COMEDY</li>
			<div class="spacer"> | </div>
			<li>ENGLISH</li>
			<div class="spacer"> | </div>
			<li>15 min</li>
			<div class="spacer"> | </div>
			<li>4:3</li>
			<div class="spacer"> | </div>
			<li>COLOR</li>
		</ol>
	</section>

	<!-- Video Player -->
	<div style="padding:50% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/828827844?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" title="YouTube video player" frameborder="0" allow="clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>

	<!-- Credits -->
	<section class="credits">
			<div class="logline">
				<p>Homeschooled Christian teen Simplicity Rose enters the sinful world
					of community theatre in search of human connection.</p>
			</div>
			<div class="btl">
				<p><span class="role">cinematographer: </span>Dhruv Mehra</p>
				<p><span class="role">gaffer: </span>Max Vanderwerf</p>
				<p><span class="role">key grip: </span>Sam Garcia</p>
				<p><span class="role">1st ac: </span>Alex Milne</p>
			</div>
	</section>

	<section class="gallery">
			<!-- Images used to open the lightbox -->
		<div class="row">
			<div class="column">
				<img src="films/pew/top16/pious.jpg" alt="Pious" onclick="openModal();currentSlide(1)" class="hover-shadow">
				<img src="films/pew/top16/secretsback.jpg" alt="secrets" onclick="openModal();currentSlide(5)" class="hover-shadow">
				<img src="films/pew/top16/phil.jpg" alt="Orion" onclick="openModal();currentSlide(9)" class="hover-shadow">
				<img src="films/pew/top16/watching.jpg" alt="Watching" onclick="openModal();currentSlide(13)" class="hover-shadow">
			</div>
			<div class="column">
				<img src="films/pew/top16/window.jpg" alt="Window" onclick="openModal();currentSlide(2)" class="hover-shadow">
				<img src="films/pew/top16/bible.jpg" alt="Bible cereal" onclick="openModal();currentSlide(6)" class="hover-shadow">
				<img src="films/pew/top16/head.jpg" alt="Road Head" onclick="openModal();currentSlide(10)" class="hover-shadow">
				<img src="films/pew/top16/convo.jpg" alt="Convo" onclick="openModal();currentSlide(14)" class="hover-shadow">
			</div>
			<div class="column">
				<img src="films/pew/top16/together.jpg" alt="Together" onclick="openModal();currentSlide(3)" class="hover-shadow">
				<img src="films/pew/top16/churchmorning.jpg" alt="Church" onclick="openModal();currentSlide(7)" class="hover-shadow">
				<img src="films/pew/top16/circle.jpg" alt="Spotlight" onclick="openModal();currentSlide(11)" class="hover-shadow">
				<img src="films/pew/top16/announcement.jpg" alt="Announcement" onclick="openModal();currentSlide(15)" class="hover-shadow">
			</div>
		 	<div class="column">
				<img src="films/pew/top16/tv.jpg" alt="TV" onclick="openModal();currentSlide(4)" class="hover-shadow">
				<img src="films/pew/top16/gunnar.jpg" alt="Rickabod" onclick="openModal();currentSlide(8)" class="hover-shadow">
				<img src="films/pew/top16/judges.jpg" alt="Auditions" onclick="openModal();currentSlide(12)" class="hover-shadow">
				<img src="films/pew/top16/uncushion.jpg" alt="Uncushion" onclick="openModal();currentSlide(16)" class="hover-shadow">
			</div>
		</div>
	</section>

	<!-- The Modal/Lightbox -->
	<div id="myModal" class="modal">
		<div  class="lightbox">
		  <div class="modal-content">
		    <div class="mySlides academy">
		      <img src="films/pew/top16/pious.jpg">
		    </div>
		    <div class="mySlides academy">
		      <img src="films/pew/top16/window.jpg">
		    </div>
		    <div class="mySlides academy">
		      <img src="films/pew/top16/together.jpg">
		    </div>
		    <div class="mySlides academy">
		      <img src="films/pew/top16/tv.jpg">
		    </div>
				<div class="mySlides academy">
		      <img src="films/pew/top16/secretsback.jpg">
		    </div>
		    <div class="mySlides academy">
		      <img src="films/pew/top16/bible.jpg">
		    </div>
		    <div class="mySlides academy">
		      <img src="films/pew/top16/churchmorning.jpg">
		    </div>
		    <div class="mySlides academy">
		      <img src="films/pew/top16/gunnar.jpg">
		    </div>
				<div class="mySlides">
					<img src="films/pew/top16/phil.jpg">
				</div>
				<div class="mySlides">
					<img src="films/pew/top16/head.jpg">
				</div>
				<div class="mySlides">
					<img src="films/pew/top16/circle.jpg">
				</div>
				<div class="mySlides academy">
		      <img src="films/pew/top16/judges.jpg">
		    </div>
				<div class="mySlides academy">
					<img src="films/pew/top16/watching.jpg">
				</div>
				<div class="mySlides">
					<img src="films/pew/top16/convo.jpg">
				</div>
				<div class="mySlides">
					<img src="films/pew/top16/announcement.jpg">
				</div>
				<div class="mySlides">
					<img src="films/pew/top16/uncushion.jpg">
				</div>
			</div>
		    <!-- Next/previous controls -->
			<div class="prevnext">
		    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="close" onclick="closeModal()">BACK</a>
		    <a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
		</div>
	</div>

	<!-- buttons -->
	<section class="buttons">
		<div class="back"><a href="idol.html">PREV</a></div>
		<div class="projects"><a href="index.html">BACK TO WORK</a></div>
		<div class="forward"><a href="dustbuddy.html">NEXT</a></div>
	</section>

	<footer>
		<div class="left">
			<div class="copyright">
				<p>2024</p>
			</div>
			<div class="theme-switch-wrapper">
	      <label class="theme-switch" for="checkbox">
	    		<input type="checkbox" id="checkbox" />
	    		<div class="slider round"></div>
	  		</label>
	  	</div>
		</div>
		<div class="socials">
			<a href="https://vimeo.com/user94368193" title="Vimeo" target="_blank" class="link"><i class="fab fa-vimeo-v"></i></a>
			<a href="https://www.instagram.com/dhruvohno/" title="Instagram" target="_blank" class="link"><i class="fab fa-instagram"></i></a>
			<a href="https://www.imdb.com/name/nm7416997/?ref_=fn_al_nm_1" title="IMBd" target="_blank" class="link"><i class="fab fa-imdb"></i></a>
		</div>
	</footer>
	<script type="text/javascript" src="JS/scroll.js"></script>
	<script type="text/javascript" src="JS/dark.js"></script>
</body>
</html>
