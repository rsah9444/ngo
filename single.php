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
        <div class="container">
        <div id="comment-section">
          <?php
          $commenter = wp_get_current_commenter();
          $req = get_option( 'require_name_email' );
          $aria_req = ( $req ? " aria-required='true'" : '' );
          
          $consent = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
        $fields =  array(
          'author' =>
            '<input placeholder="Your name please"id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
            '" size="30"' . $aria_req . ' />',
          'email' =>
            '<input  placeholder="your email" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
            '" size="30"' . $aria_req . ' />',
        );

        $args = array(
          'title_reply'       => 'Share Your Thoughts',
          'fields'            => $fields,
          'comment_field' =>  '<textarea id="comment" name="comment" cols="45" rows="2" aria-required="true">' .
            '</textarea>',
          'comment_notes_before' => '<p class="comment-notes">Your email address will not be published </p>'

        );

      comment_form( $args);
      $comment_number=get_comments_number();
      if($comment_number !=0)
      {
        ?>
                <div class="comments">
                <h3> What Others say</h3>
                <ol class="all-comments">
                <?php
                $comments=get_comments( 
                  array(
                    'post_id'=> $post->ID,
                    'status'=> 'approve'
                  ));
                  wp_list_comments( 
                    array(
                      'per_page'=>5,  
                    ),$comments) ;
                
                ?>
          
          </ol>
          </div>

          </div>
        <?php
      } ?>
        </div>
<?php
}
  endwhile;
endif;
get_footer();
?>