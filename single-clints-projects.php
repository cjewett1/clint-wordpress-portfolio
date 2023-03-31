<?php
/***
* The template for displaying individual blog posts (full article/blog post).
*
* @package clinton-gorda-theme
* @since 1.0.0
*/
//display header
get_header();
?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <article <?php post_class();?> id="post-<?php the_ID();?>" >

        <div class="individual-project-heading" ><?php the_title('<h1 class="entry-title">', '</h1>'); ?></div>

            <div class="individual-project-flex-container">

                <div class="project-field">
                         <?php the_field('project_details'); ?>

                         <div>
                        <?php
                         $link = get_field('link_one');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                         </div>

                        <div>
                        <?php 
                        $link = get_field('link_two');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                        </div>

                        
                </div>

                <div class="individual-project-image">
                    
                <?php
                    $image = get_field('project_image');
                    ?>
                    <?php if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['sizes']['project-single-size']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="project-img">
                    <?php endif ?>
                </div>

                <div class="extra-image">
                    <?php
                        $image = get_field('extra_image');
                        ?>
                        <?php if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['sizes']['project-single-size']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="project-img">
                        <?php endif ?>
                </div>
            </div>
    </article>
    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>