  <!-- Blog Section -->
  <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <!-- Start Row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="blog-text section-header text-center">  
              <div>   
                <h2 class="section-title">Latest Blog Posts</h2>
                <div class="desc-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>  
                  <p>eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
              </div> 
            </div>
          </div>

        </div>
        <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
              <div class="blog-item-img">
                <a href="<?php echo get_the_permalink()?>">
                  <img src="<?php echo get_the_post_thumbnail_url()?>" class="img-fluid" alt="">
                </a>             
              </div>
              <div class="blog-item-text"> 
                <h3><a href="<?php echo get_the_permalink()?>"><?php echo wp_trim_words( get_the_title( ),10,'...' )?></h3>
                <p><?php echo wp_trim_words(get_the_content(), 16, '...');?></p>
              </div>
              <div class="author">
                <span class="name"><i class="lni-user"></i><a href="#"><?php echo get_the_author( )?></a></span>
                <span class="date float-right"><i class="lni-calendar"></i><a href="#"><?php echo get_the_date('j F Y'); ?></a></span>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
          <?php endwhile; else : ?>
    <p>No posts found.</p>
<?php endif; ?>
        </div>
    
      </div>
    </section>
    <!-- blog Section End -->