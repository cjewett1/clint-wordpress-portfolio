<?php
/**
 * The template to display archive pages for category types
 * 
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#category-php-tag-php-and-taxonomy-php
 * 
 * @package clinton-gorda-theme
 */

?>

<?php get_header(); ?>

<?php the_archive_title(); ?>

            <div class="all-projects-flex-container">
                <?php
                    $args = array(
                        'post_type'      => 'clints-projects',
                        'posts_per_page' => 15,
                        'order' => 'DESC',
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        get_template_part('template-parts/content', 'portfolio');
                    }?>
            </div>
<?php get_footer(); ?>