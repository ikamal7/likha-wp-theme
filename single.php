<?php get_header(); ?>
<div class="parallax page_header"  data-parallax-bg-image="<?php the_post_thumbnail_url('full'); ?>" data-parallax-direction="left">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3><?php the_title(); ?></h3>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Post Formats</a></li>
                    <li class="active">Post</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.End of page header -->
<div class=" page-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="details-body">
                    <?php while(have_posts()) : the_post(); ?>
                    <div class="post_details stickydetails">
                        <header class="details-header">
                            <div class="post-cat"><?php the_category(" "); ?></div>
                            <h2><?php the_title(); ?></h2>
                            <div class="element-block">
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00"><?php echo esc_html(get_the_date('j F Y')); ?></time></span>
                                    <span class="comment-link"><i class="fa fa-comment-o" aria-hidden="true"></i><?php comments_number("No Comment", "1 Comment", "% Comments"); ?></span>
                                </div>
<!--                                <div class="reading-time"><span class="eta"></span> (<span class="words"></span> words)</div>-->
                            </div>
                        </header>
                        <figure>
                            <?php the_post_thumbnail('large', ['class' => 'aligncenter img-responsive']); ?>
                        </figure>
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                    <!-- /.End of post details -->
                    <div class="stickyshare">
                        <aside class="share_article">
                            <a href="//www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" class="boxed_icon facebook" data-share-url="<?php echo esc_url(site_url()); ?>" data-share-network="facebook" data-share-text="Share this awesome link on Facebook" data-share-title="Facebook Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-facebook"></i></a>
                            <a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" class="boxed_icon twitter" data-share-url="<?php echo esc_url(site_url()); ?>" data-share-network="twitter" data-share-text="Share this awesome link on Twitter" data-share-title="Twitter Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-twitter"></i></a>
                            <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>"  class="boxed_icon google-plus" data-share-url="<?php echo esc_url(site_url()); ?>" data-share-network="googleplus" data-share-text="Share this awesome link on Google+" data-share-title="Google+ Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-google-plus"></i></a>
                            <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>" class="boxed_icon pinterest" data-share-url="<?php echo esc_url(site_url()); ?>" data-share-network="pinterest" data-share-text="Share this awesome link on Pinterest" data-share-title="Pinterest Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-pinterest-p"></i></a>
                            <a href="#comments-section" class="boxed_icon comment"><i class="fa fa-comments"></i>
                                <span><?php comments_number('0', '1', '%'); ?></span></a>
                        </aside>
                    </div>
                    <!-- /End of share icon -->
                    <?php next_post_link("Next Post"); ?>
                    <?php previous_post_link("Previous Post"); ?>
                </div>
                <!-- /.End if details body -->
                <aside class="about-author">
                    <h3>About The Author</h3>
                    <div class="author-bio">
                        <div class="author-img">
                            <?php echo get_avatar(get_the_author_meta("ID"), "150"); ?>
                        </div>
                        <!-- /. Author-img -->
                        <div class="author-info">
                            <h4 class="author-name"><?php echo get_the_author_meta("display_name"); ?></h4>
                            <p><?php echo get_the_author_meta("description"); ?></p>
                            <p>
                                <?php if(get_the_author_meta("user_url") && get_the_author_meta("user_email") ) : ?>
                                <a target="_blank" class="social-link" href="<?php echo esc_url(get_the_author_meta("user_url")); ?>"><i class="fa fa-globe"></i></a>
                                <a class="social-link" href="mailto:<?php echo get_the_author_meta("user_email"); ?>"><i class="fa fa-envelope"></i></a>
                                <?php endif; ?>
                            </p>
                        </div>
                        <!-- /. Author-info -->
                    </div>
                    <!-- /.End of author bio -->
                </aside>

                <!-- /.End of  related post -->
                <div class="comments" id="comments-section">
                    <?php comments_template(); ?>
                    <!--<div class="media">
                        <div class="media-left">
                            <img src="assets/img/img_avatar1.png" alt="" class="media-object">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Jahangir Alom <small>Posted on February 19, 2016</small></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="btn link-btn btn-rounded">Reply ⇾</a>
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/img/img_avatar2.png" alt="Demo Avatar Jane Doe" class="media-object">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Jane Doe <small>Posted on February 20, 2016</small></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <a href="#" class="btn link-btn btn-rounded">Reply ⇾</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img src="assets/img/img_avatar1.png" alt="" class="media-object">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="btn link-btn btn-rounded">Reply ⇾</a>
                        </div>
                    </div>-->
                </div>
                <!-- /.End of comment -->
                <!--<div class="comment_form">
                    <h3 class="replay_title">Leave a Reply </h3>
                    <div class="form-group">
                        <textarea class="form-control" id="textarea" rows="5"></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name *</label>
                        <div class="col-sm-5">
                            <input class="form-control" id="name2" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email *</label>
                        <div class="col-sm-5">
                            <input class="form-control" id="email2" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="website" class="col-sm-2 col-form-label">Website</label>
                        <div class="col-sm-5">
                            <input class="form-control" id="website" type="text">
                        </div>
                    </div>
                    <a href="#" class="btn link-btn">Post Comment ⇾</a>
                </div>-->
                <!-- /.End of comment content -->
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>

