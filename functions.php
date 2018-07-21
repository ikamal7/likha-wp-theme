<?php

function likha_theme_supports()
{
    load_theme_textdomain("likha");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("post-formats", [
        "audio", "video", "gallery", "quote", 'image', "link", "aside",
    ]);
    add_theme_support("custom-logo");
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    //register nav menus
    register_nav_menu("primary", __("Primary menu", "likha"));
}

add_action("after_setup_theme", "likha_theme_supports");


function likha_assets_enqueue()
{

    wp_enqueue_style("bootstrap", get_template_directory_uri() . "/assets/css/bootstrap.min.css", null, "3.3.7", "all");
    wp_enqueue_style("animsition", get_template_directory_uri() . "/assets/css/animsition.min.css", null, "2.1", "all");
    wp_enqueue_style("font-awesome", get_template_directory_uri() . "/assets/css/font-awesome.min.css", null, "4.7", "all");
    wp_enqueue_style("themify-icons", get_template_directory_uri() . "/assets/themify-icons/themify-icons.css", null, "4.7", "all");
    wp_enqueue_style("bootsnav", get_template_directory_uri() . "/assets/css/bootsnav.css", null, "1.0", "all");
    //wp_enqueue_style("owl-carousel", get_template_directory_uri() . "/assets/owl-carousel/owl.carousel.css", null, "1.3.3", "all" );
    //wp_enqueue_style("owl-theme", get_template_directory_uri() . "/assets/owl-carousel/owl.theme.css", null, "1.3.3", "all" );
    wp_enqueue_style("owl-transitions", get_template_directory_uri() . "/assets/owl-carousel/owl.transitions.css", null, "1.3.3", "all");
    wp_enqueue_style("magnific-popup", get_template_directory_uri() . "/assets/css/magnific-popup.css", null, "1.0", "all");
    wp_enqueue_style("fluidbox", get_template_directory_uri() . "/assets/css/fluidbox.min.css", null, "1.0", "all");
    wp_enqueue_style("likhablog", get_template_directory_uri() . "/assets/css/style.css", null, "1.0", "all");

    wp_enqueue_style("likha-style", get_stylesheet_uri(), null, time());

    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/assets/js/bootstrap.min.js", array("jquery"), time(), true);
    wp_enqueue_script("animsition", get_template_directory_uri() . "/assets/js/animsition.min.js", array("jquery"), time(), true);
    wp_enqueue_script("bootsnav", get_template_directory_uri() . "/assets/js/bootsnav.js", array("jquery"), time(), true);

    if (is_author()) {

        wp_enqueue_script("macy", get_template_directory_uri() . "/assets/js/macy.js", array("jquery"), "1.0.2", true);
        wp_enqueue_script("custom-macy", get_template_directory_uri() . "/assets/js/custom-macy.js", array("jquery"), "1.0.0", true);
    }

    wp_enqueue_script("imagesloaded", get_template_directory_uri() . "/assets/js/imagesloaded.pkgd.min.js", array("jquery"), time(), true);
    wp_enqueue_script("ResizeSensor", get_template_directory_uri() . "/assets/js/ResizeSensor.min.js", array("jquery"), time(), true);
    wp_enqueue_script("theia-sticky-sidebar", get_template_directory_uri() . "/assets/js/theia-sticky-sidebar.min.js", array("jquery"), time(), true);
    wp_enqueue_script("magnific-popup", get_template_directory_uri() . "/assets/js/jquery.magnific-popup.min.js", array("jquery"), time(), true);
    wp_enqueue_script("owl-carousel", get_template_directory_uri() . "/assets/owl-carousel/owl.carousel.min.js", array("jquery"), time(), true);
    wp_enqueue_script("modernizr", get_template_directory_uri() . "/assets/js/modernizr.custom.js", array("jquery"), time(), true);
    wp_enqueue_script("gridrotator", get_template_directory_uri() . "/assets/js/jquery.gridrotator.min.js", array("jquery"), time(), true);
    wp_enqueue_script("parallax-background", get_template_directory_uri() . "/assets/js/parallax-background.min.js", array("jquery"), time(), true);
    wp_enqueue_script("simpleSocialShare", get_template_directory_uri() . "/assets/js/jquery.simpleSocialShare.min.js", array("jquery"), time(), true);
    wp_enqueue_script("fluidbox", get_template_directory_uri() . "/assets/js/jquery.fluidbox.min.js", array("jquery"), time(), true);
    wp_enqueue_script("retina", get_template_directory_uri() . "/assets/js/retina.min.js", array("jquery"), time(), true);
    wp_enqueue_script("shuffle", get_template_directory_uri() . "/assets/js/jquery.shuffle.min.js", array("jquery"), time(), true);
    wp_enqueue_script("readingTime", get_template_directory_uri() . "/assets/js/readingTime.min.js", array("jquery"), time(), true);

    wp_enqueue_script("likha-custom", get_template_directory_uri() . "/assets/js/custom.js", array("jquery"), time(), true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }


    /*$custom_css = '
                .title-shape-dark{
                        background: url('. get_template_directory_uri() .'/assets/img/shape-dark.png) 0 center repeat-x;
                }';
    wp_add_inline_style( 'likha-style', $custom_css );*/


}

