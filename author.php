<?php get_header(); ?>
<div class="profile-header">
    <div id="author-header">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/author-header.jpg" alt="">
    </div>
    <div class="container text-center">
        <div class="author-avatar">
            <?php echo get_avatar(get_the_author_meta("ID"), "300"); ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <h2 class="author-name"><?php echo get_the_author_meta("display_name"); ?></h2>
                    <p><?php echo get_the_author_meta("description"); ?></p>

                    <div class="author-social-link">
                        <a target="_blank" class="social-link" href="<?php echo esc_url(get_the_author_meta("user_url")); ?>"><i class="fa fa-globe"></i></a>
                        <a class="social-link" href="mailto:<?php echo get_the_author_meta("user_email"); ?>"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="clearfix"></div>-->
    </div>
</div>
<!-- /.End of profile header -->
<div class="page-content">
    <div class="container">
        <div class="author-post-content">
            <?php while (have_posts()) : the_post(); ?>
                <article class="grid_post text-center">
                    <figure>
                        <a href="<?php the_permalink(); ?>" class="grid_image">
                            <?php the_post_thumbnail("large", array("class" => "img-responsive author-post")); ?>
                        </a>
                        <figcaption>
                            <div class="post-cat"><span>In</span> <?php the_category(" "); ?></div>
                            <div class="entry-meta">
                                <span class="author"><i class="fa fa-user" aria-hidden="true"></i><?php the_author_posts_link(); ?></span>
                                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="<?php echo esc_html(get_the_date('j F Y')); ?>"><?php echo esc_html(get_the_date('j F Y')); ?></time></span>
                                <span class="comment-link"><i class="fa fa-comment-o" aria-hidden="true"></i><?php comments_number("No Comment", "1 Comment", "% Comments"); ?></span>
                            </div>
                            <h4 class="grid_post_title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 10)); ?></p>
                            <a href="<?php the_permalink(); ?>"
                               class="btn link-btn btn-outline btn-rounded"><?php _e("Reading &#8702;", "likha"); ?></a>
                            <!-- /.Post button -->
                        </figcaption>
                    </figure>
                </article>
                <!-- /.End of grid post -->
            <?php endwhile; ?>
        </div>
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


<?php get_footer(); ?>
