    <!-- Recent Showcase Section Start -->
    <section id="showcase">
      <div class="container-fluid right-position">
        <!-- Start Row -->
        <div class="row gradient-bg">
          <div class="col-lg-12">
            <div class="showcase-text section-header text-center">  
              <div>   
                <h2 class="section-title">Recent Works</h2>
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
        <div class="row justify-content-center showcase-area">
          <div class="col-lg-12 col-md-12 col-xs-12 pr-0">
            <div class="showcase-slider owl-carousel">
            <?php
$args = array(
    'post_type'      => 'project',
    'posts_per_page' => -1, // Show all team members
);

$team_query = new WP_Query($args);

if ($team_query->have_posts()) :
    while ($team_query->have_posts()) : $team_query->the_post();
        $tags= get_field('tags');
        $link= get_field('link_project');
        ?>
       
              <div class="item">
                <div class="screenshot-thumb">
                  <img src="<?php echo get_the_post_thumbnail_url()?>" class="img-fluid" alt="" />
                  <div class="hover-content text-center">
                    <div class="fancy-table">
                      <div class="table-cell">
                        <div class="single-text">
                          <p><?php echo $tags;?></p>
                          <h5><?php echo get_the_title( )?></h5>
                        </div>
                        <div class="zoom-icon">
                          <a class="lightbox" href="img/showcase/05.jpg"><i class="lni-zoom-in"></i></a>
                          <a href="#"><i class="lni-link"></i></a>
                        </div>
                      </div>
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
          </div>
        </div>
        <!-- End Row -->
      </div>
    </section>
    <!-- Recent Showcase Section End --> 