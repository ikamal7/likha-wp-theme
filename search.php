<?php get_header(); ?>
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 mb_30">
                <h3>You searched for: <span class="highlight__text"><?php echo get_search_query(); ?></span> </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="author-post-content">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="grid_post text-center">
                            <figure>
                                <a href="<?php the_permalink(); ?>" class="grid_image">
                                    <?php the_post_thumbnail("large", array("class" => "img-responsive author-post")); ?>
                                </a>
                                <figcaption>
                                    <div class="post-cat"><span>In</span> <?php the_category(" "); ?></div>
                                    <div class="entry-meta">
                                    <span class="author"><i class="fa fa-user"
                                                            aria-hidden="true"></i><?php the_author_posts_link(); ?></span>
                                        <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time
                                                    datetime="<?php echo esc_html(get_the_date('j F Y')); ?>"><?php echo esc_html(get_the_date('j F Y')); ?></time></span>
                                        <span class="comment-link"><i class="fa fa-comment-o"
                                                                      aria-hidden="true"></i><?php comments_number("No Comment", "1 Comment", "% Comments"); ?></span>
                                    </div>
                                    <h4 class="grid_post_title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>"
                                       class="btn link-btn btn-outline btn-rounded"><?php _e("Reading &#8702;", "likha"); ?></a>
                                    <!-- /.Post button -->
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                    <!-- /.End of grid post -->
                <?php endwhile; ?>
            </div>
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
</div>

<?php get_footer(); ?>
