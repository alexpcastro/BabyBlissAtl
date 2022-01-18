<?php
/**
 * The template for displaying all single posts and attachments
 */
get_header();
?>
<?php while ( have_posts() ) : the_post();
    $post_id = get_the_ID(); ?>
 <section>
   <div class="vh-50" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) !important; background-size: cover !important; background-position: center !important;">
     <div class="row m-0 h-100 pt-3 pt-sm-5" style="background: rgba(0,0,0,0.5);">
       <div class="mt-5 col-lg-5 offset-lg-2 container py-5">
       </div>
     </div>
   </div>
</section>

<article>
    <div class="border-bottom bg-light">
        <div class="container py-5">
            <h1 class="text-dark"><?php the_title(); ?></h1>
            <small class="d-block text-muted"><?php echo get_the_date(); ?></small>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col">
                <?php wpautop(the_content()); ?>
            </div>
        </div>
    </div>
</article>

<?php endwhile; ?>

<div class="py-5" style="background: #e1e3e6">
    <div class="container">
        <h3 class="mb-3">Read more from our blog</h3>
        <?php
        $related_args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'post__not_in' => array($post_id)
        );
        $related = new WP_Query( $related_args );

        if( $related->have_posts() ) : ?>
        <div class="row">
            <?php while( $related->have_posts() ): $related->the_post(); ?>
                <div class="col-md-4">
                    <article class="card border-0 shadow-sm mb-3">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top m-0" alt="...">
                        <div class="card-body">
                            <small class="d-block text-muted mb-2"><?php echo get_the_date(); ?></small>
                            <h4 class="h5">
                                <a href="<?php echo get_the_permalink(); ?>" title="<?php the_title();?>"><?php the_title(); ?></a>
                            </h4>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>
        <?php
        endif;
        wp_reset_postdata(); ?>
    </div>
</div>
 
<?php get_footer(); ?>