add_action("wp_enqueue_scripts", "likha_assets_enqueue");

function likha_sidebar()
{
    register_sidebar(
        array(
            'name'          => __('Right sidebar', 'likha'),
            'id'            => 'right_sidebar',
            'description'   => __('Right Sidebar', 'likha'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="title-holder"><h3 class="title">',
            'after_title'   => '</h3><span class="title-shape title-shape-dark"></span></div>',
        )
    );
    register_sidebar(
        array(
            'name'          => __('Left sidebar', 'likha'),
            'id'            => 'left_sidebar',
            'description'   => __('Right Sidebar', 'likha'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<div class="title-holder"><h3 class="title">',
            'after_title'   => '</h3><span class="title-shape title-shape-dark"></span></div>',
        )
    );
}

add_action("widgets_init", "likha_sidebar");


function likha_search_highlight($text)
{
    if (is_search()) {
        $pattern = '/(' . join('|', explode(' ', get_search_query())) . ')/i';
        $text    = preg_replace($pattern, '<span class="highlight__text">\0</span>', $text);
    }

    return $text;
}

add_filter("the_title", "likha_search_highlight");
add_filter("the_excerpt", "likha_search_highlight");
add_filter("the_content", "likha_search_highlight");

function likha_comment_cb($comment, $args, $depth)
{
    $defaults = array('class' => 'media-object', 'force_display' => true);
    if ('div' != $args['style']) {
        $tag       = 'div';
        $add_below = 'div-comment';
    } else {
        $tag       = 'li';
        $add_below = 'li-comment';
    }
    ?>
    <<?php echo esc_html($tag); ?> <?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <div class="media">
        <div class="media-left">
            <?php if (0 != $args['avatar_size']) {
                echo get_avatar($comment, $args['avatar_size'], $defaults);
            } ?>
        </div>
        <div class="media-body">
            <h4 class="media-heading">
                <?php
                printf(__('%1$s<small>Posted on %2$s</small>', 'likha'), get_comment_author_link(), get_comment_date());
                edit_comment_link(__('Edit', 'likha'), '<small>', '</small>');
                ?>

            </h4>

            <?php
            comment_text();
            ?>
            <?php
            $comments_reply_args = array(
                'add_below' => $add_below,
                'depth'     => $depth,
                'max_depth' => $args['max_depth'],
            );
            comment_reply_link(array_merge($args, $comments_reply_args)); ?>
        </div>
    </div>
    </<?php echo esc_html($tag); ?>>

    <?php
}







