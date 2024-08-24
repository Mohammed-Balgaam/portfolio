<?php
include 'database.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $db['about_me']['title']; ?></title>
	<!---custom css link---->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
	<!------Header Section------>
	<header>
		<a href="#" class="logo">Devlo<span>pe</span>r..</a>
		<ul class="navlist">
			<li><a href="#home" class="active">Home</a></li>
			<li><a href="#about">About Me</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#portfolio">skills</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		<div class="bx bx-menu" id="menu-icon"></div>
	</header>

	<!---------Home Section--------------->
	<section class="home" id="home">
		<div class="home-text">
			<img class="img-back" src="img/background.jpg" alt="">
			<div class="slide">
				<span class="one">Hello</span>
				<span class="two">I'm</span>
			</div>
			<h1><?php echo $db['about_me']['name']; ?></h1>
			<h3><?php echo $db['about_me']['occupation']; ?><span><br>Developer.</span></h3>
			<p>we Developer with <?php echo $db['about_me']['experience']; ?> experience that keep customers <br> coming for about services make best effort.</p>
			<div class="button">
				<a href="#" class="btn">About Me</a>
			</div>
		</div>
	</section>

	<!---------about Section --------------->
	<section class="about" id="about">
		<div class="about-img">
			<img src="img/about.jpg">
		</div>

		<div class="about-text">
			<h2>About <span>Me</span></h2>
			<h4><?php echo $db['about_me']['occupation']; ?> Developer!</h4>
			<p><?php echo $db['about_me']['description']; ?></p>
				<a href="#" class="btn">More About</a>
		</div>
	</section>

	<!-----------Services Section-------------->
	<section class="services" id="services">
	<div class="main-text">
		<h2><span>My</span>Services</h2>
	</div>
	<div class="services-content">
		<div class="box">
			<div class="s-icons">
			<i class='bx bx-code-alt'></i>
			</div>
			<h3><?php echo $db['myservices']['first_service']; ?></h3>
			<p><?php echo $db['myservices']['description1'];
			echo $db['myservices']['description2']; ?></p>
			<a href="#" class="btn">Read More</a>
		</div>

		<div class="box">
			<div class="s-icons">
				<i class='bx bx-mobile-alt'></i>
			</div>
			<h3><?php echo $db['myservices']['secound_service']; ?></h3>
			<p><?php echo $db['myservices']['description_sec_1'];
			 echo $db['myservices']['description_sec_2']; ?></p>
			<a href="#" class="btn">Read More</a>
		</div>

		<div class="box">
			<div class="s-icons">
				<i class='bx bx-edit-alt'></i>
			</div>
			<h3><?php echo $db['myservices']['third_service']; ?></h3>
			<p><?php echo $db['myservices']['description_third_1'];
			 echo $db['myservices']['description_third_2']; ?></p>
			<a href="#" class="btn">Read More</a>
		</div>
	</div>

</section>

<!-----------Portfolio Section--------------->
<section class="portfolio" id="portfolio">
	<div class="main-text">
		<h2><span>My Skills</span></h2>
	</div>
	<div class="portfolio-content">
		<div class="row">
			<img src="img/css.png" >
			<div class="layer">
				<h5><?php echo $db['skills']['second_skill']['name']; ?></h5>
				<p><?php echo $db['skills']['second_skill']['description']; ?></p>
				<a href="#"> <i class='bx bx-link-external'></i></a>
			</div>
		</div>

		<div class="row">
			<img src="img/js.png" >
			<div class="layer">
				<h5><?php echo $db['skills']['third_skill']['name']; ?></h5>
				<p><?php echo $db['skills']['third_skill']['description']; ?></p>
				<a href="#"> <i class='bx bx-link-external'></i></a>
			</div>
		</div>

		<div class="row">
			<img src="img/php.png" >
			<div class="layer">
				<h5><?php echo $db['skills']['fourth_skill']['name']; ?></h5>
				<p>><?php echo $db['skills']['fourth_skill']['description']; ?></p>
				<a href="#"> <i class='bx bx-link-external'></i></a>
			</div>
		</div>

		<div class="row">
			<img src="img/mysql.png" >
			<div class="layer">
				<h5><?php echo $db['skills']['fifth_skill']['name']; ?></h5>
				<p><?php echo $db['skills']['fifth_skill']['description']; ?></p>
				<a href="#"> <i class='bx bx-link-external'></i></a>
			</div>
		</div>

		<div class="row">
			<img src="img/html.png" >
			<div class="layer">
				<h5><?php echo $db['skills']['first_skill']['name']; ?></h5>
				<p><?php echo $db['skills']['first_skill']['description']; ?></p>
				<a href="#"> <i class='bx bx-link-external'></i></a>
			</div>
		</div>
	</div>

</section>



<section class="portfolio" id="portfolio">
	<div class="main-text">
		<h2><span>My Work</span></h2>
	</div>
	<div class="portfolio-content">
		<div class="row">
			<img src="img/project1.jpg" >
			<div class="layer">
				<h5><?php echo $db['companies']['abyan']['name']; ?></h5>
				<p class="p-color">I start work in <?php echo $db['companies']['abyan']['name']; ?> at <?php echo $db['companies']['abyan']['from_date']; ?> and end that work at <?php echo $db['companies']['abyan']['from_date']; ?> thier website is  <?php echo $db['companies']['abyan']['website']; ?></p>
				<a href="#"> <i class='bx bx-link-external'></i></a>
			</div>
		</div>

		<div class="row">
			<img src="img/project2.jpg" >
			<div class="layer">
				<h5><?php echo $db['companies']['aden']['name']; ?></h5>
				<p class="p-color">I start work in <?php echo $db['companies']['aden']['name']; ?> at <?php echo $db['companies']['aden']['from_date']; ?> and end that work at <?php echo $db['companies']['aden']['from_date']; ?> thier website is  <?php echo $db['companies']['aden']['website']; ?></p>
				<a href="#"> <i class='bx bx-link-external'></i></a>
			</div>
		</div>
	</div>

</section>






<!------------------Contact section------------>
<section class="contact" id="contact">
	<div class="contact-text">
		<h2>Contact <span>Me!</span></h2>
		<h4>If you have any project in your mind.</h4>
		<p><?php echo $db['about_me']['description']; ?></p>
		<div class="list">
			<li><a href="#"><?php echo $db['contact']['phone']; ?></a></li>
			<li><a href="#"><?php echo $db['contact']['email']; ?></a></li>
			<li><a href="#">Like Share & Subscribe</a></li>
		</div>

		<div class="contact-icons">
			<a href="#"><i class='bx bxl-facebook'></i></a>
			<a href="#"><i class='bx bxl-twitter' ></i></a>
			<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
			<a href="#"><i class='bx bxl-youtube' ></i></a>
		</div>

	</div>
	<div class="contact-form">
		<form action="">
			<input type="name" placeholder="Your Name " required>
			<input type="email" placeholder="Your Email " required>
			<input type="number" placeholder="your Mobile Number" required>
			<textarea name="" id="" cols="35" rows="10" placeholder="How Can I Help You " required></textarea>
			<input type="submit" value="Send Message" class="submit" required>
		</form>

	</div>
</section>

<!---------End Section---------->
<section class="end">
	<div class="last-text">
		<p>Design By <?php echo $db['about_me']['name']; ?></p>
	</div>
	<div class="top">
		<a href="#home"><i class='bx bx-up-arrow-alt' ></i></a>
	</div>
</section>

</body>

</html>