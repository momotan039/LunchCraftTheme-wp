<?php get_header() ?>

<!-- Header Section Start -->
<header id="home" class="blog-hero-area">
    <div class="overlay-light"></div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="contents text-center">
                    <h2 class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"><?php echo the_title()?></h2>
                    <div class="post-meta">
                        <ul>
                            <li><i class="lni-calendar"></i> <a href="#"><?php echo get_the_date('j F Y'); ?></a></li>
                            <li><i class="lni-user"></i> <a href="#"><?php echo get_author_name( $post->post_author )?></a></li>
                            <li><i class="lni-bubble"></i> <a href="#"><?php echo get_comments_number( )?> Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->



<div id="blog-single">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="blog-post">
                <?php if(has_post_thumbnail()):?>
                    <div class="post-thumb">
                        <img src="<?php echo get_the_post_thumbnail_url();?>">
                    </div>
                <?php endif;?>
                    <div class="post-content">
                        <p><?php echo get_the_content()?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
    <div class="col-md-10">
        <div class="blog-comment">
            <h4><?php echo get_comments_number(); ?> Comments</h4>
           <!-- get all comments -->
            <?php get_template_part('parts/comments/comments')?>

            <!-- Comment Form -->
            <?php get_template_part('parts/comments/comments-form')?>
        </div>
    </div>
</div>

    </div>
</div>


<?php get_footer() ?>