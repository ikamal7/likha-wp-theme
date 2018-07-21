<?php get_header(); ?>


<!-- /.End of news masonry -->
<div class="page-content">
    <div class="container">
        <div class="row">
            <!--<div class="hidden-xs hidden-sm col-md-2 leftSidebar">

            </div>-->
            <main class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 content  p_r_40">
                <h2>Posts under: <?php single_cat_title(); ?> Tag</h2>
                <?php
                while(have_posts()) : the_post(); ?>
                <div class="col-md-6 col-sm-12 col-xs-12 likha_cat_post">
                    <div class="media meida-md">
                        <div class="media-left">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', ["class" => "media-object"]); ?>
                            </a>
                        </div>
                        <!-- /.Post image -->
                        <div class="media-body">
                            <div class="post-header">
                                <div class="post-cat"><span>In</span> <?php the_category(" "); ?></div>
                                <h3 class="media-heading"><a href="#"><?php the_title(); ?></a></h3>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00"><?php echo esc_html(get_the_date('j F Y')); ?></time></span>
                                    <span class="comment-link"><i class="fa fa-comment-o" aria-hidden="true"></i><?php comments_number("No Comment", "1 Comment", "% Comments"); ?></span>
                                </div>
                                <!-- /.Post meta -->
                            </div>
                            <p><?php echo esc_html(wp_trim_words(get_the_content(), 15)); ?></p>
                            <div class="element-block">
                                <a href="<?php the_permalink(); ?>" class="btn link-btn btn-outline btn-rounded"><?php echo esc_html_e("Reading &#8702;", "likha"); ?></a>
                                <!-- /.Post button -->
                                <div class="post_share">
                                    <a class="smedia facebook fa fa-facebook" href="#"></a>
                                    <a class="smedia twitter fa fa-twitter" href="#"></a>
                                    <a class="smedia googleplus fa fa-google-plus" href="#"></a>
                                </div>
                                <!-- /.Post social share -->
                            </div>
                        </div>
                    </div>
                </div>
               <?php endwhile; ?>
                <!-- /.End of media post -->
                <!--                            <div class="loadmore_block">
                                                <a href="#" class=""> Load More</a>
                                            </div>-->
                <!-- /.End of Load more -->

            </main>
            <!--<aside class="col-xs-12 col-sm-4 col-md-3 rightSidebar">


            </aside>-->
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12-col-xs-12">
                <div class="text-center">
                    <?php the_posts_pagination(array(
                        'screen_reader_text' => ' ',
                        'prev_text' => '&#8701;',
                        'next_text' => '&#8702;',
                        'mid_size' => 5,
                        'type' => 'list'
                    )); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.End of pagination -->
</div>


    <?php get_footer(); ?>

