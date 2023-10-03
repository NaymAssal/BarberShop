<?php get_header();?>

<article>
    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    <?php if(has_post_thumbnail()): ?>
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumb'); ?></a>
    <?php endif;?>
    <div class="meta-info">
        <p><?php esc_html_e('Posted in', 'wp-devs')?> <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p>
        <?php if(has_category()): ?>
            <p><?php esc_html_e('Categories', 'wp-devs')?>: <?php the_category(' '); ?></p>
        <?php endif; ?>
        <?php if(has_tag()): ?>
            <p><?php esc_html_e('Tags', 'wp-devs')?>: <?php the_tags('', ', '); ?></p>
        <?php endif;?>  
    </div>
    <?php the_excerpt(); ?>
</article>

<div class="hero">
    <h1>Lorem ipsum</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam veniam ratione nisi minima eaque porro pariatur beatae consequatur voluptatem quo explicabo non, mollitia aperiam nobis ipsum numquam doloribus sapiente illo!</p>
</div>

<div class="hero black">
<h1>Lorem ipsum</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam veniam ratione nisi minima eaque porro pariatur beatae consequatur voluptatem quo explicabo non, mollitia aperiam nobis ipsum numquam doloribus sapiente illo!</p>
</div>

<div class="hero">
<h1>Lorem ipsum</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam veniam ratione nisi minima eaque porro pariatur beatae consequatur voluptatem quo explicabo non, mollitia aperiam nobis ipsum numquam doloribus sapiente illo!</p>
</div>

<div class="hero black">
<h1>Lorem ipsum</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam veniam ratione nisi minima eaque porro pariatur beatae consequatur voluptatem quo explicabo non, mollitia aperiam nobis ipsum numquam doloribus sapiente illo!</p>
</div>

<?php get_footer();?>