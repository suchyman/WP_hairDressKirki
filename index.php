<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SuHaDe
 */

get_header();
// echo get_theme_mod( 'section_id' );
$value = Kirki::get_option( 'theme_config_id', 'my_setting' );
echo $value;
// echo 'hehe';
?>

<!-- #primary -->
	<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
	<a class="navbar-brand js-scroll-trigger" href="#page-top">Fryzjer Awangarden Hairs</a>
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	  Menu
	  <i class="fas fa-bars"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
	  <ul class="navbar-nav ml-auto">
		<li class="nav-item">
		  <a class="nav-link js-scroll-trigger" href="#about">O nas</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link js-scroll-trigger" href="#projects">Co robimy</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link js-scroll-trigger" href="#signup">Kontakt</a>
		</li>
	  </ul>
	</div>
  </div>
</nav>

<!-- Header -->
<header class="masthead">
  <div class="container d-flex h-100 align-items-center">
	<div class="mx-auto text-center">
	  <h1 class="mx-auto my-0 text-uppercase">Awangarden Hairs</h1>
	  <h2 class="text-white-50 mx-auto mt-2 mb-5">Wysoki standard produktów, profesjonalny personel, atrakcyjne ceny.</h2>
	  <a href="#about" class="btn btn-primary js-scroll-trigger">Zobacz więcej..</a>
	</div>
  </div>
</header>

<!-- About Section -->
<section id="about" class="about-section text-center">
  <div class="container">
	<div class="row">
	  <div class="col-lg-8 mx-auto">
		<h2 class="text-white mb-4">O nas</h2>
		<p class="text-white-50">Nasz salon wyróżnia indywidualne podejście do klienta, świadczą o tym opionie i zadowolnie naszych klientów. Jak przystało na profesjonalny salon, nasi pracownicy działają tylko na produktach wyselekcjonowanych firm światowych m.in. L’oreal. 
		<p class="text-white-50">Gwarantujemy naszym klientom  satysfakcję z wykonywanych zabiegów, posiadamy  wieloletnie doświadczenie w dziedzinie fryzjerstwa
Stosujemy wysokiej klasy kosmetyki i najnowocześniejsze techniki stylizacji. Indywidualnie podchodzimy do każdego klienta</p>
	  </div>

	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/img/hair-stylist-12.jpg" class="img-fluid" alt="">
  </div>
</section>

<!-- Projects Section -->
<section id="projects" class="projects-section bg-light">
  <div class="container">

	<!-- Featured Project Row -->
	<div class="row align-items-center no-gutters mb-4 mb-lg-5">
	  <div class="col-xl-8 col-lg-7">
		<img class="img-fluid mb-3 mb-lg-0" src="<?php echo get_template_directory_uri(); ?>/img/woman-3.jpg" alt="">
	  </div>
	  <div class="col-xl-4 col-lg-5">
		<div class="featured-text text-center text-lg-left">
		  <h4>Shoreline</h4>
		  <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
		</div>
	  </div>
	</div>

	

	<!-- Project One Row -->
	<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
	  <div class="col-lg-6">
		<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/hairdresserb4.jpg" alt="">
	  </div>
	  <div class="col-lg-6">
		<div class="bg-black text-center h-100 project">
		  <div class="d-flex h-100">
			<div class="project-text w-100 my-auto text-center text-lg-left">
			  <h4 class="text-white">Misty</h4>
			  <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
			  <hr class="d-none d-lg-block mb-0 ml-0">
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<!-- Project Two Row -->
	<div class="row justify-content-center no-gutters">
	  <div class="col-lg-6">
		<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/hair-23.jpg" alt="">
	  </div>
	  <div class="col-lg-6 order-lg-first">
		<div class="bg-black text-center h-100 project">
		  <div class="d-flex h-100">
			<div class="project-text w-100 my-auto text-center text-lg-right">
			  <h4 class="text-white">Mountains</h4>
			  <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
			  <hr class="d-none d-lg-block mb-0 mr-0">
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<!-- Project third Row -->

	<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
	  <div class="col-lg-6">
		<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/hairdresserb3.jpg" alt="">
	  </div>
	  <div class="col-lg-6">
		<div class="bg-black text-center h-100 project">
		  <div class="d-flex h-100">
			<div class="project-text w-100 my-auto text-center text-lg-left">
			  <h4 class="text-white">Misty</h4>
			  <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
			  <hr class="d-none d-lg-block mb-0 ml-0">
			</div>
		  </div>
		</div>
	  </div>
	</div>

  </div>
</section>


<!-- Carousel Section -->



<!-- Signup Section -->
<section id="signup" class="signup-section">
  <div class="container">
	<div class="row">
	  <div class="col-md-10 col-lg-8 mx-auto text-center">

		<h2 class="text-white mb-5">Zapraszamy</h2>

		<!-- tutaj dajemy

-->

	  </div>
	</div>
  </div>
</section>

<!-- Contact Section -->
<section class="contact-section bg-black">
  <div class="container">

	<div class="row">

	  <div class="col-md-4 mb-3 mb-md-0">
		<div class="card py-4 h-100">
		  <div class="card-body text-center">
			<i class="fas fa-map-marked-alt text-primary mb-2"></i>
			<h4 class="text-uppercase m-0">Adres</h4>
			<hr class="my-4">
			<div class="small text-black-50">ul. Lubelska 23, 24-100 Puławy</div>
		  </div>
		</div>
	  </div>

	  <div class="col-md-4 mb-3 mb-md-0">
		<div class="card py-4 h-100">
		  <div class="card-body text-center">
			<i class="fas fa-envelope text-primary mb-2"></i>
			<h4 class="text-uppercase m-0">E-mail</h4>
			<hr class="my-4">
			<div class="small text-black-50">
			  <a href="#">twojadres@email.com</a>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="col-md-4 mb-3 mb-md-0">
		<div class="card py-4 h-100">
		  <div class="card-body text-center">
			<i class="fas fa-mobile-alt text-primary mb-2"></i>
			<h4 class="text-uppercase m-0">Telefon</h4>
			<hr class="my-4">
			<div class="small text-black-50">+48 606 605 604</div>
		  </div>
		</div>
	  </div>
	</div>

	<div class="social d-flex justify-content-center">
	  <a href="#" class="mx-2">
		<i class="fab fa-twitter"></i>
	  </a>
	  <a href="#" class="mx-2">
		<i class="fab fa-facebook-f"></i>
	  </a>
	  
	</div>

  </div>
</section>

<!-- Footer -->


<!-- Bootstrap core JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo get_template_directory_uri(); ?>/js/grayscale.min.js"></script>
<?php
// get_sidebar();
get_footer();
