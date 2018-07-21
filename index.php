<?php 
$likha_column = "col-md-7";
$likha_left_column = "col-md-2";
if(!is_active_sidebar("left_sidebar") && !is_active_sidebar("right_sidebar")){
    $likha_column = "col-md-12";
}elseif (!is_active_sidebar("left_sidebar")){
    $likha_column = "col-md-9";
}elseif (!is_active_sidebar("right_sidebar")){
    $likha_column = "col-md-9";
    $likha_left_column = "col-md-3";
}
    
?>

<?php get_header(); ?>

<div class="news-masonry">
    <div class="container">
        <div class="row mas-m">
            <?php
            $i  = 0;
            $j  = 0;
            $pp = new WP_Query([
                'posts_per_page'      => 5,
                'ignore_sticky_posts' => 1,
                'orderby'             => 'comment_count'
            ]);
            while ($pp->have_posts()): $pp->the_post();
                if (0 == $i % 5) {
                    $j = 0;
                    get_template_part("template-parts/pp-big");
                } else {
                    if (1 == $j) { ?>
                        <!-- /.End of masonry item -->
                        <div class="col-sm-6 mas-p">
                        <div class="row mas-m">
                    <?php }
                    get_template_part("template-parts/pp-small");
                    if (4 == $j) { ?>
                        </div>
                        </div>
                    <?php }
                }
                $i++;
                $j++;
                ?>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<!-- /.End of news masonry -->
<div class="page-content">
    <div class="container">
        <div class="row">
            <?php if(is_active_sidebar("left_sidebar")) : ?>
            <div class="hidden-xs hidden-sm <?php echo esc_attr($likha_left_column); ?> leftSidebar">
                <div class="trending-post">
                    <div class="title-holder">
                        <h3 class="title">Trending</h3>
                        <span class="title-shape title-shape-dark"></span>
                    </div>
                    <!--  /.End of title -->
                    <div class="single-post">
                        <div class="entry-meta">
                            <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                        </div>
                        <h4><a href="#">Ut ac <em><strong>justo ut nulla</strong></em> semper imperdiet.</a></h4>
                    </div>
                    <!-- /.End of single post-->
                    <div class="single-post">
                        <div class="entry-meta">
                            <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                        </div>
                        <h4><a href="#">Morbi at libero at <em>lectus</em> congue.</a></h4>
                    </div>
                    <!-- /.End of single post-->
                    <div class="single-post">
                        <div class="entry-meta">
                            <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                        </div>
                        <h4><a href="#">Etiam vel quam scelerisque, dictum.</a></h4>
                    </div>
                    <!-- /.End of single post-->
                    <div class="single-post">
                        <div class="entry-meta">
                            <span class="comment-link"><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                        </div>
                        <h4><a href="#">Ut ac justo ut nulla semper imperdiet.</a></h4>
                    </div>
                    <!-- /.End of single post-->
                </div>
                <!-- /.End of trending post -->
                <div class="banner-content">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ad-180x480-1.png"
                         class="img-responsive" alt="">
                </div>
                <!-- /.End of banner content -->
            </div>
            <?php endif; ?>

            <main class="col-xs-12 col-sm-8 <?php echo esc_attr($likha_column); ?> content p_r_40">
                <?php
                $i = 0;
                while (have_posts()) : the_post();
                    if (0 == $i) {
                        get_template_part("template-parts/blog-full");
                    } else {
                        get_template_part("template-parts/blog-grid");
                    }


                    $i++;
                endwhile;
                ?>
                <div class="text-center">
                    <?php the_posts_pagination(array(
                        'screen_reader_text' => ' ',
                        'prev_text' => '&#8701;',
                        'next_text' => '&#8702;',
                        'mid_size' => 5,
                        'type' => 'list'
                    )); ?>
                </div>

                <!-- /.End of pagination -->
            </main>

            <?php if(is_active_sidebar("right_sidebar")) : ?>
            <aside class="col-xs-12 col-sm-4 col-md-3 rightSidebar">
                <?php if(is_active_sidebar("right_sidebar")){
                    dynamic_sidebar("right_sidebar");
                } ?>
            </aside>
            <?php endif; ?>
        </div>
    </div>
</div>


    <?php get_footer(); ?>
