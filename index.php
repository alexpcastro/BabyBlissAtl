<?php get_header(); ?>
<style>
	.introductory-class, .basic-class, .me-time-class  {
	    background-size: cover !important;
	    background-position: center !important;
	    height: 115px;
	}
	.introductory-class {
		background: url(https://images.unsplash.com/photo-1560251180-24d389314061?ixlib=rb-1.2.1&auto=format&fit=crop&w=2253&q=80);
	}
	.basic-class {
		background: url(https://images.unsplash.com/photo-1489760176169-fd3d32805239?ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80);
	}
	.me-time-class {
		background: url(https://images.unsplash.com/photo-1496458669353-4da589c2a1d2?ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80);
	}
	.home-service a:after {
	    position: absolute; /* Prevent underline of arrow */
	    padding-left:2px; /* Add a little space between text and arrow */
	    content: "\203a"; /* Unicode hex for &raquo; */
	}
	.home-image {
		background: rgba(0,0,0,0.5);
	}
</style>
<div class="vh-75 negative-nav" style="background: url(https://images.squarespace-cdn.com/content/v1/5b807c524cde7a86e1417eab/1542642149667-G0WUGCE7QU6907FDSD41/ke17ZwdGBToddI8pDm48kODw0kujOaB97GHxcDsRm3d7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0ivq7Q1ckvJa8MA8qNUlEOYywR6y4ezvVfmFqu9kcEnnuvllRY0bsjrW9spjBfqgMA/Baby+Face.jpg?format=2500w) !important; background-size: cover !important; background-position: center !important;">
  <div class="h-100 pt-3 pt-sm-5" style="background: rgba(0,0,0,0.5);">
    <div class="mt-5 container pt-5">
    </div>
  </div>
</div>
<div class="bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="h3 no-gutters text-dark font-weight-bold">Through the power of touch, let us guide you and your baby to a place of bliss</h1>
			</div>
			<div class="col-md-6">
				<p class="lead text-dark">We help you unlock the ancient wisdom backed by newborn experts of Infant Massage. Soothe, calm, and bond together towards wellbeing.</p>
        <div class="dropdown">
          <button class="btn btn-lg btn-outline-dark dropdown-toggle" type="button" id="dropdownServices" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            View Services
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownServices">
            <a class="dropdown-item" href="<?php echo site_url() ?>/services/basic-class/">Basic Class</a>
            <a class="dropdown-item" href="<?php echo site_url() ?>/services/me-time-class/">Me Time Class</a>
            <a class="dropdown-item" href="<?php echo site_url() ?>/services/intro-lecture/">Intro Lecture</a>
          </div>
        </div>
			</div>
		</div>
	</div>
</div>
<div class="container py-5">
	<h2 class="col-md-9 font-weight-bold text-center mx-auto">Everything you need to know about infant massage</h2>
	<div class="row pt-5">
		<div class="col-md-4 mb-2 mb-md-0">
			<div class="card bg-dark text-white border-0">
			  <img src="https://images.unsplash.com/photo-1560251180-24d389314061?ixlib=rb-1.2.1&auto=format&fit=crop&w=2253&q=80" class="card-img" alt="About Infant Massage">
			  <div class="card-img-overlay d-flex bg-50">
			  	<a class="btn btn-outline-light m-auto" href="<?php echo site_url().'/about/'; ?>">About Infant Massage</a>
			  </div>
			</div>
		</div>
		<div class="col-md-4 mb-2 mb-md-0">
			<div class="card bg-dark text-white border-0">
			  <img src="<?php echo get_stylesheet_directory_uri()?>/images/hands-and-feet-of-baby.jpg" class="card-img" alt="About Tally Korman">
			  <div class="card-img-overlay d-flex bg-50">
			  	<a class="btn btn-outline-light m-auto" href="<?php echo site_url().'/about/#team'; ?>">About Me</a>
			  </div>
			</div>
		</div>
		<div class="col-md-4 mb-2 mb-md-0">
			<div class="card bg-dark text-white border-0">
			  <img src="https://images.unsplash.com/photo-1496458669353-4da589c2a1d2?ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80" class="card-img" alt="Contact">
			  <div class="card-img-overlay d-flex bg-50">
			  	<a class="btn btn-outline-light m-auto" href="<?php echo site_url().'/contact/'; ?>">Contact</a>
			  </div>
			</div>
		</div>
	</div>
</div>
<!--
<div class="pt-5">
    <div class="row no-gutters">
      <div class="col-md-6">
        <img class="img-fluid sr" src="https://images.unsplash.com/photo-1489791505242-b6b0603a0f31?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2251&q=80">
      </div>
      <div class="col-md-6 bg-light p-3 d-flex">
        <div class="col-lg-8 my-auto">
          <h2 class="font-weight-bold">Curious about Infant Massage?</h2>
          <p class="lead">Our team has put together resources for you to learn everything you need to know about the ancient science of Infant Massage.</p>
          <a class="btn btn-outline-dark mt-2" href="<?php echo site_url().'/resources/'; ?>">About Infant Massage</a>
          <a class="btn btn-outline-dark mt-2" href="<?php echo site_url().'/about/'; ?>">About Me</a>
          <a class="btn btn-outline-dark mt-2" href="<?php echo site_url().'/contact/'; ?>">Contact</a>
        </div>
      </div>
    </div>
</div>-->
<?php get_footer(); ?>