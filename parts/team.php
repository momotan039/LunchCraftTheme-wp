    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="team-text section-header text-center">  
              <div>   
                <h2 class="section-title">Team Members</h2>
                <div class="desc-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>  
                  <p>eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
              </div> 
            </div>
          </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
          <!-- Start Col -->
          <?php
$args = array(
    'post_type'      => 'team-member',
    'posts_per_page' => -1, // Show all team members
);

$team_query = new WP_Query($args);

if ($team_query->have_posts()) :
    while ($team_query->have_posts()) : $team_query->the_post();
        $job_title     = get_field('job_title');
        $facebook_link = get_field('facebook_link');
        $twitter_link  = get_field('twitterlink');
        $gmail_link    = get_field('gmail_link');
        ?>
        <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="single-team">
                <!-- Team Thumbnail -->
                <div class="team-thumb">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title_attribute(); ?>">
                </div>

                <!-- Team Details -->
                <div class="team-details">
                    <!-- Social Icons -->
                    <div class="team-social-icons">
                        <ul class="social-list">
                            <?php if ($facebook_link) : ?>
                                <li><a href="<?php echo esc_url($facebook_link); ?>"><i class="lni-facebook-filled"></i></a></li>
                            <?php endif; ?>
                            <?php if ($twitter_link) : ?>
                                <li><a href="<?php echo esc_url($twitter_link); ?>"><i class="lni-twitter-filled"></i></a></li>
                            <?php endif; ?>
                            <?php if ($gmail_link) : ?>
                                <li><a href="<?php echo esc_url($gmail_link); ?>"><i class="lni-google-plus"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <!-- Team Info -->
                    <div class="team-inner text-center">
                        <h5 class="team-title"><?php the_title(); ?></h5>
                        <?php if ($job_title) : ?>
                            <p><?php echo esc_html($job_title); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
endif;
?>
 

        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Team section End -->
