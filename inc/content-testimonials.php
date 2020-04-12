
  <div class="container">
  <div class="testiSlide">
    <?php
    $testimonial=new WP_Query( 
      array(
        'post_type'=>'testimonial',
        'posts_per_page'=>-1
      ));
      if($testimonial->have_posts()):
        while($testimonial->have_posts()):
          $testimonial->the_post();
          $testimonial_name=get_field('testimonial-name');
          $testimonial_position=get_field('testimonial-position');
          $testimonial_image=get_field('testimonial-image');
          $testimonial_content=get_field('testimonial-content');
    
    ?>
    <div>
      <figure class="testimonial">
        <blockquote><?php echo $testimonial_content;?>
          <div class="btn"></div>
        </blockquote>
        <img src="<?php echo esc_url($testimonial_image['url'])?>" alt="<?php ?>" />
        <div class="peopl">
          <h3><?php echo esc_html($testimonial_name)?></h3>
          <p class="indentity"><?php echo esc_html($testimonial_position)?></p>
        </div>
      </figure>
    </div>
        <?php endwhile;endif; ?>
 
    <!-- <div>
      <figure class="testimonial">
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          <div class="btn"></div>
        </blockquote>
        <img src="https://secure.gravatar.com/avatar/24a495e3a7316e619af62445f1a86886?s=96&d=mm&r=g" alt="Maksim Goffin" />
        <div class="peopl">
          <h3>Shaan</h3>
          <p class="indentity">Web Developer</p>
        </div>
      </figure>
    </div>
 
    <div>
      <figure class="testimonial">
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          <div class="btn"></div>
        </blockquote>
        <img src="https://yt3.ggpht.com/a/AGF-l7_ESQtd3r7nPdFdP_mmyxn65RFy9JlGT0dGyA=s900-mo-c-c0xffffffff-rj-k-no" alt="Maksim Goffin" />
        <div class="peopl">
          <h3>Brian Dean</h3>
          <p class="indentity">SEO / Blogger</p>
        </div>
      </figure>
    </div>
 
    <div>
      <figure class="testimonial">
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          <div class="btn"></div>
        </blockquote>
        <img src="https://design.sva.edu/wp-content/uploads/2018/08/Sagmeister.jpg" alt="Maksim Goffin" />
        <div class="peopl">
          <h3>Stefan Sagmeister</h3>
          <p class="indentity">Graphic Designer</p>
        </div>
      </figure>
    </div> -->
  </div>
</div>
 