<article class="grid_post grid_post_lg text-center">
    <figure>
        <a href="<?php the_permalink(); ?>" class="grid_image">
            <?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?>
        </a>
        <figcaption>
            <div class="post-cat"><span>In</span> <?php the_category(' '); ?></div>
            <div class="entry-meta">
                <span class="author"><i class="fa fa-user" aria-hidden="true"></i><?php the_author_posts_link(); ?></span>
                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00"><?php echo esc_html(get_the_date('j F Y')); ?></time></span>
                <span class="comment-link"><i class="fa fa-comment-o" aria-hidden="true"></i><?php comments_number("No Comment", "1 Comment", "% Comments"); ?></span>
            </div>
            <h3 class="grid_post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn link-btn btn-outline btn-rounded"><?php echo esc_html_e("Reading &#8702;", "likha"); ?></a>
            <!-- /.Post button -->
        </figcaption>
    </figure>
</article>