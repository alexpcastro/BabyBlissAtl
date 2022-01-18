<?php 
/* Template Name: Services */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/scripts/lightslider/css/lightslider.css'; ?>" />
<section>
    <div class="row m-0 pt-3 pt-sm-5 border-bottom bg-light">
      <div class="mt-5 col-lg-5 offset-lg-2 container py-5">
        <h1 class="text-dark">Infant Massage Services</h1>
        <p class="lead text-dark">Baby<span class="font-weight-bold">Bliss</span> offers a variety of services meeting babies and caregivers’ needs. Educative sessions are conducted in private or in small groups, at the office or at the comfort of your home. BabyBliss strictly provides coaching and guidance, while caregivers are hands on the entire time.</p>
      </div>
    </div>
</section>

<section class="container py-5">
    <div class="row">
        <div class="col-md-6 mb-md-0 mb-4">
            <div class="card text-center shadow border-0 bg-light-blue h-100">
                <div class="card-body p-md-5 p-3">
                    <img class="w-auto mb-4" height="250" src="<?php echo get_stylesheet_directory_uri(); ?>/images/father-playing-with-daugther-illustration.svg" alt="Basic Class Illustration">
                    <h3 class="h4 font-weight-bold text-dark-blue">Basic Class</h3>
                    <p class="mb-4">Discover how infant massage techniques can lead to a lifetime of wellbeing.</p>
                    <a class="btn text-white rounded-pill bg-dark-blue" href="<?php echo site_url() ?>/services/basic-class/">View Class &rsaquo;</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-center shadow border-0 bg-light-pink h-100">
                <div class="card-body p-md-5 p-3">
                    <img class="w-auto mb-4" height="250" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mother-holding-baby-illustration.svg" alt="Me Time Class Illustration">
                    <h3 class="h4 font-weight-bold text-dark-blue">Me Time Class</h3>
                    <p class="mb-4">Learn techniques for relaxation, bonding, baby yoga, and more.</p>
                    <a class="btn text-white rounded-pill bg-dark-blue" href="<?php echo site_url() ?>/services/me-time-class/">View Class &rsaquo;</a>
                </div>
            </div>
        </div>
    </div>
    <p class="mt-3 mb-0 text-center">New to infant massage? <a href="<?php echo site_url() ?>/services/intro-lecture/" title="BabyBliss Introductory Lectures">Try our intro lecture.</a></p>
</section>

<?php get_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri().'/scripts/lightslider/js/lightslider.js'; ?>"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#basic-class').lightSlider({
            item:4,
            autoWidth:true,
            loop:false,
            slideMove:2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            pager: false,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                }
            ],
          onSliderLoad: function() {
            $('#basic-class').removeClass('cs-hidden');
          } 
        });  
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#metoo-class').lightSlider({
            item:4,
            autoWidth:true,
            loop:false,
            slideMove:2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            verticalHeight:400,
            pager: false,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                }
            ],
          onSliderLoad: function() {
            $('#metoo-class').removeClass('cs-hidden');
          } 
        });  
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#introductory-class').lightSlider({
            item:4,
            autoWidth:true,
            loop:false,
            slideMove:2,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            verticalHeight:400,
            pager: false,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:3,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                      }
                }
            ],
          onSliderLoad: function() {
            $('#introductory-class').removeClass('cs-hidden');
          } 
        });  
      });
    </script>