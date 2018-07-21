<div class="col-xs-6 col-sm-6 mas-p">
    <div class="masonry-slide1">
        <div class="item mas-m-b">
            <div class="mas-item masonry-sm">
                <a href="#"><figure><?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?></figure></a>
                <div class="mas-text">
                    <div class="post-cat"><?php the_category(' '); ?></div>
                    <h2 class="mas-title small-font"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="mas-details">
                        <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 10)); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more"><?php _e('Read More &#8702;', 'likha'); ?></a>
                    </div>
                </div>
            </div>
            <!-- /.End of masonry item -->
        </div>
    </div>
</div>