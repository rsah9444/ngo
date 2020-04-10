<?php
  get_header();
  if(have_posts()):while(have_posts()):the_post();{
?>
  <h1>This is the single post</h1>
  <div class="container container--narrow page-section">
  <img class="icon" src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ); ?>" alt="<?php the_title(); ?>" /></i>
  <p><a class="metabox__blog-home-link" href="<?php echo site_url('/news'); ?>"><i class="fa fa-home" aria-hidden="true"></i> newsletter</a> <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></span></p>
  </div>
  <div class="container">
  <h1><?php echo the_title( )?></h1>
  <p><?php echo the_content( )?></p>
 
  </div>


  <?php
  get_comment( );

}
  endwhile;
endif;
get_footer();
?>