<?php 
/* Template Name: Services: Me */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/scripts/lightslider/css/lightslider.css'; ?>" />
<section>
    <div class="row m-0 pt-3 pt-sm-5 border-bottom bg-light">
      <div class="mt-5 col-lg-5 offset-lg-2 container py-5">
        <h1 class="text-dark">The Me Time Class</h1>
        <p class="lead text-dark">Once you’ve completed our Basic Class and have a better understanding of how Infant Massage is helping your baby, we suggest the <strong>Me Time Class</strong>.</p>
      </div>
    </div>
</section>

<section>
    <div class="row no-gutters py-3 bg-light-blue sr">
        <ul id="metoo-class" class="cs-hidden">
            <li class="lslide active">
                <img width="600" src="https://images.unsplash.com/photo-1562887106-0ba63ac82e02?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2689&q=80" class="visible img-fluid">
            </li>
            <li class="lslide active">
                <img width="600" src="https://images.unsplash.com/photo-1562886958-7b56896f5f44?ixlib=rb-1.2.1&auto=format&fit=crop&w=2689&q=80" class="visible img-fluid">
            </li>
            <li class="lslide active">
                <img width="600" src="https://images.unsplash.com/photo-1504151671506-6312eceb0f18?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2249&q=80" class="visible img-fluid">
            </li>
            <li class="lslide active">
                <img width="600" src="https://images.unsplash.com/photo-1525956180549-4d511fd16335?ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80" class="visible img-fluid">
            </li>
            <li class="lslide active">
                <img width="600" src="https://images.unsplash.com/photo-1537673156864-5d2c72de7824?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2255&q=80" class="visible img-fluid">
            </li>
            <li class="lslide active">
                <img width="600" src="https://images.unsplash.com/photo-1551934262-db2d7dd517f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1940&q=80" class="visible img-fluid">
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-7">
                <p class="lead">With <strong>Me Time</strong>, we will concentrate on selected topics of Infant Massage including massage for fun, relaxation, bonding, baby yoga, and infant-caregiver mutual exercises. The class provides a great opportunity to share issues and find solutions between group members.</p>
                <p class="lead">For <strong>Me Time Private</strong>, classes can include multiple family members and the baby. For <strong>Me Time Group</strong>, we can accept groups of up to five babies (1 family member per baby).</p>
            </div>
            <div class="offset-md-1 col-md-5 col-lg-4">
                <div class="card mb-4 shadow-sm">
                  <div class="card-header bg-light-blue">
                    <h4 class="my-0 font-weight-normal">Me Time Group</h4>
                  </div>
                  <div class="card-body">
                    <h5 class="h4 card-title">$35 <small class="text-muted">per session</small></h5>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>For caregiver and baby in a group of up to 5 participants</li>
                      <li>Hosted at office</li>
                    </ul>
                    <a href="<?php echo site_url(); ?>/contact/" class="btn btn-lg btn-block btn-outline-dark">Book Class</a>
                  </div>
                </div>
                <div class="card mb-4 shadow-sm">
                  <div class="card-header bg-light-blue">
                    <h4 class="my-0 font-weight-normal">Me Time Private</h4>
                  </div>
                  <div class="card-body">
                    <h5 class="h4 card-title">$50 <small class="text-muted">per session</small></h5>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>For caregiver (or family) and baby</li>
                      <li>Hosted at office or home</li>
                    </ul>
                    <a href="<?php echo site_url(); ?>/contact/" class="btn btn-lg btn-block btn-outline-dark">Book Class</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
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