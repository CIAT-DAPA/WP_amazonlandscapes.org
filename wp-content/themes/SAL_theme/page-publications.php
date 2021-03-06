<?php get_header(); ?>
<div class="container">
  <div class="row" class="cgspace">
    <div class="col-md-12 blog-main">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title">
              - <?php the_title(); ?> - 
            </h2>
            <?php the_content(); ?>
            <?php include("query_cgspace.php"); ?>
            <?php query_cgspace(0); ?>
          </div>
        <?php endwhile; ?>
        <?php else : ?>
          <p>
            <?php __('No Page Found'); ?>
          </p>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>