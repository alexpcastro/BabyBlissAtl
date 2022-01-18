<?php 
/* Template Name: Services: Basic */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/scripts/lightslider/css/lightslider.css'; ?>" />
<section>
    <div class="row m-0 pt-3 pt-sm-5 border-bottom bg-light">
      <div class="mt-5 col-lg-5 offset-lg-2 container py-5">
        <h1 class="text-dark">The Basic Class</h1>
        <p class="lead text-dark">Learn basic Infant Massage techniques for a lifetime of wellbeing with our <em>Baby and Me</em> and <em>Baby and Friends</em> classes.</p>
      </div>
    </div>
</section>

<section id="basic">
    <div class="row no-gutters py-3 bg-light-pink sr">
        <ul id="basic-class" class="cs-hidden">
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
                <p class="lead">Four meetings, each around 45 minutes long each, with a possible fifth bonus meeting. Classes are normally scheduled weekly, but are flexible according to family and baby's needs.</p>
                <p class="lead">Parents learn Infant Massage and massage their babies from the first moment in class. The instructor will not massage your baby, but rather coach you through the strokes and techniques so you gain an understanding and confidence through immersive learning.</p>
                <p class="lead">You can choose to have the classes taught privately or in a group of up to four babies. <strong>Baby and Me</strong> classes can include additional family members, whereas <strong>Baby and Friends</strong> classes can include one family member per baby.</p>
            </div>
            <div class="offset-md-1 col-md-5 col-lg-4">
                <div class="card mb-4 shadow-sm">
                  <div class="card-header bg-light-pink">
                    <h4 class="my-0 font-weight-normal">Baby and Me</h4>
                  </div>
                  <div class="card-body">
                    <h5 class="h4 card-title">$210-250 <small class="text-muted">5 sessions</small></h5>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>For caregiver (or family) and baby</li>
                      <li>Hosted at office or home</li>
                    </ul>
                    <a href="<?php echo site_url(); ?>/contact/" class="btn btn-lg btn-block btn-outline-dark">Book Class</a>
                  </div>
                </div>
                <div class="card mb-4 shadow-sm">
                  <div class="card-header bg-light-pink">
                    <h4 class="my-0 font-weight-normal">Baby and Friends</h4>
                  </div>
                  <div class="card-body">
                    <h5 class="h4 card-title pricing-card-title">$170-190 <small class="text-muted">5 sessions</small></h5>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>For caregiver and baby in a group of up to 4 baby participants</li>
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