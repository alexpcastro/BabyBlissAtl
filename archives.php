<?php 
/* Template Name: Archives */
get_header();
$wp_query = new WP_Query(array('posts_per_page'=>-1));
?>

<section>
	<div class="vh-50" style="background: url(https://images.unsplash.com/photo-1504151932400-72d4384f04b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=2249&q=80) !important; background-size: cover !important; background-position: center !important;">
	  <div class="row m-0 h-100 pt-3 pt-sm-5" style="background: rgba(0,0,0,0.5);">
	    <div class="mt-5 col-lg-5 offset-lg-2 container py-5">
	    </div>
	  </div>
	</div>
</section>

<section>
    <div class="row m-0 bg-light">
      <div class="col-lg-5 offset-lg-2 container py-5">
        <h1 class="text-dark">Resources</h1>
        <p class="lead text-dark">Baby<span class="font-weight-bold">Bliss</span> is constantly updating and creating new resources to spread news and knowledge around infant massaging.</p>
      </div>
    </div>
</section>

<div class="container">
	<div class="row py-5">
		<div class="col-md-8">
			<?php while ($wp_query->have_posts()) : $wp_query->the_post();?>
				<article class="d-block card border-0 mb-4 bg-transparent">
				 <div class="card-body p-0">
				   <div class="row">
				     <div class="col-4 rounded" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center center;background-size:cover;">
				     </div>
				     <div class="col-8">
				       <div class="py-sm-5 py-3">
				         <div class="mb-7">
				           <h2 class="h3"><a class="text-dark" href="<?php echo get_the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
				           <small class="d-block text-muted"><?php echo get_the_date(); ?> by <?php echo get_the_author(); ?></small>
				         </div>
				       </div>
				     </div>
				   </div>
				 </div>
				</article>
			<?php endwhile; ?>
		</div>
		<div class="col-md-4">
			<div class="card mt-2 position-sticky border-0 rounded-0 bg-light">
	    	  <div class="card-body">
	    	  	<p class="card-text text-muted">Get new updates about infant massage, wellness, and more by subscribing to the Baby<span class="font-weight-bold">Bliss</span> newsletter!</p>
	    	  	<form id="subscribe-email">
	    	  	  <div class="form-group">
	    	  	    <input type="email" class="form-control" name="EMAIL" placeholder="Enter email">
	    	  	  </div>
	    	  	  <input type="hidden" name="b_1428a5951ca16290a50360a8c_750673e084" tabindex="-1" value="">
	    	  	  <button id="submit-subscribe" type="submit" class="btn btn-outline-dark">Submit <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span></button>
	    	  	</form>
	    	  </div>
	    	</div>
	    	<div class="card mt-3 rounded-0">
	    		<div class="card-body">
			    	<h4 class="mt-2">Helpful Links</h4>
			    	<p class="card-text">For more information on benefits of Infant Massage, please take a look at these websites below.</p>
			    	<ul class="list-group list-group-flush">
			    	  <li class="list-group-item"><a href="http://www.iaim.net/" class="text-dark">International Association of Infant Massage</a></li>
			    	  <li class="list-group-item"><a href="https://www.infantmassageusa.org/" class="text-dark">Infant Massage USA</a></li>
			    	</ul>
			    </div>
			</div>
		</div>
	</div>
</div>
<section class="text-center bg-light py-5">
    <div class="container">
      <h2 class="mb-5">What people are saying...</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-3 mb-md-0 border-0 shadow-sm">
            <div class="card-body">
            	<h5>Margaret E.</h5>
            	<p class="font-weight-light mb-0">"This is fantastic! BabyBliss has completely transformed my relationship with my baby."</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3 mb-md-0 border-0 shadow-sm">
            <div class="card-body">
            	<h5>Fred S.</h5>
            	<p class="font-weight-light mb-0">"BabyBliss is amazing. I've noticed a difference in my baby since the first class."</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-3 mb-md-0 border-0 shadow-sm">
            <div class="card-body">
            	<h5>Sarah W.</h5>
            	<p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>