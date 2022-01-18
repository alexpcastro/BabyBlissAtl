<?php 
/* Template Name: Services: Lecture */
get_header(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/scripts/lightslider/css/lightslider.css'; ?>" />
<section>
    <div class="row m-0 pt-3 pt-sm-5 border-bottom bg-light">
      <div class="mt-5 col-lg-5 offset-lg-2 container py-5">
        <h1 class="text-dark">Introductory Lecture</h1>
        <p class="lead text-dark">Baby<span class="font-weight-bold">Bliss</span> welcomes the opportunity to provide introduction lectures with demonstrations for small groups.</p>
      </div>
    </div>
</section>

<section>
    <div class="row no-gutters py-3 bg-light-pink sr">
        <ul id="introductory-class" class="cs-hidden">
            <li class="lslide active">
                <img width="600" src="https://images.unsplash.com/photo-1544126592-807ade215a0b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3450&q=80" class="visible img-fluid">
            </li>
            <li class="lslide active">
                <img width="600" src="https://images.unsplash.com/photo-1565934266800-237a88e98bb1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" class="visible img-fluid">
            </li>
            <li class="lslide active">
                <img width="600" src="https://images.unsplash.com/photo-1584922877726-155f07e7f8da?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3450&q=80" class="visible img-fluid">
            </li>
            <li class="lslide active">
                <img width="600" src="https://images.unsplash.com/photo-1489760176169-fd3d32805239?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" class="visible img-fluid">
            </li>
            <li class="lslide active">
                <img width="600" src="https://images.unsplash.com/photo-1511505517644-469634e68003?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" class="visible img-fluid">
            </li>
            <li class="lslide active">
                <img width="600" src="https://images.unsplash.com/photo-1520177812839-78269c5ed62d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="visible img-fluid">
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-7">
                <p class="lead m-0">If you want to learn more about how Infant Massage might be beneficial for your baby and see if this is a technique you’d like to learn, we are happy to provide a group introduction lecture.</p>
            </div>
            <div class="offset-md-1 col-md-5 col-lg-4 d-flex">
                <div class="card mb-4 shadow-sm my-auto">
                  <div class="card-body">
                    <ul class="list-unstyled">
                      <li>For more information about hosting or attending a lecture, contact us.</li>
                    </ul>
                    <a href="<?php echo site_url(); ?>/contact/" class="btn btn-lg btn-block btn-outline-dark">Contact Us</a>
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