<?php

    // template for displaying projects

    // all other pages will default to page.php. These pages are useful in that the client cannot change the content on these pages. The content is hard-coded therefore un-editable.

    //Please note that this is a wordpress construct of pages and that other 'pages' on your wordpress site may use a different template.

    //@link https://developer.wordpress.org/themes/basics/template-hierarchy/

    //@package clinton-gorda-theme

?>

<?php get_header(); ?>

<main>
    <section class="all-projects">

            <div class="project-heading-background">
                <h2 class="project-page-heading"><?php the_field('project_page_heading');?></h2>
            </div>

            <div class="all-projects-flex-container" >
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
                    <!-- The loop content is in the services template page. -->
            </div>
        
    </section>
</main>

<?php get_footer(); ?>