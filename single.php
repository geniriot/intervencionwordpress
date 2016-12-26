<?php get_header() ?>

  <div class="headerpost">
  <?php the_post_thumbnail('full', array('class' => 'forced-full-width')); ?>
<div class="container">
    <div class="intro-text">
                <div class="intro-heading">Proyecto</div>
                <div class="intro-lead-in">para la reflexión y crítica de la</div>
                <div class="intro-lead-in">sociedad chilena actual</div>
              
    </div>
    </div>
</div>





<!-- Post Content -->
   
   
<article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <br>




                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                	<?php endif; ?>
                    

                  
                </div>
            </div>
        </div>
    </article>

    <hr>

<?php get_footer() ?>
