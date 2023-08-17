<?php
/*
Template Name: Mẫu Trang Dịch Vụ
*/
get_header(); // Gọi phần header
?>

    <div class="service-production">
        <p>Test service production</p>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>
        <?php endwhile; endif; ?>
    </div>

<?php get_footer(); // Gọi phần footer ?>