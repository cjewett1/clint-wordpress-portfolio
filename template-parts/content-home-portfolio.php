<?php
/**
 * Template part for creating the project which display on the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clinton-gorda-theme
 */

?>
<div class="project-flex-item" 
style="background-image: url(<?php the_field('home_project_image');?> ); ">
    <h4><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h4>
</div>
