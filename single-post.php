<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php if (has_post_thumbnail()) : ?>
        <p><img src="<?php the_post_thumbnail_url('card-header'); ?>" alt="<?php the_title(); ?>"></p>
    <?php endif; ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>