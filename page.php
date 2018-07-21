<?php get_header(); ?>
<div class="page-content">
    <div class="container">
        <?php while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
