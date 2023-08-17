<?php
/*
Template Name: Mẫu Trang Dịch Vụ
*/
get_header(); // Gọi phần header
?>

    <div class="service-event">
        <p>Test service event</p>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>
        <?php endwhile; endif; ?>
    </div>

<?php get_footer(); // Gọi phần footer ?>