<?php
$likha_column = "col-md-7";
if(!is_active_sidebar("left_sidebar") && !is_active_sidebar("right_sidebar")){
    $likha_column = "col-md-12";
}
if($likha_column == "col-md-12") : ?>
<div class="col-md-6 no-gutter">
    <?php endif; ?>
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
                <h3 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="entry-meta">
                    <span class="author"><i class="fa fa-user" aria-hidden="true"></i><?php the_author_posts_link(); ?></span>
                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time
                                datetime="<?php echo esc_html(get_the_date('j F Y')); ?>"><?php echo esc_html(get_the_date('j F Y')); ?></time></span>
                    <span class="comment-link"><i class="fa fa-comment-o" aria-hidden="true"></i><?php comments_number("No Comment", "1 Comment", "% Comments"); ?></span>
                </div>
                <!-- /.Post meta -->
            </div>
            <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 10)); ?></p>
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
    <?php if($likha_column == "col-md-12") : ?>
    </div>
        <?php endif; ?>
<!-- /.End of media post -->
